@extends('layouts.back2')
@section('content')
<!-- --------------------------------------------------- -->
<!-- Header End -->
<!-- --------------------------------------------------- -->
<div class="container-fluid">
  <!-- --------------------------------------------------- -->
  <!--  Form Inputs Grid Start -->
  <!-- --------------------------------------------------- -->
  <section>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="border-bottom title-part-padding">
            <h4 class="card-title mb-0 text-center">Part Proposal</h4>
          </div>
          <script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>
          <div class="card-body">
        
            <!-- Filter Bulan dan Site -->
<div class="d-flex mb-3">
  <!-- Filter Bulan -->
  <select id="monthFilter" class="form-select me-2" style="width: auto;">
    <option value="">Filter Bulan (Last TS Date)</option>
    @foreach (range(1, 12) as $month)
      <option value="{{ $month }}">{{ DateTime::createFromFormat('!m', $month)->format('F') }}</option>
    @endforeach
  </select>

  <!-- Filter Site -->
  <select id="siteFilter" class="form-select" style="width: auto;">
    <option value="">Filter Site</option>
    @foreach ($area as $site) <!-- Gantilah dengan data site yang sesuai -->
      <option value="{{ $site->area }}">{{ $site->area }}</option>
    @endforeach
  </select>
</div>

<!-- Tabel -->
<table class="table table-striped table-hover table-bordered table no-wrap tablesaw-columntoggle" data-tablesaw-mode="columntoggle" id="example">
  <thead>
    <tr>
      <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">No</th>
      <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">Id</th>
      <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">Jenis</th>
      <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">Area Site</th>
      <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">Site</th>
      <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">Room</th>
      <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">Tanggal Submit Form</th>
      <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="1" class="border tablesaw-priority-1">Jumlah</th>
      <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="1" class="border tablesaw-priority-1">Priority</th>
      <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="1" class="border tablesaw-priority-1">Status</th>
      <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="1" class="border tablesaw-priority-1">Option</th>
    </tr>
  </thead>
  <tbody>
    @php $no = 1; @endphp
    @foreach ($history as $data)
      <tr>
        <td>{{$no++}}</td>
        <td>id</td>
        <td class="tablesaw-priority-3">jenis</td>
        <td class="tablesaw-priority-3">{{$data->equipment1()->site}}</td>
        <td class="tablesaw-priority-3">{{$data->equipment1()->area}}</td>
        <td class="tablesaw-priority-3">{{$data->equipment1()->room}}</td>
        <td class="tablesaw-priority-3">{{ \Carbon\Carbon::parse($data->created_at)->format('d F Y') }}</td>
        <td class="tablesaw-priority-3">{{$data->listCount}}</td>
        <td class="tablesaw-priority-3">{{$data->priority}}</td>
        <td class="tablesaw-priority-3">{{$data->status}}</td>
        <td class="tablesaw-priority-1">
          <div style="display: flex; align-items: center;">
            <a href="{{ route('part.show', $data->id_act) }}" style="text-decoration: none;">
              <button class="btn btn-success">Detail Part Proposal</button>
            </a>
            <a href=" {{ route('troubleshoot.edit', $data->id) }}" class="" style="margin-right: 10px;">
              <button class="badge bg-warning">Edit</button>
            </a>
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
      const site = document.getElementById('siteFilter').value.toLowerCase() || '';

      document.querySelectorAll('#example tbody tr').forEach(row => {
        const lastTSDate = row.children[6].textContent; // Mengambil data dari kolom "Tanggal Submit Form"
        const tsMonth = new Date(lastTSDate).getMonth() + 1;

        const siteText = row.children[4].textContent.toLowerCase(); // Mengambil data dari kolom "Area Site"
        row.style.display = 
          (month === '' || tsMonth == month) &&
          (site === '' || siteText.includes(site))
          ? '' : 'none';
      });
    };

    document.getElementById('monthFilter').addEventListener('change', filterRows);
    document.getElementById('siteFilter').addEventListener('change', filterRows);
  });
</script>

          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- --------------------------------------------------- -->
  <!--  Form Inputs Grid End -->
  <!-- --------------------------------------------------- -->
</div>
</div>

</div>

@endsection