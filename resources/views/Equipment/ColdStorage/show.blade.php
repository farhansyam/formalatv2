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
                        <div class="row">
                <div class="col-md-4 mb-3">
                  <label for="">Customer</label>
                  <input disabled type="text" name="customer" class="form-control" id="" value="{{$equipment->customer}}" required="">
                  <input type="hidden" name="id_equipment" class="form-control" id="" value="{{$equipment->id}}" required="">
                  <input type="hidden" name="id_equipment" class="form-control" id="" value="{{$id}}" required="">

                </div>
                <div class="col-md-4 mb-3">
                  <label for="">Engineer List</label>
                  <textarea disabled class="form-control" name="engineer_list" id="" cols="10" rows="4">{{$coldStorage->enginer_list}}</textarea>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="">Tanggal PM</label>
                  <div class="input-group">
                    <input disabled type="text" class="form-control" id="" aria-describedby="inputGroupPrepend2" required="" name="tanggal" value={{$coldStorage->tanggal}}>
                  </div>
                </div>
              </div>
                        <div class="border-bottom title-part-padding">
                            <h4 class="card-title mb-0 text-center">Task List Cold Storage</h4>
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
                                    $q1Array = explode(',', $coldStorage->q1);
                                    $q2Array = explode(',', $coldStorage->q2);
                                    $q3Array = explode(',', $coldStorage->q3);
                                    $q4Array = explode(',', $coldStorage->q4);
                                    $q5Array = explode(',', $coldStorage->q5);
                                    $q6Array = explode(',', $coldStorage->q6);
                                    $q7Array = explode(',', $coldStorage->q7);
                                    $q8Array = explode(',', $coldStorage->q8);
                                    $q9Array = explode(',', $coldStorage->q9);
                                    $q10Array = explode(',', $coldStorage->q10);
                                    $q11Array = explode(',', $coldStorage->q11);
                                    $q12Array = explode(',', $coldStorage->q12);
                                    $q13Array = explode(',', $coldStorage->q13);
                                    $q14Array = explode(',', $coldStorage->q14);
                                    $q15Array = explode(',', $coldStorage->q15);
                                    $q16Array = explode(',', $coldStorage->q16);
                                    $q17Array = explode(',', $coldStorage->q17);
                                    $q18Array = explode(',', $coldStorage->q18);
                                    $q19Array = explode(',', $coldStorage->q19);
                                    $q20Array = explode(',', $coldStorage->q20);
                                    $q21Array = explode(',', $coldStorage->q21);
                                    $q22Array = explode(',', $coldStorage->q22);
                                    $q23Array = explode(',', $coldStorage->q23);
                                    $q24Array = explode(',', $coldStorage->q24);
                                    $q25Array = explode(',', $coldStorage->q25);
                                    $q26Array = explode(',', $coldStorage->q26);
                                    $q27Array = explode(',', $coldStorage->q27);
                                    $q28Array = explode(',', $coldStorage->q28);
                                    $q29Array = explode(',', $coldStorage->q29);
                                    $q30Array = explode(',', $coldStorage->q30);
                                    $q31Array = explode(',', $coldStorage->q31);
                                    $q32Array = explode(',', $coldStorage->q32);
                                    $q33Array = explode(',', $coldStorage->q33);
                                    $q34Array = explode(',', $coldStorage->q34);
                                    $q35Array = explode(',', $coldStorage->q35);
                                    $q36Array = explode(',', $coldStorage->q36);
                                    $q37Array = explode(',', $coldStorage->q37);
                                    $q38Array = explode(',', $coldStorage->q38);
                                    $q39Array = explode(',', $coldStorage->q39);
                                    $q40Array = explode(',', $coldStorage->q40);
                                    $q41Array = explode(',', $coldStorage->q41);
                                    $q42Array = explode(',', $coldStorage->q42);
                                    $q43Array = explode(',', $coldStorage->q43);
                                    $q44Array = explode(',', $coldStorage->q44);
                                    $q45Array = explode(',', $coldStorage->q45);
                                    $q46Array = explode(',', $coldStorage->q46);
                                    $q47Array = explode(',', $coldStorage->q47);
                                    $q48Array = explode(',', $coldStorage->q48);
                                    $q49Array = explode(',', $coldStorage->q49);
                                    $q50Array = explode(',', $coldStorage->q50);
                                    $q51Array = explode(',', $coldStorage->q51);
                                    $q52Array = explode(',', $coldStorage->q52);
                                    $q53Array = explode(',', $coldStorage->q53);
                                    $q54Array = explode(',', $coldStorage->q54);
                                    $q55Array = explode(',', $coldStorage->q55);
                                    $q56Array = explode(',', $coldStorage->q56);
                                    $q57Array = explode(',', $coldStorage->q57);
                                    $q58Array = explode(',', $coldStorage->q58);
                                    $q59Array = explode(',', $coldStorage->q59);
                                    $q60Array = explode(',', $coldStorage->q60);
                                    $q61Array = explode(',', $coldStorage->q61);
                                    $q62Array = explode(',', $coldStorage->q62);
                                    $q63Array = explode(',', $coldStorage->q63);
                                    $q64Array = explode(',', $coldStorage->q64);
                                @endphp
         <input disabled type="hidden" required name="id" value="{{ $coldStorage->id }}">

                                    <tr>
                                        
                                        <td>Check Oil Condition (Pressure,Cleanliness & Level)</td>
                                      
                                        <td><input disabled type="text" class="form-control text-center" value="{{ isset($q1Array[0]) ? $q1Array[0] : '' }}"  name="q1[]" readonly></td>
                                        <td><input disabled type="text" class="form-control text-center" value="{{ isset($q1Array[1]) ? $q1Array[1] : '' }}"  name="q1[]" readonly></td>
                                        <td class="text-center"><input disabled type="text" class="form-control text-center" value="{{ isset($q1Array[2]) ? $q1Array[2] : '' }}"  name="q1[]" readonly></td>
                                    </tr>
                                    
                                            <tr>
                                             
                                                <td>Check HLPS Function</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q2Array[0]) ? $q2Array[0] : '' }}"  name="q2[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly  value="{{ isset($q2Array[1]) ? $q2Array[1] : '' }}"  name="q2[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q2Array[2]) ? $q2Array[2] : '' }}"  name="q2[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Check gauge conditon (Press. & Temp. gauge)</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q3Array[0]) ? $q3Array[0] : '' }}"  name="q3[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q3Array[1]) ? $q3Array[1] : '' }}"  name="q3[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q3Array[2]) ? $q3Array[2] : '' }}"  name="q3[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Check belt condition</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q4Array[0]) ? $q4Array[0] : '' }}"  name="q4[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q4Array[1]) ? $q4Array[1] : '' }}"  name="q4[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q4Array[2]) ? $q4Array[2] : '' }}"  name="q4[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Check Compressor pressure (suction & discharge)</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q5Array[0]) ? $q5Array[0] : '' }}"  name="q5[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q5Array[1]) ? $q5Array[1] : '' }}"  name="q5[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q5Array[2]) ? $q5Array[2] : '' }}"  name="q5[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Check suction & discharge temperature</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q6Array[0]) ? $q6Array[0] : '' }}"  name="q6[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q6Array[1]) ? $q6Array[1] : '' }}"  name="q6[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q6Array[2]) ? $q6Array[2] : '' }}"  name="q6[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Check terminal block condition</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q7Array[0]) ? $q7Array[0] : '' }}"  name="q7[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q7Array[1]) ? $q7Array[1] : '' }}"  name="q7[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q7Array[2]) ? $q7Array[2] : '' }}"  name="q7[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check vibration & noise</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q8Array[0]) ? $q8Array[0] : '' }}"  name="q8[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q8Array[1]) ? $q8Array[1] : '' }}"  name="q8[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q8Array[2]) ? $q8Array[2] : '' }}"  name="q8[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check current compressor</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q9Array[0]) ? $q9Array[0] : '' }}" name="q9[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q9Array[1]) ? $q9Array[1] : '' }}"  name="q9[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q9Array[2]) ? $q9Array[2] : '' }}"  name="q9[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check filter dryer condition</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q10Array[0]) ? $q10Array[0] : '' }}"  name="q10[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q10Array[1]) ? $q10Array[1] : '' }}"  name="q10[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q10Array[2]) ? $q10Array[2] : '' }}"  name="q10[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Clean body compressor</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q11Array[0]) ? $q11Array[0] : '' }}"  name="q11[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q11Array[1]) ? $q11Array[1] : '' }}"  name="q11[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q11Array[2]) ? $q11Array[2] : '' }}"  name="q11[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check oil leak</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q12Array[0]) ? $q12Array[0] : '' }}"  name="q12[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q12Array[1]) ? $q12Array[1] : '' }}"  name="q12[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q12Array[2]) ? $q12Array[2] : '' }}"  name="q12[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check crankcase oil heater function</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q13Array[0]) ? $q13Array[0] : '' }}"  name="q13[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q13Array[1]) ? $q13Array[1] : '' }}"  name="q13[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q13Array[2]) ? $q13Array[2] : '' }}"  name="q13[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check solenoid valve function</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q14Array[0]) ? $q14Array[0] : '' }}"  name="q14[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q14Array[1]) ? $q14Array[1] : '' }}"  name="q14[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q14Array[2]) ? $q14Array[2] : '' }}"  name="q14[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Clean oil strainer</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q15Array[0]) ? $q15Array[0] : '' }}"  name="q15[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q15Array[1]) ? $q15Array[1] : '' }}"  name="q15[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q15Array[2]) ? $q15Array[2] : '' }}"  name="q15[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Replace oil compressor</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q16Array[0]) ? $q16Array[0] : '' }}"  name="q16[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q16Array[1]) ? $q16Array[1] : '' }}"  name="q16[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q16Array[2]) ? $q16Array[2] : '' }}"  name="q16[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td> Replace core / filter dryer </td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q17Array[0]) ? $q17Array[0] : '' }}"  name="q17[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q17Array[1]) ? $q17Array[1] : '' }}"  name="q17[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q17Array[2]) ? $q17Array[2] : '' }}"  name="q17[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check condensor fin condition (corrosion & damage)</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q18Array[0]) ? $q18Array[0] : '' }}"  name="q18[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q18Array[1]) ? $q18Array[1] : '' }}"  name="q18[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q18Array[2]) ? $q18Array[2] : '' }}"  name="q18[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check pipe leakage</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q19Array[0]) ? $q19Array[0] : '' }}"  name="q19[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q19Array[1]) ? $q19Array[1] : '' }}"  name="q19[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q19Array[2]) ? $q19Array[2] : '' }}"  name="q19[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Clean condensor coil & Body</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q20Array[0]) ? $q20Array[0] : '' }}"  name="q20[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q20Array[1]) ? $q20Array[1] : '' }}"  name="q20[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q20Array[2]) ? $q20Array[2] : '' }}"  name="q20[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Clean panel control</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q21Array[0]) ? $q21Array[0] : '' }}" name="q21[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q21Array[1]) ? $q21Array[1] : '' }}" name="q21[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q21Array[2]) ? $q21Array[2] : '' }}" name="q21[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check vibration & Noise</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q22Array[0]) ? $q22Array[0] : '' }}"  name="q22[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q22Array[1]) ? $q22Array[1] : '' }}"  name="q22[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q22Array[2]) ? $q22Array[2] : '' }}"  name="q22[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check blade imbalance</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q23Array[0]) ? $q23Array[0] : '' }}" name="q23[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q23Array[1]) ? $q23Array[1] : '' }}" name="q23[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q23Array[2]) ? $q23Array[2] : '' }}" name="q23[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check part corrosion</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q24Array[0]) ? $q24Array[0] : '' }}"  name="q24[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q24Array[1]) ? $q24Array[1] : '' }}"  name="q24[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q24Array[2]) ? $q24Array[2] : '' }}"  name="q24[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Clean blade & body</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q25Array[0]) ? $q25Array[0] : '' }}"  name="q25[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q25Array[1]) ? $q25Array[1] : '' }}"  name="q25[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q25Array[2]) ? $q25Array[2] : '' }}"  name="q25[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check current fans</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q26Array[0]) ? $q26Array[0] : '' }}"  name="q26[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q26Array[1]) ? $q26Array[1] : '' }}"  name="q26[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q26Array[2]) ? $q26Array[2] : '' }}"  name="q26[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Replace bearing</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q27Array[0]) ? $q27Array[0] : '' }}"  name="q27[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q27Array[1]) ? $q27Array[1] : '' }}"  name="q27[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q27Array[2]) ? $q27Array[2] : '' }}"  name="q27[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check fin condition (corrosion & damage)</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q28Array[0]) ? $q28Array[0] : '' }}"  name="q28[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q28Array[1]) ? $q28Array[1] : '' }}"  name="q28[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q28Array[2]) ? $q28Array[2] : '' }}"  name="q28[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check pipe leakage</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q29Array[0]) ? $q29Array[0] : '' }}"  name="q29[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q29Array[1]) ? $q29Array[1] : '' }}"  name="q29[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q29Array[2]) ? $q29Array[2] : '' }}"  name="q29[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check TXV function</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q30Array[0]) ? $q30Array[0] : '' }}"  name="q30[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q30Array[1]) ? $q30Array[1] : '' }}"  name="q30[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q30Array[2]) ? $q30Array[2] : '' }}"  name="q30[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check defrost function</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q31Array[0]) ? $q31Array[0] : '' }}"  name="q31[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q31Array[1]) ? $q31Array[1] : '' }}"  name="q31[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q31Array[2]) ? $q31Array[2] : '' }}"  name="q31[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Clean evaporator coil & Body</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q32Array[0]) ? $q32Array[0] : '' }}"  name="q32[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q32Array[1]) ? $q32Array[1] : '' }}"  name="q32[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q32Array[2]) ? $q32Array[2] : '' }}"  name="q32[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check door heater function</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q33Array[0]) ? $q33Array[0] : '' }}"  name="q33[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q33Array[1]) ? $q33Array[1] : '' }}"  name="q33[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q33Array[2]) ? $q33Array[2] : '' }}"  name="q33[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check ventilation & infiltration</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q34Array[0]) ? $q34Array[0] : '' }}"  name="q34[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q34Array[1]) ? $q34Array[1] : '' }}"  name="q34[]" ></td>
                                                <td class="text-center"><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q34Array[2]) ? $q34Array[2] : '' }}"  name="q34[]"></td>
                                            </tr>

                                    </tbody>
                                </table>

                                <h5 class="text-center" style="background-color: black;color:white">Service Check</h5>

                                <table class="table table-bordered" id="personelTeamTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Pertanyaan</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Compressor Model No :</td>
                                        <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q35Array[0]) ? $q35Array[0] : '' }}"  name="q35[]"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Evaporator Model No :</td>
                                        <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q36Array[0]) ? $q36Array[0] : '' }}"  name="q36[]"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Fan Cond.Model No :</td>
                                        <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q37Array[0]) ? $q37Array[0] : '' }}"  name="q37[]"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Fan Evap.Model No :</td>
                                        <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q38Array[0]) ? $q38Array[0] : '' }}"  name="q38[]"></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Refrigerant Type :</td>
                                        <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q39Array[0]) ? $q39Array[0] : '' }}"  name="q39[]"></td>
                                    </tr>
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Description</th>
                                            <th></th>
                                            <th>Standard</th>
                                            <th>Before</th>
                                            <th>After</th>
                                        </tr>

                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Room Temp</td>
                                                <td></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q40Array[0]) ? $q40Array[0] : '' }}"  name="q40[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q40Array[1]) ? $q40Array[1] : '' }}"  name="q40[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q40Array[2]) ? $q40Array[2] : '' }}"  name="q40[]"></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Suction Press</td>
                                                <td></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q41Array[0]) ? $q41Array[0] : '' }}"  name="q41[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q41Array[1]) ? $q41Array[1] : '' }}"  name="q41[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q41Array[2]) ? $q41Array[2] : '' }}"  name="q41[]"></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Discharge Press</td>
                                                <td></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q42Array[0]) ? $q42Array[0] : '' }}"  name="q42[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q42Array[1]) ? $q42Array[1] : '' }}" name="q42[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q42Array[2]) ? $q42Array[2] : '' }}"  name="q42[]"></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Suction Temp</td>
                                                <td></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q43Array[0]) ? $q43Array[0] : '' }}"  name="q43[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q43Array[1]) ? $q43Array[1] : '' }}"  name="q43[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q43Array[2]) ? $q43Array[2] : '' }}"  name="q43[]"></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Discharge Temp</td>
                                                <td></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q44Array[0]) ? $q44Array[0] : '' }}"  name="q44[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q44Array[1]) ? $q44Array[1] : '' }}"  name="q44[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q44Array[2]) ? $q44Array[2] : '' }}"  name="q44[]"></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Voltage</td>
                                                <td>
                                                    <p>R-S</p>
                                                    <p>S-T</p>
                                                    <p>T-R</p>
                                                </td>
                                                <td>
                                                     <p>380</p>
                                                     <p>380</p>
                                                     <p>380</p>
                                                </td>
                                                <td>
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q45Array[0]) ? $q45Array[0] : '' }}"  name="q45[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q45Array[1]) ? $q45Array[1] : '' }}"  name="q45[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q45Array[2]) ? $q45Array[2] : '' }}"  name="q45[]">
                                                </td>
                                                <td>
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q45Array[3]) ? $q45Array[3] : '' }}"  name="q45[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q45Array[4]) ? $q45Array[4] : '' }}"  name="q45[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q45Array[5]) ? $q45Array[5] : '' }}"  name="q45[]">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>7</td>
                                                <td>Comp 1 Amp</td>
                                                <td>
                                                    <p>R</p>
                                                    <p>S</p>
                                                    <p>T</p>
                                                </td>
                                                <td>
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q46Array[0]) ? $q46Array[0] : '' }}"  name="q46[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q46Array[1]) ? $q46Array[1] : '' }}"  name="q46[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q46Array[2]) ? $q46Array[2] : '' }}"  name="q46[]">
                                                </td>
                                                <td>
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q46Array[3]) ? $q46Array[3] : '' }}"  name="q46[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q46Array[4]) ? $q46Array[4] : '' }}"  name="q46[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q46Array[5]) ? $q46Array[5] : '' }}"  name="q46[]">
                                                </td>
                                                <td>
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q46Array[6]) ? $q46Array[6] : '' }}"  name="q46[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q46Array[7]) ? $q46Array[7] : '' }}"  name="q46[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q46Array[8]) ? $q46Array[8] : '' }}"  name="q46[]">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>8</td>
                                                  <td>Comp 2 Amp</td>
                                                <td>
                                                    <p>R</p>
                                                    <p>S</p>
                                                    <p>T</p>
                                                </td>
                                                <td>
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q47Array[0]) ? $q47Array[0] : '' }}"  name="q47[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q47Array[1]) ? $q47Array[1] : '' }}"  name="q47[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q47Array[2]) ? $q47Array[2] : '' }}"  name="q47[]">
                                                </td>
                                                <td>
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q47Array[3]) ? $q47Array[3] : '' }}"  name="q47[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q47Array[4]) ? $q47Array[4] : '' }}"  name="q47[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q47Array[5]) ? $q47Array[5] : '' }}"  name="q47[]">
                                                </td>
                                                <td>
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q47Array[6]) ? $q47Array[6] : '' }}"  name="q47[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q47Array[7]) ? $q47Array[7] : '' }}"  name="q47[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q47Array[8]) ? $q47Array[8] : '' }}"  name="q47[]">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>9</td>
                                                  <td>Comp 3 Amp</td>
                                                <td>
                                                    <p>R</p>
                                                    <p>S</p>
                                                    <p>T</p>
                                                </td>
                                                <td>
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q48Array[0]) ? $q48Array[0] : '' }}"  name="q48[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q48Array[1]) ? $q48Array[1] : '' }}"  name="q48[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q48Array[2]) ? $q48Array[2] : '' }}"  name="q48[]">
                                                </td>
                                                <td>
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q48Array[3]) ? $q48Array[3] : '' }}"  name="q48[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q48Array[4]) ? $q48Array[4] : '' }}"  name="q48[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q48Array[5]) ? $q48Array[5] : '' }}"  name="q48[]">
                                                </td>
                                                <td>
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q48Array[6]) ? $q48Array[6] : '' }}"  name="q48[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q48Array[7]) ? $q48Array[7] : '' }}"  name="q48[]">
                                                    <input disabled type="text" class="form-control text-center"readonly value="{{ isset($q48Array[8]) ? $q48Array[8] : '' }}"  name="q48[]">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>10</td>
                                                <td>Oil Level</td>
                                                <td></td>
                                                <td>3/4</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q49Array[0]) ? $q49Array[0] : '' }}"  name="q49[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q49Array[1]) ? $q49Array[1] : '' }}"  name="q49[]"></td>
                                            </tr>

                                            <tr>
                                                <td>11</td>
                                                <td>Oil Cleanliness</td>
                                                <td></td>
                                                <td>Clean</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q50Array[0]) ? $q50Array[0] : '' }}"  name="q50[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q50Array[1]) ? $q50Array[1] : '' }}"  name="q50[]"></td>
                                            </tr>

                                            <tr>
                                                <td>12</td>
                                                <td>Ref Sight Glass</td>
                                                <td></td>
                                                <td>Clean</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q51Array[0]) ? $q51Array[0] : '' }}"  name="q51[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q51Array[1]) ? $q51Array[1] : '' }}"  name="q51[]"></td>
                                            </tr>

                                            <tr>
                                                <td>13</td>
                                                <td>Oil Pressure</td>
                                                <td></td>
                                                <td>Clean</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q52Array[0]) ? $q52Array[0] : '' }}"  name="q52[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q52Array[1]) ? $q52Array[1] : '' }}"  name="q52[]"></td>
                                            </tr>

                                            <tr>
                                                <td>14</td>
                                                <td>Crank Oil Heater</td>
                                                <td></td>
                                                <td>Ok / Not Ok</td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q53Array[0]) ? $q53Array[0] : '' }}" name="q53[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q53Array[1]) ? $q53Array[1] : '' }}" name="q53[]"></td>
                                            </tr>

                                            <tr>
                                                <td>15</td>
                                                <td>Fand Cond 1 Amp</td>
                                                <td></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q54Array[0]) ? $q54Array[0] : '' }}"  name="q54[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q54Array[1]) ? $q54Array[1] : '' }}"  name="q54[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q54Array[2]) ? $q34Array[2] : '' }}"  name="q54[]"></td>
                                            </tr>

                                            <tr>
                                                <td>16</td>
                                                <td>Fand Cond 2 Amp</td>
                                                <td></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q55Array[0]) ? $q55Array[0] : '' }}"  name="q55[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q55Array[1]) ? $q55Array[1] : '' }}"  name="q55[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q55Array[2]) ? $q55Array[2] : '' }}"  name="q55[]"></td>
                                            </tr>

                                            <tr>
                                                <td>17</td>
                                                <td>Fand Condition</td>
                                                <td></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q56Array[0]) ? $q56Array[0] : '' }}"  name="q56[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q56Array[1]) ? $q56Array[1] : '' }}"  name="q56[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q56Array[2]) ? $q56Array[2] : '' }}"  name="q56[]"></td>
                                            </tr>

                                            <tr>
                                                <td>18</td>
                                                <td>Fand evap 1 Amp</td>
                                                <td></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q57Array[0]) ? $q57Array[0] : '' }}"  name="q57[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q57Array[1]) ? $q57Array[1] : '' }}"  name="q57[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q57Array[2]) ? $q57Array[2] : '' }}"  name="q57[]"></td>
                                            </tr>

                                            <tr>
                                                <td>19</td>
                                                <td>Fand evap 2 Amp</td>
                                                <td></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q58Array[0]) ? $q58Array[0] : '' }}" name="q58[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q58Array[1]) ? $q58Array[1] : '' }}" name="q58[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q58Array[2]) ? $q58Array[2] : '' }}" name="q58[]"></td>
                                            </tr>

                                            <tr>
                                                <td>20</td>
                                                <td>Fand evap 3 Amp</td>
                                                <td></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q59Array[0]) ? $q59Array[0] : '' }}"  name="q59[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q59Array[1]) ? $q59Array[1] : '' }}"  name="q59[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q59Array[2]) ? $q59Array[2] : '' }}"  name="q59[]"></td>
                                            </tr>

                                            <tr>
                                                <td>21</td>
                                                <td>Fand evap 4 Amp</td>
                                                <td></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q60Array[0]) ? $q60Array[0] : '' }}"  name="q60[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q60Array[1]) ? $q60Array[1] : '' }}"  name="q60[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q60Array[2]) ? $q60Array[2] : '' }}"  name="q60[]"></td>
                                            </tr>

                                            <tr>
                                                <td>22</td>
                                                <td>Fand evap 5 Amp</td>
                                                <td></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q61Array[0]) ? $q61Array[0] : '' }}"  name="q61[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q61Array[1]) ? $q61Array[1] : '' }}"  name="q61[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q61Array[2]) ? $q61Array[2] : '' }}"  name="q61[]"></td>
                                            </tr>

                                            <tr>
                                                <td>23</td>
                                                <td>Fand evap 6 Amp</td>
                                                <td></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q62Array[0]) ? $q62Array[0] : '' }}"  name="q62[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q62Array[1]) ? $q62Array[1] : '' }}"  name="q62[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q62Array[2]) ? $q62Array[2] : '' }}"  name="q62[]"></td>
                                            </tr>

                                            <tr>
                                                <td>24</td>
                                                <td>Fan Condition</td>
                                                <td></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q63Array[0]) ? $q63Array[0] : '' }}" name="q63[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q63Array[1]) ? $q63Array[1] : '' }}" name="q63[]"></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q63Array[2]) ? $q63Array[2] : '' }}" name="q63[]"></td>
                                            </tr>

                                            <tr>
                                                <td>24</td>
                                                <td>Running Hours</td>
                                                <td></td>
                                                <td><input disabled type="text" class="form-control text-center"readonly value="{{ isset($q64Array[0]) ? $q64Array[0] : '' }}"  name="q64[]"></td>
                                            </tr>
                                        </tbody>
                                </table>
                                <table class="table table-bordered" id="GambarTable">
        <tr>
            <th>Temuan</th>
            <th>Rekomendasi</th>
        </tr>
        <tr>
            <td><textarea disabled name="temuan" id="" cols="60" rows="10">{{$coldStorage->temuan}}</textarea></td>
            <td><textarea disabled name="rekomendasi" id="" cols="60" rows="10">{{$coldStorage->rekomendasi}}</textarea></td>
        </tr>
        <tr>
            <th>Job Complete</th>
        </tr>
        <tr>
            <td><select disabled name="status" id="" class="form-select">
                    <option value="{{$coldStorage->status}}">{{$coldStorage->status}}</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select></td>
        </tr>
            
