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
                            <form action="{{ route('mini-chilleer.store') }}" method="POST">
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

                                    <input type="hidden"required  name="id" value="{{ $id }}">
                                    <tr>
                                        <td>Losgsheet Parameter Unit</td>
                                        <td><input type="text" class="form-control text-center"required  name="q1[]"></td>
                                        <!-- Kolom "Standard Condition" dengan input yang tidak bisa diubah -->
                                        <td class="form-control text-center"><p>OK</p></td>
                                        <td class="text-center"><input type="text" class="form-control text-center"required  name="q1[]"></td>
                                    </tr>
                                            <tr>
                                             
                                                <td>Inspect Condition Condensor coil</td>
                                                
                                                <td><input type="text" class="form-control text-center"required  name="q2[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q2[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td> Cleaning Condensor coil</td>
                                                <td><input type="text" class="form-control text-center"required  name="q3[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q3[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td> Cleaning Fan Condensor</td>
                                                <td><input type="text" class="form-control text-center"required  name="q4[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q4[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td> Cleaning Component Unit</td>
                                                <td><input type="text" class="form-control text-center"required  name="q5[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q5[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Strainer</td>
                                                <td><input type="text" class="form-control text-center"required  name="q6[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q6[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Check Physical Condition Unit</td>
                                                <td><input type="text" class="form-control text-center"required  name="q7[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q7[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td> Check Part Fungction
                                                    ( Compressor , TXV, Sensor, etc. )"</td>
                                                <td><input type="text" class="form-control text-center"required  name="q8[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q8[]"></td>
                                            </tr>

                                            <tr> 
                                                <td>Check Pressure Water in & Out</td>
                                                <td><input type="text" class="form-control text-center"required  name="q9[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q9[]"></td>
                                            </tr>
    
                                            <tr>
                                             
                                                <td>Check Temperatur EWT & LWT</td>
                                                <td><input type="text" class="form-control text-center"required  name="q10[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q10[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Actual Pressure Refrigerant</td>
                                                <td><input type="text" class="form-control text-center"required  name="q11[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q11[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Motorize Valve Water</td>
                                                <td><input type="text" class="form-control text-center"required  name="q12[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q12[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Syncronize All Program Match With BMS</td>
                                                <td><input type="text" class="form-control text-center"required  name="q13[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q13[]"></td>
                                            </tr>

                                            <tr>
                                                <td>Inspection Piping Chillwater</td>
                                                <td><input type="text" class="form-control text-center"required  name="q14[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q14[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Inspection Piping Refrigeration</td>
                                                <td><input type="text" class="form-control text-center"required  name="q15[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q15[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Checklist History PM</td>
                                                <td><input type="text" class="form-control text-center"required  name="q16[]"></td>
                                                <td class="form-control text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q16[]"></td>
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
                                            <td class="text-center"><input type="text" class="form-control text-center"required  name="q17[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q17[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q17[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">LWT</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>°C</p></td>
                                            <td class="text-center"><input type="text" class="form-control text-center"required  name="q18[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q18[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q18[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Setpoint</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>°C</p></td>
                                            <td class="text-center"><input type="text" class="form-control text-center"required  name="q19[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q19[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q19[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Load</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>%</p></td>  
                                            <td class="text-center"><input type="text" class="form-control text-center"required  name="q20[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q20[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q20[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">EXV Level</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>%</p></td>  
                                            <td class="text-center"><input type="text" class="form-control text-center"required  name="q21[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q21[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q21[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Suction Press A</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>KPA</p></td>  
                                            <td class="text-center"><p>600-750</p></td>
                                            <td><input type="text" class="form-control text-center"required  name="q22[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q22[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Discharge Press A</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>KPA</p></td>  
                                            <td class="text-center"><p>2400-3200</p></td>
                                            <td><input type="text" class="form-control text-center"required  name="q23[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q23[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Suction Press B<Btn></Btn></td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>KPA</p></td>  
                                            <td class="text-center"><p>600-750</p></td>
                                            <td><input type="text" class="form-control text-center"required  name="q24[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q24[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Discharge press B</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>KPA</p></td>  
                                            <td class="text-center"><p>2400-3200</p></td>
                                            <td><input type="text" class="form-control text-center"required  name="q25[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q25[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Sat.Suction Temp A</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>°C</p></td>  
                                            <td class="text-center"><p>0-5</p></td>
                                            <td><input type="text" class="form-control text-center"required  name="q26[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q26[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Sat.Suction Temp B</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>°C</p></td>  
                                            <td class="text-center"><p>0-5</p></td>
                                            <td><input type="text" class="form-control text-center"required  name="q27[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q27[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Oil Level A</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>%</p></td>  
                                            <td class="text-center"><p>50-75</p></td>
                                            <td><input type="text" class="form-control text-center"required  name="q28[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q28[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Oil Level B</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>%</p></td>  
                                            <td class="text-center"><p>50-75</p></td>
                                            <td><input type="text" class="form-control text-center"required  name="q29[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q29[]"></td>
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
                                                <input type="text" class="form-control text-center"required  name="q30[]">
                                                <input type="text" class="form-control text-center"required  name="q30[]">
                                                <input type="text" class="form-control text-center"required  name="q30[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q30[]">
                                                <input type="text" class="form-control text-center"required  name="q30[]">
                                                <input type="text" class="form-control text-center"required  name="q30[]">
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
                                                <input type="text" class="form-control text-center"required  name="q31[]">
                                                <input type="text" class="form-control text-center"required  name="q31[]">
                                                <input type="text" class="form-control text-center"required  name="q31[]">
                                                <input type="text" class="form-control text-center"required  name="q31[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q31[]">
                                                <input type="text" class="form-control text-center"required  name="q31[]">
                                                <input type="text" class="form-control text-center"required  name="q31[]">
                                                <input type="text" class="form-control text-center"required  name="q31[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q31[]">
                                                <input type="text" class="form-control text-center"required  name="q31[]">
                                                <input type="text" class="form-control text-center"required  name="q31[]">
                                                <input type="text" class="form-control text-center"required  name="q31[]">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Ambient Temp</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>°C</p></td>  
                                            <td class="text-center"><p>Max 35</p></td>
                                            <td><input type="text" class="form-control text-center"required  name="q32[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q32[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Outlet Air Temp</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>°C</p></td>  
                                            <td class="text-center"><p>Max 40</p></td>
                                            <td><input type="text" class="form-control text-center"required  name="q33[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q33[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Sat. Cond Temp A</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>°C</p></td>  
                                            <td class="text-center"><p>Max 45</p></td>
                                            <td><input type="text" class="form-control text-center"required  name="q34[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q34[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Sat. Cond Temp B</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>°C</p></td>  
                                            <td class="text-center"><p>Max 45</p></td>
                                            <td><input type="text" class="form-control text-center"required  name="q35[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q35[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Air Flow</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>m/s</p></td>  
                                            <td class="text-center"><input type="text" class="form-control text-center"required  name="q36[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q36[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q36[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Ampere Fan 1</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>AMP</p></td>  
                                            <td class="text-center"><input type="text" class="form-control text-center"required  name="q37[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q37[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q37[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Ampere Fan 2</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>AMP</p></td>  
                                            <td class="text-center"><input type="text" class="form-control text-center"required  name="q38[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q38[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q38[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">CHW Press In</td>
                                            <td class="text-center"></td>
                                            <td class="text-center"><p>BAR</p></td>  
                                            <td class="text-center"><p>3</p></td>  
                                            <td><input type="text" class="form-control text-center"required  name="q39[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q39[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">CHW Press Out</td>
                                            <td class="text-center"></td>
                                            <td class="text-center"><p>BAR</p></td>  
                                            <td class="text-center"><p>2</p></td>  
                                            <td><input type="text" class="form-control text-center"required  name="q40[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q40[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">CHW Temp In</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>°C</p></td>  
                                            <td class="text-center"><input type="text" class="form-control text-center"required  name="q41[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q41[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q41[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">CHW Temp Out</td>
                                            <td class="text-center"></td>
                                            <td class="form-control text-center"><p>°C</p></td>  
                                            <td class="text-center"><input type="text" class="form-control text-center"required  name="q42[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q42[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q42[]"></td>
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
                                            <td><input type="text" class="form-control text-center"required  name="q43[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q43[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Flow Rate</td>
                                            <td class="text-center"></td>
                                            <td class="text-center"><p>GPM</p></td>  
                                            <td class="text-center"><p>30-177</p></td>  
                                            <td><input type="text" class="form-control text-center"required  name="q44[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q44[]"></td>
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
