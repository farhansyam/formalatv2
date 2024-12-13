@extends('layouts.back2')
@section('content')
<!-- --------------------------------------------------- -->
<!-- Header End -->
<!-- --------------------------------------------------- -->
<style>
   table {
   border: 11px solid black;
   border-collapse: collapse;
   /* Optional: makes the border look cleaner */
   }
   table td,
   table th {
   border: 2px solid black;
   /* Ensures cells have the same border */
   padding: 8px;
   /* Optional: adds padding for readability */
   }
   /* with the :focus here, we would show grey when not using the element */
   .form-select {
   color: rgb(255, 0, 0);
   }
   /* with the :focus here, we show grey when using the element */
   select:focus {
   color: #9e9e9e;
   }
   option {
   color: black;
   }
   option:first-of-type {
   color: #9e9e9e;
   }
</style>
<div class="container-fluid">
<!-- --------------------------------------------------- -->
<!--  Form Input disableds Grid Start -->
<!-- --------------------------------------------------- -->
<section>
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="border-bottom title-part-padding">
               <h4 class="card-title mb-0 text-center">Floor Standing</h4>
            </div>
            <div class="card-body">
               <form action="{{ route('ac-split.store') }}" id="myForm" method="POST"
                  enctype="multipart/form-data">
                  <div class="row">
                    <div class="border-bottom title-part-padding">
                     <h4 class="card-title mb-0 text-center" style="background-color: black;color:white">Equipment Profile
                     </h4>
                  </div>
                    <div class="col-md-4 mb-3" style="display: flex; flex-direction: column; gap: 10px;">
                        <label for="">Customer</label>
                        <input disabled 
                            type="text" 
                            name="customer" 
                            class="form-control" 
                            id="" 
                            value="{{ $equipment->customer }}" 
                            readonly 
                            required
                        >
                        
                        <input disabled 
                            type="hidden" 
                            name="id_equipment" 
                            class="form-control" 
                            id="" 
                            value="{{ $equipment->id }}" 
                            readonly
                        >
                        
                        <label for="">Site</label>
                        <input disabled 
                            type="text" 
                            name="no_kontak" 
                            class="form-control" 
                            id="" 
                            value="{{ $equipment->area }}" 
                            readonly
                        >
                        
                        <label for="">Site - Room</label>
                        <input disabled 
                            type="text" 
                            name="alamat" 
                            class="form-control" 
                            id="" 
                            value="{{ $equipment->site . '-' . $equipment->room }}" 
                            readonly
                        >
                        
                        <label for="">ID SI-PM</label>
                        <input disabled 
                            type="text" 
                            name="id_combine" 
                            class="form-control" 
                            id="" 
                            value="{{ $equipment->id_combine }}" 
                            readonly
                        >
                         <label for="">Brand</label>
                        <input disabled readonly type="text" name="brand" class="form-control" id=""
                           value="{{ $equipment->brand }}" required="">
                    </div>

                    <div class="col-md-4 mb-3" style="display: flex; flex-direction: column; gap: 10px;">

                        <label for="">Model/Type</label>
                           <input disabled type="text" name="jenis_equipment" readonly class="form-control"
                        id=""
                        value='@if ($equipment->jenis == 1){{ 'AC Split' }}@elseif($equipment->jenis == 2){{ 'AHUP' }}@elseif($equipment->jenis == 3)@elseif($equipment->jenis == 4){{ 'PAC' }}@elseif($equipment->jenis == 5){{ 'Cold Storage' }}@elseif($equipment->jenis == 6)@elseif($equipment->jenis == 7){{ 'Mini Chiller' }}@elseif($equipment->jenis == 8){{ 'Evaporative Air Cooler' }}@elseif($equipment->jenis == 9){{ 'AHU' }}@elseif($equipment->jenis == 10){{ 'Cooling tower' }}@elseif($equipment->jenis == 11){{ 'Humidifier' }}@elseif($equipment->jenis == 12){{ 'Dehumidifier' }}@elseif($equipment->jenis == 13){{ 'FCU (Fan Cooling Unit)' }}@elseif($equipment->jenis == 14){{ 'Exhaust Fan' }}@elseif($equipment->jenis == 15){{ 'Pompa' }}@elseif($equipment->jenis == 16){{ 'Spot Cooling' }}@elseif($equipment->jenis == 17){{ 'Water Mist' }}@elseif($equipment->jenis == 18){{ 'Chiller Centrifugal' }}@elseif($equipment->jenis == 19){{ 'Floor Standing' }}@elseif($equipment->jenis == 20){{ 'Ac Cassette' }}@elseif($equipment->jenis == 21){{ 'Split Duct' }} @endif'
                        required="">
                        <label for="">Serial No.</label>
                        <input disabled 
                            type="text" 
                            name="serial" 
                            class="form-control" 
                            id="" 
                            value="{{ $equipment->serial_number }}" 
                            readonly
                        >
                        <label for="">Kapasitas</label>
                        <input disabled 
                            type="text" 
                            name="kapasitas" 
                            class="form-control" 
                            id="" 
                            value="{{ $equipment->kapasitas }}" 
                            readonly
                        >
                        <label for="">Running Hour</label>
                        <input disabled 
                            type="text" 
                            name="running_hour" 
                            class="form-control" 
                            id="" 
                            value="{{ $equipment->jamoperasi }}" 
                            readonly
                        >
                        @if (request()->has('jenis') && request()->jenis)
                        <label for="">Notes</label>
                        <input disabled type="text" class="form-control" value="Close Part Proposal"
                           disabled id="">
                        <input disabled type="hidden" name="ids" value="{{ request()->ids }}">
                        @endif
                     </div>
                    <div class="col-md-4 mb-3" style="display: flex; flex-direction: column; gap: 10px;">
                         <label for="">Name Plate : &nbsp;</label>
                        <input disabled readOnly="true" type="text" required name="name_plate"
                           value="{{ $equipment->nameplate }}" class="form-control">
                        <label for="">Tahun Pembuatan</label>
                        <input disabled readonly type="text" name="tahun_pembuatan" class="form-control"
                           id="" value="{{ $equipment->tahun_pembuatan }}" required="">
                        <label for="">Tahun Install</label>
                        <input disabled readonly type="text" id="datepicker" name="tahun_install"
                           class="form-control" id=""
                           value="{{ $equipment->tahun_installasi }}" required="">
                        <label for="">Equipment Notes</label>
                        <textarea disabled readonly name="other" id="" cols="10" rows="4">{{$equipment->other}}</textarea>
                     </div>
                  </div>
                  <div class="row">
                     <div class="border-bottom title-part-padding">
                     <h4 class="card-title mb-0 text-center" style="background-color: black;color:white">General Data
                     </h4>
                  </div>
                     <div class="row">
                        <!-- Tanggal -->
                        <div class="col-md-6 mb-3">
                            <label for="tanggal_survey">Tanggal</label>
                            <input disabled 
                                type="date" 
                                name="tanggal_survey" 
                                id="tanggal_survey" 
                                required 
                                value="{{$acs->tanggal_survey}}"
                                class="form-control"
                            >
                            <br>
                            <label for="tanggal_schedule">Jadwal</label>
                            <select disabled 
                                name="tanggal_schedule" 
                                id="tanggal_schedule" 
                                required 
                                disabled
                                class="form-select" 
                                style="color: black"
                            >
                                    <option value="{{ $acs->tanggal_schedule }}">{{ $acs->tanggal_schedule }}</option>
                            </select>
                        </div>
                        <!-- Engineer List -->
                        <div class="col-md-6 mb-3">
                            <label for="enginerlist">Engineer List</label>
                            <textarea disabled 
                                name="enginerlist" 
                                id="enginerlist" 
                                cols="30" 
                                rows="6" 
                                class="form-control"
                            >{{$acs->enginerlist}}</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Start Time -->
                        <div class="col-md-6 mb-3">
                            <label for="start_time">Start Time</label>
                            <input disabled 
                                type="time" 
                                name="start" 
                                id="start_time" 
                                required 
                                value="{{$acs->start}}"
                                class="form-control"
                            >
                        </div>
                        <!-- Stop Time -->
                        <div class="col-md-6 mb-3">
                            <label for="stop_time">Stop Time</label>
                            <input disabled 
                                type="time" 
                                name="stop" 
                                id="stop_time" 
                                value="{{$acs->stop}}"
                                class="form-control"
                            >
                        </div>
                    </div>

                  </div>
                  <div class="border-bottom title-part-padding">
                     <h4 class="card-title mb-0 text-center" style="background-color: black;color:white">Task
                        List AC Split
                     </h4>
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
                              <td class="text-center">Cek cover unit, pastikan bersih, skrup masih lengkap
                                 dan tidak ada kerusakan pada cover unit
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q1[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q1}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
                           </tr>
                           <script>
                              function setColor(dropdown) {
                                  dropdown.style.color = "black";
                              };
                           </script>
                           <tr>
                              <td class="text-center">2</td>
                              <td class="text-center">Cek kondisi filter, pastikan tidak kotor dan tidak
                                 rusak (cleaning jika kotor)
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q2[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q2}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">3</td>
                              <td class="text-center">Cek kondisi fin evap, pastikan tidak kotor dan tidak
                                 rusak (cleaning jika kotor)
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q3[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q3}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">4</td>
                              <td class="text-center">Cek kondisi blower fan, pastikan tidak kotor dan
                                 tidak rusak (cleaning jika kotor)
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q4[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q4}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">5</td>
                              <td class="text-center">Cek kondisi drain sistem, bersihkan lendir yang
                                 menempel dan pastikan tidak tersumbat
                              </td>
                              <td class="text-center">Lancar</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q5[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q5}}</option>
                                    <option value="Lancar">Lancar</option>
                                    <option value="Tidak Lancar">Tidak Lancar</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">6</td>
                              <td class="text-center">Cek putaran blower, pastikan aliran udara pada
                                 evaporator lancar
                              </td>
                              <td class="text-center">Lancar</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q6[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q6}}</option>
                                    <option value="Lancar">Lancar</option>
                                    <option value="Tidak Lancar">Tidak Lancar</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">7</td>
                              <td class="text-center">Cek Insulasi pipa, pastikan semua pipa terinsulasi,
                                 tidak ada yang rusak atau kondensasi
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q7[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q7}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">8</td>
                              <td class="text-center">Cek kebocoran refrigerant, pastikan tidak ada oli
                                 di area indoor, bak drain dan sambungan pipa
                              </td>
                              <td class="text-center">Tidak Bocor</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q8[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q8}}</option>
                                    <option value="Tidak Bocor">Tidak Bocor</option>
                                    <option value="Bocor">Bocor</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">9</td>
                              <td class="text-center">Cek modul indoor, pastikan koneksi kabelnya dan
                                 pastikan tidak ada kerusakan pada modul
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q9[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q9}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">10</td>
                              <td class="text-center">Kencangkan semua koneksi kabel pada terminal indoor
                                 unit
                              </td>
                              <td class="text-center">Kencang</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q10[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q10}}</option>
                                    <option value="Kencang">Kencang</option>
                                    <option value="Tidak Kencang">Tidak Kencang</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">11</td>
                              <td class="text-center">Test running, pastikan tidak ada suara atau vibrasi
                                 yang abnormal
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <style>
                                    /* Warna merah untuk opsi pertama saat belum dipilih */
                                    #q11-select option[value="?"] {
                                    color: red;
                                    }
                                 </style>
                                 <select disabled onchange="setColor(this);" name="q11[]" class="form-select"
                                    id="q11-select">
                                    <option value="?" class="text-danger">?</option>
                                    <option value="?">{{$acs->q11}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
                              <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                              <script>
                                 $(document).ready(function() {
                                     // Tambahkan kelas 'text-danger' ke elemen <select disabled> jika tanda tanya dipilih
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
                              <td class="text-center">Cek setpoint pada remote, pastikan pada mode cool
                                 semuai temperature yang diinginkan
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q12[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q12}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">13</td>
                              <td class="text-center">Cek timer pada remote, pastikan sesuai dengan
                                 kebutuhan
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q13[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q13}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">14</td>
                              <td class="text-center">Check baterai pada remote, lakukan penggantian jika
                                 diperlukan
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q14[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q14}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
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
                              <td class="text-center">Cek cover unit, pastikan bersih, skrup masih
                                 lengkap dan tidak ada kerusakan pada cover unit
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q15[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q15}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">16</td>
                              <td class="text-center">Cek kondisi fin kondensor, pastikan tidak kotor dan
                                 tidak rusak (cleaning jika kotor)
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q16[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q16}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">17</td>
                              <td class="text-center">Cek kondisi fan outdoor, pastikan terpasang dengan
                                 baik, tidak kotor & tidak rusak (cleaning jika kotor)
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q17[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q17}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">18</td>
                              <td class="text-center">Cek putaran fan outdoor, pastikan aliran udara pada
                                 kondensor lancar
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q18[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q18}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">19</td>
                              <td class="text-center">Cek Insulasi pipa, pastikan semua pipa terinsulasi,
                                 tidak ada yang rusak atau kondensasi
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q19[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q19}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">20</td>
                              <td class="text-center">Cek kebocoran refrigerant, pastikan tidak ada oli
                                 di area kondensor dan sambungan pipa
                              </td>
                              <td class="text-center">Tidak Bocor</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q20[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q20}}</option>
                                    <option value="Tidak Bocor">Tidak Bocor</option>
                                    <option value="Bocor">Bocor</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">21</td>
                              <td class="text-center">Kencangkan semua koneksi kabel pada terminal
                                 outdoor unit
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q21[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q21}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">22</td>
                              <td class="text-center">Cek Kapasitor kompressor
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q22[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q22}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">23</td>
                              <td class="text-center">Cek Kapasitor motor fan kondensor
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q23[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q23}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">24</td>
                              <td class="text-center">Test running, pastikan tidak ada suara atau vibrasi
                                 yang abnormal
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q24[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q24}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">25</td>
                              <td class="text-center">Cek ampere kompressor dan sesuaikan dengan
                                 kapasitas di nameplate unit
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q25[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q25}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">26</td>
                              <td class="text-center">Cek ampere motor fan kondensor dan sesuaikan dengan
                                 kapasitas di nameplate unit
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q26[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q26}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">27</td>
                              <td class="text-center">Cek tekanan kompressor disesuaikan dengan tipe
                                 referigerant
                              </td>
                              <td class="text-center">OK</td>
                              <td>
                                 <select disabled onchange="setColor(this);" name="q27[]" class="form-select"
                                    id="">
                                    <option value="?">{{$acs->q27}}</option>
                                    <option value="Ok">Ok</option>
                                    <option value="Not Ok">Not Ok</option>
                                 </select>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <table class="table table-bordered" id="personelTeamTable">
                        <thead>
                           <tr>
                            <th></th>
                              <th colspan="3" class="text-center" style="background-color: rgb(147, 147, 147);color:white;">
                                 PARAMETER (BEFORE PM)
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="" style="width: 5%;"></td>
                              <td class="tg-0lax">Temp (C)</td>
                              <td class="tg-0lax">(Psi)</td>
                              <td class="tg-0lax">Pressure (Psi)</td>
                           </tr>
                        </tbody>
                      <tbody>
   <tr>
      <td class="text-center">Foto</td>
      <td>
         @if($acs->fotoparameter_before1 != '0')
            <img src="{{ asset('gambar/'.$acs->fotoparameter_before1) }}" alt="" height="150">
         @else
            <input disabled type="file" class="form-control text-center" required name="fotoparameter_before1">
         @endif
      </td>
      <td>
         @if($acs->fotoparameter_before2 != '0')
            <img src="{{ asset('gambar/'.$acs->fotoparameter_before2) }}" alt="" height="150">
         @else
            <input disabled type="file" class="form-control text-center" required name="fotoparameter_before2">
         @endif
      </td>
      <td>
         @if($acs->fotoparameter_before3 != '0')
            <img src="{{ asset('gambar/'.$acs->fotoparameter_before3) }}" alt="" height="150">
         @else
            <input disabled type="file" class="form-control text-center" required name="fotoparameter_before3">
         @endif
      </td>
   </tr>
   <tr>
      <td class="text-center">Nilai</td>
      <td><input disabled type="text" class="form-control text-center" required name="parameter_before1" value="{{$acs->parameter_before1}}"></td>
      <td><input disabled type="text" class="form-control text-center" required name="parameter_before2" value="{{$acs->parameter_before2}}"></td>
      <td><input disabled type="text" class="form-control text-center" required name="parameter_before3" value="{{$acs->parameter_before3}}"></td>
   </tr>
</tbody>

                     </table>
<table class="table table-bordered" id="personelTeamTable">
   <thead>
      <tr>
         <th></th>
         <th colspan="3" class="text-center" style="background-color: rgb(147, 147, 147);color:white;">
            PARAMETER (AFTER PM)
         </th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td class="tg-0lax"style="width: 5%;"></td>
         <td class="tg-0lax">Temp (C)</td>
         <td class="tg-0lax">(Psi)</td>
         <td class="tg-0lax">Pressure (Psi)</td>
      </tr>
   </tbody>
   <tbody>
      <tr>
         <td class="text-center">Foto</td>
         <td>
            @if($acs->fotoparameter_after1 != '0')
               <img src="{{ asset('gambar/'.$acs->fotoparameter_after1) }}" alt="" height="150">
            @else
               <span>Belum Ada Foto</span>
            @endif
         </td>
         <td>
            @if($acs->fotoparameter_after2 != '0')
               <img src="{{ asset('gambar/'.$acs->fotoparameter_after2) }}" alt="" height="150">
            @else
               <span>Belum Ada Foto</span>
            @endif
         </td>
         <td>
            @if($acs->fotoparameter_after3 != '0')
               <img src="{{ asset('gambar/'.$acs->fotoparameter_after3) }}" alt="" height="150">
            @else
               <span>Belum Ada Foto</span>
            @endif
         </td>
      </tr>
      <tr>
         <td class="text-center">Nilai</td>
         <td><input disabled type="text" class="form-control text-center" name="parameter_after1" value="{{$acs->parameter_after1 }}"></td>
         <td><input disabled type="text" class="form-control text-center" name="parameter_after2" value="{{$acs->parameter_after2 }}"></td>
         <td><input disabled type="text" class="form-control text-center" name="parameter_after3" value="{{$acs->parameter_after3 }}"></td>
      </tr>
   </tbody>
</table>

<table class="table table-bordered" id="personelTeamTable">
   <thead>
      <tr>
         <th style="width: 5%"></th> <!-- Set fixed width for the left column -->
         <th colspan="3" class="text-center" style="background-color: rgb(147, 147, 147);color:white;">
            KONDISI KOMPONEN (BEFORE PM)
         </th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td class="tg-0lax" style="width: 5%;"></td> <!-- Same width here -->
         <td class="tg-0lax">Temp (C)</td>
         <td class="tg-0lax">(Psi)</td>
         <td class="tg-0lax">Pressure (Psi)</td>
      </tr>
   </tbody>
   <tbody>
      <tr>
         <td class="text-center" style="width: 5%;">Foto</td> <!-- Leftmost column with fixed width -->
         <td>
            @if($acs->fotokomponen_beforr1 != '0')
               <img src="{{ asset('gambar/'.$acs->fotokomponen_beforr1) }}" alt="" height="150">
            @else
               <span>Belum Ada Foto</span>
            @endif
         </td>
         <td>
            @if($acs->fotokomponen_beforr2 != '0')
               <img src="{{ asset('gambar/'.$acs->fotokomponen_beforr2) }}" alt="" height="150">
            @else
               <span>Belum Ada Foto</span>
            @endif
         </td>
         <td>
            @if($acs->fotokomponen_beforr3 != '0')
               <img src="{{ asset('gambar/'.$acs->fotokomponen_beforr3) }}" alt="" height="150">
            @else
               <span>Belum Ada Foto</span>
            @endif
         </td>
      </tr>
   </tbody>
</table>

<table class="table table-bordered" id="personelTeamTable">
   <thead>
      <tr>
         <th style="width: 5%"></th> <!-- Set fixed width for the left column -->
         <th colspan="3" class="text-center" style="background-color: rgb(147, 147, 147);color:white;">
            KONDISI KOMPONEN (AFTER PM)
         </th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td class="tg-0lax" style="width: 5%;"></td> <!-- Same width here -->
         <td class="tg-0lax">Temp (C)</td>
         <td class="tg-0lax">(Psi)</td>
         <td class="tg-0lax">Pressure (Psi)</td>
      </tr>
   </tbody>
   <tbody>
      <tr>
         <td class="text-center" style="width: 5%;">Foto</td> <!-- Leftmost column with fixed width -->
         <td>
            @if($acs->fotokomponen_after1 != '0')
               <img src="{{ asset('gambar/'.$acs->fotokomponen_after1) }}" alt="" height="200">
            @else
               <span>Belum Ada Foto</span>
            @endif
         </td>
         <td>
            @if($acs->fotokomponen_after2 != '0')
               <img src="{{ asset('gambar/'.$acs->fotokomponen_after2) }}" alt="" height="200">
            @else
               <span>Belum Ada Foto</span>
            @endif
         </td>
         <td>
            @if($acs->fotokomponen_after3 != '0')
               <img src="{{ asset('gambar/'.$acs->fotokomponen_after3) }}" alt="" height="200">
            @else
               <span>Belum Ada Foto</span>
            @endif
         </td>
      </tr>
   </tbody>
</table>


                     <table class="table table-bordered" id="">
                        <tr>
                           <th>Temuan</th>
                           <th>Rekomendasi</th>
                           <th>Customer Note</th>
                        </tr>
                        <tr>
                           <td>
                              <textarea disabled name="temuan" id="" cols="40" rows="10">{{$acs->temuan}}</textarea>
                           </td>
                           <td>
                              <textarea disabled name="rekomendasi" id="" cols="40" rows="10">{{$acs->temuan}}</textarea>
                           </td>
                           <td>
                              <textarea disabled name="customernote" id="" cols="40" rows="10">{{$acs->customer_note}}</textarea>
                           </td>
                        </tr>
                        <tr>
                           <th colspan="3">Job Complete</th>
                        </tr>
                        <tr>
                           <td colspan="3">
                              <select disabled onchange="setColor(this);" name="status"
                                 id="" class="form-select">
                                 <option value="?">{{$acs->status}}</option>
                                 <option value="Completed">Completed</option>
                                 <option value="On Progres">On Progres</option>
                              </select>
                           </td>
                        </tr>
                     </table>
                     <input disabled type="hidden" name="id_equipment" value="{{ $id }}">
                     <button class="btn btn-info px-4 mt-3" type="submit">Submit form</button>
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