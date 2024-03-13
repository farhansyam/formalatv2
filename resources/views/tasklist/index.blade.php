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
            <h4 class="card-title mb-0 text-center">Tasklist Default</h4>
          </div>
          <script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>
          <div class="card-body">

            <table class="table table-striped table-hover table-bordered table no-wrap tablesaw-columntoggle" data-tablesaw-mode="columntoggle" id="example">
              <thead>
                <tr>


                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    No
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    Tasklist
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
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Ac Split</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Floor Standing</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Ac Cassette</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Split Duct</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Cooled Water Chiller</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">AHUP</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">PAC</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Cold Storage</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Cooling Unit & AC Panel</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Mini Chiller</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Evaporative Air Cooler</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">AHU</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Cooling tower</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Humidifier</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Dehumidifier</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">FCU (Fan Cooling Unit)</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Exhaust Fan</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Pompa</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Spot Cooling</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Water Mist</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Chiller Centrifugal</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Air Cooled Chiller</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Centralize Chiller</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Ultrasonic Humidifier</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Piping & Accs</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Panel SCR</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">ATCS</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>{{$no++}}</td>

                  <td class="tablesaw-priority-3">Lakos Filter</td>
                  <td class="tablesaw-priority-1"><a href="" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
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