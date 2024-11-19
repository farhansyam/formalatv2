@extends('layouts.back2')

@section('content')
<div class="container-fluid">
  <!-- Form Inputs Grid -->
  <section>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="border-bottom title-part-padding">
            <h4 class="card-title mb-0 text-center">Equipment</h4>
          </div>
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              @if (auth()->user()->role_sipm != 'user')
                <a href="{{ route('equipment.create') }}" class="me-2">
                  <button class="btn btn-primary">Tambah</button>
                </a>
                <a href="{{ route('import.form') }}" class="me-2">
                  <button class="btn btn-success">Import Excel</button>
                </a>
              @endif

              <!-- Filter Bulan -->
              <select id="monthFilter" class="form-select me-2" style="width: auto;">
                <option value="">Filter Bulan (Last TS Date)</option>
                @foreach (range(1, 12) as $month)
                  <option value="{{ $month }}">{{ DateTime::createFromFormat('!m', $month)->format('F') }}</option>
                @endforeach
              </select>

              @if(auth()->user()->role_sipm != 'user')
              <!-- Filter Site -->
              <select id="roomFilter" class="form-select" style="width: auto;">
                <option value="">Filter Site</option>
                @foreach ($area as $data)
                  <option value="{{ $data->site }}">{{ $data->site }}</option>
                @endforeach
              </select>
              @endif
            </div>

            <table class="table table-striped table-hover table-bordered mt-4" id="example">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Id</th>
                  <th>Jenis</th>
                  <th>Kapasitas (PK)</th>
                  <th>Site</th>
                  <th>Customer</th>
                  <th>Last PM Date</th>
                  <th>Last TS Date</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($equipment as $index => $data)
                <tr>
                  <td>{{ $index + 1 }}</td>
                  <td>
                    {{ strtoupper(substr(str_replace(' ', '', $jenis[$data->jenis] ?? ''), 0, 3) . $data->kode_room . sprintf('%05d', $data->id)) }}
                  </td>
                  <td>{{ $jenis[$data->jenis] ?? '-' }}</td>
                  <td>{{ $data->kapasitas }}</td>
                  <td>{{ $data->site }}</td>
                  <td>{{ $data->customer }}</td>
                  <td>{{ $data->update_pm }}</td>
                  <td>{{ $data->update_ts }}</td>
                  <td>
                    <div class="d-flex gap-2">
                      <a href="{{ route('equipment.show', $data->id) }}" class="btn btn-success">Detail</a>
                      <a href="{{ route('equipment.print', $data->id) }}" target="_blank" class="btn btn-warning">Print</a>
                      @if (auth()->user()->akses != 3)
                      <a href="{{ route('equipment.edit', $data->id) }}" class="btn btn-info">Edit</a>
                      @endif
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>

            <script>
              document.addEventListener('DOMContentLoaded', function () {
                const filterRows = () => {
                  const month = document.getElementById('monthFilter').value;
                  const room = document.getElementById('roomFilter')?.value.toLowerCase() || '';
                  document.querySelectorAll('#example tbody tr').forEach(row => {
                    const lastTSDate = row.children[7].textContent; // Mengambil data dari kolom "Last TS Date"
                    const tsMonth = new Date(lastTSDate).getMonth() + 1;

                    const roomText = row.children[4].textContent.toLowerCase();
                    row.style.display = 
                      (month === '' || tsMonth == month) &&
                      (room === '' || roomText.includes(room))
                      ? '' : 'none';
                  });
                };

                document.getElementById('monthFilter').addEventListener('change', filterRows);
                document.getElementById('roomFilter')?.addEventListener('change', filterRows);
              });
            </script>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
