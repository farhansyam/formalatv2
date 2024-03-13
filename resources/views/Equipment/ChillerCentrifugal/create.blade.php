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
                            <form action="{{ route('chiller-centrifugal.store') }}" method="POST">
                                @csrf
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
                                                <td><input type="text" class="form-control text-center" name="q1[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q1[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q1[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q1[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q1[]" value=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>2</td>
                                                <td>Cleaning Condenser</td>
                                                <td><input type="text" class="form-control text-center" name="q2[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q2[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q2[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q2[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q2[]" value=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>3</td>
                                                <td>Cleaning Evaporator</td>
                                                <td><input type="text" class="form-control text-center" name="q3[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q3[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q3[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q3[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q3[]" value=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>4</td>
                                                <td>Cleaning Fan Blower</td>
                                                <td><input type="text" class="form-control text-center" name="q4[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q4[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q4[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q4[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q4[]" value=""></td>
                                            </tr>

                                          <tr>
                                                <td>5</td>
                                                <td>Cleaning Body</td>
                                                <td><input type="text" class="form-control text-center" name="q5[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q5[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q5[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q5[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q5[]" value=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>6</td>
                                                <td>Cleaning Refrigant</td>
                                                <td><input type="text" class="form-control text-center" name="q6[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q6[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q6[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q6[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q6[]" value=""></td>
                                            </tr>

                                            <tr>
                                                <td>7</td>
                                                <td>Check & Cleaning all sensor</td>
                                                <td><input type="text" class="form-control text-center" name="q7[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q7[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q7[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q7[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q7[]" value=""></td>
                                            </tr>

                                            <tr>
                                                <td>8</td>
                                                <td>Check & cleaning control panel chiller</td>
                                                <td><input type="text" class="form-control text-center" name="q8[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q8[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q8[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q8[]" value=""></td>
                                                <td><input type="text" class="form-control text-center" name="q8[]" value=""></td>
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
                                            <td><input type="text" class="form-control text-center" name="q9[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q9[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q9[]"></td>
                                          </tr>

                                          <tr>
                                            <td>2</td>
                                            <td>Set Point Cool Ewt</td>
                                            <td>°C</td>
                                            <td><input type="text" class="form-control text-center" name="q10[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q10[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q10[]"></td>
                                          </tr>

                                          <tr>
                                            <td>3</td>
                                            <td>Set Point Cool Lwt</td>
                                            <td>°C</td>
                                            <td><input type="text" class="form-control text-center" name="q11[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q11[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q11[]"></td>
                                          </tr>

                                          <tr>
                                            <td>4</td>
                                            <td>Base Demand Limit</td>
                                            <td>%</td>
                                            <td><input type="text" class="form-control text-center" name="q12[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q12[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q12[]"></td>
                                          </tr>

                                          <tr>
                                            <td>5</td>
                                            <td>Vane Position</td>
                                            <td>%</td>
                                            <td><input type="text" class="form-control text-center" name="q13[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q13[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q13[]"></td>
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
                                            <td><input type="text" class="form-control text-center" name="q14[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q14[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q14[]"></td>
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
                                                <input type="text" class="form-control text-center" name="q15[]">
                                                <input type="text" class="form-control text-center" name="q15[]">
                                                <input type="text" class="form-control text-center" name="q15[]">
                                            </td>

                                            <td>
                                                <input type="text" class="form-control text-center" name="q16[]">
                                                <input type="text" class="form-control text-center" name="q16[]">
                                                <input type="text" class="form-control text-center" name="q16[]">
                                            </td>

                                            <td>
                                                <input type="text" class="form-control text-center" name="q17[]">
                                                <input type="text" class="form-control text-center" name="q17[]">
                                                <input type="text" class="form-control text-center" name="q17[]">
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
                                                <input type="text" class="form-control text-center" name="q18[]">
                                                <input type="text" class="form-control text-center" name="q18[]">
                                                <input type="text" class="form-control text-center" name="q18[]">
                                            </td>

                                            <td>
                                                <input type="text" class="form-control text-center" name="q19[]">
                                                <input type="text" class="form-control text-center" name="q19[]">
                                                <input type="text" class="form-control text-center" name="q19[]">
                                            </td>

                                            <td>
                                                <input type="text" class="form-control text-center" name="q20[]">
                                                <input type="text" class="form-control text-center" name="q20[]">
                                                <input type="text" class="form-control text-center" name="q20[]">
                                            </td>

                                          </tr>


                                          <tr>
                                            <td>4</td>
                                            <td>Motor Winding Temperature</td>
                                            <td>°C</td>
                                            <td></td>
                                            <td><input type="text" class="form-control text-center" name="q21[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q21[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q21[]"></td>
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
                                                <td><input type="text" class="form-control text-center" name="q22[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q22[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q22[]"></td>
                                              </tr>
    
                                              <tr>
                                                <td>2</td>
                                                <td>Cool Leaving Water Temp</td>
                                                <td>°C</td>
                                                <td><input type="text" class="form-control text-center" name="q23[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q23[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q23[]"></td>
                                              </tr>
    
                                              <tr>
                                                <td>3</td>
                                                <td>Cooler Delta Temp</td>
                                                <td>°C</td>
                                                <td><input type="text" class="form-control text-center" name="q24[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q24[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q24[]"></td>
                                              </tr>
    
                                              <tr>
                                                <td>4</td>
                                                <td>Cooler Temp</td>
                                                <td>°C</td>
                                                <td><input type="text" class="form-control text-center" name="q25[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q25[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q25[]"></td>
                                              </tr>
    
                                              <tr>
                                                <td>5</td>
                                                <td>Suction Pressure</td>
                                                <td>KPA</td>
                                                <td><input type="text" class="form-control text-center" name="q26[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q26[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q26[]"></td>
                                              </tr>
    
                                              <tr>
                                                <td>6</td>
                                                <td>Cooler Aproach</td>
                                                <td>°C</td>
                                                <td><input type="text" class="form-control text-center" name="q27[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q27[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q27[]"></td>
                                              </tr>

                                              <tr>
                                                <td>7</td>
                                                <td>Cooler Delta Press</td>
                                                <td>PSI</td>
                                                <td><input type="text" class="form-control text-center" name="q28[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q28[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q28[]"></td>
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
                                                <td><input type="text" class="form-control text-center" name="q29[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q29[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q29[]"></td>
                                              </tr>
    
                                              <tr>
                                                <td>2</td>
                                                <td>Cond Leaving Water Temp</td>
                                                <td>°C</td>
                                                <td><input type="text" class="form-control text-center" name="q30[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q30[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q30[]"></td>
                                              </tr>
    
                                              <tr>
                                                <td>3</td>
                                                <td>Cond Delta Temp</td>
                                                <td>°C</td>
                                                <td><input type="text" class="form-control text-center" name="q31[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q31[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q31[]"></td>
                                              </tr>
    
                                              <tr>
                                                <td>4</td>
                                                <td>Condenser Temp</td>
                                                <td>°C</td>
                                                <td><input type="text" class="form-control text-center" name="q32[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q32[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q32[]"></td>
                                              </tr>
    
                                              <tr>
                                                <td>5</td>
                                                <td>Condenser Pressure</td>
                                                <td>KPA</td>
                                                <td><input type="text" class="form-control text-center" name="q33[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q33[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q33[]"></td>
                                              </tr>
    
                                              <tr>
                                                <td>6</td>
                                                <td>Condenser Aproach</td>
                                                <td>°C</td>
                                                <td><input type="text" class="form-control text-center" name="q34[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q34[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q34[]"></td>
                                              </tr>

                                              <tr>
                                                <td>7</td>
                                                <td>Discharge Temp</td>
                                                <td>°C</td>
                                                <td><input type="text" class="form-control text-center" name="q35[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q35[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q35[]"></td>
                                              </tr>


                                              <tr>
                                                <td>8</td>
                                                <td>Condenser Delta Press</td>
                                                <td>PSI</td>
                                                <td><input type="text" class="form-control text-center" name="q36[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q36[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q36[]"></td>
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
                                                <td><input type="text" class="form-control text-center" name="q37[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q37[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q37[]"></td>
                                              </tr>
    
                                              <tr>
                                                <td>2</td>
                                                <td>Sump Temp</td>
                                                <td></td>
                                                <td>°C</td>
                                                <td><input type="text" class="form-control text-center" name="q38[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q38[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q38[]"></td>
                                              </tr>
    
                                              <tr>
                                                <td>3</td>
                                                <td>Bearing Temp</td>
                                                <td></td>
                                                <td>°C</td>
                                                <td><input type="text" class="form-control text-center" name="q39[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q39[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q39[]"></td>
                                              </tr>
    
                                              <tr>
                                                <td>4</td>
                                                <td>Oil Level</td>
                                                <td></td>
                                                <td></td>
                                                <td><input type="text" class="form-control text-center" name="q40[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q40[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q40[]"></td>
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
                                                    <input type="text" class="form-control text-center" name="q41[]">
                                                    <input type="text" class="form-control text-center" name="q41[]">
                                                    <input type="text" class="form-control text-center" name="q41[]">
                                                </td>
    
                                                <td>
                                                    <input type="text" class="form-control text-center" name="q42[]">
                                                    <input type="text" class="form-control text-center" name="q42[]">
                                                    <input type="text" class="form-control text-center" name="q42[]">
                                                </td>
    
                                                <td>
                                                    <input type="text" class="form-control text-center" name="q43[]">
                                                    <input type="text" class="form-control text-center" name="q43[]">
                                                    <input type="text" class="form-control text-center" name="q43[]">
                                                </td>
                                              </tr>

    
                                        </tbody>
                                    </table>

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
