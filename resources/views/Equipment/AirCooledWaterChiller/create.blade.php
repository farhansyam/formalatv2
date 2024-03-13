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
                            <h5 class="text-center" style="background-color: black;color:white">Task List Air Cooled Water Chiller</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('air-cooled-water-chiller.store') }}" method="POST">
                                @csrf
                                <table class="table table-bordered" id="personelTeamTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Pertanyaan</th>
                                            <th>Frequency</th>
                                            <th>Standard Condition</th>
                                            <th>Actual Check</th>
                                        </tr>
                                    <tbody>

                                        <input type="hidden"required  name="id" value="{{ $id }}">
                                            <tr>
                                                <td>1</td>
                                                <td>Check the evaporator refrigerant pressure and the condenser refrigerant</td>
                                                <td>Weekly</td>
                                                <td><input type="text" class="form-control text-center"required  name="q1[]" value=""></td>
                                                <td><input type="text" class="form-control text-center"required  name="q1[]" value=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>2</td>
                                                <td>Check the liquid line sight glasses</td>
                                                <td>Weekly</td>
                                                <td><input type="text" class="form-control text-center"required  name="q2[]" value=""></td>
                                                <td><input type="text" class="form-control text-center"required  name="q2[]" value=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>3</td>
                                                <td>Measure and record the system superheat</td>
                                                <td>1 Month</td>
                                                <td><input type="text" class="form-control text-center"required  name="q3[]" value=""></td>
                                                <td><input type="text" class="form-control text-center"required  name="q3[]" value=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>4</td>
                                                <td>Measure and record the system subcooling</td>
                                                <td>1 Month</td>
                                                <td><input type="text" class="form-control text-center"required  name="q4[]" value=""></td>
                                                <td><input type="text" class="form-control text-center"required  name="q4[]" value=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>5</td>
                                                <td>Manually rotate condenser fans to insure proper clearance</td>
                                                <td>1 Month</td>
                                                <td><input type="text" class="form-control text-center"required  name="q5[]" value=""></td>
                                                <td><input type="text" class="form-control text-center"required  name="q5[]" value=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>6</td>
                                                <td>Check the fan assemblies for proper clearance in the fan openings</td>
                                                <td>6 Month</td>
                                                <td><input type="text" class="form-control text-center"required  name="q6[]" value=""></td>
                                                <td><input type="text" class="form-control text-center"required  name="q6[]" value=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>7</td>
                                                <td>Check motor shaft misalignment, abnormal end-play, vibration and noise</td>
                                                <td>6 Month</td>
                                                <td><input type="text" class="form-control text-center"required  name="q7[]" value=""></td>
                                                <td><input type="text" class="form-control text-center"required  name="q7[]" value=""></td>
                                            </tr>

                                            <tr>
                                                <td>8</td>
                                                <td>Check the oil level and refrigerant charge</td>
                                                <td>6 Month</td>
                                                <td><input type="text" class="form-control text-center"required  name="q8[]" value=""></td>
                                                <td><input type="text" class="form-control text-center"required  name="q8[]" value=""></td>
                                            </tr>

                                            <tr>
                                                <td>9</td>
                                                <td>Check oil analysis to determine system moisture content and acid level</td>
                                                <td>6 Month</td>
                                                <td><input type="text" class="form-control text-center"required  name="q9[]" value=""></td>
                                                <td><input type="text" class="form-control text-center"required  name="q9[]" value=""></td>
                                            </tr>

                                            <tr>
                                                <td>10</td>
                                                <td>Leak test the chiller</td>
                                                <td>6 Month</td>
                                                <td><input type="text" class="form-control text-center"required  name="q10[]" value=""></td>
                                                <td><input type="text" class="form-control text-center"required  name="q10[]" value=""></td>
                                            </tr>

                                            <tr>
                                                <td>11</td>
                                                <td>Check operating and safety controls</td>
                                                <td>6 Month</td>
                                                <td><input type="text" class="form-control text-center"required  name="q11[]" value=""></td>
                                                <td><input type="text" class="form-control text-center"required  name="q11[]" value=""></td>
                                            </tr>

                                            <tr>
                                                <td>12</td>
                                                <td>Inspect electrical components for deficiencies</td>
                                                <td>6 Month</td>
                                                <td><input type="text" class="form-control text-center"required  name="q12[]" value=""></td>
                                                <td><input type="text" class="form-control text-center"required  name="q12[]" value=""></td>
                                            </tr>

                                            <tr>
                                                <td>13</td>
                                                <td>Inspect all piping components for leakage and damage</td>
                                                <td>6 Month</td>
                                                <td><input type="text" class="form-control text-center"required  name="q13[]" value=""></td>
                                                <td><input type="text" class="form-control text-center"required  name="q13[]" value=""></td>
                                            </tr>

                                            <tr>
                                                <td>14</td>
                                                <td>Clean out any inline strainers</td>
                                                <td>6 Month</td>
                                                <td><input type="text" class="form-control text-center"required  name="q14[]" value=""></td>
                                                <td><input type="text" class="form-control text-center"required  name="q14[]" value=""></td>
                                            </tr>

                                            <tr>
                                                <td>15</td>
                                                <td>Clean and repaint any areas that show signs of corrosion</td>
                                                <td>6 Month</td>
                                                <td><input type="text" class="form-control text-center"required  name="q15[]" value=""></td>
                                                <td><input type="text" class="form-control text-center"required  name="q15[]" value=""></td>
                                            </tr>

                                            <tr>
                                                <td>16</td>
                                                <td>Clean the condenser coils</td>
                                                <td>6 Month</td>
                                                <td><input type="text" class="form-control text-center"required  name="q16[]" value=""></td>
                                                <td><input type="text" class="form-control text-center"required  name="q16[]" value=""></td>
                                            </tr>

                                            <tr>
                                                <td>17</td>
                                                <td>Clean the condenser fans</td>
                                                <td>6 Month</td>
                                                <td><input type="text" class="form-control text-center"required  name="q17[]" value=""></td>
                                                <td><input type="text" class="form-control text-center"required  name="q17[]" value=""></td>
                                            </tr>

                                            <tr>
                                                <td>18</td>
                                                <td>Clean panel control box & Component</td>
                                                <td>6 Month</td>
                                                <td><input type="text" class="form-control text-center"required  name="q18[]" value=""></td>
                                                <td><input type="text" class="form-control text-center"required  name="q18[]" value=""></td>
                                            </tr>

                                            <tr>
                                                <td>19</td>
                                                <td>Check all sensor (Condition & read)</td>
                                                <td>6 Month</td>
                                                <td><input type="text" class="form-control text-center"required  name="q19[]" value=""></td>
                                                <td><input type="text" class="form-control text-center"required  name="q19[]" value=""></td>
                                            </tr>

                                            <tr>
                                                <td>20</td>
                                                <td>Check Cooler & Pipe Insulation</td>
                                                <td>6 Month</td>
                                                <td><input type="text" class="form-control text-center"required  name="q20[]" value=""></td>
                                                <td><input type="text" class="form-control text-center"required  name="q20[]" value=""></td>
                                            </tr>

                                            <tr>
                                                <td>21</td>
                                                <td>Check Condensor air velocity</td>
                                                <td>6 Month</td>
                                                <td><input type="text" class="form-control text-center"required  name="q21[]" value=""></td>
                                                <td><input type="text" class="form-control text-center"required  name="q21[]" value=""></td>
                                            </tr>

                                        </tbody>
                                </table>

                                <table class="table table-bordered" id="personelTeamTable">
                                        <h5 class="text-center" style="background-color: black;color:white">Service Check</h5>
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
                                            <td>Unit Serial Number :</td>
                                            <td><input type="text" class="form-control text-center"required  name="q22[]"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Unit Model No :</td>
                                            <td><input type="text" class="form-control text-center"required  name="q23[]"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Compressor A Serial No :</td>
                                            <td><input type="text" class="form-control text-center"required  name="q24[]"></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Compressor A Model No :</td>
                                            <td><input type="text" class="form-control text-center"required  name="q25[]"></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Compressor B Serial No :</td>
                                            <td><input type="text" class="form-control text-center"required  name="q26[]"></td>
                                        </tr>

                                        <tr>
                                            <td>6</td>
                                            <td>Compressor B Model No :</td>
                                            <td><input type="text" class="form-control text-center"required  name="q27[]"></td>
                                        </tr>

                                        <tr>
                                            <td>7</td>
                                            <td>Elevation(°) :</td>
                                            <td><input type="text" class="form-control text-center"required  name="q28[]"></td>
                                        </tr>

                                        <tr>
                                            <td>8</td>
                                            <td>Nameplate Voltage(V) :</td>
                                            <td><input type="text" class="form-control text-center"required  name="q29[]"></td>
                                        </tr>

                                        <tr>
                                            <td>9</td>
                                            <td>Fan Motor RLA :</td>
                                            <td><input type="text" class="form-control text-center"required  name="q30[]"></td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td><b>Evap Water Drop Press.(Bar)</b></td>
                                        </tr>

                                        <tr>
                                            <td>10</td>
                                            <td>Des.PSID:</td>
                                            <td><input type="text" class="form-control text-center"required  name="q31[]"></td>
                                        </tr>

                                        <tr>
                                            <td>11</td>
                                            <td>Des.GPM:</td>
                                            <td><input type="text" class="form-control text-center"required  name="q32[]"></td>
                                        </tr>

                                        <tr>
                                            <td>12</td>
                                            <td>Act.PSID:</td>
                                            <td><input type="text" class="form-control text-center"required  name="q33[]"></td>
                                        </tr>

                                        <tr>
                                            <td>13</td>
                                            <td>Act.GPM:</td>
                                            <td><input type="text" class="form-control text-center"required  name="q34[]"></td>
                                        </tr>


                                        </tbody>
                                    </table>

                                    <table class="table table-bordered" id="personelTeamTable">
                                        <thead>
                                            <tr>
                                                <th class="px-5">Circuit Compressor</th>
                                                <th>UOM</th>
                                                <th>Standard</th>
                                                <th>Before</th>
                                                <th></th>
                                                <th>After</th>
                                                <th></th>
                                                <th>Remarks</th>
                                            </tr>
    
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>Cir A</th>
                                                <th>Cir B</th>
                                                <th>Cir A</th>
                                                <th>Cir B</th>
                                                <th></th>
                                            </tr>
                                        </thead>
    
                                        <tbody>
                                              <tr>
                                                <td>Unit Voltage</td>
                                                <td>
                                                    <p>R-S</p>
                                                    <p>S-T</p>
                                                    <p>T-R</p>
                                                </td>
                                                <td>
                                                    <p>Volt</p>
                                                    <p>Volt</p>
                                                    <p>Volt</p>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q35[]">
                                                    <input type="text" class="form-control text-center"required  name="q35[]">
                                                    <input type="text" class="form-control text-center"required  name="q35[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q36[]">
                                                    <input type="text" class="form-control text-center"required  name="q36[]">
                                                    <input type="text" class="form-control text-center"required  name="q36[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q37[]">
                                                    <input type="text" class="form-control text-center"required  name="q37[]">
                                                    <input type="text" class="form-control text-center"required  name="q37[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q38[]">
                                                    <input type="text" class="form-control text-center"required  name="q38[]">
                                                    <input type="text" class="form-control text-center"required  name="q38[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q39[]">
                                                    <input type="text" class="form-control text-center"required  name="q39[]">
                                                    <input type="text" class="form-control text-center"required  name="q39[]">
                                                </td>
                                              </tr>
    
                                              <tr>
                                                <td>Comp.Amp</td>
                                                <td>
                                                    <p>R</p>
                                                    <p>S</p>
                                                    <p>T</p>
                                                </td>
                                                <td>
                                                    <p>Amp</p>
                                                    <p>Amp</p>
                                                    <p>Amp</p>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q40[]">
                                                    <input type="text" class="form-control text-center"required  name="q40[]">
                                                    <input type="text" class="form-control text-center"required  name="q40[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q41[]">
                                                    <input type="text" class="form-control text-center"required  name="q41[]">
                                                    <input type="text" class="form-control text-center"required  name="q41[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q42[]">
                                                    <input type="text" class="form-control text-center"required  name="q42[]">
                                                    <input type="text" class="form-control text-center"required  name="q42[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q43[]">
                                                    <input type="text" class="form-control text-center"required  name="q43[]">
                                                    <input type="text" class="form-control text-center"required  name="q43[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q44[]">
                                                    <input type="text" class="form-control text-center"required  name="q44[]">
                                                    <input type="text" class="form-control text-center"required  name="q44[]">
                                                </td>
                                              </tr>
    
                                              <tr>
                                                <td>Unit Operating Mode</td>
                                                <td></td>
                                                <td><input type="text" class="form-control text-center"required  name="q45[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q45[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q45[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q45[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q45[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q45[]"></td>
                                              </tr>
    
                                              <tr>
                                                <td>Last Diagnostic</td>
                                                <td></td>
                                                <td><input type="text" class="form-control text-center"required  name="q46[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q46[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q46[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q46[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q46[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q46[]"></td>
                                              </tr>
        
                                              <tr>
                                                <td>Evap EWT</td>
                                                <td></td>
                                                <td><input type="text" class="form-control text-center"required  name="q47[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q47[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q47[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q47[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q47[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q47[]"></td>
                                              </tr>

                                              <tr>
                                                <td>Evap lwt</td>
                                                <td></td>
                                                <td><input type="text" class="form-control text-center"required  name="q48[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q48[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q48[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q48[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q48[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q48[]"></td>
                                              </tr>

                                              <tr>
                                                <td>Outdoor Air Temp</td>
                                                <td></td>
                                                <td><input type="text" class="form-control text-center"required  name="q49[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q49[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q49[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q49[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q49[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q49[]"></td>
                                              </tr>

                                              <tr>
                                                <td>Chilled Water Setpoint</td>
                                                <td></td>
                                                <td><input type="text" class="form-control text-center"required  name="q50[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q50[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q50[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q50[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q50[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q50[]"></td>
                                              </tr>

                                              <tr>
                                                <td>Current Limit Setpoint</td>
                                                <td></td>
                                                <td><input type="text" class="form-control text-center"required  name="q51[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q51[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q51[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q51[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q51[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q51[]"></td>
                                              </tr>

                                              <tr>
                                                <td>Sat.Evap.Ref.Temp</td>
                                                <td></td>
                                                <td><input type="text" class="form-control text-center"required  name="q52[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q52[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q52[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q52[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q52[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q52[]"></td>
                                              </tr>

                                              <tr>
                                                <td>Sat.Cond.Ref.Temp</td>
                                                <td></td>
                                                <td><input type="text" class="form-control text-center"required  name="q53[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q53[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q53[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q53[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q53[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q53[]"></td>
                                              </tr>

                                              <tr>
                                                <td>Condensor ref.press.</td>
                                                <td></td>
                                                <td><input type="text" class="form-control text-center"required  name="q54[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q54[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q54[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q54[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q54[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q54[]"></td>
                                              </tr>

                                              <tr>
                                                <td>Evaporator ref.press.</td>
                                                <td></td>
                                                <td><input type="text" class="form-control text-center"required  name="q55[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q55[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q55[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q55[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q55[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q55[]"></td>
                                              </tr>

                                              <tr>
                                                <td>Compressor RLA</td>
                                                <td></td>
                                                <td><input type="text" class="form-control text-center"required  name="q56[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q56[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q56[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q56[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q56[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q56[]"></td>
                                              </tr>

                                              <tr>
                                                <td>Compressor Start</td>
                                                <td></td>
                                                <td><input type="text" class="form-control text-center"required  name="q57[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q57[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q57[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q57[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q57[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q57[]"></td>
                                              </tr>

                                              <tr>
                                                <td>Compressor Hours</td>
                                                <td></td>
                                                <td><input type="text" class="form-control text-center"required  name="q58[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q58[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q58[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q58[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q58[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q58[]"></td>
                                              </tr>

                                              <tr>
                                                <td>Compressor Hours</td>
                                                <td></td>
                                                <td><input type="text" class="form-control text-center"required  name="q59[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q59[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q59[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q59[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q59[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q59[]"></td>
                                              </tr>

                                              <tr>
                                                <td>Oil Level Compressor</td>
                                                <td></td>
                                                <td><input type="text" class="form-control text-center"required  name="q60[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q60[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q60[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q60[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q60[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q60[]"></td>
                                              </tr>
                                    </tbody>
                                </table>
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
