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
                            <h4 class="card-title mb-0 text-center">Task List Pompa</h4>
                        </div>
                            <form action="{{ route('pompa.store') }}" method="POST">
                                @csrf
                                <table class="table table-bordered" id="personelTeamTable">
                                    <thead>
                                        <h5 class="text-center" style="background-color: black;color:white">Spesifikasi Unit</h5>

                                        <tr>
                                            <th class="text-center">Unit 1</th>
                                            <th class="text-center">Unit 2</th>
                                            <th class="text-center">Unit 3</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <input type="hidden"required  name="id" value="{{ $id }}">
                                            <tr>
                                                <td> <p>Lokasi :</p><input type="text" class="form-control text-center"required  name="q1[]" value=""></td>
                                                <td> <p>Lokasi :</p><input type="text" class="form-control text-center"required  name="q1[]" value=""></td>
                                                <td> <p>Lokasi :</p><input type="text" class="form-control text-center"required  name="q1[]" value=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td> <p>Code Unit :</p><input type="text" class="form-control text-center"required  name="q2[]" value=""></td>
                                                <td> <p>Code Unit :</p><input type="text" class="form-control text-center"required  name="q2[]" value=""></td>
                                                <td> <p>Code Unit :</p><input type="text" class="form-control text-center"required  name="q2[]" value=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td><p>No Unit :</p><input type="text" class="form-control text-center"required  name="q3[]" value=""></td>
                                                <td><p>No Unit :</p><input type="text" class="form-control text-center"required  name="q3[]" value=""></td>
                                                <td><p>No Unit :</p><input type="text" class="form-control text-center"required  name="q3[]" value=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td><p>Model : </p><input type="text" class="form-control text-center"required  name="q4[]" value=""></td>
                                                <td><p>Model : </p><input type="text" class="form-control text-center"required  name="q4[]" value=""></td>
                                                <td><p>Model : </p><input type="text" class="form-control text-center"required  name="q4[]" value=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td><p>No Seri :</p><input type="text" class="form-control text-center"required  name="q5[]" value=""></td>
                                                <td><p>No Seri :</p><input type="text" class="form-control text-center"required  name="q5[]" value=""></td>
                                                <td><p>No Seri :</p><input type="text" class="form-control text-center"required  name="q5[]" value=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td><p>Capacity :</p><input type="text" class="form-control text-center"required  name="q6[]" value=""></td>
                                                <td><p>Capacity :</p><input type="text" class="form-control text-center"required  name="q6[]" value=""></td>
                                                <td><p>Capacity :</p><input type="text" class="form-control text-center"required  name="q6[]" value=""></td>
                                            </tr>
                                        
                                        </tbody>
                                </table>
                                <table class="table table-bordered" id="personelTeamTable">
                                    <thead>
                                        <h5 class="text-center" style="background-color: black;color:white">Task List</h5>

                                        <tr>
                                            <th>No</th>
                                            <th class="text-center">Item Checked</th>
                                            <th>Freq</th>
                                            <th>Unit 1</th>
                                            <th></th>
                                            <th>Unit 2</th>
                                            <th></th>
                                            <th>Unit 3</th>
                                            <th></th>
                                        </tr>

                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Standar</th>
                                            <th>Actual</th>
                                            <th>Standar</th>
                                            <th>Actual</th>
                                            <th>Standar</th>
                                            <th>Actual</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td>1</td>
                                            <td>Replace rubber coupling, mechanical seal, bearing motor & pumps,lacos filter</td>
                                            <td><input type="text" class="form-control text-center"required  name="q7[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q7[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q7[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q7[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q7[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q7[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q7[]"></td>
                                          </tr>

                                          <tr>
                                            <td>2</td>
                                            <td>Resistance test & megger motor</td>
                                            <td><input type="text" class="form-control text-center"required  name="q8[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q8[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q8[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q8[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q8[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q8[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q8[]"></td>
                                          </tr>

                                          <tr>
                                            <td>3</td>
                                            <td>Verify all pressure & temperature gauge replace if necessary</td>
                                            <td><input type="text" class="form-control text-center"required  name="q9[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q9[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q9[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q9[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q9[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q9[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q9[]"></td>
                                           
                                          </tr>

                                          <tr>
                                            <td>4</td>
                                            <td>Cleaning heat exchanger if available</td>
                                            <td><input type="text" class="form-control text-center"required  name="q10[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q10[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q10[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q10[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q10[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q10[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q10[]"></td>
                                           
                                          </tr>

                                          <tr>
                                            <td>5</td>
                                            <td>Cleaning Filter, Strainer, check valve</td>
                                            <td><input type="text" class="form-control text-center"required  name="q11[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q11[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q11[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q11[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q11[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q11[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q11[]"></td>
                                           
                                          </tr>


                                          <tr>
                                            <td>6</td>
                                            <td>Cleaning & tightening pumps panels</td>
                                            <td><input type="text" class="form-control text-center"required  name="q12[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q12[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q12[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q12[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q12[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q12[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q12[]"></td>
                                         
                                          </tr>

                                        </tbody>
                                    </table>
                                    <table class="table table-bordered" id="personelTeamTable">
                                        <tbody>
                                            <h5 class="text-center" style="background-color: black;color:white">Service Checked</h5>
                                            <tr>
                                                <td>Unit</td>
                                                <th>Condition</th>
                                                <th>P In</th>
                                                <th>P Out</th>
                                                <th>J.Coupl</th>
                                                <th>MecSeal</th>
                                                <th>Bearing</th>
                                                <th></th>
                                                <th>Voltage</th>
                                                <th></th>
                                                <th></th>
                                                <th>Ampere</th>
                                                <th></th>
                                            </tr>
    
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>R</th>
                                                <th>S</th>
                                                <th>T</th>
                                                <th>R</th>
                                                <th>S</th>
                                                <th>T</th>
                                            </tr>
                                        </thead>
    
                                        <tbody>
                                              <tr>
                                                <td>1</td>
                                                <td>
                                                    <p>Before</p>
                                                    <p>Standard</p>
                                                    <p>After</p>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q13[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q13[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q13[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q14[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q14[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q14[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q15[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q15[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q15[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q16[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q16[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q16[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q17[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q17[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q17[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q18[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q18[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q18[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q19[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q19[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q19[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q20[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q20[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q20[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q21[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q21[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q21[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q22[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q22[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q22[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q23[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q23[]">
                                                    <input type="text" class="form-control text-center" style="width: 100px"required  name="q23[]">
                                                </td>
                                            
                                              </tr>
    
                                              <tr>
                                                <td>2</td>
                                                <td>
                                                    <p>Before</p>
                                                    <p>Standard</p>
                                                    <p>After</p>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q24[]">
                                                    <input type="text" class="form-control text-center"required  name="q24[]">
                                                    <input type="text" class="form-control text-center"required  name="q24[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q25[]">
                                                    <input type="text" class="form-control text-center"required  name="q25[]">
                                                    <input type="text" class="form-control text-center"required  name="q25[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q26[]">
                                                    <input type="text" class="form-control text-center"required  name="q26[]">
                                                    <input type="text" class="form-control text-center"required  name="q26[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q27[]">
                                                    <input type="text" class="form-control text-center"required  name="q27[]">
                                                    <input type="text" class="form-control text-center"required  name="q27[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q28[]">
                                                    <input type="text" class="form-control text-center"required  name="q28[]">
                                                    <input type="text" class="form-control text-center"required  name="q28[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q29[]">
                                                    <input type="text" class="form-control text-center"required  name="q29[]">
                                                    <input type="text" class="form-control text-center"required  name="q29[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q30[]">
                                                    <input type="text" class="form-control text-center"required  name="q30[]">
                                                    <input type="text" class="form-control text-center"required  name="q30[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                    <input type="text" class="form-control text-center"required  name="q31[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                    <input type="text" class="form-control text-center"required  name="q32[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                    <input type="text" class="form-control text-center"required  name="q33[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q34[]">
                                                    <input type="text" class="form-control text-center"required  name="q34[]">
                                                    <input type="text" class="form-control text-center"required  name="q34[]">
                                                </td>
                                            
                                              </tr>
    
                                              <tr>
                                                <td>3</td>
                                                <td>
                                                    <p>Before</p>
                                                    <p>Standard</p>
                                                    <p>After</p>
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
                                                <td>
                                                    <input type="text" class="form-control text-center"required  name="q45[]">
                                                    <input type="text" class="form-control text-center"required  name="q45[]">
                                                    <input type="text" class="form-control text-center"required  name="q45[]">
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
