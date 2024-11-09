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
                        <h4 class="card-title mb-0 text-center">Task List Chiller Centrifugal</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('chiller-centrifugall.update',$ChillerCentrifugal->id) }}" method="POST">
                            @csrf
                            <table class="table table-bordered" id="">
        <tr>
            <th>Tanggal</th>
            <th>Engineer List</th>
        </tr>
        <tr>
            <td><input type="date" name="tanggal" required class="form-control" value="{{$ChillerCentrifugal->tanggal}}"></td>
            <td><textarea name="enginer_list" id="" cols="60" rows="10">{{$ChillerCentrifugal->enginer_list}}</textarea></td>
        </tr>
        <tr>
            <th>Start Time</th>
            <th>Stop Time</th>
        </tr>
        <tr>
<td><input type="time" class="form-control" name="start" required value="{{$ChillerCentrifugal->start}}"></td>
            <td><input type="time" name="end" class="form-control" id="" value="{{$ChillerCentrifugal->end}}"></td>
        </tr>
            
</table>
                            @method('PUT')
                            <table class="table table-bordered" id="personelTeamTable">
                                <thead>
                                    <h5 class="text-center" style="background-color: black;color:white">A.Filter AHU</h5>

                                    <tr>
                                        <th>No</th>
                                        <th>Item Checked</th>
                                        <th>Freq</th>
                                        <th>Standard Condition</th>
                                        <th>Actual Checked</th>
                                        <th></th>
                                        <th>Remark</th>
                                    </tr>

                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>Before</th>
                                        <th>After</th>
                                        <th></th>
                                    </tr>

                                </thead>
                                <tbody>

                                    <input type="hidden" name="id" value="{{ $id }}">
                                    <tr>
                                        <td>1</td>
                                        <td>Cleaning Strainer Chilled Water</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q1) as $val)
                                        <td><input type="text" class="form-control text-center" name="q1[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Cleaning Condenser</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q2) as $val)
                                        <td><input type="text" class="form-control text-center" name="q2[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Cleaning Evaporator</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q3) as $val)
                                        <td><input type="text" class="form-control text-center" name="q3[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Cleaning Fan Blower</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q4) as $val)
                                        <td><input type="text" class="form-control text-center" name="q4[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Cleaning Body</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q5) as $val)
                                        <td><input type="text" class="form-control text-center" name="q5[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Cleaning Refrigant</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q6) as $val)
                                        <td><input type="text" class="form-control text-center" name="q6[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Check & Cleaning all sensor</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q7) as $val)
                                        <td><input type="text" class="form-control text-center" name="q7[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td>Check & cleaning control panel chiller</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q8) as $val)
                                        <td><input type="text" class="form-control text-center" name="q8[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>


                            <table class="table table-bordered" id="personelTeamTable">
                                <thead>
                                    <h5 class="text-center" style="background-color: black;color:white">Service Check</h5>
                                    <tr>
                                        <h4 class="card-title mb-0 text-center">Status</h4>
                                    </tr>
                                    <tr>
                                        <th>No</th>
                                        <th class="text-center">Item Checked</th>
                                        <th>UoM</th>
                                        <th>Freq</th>
                                        <th>Standard Condition</th>
                                        <th>Actual Checked</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Status Running</td>
                                        <td>On/Off</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q9) as $val)
                                        <td><input type="text" class="form-control text-center" name="q9[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Set Point Cool Ewt</td>
                                        <td>°C</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q10) as $val)
                                        <td><input type="text" class="form-control text-center" name="q10[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Set Point Cool Lwt</td>
                                        <td>°C</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q11) as $val)
                                        <td><input type="text" class="form-control text-center" name="q11[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Base Demand Limit</td>
                                        <td>%</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q12) as $val)
                                        <td><input type="text" class="form-control text-center" name="q12[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Vane Position</td>
                                        <td>%</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q13) as $val)
                                        <td><input type="text" class="form-control text-center" name="q13[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                </tbody>
                            </table>
                            <table class="table table-bordered" id="personelTeamTable">
                                <thead>
                                    <tr>
                                        <h4 class="card-title mb-0 text-center">Compressor</h4>
                                    </tr>
                                    <tr>
                                        <th>No</th>
                                        <th class="text-center">Item Checked</th>
                                        <th>UoM</th>
                                        <th></th>
                                        <th>Freq</th>
                                        <th>Standard Condition</th>
                                        <th>Actual Checked</th>
                                    </tr>
                                </thead>

                                <tbody>


                                    <tr>
                                        <td>1</td>
                                        <td>Vane Position</td>
                                        <td>%</td>
                                        <td></td>
                                        @foreach (explode(',',$ChillerCentrifugal->q14) as $val)
                                        <td><input type="text" class="form-control text-center" name="q14[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>


                                    <tr>
                                        <td>2</td>
                                        <td>Ampere NamePlate : 780 A</td>
                                        <td>
                                            <p class="text-center">L1</p>
                                            <p class="text-center">L2</p>
                                            <p class="text-center">L3</p>
                                        </td>
                                        <td>
                                            <p>Ampere</p>
                                            <p>Ampere</p>
                                            <p>Ampere</p>
                                        </td>

                                        <td>
                                            @foreach (explode(',',$ChillerCentrifugal->q15) as $val)
                                            <input type="text" class="form-control text-center" name="q15[]" value="{{$val}}" >
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach (explode(',',$ChillerCentrifugal->q16) as $val)
                                            <input type="text" class="form-control text-center" name="q16[]" value="{{$val}}" >
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach (explode(',',$ChillerCentrifugal->q17) as $val)
                                            <input type="text" class="form-control text-center" name="q17[]" value="{{$val}}" >
                                            @endforeach
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Voltage NamePlate : 380 A</td>
                                        <td>
                                            <p class="text-center">L1</p>
                                            <p class="text-center">L2</p>
                                            <p class="text-center">L3</p>
                                        </td>
                                        <td>
                                            <p>Volt</p>
                                            <p>Volt</p>
                                            <p>Volt</p>
                                        </td>
                                        <td>
                                            @foreach (explode(',',$ChillerCentrifugal->q18) as $val)
                                            <input type="text" class="form-control text-center" name="q18[]" value="{{$val}}" >
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach (explode(',',$ChillerCentrifugal->q19) as $val)
                                            <input type="text" class="form-control text-center" name="q19[]" value="{{$val}}" >
                                            @endforeach
                                        </td>

                                        <td>
                                            @foreach (explode(',',$ChillerCentrifugal->q20) as $val)
                                            <input type="text" class="form-control text-center" name="q20[]" value="{{$val}}" >
                                            @endforeach
                                        </td>

                                    </tr>


                                    <tr>
                                        <td>4</td>
                                        <td>Motor Winding Temperature</td>
                                        <td>°C</td>
                                        <td></td>
                                        @foreach (explode(',',$ChillerCentrifugal->q21) as $val)
                                        <td><input type="text" class="form-control text-center" name="q21[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                </tbody>
                            </table>


                            <table class="table table-bordered" id="personelTeamTable">
                                <thead>
                                    <tr>
                                        <h4 class="card-title mb-0 text-center">Cooler</h4>
                                    </tr>
                                    <tr>
                                        <th>No</th>
                                        <th class="text-center">Item Checked</th>
                                        <th>UoM</th>
                                        <th>Freq</th>
                                        <th>Standard Condition</th>
                                        <th>Actual Checked</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Cool Entering Water Temp</td>
                                        <td>°C</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q22) as $val)
                                        <td><input type="text" class="form-control text-center" name="q22[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Cool Leaving Water Temp</td>
                                        <td>°C</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q23) as $val)
                                        <td><input type="text" class="form-control text-center" name="q23[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Cooler Delta Temp</td>
                                        <td>°C</td>
                                        < @foreach (explode(',',$ChillerCentrifugal->q24) as $val)
                                            <td><input type="text" class="form-control text-center" name="q24[]" value="{{$val}}" ></td>
                                            @endforeach
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Cooler Temp</td>
                                        <td>°C</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q25) as $val)
                                        <td><input type="text" class="form-control text-center" name="q25[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Suction Pressure</td>
                                        <td>KPA</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q26) as $val)
                                        <td><input type="text" class="form-control text-center" name="q26[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Cooler Aproach</td>
                                        <td>°C</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q27) as $val)
                                        <td><input type="text" class="form-control text-center" name="q27[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Cooler Delta Press</td>
                                        <td>PSI</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q28) as $val)
                                        <td><input type="text" class="form-control text-center" name="q28[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                </tbody>
                            </table>

                            <table class="table table-bordered" id="personelTeamTable">
                                <thead>
                                    <tr>
                                        <h4 class="card-title mb-0 text-center">Condenser</h4>
                                    </tr>
                                    <tr>
                                        <th>No</th>
                                        <th class="text-center">Item Checked</th>
                                        <th>UoM</th>
                                        <th>Freq</th>
                                        <th>Standard Condition</th>
                                        <th>Actual Checked</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Cond Entering Water Temp</td>
                                        <td>°C</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q29) as $val)
                                        <td><input type="text" class="form-control text-center" name="q29[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Cond Leaving Water Temp</td>
                                        <td>°C</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q30) as $val)
                                        <td><input type="text" class="form-control text-center" name="q30[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Cond Delta Temp</td>
                                        <td>°C</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q31) as $val)
                                        <td><input type="text" class="form-control text-center" name="q31[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Condenser Temp</td>
                                        <td>°C</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q32) as $val)
                                        <td><input type="text" class="form-control text-center" name="q32[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Condenser Pressure</td>
                                        <td>KPA</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q33) as $val)
                                        <td><input type="text" class="form-control text-center" name="q33[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Condenser Aproach</td>
                                        <td>°C</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q34) as $val)
                                        <td><input type="text" class="form-control text-center" name="q34[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Discharge Temp</td>
                                        <td>°C</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q35) as $val)
                                        <td><input type="text" class="form-control text-center" name="q35[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>


                                    <tr>
                                        <td>8</td>
                                        <td>Condenser Delta Press</td>
                                        <td>PSI</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q36) as $val)
                                        <td><input type="text" class="form-control text-center" name="q36[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                </tbody>
                            </table>

                            <table class="table table-bordered" id="personelTeamTable">
                                <thead>

                                    <tr>
                                        <h4 class="card-title mb-0 text-center">Oil</h4>
                                    </tr>
                                    <tr>
                                        <th>No</th>
                                        <th class="text-center">Item Checked</th>
                                        <th></th>
                                        <th>UoM</th>
                                        <th>Freq</th>
                                        <th>Standard Condition</th>
                                        <th>Actual Checked</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Oil Pressure</td>
                                        <td></td>
                                        <td>KPA</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q37) as $val)
                                        <td><input type="text" class="form-control text-center" name="q37[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Sump Temp</td>
                                        <td></td>
                                        <td>°C</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q38) as $val)
                                        <td><input type="text" class="form-control text-center" name="q38[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Bearing Temp</td>
                                        <td></td>
                                        <td>°C</td>
                                        @foreach (explode(',',$ChillerCentrifugal->q39) as $val)
                                        <td><input type="text" class="form-control text-center" name="q39[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Oil Level</td>
                                        <td></td>
                                        <td></td>
                                        @foreach (explode(',',$ChillerCentrifugal->q40) as $val)
                                        <td><input type="text" class="form-control text-center" name="q40[]" value="{{$val}}" ></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Ampere NamePlate : 2,5 A</td>
                                        <td>
                                            <p class="text-center">L1</p>
                                            <p class="text-center">L2</p>
                                            <p class="text-center">L3</p>
                                        </td>
                                        <td>
                                            <p>Ampere</p>
                                            <p>Ampere</p>
                                            <p>Ampere</p>
                                        </td>

                                        <td>
                                            @foreach (explode(',',$ChillerCentrifugal->q41) as $val)
                                            <input type="text" class="form-control text-center" name="q41[]" value="{{$val}}" >
                                            @endforeach
                                        </td>

                                        <td>
                                            @foreach (explode(',',$ChillerCentrifugal->q42) as $val)
                                            <input type="text" class="form-control text-center" name="q42[]" value="{{$val}}" >
                                            @endforeach
                                        </td>

                                        <td>
                                            @foreach (explode(',',$ChillerCentrifugal->q43) as $val)
                                            <input type="text" class="form-control text-center" name="q43[]" value="{{$val}}" >
                                            @endforeach
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                            <button class="btn btn-info px-4 mt-3" type="submit">Submit form</button>

                        <table class="table table-bordered" id="">
        <tr>
            <th>Temuan</th>
            <th>Rekomendasi</th>
        </tr>
        <tr>
            <td><textarea name="temuan" id="" cols="60" rows="10">{{$ChillerCentrifugal->temuan}}</textarea></td>
            <td><textarea name="rekomendasi" id="" cols="60" rows="10">{{$ChillerCentrifugal->rekomendasi}}</textarea></td>
        </tr>
        <tr>
            <th>Intensive Check</th>
            <th>Job Complete</th>
        </tr>
        <tr>
            <td><select name="status" id="" class="form-select">
                    <option value="{{$ChillerCentrifugal->intensive}}">{{$ChillerCentrifugal->intensive}}</option>
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>

                </select></td>
            <td><select name="status" id="" class="form-select">
                    <option value="{{$ChillerCentrifugal->status}}">{{$ChillerCentrifugal->status}}</option>
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>
                </select></td>
        </tr>
            @include('formimage.formkosong')
</table>

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