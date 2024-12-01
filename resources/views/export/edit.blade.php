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
                    <form action="{{ route('ac-split.update',$id) }}" id="myForm" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                              <table class="table table-bordered" id="">
        <tr>
            <th>Tanggal</th>
            <th>Engineer List</th>
        </tr>
        <tr>
            <td><input type="date" name="tanggal_survey" value="{{$acs->tanggal_survey}}" required class="form-control">      
<br>
                 <label for="">Jadwal</label>
                <select name="tanggal_schedule" id="" required class="form-select" style="color: black">
                    <option value="{{$acs->tanggal_schedule}}">{{$acs->tanggal_schedule}}</option>
                </select></td>
          <td><textarea name="enginerlist" id="" cols="60" rows="10">{{$acs->enginerlist}}</textarea></td>
        </tr>
        <tr>
            <th>Start Time</th>
            <th>Stop Time</th>
        </tr>
        <tr>
<td><input type="time" class="form-control" name="start" value="{{$acs->start}}" required></td>
            <td><input type="time" name="end" class="form-control" value="{{$acs->stop}}" id=""></td>
        </tr>
            
</table>
                        <div class="border-bottom title-part-padding">
                            <h4 class="card-title mb-0 text-center" style="background-color: black;color:white">Task List AC Split</h4>
                        </div>
                        <div class="card-body">

                            @csrf

                            <table class="table table-bordered" id="personelTeamTable">


                                <thead>
                                    <tr>

                                        <th>No</th>
                                        <th>Item Checked</th>
                                        <th>Standar</th>
                                        <th>Actual</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <input type="hidden" required name="id" value="{{ $id }}">
                                    <tr>
                                        <td class="text-center"></td>
                                        <td class="text-center">
                                            <h3 class="font-weight-bold">INDOOR UNIT</h3>
                                        </td>
                                        <td class="text-center"></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center"></td>
                                        <td class="text-center">INTENSIVE SAFETY BRIEFING TEAM
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Cek cover unit, pastikan bersih, skrup masih lengkap dan tidak ada kerusakan pada cover unit
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><select onchange="setColor(this);" name="q1[]" class="form-select" id="">
                                                <option value="{{$acs->q1}}">{{$acs->q1}}</option>
                                                <option value="?">?</option>
                                                <option value="Ok">Ok</option>
                                                <option value="Not Ok">Not Ok</option>
                                            </select></td>
                                    </tr>
