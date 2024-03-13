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
            <h4 class="card-title mb-0 text-center">kapasitas</h4>
          </div>
          <script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>
          <div class="card-body">
            <a href="{{route('kapasitas.create')}}">
              <button class="btn btn-primary">Tambah</button></a><br><br>
            <table class="table table-striped table-hover table-bordered table no-wrap tablesaw-columntoggle" data-tablesaw-mode="columntoggle" id="example">
              <thead>
                <tr>


                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    No
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    kapasitas
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    Satuan
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="1" class="border tablesaw-priority-1">
                    <abbr title="Rotten Tomato Rating">Option</abbr>
                  </th>
                </tr>
              </thead>
              <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($kapasitas as $data)
                <tr>
                  <td>{{$no++}}</td>
             
                  <td class="tablesaw-priority-3">{{$data->kapasitas}}</td>
                  <td class="tablesaw-priority-3">{{$data->satuan}}</td>
                  <td class="tablesaw-priority-1">
                    <div style="display: flex; align-items: center;">
                      <a href="{{ route('kapasitas.edit', $data->id) }}" style="text-decoration: none;">
                        <button class="btn btn-warning">Edit</button>
                      </a>

                      <form action="{{ route('kapasitas.destroy', $data->id) }}" method="POST" style="margin-left: 10px;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                      </form>
                    </div>


                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
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