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
                            <h4 class="card-title mb-0 text-center">Task List Air Unit Handling Precision</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('AUHP.store') }}" method="POST">
                                @csrf
                                <table class="table table-bordered" id="personelTeamTable">
                                    <thead>
                                        <h5 class="text-center" style="background-color: black;color:white">A.Filter Section</h5>

                                        <tr>
                                            <th>No</th>
                                            <th>Item Checked</th>
                                            <th>Spec.Range / Cond.Std.</th>
                                            <th>Actual Checked</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <input type="hidden"required  name="id" value="{{ $id }}">
                                            <tr>
                                                <td>1</td>
                                                <td>Check/Replace Filters</td>
                                                <td>Clean Or Dirty</td>
                                                <td><input type="text" class="form-control text-center"required  name="q1[]" value=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>2</td>                       
                                                <td>Grille Area Unrestricted</td>
                                                <td>Ok Or No</td>
                                                <td><input type="text" class="form-control text-center"required  name="q2[]" value=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>3</td>
                                                <td>Wipe Section Clean</td>
                                                <td>Clean Or Dirty</td>
                                                <td><input type="text" class="form-control text-center"required  name="q3[]" value=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>4</td>
                                                <td>Coil Clean</td>
                                                <td>Clean Or Dirty</td>
                                                <td><input type="text" class="form-control text-center"required  name="q4[]" value=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>5</td>
                                                <td>Clean Condesate Pan</td>
                                                <td>Clean Or Dirty</td>
                                                <td><input type="text" class="form-control text-center"required  name="q5[]" value=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>6</td>
                                                <td>Clean Trap In Condensate Drain</td>
                                                <td>Clean Or Dirty</td>
                                                <td><input type="text" class="form-control text-center"required  name="q6[]" value=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>7</td>
                                                <td>Check/Test Filter-Clog Switch Operation</td>
                                                <td>Ok Or No</td>
                                                <td><input type="text" class="form-control text-center"required  name="q7[]" value=""></td>
                                            </tr>
                                        </tbody>
                                </table>
                                <table class="table table-bordered" id="personelTeamTable">
                                    <thead>
                                        <h5 class="text-center" style="background-color: black;color:white">B.Blower Section</h5>

                                        <tr>
                                            <th>No</th>
                                            <th class="text-center">Item Checked</th>
                                            <th>Spec.Range / Cond.Std.</th>
                                            <th>Blower 1</th>
                                            <th></th>
                                            <th>Blower 2</th>
                                            <th></th>
                                            <th>Blower 3</th>
                                            <th></th>
                                            <th>Keterangan</th>
                                        </tr>

                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Before</th>
                                            <th>After</th>
                                            <th>Before</th>
                                            <th>After</th>
                                            <th>Before</th>
                                            <th>After</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Mounting Bolts Tight</td>
                                            <td>Ok Or No</td>
                                            <td><input type="text" class="form-control text-center"required  name="q8[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q8[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q8[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q8[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q8[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q8[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q8[]"></td>
                                          </tr>

                                          <tr>
                                            <td>2</td>
                                            <td>Fan-Guard Bolts Tight</td>
                                            <td>Ok Or No</td>
                                            <td><input type="text" class="form-control text-center"required  name="q9[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q9[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q9[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q9[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q9[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q9[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q9[]"></td>
                                          </tr>

                                          <tr>
                                            <td>3</td>
                                            <td>Impeller Spins Freely</td>
                                            <td>Ok Or No</td>
                                            <td><input type="text" class="form-control text-center"required  name="q10[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q10[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q10[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q10[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q10[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q10[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q10[]"></td>
                                          </tr>

                                          <tr>
                                            <td>4</td>
                                            <td>Check/Test Air Sail Switch</td>
                                            <td>Ok Or No</td>
                                            <td><input type="text" class="form-control text-center"required  name="q11[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q11[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q11[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q11[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q11[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q11[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q11[]"></td>
                                          </tr>


                                          <tr>
                                            <td>5</td>
                                            <td>Motor Amp Draw Compare To Nameplate Amps</td>
                                            <td>
                                                <p class="text-center">FLA L1 = A</p>
                                                <p class="text-center">FLA L2 = A</p>
                                                <p class="text-center">FLA L3 = A</p>
                                            </td>
                                            <td>
                                                <p>L1</p>
                                                <p>L2</p>
                                                <p>L3</p>
                                            </td>
                                            <td>
                                                <p>L1</p>
                                                <p>L2</p>
                                                <p>L3</p>
                                            </td>
                                            <td>
                                                <p>L1</p>
                                                <p>L2</p>
                                                <p>L3</p>
                                            </td>
                                            <td>
                                                <p>L1</p>
                                                <p>L2</p>
                                                <p>L3</p>
                                            </td>
                                            <td>
                                                <p>L1</p>
                                                <p>L2</p>
                                                <p>L3</p>
                                            </td>
                                            
                                            <td>
                                                <p>L1</p>
                                                <p>L2</p>
                                                <p>L3</p>
                                            </td>

                                            <td>
                                           <input type="text" class="form-control text-center"required  name="q12[]">
                                           <input type="text" class="form-control text-center"required  name="q12[]">
                                           <input type="text" class="form-control text-center"required  name="q12[]">
                                            </td>

                                          </tr>


                                          <tr>
                                            <td>6</td>
                                            <td>Check Belt Tension And Condition</td>
                                            <td>Ok Or No</td>
                                            <td><input type="text" class="form-control text-center"required  name="q13[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q13[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q13[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q13[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q13[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q13[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q13[]"></td>
                                          </tr>


                                          <tr>
                                            <td>7</td>
                                            <td>Check Sheave/Pulley</td>
                                            <td>Ok Or No</td>
                                            <td><input type="text" class="form-control text-center"required  name="q14[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q14[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q14[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q14[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q14[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q14[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q14[]"></td>
                                          </tr>

                                        </tbody>
                                    </table>
                                    <table class="table table-bordered" id="personelTeamTable">
                                        <tbody>
                                            <h5 class="text-center" style="background-color: black;color:white">C.Reheat</h5>
                                            <tr>
                                                <td>No</td>
                                                <th>Item Checked</th>
                                                <th>Spec.Range / Cond.Std.</th>
                                                <th>Blower 1</th>
                                                <th></th>
                                                <th>Blower 2</th>
                                                <th></th>
                                                <th>Blower 3</th>
                                                <th></th>
                                                <th>Keterangan</th>
                                            </tr>
    
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>Before</th>
                                                <th>After</th>
                                                <th>Before</th>
                                                <th>After</th>
                                                <th>Before</th>
                                                <th>After</th>
                                                <th></th>
                                            </tr>
                                        </thead>
    
                                        <tbody>
                                              <tr>
                                                <td>1</td>
                                                <td>Reheat Amp Draw</td>
                                                <td>FLA = A</td>
                                                <td><input type="text" class="form-control text-center"required  name="q15[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q15[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q15[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q15[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q15[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q15[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q15[]"></td>
                                              </tr>
    
                                              <tr>
                                                <td>2</td>
                                                <td>Check Heater Resistance</td>
                                                <td>18-22 OHM</td>
                                                <td><input type="text" class="form-control text-center"required  name="q16[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q16[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q16[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q16[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q16[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q16[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q16[]"></td>
                                              </tr>
    
                                              <tr>
                                                <td>3</td>
                                                <td>Inspect Elements</td>
                                                <td>Ok Or No</td>
                                                <td><input type="text" class="form-control text-center"required  name="q17[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q17[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q17[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q17[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q17[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q17[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q17[]"></td>
                                              </tr>
    
                                              <tr>
                                                <td>4</td>
                                                <td>Check Temperature Heater</td>
                                                <td>max 90 ͦC</td>
                                                <td><input type="text" class="form-control text-center"required  name="q18[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q18[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q18[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q18[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q18[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q18[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q18[]"></td>
                                              </tr>
        
                                              <tr>
                                                <td>5</td>
                                                <td>Check Wire Connections</td>
                                                <td>Ok Or No</td>
                                                <td><input type="text" class="form-control text-center"required  name="q19[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q19[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q19[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q19[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q19[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q19[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q19[]"></td>
                                              </tr>
                                    </tbody>
                                </table>

                               

                                <table class="table table-bordered" id="personelTeamTable">
                                    <h5 class="text-center" style="background-color: black;color:white">D.Steam Generating Humidifier</h5>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Item Checked</th>
                                            <th>Spec.Range / Cond.Std.</th>
                                            <th>Actual Checked</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Humidifier Amp Draw</td>
                                            <td>..........................A</td>
                                            <td><input type="text" class="form-control text-center"required  name="q20[]" value=""></td>
                                        </tr>

                                        <tr>         
                                            <td>2</td>              
                                            <td>Check Drain Valve/Drain Lines/Trap For Damage/Clogs/Leaks</td>
                                            <td>Ok Or No</td>
                                            <td><input type="text" class="form-control text-center"required  name="q21[]" value=""></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>3</td>
                                            <td>Check Water Fill Valve And All Supply Lines/Connection For Leaks</td>
                                            <td>Clean Or Dirty</td>
                                            <td><input type="text" class="form-control text-center"required  name="q22[]" value=""></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>4</td>
                                            <td>Check Condition Of Steam Hose</td>
                                            <td>Clean Or Dirty</td>
                                            <td><input type="text" class="form-control text-center"required  name="q23[]" value=""></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>5</td>
                                            <td>Clean Strainer</td>
                                            <td>Clean Or Dirty</td>
                                            <td><input type="text" class="form-control text-center"required  name="q24[]" value=""></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>6</td>
                                            <td>Check Humidifier Bottle (Boiler Tank)</td>
                                            <td>Clean Or Dirty</td>
                                            <td><input type="text" class="form-control text-center"required  name="q25[]" value=""></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>7</td>
                                            <td>Check Operation Of Humidifier</td>
                                            <td>Ok Or No</td>
                                            <td><input type="text" class="form-control text-center"required  name="q26[]" value=""></td>
                                        </tr>

                                    </tbody>
                                </table>
                                <table class="table table-bordered" id="personelTeamTable">
                                    <h5 class="text-center" style="background-color: black;color:white">E.Electrical Panel</h5>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Item Checked</th>
                                            <th>Spec.Range / Cond.Std.</th>
                                            <th>Actual Checked</th>
                                            <th></th>
                                            <th>Keterangan</th>
                                        </tr>

                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Before</th>
                                            <th>After</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Check Fuses</td>
                                            <td>Ok Or No</td>
                                            <td><input type="text" class="form-control text-center"required  name="q27[]" value=""></td>
                                            <td><input type="text" class="form-control text-center"required  name="q27[]" value=""></td>
                                            <td><input type="text" class="form-control text-center"required  name="q27[]" value=""></td>
                                        </tr>

                                        <tr>         
                                            <td>2</td>              
                                            <td>Check Contractors For Pitting (Replace If Pitted)</td>
                                            <td>Ok Or No</td>
                                            <td><input type="text" class="form-control text-center"required  name="q28[]" value=""></td>
                                            <td><input type="text" class="form-control text-center"required  name="q28[]" value=""></td>
                                            <td><input type="text" class="form-control text-center"required  name="q28[]" value=""></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>3</td>
                                            <td>Check/Re-Torque Wire Connections</td>
                                            <td>Ok Or No</td>
                                            <td><input type="text" class="form-control text-center"required  name="q29[]" value=""></td>
                                            <td><input type="text" class="form-control text-center"required  name="q29[]" value=""></td>
                                            <td><input type="text" class="form-control text-center"required  name="q29[]" value=""></td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>Voltage Line To Neutral Ground</td>
                                            <td>220 + 10%</td>
                                            <td><input type="text" class="form-control text-center"required  name="q30[]" placeholder="L1/L2/L3 = V" value=""></td>
                                            <td><input type="text" class="form-control text-center"required  name="q30[]" placeholder="L1/L2/L3 = V" value=""></td>
                                            <td><input type="text" class="form-control text-center"required  name="q30[]" value=""></td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td>Voltage Line To Line</td>
                                            <td>380 + 10%</td>
                                            <td><input type="text" class="form-control text-center"required  name="q31[]"  placeholder="L1L2/L2L3/L1L3 = V"" value=""></td>
                                            <td><input type="text" class="form-control text-center"required  name="q31[]"  placeholder="L1L2/L2L3/L1L3 = V"" value=""></td>
                                            <td><input type="text" class="form-control text-center"required  name="q31[]" value=""></td>
                                        </tr>

                                        <tr>
                                            <td>6</td>
                                            <td>Frequency</td>
                                            <td>50 + 10%</td>
                                            <td><input type="text" class="form-control text-center"required  name="q32[]" placeholder="F = HZ" value=""></td>
                                            <td><input type="text" class="form-control text-center"required  name="q32[]" placeholder="F = HZ" value=""></td>
                                            <td><input type="text" class="form-control text-center"required  name="q32[]" value=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-bordered" id="personelTeamTable">
                                    <h5 class="text-center" style="background-color: black;color:white">F.Controls</h5>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Item Checked</th>
                                            <th>Spec.Range / Cond.Std.</th>
                                            <th>Actual Checked</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Check/Verify Control Operation</td>
                                            <td>Ok Or No</td>
                                            <td><input type="text" class="form-control text-center"required  name="q33[]" value=""></td>
                                        </tr>

                                        <tr>         
                                            <td>2</td>              
                                            <td>Check/Test changeover device</td>
                                            <td>Ok Or No</td>
                                            <td><input type="text" class="form-control text-center"required  name="q34[]" value=""></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>3</td>
                                            <td>Check/Test water-detection device</td>
                                            <td>Ok Or No</td>
                                            <td><input type="text" class="form-control text-center"required  name="q35[]" value=""></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>4</td>
                                            <td>Check/Test CAN connection between indoor and outdoor units</td>
                                            <td>Ok Or No</td>
                                            <td><input type="text" class="form-control text-center"required  name="q36[]" value=""></td>
                                        </tr>

                                    </tbody>
                                </table>

                                <table class="table table-bordered" id="personelTeamTable">
                                    <h5 class="text-center" style="background-color: black;color:white">G.Chiled Water</h5>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Item Checked</th>
                                            <th>Spec.Range / Cond.Std.</th>
                                            <th>Actual Checked</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Check Water Temperature / Pressure In</td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q37[]" value="" placeholder="°C">
                                                <input type="text" class="form-control text-center"required  name="q37[]" value="" placeholder="PSI">
                                            </td>
                                            <td class="py-5"><input type="text" class="form-control text-center"required  name="q37[]" value=""></td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Check Temperature / Pressure Out</td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q38[]" value="" placeholder="°C">
                                                <input type="text" class="form-control text-center"required  name="q38[]" value="" placeholder="PSI">
                                            </td>
                                            <td class="py-5"><input type="text" class="form-control text-center"required  name="q38[]" value=""></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>3</td>
                                            <td>Clean Pressure Gauge & Temperature Gauge</td>
                                            <td>Clean Or Dirty</td>
                                            <td><input type="text" class="form-control text-center"required  name="q39[]" value=""></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>4</td>
                                            <td>Check Motorize Valve</td>
                                            <td>Ok Or No</td>
                                            <td><input type="text" class="form-control text-center"required  name="q40[]" value=""></td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td>Check Valve In & Out Chilled Water (No Corrosion, No Leaks)</td>
                                            <td>Ok Or No</td>
                                            <td><input type="text" class="form-control text-center"required  name="q41[]" value=""></td>
                                        </tr>

                                        <tr>
                                            <td>6</td>
                                            <td>Clean Outside Valve & Pipe</td>
                                            <td>Clean Or Dirty</td>
                                            <td><input type="text" class="form-control text-center"required  name="q42[]" value=""></td>
                                        </tr>

                                        <tr>
                                            <td>7</td>
                                            <td>Clean Strainer</td>
                                            <td>
                                                <p>Clean Or Dirty</p>
                                                <input type="checkbox" class= "text-center mx-3" required  name="q43[]" value="Clean">
                                                <input type="checkbox" class= "text-center mx-3"required  name="q43[]" value="Dirty">
                                            </td>
                                            <td><input type="text" class="form-control text-center"required  name="q43[]" value=""></td>
                                        </tr>

                                        <tr>
                                            <td>8</td>
                                            <td>Check Pipe Insulation</td>
                                            <td>Ok Or No</td>
                                            <td><input type="text" class="form-control text-center"required  name="q44[]" value=""></td>
                                        </tr>

                                    </tbody>
                                </table>

                                <table class="table table-bordered" id="personelTeamTable">
                                    <h5 class="text-center" style="background-color: black;color:white">H.General Function</h5>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Item Checked</th>
                                            <th>Spec.Range / Cond.Std.</th>
                                            <th>Actual Checked</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Cooling Test</td>
                                            <td>OK Or NO</td>
                                            <td><input type="text" class="form-control text-center"required  name="q45[]" value=""></td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Heating Test</td>
                                            <td>OK Or NO</td>
                                            <td><input type="text" class="form-control text-center"required  name="q46[]" value=""></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>3</td>
                                            <td>Humidification Test</td>
                                            <td>OK Or NO</td>
                                            <td><input type="text" class="form-control text-center"required  name="q47[]" value=""></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>4</td>
                                            <td>Dehumidification Test</td>
                                            <td>Ok Or No</td>
                                            <td><input type="text" class="form-control text-center"required  name="q48[]" value=""></td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td>Alarm Test</td>
                                            <td>Ok Or No</td>
                                            <td><input type="text" class="form-control text-center"required  name="q49[]" value=""></td>
                                        </tr>

                                    </tbody>
                                </table>


                                <table class="table table-bordered" id="personelTeamTable">
                                    <h5 class="text-center" style="background-color: black;color:white">I.Room Function</h5>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Item Checked</th>
                                            <th>Spec.Range / Cond.Std.</th>
                                            <th>Actual Checked</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Temperature</td>
                                            <td><input type="text" class="form-control text-center"required  name="q50[]" value="" placeholder="°C"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q50[]" value=""></td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Humidity</td>
                                            <td><input type="text" class="form-control text-center"required  name="q51[]" value="" placeholder="%"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q51[]" value=""></td>
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