<script>
    function setColor(dropdown){
    dropdown.style.color = "black";
};
</script>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">Cek kondisi filter, pastikan tidak kotor dan tidak rusak (cleaning jika kotor)</td>
                                        <td class="text-center">OK</td>
                                        <td><select onchange="setColor(this);" name="q2[]" class="form-select" id="">
                                                <option value="{{$acs->q2}}">{{$acs->q2}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="Not Ok">Not Ok</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-center">Cek kondisi fin evap, pastikan tidak kotor dan tidak rusak (cleaning jika kotor)
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><select onchange="setColor(this);" name="q3[]" class="form-select" id="">
                                                <option value="{{$acs->q3}}">{{$acs->q3}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="Not Ok">Not Ok</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="text-center">Cek kondisi blower fan, pastikan tidak kotor dan tidak rusak (cleaning jika kotor)
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><select onchange="setColor(this);" name="q4[]" class="form-select" id="">
                                                <option value="{{$acs->q4}}">{{$acs->q4}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="Not Ok">Not Ok</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">5</td>
                                        <td class="text-center">Cek kondisi drain sistem, bersihkan lendir yang menempel dan pastikan tidak tersumbat
                                        </td>
                                        <td class="text-center">Lancar</td>
                                        <td><select onchange="setColor(this);" name="q5[]" class="form-select" id="">
                                                <option value="{{$acs->q5}}">{{$acs->q5}}</option>

                                                <option value="Lancar">Lancar</option>
                                                <option value="Tidak Lancar">Tidak Lancar</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">6</td>
                                        <td class="text-center">Cek putaran blower, pastikan aliran udara pada evaporator lancar
                                        </td>
                                        <td class="text-center">Lancar</td>
                                        <td><select onchange="setColor(this);" name="q6[]" class="form-select" id="">
                                                <option value="{{$acs->q6}}">{{$acs->q6}}</option>

                                                <option value="Lancar">Lancar</option>
                                                <option value="Tidak Lancar">Tidak Lancar</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">7</td>
                                        <td class="text-center">Cek Insulasi pipa, pastikan semua pipa terinsulasi, tidak ada yang rusak atau kondensasi
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><select onchange="setColor(this);" name="q7[]" class="form-select" id="">
                                                <option value="{{$acs->q7}}">{{$acs->q7}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="Not Ok">Not Ok</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">8</td>
                                        <td class="text-center">Cek kebocoran refrigerant, pastikan tidak ada oli di area indoor, bak drain dan sambungan pipa
                                        </td>
                                        <td class="text-center">Tidak Bocor</td>
                                        <td><select onchange="setColor(this);" name="q8[]" class="form-select" id="">
                                                <option value="{{$acs->q8}}">{{$acs->q8}}</option>

                                                <option value="Tidak Bocor">Tidak Bocor</option>
                                                <option value="Bocor">Bocor</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">9</td>
                                        <td class="text-center">Cek modul indoor, pastikan koneksi kabelnya dan pastikan tidak ada kerusakan pada modul
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><select onchange="setColor(this);" name="q9[]" class="form-select" id="">
                                                <option value="{{$acs->q9}}">{{$acs->q9}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="Not Ok">Not Ok</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">10</td>
                                        <td class="text-center">Kencangkan semua koneksi kabel pada terminal indoor unit
                                        </td>
                                        <td class="text-center">Kencang</td>
                                        <td><select onchange="setColor(this);" name="q10[]" class="form-select" id="">
                                                <option value="{{$acs->q10}}">{{$acs->q10}}</option>

                                                <option value="Kencang">Kencang</option>
                                                <option value="Tidak Kencang">Tidak Kencang</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">11</td>
                                        <td class="text-center">Test running, pastikan tidak ada suara atau vibrasi yang abnormal
                                        </td>
                                        <td class="text-center">OK</td>
                                       <td>
                                        <style>
    /* Warna merah untuk opsi pertama saat belum dipilih */
    #q11-select option[value="?"] {
        color: red;
    }
</style>

    <select onchange="setColor(this);" name="q11[]" class="form-select" id="q11-select">
        <option value="?" class="text-danger">?</option>
                                                <option value="{{$acs->q11}}">{{$acs->q11}}</option>

        <option value="Ok">Ok</option>
        <option value="Not Ok">Not Ok</option>
    </select>
</td>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Tambahkan kelas 'text-danger' ke elemen <select> jika tanda tanya dipilih
        $('#q11-select').change(function() {
            if ($(this).val() === "?") {
                $(this).addClass('text-danger');
            } else {
                $(this).removeClass('text-danger');
            }
        });
    });
</script>

                                    </tr>
                                    <tr>
                                        <td class="text-center">12</td>
                                        <td class="text-center">Cek setpoint pada remote, pastikan pada mode cool semuai temperature yang diinginkan
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><select onchange="setColor(this);" name="q12[]" class="form-select" id="">
                                                <option value="{{$acs->q12}}">{{$acs->q12}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="Not Ok">Not Ok</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">13</td>
                                        <td class="text-center">Cek timer pada remote, pastikan sesuai dengan kebutuhan
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><select onchange="setColor(this);" name="q13[]" class="form-select" id="">
                                                <option value="{{$acs->q13}}">{{$acs->q13}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="Not Ok">Not Ok</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">14</td>
                                        <td class="text-center">Check baterai pada remote, lakukan penggantian jika diperlukan
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><select onchange="setColor(this);" name="q14[]" class="form-select" id="">
                                                <option value="{{$acs->q14}}">{{$acs->q14}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="Not Ok">Not Ok</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"></td>
                                        <td class="text-center">
                                            <h3 class="font-weight-bold">OUTDOOR UNIT</h3>
                                        </td>
                                        <td class="text-center"></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">15</td>
                                        <td class="text-center">Cek cover unit, pastikan bersih, skrup masih lengkap dan tidak ada kerusakan pada cover unit
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><select onchange="setColor(this);" name="q15[]" class="form-select" id="">
                                                <option value="{{$acs->q15}}">{{$acs->q15}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="Not Ok">Not Ok</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">16</td>
                                        <td class="text-center">Cek kondisi fin kondensor, pastikan tidak kotor dan tidak rusak (cleaning jika kotor)
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><select onchange="setColor(this);" name="q16[]" class="form-select" id="">
                                                <option value="{{$acs->q16}}">{{$acs->q16}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="Not Ok">Not Ok</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">17</td>
                                        <td class="text-center">Cek kondisi fan outdoor, pastikan terpasang dengan baik, tidak kotor & tidak rusak (cleaning jika kotor)
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><select onchange="setColor(this);" name="q17[]" class="form-select" id="">
                                                <option value="{{$acs->q17}}">{{$acs->q17}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="Not Ok">Not Ok</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">18</td>
                                        <td class="text-center">Cek putaran fan outdoor, pastikan aliran udara pada kondensor lancar
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><select onchange="setColor(this);" name="q18[]" class="form-select" id="">
                                                <option value="{{$acs->q18}}">{{$acs->q18}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="Not Ok">Not Ok</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">19</td>
                                        <td class="text-center">Cek Insulasi pipa, pastikan semua pipa terinsulasi, tidak ada yang rusak atau kondensasi
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><select onchange="setColor(this);" name="q19[]" class="form-select" id="">
                                                <option value="{{$acs->q19}}">{{$acs->q19}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="Not Ok">Not Ok</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">20</td>
                                        <td class="text-center">Cek kebocoran refrigerant, pastikan tidak ada oli di area kondensor dan sambungan pipa
                                        </td>
                                        <td class="text-center">Tidak Bocor</td>
                                        <td><select onchange="setColor(this);" name="q20[]" class="form-select" id="">
                                                <option value="{{$acs->q20}}">{{$acs->q20}}</option>

                                                <option value="Tidak Bocor">Tidak Bocor</option>
                                                <option value="Bocor">Bocor</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">21</td>
                                        <td class="text-center">Kencangkan semua koneksi kabel pada terminal outdoor unit
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><select onchange="setColor(this);" name="q21[]" class="form-select" id="">
                                                <option value="{{$acs->q21}}">{{$acs->q21}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="Not Ok">Not Ok</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">22</td>
                                        <td class="text-center">Cek Kapasitor kompressor
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><select onchange="setColor(this);" name="q22[]" class="form-select" id="">
                                                <option value="{{$acs->q22}}">{{$acs->q22}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="Not Ok">Not Ok</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">23</td>
                                        <td class="text-center">Cek Kapasitor motor fan kondensor
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><select onchange="setColor(this);" name="q23[]" class="form-select" id="">
                                                <option value="{{$acs->q23}}">{{$acs->q23}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="Not Ok">Not Ok</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">24</td>
                                        <td class="text-center">Test running, pastikan tidak ada suara atau vibrasi yang abnormal
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><select onchange="setColor(this);" name="q24[]" class="form-select" id="">
                                                <option value="{{$acs->q24}}">{{$acs->q24}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="Not Ok">Not Ok</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">25</td>
                                        <td class="text-center">Cek ampere kompressor dan sesuaikan dengan kapasitas di nameplate unit
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><select onchange="setColor(this);" name="q25[]" class="form-select" id="">
                                                <option value="{{$acs->q25}}">{{$acs->q25}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="Not Ok">Not Ok</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">26</td>
                                        <td class="text-center">Cek ampere motor fan kondensor dan sesuaikan dengan kapasitas di nameplate unit
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><select onchange="setColor(this);" name="q26[]" class="form-select" id="">
                                                <option value="{{$acs->q26}}">{{$acs->q26}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="Not Ok">Not Ok</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">27</td>
                                        <td class="text-center">Cek tekanan kompressor disesuaikan dengan tipe referigerant
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><select onchange="setColor(this);" name="q27[]" class="form-select" id="">
                                                <option value="{{$acs->q27}}">{{$acs->q27}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="Not Ok">Not Ok</option>
                                            </select></td>
                                    </tr>

                                </tbody>
                            </table>

                            
                            <table class="table table-bordered" id="personelTeamTable">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="background-color: black;color:white">Sub Equipment</th>
                                        <th class="text-center" style="background-color: black;color:white">Indoor Unit</th>
                                        <th class="text-center" style="background-color: black;color:white"></th>
                                        <th class="text-center" style="background-color: black;color:white"></th>
                                        <th class="text-center" style="background-color: black;color:white">Outdoor Unit</th>
                                        <th class="text-center" style="background-color: black;color:white"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="tg-0lax">Parameter</td>
                                        <td class="tg-0lax">Temp (C)</td>
                                        <td class="tg-0lax">Suction Pressure (Psi)</td>
                                        <td class="tg-0lax">Discharge Pressure (Psi)</td>
                                        <td class="tg-0lax">Amp.Compressor(A)</td>
                                        <td class="tg-0lax">Voltage (V)</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="text-center">Standar Condition</td>
                                        @foreach(explode(',', $acs->q28) as $value)
                                        <td><input type="text" class="form-control text-center" required name="q28[]" value="{{ $value }}"></td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td class="text-center">Before</td>
                                        @foreach(explode(',', $acs->q29) as $value)
                                        <td><input type="text" class="form-control text-center" required name="q29[]" value="{{ $value }}"></td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td class="text-center">After</td>
                                        @foreach(explode(',', $acs->q30) as $value)
                                        <td><input type="text" class="form-control text-center" required name="q30[]" value="{{ $value }}"></td>
                                        @endforeach
                                    </tr>
                                </tbody>

                            </table>
                            <table class="table table-bordered" id="GambarTable">
        <tr>
            <th>Temuan</th>
            <th>Rekomendasi</th>
        </tr>
        <tr>
            <td><textarea name="temuan" id="" cols="60" rows="10">{{$acs->temuan}}</textarea></td>
            <td><textarea name="rekomendasi" id="" cols="60" rows="10">{{$acs->rekomendasi}}</textarea></td>
        </tr>
        <tr>

            <th>Job Complete</th>
        </tr>
               <tr>
            <td colspan="2"><select onchange="setColor(this);" name="status" id="" class="form-select">
                    <option value="{{$acs->status}}">{{$acs->status}}</option>

                                                <option value="?">?</option>
                    <option value="Completed">Completed</option>
                    <option value="On Progres">On Progres</option>
                </select></td>
        </tr>
            
</table>
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
                                        <td><input type="file" class="form-control" name="gambar[]" ></td>
                                        <td><input type="text" class="form-control" name="info[]" ></td>
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
                                        <td><input type="file" class="form-control" name="gambar2[]" ></td>
                                        <td><input type="text" class="form-control" name="info2[]" ></td>
                                        <td><select name="keterangangambar2[]" id="" class="form-select">
                                                <option value="Before">Before</option>
                                                <option value="After">After</option>
                                            </select></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary" id="addGambar2">Add Gambar</button>
                            <br>
                            <script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>

                            <script>
                                $(document).ready(function() {
                                    var personelCounter = 1;
                                    var pekerjaanCounter = 1;

                                    // Add a new row for Nama Personel Team
                                    $("#addGambar2").click(function() {
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

                            <input type="hidden" name="id_equipment" value="{{$id}}">
                            <button class="btn btn-info px-4 mt-3" type="submit">Submit form</button>
                    </form>
                    <br><br>
                    <h5 class="text-center" style="background-color: black;color:white">Foto Equipment Sebelumnya</h5>
                    <table class="table table-bordered" id="personelTeamTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Info</th>
                                <th>Keterangan</th>
                                <th>Option</th>
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
                                <td>
                                    <form action="{{ route('gambar.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger mx-1 btn-block" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <h5 class="text-center" style="background-color: black;color:white">Foto Parameter Sebelumnya</h5>
                    <table class="table table-bordered" id="personelTeamTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Info</th>
                                <th>Keterangan</th>
                                <th>Opsi</th>
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
                                <td>
                                    <form action="{{ route('gambar2.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger mx-1 btn-block" type="submit">Delete</button>
                                    </form>
                                </td>
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
<!--  Form Inputs Grid End -->
<!-- --------------------------------------------------- -->
</div>
@endsection