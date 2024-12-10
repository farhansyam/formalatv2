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
            <h4 class="card-title mb-0 text-center">Service Report Troubleshoot / Corrective : @if($equipment->jenis == 1)
                    {{ "AC Split" }}
                    @elseif($equipment->jenis == 2)
                    {{ "Cooled Water Chiller" }}
                    @elseif($equipment->jenis == 3)
                    {{ "AHUP" }}
                    @elseif($equipment->jenis == 4)
                    {{ "PAC" }}
                    @elseif($equipment->jenis == 5)
                    {{ "Cold Storage" }}
                    @elseif($equipment->jenis == 6)
                    {{ "Cooling Unit & AC Panel" }}
                    @elseif($equipment->jenis == 7)
                    {{ "Mini Chiller" }}
                    @elseif($equipment->jenis == 8)
                    {{ "Evaporative Air Cooler" }}
                    @elseif($equipment->jenis == 9)
                    {{ "AHU" }}
                    @elseif($equipment->jenis == 10)
                    {{ "Cooling tower" }}
                    @elseif($equipment->jenis == 11)
                    {{ "Humidifier" }}
                    @elseif($equipment->jenis == 12)
                    {{ "Dehumidifier" }}
                    @elseif($equipment->jenis == 13)
                    {{ "FCU (Fan Cooling Unit)" }}
                    @elseif($equipment->jenis == 14)
                    {{ "Exhaust Fan" }}
                    @elseif($equipment->jenis == 15)
                    {{ "Pompa" }}
                    @elseif($equipment->jenis == 16)
                    {{ "Spot Cooling" }}
                    @elseif($equipment->jenis == 17)
                    {{ "Water Mist" }}
                    @elseif($equipment->jenis == 18)
                    {{ "Chiller Centrifugal" }}
                    @elseif($equipment->jenis == 19)
                    {{ "Floor Standing" }}
                    @elseif($equipment->jenis == 20)
                    {{ "Ac Cassette" }}
                    @elseif($equipment->jenis == 21)
                    {{ "Split Duct" }}
                    @elseif($equipment->jenis == 22)
                    {{ "Air Cooled Chiller" }}
                    @elseif($equipment->jenis == 23)
                    {{ "Centralize Chiller" }}
                    @elseif($equipment->jenis == 24)
                    {{ "Ultrasonic Humidifier" }}
                    @elseif($equipment->jenis == 25)
                    {{ "Piping & Accs" }}
                    @elseif($equipment->jenis == 26)
                    {{ "Panel SCR" }}
                    @elseif($equipment->jenis == 27)
                    {{ "ATCS" }}
                    @elseif($equipment->jenis == 28)
                    {{ "Lakos Filter" }}
                    @endif - {{$equipment->id_combine}}</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('troubleshoot.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              
              <div class="row">
                <div class="col-md-4 mb-3">
                  <label for="">Customer</label>
                  <input readOnly="true" readonly type="text" name="customer" class="form-control" id="" value="{{$equipment->customer}}" required="">
                  <input type="hidden" name="id_equipment" class="form-control" id="" value="{{$equipment->id}}" required="">
                  <label for="">No Kontak</label>
                  <input type="text" name="no_kontak" class="form-control" id="" value="" required="">
                  <label for="">Alamat</label>
                  <textarea required class="form-control" name="alamat" id="" cols="10" rows="4"></textarea>

                </div>
                <div class="col-md-4 mb-3">
                  <label for="">Engineer List</label>
                  <textarea class="form-control" name="engineer_list" id="" cols="10" rows="4"></textarea><br>
                @if (request()->has('jenis') && request()->jenis)
    <label for="">Notes</label>
    <input type="text" class="form-control" value="Close Part Proposal" disabled id="">
    <input type="hidden" name="ids" value="{{ request()->ids }}">
@endif

                </div>
                <div class="col-md-4 mb-3">
                  <label for="">Tanggal Survey</label>
                  <div class="input-group">
                    <input type="date" class="form-control" id="" aria-describedby="inputGroupPrepend2" required="" name="tanggal_survey">
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <br>
                  <label for="">Jenis Equipment</label>
               <input type="text" name="jenis_equipment" readonly class="form-control" id="" value='@if($equipment->jenis == 1){{"AC Split"}}@elseif($equipment->jenis == 2){{"AHUP"}}@elseif($equipment->jenis == 3)@elseif($equipment->jenis == 4){{"PAC"}}@elseif($equipment->jenis == 5){{"Cold Storage"}}@elseif($equipment->jenis == 6)@elseif($equipment->jenis == 7){{"Mini Chiller"}}@elseif($equipment->jenis == 8){{"Evaporative Air Cooler"}}@elseif($equipment->jenis == 9){{"AHU"}}@elseif($equipment->jenis == 10){{"Cooling tower"}}@elseif($equipment->jenis == 11){{"Humidifier"}}@elseif($equipment->jenis == 12){{"Dehumidifier"}}@elseif($equipment->jenis == 13){{"FCU (Fan Cooling Unit)"}}@elseif($equipment->jenis == 14){{"Exhaust Fan"}}@elseif($equipment->jenis == 15){{"Pompa"}}@elseif($equipment->jenis == 16){{"Spot Cooling"}}@elseif($equipment->jenis == 17){{"Water Mist"}}@elseif($equipment->jenis == 18){{"Chiller Centrifugal"}}@elseif($equipment->jenis == 19){{"Floor Standing"}}@elseif($equipment->jenis == 20){{"Ac Cassette"}}@elseif($equipment->jenis == 21){{"Split Duct"}}@endif' required="">

                  <label for="">Brand & Model</label>
                  <input readonly type="text" name="brand" class="form-control" id="" value="{{$equipment->brand}}" required="">
                  <label for="">Serial No</label>
                  <input readonly required type="text" name="serial" class="form-control" id="" value="{{$equipment->serial_number}}" required="">
                </div>
                <div class="col-md-6 mb-3">
                  <br>
                  <label for="">Name Plate : &nbsp;</label>
                  <input readOnly="true" type="text" required name="name_plate" value="{{$equipment->nameplate}}" class="form-control">

                  <label for="">Tahun Pembuatan</label>
                  <input readonly type="text" name="tahun_pembuatan" class="form-control" id="" value="{{$equipment->tahun_pembuatan}}" required="">
                  <label for="">Tahun Install</label>
                  <input readonly type="text" id="datepicker" name="tahun_install" class="form-control" id="" value="{{$equipment->tahun_installasi}}" required="">
                </div>
              </div>
              <div class="row">
  <div class="col-md-6 mb-3">
    <label for="jenis_survey" class="form-label">Tindak Lanjut Laporan</label>
    <select name="jenis_survey" class="form-select" id="jenis_survey">
      <option value="?">?</option>
      <option value="PASCA PM">PASCA PM</option>
      <option value="Temuan DH/SRQ">TEMUAN DH/SRQ</option>
      <option value="Complain">COMPLAIN</option>
    </select>
    <input type="text" name="other_jenis_survey" placeholder="Lainnya" class="form-control mt-2" id="other_jenis_survey_input" style="display: none;">
  </div>

  <div class="col-md-6 mb-3">
    <label for="defect_level" class="form-label">Defect Level</label>
    <select name="defect_level" class="form-select" id="defect_level">
      <option value="?">?</option>
      <option value="High">High</option>
      <option value="Medium">Medium</option>
      <option value="Low">Low</option>
    </select>
  </div>

  <div class="col-md-6 mb-3">
    <label for="defect_type" class="form-label">Defect Type</label>
    <select name="defect_type" class="form-select" id="defect_type">
      <option value="?">?</option>
      <option value="Minor">Minor</option>
      <option value="Tidak standar">Tidak standar</option>
      <option value="Area sulit dijangkau / Hard Access">Area sulit dijangkau / Hard Access</option>
      <option value="Sumber kontaminasi produk">Sumber kontaminasi produk</option>
      <option value="Mengurangi kualitas">Mengurangi kualitas</option>
      <option value="Tidak Dibutuhkan">Tidak Dibutuhkan</option>
      <option value="Tidak Safety">Tidak Safety</option>
      <option value="Other">Other</option>
    </select>
    <input type="text" name="other_defect_type" placeholder="Lainnya" class="form-control mt-2" id="other_defect_input" style="display: none;">
  </div>
</div>
              <h5 class="text-center" style="background-color: black;color:white">Task List</h5>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="form-check">
                    <input type="checkbox" name="c1" value="1" class="form-check-input" id="invalidcheck1">
                    <label class="form-check-label" for="invalidcheck1">1. Intensive Safety Briefing</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" name="c2" value="1" class="form-check-input" id="invalidcheck2">
                    <label class="form-check-label" for="invalidcheck2">2. Memastikan tools teknisi memadai</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" name="c3" value="1" class="form-check-input" id="invalidcheck3">
                    <label class="form-check-label" for="invalidcheck3">3. Memastikan APD&Pernut-JSA lengkap</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" name="c4" value="1" class="form-check-input" id="invalidcheck4">
                    <label class="form-check-label" for="invalidcheck4">4. Dokumen penunjang memadai(jika dibutuhkan)</label>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-check">
                    <input type="checkbox" name="c5" value="1" class="form-check-input" id="invalidcheck5">
                    <label class="form-check-label" for="invalidcheck5">5. Mencatat data equipment</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" name="c6" value="1" class="form-check-input" id="invalidcheck6">
                    <label class="form-check-label" for="invalidcheck6">6. Mencatat laporan/keluhan teknis user</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" name="c7" value="1" class="form-check-input" id="invalidcheck7">
                    <label class="form-check-label" for="invalidcheck7">7. Melakukan survey dengan aman,menyeluruh,dan terukur</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" name="c8" value="1" class="form-check-input" id="invalidcheck8">
                    <label class="form-check-label" for="invalidcheck8">8. Dokumen Melakukan analisa,tindakan,dan rekomendasi</label>
                  </div>

                </div>
              </div>



<script>
  // Menampilkan input teks saat opsi "Lainnya" dipilih pada Jenis Survey
  document.getElementById('jenis_survey').addEventListener('change', function() {
    const otherInput = document.getElementById('other_jenis_survey_input');
    if (this.value === 'other') {
      otherInput.style.display = 'block';
    } else {
      otherInput.style.display = 'none';
      otherInput.value = ''; // Reset nilai input jika disembunyikan
    }
  });

  // Menampilkan input teks saat opsi "Lainnya" dipilih pada Defect Type
  document.getElementById('defect_type').addEventListener('change', function() {
    const otherInput = document.getElementById('other_defect_input');
    if (this.value === 'Other') {
      otherInput.style.display = 'block';
    } else {
      otherInput.style.display = 'none';
      otherInput.value = ''; // Reset nilai input jika disembunyikan
    }
  });
</script>


              <h5 class="text-center" style="background-color: black;color:white">Catatan Equipment </h5>
              <div class="row">
                
               
                <div class="col-md-12 mb-2">
                  <label for="">Action :</label>
                  <textarea class="form-control" required name="tindakan" id="" cols="10" rows="4"></textarea>
                </div>
                <div class="col-md-12 mb-2">
                  <label for="">Rekomendasi Teknisi Lapangan :</label>
                  <textarea class="form-control" required name="rekomendasi_teknisi_lapangan" id="" cols="10" rows="4"></textarea>
                </div>
                 <div class="col-md-12 mb-3">
                  <label for="">Trouble Description :</label>
                  <textarea class="form-control" required  name="deskripsi" id="" cols="10" rows="4"></textarea>
                </div>
              </div>
              <h5 class="text-center" style="background-color: black;color:white">List Kebutuhan Part material dan jasa </h5>
              <table class="table table-bordered" id="personelTeamTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Deskripsi</th>
                    <th>Model/Part Number</th>
                    <th>Qty</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Initial row -->
                  <tr>
                    <td>1</td>
                    <td><input required  type="text" class="form-control" name="deskripsilist[]"></td>
                    <td><input required type="text" class="form-control" name="modelpart[]"></td>
                    <td><input required type="number" class="form-control" name="qty[]"></td>
                    <td><input required type="text" class="form-control" name="keterangan[]"></td>
                    <td></td>
                  </tr>
                </tbody>
              </table> 
              <button type="button" class="btn btn-primary" id="addPersonelTeam">Add List</button><br>
              <br>
                                                         <table class="table table-bordered" id="">
        <tbody><tr>
            <th>Temuan</th>
            <th>Rekomendasi</th>
        </tr>
        <tr>
            <td><textarea name="temuan" id="" cols="60" rows="10"></textarea></td>
            <td><textarea name="rekomendasi" id="" cols="60" rows="10"></textarea></td>
        </tr>
        <tr>
            <th>Status</th>
        </tr>
        <tr>
            <td colspan="2"><select onchange="setColor(this);" name="status" id="" class="form-select">
                                                <option value="Proses Pelaporan">Proses Pelaporan</option>
                    <option value="Pengadaaan">Pengadaan</option>
                    <option value="On Schedule">On Schedule</option>
                    <option value="On Progress">On Progress</option>
                    <option value="CLOSED (Completed)">CLOSED (Completed)</option>
                    <option value="CLOSED (Take Out)">CLOSED (Take Out)</option>
                </select></td>
        </tr>
            
</tbody>
</table>

<h5 class="text-center" style="background-color: black;color:white">Tambahkan Foto Equipment</h5>
<table class="table table-bordered" id="GambarTable">
    <thead>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Keterangan</th>
            <th>Nama Part</th>
            <th>info</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- Initial row -->
        <tr>
            <td>1</td>
            <td><input type="file" class="form-control" name="gambar[]" required></td>
            <td><input type="text" class="form-control" name="info[]" required></td>
            <td><input type="text" class="form-control" name="keterangan2[]" required></td>
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
            <td><input type="text" class="form-control" name="keterangan2[]"></td>
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
             <th>Info</th>
            <th>Parameter</th>
            <th>Gambar</th>
            <th>Keterangan</th>
            <th>nilai</th>
           
        </tr>
    </thead>
    <tbody>
        <!-- Initial row -->
        <tr>
            <td>1</td>
             <td><select name="keterangangambar2[]" id="" class="form-select">
                    <option value="Before">Before</option>
                </select></td>
            <td>Suhu</td>
            <td><input type="file" class="form-control" name="gambar2[]"></td>
            <td><input type="text" class="form-control" name="info2[]"></td>
            <td><input type="text" class="form-control" name="keterangan22[]"></td>
           
        </tr>
        <tr>
            <td>2</td>
             <td><select name="keterangangambar2[]" id="" class="form-select">
                    <option value="Before">Before</option>
                </select></td>
            <td>Tekanan</td>
            <td><input type="file" class="form-control" name="gambar2[]"></td>
            <td><input type="text" class="form-control" name="info2[]"></td>
            <td><input type="text" class="form-control" name="keterangan22[]"></td>
           
        </tr>
        <tr>
            <td>3</td>
              <td><select name="keterangangambar2[]" id="" class="form-select">
                    <option value="Before">Before</option>
                </select></td>
            <td>Arus Listrik</td>
            <td><input type="file" class="form-control" name="gambar2[]"></td>
            <td><input type="text" class="form-control" name="info2[]"></td>
            <td><input type="text" class="form-control" name="keterangan22[]"></td>
          
        </tr>
        <tr>
            <td>4</td>
             <td><select name="keterangangambar2[]" id="" class="form-select">
                    <option value="After">After</option>
                </select></td>
            <td>Suhu</td>
            <td><input type="file" class="form-control" name="gambar2[]"></td>
            <td><input type="text" class="form-control" name="info2[]"></td>
            <td><input type="text" class="form-control" name="keterangan22[]"></td>
           
        </tr>
        <tr>
            <td>5</td>
             <td><select name="keterangangambar2[]" id="" class="form-select">
                    <option value="After">After</option>
                </select></td>
            <td>Tekanan</td>
            <td><input type="file" class="form-control" name="gambar2[]"></td>
            <td><input type="text" class="form-control" name="info2[]"></td>
            <td><input type="text" class="form-control" name="keterangan22[]"></td>
           
        </tr>
        <tr>
            <td>6</td>
              <td><select name="keterangangambar2[]" id="" class="form-select">
                    <option value="After">After</option>
                </select></td>
            <td>Arus Listrik</td>
            <td><input type="file" class="form-control" name="gambar2[]"></td>
            <td><input type="text" class="form-control" name="info2[]"></td>
            <td><input type="text" class="form-control" name="keterangan22[]"></td>
          
        </tr>
    </tbody>
</table>
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
            <td><input type="text" class="form-control" name="keterangan22[]"></td>
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
              <button class="btn btn-info px-4 mt-3" type="submit">
                Submit form
              </button>
          </div>

          <br>
          <script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>

          <script>
            $(document).ready(function() {
              var personelCounter = 1;
              var pekerjaanCounter = 1;

              // Add a new row for Nama Personel Team
              $("#addPersonelTeam").click(function() {
                personelCounter++;
                var newRow = `
        <tr>
            <td>${personelCounter}</td>
            <td><input type="text" class="form-control" name="deskripsilist[]"></td>
            <td><input type="text" class="form-control" name="modelpart[]"></td>
            <td><input type="number" class="form-control" name="qty[]"></td>
            <td><input type="text" class="form-control" name="keterangan[]"></td>
            <td><button type="button" class="btn btn-danger remove-row">X</button></td>

        </tr>
    `;
                $("#personelTeamTable tbody").append(newRow);
              });
            });


            // Remove a row from the Nama Personel Team table
            $("#personelTeamTable").on("click", ".remove-row", function() {
              $(this).closest("tr").remove();
              personelCounter--;
              // Update the row numbers
              $("#personelTeamTable tbody tr").each(function(index) {
                $(this).find("td:first").text(index + 1);
              });
            });
          </script>

        </div>

        </form>
      </div>
    </div>
</div>

</section>
<!-- --------------------------------------------------- -->
<!--  Form Inputs Grid End -->
<!-- --------------------------------------------------- -->
</div>
</div>

</div>

@endsection