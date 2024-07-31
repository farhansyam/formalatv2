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
                            <h4 class="card-title mb-0 text-center">Task List Cooling Unit & AC Panel</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('cu.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                 <table class="table table-bordered" id="">
        <tr>
            <th>Tanggal</th>
            <th>Engineer List</th>
        </tr>
        <tr>
            <td><input type="date" name="tanggal" required class="form-control"></td>
            <td><textarea name="enginer_list" id="" cols="60" rows="10"></textarea></td>
        </tr>
        <tr>
            <th>Start Time</th>
            <th>Stop Time</th>
        </tr>
        <tr>
<td><input type="time" class="form-control" name="start" required></td>
            <td><input type="time" name="end" class="form-control" id=""></td>
        </tr>
            
</table>
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
                                             
                                        <div class="border-bottom title-part-padding text-bold">
                                            <h5 class="card-title mb-0 text-center">AC PANEL</h5>
                                        </div>

                                    <input type="hidden"required  name="id" value="{{ $id }}">
                                            <tr>
                                      
                                                <td>Cleaning Condensor</td>
                                                <td><input type="text" class="form-control text-center"required  name="q1[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q1[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q1[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Evaporator</td>
                                                <td><input type="text" class="form-control text-center"required  name="q2[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q2[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q2[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Fan Condensor</td>
                                                <td><input type="text" class="form-control text-center"required  name="q3[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q3[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q3[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Fan Evaporator	</td>
                                                <td><input type="text" class="form-control text-center"required  name="q4[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q4[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q4[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Body Compressor</td>
                                                <td><input type="text" class="form-control text-center"required  name="q5[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q5[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q5[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Bak Drain</td>
                                                <td><input type="text" class="form-control text-center"required  name="q6[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q6[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q6[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Flushing Selang Drain</td>
                                                <td><input type="text" class="form-control text-center"required  name="q7[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q7[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q7[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Ampere Kompressor</td>
                                                <td><input type="text" class="form-control text-center"required  name="q8[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q8[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q8[]"></td>
                                            </tr>

                                            <tr> 
                                                <td>Check Pressure Freon</td>
                                                <td><input type="text" class="form-control text-center"required  name="q9[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q9[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q9[]"></td>
                                            </tr>
                                        </tbody>
                                </table>
                                <table class="table table-bordered" id="personelTeamTable">
                                            <tbody>
                                            <div class="border-bottom title-part-padding">
                                                <h5 class="card-title mb-0 text-center">Cooling Unit</h5>
                                            </div>
                                            <tr>
                                             
                                                <td>Cleaning Condensor</td>
                                                <td><input type="text" class="form-control text-center"required  name="q10[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q10[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q10[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cleaning area dalam Cooling</td>
                                                <td><input type="text" class="form-control text-center"required  name="q11[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q11[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q11[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cleaning Filter</td>
                                                <td><input type="text" class="form-control text-center"required  name="q12[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q12[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q12[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cek Water Level</td>
                                                <td><input type="text" class="form-control text-center"required  name="q13[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q13[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q13[]"></td>
                                            </tr>

                                            <tr>
                                                <td>Cek Kebocoran</td>
                                                <td><input type="text" class="form-control text-center"required  name="q14[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q14[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q14[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cek Amper kompressor</td>
                                                <td><input type="text" class="form-control text-center"required  name="q15[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q15[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q15[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cek Amper Fan</td>
                                                <td><input type="text" class="form-control text-center"required  name="q16[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q16[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q16[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cek Pressure Freon</td>
                                                <td><input type="text" class="form-control text-center"required  name="q17[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q17[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q17[]"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered" id="personelTeamTable">
                                        <tbody>
                                            <div class="border-bottom title-part-padding">
                                                <h5 class="card-title mb-0 text-center">Cooling Granitur</h5>
                                            </div>
                                            <tr>
                                             
                                                <td> Cleaning Body Unit </td>
                                                <td><input type="text" class="form-control text-center"required  name="q18[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q18[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q18[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cleaning Fan</td>
                                                <td><input type="text" class="form-control text-center"required  name="q19[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q19[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q19[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td> Cek Water Level </td>
                                                <td><input type="text" class="form-control text-center"required  name="q20[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q20[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q20[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cek sirkulasi air cooling</td>
                                                <td><input type="text" class="form-control text-center"required  name="q21[]"></td>
                                                <td><input type="text" class="form-control text-center"required  name="q21[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center"required  name="q21[]"></td>
                                            </tr>


                                    </tbody>
                                </table>

                               

                                <table class="table table-bordered" id="personelTeamTable">
                                    <thead>
                                        <tr>
                                        
                                            <th>Ac Panel</th>
                                            <th>Cooling Unit</th>
                                            <th>Cooling Granitur</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="radio" class= "text-center" required  name="q22[]" value="Ac Panel"></td>
                                            <td><input type="radio" class= "text-center" required  name="q22[]" value="Cooling Unit"></td>
                                            <td><input type="radio" class= "text-center"required  name="q22[]" value="Cooling Granitur"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-bordered" id="personelTeamTable">
                                    <thead>
                                        <tr>
                                            <th>No Unit</th>
                                            <th>Merk</th>
                                            <th>Unit Model / Series</th>
                                            <th>Tahun Buat</th>
                                            <th>Tahun Install</th>
                                            <th>Capacity(PK)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Unit 1</td>
                                            <td><input type="text" class="form-control text-center"required  name="q23[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q23[]"></td>    
                                            <td><input type="text" class="form-control text-center"required  name="q23[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q23[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q23[]"></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Unit 2</td>
                                            <td><input type="text" class="form-control text-center"required  name="q24[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q24[]"></td>    
                                            <td><input type="text" class="form-control text-center"required  name="q24[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q24[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q24[]"></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Unit 3</td>
                                            <td><input type="text" class="form-control text-center"required  name="q25[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q25[]"></td>    
                                            <td><input type="text" class="form-control text-center"required  name="q25[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q25[]"></td>
                                            <td><input type="text" class="form-control text-center"required  name="q25[]"></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <h5 class="text-center" style="background-color: black;color:white">Service Check</h5>

                                <table class="table table-bordered" id="personelTeamTable">
                                    
                                    <thead>
                                        <tr>
                                            <th>No Unit</th>
                                            <th>Cond.</th>
                                            <th>Suction Pressure (Psi)</th>
                                            <th>Discharge Pressure (Psi)</th>
                                            <th></th>
                                            <th>Voltage</th>
                                            <th></th>
                                            <th></th>
                                            <th>Ampere</th>
                                            <th></th>
                                            <th>Remark</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax">R</td>
                                            <td class="tg-0lax">S</td>
                                            <td class="tg-0lax">T</td>
                                            <td class="tg-0lax">H</td>
                                            <td class="tg-0lax">S</td>
                                            <td class="tg-0lax">T</td>
                                            <td class="tg-0lax"></td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>Unit 1</td>
                                            <td>
                                               <p>Standard</p>
                                               <p>Before</p>
                                               <p>After</p>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                                <input type="text" class="form-control text-center"required  name="q26[]" style="width: 100px;">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Unit 2</td>
                                            <td>
                                                <p>Standard</p>
                                                <p>Before</p>
                                                <p>After</p>
                                             </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                                <input type="text" class="form-control text-center"required  name="q27[]">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Unit 3</td>
                                            <td>
                                                <p>Standard</p>
                                                <p>Before</p>
                                                <p>After</p>
                                             </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                                <input type="text" class="form-control text-center"required  name="q28[]">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
 <table class="table table-bordered" id="">
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
@include('formimage.formkosong')
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
