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
                        <h4 class="card-title mb-0 text-center">Task List FCU (Fan Cooling Unit)</h4>
                    </div>
                    <form action="{{ route('fcuu.store') }}" method="POST">
                        @csrf
                        <table class="table table-bordered" id="personelTeamTable">
                            <thead>
                                <h5 class="text-center" style="background-color: black;color:white">Spesifikasi Unit</h5>

                                <tr>
                                    <th class="text-center">Unit 1</th>
                                    <th class="text-center">Unit 2</th>
                                    <th class="text-center">Unit 3</th>
                                </tr>
                            </thead>
                            <tbody>

                                <input type="hidden" required name="id" value="{{ $id }}">
                                <tr>
                                    @foreach (explode(',',$fcu->q1) as $val)
                                    <td>
                                        <p>Lokasi :</p><input disabled type="text" class="form-control text-center" required name="q1[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    @foreach (explode(',',$fcu->q2) as $val)
                                    <td>
                                        <p>Code Unit :</p><input disabled type="text" class="form-control text-center" required name="q2[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    @foreach (explode(',',$fcu->q3) as $val)
                                    <td>
                                        <p>No Unit :</p><input disabled type="text" class="form-control text-center" required name="q3[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    @foreach (explode(',',$fcu->q4) as $val)
                                    <td>
                                        <p>Model : </p><input disabled type="text" class="form-control text-center" required name="q4[]" value="{{$val}}">
                                    </td>
                                    @endforeach

                                </tr>

                                <tr>
                                    @foreach (explode(',',$fcu->q5) as $val)
                                    <td>
                                        <p>No Seri :</p><input disabled type="text" class="form-control text-center" required name="q5[]" value="{{$val}}">
                                    </td>
                                    @endforeach

                                </tr>

                                <tr>
                                    @foreach (explode(',',$fcu->q6) as $val)
                                    <td>
                                        <p>Capacity :</p><input disabled type="text" class="form-control text-center" required name="q6[]" value="{{$val}}">
                                    </td>
                                    @endforeach

                                </tr>

                            </tbody>
                        </table>
                        <table class="table table-bordered" id="personelTeamTable">
                            <thead>
                                <h5 class="text-center" style="background-color: black;color:white">Task List</h5>

                                <tr>
                                    <td>1</td>
                                    <td>Cleaning coil</td>
                                    @foreach (explode(',',$fcu->q7) as $val)
                                    <td><input disabled type="text" class="form-control text-center" value="{{$val}}" required name="q7[]"></td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Cleaning Body</td>
                                    @foreach (explode(',',$fcu->q8) as $val)
                                    <td><input disabled type="text" class="form-control text-center" value="{{$val}}" required name="q8[]"></td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Cleaning Air Filter</td>
                                    @foreach (explode(',',$fcu->q9) as $val)
                                    <td><input disabled type="text" class="form-control text-center" value="{{$val}}" required name="q9[]"></td>
                                    @endforeach

                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>Cleaning Water Reservoir / bak drain </td>
                                    @foreach (explode(',',$fcu->q10) as $val)
                                    <td><input disabled type="text" class="form-control text-center" value="{{$val}}" required name="q10[]"></td>
                                    @endforeach

                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>Cleaning air blower</td>
                                    @foreach (explode(',',$fcu->q11) as $val)
                                    <td><input disabled type="text" class="form-control text-center" value="{{$val}}" required name="q11[]"></td>
                                    @endforeach

                                </tr>


                                <tr>
                                    <td>6</td>
                                    <td>Cleaning drain Pipe </td>
                                    @foreach (explode(',',$fcu->q12) as $val)
                                    <td><input disabled type="text" class="form-control text-center" value="{{$val}}" required name="q12[]"></td>
                                    @endforeach

                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Check and cleaning control panel</td>
                                    @foreach (explode(',',$fcu->q13) as $val)
                                    <td><input disabled type="text" class="form-control text-center" value="{{$val}}" required name="q12[]"></td>
                                    @endforeach

                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Check and verify all FCU sensor, motorize,actuator</td>
                                    @foreach (explode(',',$fcu->q14) as $val)
                                    <td><input disabled type="text" class="form-control text-center" value="{{$val}}" required name="q12[]"></td>
                                    @endforeach

                                </tr>

                                </tbody>
                        </table>
                        <table class="table table-bordered" id="personelTeamTable">
                            <tbody>
                                <h5 class="text-center" style="background-color: black;color:white">Service Checked</h5>
                                <tr>
                                    <td>Unit</td>
                                    <th>Condition</th>
                                    <th>Reactivation Temp</th>
                                    <th></th>
                                    <th>Air Flow</th>
                                    <th></th>
                                    <th>Voltage</th>
                                    <th></th>
                                    <th></th>
                                    <th>Ampere</th>
                                    <th></th>
                                </tr>

                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>In</th>
                                    <th>Out</th>
                                    <th></th>
                                    <th>R</th>
                                    <th>S</th>
                                    <th>T</th>
                                    <th>R</th>
                                    <th>S</th>
                                    <th>T</th>
                                </tr>
                                </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <p>Bfcuore</p>
                                        <p>Standard</p>
                                        <p>After</p>
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q15) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q15[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q16) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q16[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q17) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q17[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q18) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q18[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q19) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q19[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q20) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q20[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q21) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q21[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q22) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q22[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q23) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q23[]" value="{{$val}}">
                                        @endforeach
                                    </td>

                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>
                                        <p>Bfcuore</p>
                                        <p>Standard</p>
                                        <p>After</p>
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q24) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q24[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q25) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q25[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q26) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q26[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q27) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q27[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q28) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q28[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q29) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q29[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q30) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q30[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q31) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q31[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q32) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q32[]" value="{{$val}}">
                                        @endforeach
                                    </td>

                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>
                                        <p>Bfcuore</p>
                                        <p>Standard</p>
                                        <p>After</p>
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q33) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q33[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q34) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q34[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q35) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q35[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q36) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q36[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q37) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q37[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q38) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q38[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q39) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q39[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q40) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q40[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$fcu->q41) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q41[]" value="{{$val}}">
                                        @endforeach
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                        </tbody>
                        </table>

                    </form>
                </div>
            </div>
        </div>
</div>
</section>
<!-- --------------------------------------------------- -->
<!--  Form Inputs Grid End -->
<!-- --------------------------------------------------- -->
</div>
@endsection