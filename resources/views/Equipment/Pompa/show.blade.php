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
                        <h4 class="card-title mb-0 text-center">Task List Pompa</h4>

                    </div>
                    <form action="{{ route('pompaa.store') }}" method="POST">
                        @csrf
                        <table class="table table-bordered" id="">
        <tr>
            <th>Tanggal</th>
            <th>Engineer List</th>
        </tr>
        <tr>
            <td><input disabled type="date" name="tanggal" required class="form-control" value="{{$pompa->tanggal}}"></td>
            <td><textarea disabled name="enginer_list" id="" cols="60" rows="10">{{$pompa->enginer_list}}</textarea></td>
        </tr>
        <tr>
            <th>Start Time</th>
            <th>Stop Time</th>
        </tr>
        <tr>
<td><input disabled type="time" class="form-control" name="start" required value="{{$pompa->start}}"></td>
            <td><input disabled type="time" name="end" class="form-control" value="{{$pompa->end}}" id=""></td>
        </tr>
            
</table>

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
                                    @foreach (explode(',',$pompa->q1) as $val)
                                    <td>
                                        <p>Lokasi :</p><input disabled type="text" class="form-control text-center" required name="q1[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    @foreach (explode(',',$pompa->q2) as $val)
                                    <td>
                                        <p>Code Unit :</p><input disabled type="text" class="form-control text-center" required name="q2[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    @foreach (explode(',',$pompa->q3) as $val)
                                    <td>
                                        <p>No Unit :</p><input disabled type="text" class="form-control text-center" required name="q3[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    @foreach (explode(',',$pompa->q4) as $val)
                                    <td>
                                        <p>Model : </p><input disabled type="text" class="form-control text-center" required name="q4[]" value="{{$val}}">
                                    </td>
                                    @endforeach

                                </tr>

                                <tr>
                                    @foreach (explode(',',$pompa->q5) as $val)
                                    <td>
                                        <p>No Seri :</p><input disabled type="text" class="form-control text-center" required name="q5[]" value="{{$val}}">
                                    </td>
                                    @endforeach

                                </tr>

                                <tr>
                                    @foreach (explode(',',$pompa->q6) as $val)
                                    <td>
                                        <p>Capompaity :</p><input disabled type="text" class="form-control text-center" required name="q6[]" value="{{$val}}">
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
                                    <td>Replace rubber coupling, mechanical seal, bearing motor & pumps,lacos filter</td>
                                    @foreach (explode(',',$pompa->q7) as $val)
                                    <td><input disabled type="text" class="form-control text-center" value="{{$val}}" required name="q7[]"></td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Resistance test & megger motor</td>
                                    @foreach (explode(',',$pompa->q8) as $val)
                                    <td><input disabled type="text" class="form-control text-center" value="{{$val}}" required name="q8[]"></td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Verify all pressure & temperature gauge replace if necessary</td>
                                    @foreach (explode(',',$pompa->q9) as $val)
                                    <td><input disabled type="text" class="form-control text-center" value="{{$val}}" required name="q9[]"></td>
                                    @endforeach

                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>Cleaning heat exchanger if available</td>
                                    @foreach (explode(',',$pompa->q10) as $val)
                                    <td><input disabled type="text" class="form-control text-center" value="{{$val}}" required name="q10[]"></td>
                                    @endforeach

                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>Cleaning Filter, Strainer, check valve</td>
                                    @foreach (explode(',',$pompa->q11) as $val)
                                    <td><input disabled type="text" class="form-control text-center" value="{{$val}}" required name="q11[]"></td>
                                    @endforeach

                                </tr>


                                <tr>
                                    <td>6</td>
                                    <td>Cleaning & tightening pumps panels</td>
                                    @foreach (explode(',',$pompa->q12) as $val)
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
                                    <th>P In</th>
                                    <th>P Out</th>
                                    <th>J.Coupl</th>
                                    <th>MecSeal</th>
                                    <th>Bearing</th>
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
                                    <th></th>
                                    <th></th>
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
                                        @foreach (explode(',',$pompa->q13) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q13[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q14) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q14[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q15) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q15[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q16) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q16[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q17) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q17[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q18) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q18[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q19) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q19[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q20) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q20[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q21) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q21[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q22) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q22[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q23) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q23[]" value="{{$val}}">
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
                                        @foreach (explode(',',$pompa->q24) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q24[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q25) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q25[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q26) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q26[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q27) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q27[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q28) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q28[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q29) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q29[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q30) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q30[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q31) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q31[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q32) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q32[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q33) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q33[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q34) as $val)
                                        <input disabled type="text" class="form-control text-center" style="width: 100px" required name="q34[]" value="{{$val}}">
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
                                        @foreach (explode(',',$pompa->q35) as $val)
                                        <input disabled type="text" class="form-control text-center" required name="q35[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q36) as $val)
                                        <input disabled type="text" class="form-control text-center" required name="q36[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q37) as $val)
                                        <input disabled type="text" class="form-control text-center" required name="q37[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q38) as $val)
                                        <input disabled type="text" class="form-control text-center" required name="q38[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q39) as $val)
                                        <input disabled type="text" class="form-control text-center" required name="q39[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q40) as $val)
                                        <input disabled type="text" class="form-control text-center" required name="q40[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q41) as $val)
                                        <input disabled type="text" class="form-control text-center" required name="q41[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q42) as $val)
                                        <input disabled type="text" class="form-control text-center" required name="q42[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q43) as $val)
                                        <input disabled type="text" class="form-control text-center" required name="q43[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q44) as $val)
                                        <input disabled type="text" class="form-control text-center" required name="q44[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$pompa->q45) as $val)
                                        <input disabled type="text" class="form-control text-center" required name="q45[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </tbody>
                        </table>
   <table class="table table-bordered" id="">
        <tr>
            <th>Temuan</th>
            <th>Rekomendasi</th>
        </tr>
        <tr>
            <td><textarea disabled disabled name="temuan" id="" cols="60" rows="10">{{$pompa->temuan}}</textarea></td>
            <td><textarea disabled disabled name="rekomendasi" id="" cols="60" rows="10">{{$pompa->rekomendasi}}</textarea></td>
        </tr>
        <tr>
            <th>Intensive Check</th>
            <th>Job Complete</th>
        </tr>
        <tr>
            <td><select disabled name="status" id="" class="form-select">
                    <option value="{{$pompa->intensive}}">{{$pompa->intensive}}</option>
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>

                </select></td>
            <td><select disabled name="status" id="" class="form-select">
                    <option value="{{$pompa->status}}">{{$pompa->status}}</option>
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>
                </select></td>
        </tr>
            
</table>
@include('formimage.show')

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