@extends('layouts.back2')
<link href="{{asset('calendar/main.min.css')}}" rel='stylesheet' />
<script src="{{asset('calendar/main.min.js')}}"></script>
<script src="{{asset('calendar/moment.js')}}"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    $(document).ready(function () {
        // Memuat data dari endpoint Laravel
        $.ajax({
            url: "{{ route('schedulegetprogres') }}", // Endpoint untuk mendapatkan data event
            dataType: 'json',
            success: function (response) {
                // Jika data berhasil diambil
                if (response.status) {
                    var calendarEl = document.getElementById('calendar'); // Elemen div untuk kalender

                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        initialView: 'dayGridMonth', // Tipe tampilan default
                        events: response.data.map(event => {
                            // Menambahkan properti URL dinamis ke setiap event
                            return {
                                ...event, // Spread operator untuk menyalin properti event asli
                                url: `/equipment/${event.numeric_id}` // Tautan dinamis berdasarkan ID
                            };
                        }),
                        eventClick: function (info) {
                            // Saat event diklik, buka URL
                            if (info.event.url) {
                                window.open(info.event.url, '_self'); // Buka di tab yang sama
                                return false; // Mencegah navigasi default
                            }
                        },
                        headerToolbar: {
                            left: 'prev,next today', // Tombol di sebelah kiri
                            center: 'title',         // Judul kalender di tengah
                            right: 'dayGridMonth' // Tampilan berbeda di sebelah kanan
                        },
                        themeSystem: 'bootstrap', // Gunakan tema Bootstrap
                        editable: false, // Nonaktifkan drag & drop
                        droppable: false // Nonaktifkan fitur drag dari luar kalender
                    });

                    calendar.render(); // Render kalender
                } else {
                    console.error(response.msg); // Tampilkan error jika data kosong
                }
            },
            error: function (xhr, status, error) {
                // Jika AJAX gagal, tampilkan pesan error di console
                console.error("Gagal memuat data:", error);
            }
        });
    });
});

</script>

@section('content')
<!-- --------------------------------------------------- -->
<!-- Header End -->
<!-- --------------------------------------------------- -->
<div class="container-fluid">
  <!-- --------------------------------------------------- -->
  @if(auth()->user()->role_sipm != 'team_lead' || auth()->user()->role_sipm != 'customer')
  <div class="d-flex align-items-center mb-">
  <a href="{{route('schedule.create')}}" class="btn btn-primary">Add Schedule</a>
  <a href="{{route('schedulee.all')}}" class="btn btn-secondary">All</a>

  <a href="{{route('schedule.index')}}" class="btn btn-Danger">Pending</a>
  <a href="{{route('schedulee.progres')}}" class="btn btn-warning">In Progress</a>
  <a href="{{route('schedulee.complete')}}" class="btn btn-success">Completed</a>
 <select id="statusFilter" class="form-select w-auto ms-2" onchange="redirectToRoute(this)">
    <option value="{{ route('schedulesession', 'all') }}" {{ session('site') === 'all' ? 'selected' : '' }}>-- All Site --</option>
    @foreach ($area as $data)
        <option value="{{ route('schedulesession', $data->area) }}" {{ session('site') === $data->area ? 'selected' : '' }}>
            {{ $data->area }}
        </option>
    @endforeach
</select>
  <script>
  function redirectToRoute(selectElement) {
    const selectedValue = selectElement.value;
    if (selectedValue) {
      window.location.href = selectedValue;
    }
  }
</script>
  </div>
  @endif
  <br>
  <br>
  <div class="card">
    <div>
      <div class="row gx-0">
        <div class="col-lg-12">
          <div class="p-4 calender-sidebar app-calendar">
            <div id="calendar"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- BEGIN MODAL -->
  <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="eventModalLabel">
            Add / Edit Event
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="">
                <label class="form-label">Event Title</label>
                <input id="event-title" type="text" class="form-control" />
              </div>
            </div>
            <div class="col-md-12 mt-4">
              <div><label class="form-label">Event Color</label></div>
              <div class="d-flex">
                <div class="n-chk">
                  <div class="form-check form-check-primary form-check-inline">
                    <input class="form-check-input" type="radio" name="event-level" value="Danger" id="modalDanger" />
                    <label class="form-check-label" for="modalDanger">Danger</label>
                  </div>
                </div>
                <div class="n-chk">
                  <div class="form-check form-check-warning form-check-inline">
                    <input class="form-check-input" type="radio" name="event-level" value="Success" id="modalSuccess" />
                    <label class="form-check-label" for="modalSuccess">Success</label>
                  </div>
                </div>
                <div class="n-chk">
                  <div class="form-check form-check-success form-check-inline">
                    <input class="form-check-input" type="radio" name="event-level" value="Primary" id="modalPrimary" />
                    <label class="form-check-label" for="modalPrimary">Primary</label>
                  </div>
                </div>
                <div class="n-chk">
                  <div class="form-check form-check-danger form-check-inline">
                    <input class="form-check-input" type="radio" name="event-level" value="Warning" id="modalWarning" />
                    <label class="form-check-label" for="modalWarning">Warning</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12 d-none">
              <div class="">
                <label class="form-label">Enter Start Date</label>
                <input id="event-start-date" type="text" class="form-control" />
              </div>
            </div>

            <div class="col-md-12 d-none">
              <div class="">
                <label class="form-label">Enter End Date</label>
                <input id="event-end-date" type="text" class="form-control" />
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn" data-bs-dismiss="modal">
            Close
          </button>
          <button type="button" class="btn btn-success btn-update-event" data-fc-event-public-id="">
            Update changes
          </button>
          <button type="button" class="btn btn-primary btn-add-event">
            Add Event
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- END MODAL -->
</div>

</div>
<script>

</script>
@endsection