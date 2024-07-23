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
                    <form action="{{ route('ac-split.store') }}" id="myForm" method="POST">
                        <table class="table table-bordered" id="personelTeamTable">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th style="background-color: black;color:white"></th>
                                    <th style="background-color: black;color:white"></th>
                                    <th class="text-center" style="background-color: black;color:white">TYPE OF AIR CONDITIONER EQUIPMENT</th>
                                    <th style="background-color: black;color:white"></th>
                                    <th class="text-center" style="background-color: black;color:white">REFRIGERANT TYPE</th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center">Ac Split Wall</th>
                                    <th class="text-center">Ac Cassette</th>
                                    <th class="text-center">Ac Floor Standing</th>
                                    <th class="text-center">Ac Split Standing</th>
                                    <th class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @php
                                    $values = explode(',', $acs->q31);
                                    @endphp
                                    <td></td>
                                    <td class="text-center">
                                        <input disabled type="checkbox" class="text-center" name="q31[]" @if ($values[0] == "Ac Split Wall") checked

                                        @endif value="Ac Split Wall" onclick="uncheckAllExcept(this)">
                                    </td>
                                    <td class="text-center">
                                        <input disabled @if ($values[0] == "Ac Cassette") checked

                                        @endif type="checkbox" class="text-center" name="q31[]" value="Ac Cassette" onclick="uncheckAllExcept(this)">
                                    </td>
                                    <td class="text-center">
                                        <input disabled type="checkbox" @if ($values[0] == "Ac Floor Standing") checked

                                        @endif class="text-center" name="q31[]" value="Ac Floor Standing" onclick="uncheckAllExcept(this)">
                                    </td>
                                    <td class="text-center">
                                        <input disabled type="checkbox" @if ($values[0] == "Ac Split Standing") checked

                                        @endif class="text-center" name="q31[]" value="Ac Split Standing" onclick="uncheckAllExcept(this)">
                                    </td>

                                    <td class="text-center"><input disabled type="text" class="text-center" required name="q31[]" value="{{$values[0]}}"></td>
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


                                    <input disabled type="hidden" required name="id" value="{{ $id }}">
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
                                        <td><input disabled type="text" class="text-center" required name="q1[]" value="{{$acs->q1}}"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">Cek kondisi filter, pastikan tidak kotor dan tidak rusak (cleaning jika kotor)</td>
                                        <td class="text-center">OK</td>
                                        <td><input disabled type="text" class="text-center" required name="q2[]" value="{{$acs->q2}}"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-center">Cek kondisi fin evap, pastikan tidak kotor dan tidak rusak (cleaning jika kotor)
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><input disabled type="text" class="text-center" required name="q3[]" value="{{$acs->q3}}"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="text-center">Cek kondisi blower fan, pastikan tidak kotor dan tidak rusak (cleaning jika kotor)
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><input disabled type="text" class="text-center" required name="q4[]" value="{{$acs->q4}}"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">5</td>
                                        <td class="text-center">Cek kondisi drain sistem, bersihkan lendir yang menempel dan pastikan tidak tersumbat
                                        </td>
                                        <td class="text-center">Lancar</td>
                                        <td><input disabled type="text" class="text-center" required name="q5[]" value="{{$acs->q5}}"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">6</td>
                                        <td class="text-center">Cek putaran blower, pastikan aliran udara pada evaporator lancar
                                        </td>
                                        <td class="text-center">Lancar</td>
                                        <td><input disabled type="text" class="text-center" required name="q6[]" value="{{$acs->q6}}"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">7</td>
                                        <td class="text-center">Cek Insulasi pipa, pastikan semua pipa terinsulasi, tidak ada yang rusak atau kondensasi
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><input disabled type="text" class="text-center" required name="q7[]" value="{{$acs->q7}}"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">8</td>
                                        <td class="text-center">Cek kebocoran refrigerant, pastikan tidak ada oli di area indoor, bak drain dan sambungan pipa
                                        </td>
                                        <td class="text-center">Tidak Bocor</td>
                                        <td><input disabled type="text" class="text-center" required name="q8[]" value="{{$acs->q8}}"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">9</td>
                                        <td class="text-center">Cek modul indoor, pastikan koneksi kabelnya dan pastikan tidak ada kerusakan pada modul
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><input disabled type="text" class="text-center" required name="q9[]" value="{{$acs->q9}}"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">10</td>
                                        <td class="text-center">Kencangkan semua koneksi kabel pada terminal indoor unit
                                        </td>
                                        <td class="text-center">Kencang</td>
                                        <td><input disabled type="text" class="text-center" required name="q10[]" value="{{$acs->q10}}"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">11</td>
                                        <td class="text-center">Test running, pastikan tidak ada suara atau vibrasi yang abnormal
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><input disabled type="text" class="text-center" required name="q11[]" value="{{$acs->q11}}"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">12</td>
                                        <td class="text-center">Cek setpoint pada remote, pastikan pada mode cool semuai temperature yang diinginkan
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><input disabled type="text" class="text-center" required name="q12[]" value="{{$acs->q12}}"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">13</td>
                                        <td class="text-center">Cek timer pada remote, pastikan sesuai dengan kebutuhan
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><input disabled type="text" class="text-center" required name="q13[]" value="{{$acs->q13}}"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">14</td>
                                        <td class="text-center">Check baterai pada remote, lakukan penggantian jika diperlukan
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><input disabled type="text" class="text-center" required name="q14[]" value="{{$acs->q14}}"></td>
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
                                        <td><input disabled type="text" class="text-center" required name="q15[]" value="{{$acs->q15}}"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">16</td>
                                        <td class="text-center">Cek kondisi fin kondensor, pastikan tidak kotor dan tidak rusak (cleaning jika kotor)
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><input disabled type="text" class="text-center" required name="q16[]" value="{{$acs->q16}}"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">17</td>
                                        <td class="text-center">Cek kondisi fan outdoor, pastikan terpasang dengan baik, tidak kotor & tidak rusak (cleaning jika kotor)
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><input disabled type="text" class="text-center" required name="q17[]" value="{{$acs->q17}}"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">18</td>
                                        <td class="text-center">Cek putaran fan outdoor, pastikan aliran udara pada kondensor lancar
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><input disabled type="text" class="text-center" required name="q18[]" value="{{$acs->q18}}"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">19</td>
                                        <td class="text-center">Cek Insulasi pipa, pastikan semua pipa terinsulasi, tidak ada yang rusak atau kondensasi
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><input disabled type="text" class="text-center" required name="q19[]" value="{{$acs->q19}}"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">20</td>
                                        <td class="text-center">Cek kebocoran refrigerant, pastikan tidak ada oli di area kondensor dan sambungan pipa
                                        </td>
                                        <td class="text-center">Tidak Bocor</td>
                                        <td><input disabled type="text" class="text-center" required name="q20[]" value="{{$acs->q20}}"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">21</td>
                                        <td class="text-center">Kencangkan semua koneksi kabel pada terminal outdoor unit
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><input disabled type="text" class="text-center" required name="q21[]" value="{{$acs->q21}}"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">22</td>
                                        <td class="text-center">Cek Kapasitor kompressor
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><input disabled type="text" class="text-center" required name="q22[]" value="{{$acs->q22}}"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">23</td>
                                        <td class="text-center">Cek Kapasitor motor fan kondensor
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><input disabled type="text" class="text-center" required required name="q23[]" value="{{$acs->q23}}"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">24</td>
                                        <td class="text-center">Test running, pastikan tidak ada suara atau vibrasi yang abnormal
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><input disabled type="text" class="text-center" required name="q24[]" value="{{$acs->q24}}"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">25</td>
                                        <td class="text-center">Cek ampere kompressor dan sesuaikan dengan kapasitas di nameplate unit
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><input disabled type="text" class="text-center" required name="q25[]" value="{{$acs->q25}}"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">26</td>
                                        <td class="text-center">Cek ampere motor fan kondensor dan sesuaikan dengan kapasitas di nameplate unit
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><input disabled type="text" class="text-center" required name="q26[]" value="{{$acs->q26}}"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">27</td>
                                        <td class="text-center">Cek tekanan kompressor disesuaikan dengan tipe referigerant
                                        </td>
                                        <td class="text-center">OK</td>
                                        <td><input disabled type="text" class="text-center" required name="q27[]" value="{{$acs->q27}}"></td>
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
                                        <td><input disabled type="text" class="form-control text-center" required name="q28[]" value="{{ $value }}"></td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td class="text-center">Before</td>
                                        @foreach(explode(',', $acs->q29) as $value)
                                        <td><input disabled type="text" class="form-control text-center" required name="q28[]" value="{{ $value }}"></td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td class="text-center">After</td>
                                        @foreach(explode(',', $acs->q30) as $value)
                                        <td><input disabled type="text" class="form-control text-center" required name="q28[]" value="{{ $value }}"></td>
                                        @endforeach
                                    </tr>
                                </tbody>

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
                            <input disabled type="hidden" name="id_equipment" value="{{$id}}">
                    </form>

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