</table>
                                <h5 class="text-center" style="background-color: black;color:white">Foto Equipment</h5>
                            <table class="table table-bordered" id="personelTeamTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Info</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Initial row -->
                                    @php
                                    $n = 1;
                                    @endphp
                                    @foreach ($gambar as $data)
                                    <tr>
                                        <td>{{$n++}}</td>
                                        <td><img src="{{asset('gambar')}}/{{$data->gambar}}" alt="" height="200"></td>
                                        <td><input disabled value="{{$data->info}}" disabled type="text" class="form-control" name="keterangan[]"></td>
                                        <td><input disabled value="{{$data->keterangan}}" disabled type="text" class="form-control" name="keterangan[]"></td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            <h5 class="text-center" style="background-color: black;color:white">Foto Parameter</h5>
                            <table class="table table-bordered" id="personelTeamTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Info</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Initial row -->
                                    @php
                                    $n = 1;
                                    @endphp
                                    @foreach ($gambar2 as $data)
                                    <tr>
                                        <td>{{$n++}}</td>
                                        <td><img src="{{asset('gambar2')}}/{{$data->gambar}}" alt="" height="200"></td>
                                        <td><input disabled value="{{$data->info}}" disabled type="text" class="form-control" name="keterangan[]"></td>
                                        <td><input disabled value="{{$data->keterangan}}" disabled type="text" class="form-control" name="keterangan[]"></td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
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
