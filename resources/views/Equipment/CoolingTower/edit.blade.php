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
                        <h4 class="card-title mb-0 text-center">Task List Cooling Tower</h4>
                    </div>
                    <form action="{{ route('cooling-tower.update',$coolingtower->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                               <table class="table table-bordered" id="">
        <tr>
            <th>Tanggal</th>
            <th>Engineer List</th>
        </tr>
        <tr>
            <td><input type="date" name="tanggal" required class="form-control" value="{{$coolingtower->tanggal}}"></td>
            <td><textarea name="enginer_list" id="" cols="60" rows="10">{{$coolingtower->enginer_list}}</textarea></td>
        </tr>
        <tr>
            <th>Start Time</th>
            <th>Stop Time</th>
        </tr>
        <tr>
<td><input type="time" class="form-control" name="start" required value="{{$coolingtower->start}}"></td>
            <td><input type="time" name="end" class="form-control" id="" value="{{$coolingtower->end}}"></td>
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
                                    @foreach (explode(',',$coolingtower->q1) as $val)
                                    <td>
                                        <p>Lokasi :</p><input type="text" class="form-control text-center" required name="q1[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    @foreach (explode(',',$coolingtower->q2) as $val)
                                    <td>
                                        <p>Code Unit :</p><input type="text" class="form-control text-center" required name="q2[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    @foreach (explode(',',$coolingtower->q3) as $val)
                                    <td>
                                        <p>No Unit :</p><input type="text" class="form-control text-center" required name="q3[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    @foreach (explode(',',$coolingtower->q4) as $val)
                                    <td>
                                        <p>Model : </p><input type="text" class="form-control text-center" required name="q4[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    @foreach (explode(',',$coolingtower->q5) as $val)
                                    <td>
                                        <p>No Seri :</p><input type="text" class="form-control text-center" required name="q5[]" value="{{$val}}">
                                    </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    @foreach (explode(',',$coolingtower->q6) as $val)
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
                                                <td colspan="7">
                                                    INTENSIVE SAFETY BRIEFING TEAM 
                                                </td>
                                                <td>
                                                    <input type="radio" name="intensive" @if($coolingtower->intensive == 'Ok') checked @endif id="" value="Ok">&nbsp;&nbsp;Ok
                                                </td>
                                                <td>
                                                    <input type="radio" name="intensive" @if($coolingtower->intensive == 'Not Ok') checked @endif id="" value="Not Ok">&nbsp;&nbsp;Not Ok
                                                </td>
                                            </tr>
                                        <tr>
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
                                    <td>Cleaning Cooling tower parts and accessories</td>
                                    @foreach (explode(',',$coolingtower->q7) as $val)
                                    <td><input type="text" class="form-control text-center" required name="q7[]" value="{{$val}}"></td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Greasing, tightening cooling tower parts</td>
                                    @foreach (explode(',',$coolingtower->q8) as $val)
                                    <td><input type="text" class="form-control text-center" required name="q8[]" value="{{$val}}"></td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Lubricating cooling tower parts</td>
                                    @foreach (explode(',',$coolingtower->q9) as $val)
                                    <td><input type="text" class="form-control text-center" required name="q9[]" value="{{$val}}"></td>
                                    @endforeach

                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>Motor fan megger test</td>
                                    @foreach (explode(',',$coolingtower->q10) as $val)
                                    <td><input type="text" class="form-control text-center" required name="q10[]" value="{{$val}}"></td>
                                    @endforeach

                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>Cleaning & tightening cooling tower panels</td>
                                    @foreach (explode(',',$coolingtower->q11) as $val)
                                    <td><input type="text" class="form-control text-center" required name="q11[]" value="{{$val}}"></td>
                                    @endforeach

                                </tr>


                                <tr>
                                    <td>6</td>
                                    <td>Check all Sensor</td>
                                    @foreach (explode(',',$coolingtower->q12) as $val)
                                    <td><input type="text" class="form-control text-center" required name="q12[]" value="{{$val}}"></td>
                                    @endforeach

                                </tr>


                                <tr>
                                    <td>7</td>
                                    <td>Maintain TDS Control</td>
                                    @foreach (explode(',',$coolingtower->q13) as $val)
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
                                    <th>In</th>
                                    <th></th>
                                    <th>Out</th>
                                    <th></th>
                                    <th>Tension V-Belt</th>
                                    <th>Filler</th>
                                    <th>Basin</th>
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
                                    <th>T</th>
                                    <th>P</th>
                                    <th>T</th>
                                    <th>P</th>
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
                                        @foreach (explode(',',$coolingtower->q14) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q14[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q15) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q15[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q16) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q16[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q17) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q17[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q18) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q18[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q19) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q19[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q20) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q20[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q21) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q21[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q22) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q22[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q23) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q23[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q24) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q24[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q25) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q25[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q26) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q26[]" value="{{$val}}">
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
                                        @foreach (explode(',',$coolingtower->q27) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q27[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q28) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q28[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q29) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q29[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q30) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q30[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q31) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q31[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q32) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q32[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q33) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q33[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q34) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q34[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q35) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q35[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q36) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q36[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q37) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q37[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q38) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q38[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q39) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q39[]" value="{{$val}}">
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
                                        @foreach (explode(',',$coolingtower->q40) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q40[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q41) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q41[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q42) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q42[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q43) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q43[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q44) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q44[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q45) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q45[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q46) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q46[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q47) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q47[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q48) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q48[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q49) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q49[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q50) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q50[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q51) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q51[]" value="{{$val}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (explode(',',$coolingtower->q52) as $val)
                                        <input type="text" class="form-control text-center" style="width: 100px" required name="q52[]" value="{{$val}}">
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
            <td><textarea   name="temuan" id="" cols="60" rows="10">{{$coolingtower->temuan}}</textarea></td>
            <td><textarea   name="rekomendasi" id="" cols="60" rows="10">{{$coolingtower->rekomendasi}}</textarea></td>
        </tr>
        <tr>
            <th>Running Hour</th>
            <th>Job Complete</th>
            
        </tr>
        <tr>
            <td><input type="number" name="running_hour" required class="form-control" value="{{$coolingtower->running_hour}}"></td>

            <td><select  name="status" id="" class="form-select">
                    <option value="{{$coolingtower->status}}">{{$coolingtower->status}}</option>
                    <option value="No">No</option>
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