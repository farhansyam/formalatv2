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
                            <h4 class="card-title mb-0 text-center">Task List Cooling Unit & AC Panel</h4>
                        </div>
                        <div class="card-body">
                        
                                <table class="table table-bordered" id="personelTeamTable">
                                    <thead>
                                        <tr>
                                            <th>Pertanyaan</th>
                                            <th>Frequency</th>
                                            <th>Standard Condition</th>
                                            <th>Actual Check</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                             
                                        <div class="border-bottom title-part-padding text-bold">
                                            <h5 class="card-title mb-0 text-center">AC PANEL</h5>
                                        </div>

                                        <input type="hidden" readonly name="id" value="{{ $cooling_unit->id }}">

                                    @php
                                    $q1Array = explode(',', $cooling_unit->q1);
                                    $q2Array = explode(',', $cooling_unit->q2);
                                    $q3Array = explode(',', $cooling_unit->q3);
                                    $q4Array = explode(',', $cooling_unit->q4);
                                    $q5Array = explode(',', $cooling_unit->q5);
                                    $q6Array = explode(',', $cooling_unit->q6);
                                    $q7Array = explode(',', $cooling_unit->q7);
                                    $q8Array = explode(',', $cooling_unit->q8);
                                    $q9Array = explode(',', $cooling_unit->q9);
                                    $q10Array = explode(',', $cooling_unit->q10);
                                    $q11Array = explode(',', $cooling_unit->q11);
                                    $q12Array = explode(',', $cooling_unit->q12);
                                    $q13Array = explode(',', $cooling_unit->q13);
                                    $q14Array = explode(',', $cooling_unit->q14);
                                    $q15Array = explode(',', $cooling_unit->q15);
                                    $q16Array = explode(',', $cooling_unit->q16);
                                    $q17Array = explode(',', $cooling_unit->q17);
                                    $q18Array = explode(',', $cooling_unit->q18);
                                    $q19Array = explode(',', $cooling_unit->q19);
                                    $q20Array = explode(',', $cooling_unit->q20);
                                    $q21Array = explode(',', $cooling_unit->q21);
                                    $q22Array = explode(',', $cooling_unit->q22);
                                    $q23Array = explode(',', $cooling_unit->q23);
                                    $q24Array = explode(',', $cooling_unit->q24);
                                    $q25Array = explode(',', $cooling_unit->q25);
                                    $q26Array = explode(',', $cooling_unit->q26);
                                    $q27Array = explode(',', $cooling_unit->q27);
                                    $q28Array = explode(',', $cooling_unit->q28);
                                    @endphp

                    <input type="hidden" readonly name="id" value="{{ $cooling_unit->id }}">
                    
                                            <tr>
                                      
                                                <td>Cleaning Condensor</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q1Array[0]) ? $q1Array[0] : '' }}"  name="q1[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q1Array[1]) ? $q1Array[1] : '' }}"  name="q1[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q1Array[2]) ? $q1Array[2] : '' }}"  name="q1[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Evaporator</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q2Array[0]) ? $q2Array[0] : '' }}"  name="q2[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q2Array[1]) ? $q2Array[1] : '' }}"  name="q2[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q2Array[2]) ? $q2Array[2] : '' }}"  name="q2[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Fan Condensor</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q3Array[0]) ? $q3Array[0] : '' }}"  name="q3[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q3Array[1]) ? $q3Array[1] : '' }}"  name="q3[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q3Array[2]) ? $q3Array[2] : '' }}"  name="q3[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Fan Evaporator	</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q4Array[0]) ? $q4Array[0] : '' }}"  name="q4[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q4Array[1]) ? $q4Array[1] : '' }}"  name="q4[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q4Array[2]) ? $q4Array[2] : '' }}"  name="q4[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Body Compressor</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q5Array[0]) ? $q5Array[0] : '' }}"  name="q5[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q5Array[1]) ? $q5Array[1] : '' }}"  name="q5[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q5Array[2]) ? $q5Array[2] : '' }}"  name="q5[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Bak Drain</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q6Array[0]) ? $q6Array[0] : '' }}"  name="q6[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q6Array[1]) ? $q6Array[1] : '' }}"  name="q6[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q6Array[2]) ? $q6Array[2] : '' }}"  name="q6[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Flushing Selang Drain</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q7Array[0]) ? $q7Array[0] : '' }}"  name="q7[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q7Array[1]) ? $q7Array[1] : '' }}"  name="q7[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q7Array[2]) ? $q7Array[2] : '' }}"  name="q7[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Ampere Kompressor</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q8Array[0]) ? $q8Array[0] : '' }}"  name="q8[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q8Array[1]) ? $q8Array[1] : '' }}"  name="q8[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q8Array[2]) ? $q8Array[2] : '' }}"  name="q8[]"></td>
                                            </tr>

                                            <tr> 
                                                <td>Check Pressure Freon</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q9Array[0]) ? $q9Array[0] : '' }}"  name="q9[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q9Array[1]) ? $q9Array[1] : '' }}"  name="q9[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q9Array[2]) ? $q9Array[2] : '' }}"  name="q9[]"></td>
                                            </tr>
                                        </tbody>
                                </table>
                                <table class="table table-bordered" id="personelTeamTable">
                                            <tbody>
                                            <div class="border-bottom title-part-padding">
                                                <h5 class="card-title mb-0 text-center">Cooling Unit</h5>
                                            </div>
                                            <tr>
                                             
                                                <td>Cleaning Condensor</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q10Array[0]) ? $q10Array[0] : '' }}"  name="q10[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q10Array[1]) ? $q10Array[1] : '' }}"  name="q10[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q10Array[2]) ? $q10Array[2] : '' }}"  name="q10[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cleaning area dalam Cooling</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q11Array[0]) ? $q11Array[0] : '' }}"  name="q11[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q11Array[1]) ? $q11Array[1] : '' }}"  name="q11[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q11Array[2]) ? $q11Array[2] : '' }}"  name="q11[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cleaning Filter</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q12Array[0]) ? $q12Array[0] : '' }}"  name="q12[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q12Array[1]) ? $q12Array[1] : '' }}"  name="q12[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q12Array[2]) ? $q12Array[2] : '' }}"  name="q12[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cek Water Level</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q13Array[0]) ? $q13Array[0] : '' }}"  name="q13[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q13Array[1]) ? $q13Array[1] : '' }}"  name="q13[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q13Array[2]) ? $q13Array[2] : '' }}"  name="q13[]"></td>
                                            </tr>

                                            <tr>
                                                <td>Cek Kebocoran</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q14Array[0]) ? $q14Array[0] : '' }}"  name="q14[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q14Array[1]) ? $q14Array[1] : '' }}"  name="q14[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q14Array[2]) ? $q14Array[2] : '' }}"  name="q14[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cek Amper kompressor</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q15Array[0]) ? $q15Array[0] : '' }}"  name="q15[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q15Array[1]) ? $q15Array[1] : '' }}"  name="q15[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q15Array[2]) ? $q15Array[2] : '' }}"  name="q15[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cek Amper Fan</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q16Array[0]) ? $q16Array[0] : '' }}"  name="q16[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q16Array[1]) ? $q16Array[1] : '' }}"  name="q16[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q16Array[2]) ? $q16Array[2] : '' }}"  name="q15[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cek Pressure Freon</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q17Array[0]) ? $q17Array[0] : '' }}"  name="q17[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q17Array[1]) ? $q17Array[1] : '' }}"  name="q17[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q17Array[2]) ? $q17Array[2] : '' }}"  name="q17[]"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered" id="personelTeamTable">
                                        <tbody>
                                            <div class="border-bottom title-part-padding">
                                                <h5 class="card-title mb-0 text-center">Cooling Granitur</h5>
                                            </div>
                                            <tr>
                                             
                                                <td> Cleaning Body Unit </td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q18Array[0]) ? $q18Array[0] : '' }}"  name="q18[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q18Array[1]) ? $q18Array[1] : '' }}"  name="q18[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q18Array[2]) ? $q18Array[2] : '' }}"  name="q18[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cleaning Fan</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q19Array[0]) ? $q19Array[0] : '' }}"  name="q19[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q19Array[1]) ? $q19Array[1] : '' }}"  name="q19[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q19Array[2]) ? $q19Array[2] : '' }}"  name="q19[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td> Cek Water Level </td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q20Array[0]) ? $q20Array[0] : '' }}"  name="q20[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q20Array[1]) ? $q20Array[1] : '' }}"  name="q20[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q20Array[2]) ? $q20Array[2] : '' }}"  name="q20[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cek sirkulasi air cooling</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q21Array[0]) ? $q21Array[0] : '' }}"  name="q21[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q21Array[1]) ? $q21Array[1] : '' }}"  name="q21[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q21Array[2]) ? $q21Array[2] : '' }}"  name="q21[]"></td>
                                            </tr>


                                    </tbody>
                                </table>

                               

                                <table class="table table-bordered" id="personelTeamTable">
                                    <thead>
                                        <tr>
                                        
                                            <th>Ac Panel</th>
                                            <th>Cooling Unit</th>
                                            <th>Cooling Granitur</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" class= "text-center" readonly value="{{ isset($q22Array[0]) ? $q22Array[0] : '' }}"  name="q22[]" value="Ac Panel"></td>
                                            <td><input type="checkbox" class= "text-center" readonly value="{{ isset($q22Array[1]) ? $q22Array[1] : '' }}"  name="q22[]" value="Cooling Unit"></td>
                                            <td><input type="checkbox" class= "text-center"readonly value="{{ isset($q22Array[2]) ? $q22Array[2] : '' }}"  name="q22[]" value="Cooling Granitur"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-bordered" id="personelTeamTable">
                                    <thead>
                                        <tr>
                                            <th>No Unit</th>
                                            <th>Merk</th>
                                            <th>Unit Model / Series</th>
                                            <th>Tahun Buat</th>
                                            <th>Tahun Install</th>
                                            <th>Capacity(PK)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Unit 1</td>
                                            <td><input type="text" class="form-control text-center"readonly value="{{ isset($q23Array[0]) ? $q23Array[0] : '' }}"  name="q23[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly value="{{ isset($q23Array[1]) ? $q23Array[1] : '' }}"  name="q23[]"></td>    
                                            <td><input type="text" class="form-control text-center"readonly value="{{ isset($q23Array[2]) ? $q23Array[2] : '' }}"  name="q23[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly value="{{ isset($q23Array[3]) ? $q23Array[3] : '' }}"  name="q23[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly value="{{ isset($q23Array[4]) ? $q23Array[4] : '' }}"  name="q23[]"></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Unit 2</td>
                                            <td><input type="text" class="form-control text-center"readonly value="{{ isset($q24Array[0]) ? $q24Array[0] : '' }}"  name="q24[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly value="{{ isset($q24Array[1]) ? $q24Array[1] : '' }}"  name="q24[]"></td>    
                                            <td><input type="text" class="form-control text-center"readonly value="{{ isset($q24Array[2]) ? $q24Array[2] : '' }}"  name="q24[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly value="{{ isset($q24Array[3]) ? $q24Array[3] : '' }}"  name="q24[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly value="{{ isset($q24Array[4]) ? $q24Array[4] : '' }}"  name="q24[]"></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Unit 3</td>
                                            <td><input type="text" class="form-control text-center"readonly value="{{ isset($q25Array[0]) ? $q25Array[0] : '' }}"  name="q25[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly value="{{ isset($q25Array[1]) ? $q25Array[1] : '' }}"  name="q25[]"></td>    
                                            <td><input type="text" class="form-control text-center"readonly value="{{ isset($q25Array[2]) ? $q25Array[2] : '' }}"  name="q25[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly value="{{ isset($q25Array[3]) ? $q25Array[3] : '' }}"  name="q25[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly value="{{ isset($q25Array[4]) ? $q25Array[4] : '' }}"  name="q25[]"></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <h5 class="text-center" style="background-color: black;color:white">Service Check</h5>

                                <table class="table table-bordered" id="personelTeamTable">
                                    
                                    <thead>
                                        <tr>
                                            <th>No Unit</th>
                                            <th>Cond.</th>
                                            <th>Suction Pressure (Psi)</th>
                                            <th>Discharge Pressure (Psi)</th>
                                            <th></th>
                                            <th>Voltage</th>
                                            <th></th>
                                            <th></th>
                                            <th>Ampere</th>
                                            <th></th>
                                            <th>Remark</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax">R</td>
                                            <td class="tg-0lax">S</td>
                                            <td class="tg-0lax">T</td>
                                            <td class="tg-0lax">H</td>
                                            <td class="tg-0lax">S</td>
                                            <td class="tg-0lax">T</td>
                                            <td class="tg-0lax"></td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>Unit 1</td>
                                            <td>
                                               <p>Standard</p>
                                               <p>Before</p>
                                               <p>After</p>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[0]) ? $q26Array[0] : '' }}"  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[1]) ? $q26Array[1] : '' }}"  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[2]) ? $q26Array[2] : '' }}"  name="q26[]" style="width: 100px;">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[3]) ? $q26Array[3] : '' }}"  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[4]) ? $q26Array[4] : '' }}"  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[5]) ? $q26Array[5] : '' }}"  name="q26[]" style="width: 100px;">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[6]) ? $q26Array[6] : '' }}"  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[7]) ? $q26Array[7] : '' }}"  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[8]) ? $q26Array[8] : '' }}"  name="q26[]" style="width: 100px;">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[9]) ? $q26Array[9] : '' }}"  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[10]) ? $q26Array[10] : '' }}"  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[11]) ? $q26Array[11] : '' }}"  name="q26[]" style="width: 100px;">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[12]) ? $q26Array[12] : '' }}"  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[13]) ? $q26Array[13] : '' }}"  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[14]) ? $q26Array[14] : '' }}"  name="q26[]" style="width: 100px;">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[15]) ? $q26Array[15] : '' }}"  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[16]) ? $q26Array[16] : '' }}"  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[17]) ? $q26Array[17] : '' }}"  name="q26[]" style="width: 100px;">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[18]) ? $q26Array[18] : '' }}"  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[19]) ? $q26Array[19] : '' }}"  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[20]) ? $q26Array[20] : '' }}"  name="q26[]" style="width: 100px;">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[21]) ? $q26Array[21] : '' }}"  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[22]) ? $q26Array[22] : '' }}"  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[23]) ? $q26Array[23] : '' }}"  name="q26[]" style="width: 100px;">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[24]) ? $q26Array[24] : '' }}"  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[25]) ? $q26Array[25] : '' }}"  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[26]) ? $q26Array[26] : '' }}"  name="q26[]" style="width: 100px;">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Unit 2</td>
                                            <td>
                                                <p>Standard</p>
                                                <p>Before</p>
                                                <p>After</p>
                                             </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[0]) ? $q27Array[0] : '' }}"  name="q27[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[1]) ? $q27Array[1] : '' }}"  name="q27[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[2]) ? $q27Array[2] : '' }}"  name="q27[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[3]) ? $q27Array[3] : '' }}"  name="q27[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[4]) ? $q27Array[4] : '' }}"  name="q27[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[5]) ? $q27Array[5] : '' }}"  name="q27[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[6]) ? $q27Array[6] : '' }}"  name="q27[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[7]) ? $q27Array[7] : '' }}"  name="q27[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[8]) ? $q27Array[8] : '' }}"  name="q27[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[9]) ? $q27Array[9] : '' }}"  name="q27[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[10]) ? $q27Array[10] : '' }}"  name="q27[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[11]) ? $q27Array[11] : '' }}"  name="q27[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[12]) ? $q27Array[12] : '' }}"  name="q27[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[13]) ? $q27Array[13] : '' }}"  name="q27[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[14]) ? $q27Array[14] : '' }}"  name="q27[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[15]) ? $q27Array[15] : '' }}"  name="q27[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[16]) ? $q27Array[16] : '' }}"  name="q27[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[17]) ? $q27Array[17] : '' }}"  name="q27[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[18]) ? $q27Array[18] : '' }}"  name="q27[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[19]) ? $q27Array[19] : '' }}"  name="q27[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[20]) ? $q27Array[20] : '' }}"  name="q27[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[21]) ? $q27Array[21] : '' }}"  name="q27[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[22]) ? $q27Array[22] : '' }}"  name="q27[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[23]) ? $q27Array[23] : '' }}"  name="q27[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[24]) ? $q27Array[24] : '' }}"  name="q27[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[25]) ? $q27Array[25] : '' }}"  name="q27[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[26]) ? $q27Array[26] : '' }}"  name="q27[]">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Unit 3</td>
                                            <td>
                                                <p>Standard</p>
                                                <p>Before</p>
                                                <p>After</p>
                                             </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[0]) ? $q28Array[0] : '' }}"  name="q28[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[1]) ? $q28Array[1] : '' }}"  name="q28[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[2]) ? $q28Array[2] : '' }}"  name="q28[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[3]) ? $q28Array[3] : '' }}"  name="q28[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[4]) ? $q28Array[4] : '' }}"  name="q28[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[5]) ? $q28Array[5] : '' }}"  name="q28[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[6]) ? $q28Array[6] : '' }}"  name="q28[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[7]) ? $q28Array[7] : '' }}"  name="q28[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[8]) ? $q28Array[8] : '' }}"  name="q28[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[9]) ? $q28Array[9] : '' }}"  name="q28[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[10]) ? $q28Array[10] : '' }}"  name="q28[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[11]) ? $q28Array[11] : '' }}"  name="q28[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[12]) ? $q28Array[12] : '' }}"  name="q28[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[13]) ? $q28Array[13] : '' }}"  name="q28[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[14]) ? $q28Array[14] : '' }}"  name="q28[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[15]) ? $q28Array[15] : '' }}"  name="q28[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[16]) ? $q28Array[16] : '' }}"  name="q28[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[17]) ? $q28Array[17] : '' }}"  name="q28[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[18]) ? $q28Array[18] : '' }}"  name="q28[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[19]) ? $q28Array[19] : '' }}"  name="q28[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[20]) ? $q28Array[20] : '' }}"  name="q28[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[21]) ? $q28Array[21] : '' }}"  name="q28[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[22]) ? $q28Array[22] : '' }}"  name="q28[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[23]) ? $q28Array[23] : '' }}"  name="q28[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[24]) ? $q28Array[24] : '' }}"  name="q28[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[25]) ? $q28Array[25] : '' }}"  name="q28[]">
                                                <input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[26]) ? $q28Array[26] : '' }}"  name="q28[]">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <button class="btn btn-info px-4 mt-3" type="submit">Submit form</button>
                     
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
