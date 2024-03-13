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
                            <h4 class="card-title mb-0 text-center">Task List Evaporator Air Cooler</h4>
                        </div>
                        <div class="card-body">
                       
                                @csrf
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

                                        @php
                                        $q1Array = explode(',', $EvaporatorAirCooler->q1);
                                        $q2Array = explode(',', $EvaporatorAirCooler->q2);
                                        $q3Array = explode(',', $EvaporatorAirCooler->q3);
                                        $q4Array = explode(',', $EvaporatorAirCooler->q4);
                                        $q5Array = explode(',', $EvaporatorAirCooler->q5);
                                        $q6Array = explode(',', $EvaporatorAirCooler->q6);
                                        $q7Array = explode(',', $EvaporatorAirCooler->q7);
                                        $q8Array = explode(',', $EvaporatorAirCooler->q8);
                                        $q9Array = explode(',', $EvaporatorAirCooler->q9);
                                        $q10Array = explode(',', $EvaporatorAirCooler->q10);
                                        $q11Array = explode(',', $EvaporatorAirCooler->q11);
                                        $q12Array = explode(',', $EvaporatorAirCooler->q12);
                                        $q13Array = explode(',', $EvaporatorAirCooler->q13);
                                        $q14Array = explode(',', $EvaporatorAirCooler->q14);
                                        $q15Array = explode(',', $EvaporatorAirCooler->q15);
                                        $q16Array = explode(',', $EvaporatorAirCooler->q16);
                                        $q17Array = explode(',', $EvaporatorAirCooler->q17);
                                        $q18Array = explode(',', $EvaporatorAirCooler->q18);
                                        $q19Array = explode(',', $EvaporatorAirCooler->q19);
                                        $q20Array = explode(',', $EvaporatorAirCooler->q20);
                                        $q21Array = explode(',', $EvaporatorAirCooler->q21);
                                        $q22Array = explode(',', $EvaporatorAirCooler->q22);
                                        $q23Array = explode(',', $EvaporatorAirCooler->q23);
                                        $q24Array = explode(',', $EvaporatorAirCooler->q24);
                                        $q25Array = explode(',', $EvaporatorAirCooler->q25);
                                        $q26Array = explode(',', $EvaporatorAirCooler->q26);
                                        $q27Array = explode(',', $EvaporatorAirCooler->q27);
                                        $q28Array = explode(',', $EvaporatorAirCooler->q28);
                                        $q29Array = explode(',', $EvaporatorAirCooler->q29);
                                        $q30Array = explode(',', $EvaporatorAirCooler->q30);
                                        $q31Array = explode(',', $EvaporatorAirCooler->q31);
                                        $q32Array = explode(',', $EvaporatorAirCooler->q32);
                                        $q33Array = explode(',', $EvaporatorAirCooler->q33);
                                        @endphp
                                        
                                        <input type="hidden" required name="id" value="{{ $EvaporatorAirCooler->id }}">
                                            <tr>
                                      
                                                <td>INTENSIVE SAFETY BRIEFING TEAM</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q1Array[0]) ? $q1Array[0] : '' }}" name="q1[]"></td>
                                               <td class="text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q1Array[1]) ? $q1Array[1] : '' }}" name="q1[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Check Condition Filler</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q2Array[0]) ? $q2Array[0] : '' }}" name="q2[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q2Array[1]) ? $q2Array[1] : '' }}" name="q2[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q2Array[2]) ? $q2Array[2] : '' }}" name="q2[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Filler</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q3Array[0]) ? $q3Array[0] : '' }}" name="q3[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q3Array[1]) ? $q3Array[1] : '' }}" name="q3[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q3Array[2]) ? $q3Array[2] : '' }}" name="q3[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td> Replace Filler</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q4Array[0]) ? $q4Array[0] : '' }}" name="q4[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q4Array[1]) ? $q4Array[1] : '' }}" name="q4[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q4Array[2]) ? $q4Array[2] : '' }}" name="q4[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td> Check Basin Condition</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q5Array[0]) ? $q5Array[0] : '' }}" name="q5[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q5Array[1]) ? $q5Array[1] : '' }}" name="q5[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q5Array[2]) ? $q5Array[2] : '' }}" name="q5[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Backwash Water From basin</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q6Array[0]) ? $q6Array[0] : '' }}" name="q6[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q6Array[1]) ? $q6Array[1] : '' }}" name="q6[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q6Array[2]) ? $q6Array[2] : '' }}" name="q6[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Basin</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q7Array[0]) ? $q7Array[0] : '' }}" name="q7[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q7Array[1]) ? $q7Array[1] : '' }}" name="q7[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q7Array[2]) ? $q7Array[2] : '' }}" name="q7[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Water Pump</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q8Array[0]) ? $q8Array[0] : '' }}" name="q8[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q8Array[1]) ? $q8Array[1] : '' }}" name="q8[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q8Array[2]) ? $q8Array[2] : '' }}" name="q8[]"></td>
                                            </tr>

                                            <tr> 
                                                <td>Cleaning Filter Water Pump</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q9Array[0]) ? $q9Array[0] : '' }}" name="q9[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q9Array[1]) ? $q9Array[1] : '' }}" name="q9[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q9Array[2]) ? $q9Array[2] : '' }}" name="q9[]"></td>
                                            </tr>
    
                                            <tr>
                                             
                                                <td>Check Water Level Switch</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q10Array[0]) ? $q10Array[0] : '' }}" name="q10[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q10Array[1]) ? $q10Array[1] : '' }}" name="q10[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q10Array[2]) ? $q10Array[2] : '' }}" name="q10[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Floating Valve</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q11Array[0]) ? $q11Array[0] : '' }}" name="q11[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q11Array[1]) ? $q11Array[1] : '' }}" name="q11[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q11Array[2]) ? $q11Array[2] : '' }}" name="q11[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Water Quality</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q12Array[0]) ? $q12Array[0] : '' }}" name="q12[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q12Array[1]) ? $q12Array[1] : '' }}" name="q12[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q12Array[2]) ? $q12Array[2] : '' }}" name="q12[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Water Line Distribution</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q13Array[0]) ? $q13Array[0] : '' }}" name="q13[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q13Array[1]) ? $q13Array[1] : '' }}" name="q13[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q13Array[2]) ? $q13Array[2] : '' }}" name="q13[]"></td>
                                            </tr>

                                            <tr>
                                                <td>Check Support Bracket Fan</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q14Array[0]) ? $q14Array[0] : '' }}" name="q14[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q14Array[1]) ? $q14Array[1] : '' }}" name="q14[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q14Array[2]) ? $q14Array[2] : '' }}" name="q14[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Fan Blade Motor Supply</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q15Array[0]) ? $q15Array[0] : '' }}" name="q15[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q15Array[1]) ? $q15Array[1] : '' }}" name="q15[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q15Array[2]) ? $q15Array[2] : '' }}" name="q15[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cleaning Fan Motor</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q16Array[0]) ? $q16Array[0] : '' }}" name="q16[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q16Array[1]) ? $q16Array[1] : '' }}" name="q16[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q16Array[2]) ? $q16Array[2] : '' }}" name="q15[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td> Check Temperature Motor </td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q17Array[0]) ? $q17Array[0] : '' }}" name="q17[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q17Array[1]) ? $q17Array[1] : '' }}" name="q17[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q17Array[2]) ? $q17Array[2] : '' }}" name="q17[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Insulation Motor</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q18Array[0]) ? $q18Array[0] : '' }}" name="q18[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q18Array[1]) ? $q18Array[1] : '' }}" name="q18[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q18Array[2]) ? $q18Array[2] : '' }}" name="q18[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Ampere</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q19Array[0]) ? $q19Array[0] : '' }}" name="q19[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q19Array[1]) ? $q19Array[1] : '' }}" name="q19[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q19Array[2]) ? $q19Array[2] : '' }}" name="q19[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Display HMI</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q20Array[0]) ? $q20Array[0] : '' }}" name="q20[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q20Array[1]) ? $q20Array[1] : '' }}" name="q20[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q20Array[2]) ? $q20Array[2] : '' }}" name="q20[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Output Air Temperature</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q21Array[0]) ? $q21Array[0] : '' }}" name="q21[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q21Array[1]) ? $q21Array[1] : '' }}" name="q21[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q21Array[2]) ? $q21Array[2] : '' }}" name="q21[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Output Air Flow</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q22Array[0]) ? $q22Array[0] : '' }}" name="q22[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q22Array[1]) ? $q22Array[1] : '' }}" name="q22[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q22Array[2]) ? $q22Array[2] : '' }}" name="q22[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Checklist History PM</td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q23Array[0]) ? $q23Array[0] : '' }}" name="q23[]"></td>
                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q23Array[1]) ? $q23Array[1] : '' }}" name="q23[]" ></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly value="{{ isset($q23Array[2]) ? $q23Array[2] : '' }}" name="q23[]"></td>
                                            </tr>


                                            <table class="table table-bordered" id="personelTeamTable">
                                                <div class="border-bottom title-part-padding">
                                                    <h4 class="card-title mb-0 text-center">Profil Unit</h4>
                                                </div>
            
                                                <thead>
                                                    <tr>
                                                        <th>No Unit</th>
                                                        <th>Merk</th>
                                                        <th>Unit Model / Series</th>
                                                        <th>Tahun Buat</th>
                                                        <th>Tahun Install</th>
                                                        <th>Capacity (PK)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td><p>Unit 1</p></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q24Array[0]) ? $q24Array[0] : '' }}" name="q24[]" ></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q24Array[1]) ? $q24Array[1] : '' }}" name="q24[]"></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q24Array[2]) ? $q24Array[2] : '' }}" name="q24[]" ></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q24Array[3]) ? $q24Array[3] : '' }}" name="q24[]"></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q24Array[4]) ? $q24Array[4] : '' }}" name="q24[]" ></td>
                                                    </tr>
            
                                                    <tr>
                                                        <td><p>Unit 2</p></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q25Array[0]) ? $q25Array[0] : '' }}" name="q25[]" ></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q25Array[1]) ? $q25Array[1] : '' }}" name="q25[]"></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q25Array[2]) ? $q25Array[2] : '' }}" name="q25[]" ></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q25Array[3]) ? $q25Array[3] : '' }}" name="q25[]"></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q25Array[4]) ? $q25Array[4] : '' }}" name="q25[]" ></td>
                                                    </tr>
            
                                                    <tr class="text-center">
                                                        <td><p>Unit 3</p></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[0]) ? $q26Array[0] : '' }}" name="q26[]" ></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[1]) ? $q26Array[1] : '' }}" name="q26[]"></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[2]) ? $q26Array[2] : '' }}" name="q26[]" ></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[3]) ? $q26Array[3] : '' }}" name="q26[]"></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q26Array[4]) ? $q26Array[4] : '' }}" name="q26[]" ></td>
                                                    </tr>
            
                                                    <tr class="text-center">
                                                        <td><p>Unit 4</p></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[0]) ? $q27Array[0] : '' }}" name="q27[]" ></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[1]) ? $q27Array[1] : '' }}" name="q27[]"></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[2]) ? $q27Array[2] : '' }}" name="q27[]" ></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[3]) ? $q27Array[3] : '' }}" name="q27[]"></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q27Array[4]) ? $q27Array[4] : '' }}" name="q27[]" ></td>
                                                    </tr>
            
                                                    <tr class="text-center">
                                                        <td><p>Unit 5</p></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[0]) ? $q28Array[0] : '' }}" name="q28[]" ></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[1]) ? $q28Array[1] : '' }}" name="q28[]"></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[2]) ? $q28Array[2] : '' }}" name="q28[]" ></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[3]) ? $q28Array[3] : '' }}" name="q28[]"></td>
                                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q28Array[4]) ? $q28Array[4] : '' }}" name="q28[]" ></td>
                                                    </tr>
                                                </tbody>
                                                    </table>
            
                                                    <table class="table table-bordered" id="personelTeamTable">
                                                        <div class="border-bottom title-part-padding">
                                                            <h4 class="card-title mb-0 text-center">Service Check Per Unit</h4>
                                                        </div>
                    
                                                        <thead>
                                                            <tr>
                                                                <th class="my-5">No Unit</th>
                                                                <th>Condition</th>
                                                                <th>In</th>
                                                                <th></th>
                                                                <th>Out</th>
                                                                <th></th>
                                                                <th>Ts.V-Belt(Pa)</th>
                                                                <th>Filter(OK/NOT OK)</th>
                                                                <th>Basin(OK/NOT OK)</th>
                                                         
                                                                <th></th>
                                                                <th>Voltage R/S/T</th>
                                                                <th></th>
                                                                <th></th>
                                                                <th>Ampere R/S/T</th>
                                                                <th></th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="tg-0lax"></td>
                                                                <td class="tg-0lax"></td>
                                                                <td class="tg-0lax">T (°C)</td>
                                                                <td class="tg-0lax">P (Bar)</td>
                                                                <td class="tg-0lax">T (°C)</td>
                                                                <td class="tg-0lax">P (Bar)</td>
                                                                <td class="tg-0lax"></td>
                                                                <td class="tg-0lax"></td>
                                                                <td class="tg-0lax"></td>
                                                                <td class="tg-0lax">V</td>
                                                                <td class="tg-0lax text-center">V</td>
                                                                <td class="tg-0lax">V</td>
                                                                <td class="tg-0lax">Ampere</td>
                                                                <td class="tg-0lax">Ampere</td>
                                                                <td class="tg-0lax">Ampere</td>
                                                            </tr>
                                                        </tbody>
                                                        
                                                        <tbody>
                                                            <tr class="text-center">
                                                                <td><p>Unit 1</p></td>
                                                                <td class="text-center">
                                                                    <p>Standard</p>
                                                                    <p>Before</p>
                                                                    <p>After</p>
                                                                 </td>
                                                                <td><input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[0]) ? $q29Array[0] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[1]) ? $q29Array[1] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[2]) ? $q29Array[2] : '' }}" name="q29[]">
                                                                </td>
                                                                <td><input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[3]) ? $q29Array[3] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[4]) ? $q29Array[4] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[5]) ? $q29Array[5] : '' }}" name="q29[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[6]) ? $q29Array[6] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[7]) ? $q29Array[7] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[8]) ? $q29Array[8] : '' }}" name="q29[]">
                                                                </td>
                                                                <td><input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[9]) ? $q29Array[9] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[10]) ? $q29Array[10] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[11]) ? $q29Array[11] : '' }}" name="q29[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[12]) ? $q29Array[12] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[13]) ? $q29Array[13] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[14]) ? $q29Array[14] : '' }}" name="q29[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[15]) ? $q29Array[15] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[16]) ? $q29Array[16] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[17]) ? $q29Array[17] : '' }}" name="q29[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[18]) ? $q29Array[18] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[19]) ? $q29Array[19] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[20]) ? $q29Array[20] : '' }}" name="q29[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[21]) ? $q29Array[21] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[22]) ? $q29Array[22] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[23]) ? $q29Array[23] : '' }}" name="q29[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[24]) ? $q29Array[24] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[25]) ? $q29Array[25] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[26]) ? $q29Array[26] : '' }}" name="q29[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[27]) ? $q29Array[27] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[28]) ? $q29Array[28] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[29]) ? $q29Array[29] : '' }}" name="q29[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[30]) ? $q29Array[30] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[31]) ? $q29Array[31] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[32]) ? $q29Array[32] : '' }}" name="q29[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[33]) ? $q29Array[33] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[34]) ? $q29Array[34] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[35]) ? $q29Array[35] : '' }}" name="q29[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[36]) ? $q29Array[36] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[37]) ? $q29Array[37] : '' }}" name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"readonly value="{{ isset($q29Array[38]) ? $q29Array[38] : '' }}" name="q29[]">
                                                                </td>
                                                            </tr>
                    
                                                            <tr class="text-center">
                                                                <td><p>Unit 2</p></td>
                                                                <td class="text-center">
                                                                    <p>Standard</p>
                                                                    <p>Before</p>
                                                                    <p>After</p>
                                                                 </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[0]) ? $q30Array[0] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[1]) ? $q30Array[1] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[2]) ? $q30Array[2] : '' }}" name="q30[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[3]) ? $q30Array[3] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[4]) ? $q30Array[4] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[5]) ? $q30Array[5] : '' }}" name="q30[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[6]) ? $q30Array[6] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[7]) ? $q30Array[7] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[8]) ? $q30Array[8] : '' }}" name="q30[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[9]) ? $q30Array[9] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[10]) ? $q30Array[10] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[11]) ? $q30Array[11] : '' }}" name="q30[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[12]) ? $q30Array[12] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[13]) ? $q30Array[13] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[14]) ? $q30Array[14] : '' }}" name="q30[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[15]) ? $q30Array[15] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[16]) ? $q30Array[16] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[17]) ? $q30Array[17] : '' }}" name="q30[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[18]) ? $q30Array[18] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[19]) ? $q30Array[19] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[20]) ? $q30Array[20] : '' }}" name="q30[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[21]) ? $q30Array[21] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[22]) ? $q30Array[22] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[23]) ? $q30Array[23] : '' }}" name="q30[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[24]) ? $q30Array[24] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[25]) ? $q30Array[26] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[26]) ? $q30Array[26] : '' }}" name="q30[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[27]) ? $q30Array[27] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[28]) ? $q30Array[28] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[29]) ? $q30Array[29] : '' }}" name="q30[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[30]) ? $q30Array[30] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[31]) ? $q30Array[31] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[32]) ? $q30Array[32] : '' }}" name="q30[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[33]) ? $q30Array[33] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[34]) ? $q30Array[34] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[35]) ? $q30Array[35] : '' }}" name="q30[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[36]) ? $q30Array[36] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[37]) ? $q30Array[37] : '' }}" name="q30[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q30Array[38]) ? $q30Array[38] : '' }}" name="q30[]">
                                                                </td>
                                                            </tr>
                    
                                                            <tr class="text-center">
                                                                <td><p>Unit 3</p></td>
                                                                <td class="text-center">
                                                                    <p>Standard</p>
                                                                    <p>Before</p>
                                                                    <p>After</p>
                                                                 </td>
                                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[0]) ? $q31Array[0] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[1]) ? $q31Array[1] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[2]) ? $q31Array[2] : '' }}" name="q31[]">
                                                                </td>
                                                                <td><input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[3]) ? $q31Array[3] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[4]) ? $q31Array[4] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[5]) ? $q31Array[5] : '' }}" name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[6]) ? $q31Array[6] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[7]) ? $q31Array[7] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[8]) ? $q31Array[8] : '' }}" name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[9]) ? $q31Array[9] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[10]) ? $q31Array[10] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[11]) ? $q31Array[11] : '' }}" name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[12]) ? $q31Array[12] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[13]) ? $q31Array[13] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[14]) ? $q31Array[14] : '' }}" name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[15]) ? $q31Array[15] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[16]) ? $q31Array[16] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[17]) ? $q31Array[17] : '' }}" name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[18]) ? $q31Array[18] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[19]) ? $q31Array[19] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[20]) ? $q31Array[20] : '' }}" name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[21]) ? $q31Array[21] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[22]) ? $q31Array[22] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[23]) ? $q31Array[23] : '' }}" name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[24]) ? $q31Array[24] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[25]) ? $q31Array[25] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[26]) ? $q31Array[26] : '' }}" name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[27]) ? $q31Array[27] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[28]) ? $q31Array[28] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[29]) ? $q31Array[29] : '' }}" name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[30]) ? $q31Array[30] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[31]) ? $q31Array[31] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[32]) ? $q31Array[32] : '' }}" name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[33]) ? $q31Array[33] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[34]) ? $q31Array[34] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[35]) ? $q31Array[35] : '' }}" name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[36]) ? $q31Array[36] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[37]) ? $q31Array[37] : '' }}" name="q31[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q31Array[38]) ? $q31Array[38] : '' }}" name="q31[]">
                                                                </td>
                                                            </tr>
                    
                                                            <tr class="text-center">
                                                                <td><p>Unit 4</p></td>
                                                                <td class="text-center">
                                                                    <p>Standard</p>
                                                                    <p>Before</p>
                                                                    <p>After</p>
                                                                 </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[0]) ? $q32Array[0] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[1]) ? $q32Array[1] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[2]) ? $q32Array[2] : '' }}" name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[3]) ? $q32Array[3] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[4]) ? $q32Array[4] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[5]) ? $q32Array[5] : '' }}" name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[6]) ? $q32Array[6] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[7]) ? $q32Array[7] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[8]) ? $q32Array[8] : '' }}" name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[9]) ? $q32Array[9] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[10]) ? $q32Array[10] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[11]) ? $q32Array[11] : '' }}" name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[12]) ? $q32Array[12] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[13]) ? $q32Array[13] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[14]) ? $q32Array[14] : '' }}" name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[15]) ? $q32Array[15] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[16]) ? $q32Array[16] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[17]) ? $q32Array[17] : '' }}" name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[18]) ? $q32Array[18] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[19]) ? $q32Array[19] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[20]) ? $q32Array[20] : '' }}" name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[21]) ? $q32Array[21] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[22]) ? $q32Array[22] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[23]) ? $q32Array[23] : '' }}" name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[24]) ? $q32Array[24] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[25]) ? $q32Array[25] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[26]) ? $q32Array[26] : '' }}" name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[27]) ? $q32Array[27] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[28]) ? $q32Array[28] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[29]) ? $q32Array[29] : '' }}" name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[30]) ? $q32Array[30] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[31]) ? $q32Array[31] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[32]) ? $q32Array[32] : '' }}" name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[33]) ? $q33Array[33] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[34]) ? $q32Array[34] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[35]) ? $q32Array[35] : '' }}" name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[36]) ? $q32Array[36] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[37]) ? $q32Array[37] : '' }}" name="q32[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q32Array[38]) ? $q32Array[38] : '' }}" name="q32[]">
                                                                </td>
                                                            </tr>
                                                            
                                                            <tr class="text-center">
                                                                <td><p>Unit 5</p></td>
                                                                <td class="text-center">
                                                                    <p>Standard</p>
                                                                    <p>Before</p>
                                                                    <p>After</p>
                                                                 </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[0]) ? $q33Array[0] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[1]) ? $q33Array[1] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[2]) ? $q33Array[2] : '' }}" name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[3]) ? $q33Array[3] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[4]) ? $q33Array[4] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[5]) ? $q33Array[5] : '' }}" name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[6]) ? $q33Array[6] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[7]) ? $q33Array[7] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[8]) ? $q33Array[8] : '' }}" name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[9]) ? $q33Array[9] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[10]) ? $q33Array[10] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[11]) ? $q33Array[11] : '' }}" name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[12]) ? $q33Array[12] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[13]) ? $q33Array[13] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[14]) ? $q33Array[14] : '' }}" name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[15]) ? $q33Array[15] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[16]) ? $q33Array[16] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[17]) ? $q33Array[17] : '' }}" name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[18]) ? $q33Array[18] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[19]) ? $q33Array[19] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[20]) ? $q33Array[20] : '' }}" name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[21]) ? $q33Array[21] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[22]) ? $q33Array[22] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[23]) ? $q33Array[23] : '' }}" name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[24]) ? $q33Array[24] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[25]) ? $q33Array[25] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[26]) ? $q33Array[26] : '' }}" name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[27]) ? $q33Array[27] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[28]) ? $q33Array[28] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[29]) ? $q33Array[29] : '' }}" name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[30]) ? $q33Array[30] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[31]) ? $q33Array[31] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[32]) ? $q33Array[32] : '' }}" name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[33]) ? $q33Array[33] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[34]) ? $q33Array[34] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[35]) ? $q33Array[35] : '' }}" name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[36]) ? $q33Array[36] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[37]) ? $q33Array[37] : '' }}" name="q33[]">
                                                                    <input type="text" class="form-control text-center"readonly value="{{ isset($q33Array[38]) ? $q33Array[38] : '' }}" name="q33[]">
                                                                </td>
                                                            </tr>
            
                                                        </tbody>
                                                            </table>

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
@endsection
