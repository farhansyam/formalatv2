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
                        <h4 class="card-title mb-0 text-center">Task List Spot Cooling</h4>
                    </div>
                    <form action="{{ route('spoot-cooling.update',$SpotCooling->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <table class="table table-bordered" id="">
        <tr>
            <th>Tanggal</th>
            <th>Engineer List</th>
        </tr>
        <tr>
            <td><input  type="date" name="tanggal" required class="form-control" value="{{$SpotCooling->tanggal}}"></td>
            <td><textarea  name="enginer_list" id="" cols="60" rows="10">{{$SpotCooling->enginer_list}}</textarea></td>
        </tr>
        <tr>
            <th>Start Time</th>
            <th>Stop Time</th>
        </tr>
        <tr>
<td><input  type="time" class="form-control" name="start" required value="{{$SpotCooling->start}}"></td>
            <td><input  type="time" name="end" class="form-control" value="{{$SpotCooling->end}}" id=""></td>
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

                                <input type="hidden" required name="id" value="{{ $id }}">
                                <tr>
                                    @foreach (explode(',',$SpotCooling->q1) as $val)
                                    <td>
                                        <p>Lokasi :</p><input type="text" class="form-control text-center" required name="q1[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    @foreach (explode(',',$SpotCooling->q2) as $val)
                                    <td>
                                        <p>Code Unit :</p><input type="text" class="form-control text-center" required name="q2[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    @foreach (explode(',',$SpotCooling->q3) as $val)
                                    <td>
                                        <p>No Unit :</p><input type="text" class="form-control text-center" required name="q3[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    @foreach (explode(',',$SpotCooling->q4) as $val)
                                    <td>
                                        <p>Model : </p><input type="text" class="form-control text-center" required name="q4[]" value="{{$val}}">
                                    </td>
                                    @endforeach

                                </tr>

                                <tr>
                                    @foreach (explode(',',$SpotCooling->q5) as $val)
                                    <td>
                                        <p>No Seri :</p><input type="text" class="form-control text-center" required name="q5[]" value="{{$val}}">
                                    </td>
                                    @endforeach

                                </tr>

                                <tr>
                                    @foreach (explode(',',$SpotCooling->q6) as $val)
                                    <td>
                                        <p>Capacity :</p><input type="text" class="form-control text-center" required name="q6[]" value="{{$val}}">
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
                                    <td>Cleaning Evaporator</td>
                                    @foreach (explode(',',$SpotCooling->q7) as $val)
                                    <td><input type="text" class="form-control text-center" value="{{$val}}" required name="q7[]"></td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Cleaning Condensor</td>
                                    @foreach (explode(',',$SpotCooling->q8) as $val)
                                    <td><input type="text" class="form-control text-center" value="{{$val}}" required name="q8[]"></td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Cleaning Air Filter</td>
                                    @foreach (explode(',',$SpotCooling->q9) as $val)
                                    <td><input type="text" class="form-control text-center" value="{{$val}}" required name="q9[]"></td>
                                    @endforeach

                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>Cleaning Water Reservoir / bak drain</td>
                                    @foreach (explode(',',$SpotCooling->q10) as $val)
                                    <td><input type="text" class="form-control text-center" value="{{$val}}" required name="q10[]"></td>
                                    @endforeach

                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>Cleaning air blower, Grill & Diffuser</td>
                                    @foreach (explode(',',$SpotCooling->q11) as $val)
                                    <td><input type="text" class="form-control text-center" value="{{$val}}" required name="q11[]"></td>
                                    @endforeach

                                </tr>


                                <tr>
                                    <td>6</td>
                                    <td>Cleaning drain Pipe</td>
                                    @foreach (explode(',',$SpotCooling->q12) as $val)
                                    <td><input type="text" class="form-control text-center" value="{{$val}}" required name="q12[]"></td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>7</td>
                                    <td>Cleaning body unit</td>
                                    @foreach (explode(',',$SpotCooling->q13) as $val)
                                    <td><input type="text" class="form-control text-center" value="{{$val}}" required name="q13[]"></td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>8</td>
                                    <td>Check Refrigerant Leakage</td>
                                    @foreach (explode(',',$SpotCooling->q14) as $val)
                                    <td><input type="text" class="form-control text-center" value="{{$val}}" required name="q14[]"></td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>9</td>
                                    <td>Check all outdoor component</td>
                                    @foreach (explode(',',$SpotCooling->q15) as $val)
                                    <td><input type="text" class="form-control text-center" value="{{$val}}" required name="q15[]"></td>
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
                                    <th></th>
                                    <th>Suction Pressure (Psi)</th>
                                    <th></th>
                                    <th></th>
                                    <th>Discharge Pressure (Psi)</th>
                                    <th></th>
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
                                        @foreach (explode(',',$SpotCooling->q16) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q16[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q17) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q17[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q18) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q18[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q19) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q19[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q20) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q20[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q21) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q21[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q22) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q22[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q23) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q23[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q24) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q24[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q25) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q25[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q26) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q26[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q49) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q49[]" value="{{$val}}">
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
                                        @foreach (explode(',',$SpotCooling->q27) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q27[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q28) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q28[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q29) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q29[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q30) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q30[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q31) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q31[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q32) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q32[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q33) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q33[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q34) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q34[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q35) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q35[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q36) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q36[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q37) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q37[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q50) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q50[]" value="{{$val}}">
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
                                        @foreach (explode(',',$SpotCooling->q38) as $val)
                                        <input type="text" class="form-control text-center" required name="q38[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q39) as $val)
                                        <input type="text" class="form-control text-center" required name="q39[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q40) as $val)
                                        <input type="text" class="form-control text-center" required name="q40[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q41) as $val)
                                        <input type="text" class="form-control text-center" required name="q41[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q42) as $val)
                                        <input type="text" class="form-control text-center" required name="q42[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q43) as $val)
                                        <input type="text" class="form-control text-center" required name="q43[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q44) as $val)
                                        <input type="text" class="form-control text-center" required name="q44[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q51) as $val)
                                        <input type="text" class="form-control text-center" required name="q45[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q46) as $val)
                                        <input type="text" class="form-control text-center" required name="q46[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q47) as $val)
                                        <input type="text" class="form-control text-center" required name="q47[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q48) as $val)
                                        <input type="text" class="form-control text-center" required name="q48[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$SpotCooling->q45) as $val)
                                        <input type="text" class="form-control text-center" required name="q51[]" value="{{$val}}">
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
            <td><textarea name="temuan" id="" cols="60" rows="10">{{$SpotCooling->temuan}}</textarea></td>
            <td><textarea name="rekomendasi" id="" cols="60" rows="10">{{$SpotCooling->rekomendasi}}</textarea></td>
        </tr>
        <tr>
            <th>Intensive Check</th>
            <th>Job Complete</th>
        </tr>
        <tr>
            <td><td><select name="status" id="" class="form-select">
                    <option value="{{$SpotCooling->intensive}}">{{$SpotCooling->intensive}}</option>
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>

                </select></td>
            <td><select name="status" id="" class="form-select">
                    <option value="{{$SpotCooling->status}}">{{$SpotCooling->status}}</option>
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>
                </select></td>
        </tr>
            
</table>
@include('formimage.formkosong')

                        <button class="btn btn-info px-4 mt-3" type="submit">Submit form</button>
                    </form>
                    @include('formimage.edit')
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