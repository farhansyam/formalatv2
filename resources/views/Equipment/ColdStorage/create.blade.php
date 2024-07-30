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
                        <h4 class="card-title mb-0 text-center">Task List Cold Storage</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('cs.store') }}" method="POST" enctype="multipart/form-data">
                               <div class="row">
                <div class="col-md-4 mb-3">
                  <label for="">Customer</label>
                  <input type="text" name="customer" class="form-control" id="" value="{{$equipment->customer}}" required="">
                  <input type="hidden" name="id_equipment" class="form-control" id="" value="{{$equipment->id}}" required="">
                  <input type="hidden" name="id_equipment" class="form-control" id="" value="{{$id}}" required="">

                </div>
                <div class="col-md-4 mb-3">
                  <label for="">Engineer List</label>
                  <textarea class="form-control" name="engineer_list" id="" cols="10" rows="4"></textarea>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="">Tanggal PM</label>
                  <div class="input-group">
                    <input type="date" class="form-control" id="" aria-describedby="inputGroupPrepend2" required="" name="tanggal">
                  </div>
                </div>
              </div>
                            <input type="hidden" name="id_equipment" value="{{$id}}">
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


                                    <input type="hidden" required name="id" value="{{ $id }}">

                                    <tr>
                                        <td>Check Oil Condition (Pressure,Cleanliness & Level)</td>
                                        <td><input type="text" class="form-control text-center" required name="q1[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q1[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q1[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check HLPS Function</td>
                                        <td><input type="text" class="form-control text-center" required name="q2[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q2[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q2[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check gauge conditon (Press. & Temp. gauge)</td>
                                        <td><input type="text" class="form-control text-center" required name="q3[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q3[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q3[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check belt condition</td>
                                        <td><input type="text" class="form-control text-center" required name="q4[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q4[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q4[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check Compressor pressure (suction & discharge)</td>
                                        <td><input type="text" class="form-control text-center" required name="q5[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q5[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q5[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check suction & discharge temperature</td>
                                        <td><input type="text" class="form-control text-center" required name="q6[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q6[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q6[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check terminal block condition</td>
                                        <td><input type="text" class="form-control text-center" required name="q7[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q7[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q7[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check vibration & noise</td>
                                        <td><input type="text" class="form-control text-center" required name="q8[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q8[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q8[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check current compressor</td>
                                        <td><input type="text" class="form-control text-center" required name="q9[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q9[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q9[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check filter dryer condition</td>
                                        <td><input type="text" class="form-control text-center" required name="q10[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q10[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q10[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Clean body compressor</td>
                                        <td><input type="text" class="form-control text-center" required name="q11[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q11[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q11[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check oil leak</td>
                                        <td><input type="text" class="form-control text-center" required name="q12[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q12[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q12[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check crankcase oil heater function</td>
                                        <td><input type="text" class="form-control text-center" required name="q13[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q13[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q13[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check solenoid valve function</td>
                                        <td><input type="text" class="form-control text-center" required name="q14[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q14[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q14[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Clean oil strainer</td>
                                        <td><input type="text" class="form-control text-center" required name="q15[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q15[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q15[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Replace oil compressor</td>
                                        <td><input type="text" class="form-control text-center" required name="q16[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q16[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q16[]"></td>
                                    </tr>

                                    <tr>

                                        <td> Replace core / filter dryer </td>
                                        <td><input type="text" class="form-control text-center" required name="q17[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q17[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q17[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check condensor fin condition (corrosion & damage)</td>
                                        <td><input type="text" class="form-control text-center" required name="q18[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q18[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q18[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check pipe leakage</td>
                                        <td><input type="text" class="form-control text-center" required name="q19[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q19[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q19[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Clean condensor coil & Body</td>
                                        <td><input type="text" class="form-control text-center" required name="q20[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q20[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q20[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Clean panel control</td>
                                        <td><input type="text" class="form-control text-center" required name="q21[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q21[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q21[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check vibration & Noise</td>
                                        <td><input type="text" class="form-control text-center" required name="q22[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q22[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q22[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check blade imbalance</td>
                                        <td><input type="text" class="form-control text-center" required name="q23[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q23[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q23[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check part corrosion</td>
                                        <td><input type="text" class="form-control text-center" required name="q24[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q24[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q24[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Clean blade & body</td>
                                        <td><input type="text" class="form-control text-center" required name="q25[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q25[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q25[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check current fans</td>
                                        <td><input type="text" class="form-control text-center" required name="q26[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q26[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q26[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Replace bearing</td>
                                        <td><input type="text" class="form-control text-center" required name="q27[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q27[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q27[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check fin condition (corrosion & damage)</td>
                                        <td><input type="text" class="form-control text-center" required name="q28[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q28[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q28[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check pipe leakage</td>
                                        <td><input type="text" class="form-control text-center" required name="q29[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q29[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q29[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check TXV function</td>
                                        <td><input type="text" class="form-control text-center" required name="q30[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q30[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q30[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check defrost function</td>
                                        <td><input type="text" class="form-control text-center" required name="q31[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q31[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q31[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Clean evaporator coil & Body</td>
                                        <td><input type="text" class="form-control text-center" required name="q32[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q32[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q32[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check door heater function</td>
                                        <td><input type="text" class="form-control text-center" required name="q33[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q33[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q33[]"></td>
                                    </tr>

                                    <tr>

                                        <td>Check ventilation & infiltration</td>
                                        <td><input type="text" class="form-control text-center" required name="q34[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q34[]" value=""></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" required name="q34[]"></td>
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
                                        <td><input type="text" class="form-control text-center" required name="q35[]"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Evaporator Model No :</td>
                                        <td><input type="text" class="form-control text-center" required name="q36[]"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Fan Cond.Model No :</td>
                                        <td><input type="text" class="form-control text-center" required name="q37[]"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Fan Evap.Model No :</td>
                                        <td><input type="text" class="form-control text-center" required name="q38[]"></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Refrigerant Type :</td>
                                        <td><input type="text" class="form-control text-center" required name="q39[]"></td>
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
                                        <td><input type="text" class="form-control text-center" required name="q40[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q40[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q40[]"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Suction Press</td>
                                        <td></td>
                                        <td><input type="text" class="form-control text-center" required name="q41[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q41[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q41[]"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Discharge Press</td>
                                        <td></td>
                                        <td><input type="text" class="form-control text-center" required name="q42[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q42[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q42[]"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Suction Temp</td>
                                        <td></td>
                                        <td><input type="text" class="form-control text-center" required name="q43[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q43[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q43[]"></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Discharge Temp</td>
                                        <td></td>
                                        <td><input type="text" class="form-control text-center" required name="q44[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q44[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q44[]"></td>
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
                                            <input type="text" class="form-control text-center" required name="q45[]">
                                            <input type="text" class="form-control text-center" required name="q45[]">
                                            <input type="text" class="form-control text-center" required name="q45[]">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control text-center" required name="q45[]">
                                            <input type="text" class="form-control text-center" required name="q45[]">
                                            <input type="text" class="form-control text-center" required name="q45[]">
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
                                            <input type="text" class="form-control text-center" required name="q46[]">
                                            <input type="text" class="form-control text-center" required name="q46[]">
                                            <input type="text" class="form-control text-center" required name="q46[]">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control text-center" required name="q46[]">
                                            <input type="text" class="form-control text-center" required name="q46[]">
                                            <input type="text" class="form-control text-center" required name="q46[]">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control text-center" required name="q46[]">
                                            <input type="text" class="form-control text-center" required name="q46[]">
                                            <input type="text" class="form-control text-center" required name="q46[]">
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
                                            <input type="text" class="form-control text-center" required name="q47[]">
                                            <input type="text" class="form-control text-center" required name="q47[]">
                                            <input type="text" class="form-control text-center" required name="q47[]">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control text-center" required name="q47[]">
                                            <input type="text" class="form-control text-center" required name="q47[]">
                                            <input type="text" class="form-control text-center" required name="q47[]">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control text-center" required name="q47[]">
                                            <input type="text" class="form-control text-center" required name="q47[]">
                                            <input type="text" class="form-control text-center" required name="q47[]">
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
                                            <input type="text" class="form-control text-center" required name="q48[]">
                                            <input type="text" class="form-control text-center" required name="q48[]">
                                            <input type="text" class="form-control text-center" required name="q48[]">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control text-center" required name="q48[]">
                                            <input type="text" class="form-control text-center" required name="q48[]">
                                            <input type="text" class="form-control text-center" required name="q48[]">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control text-center" required name="q48[]">
                                            <input type="text" class="form-control text-center" required name="q48[]">
                                            <input type="text" class="form-control text-center" required name="q48[]">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>10</td>
                                        <td>Oil Level</td>
                                        <td></td>
                                        <td>3/4</td>
                                        <td><input type="text" class="form-control text-center" required name="q49[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q49[]"></td>
                                    </tr>

                                    <tr>
                                        <td>11</td>
                                        <td>Oil Cleanliness</td>
                                        <td></td>
                                        <td>Clean</td>
                                        <td><select name="q50[]" id="" class="form-select">
                    <option value="Clean">Clean</option>
                    <option value="Not Clean">Not Clean</option>
                </select></td>
                                        <td><select name="q50[]" id="" class="form-select">
                    <option value="Clean">Clean</option>
                    <option value="Not Clean">Not Clean</option>
                </select></td>
                                    </tr>

                                    <tr>
                                        <td>12</td>
                                        <td>Ref Sight Glass</td>
                                        <td></td>
                                        <td>Clean</td>
                                        <td><select name="q51[]" id="" class="form-select">
                    <option value="Clean">Clean</option>
                    <option value="Not Clean">Not Clean</option>
                </select></td>
                                        <td><select name="q51[]" id="" class="form-select">
                    <option value="Clean">Clean</option>
                    <option value="Not Clean">Not Clean</option>
                </select></td>
                                    </tr>

                                    <tr>
                                        <td>13</td>
                                        <td>Oil Pressure</td>
                                        <td></td>
                                        <td>Clean</td>
                                        <td><select name="q52[]" id="" class="form-select">
                    <option value="Clean">Clean</option>
                    <option value="Not Clean">Not Clean</option>
                </select></td>
                                        <td><select name="q52[]" id="" class="form-select">
                    <option value="Clean">Clean</option>
                    <option value="Not Clean">Not Clean</option>
                </select></td>
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td>Crank Oil Heater</td>
                                        <td></td>
                                        <td>Ok / Not Ok</td>
                                        <td><select name="q53[]" id="" class="form-select">
                    <option value="Ok">Ok</option>
                    <option value="Not Ok">Not Ok</option>
                </select></td>
                                        <td><select name="q53[]" id="" class="form-select">
                    <option value="Ok">Ok</option>
                    <option value="Not Ok">Not Ok</option>
                </select></td>
                                    </tr>

                                    <tr>
                                        <td>15</td>
                                        <td>Fand Cond 1 Amp</td>
                                        <td></td>
                                        <td><input type="text" class="form-control text-center" required name="q54[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q54[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q54[]"></td>
                                    </tr>

                                    <tr>
                                        <td>16</td>
                                        <td>Fand Cond 2 Amp</td>
                                        <td></td>
                                        <td><input type="text" class="form-control text-center" required name="q55[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q55[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q55[]"></td>
                                    </tr>

                                    <tr>
                                        <td>17</td>
                                        <td>Fand Condition</td>
                                        <td></td>
                                        <td><input type="text" class="form-control text-center" required name="q56[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q56[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q56[]"></td>
                                    </tr>

                                    <tr>
                                        <td>18</td>
                                        <td>Fand evap 1 Amp</td>
                                        <td></td>
                                        <td><input type="text" class="form-control text-center" required name="q57[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q57[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q57[]"></td>
                                    </tr>

                                    <tr>
                                        <td>19</td>
                                        <td>Fand evap 2 Amp</td>
                                        <td></td>
                                        <td><input type="text" class="form-control text-center" required name="q58[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q58[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q58[]"></td>
                                    </tr>

                                    <tr>
                                        <td>20</td>
                                        <td>Fand evap 3 Amp</td>
                                        <td></td>
                                        <td><input type="text" class="form-control text-center" required name="q59[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q59[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q59[]"></td>
                                    </tr>

                                    <tr>
                                        <td>21</td>
                                        <td>Fand evap 4 Amp</td>
                                        <td></td>
                                        <td><input type="text" class="form-control text-center" required name="q60[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q60[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q60[]"></td>
                                    </tr>

                                    <tr>
                                        <td>22</td>
                                        <td>Fand evap 5 Amp</td>
                                        <td></td>
                                        <td><input type="text" class="form-control text-center" required name="q61[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q61[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q61[]"></td>
                                    </tr>

                                    <tr>
                                        <td>23</td>
                                        <td>Fand evap 6 Amp</td>
                                        <td></td>
                                        <td><input type="text" class="form-control text-center" required name="q62[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q62[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q62[]"></td>
                                    </tr>

                                    <tr>
                                        <td>24</td>
                                        <td>Fan Condition</td>
                                        <td></td>
                                        <td><input type="text" class="form-control text-center" required name="q63[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q63[]"></td>
                                        <td><input type="text" class="form-control text-center" required name="q63[]"></td>
                                    </tr>

                                    <tr>
                                        <td>24</td>
                                        <td>Running Hours</td>
                                        <td></td>
                                        <td><input type="text" class="form-control text-center" required name="q64[]"></td>
                                    </tr>
                                </tbody>
                            </table>
                              <table class="table table-bordered" id="GambarTable">
        <tr>
            <th>Temuan</th>
            <th>Rekomendasi</th>
        </tr>
        <tr>
            <td><textarea name="temuan" id="" cols="60" rows="10"></textarea></td>
            <td><textarea name="rekomendasi" id="" cols="60" rows="10"></textarea></td>
        </tr>
        <tr>
            <th>Job Complete</th>
        </tr>
        <tr>
            <td><select name="status" id="" class="form-select">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select></td>
        </tr>
            
