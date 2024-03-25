@extends('layouts.back2')
@section('content')
<!-- --------------------------------------------------- -->
<!-- Header End -->
<!-- --------------------------------------------------- -->
<div class="container-fluid">
    <!-- --------------------------------------------------- -->
    <!--  Form Input disableds Grid Start -->
    <!-- --------------------------------------------------- -->
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="card-title mb-0 text-center">Task List Humidifier</h4>
                    </div>
                    <form action="{{ route('humidifierr.store') }}" method="POST">
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

                                <input disabled type="hidden" required name="id" value="{{ $id }}">
                                <tr>
                                    @foreach (explode(',',$humidifier->q1) as $val)
                                    <td>
                                        <p>Lokasi :</p><input disabled type="text" class="form-control text-center" required name="q1[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    @foreach (explode(',',$humidifier->q2) as $val)
                                    <td>
                                        <p>Code Unit :</p><input disabled type="text" class="form-control text-center" required name="q2[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    @foreach (explode(',',$humidifier->q3) as $val)
                                    <td>
                                        <p>No Unit :</p><input disabled type="text" class="form-control text-center" required name="q3[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    @foreach (explode(',',$humidifier->q4) as $val)
                                    <td>
                                        <p>Model : </p><input disabled type="text" class="form-control text-center" required name="q4[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    @foreach (explode(',',$humidifier->q5) as $val)
                                    <td>
                                        <p>No Seri :</p><input disabled type="text" class="form-control text-center" required name="q5[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    @foreach (explode(',',$humidifier->q6) as $val)
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
                                    <th>No</th>
                                    <th class="text-center">Item Checked</th>
                                    <th>Freq</th>
                                    <th>Unit 1</th>
                                    <th></th>
                                    <th>Unit 2</th>
                                    <th></th>
                                    <th>Unit 3</th>
                                    <th></th>
                                </tr>

                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Standar</th>
                                    <th>Actual</th>
                                    <th>Standar</th>
                                    <th>Actual</th>
                                    <th>Standar</th>
                                    <th>Actual</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Cleaning Ultrasonic Membran</td>
                                    @foreach (explode(',',$humidifier->q7) as $val)
                                    <td><input type="text" class="form-control text-center" required name="q7[]" value="{{$val}}"></td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Cleaning Water Reseervoir</td>
                                    @foreach (explode(',',$humidifier->q8) as $val)
                                    <td><input type="text" class="form-control text-center" required name="q8[]" value="{{$val}}"></td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Cleaning & Check Floating Valve</td>
                                    @foreach (explode(',',$humidifier->q9) as $val)
                                    <td><input type="text" class="form-control text-center" required name="q9[]" value="{{$val}}"></td>
                                    @endforeach

                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>Cleaning & Check Floating Switch</td>
                                    @foreach (explode(',',$humidifier->q10) as $val)
                                    <td><input type="text" class="form-control text-center" required name="q10[]" value="{{$val}}"></td>
                                    @endforeach

                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>Check Water Quality</td>
                                    @foreach (explode(',',$humidifier->q11) as $val)
                                    <td><input type="text" class="form-control text-center" required name="q11[]" value="{{$val}}"></td>
                                    @endforeach

                                </tr>


                                <tr>
                                    <td>6</td>
                                    <td>Check Electronic Control Board</td>
                                    @foreach (explode(',',$humidifier->q12) as $val)
                                    <td><input type="text" class="form-control text-center" required name="q12[]" value="{{$val}}"></td>
                                    @endforeach

                                </tr>


                                <tr>
                                    <td>7</td>
                                    <td>Check Drain Solenoid Valve</td>
                                    @foreach (explode(',',$humidifier->q13) as $val)
                                    <td><input type="text" class="form-control text-center" required name="q13[]" value="{{$val}}"></td>
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
                                    <th>Temperature</th>
                                    <th></th>
                                    <th>Pressure</th>
                                    <th></th>
                                    <th>Water Level</th>
                                    <th>Membran</th>
                                    <th>Air Flow</th>
                                    <th></th>
                                    <th>Voltage</th>
                                    <th></th>
                                    <th></th>
                                    <th>Ampere</th>
                                    <TH></TH>
                                </tr>

                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>In</th>
                                    <th>Out</th>
                                    <th>In</th>
                                    <th>Out</th>
                                    <th></th>
                                    <th></th>
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
                                        <p>Before</p>
                                        <p>Standard</p>
                                        <p>After</p>
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q14) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q14[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q15) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q15[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q16) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q16[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q17) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q17[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q18) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q18[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q19) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q19[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q20) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q20[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q21) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q21[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q22) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q22[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q23) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q23[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q24) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q24[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q25) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q25[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q26) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q26[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>
                                        <p>Before</p>
                                        <p>Standard</p>
                                        <p>After</p>
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q27) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q27[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q28) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q28[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q29) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q29[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q30) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q30[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q31) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q31[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q32) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q32[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q33) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q33[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q34) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q34[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q35) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q35[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q36) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q36[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q37) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q37[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q38) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q38[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q39) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q39[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>
                                        <p>Before</p>
                                        <p>Standard</p>
                                        <p>After</p>
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q40) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q40[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q41) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q41[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q42) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q42[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q43) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q43[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q44) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q44[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q45) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q45[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q46) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q46[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q47) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q47[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q48) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q48[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q49) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q49[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q50) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q50[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q51) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q51[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$humidifier->q52) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q52[]" value="{{$val}}">
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
<!--  Form Input disableds Grid End -->
<!-- --------------------------------------------------- -->
</div>
@endsection