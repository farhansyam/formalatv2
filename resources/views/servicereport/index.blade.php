@extends('layouts.back')
@section('content')
      <!-- --------------------------------------------------- -->
      <!-- Header End -->
      <!-- --------------------------------------------------- -->
      <div class="container-fluid">
        <!-- --------------------------------------------------- -->
        <!--  Form Inputs Grid Start -->
        <!-- --------------------------------------------------- -->
        <div class="card bg-light-info shadow-none position-relative overflow-hidden" style="height: ;">
          <div class="card-body px-4 py-3">
            <div class="row align-items-center">
              <img src="../../dist/images/breadcrumb/Capture.PNG" alt="" class="img-fluid mb-n4">
            </div>
          </div>
        </div>
        <section>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0 text-center">Service Report Troubleshoot / Corective</h4>
                </div>
                <script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>
                <div class="card-body">
                  <a href="{{route('troubleshoot.create')}}">
                    <button class="btn btn-primary">Tambah</button></a><br><br>
                  <table class="table table-striped table-hover table-bordered table no-wrap tablesaw-columntoggle" data-tablesaw-mode="columntoggle" id="tablesaw-1386">
                    <thead>
                      <tr>


                        <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                          No
                        </th>
                        <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                          Id Form
                        </th>
                        <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                          Customer
                        </th>
                        <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                          Tanggal Survey
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
                      @foreach ($troubleshoot as $data)
                      <tr>
                        <td>{{$no++}}</td>
                        <td class="tablesaw-priority-3">
                          {{$data->id}}
                        </td>
                        <td class="tablesaw-priority-3">{{$data->customer}}</td>
                        <td class="tablesaw-priority-2">{{$data->tanggal_survey}}</td>
                        <td class="tablesaw-priority-1">
                          <a href="{{route('troubleshoot.show',$data->id)}}">
                            <button class="btn btn-success">Detail</button>
                            <a href="{{route('formberitaacara.destroy',$data->id)}}">
                              <button class="btn btn-danger">Hapus</button>
                            </a>

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