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
                            <h4 class="card-title mb-0 text-center">Task List Mini Chiller</h4>
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
                                        $q1Array = explode(',', $MiniChiller->q1);
                                        $q2Array = explode(',', $MiniChiller->q2);
                                        $q3Array = explode(',', $MiniChiller->q3);
                                        $q4Array = explode(',', $MiniChiller->q4);
                                        $q5Array = explode(',', $MiniChiller->q5);
                                        $q6Array = explode(',', $MiniChiller->q6);
                                        $q7Array = explode(',', $MiniChiller->q7);
                                        $q8Array = explode(',', $MiniChiller->q8);
                                        $q9Array = explode(',', $MiniChiller->q9);
                                        $q10Array = explode(',', $MiniChiller->q10);
                                        $q11Array = explode(',', $MiniChiller->q11);
                                        $q12Array = explode(',', $MiniChiller->q12);
                                        $q13Array = explode(',', $MiniChiller->q13);
                                        $q14Array = explode(',', $MiniChiller->q14);
                                        $q15Array = explode(',', $MiniChiller->q15);
                                        $q16Array = explode(',', $MiniChiller->q16);
                                        $q17Array = explode(',', $MiniChiller->q17);
                                        $q18Array = explode(',', $MiniChiller->q18);
                                        $q19Array = explode(',', $MiniChiller->q19);
                                        $q20Array = explode(',', $MiniChiller->q20);
                                        $q21Array = explode(',', $MiniChiller->q21);
                                        $q22Array = explode(',', $MiniChiller->q22);
                                        $q23Array = explode(',', $MiniChiller->q23);
                                        $q24Array = explode(',', $MiniChiller->q24);
                                        $q25Array = explode(',', $MiniChiller->q25);
                                        $q26Array = explode(',', $MiniChiller->q26);
                                        $q27Array = explode(',', $MiniChiller->q27);
                                        $q28Array = explode(',', $MiniChiller->q28);
                                        $q29Array = explode(',', $MiniChiller->q29);
                                        $q30Array = explode(',', $MiniChiller->q30);
                                        $q31Array = explode(',', $MiniChiller->q31);
                                        $q32Array = explode(',', $MiniChiller->q32);
                                        $q33Array = explode(',', $MiniChiller->q33);
                                        $q34Array = explode(',', $MiniChiller->q34);
                                        $q35Array = explode(',', $MiniChiller->q35);
                                        $q36Array = explode(',', $MiniChiller->q36);
                                        $q37Array = explode(',', $MiniChiller->q37);
                                        $q38Array = explode(',', $MiniChiller->q38);
                                        $q39Array = explode(',', $MiniChiller->q39);
                                        $q40Array = explode(',', $MiniChiller->q40);
                                        $q41Array = explode(',', $MiniChiller->q41);
                                        $q42Array = explode(',', $MiniChiller->q42);
                                        $q43Array = explode(',', $MiniChiller->q43);
                                        $q44Array = explode(',', $MiniChiller->q44);
                                    @endphp
                                    <input type="hidden"required name="id" value="{{ $id }}">
                                    <tr>
                                        <td>Losgsheet Parameter Unit</td>
                                        <td><input type="text" class="form-control text-center"readonly value="{{ isset($q1Array[0]) ? $q1Array[0] : '' }}" name="q1[]"></td>
                                        <!-- Kolom "Standard Condition" dengan input yang tidak bisa diubah -->
                                        <td class="form-control text-center"><p>OK</p></td>
                                        <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q1Array[1]) ? $q1Array[1] : '' }}" name="q1[]"></td>
                                    </tr>
                                            <tr>
                                             
                                                <td>Inspect Condition Condensor coil</td>
                                                
                                                <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q2Array[0]) ? $q2Array[0] : '' }}" name="q2[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q2Array[1]) ? $q2Array[1] : '' }}" name="q2[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td> Cleaning Condensor coil</td>
                                                <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q3Array[0]) ? $q3Array[0] : '' }}" name="q3[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q3Array[1]) ? $q3Array[1] : '' }}" name="q3[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td> Cleaning Fan Condensor</td>
                                                <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q4Array[0]) ? $q4Array[0] : '' }}" name="q4[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q4Array[1]) ? $q4Array[1] : '' }}" name="q4[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td> Cleaning Component Unit</td>
                                                <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q5Array[0]) ? $q5Array[0] : '' }}" name="q5[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q5Array[1]) ? $q5Array[1] : '' }}" name="q5[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Strainer</td>
                                                <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q6Array[0]) ? $q6Array[0] : '' }}" name="q6[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q6Array[0]) ? $q6Array[0] : '' }}" name="q6[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Check Physical Condition Unit</td>
                                                <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q7Array[0]) ? $q7Array[0] : '' }}" name="q7[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q7Array[1]) ? $q7Array[1] : '' }}" name="q7[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td> Check Part Fungction
                                                    ( Compressor , TXV, Sensor, etc. )"</td>
                                                <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q8Array[0]) ? $q8Array[0] : '' }}" name="q8[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q8Array[0]) ? $q8Array[0] : '' }}" name="q8[]"></td>
                                            </tr>

                                            <tr> 
                                                <td>Check Pressure Water in & Out</td>
                                                <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q9Array[0]) ? $q9Array[0] : '' }}" name="q9[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q9Array[1]) ? $q9Array[1] : '' }}" name="q9[]"></td>
                                            </tr>
    
                                            <tr>
                                             
                                                <td>Check Temperatur EWT & LWT</td>
                                                <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q10Array[0]) ? $q10Array[0] : '' }}" name="q10[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q10Array[1]) ? $q10Array[1] : '' }}" name="q10[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Actual Pressure Refrigerant</td>
                                                <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q11Array[0]) ? $q11Array[0] : '' }}" name="q11[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q11Array[1]) ? $q11Array[1] : '' }}" name="q11[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Motorize Valve Water</td>
                                                <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q12Array[0]) ? $q12Array[0] : '' }}" name="q12[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q12Array[1]) ? $q12Array[1] : '' }}" name="q12[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Syncronize All Program Match With BMS</td>
                                                <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q13Array[0]) ? $q13Array[0] : '' }}" name="q13[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q13Array[1]) ? $q13Array[1] : '' }}" name="q13[]"></td>
                                            </tr>

                                            <tr>
                                                <td>Inspection Piping Chillwater</td>
                                                <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q14Array[0]) ? $q14Array[0] : '' }}" name="q14[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q14Array[1]) ? $q14Array[1] : '' }}" name="q14[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Inspection Piping Refrigeration</td>
                                                <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q15Array[0]) ? $q15Array[0] : '' }}" name="q15[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q15Array[1]) ? $q15Array[1] : '' }}" name="q15[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Checklist History PM</td>
                                                <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q16Array[0]) ? $q16Array[0] : '' }}" name="q16[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q16Array[1]) ? $q16Array[1] : '' }}" name="q16[]"></td>
                                            </tr>
                                    </tbody>
                                </table>

                        
                                    <div class="border-bottom title-part-padding">
                                        <h5 class="text-center" style="background-color: black;color:white">Service Check</h5>
                                    </div>
                                    <table class="table table-bordered" id="personelTeamTable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Description</th>
                                            <th></th>
                                            <th class="text-center">Uom</th>
                                            <th class="text-center">Standar</th>
                                            <th class="text-center">Measurement</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax">Before</td> 
                                            <td class="tg-0lax">After</td> 
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">EWT</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>°C</p></td>
                                            <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q17Array[0]) ? $q17Array[0] : '' }}" name="q17[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q17Array[1]) ? $q17Array[1] : '' }}" name="q17[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q17Array[2]) ? $q17Array[2] : '' }}" name="q17[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">LWT</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>°C</p></td>
                                            <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q18Array[0]) ? $q18Array[0] : '' }}" name="q18[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q18Array[1]) ? $q18Array[1] : '' }}" name="q18[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q18Array[2]) ? $q18Array[2] : '' }}" name="q18[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Setpoint</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>°C</p></td>
                                            <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q19Array[0]) ? $q19Array[0] : '' }}" name="q19[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q19Array[1]) ? $q19Array[1] : '' }}" name="q19[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q19Array[2]) ? $q19Array[2] : '' }}" name="q19[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Load</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>%</p></td>  
                                            <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q20Array[0]) ? $q20Array[0] : '' }}" name="q20[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q20Array[1]) ? $q20Array[1] : '' }}" name="q20[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q20Array[2]) ? $q20Array[2] : '' }}" name="q20[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">EXV Level</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>%</p></td>  
                                            <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q21Array[0]) ? $q21Array[0] : '' }}" name="q21[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q21Array[1]) ? $q21Array[1] : '' }}" name="q21[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q21Array[2]) ? $q21Array[2] : '' }}" name="q21[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Suction Press A</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>KPA</p></td>  
                                            <td class="text-center"><p>600-750</p></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q22Array[0]) ? $q22Array[0] : '' }}" name="q22[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q22Array[1]) ? $q22Array[1] : '' }}" name="q22[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Discharge Press A</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>KPA</p></td>  
                                            <td class="text-center"><p>2400-3200</p></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q23Array[0]) ? $q23Array[0] : '' }}" name="q23[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q23Array[1]) ? $q23Array[1] : '' }}" name="q23[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Suction Press B<Btn></Btn></td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>KPA</p></td>  
                                            <td class="text-center"><p>600-750</p></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q24Array[0]) ? $q24Array[0] : '' }}" name="q24[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q24Array[1]) ? $q24Array[1] : '' }}" name="q24[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Discharge press B</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>KPA</p></td>  
                                            <td class="text-center"><p>2400-3200</p></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q25Array[0]) ? $q25Array[0] : '' }}" name="q25[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q25Array[1]) ? $q25Array[1] : '' }}" name="q25[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Sat.Suction Temp A</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>°C</p></td>  
                                            <td class="text-center"><p>0-5</p></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q26Array[0]) ? $q26Array[0] : '' }}" name="q26[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q26Array[1]) ? $q26Array[1] : '' }}" name="q26[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Sat.Suction Temp B</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>°C</p></td>  
                                            <td class="text-center"><p>0-5</p></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q27Array[0]) ? $q27Array[0] : '' }}" name="q27[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q27Array[1]) ? $q27Array[1] : '' }}" name="q27[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Oil Level A</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>%</p></td>  
                                            <td class="text-center"><p>50-75</p></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q28Array[0]) ? $q28Array[0] : '' }}" name="q28[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q28Array[1]) ? $q28Array[1] : '' }}" name="q28[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Oil Level B</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>%</p></td>  
                                            <td class="text-center"><p>50-75</p></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q29Array[0]) ? $q29Array[0] : '' }}" name="q29[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q29Array[1]) ? $q29Array[1] : '' }}" name="q29[]"></td>
                                        </tr>

                                        <tr class="text-center">
                                            <td class="text-center py-5">Voltage</td>
                                            <td class="text-center">
                                                <p>L1-L2</p>
                                                <p>L2-L3</p>
                                                <p>L3-L1</p>
                                            </td>
                                            <td class="text-center">
                                                <p>V</p>
                                                <p>V</p>
                                                <p>V</p>
                                            </td>
                                            <td class="text-center">
                                                <p>380</p>
                                                <p>380</p>
                                                <p>380</p>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly  value="{{ isset($q30Array[0]) ? $q30Array[0] : '' }}" name="q30[]">
                                                <input type="text" class="form-control text-center"readonly  value="{{ isset($q30Array[1]) ? $q30Array[1] : '' }}" name="q30[]">
                                                <input type="text" class="form-control text-center"readonly  value="{{ isset($q30Array[2]) ? $q30Array[2] : '' }}" name="q30[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly  value="{{ isset($q30Array[3]) ? $q30Array[3] : '' }}" name="q30[]">
                                                <input type="text" class="form-control text-center"readonly  value="{{ isset($q30Array[4]) ? $q30Array[4] : '' }}" name="q30[]">
                                                <input type="text" class="form-control text-center"readonly  value="{{ isset($q30Array[5]) ? $q30Array[5] : '' }}" name="q30[]">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-center py-5">Ampere</td>
                                            <td class="form-control text-center">
                                                <p>A1</p>
                                                <p>A2</p>
                                                <p>B1</p>
                                                <p>B2</p>
                                            </td>
                                            <td class="text-center">
                                                <p>AMP</p>
                                                <p>AMP</p>
                                                <p>AMP</p>
                                                <p>AMP</p>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly  value="{{ isset($q31Array[0]) ? $q31Array[0] : '' }}" name="q31[]">
                                                <input type="text" class="form-control text-center"readonly  value="{{ isset($q31Array[1]) ? $q31Array[1] : '' }}" name="q31[]">
                                                <input type="text" class="form-control text-center"readonly  value="{{ isset($q31Array[2]) ? $q31Array[2] : '' }}" name="q31[]">
                                                <input type="text" class="form-control text-center"readonly  value="{{ isset($q31Array[3]) ? $q31Array[3] : '' }}" name="q31[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly  value="{{ isset($q31Array[4]) ? $q31Array[4] : '' }}" name="q31[]">
                                                <input type="text" class="form-control text-center"readonly  value="{{ isset($q31Array[5]) ? $q31Array[5] : '' }}" name="q31[]">
                                                <input type="text" class="form-control text-center"readonly  value="{{ isset($q31Array[6]) ? $q31Array[6] : '' }}" name="q31[]">
                                                <input type="text" class="form-control text-center"readonly  value="{{ isset($q31Array[7]) ? $q31Array[7] : '' }}" name="q31[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"readonly  value="{{ isset($q31Array[8]) ? $q31Array[8] : '' }}" name="q31[]">
                                                <input type="text" class="form-control text-center"readonly  value="{{ isset($q31Array[9]) ? $q31Array[9] : '' }}" name="q31[]">
                                                <input type="text" class="form-control text-center"readonly  value="{{ isset($q31Array[10]) ? $q31Array[10] : '' }}" name="q31[]">
                                                <input type="text" class="form-control text-center"readonly  value="{{ isset($q31Array[11]) ? $q31Array[11] : '' }}" name="q31[]">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Ambient Temp</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>°C</p></td>  
                                            <td class="text-center"><p>Max 35</p></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q32Array[0]) ? $q32Array[0] : '' }}" name="q32[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q32Array[1]) ? $q32Array[1] : '' }}" name="q32[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Outlet Air Temp</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>°C</p></td>  
                                            <td class="text-center"><p>Max 40</p></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q33Array[0]) ? $q33Array[0] : '' }}" name="q33[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q33Array[1]) ? $q33Array[1] : '' }}" name="q33[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Sat. Cond Temp A</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>°C</p></td>  
                                            <td class="text-center"><p>Max 45</p></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q34Array[0]) ? $q34Array[0] : '' }}" name="q34[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q34Array[1]) ? $q34Array[1] : '' }}" name="q34[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Sat. Cond Temp B</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>°C</p></td>  
                                            <td class="text-center"><p>Max 45</p></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q35Array[0]) ? $q35Array[0] : '' }}" name="q35[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q35Array[1]) ? $q35Array[1] : '' }}" name="q35[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Air Flow</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>m/s</p></td>  
                                            <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q35Array[0]) ? $q35Array[0] : '' }}" name="q36[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q35Array[1]) ? $q35Array[1] : '' }}" name="q36[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q35Array[2]) ? $q35Array[2] : '' }}" name="q36[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Ampere Fan 1</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>AMP</p></td>  
                                            <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q37Array[0]) ? $q37Array[0] : '' }}" name="q37[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q37Array[1]) ? $q37Array[1] : '' }}" name="q37[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q37Array[2]) ? $q37Array[2] : '' }}" name="q37[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Ampere Fan 2</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>AMP</p></td>  
                                            <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q38Array[0]) ? $q38Array[0] : '' }}" name="q38[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q38Array[1]) ? $q38Array[1] : '' }}" name="q38[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q38Array[2]) ? $q38Array[2] : '' }}" name="q38[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">CHW Press In</td>
                                            <td class="text-center"></td>
                                            <td class="text-center"><p>BAR</p></td>  
                                            <td class="text-center"><p>3</p></td>  
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q39Array[0]) ? $q39Array[0] : '' }}" name="q39[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q39Array[1]) ? $q39Array[1] : '' }}" name="q39[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">CHW Press Out</td>
                                            <td class="text-center"></td>
                                            <td class="text-center"><p>BAR</p></td>  
                                            <td class="text-center"><p>2</p></td>  
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q40Array[0]) ? $q40Array[0] : '' }}" name="q40[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q40Array[1]) ? $q40Array[1] : '' }}" name="q40[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">CHW Temp In</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>°C</p></td>  
                                            <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q41Array[0]) ? $q41Array[0] : '' }}" name="q41[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q41Array[1]) ? $q41Array[1] : '' }}" name="q41[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q41Array[2]) ? $q41Array[2] : '' }}" name="q41[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">CHW Temp Out</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>°C</p></td>  
                                            <td class="text-center"><input type="text" class="form-control text-center"readonly  value="{{ isset($q42Array[0]) ? $q42Array[0] : '' }}" name="q42[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q42Array[1]) ? $q42Array[1] : '' }}" name="q42[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q42Array[2]) ? $q42Array[2] : '' }}" name="q42[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Flow Switch Status</td>
                                            <td class="text-center"></td>
                                            <td class="text-center">
                                                <p>ON =</p>
                                                <p>OFF =</p>
                                            </td>
                                            <td class="text-center">
                                                <p>Close</p>
                                                <p>Open</p>
                                            </td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q43Array[0]) ? $q43Array[0] : '' }}" name="q43[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q43Array[1]) ? $q43Array[1] : '' }}" name="q43[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Flow Rate</td>
                                            <td class="text-center"></td>
                                            <td class="text-center"><p>GPM</p></td>  
                                            <td class="text-center"><p>30-177</p></td>  
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q44Array[0]) ? $q44Array[0] : '' }}" name="q44[]"></td>
                                            <td><input type="text" class="form-control text-center"readonly  value="{{ isset($q44Array[1]) ? $q44Array[1] : '' }}" name="q44[]"></td>
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
@endsection
