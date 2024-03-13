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
                            <form action="{{ route('evaporator-aircooler.store') }}" method="POST">
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
                                      
                                                <td>INTENSIVE SAFETY BRIEFING TEAM</td>
                                                <td><input type="text" class="form-control text-center"required  name="q1[]"></td>
                                               <td class="text-center"><p>OK</p></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q1[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Check Condition Filler</td>
                                                <td><input type="text" class="form-control text-center"required  name="q2[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q2[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q2[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Filler</td>
                                                <td><input type="text" class="form-control text-center"required  name="q3[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q3[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q3[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td> Replace Filler</td>
                                                <td><input type="text" class="form-control text-center"required  name="q4[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q4[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q4[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td> Check Basin Condition</td>
                                                <td><input type="text" class="form-control text-center"required  name="q5[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q5[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q5[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Backwash Water From basin</td>
                                                <td><input type="text" class="form-control text-center"required  name="q6[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q6[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q6[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Basin</td>
                                                <td><input type="text" class="form-control text-center"required  name="q7[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q7[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q7[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Water Pump</td>
                                                <td><input type="text" class="form-control text-center"required  name="q8[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q8[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q8[]"></td>
                                            </tr>

                                            <tr> 
                                                <td>Cleaning Filter Water Pump</td>
                                                <td><input type="text" class="form-control text-center"required  name="q9[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q9[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q9[]"></td>
                                            </tr>
    
                                            <tr>
                                             
                                                <td>Check Water Level Switch</td>
                                                <td><input type="text" class="form-control text-center"required  name="q10[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q10[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q10[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Floating Valve</td>
                                                <td><input type="text" class="form-control text-center"required  name="q11[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q11[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q11[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Water Quality</td>
                                                <td><input type="text" class="form-control text-center"required  name="q12[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q12[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q12[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Water Line Distribution</td>
                                                <td><input type="text" class="form-control text-center"required  name="q13[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q13[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q13[]"></td>
                                            </tr>

                                            <tr>
                                                <td>Check Support Bracket Fan</td>
                                                <td><input type="text" class="form-control text-center"required  name="q14[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q14[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q14[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Fan Blade Motor Supply</td>
                                                <td><input type="text" class="form-control text-center"required  name="q15[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q15[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q15[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cleaning Fan Motor</td>
                                                <td><input type="text" class="form-control text-center"required  name="q16[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q16[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q15[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td> Check Temperature Motor </td>
                                                <td><input type="text" class="form-control text-center"required  name="q17[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q17[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q17[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Insulation Motor</td>
                                                <td><input type="text" class="form-control text-center"required  name="q18[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q18[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q18[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Ampere</td>
                                                <td><input type="text" class="form-control text-center"required  name="q19[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q19[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q19[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Display HMI</td>
                                                <td><input type="text" class="form-control text-center"required  name="q20[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q20[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q20[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Output Air Temperature</td>
                                                <td><input type="text" class="form-control text-center"required  name="q21[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q21[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q21[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Output Air Flow</td>
                                                <td><input type="text" class="form-control text-center"required  name="q22[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q22[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q22[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Checklist History PM</td>
                                                <td><input type="text" class="form-control text-center"required  name="q23[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q23[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q23[]"></td>
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
                                                        <td><input type="text" class="form-control text-center"required  name="q24[]" value=""></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q24[]"></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q24[]" value=""></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q24[]"></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q24[]" value=""></td>
                                                    </tr>
            
                                                    <tr>
                                                        <td><p>Unit 2</p></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q25[]" value=""></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q25[]"></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q25[]" value=""></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q25[]"></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q25[]" value=""></td>
                                                    </tr>
            
                                                    <tr class="text-center">
                                                        <td><p>Unit 3</p></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q26[]" value=""></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q26[]"></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q26[]" value=""></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q26[]"></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q26[]" value=""></td>
                                                    </tr>
            
                                                    <tr class="text-center">
                                                        <td><p>Unit 4</p></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q27[]" value=""></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q27[]"></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q27[]" value=""></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q27[]"></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q27[]" value=""></td>
                                                    </tr>
            
                                                    <tr class="text-center">
                                                        <td><p>Unit 5</p></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q28[]" value=""></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q28[]"></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q28[]" value=""></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q28[]"></td>
                                                        <td><input type="text" class="form-control text-center"required  name="q28[]" value=""></td>
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
                                                                <td><input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                </td>
                                                                <td><input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                </td>
                                                                <td><input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
                                                                    <input type="text" class="form-control text-center" style="width: 100px;"required  name="q29[]">
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
                                                                    <input type="text" class="form-control text-center"required  name="q30[]">
                                                                    <input type="text" class="form-control text-center"required  name="q30[]">
                                                                    <input type="text" class="form-control text-center"required  name="q30[]">
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
                    
                                                            <tr class="text-center">
                                                                <td><p>Unit 3</p></td>
                                                                <td class="text-center">
                                                                    <p>Standard</p>
                                                                    <p>Before</p>
                                                                    <p>After</p>
                                                                 </td>
                                                                <td><input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                </td>
                                                                <td><input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                                    <input type="text" class="form-control text-center"required  name="q31[]">
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
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                                    <input type="text" class="form-control text-center"required  name="q32[]">
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
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                                </td>
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
