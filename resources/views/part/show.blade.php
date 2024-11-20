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
            <h4 class="card-title mb-0 text-center">Detail Part Proposal</h4>
          </div>
          <script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>
          <div class="card-body">
            <h1>Status :  @if ($parts[0]->status == '0')
              Open</h1>
                    <a href="{{ route('ts.create', ['id' => $parts[0]->id_eq, 'jenis' => 'parts','ids' => $parts[0]->id] ) }}" type="button" class="btn btn-danger">
                          Form TS
                        </a>
              @else
                  <h1>Close</h1>
                    <a href=" {{ route('troubleshoot.show', $parts[0]->status) }}" class="" style="margin-right: 10px;"><button class="badge bg-primary">Detail TS</button></a>
            @endif
            <table class="table table-striped table-hover table-bordered table no-wrap tablesaw-columntoggle" data-tablesaw-mode="columntoggle" id="example">
              <thead>
                <tr>


                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    No
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    Deskripsi
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    Model part
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    QTY
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    Keterangan
                  </th>
                </tr>
              </thead>
              <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($parts as $data)
                <tr>
                  <td>{{$no++}}</td>
                  <td class="tablesaw-priority-3">{{$data->deskripsilist}}</td>
                  <td class="tablesaw-priority-3">{{$data->modelpart}}</td>
                  <td class="tablesaw-priority-3">{{$data->qty}}</td>
                  <td class="tablesaw-priority-3">{{$data->keterangan}}</td>
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