</table>
                            <br><br>
                            <h5 class="text-center" style="background-color: black;color:white">Tambahkan Foto Equipment</h5>
                            <table class="table table-bordered" id="GambarTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Info</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Initial row -->
                                    <tr>
                                        <td>1</td>
                                        <td><input type="file" class="form-control" name="gambar[]" required></td>
                                        <td><input type="text" class="form-control" name="info[]" required></td>
                                        <td><select name="keterangangambar[]" id="" class="form-select">
                                                <option value="Before">Before</option>
                                                <option value="After">After</option>
                                            </select></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary" id="addGambar">Add Gambar</button>
                            <br>
                            <script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>

                            <script>
                                $(document).ready(function() {
                                    var personelCounter = 1;
                                    var pekerjaanCounter = 1;

                                    // Add a new row for Nama Personel Team
                                    $("#addGambar").click(function() {
                                        personelCounter++;
                                        var newRow = `
        <tr>
            <td>${personelCounter}</td>
            <td><input type="file" class="form-control" name="gambar[]"></td>
            <td><input type="text" class="form-control" name="info[]"></td>
            <td><select name="keterangangambar[]" id="" class="form-select">
                      <option value="Before">Before</option>
                      <option value="After">After</option>
                    </select></td>
            <td><button type="button" class="btn btn-danger remove-row">X</button></td>

        </tr>
    `;
                                        $("#GambarTable tbody").append(newRow);
                                    });
                                });


                                // Remove a row from the Nama Personel Team table
                                $("#GambarTable").on("click", ".remove-row", function() {
                                    $(this).closest("tr").remove();
                                    personelCounter--;
                                    // Update the row numbers
                                    $("#GambarTable tbody tr").each(function(index) {
                                        $(this).find("td:first").text(index + 1);
                                    });
                                });
                            </script>
                            <br>
                            <h5 class="text-center" style="background-color: black;color:white">Tambahkan Foto Parameter</h5>
                            <table class="table table-bordered" id="GambarTableParameter">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Info</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Initial row -->
                                    <tr>
                                        <td>1</td>
                                        <td><input type="file" class="form-control" name="gambar2[]" required></td>
                                        <td><input type="text" class="form-control" name="info2[]" required></td>
                                        <td><select name="keterangangambar2[]" id="" class="form-select">
                                                <option value="Before">Before</option>
                                                <option value="After">After</option>
                                            </select></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary" id="addGambar">Add Gambar</button>
                            <br>
                            <script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>

                            <script>
                                $(document).ready(function() {
                                    var personelCounter = 1;
                                    var pekerjaanCounter = 1;

                                    // Add a new row for Nama Personel Team
                                    $("#addGambar").click(function() {
                                        personelCounter++;
                                        var newRow = `
        <tr>
            <td>${personelCounter}</td>
            <td><input type="file" class="form-control" name="gambar2[]"></td>
            <td><input type="text" class="form-control" name="info2[]"></td>
            <td><select name="keterangangambar2[]" id="" class="form-select">
                      <option value="Before">Before</option>
                      <option value="After">After</option>
                    </select></td>
            <td><button type="button" class="btn btn-danger remove-row">X</button></td>

        </tr>
    `;
                                        $("#GambarTableParameter tbody").append(newRow);
                                    });
                                });


                                // Remove a row from the Nama Personel Team table
                                $("#GambarTableParameter").on("click", ".remove-row", function() {
                                    $(this).closest("tr").remove();
                                    personelCounter--;
                                    // Update the row numbers
                                    $("#GambarTableParameter tbody tr").each(function(index) {
                                        $(this).find("td:first").text(index + 1);
                                    });
                                });
                            </script>
                            <button class="btn btn-info px-4 mt-3" type="submit">Submit form</button>
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