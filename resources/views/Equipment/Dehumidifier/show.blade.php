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
                        <h4 class="card-title mb-0 text-center">Task List Dehumidifier</h4>
                    </div>
                    <form action="{{ route('dehumidifierr.store') }}" method="POST">
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
                                    @foreach (explode(',',$dehumidifier->q1) as $val)
                                    <td>
                                        <p>Lokasi :</p><input disabled type="text" class="form-control text-center" required name="q1[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    @foreach (explode(',',$dehumidifier->q2) as $val)
                                    <td>
                                        <p>Code Unit :</p><input disabled type="text" class="form-control text-center" required name="q2[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    @foreach (explode(',',$dehumidifier->q3) as $val)
                                    <td>
                                        <p>No Unit :</p><input disabled type="text" class="form-control text-center" required name="q3[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    @foreach (explode(',',$dehumidifier->q4) as $val)
                                    <td>
                                        <p>Model : </p><input disabled type="text" class="form-control text-center" required name="q4[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    @foreach (explode(',',$dehumidifier->q5) as $val)
                                    <td>
                                        <p>No Seri :</p><input disabled type="text" class="form-control text-center" required name="q5[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    @foreach (explode(',',$dehumidifier->q6) as $val)
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
                                    @foreach (explode(',',$dehumidifier->q7) as $val)
                                    <td><input type="text" class="form-control text-center" required name="q7[]" value="{{$val}}"></td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Cleaning Water Reseervoir</td>
                                    @foreach (explode(',',$dehumidifier->q8) as $val)
                                    <td><input type="text" class="form-control text-center" required name="q8[]" value="{{$val}}"></td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Cleaning & Check Floating Valve</td>
                                    @foreach (explode(',',$dehumidifier->q9) as $val)
                                    <td><input type="text" class="form-control text-center" required name="q9[]" value="{{$val}}"></td>
                                    @endforeach

                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>Cleaning & Check Floating Switch</td>
                                    @foreach (explode(',',$dehumidifier->q10) as $val)
                                    <td><input type="text" class="form-control text-center" required name="q10[]" value="{{$val}}"></td>
                                    @endforeach

                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>Check Water Quality</td>
                                    @foreach (explode(',',$dehumidifier->q11) as $val)
                                    <td><input type="text" class="form-control text-center" required name="q11[]" value="{{$val}}"></td>
                                    @endforeach

                                </tr>


                                <tr>
                                    <td>6</td>
                                    <td>Check Electronic Control Board</td>
                                    @foreach (explode(',',$dehumidifier->q12) as $val)
                                    <td><input type="text" class="form-control text-center" required name="q12[]" value="{{$val}}"></td>
                                    @endforeach

                                </tr>


                                <tr>
                                    <td>7</td>
                                    <td>Check Drain Solenoid Valve</td>
                                    @foreach (explode(',',$dehumidifier->q13) as $val)
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
                                    <th>H.C Cond</th>
                                    <th>Reac.Air Flow</th>
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
                                        @foreach (explode(',',$dehumidifier->q14) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q14[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q15) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q15[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q16) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q16[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q17) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q17[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q18) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q18[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q19) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q19[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q20) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q20[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q21) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q21[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q22) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q22[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q23) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q23[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q24) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q24[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q25) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q25[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q26) as $val)
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
                                        @foreach (explode(',',$dehumidifier->q27) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q27[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q28) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q28[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q29) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q29[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q30) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q30[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q31) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q31[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q32) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q32[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q33) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q33[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q34) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q34[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q35) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q35[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q36) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q36[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q37) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q37[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q38) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q38[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q39) as $val)
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
                                        @foreach (explode(',',$dehumidifier->q40) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q40[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q41) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q41[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q42) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q42[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q43) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q43[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q44) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q44[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q45) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q45[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q46) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q46[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q47) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q47[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q48) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q48[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q49) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q49[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q50) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q50[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q51) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q51[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$dehumidifier->q52) as $val)
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