@extends('layouts.back2')
@section('content')
<!-- --------------------------------------------------- -->
<!-- Header End -->
<!-- --------------------------------------------------- -->
<div class="container-fluid">
  <!-- --------------------------------------------------- -->
  <!--  Form Inputs Grid Start -->
  <!-- --------------------------------------------------- -->
  <div class="card bg-light-info shadow-none position-relative overflow-hidden" style="height: ;">
    <div class="card-body px-4 py-3">
      <div class="row align-items-center">
        {{-- <img src="../../dist/images/breadcrumb/Capture.PNG" alt="" class="img-fluid mb-n4"> --}}
      </div>
    </div>
  </div>
  <section>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="border-bottom title-part-padding">
            <h4 class="card-title mb-0 text-center">Service Report Troubleshoot / Corrective</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('troubleshoot.update',$service->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="row">
                <div class="col-md-4 mb-3">
                  <label for="">Customer</label>
                  <input  type="hidden" name="id_equipment" class="form-control" id="" value="{{$history->id_equipment}}" required="">
                  <input  type="text" name="customer" class="form-control" id="" value="{{$service->customer}}" required="">
                  <label for="">No Kontak</label>
                  <input  type="text" name="no_kontak" class="form-control" id=""  value="{{$service->no_kontak}}" required="">
                  <label for="">Alamat</label>
                  <textarea  class="form-control" name="alamat" id=""  cols="10" rows="4">{{$service->alamat}}</textarea>

                </div>
                <div class="col-md-4 mb-3">
                  <label for="">Engineer List</label>
                  <textarea  class="form-control" name="engineer_list" id="" cols="10" rows="4">{{$service->engineer_list}}</textarea>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="">Tanggal Survey</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="" aria-describedby="inputGroupPrepend2" required=""  value="{{$service->tanggal_survey}}" name="tanggal_survey">
                  </div>
                </div>
              </div>
              <h5 class="text-center" style="background-color: black;color:white">Task List</h5>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="form-check">
                    <input  type="checkbox"  name="c1" @if ($service->c1 == 1) checked @endif value="1" class="form-check-input" id="invalidcheck1">
                    <label class="form-check-label" for="invalidcheck1">1. Intensive Safety Briefing</label>
                  </div>
                  <div class="form-check">
                    <input  type="checkbox"  name="c2" @if ($service->c2 == 1) checked @endif value="1" class="form-check-input" id="invalidcheck2">
                    <label class="form-check-label" for="invalidcheck2">2. Memastikan tools teknisi memadai</label>
                  </div>
                  <div class="form-check">
                    <input  type="checkbox"  name="c3" @if ($service->c3 == 1) checked @endif value="1" class="form-check-input" id="invalidcheck3">
                    <label class="form-check-label" for="invalidcheck3">3. Memastikan APD&Pernut-JSA lengkap</label>
                  </div>
                  <div class="form-check">
                    <input  type="checkbox"  name="c4" @if ($service->c4 == 1) checked @endif value="1" class="form-check-input" id="invalidcheck4">
                    <label class="form-check-label" for="invalidcheck4">4. Dokumen penunjang memadai(jika dibutuhkan)</label>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-check">
                    <input  type="checkbox"  name="c5" @if ($service->c5 == 1) checked @endif value="1" class="form-check-input" id="invalidcheck5">
                    <label class="form-check-label" for="invalidcheck5">5. Mencatat data equipment</label>
                  </div>
                  <div class="form-check">
                    <input  type="checkbox"  name="c6" value="1" @if ($service->c6 == 1) checked @endif class="form-check-input" id="invalidcheck6">
                    <label class="form-check-label" for="invalidcheck6">6. Mencatat laporan/keluhan teknis user</label>
                  </div>
                  <div class="form-check">
                    <input  type="checkbox"  name="c7" value="1" @if ($service->c7 == 1) checked @endif class="form-check-input" id="invalidcheck7">
                    <label class="form-check-label" for="invalidcheck7">7. Melakukan survey dengan aman,menyeluruh,dan terukur</label>
                  </div>
                  <div class="form-check">
                    <input  type="checkbox"  name="c8" value="1" @if ($service->c8 == 1) checked @endif class="form-check-input" id="invalidcheck8">
                    <label class="form-check-label" for="invalidcheck8">8. Dokumen Melakukan analisa,tindakan,dan rekomendasi</label>
                  </div>

                </div>
              </div>

              <h5 class="text-center" style="background-color: black;color:white">Tindak Lanjut Dari Laporan/Pekerjaan</h5>

              <div class="row">
                <div class="col-md-2 mb-2">
                  <input type="radio"  name="jenis_survey" @if ($service->jenis_survey == 'new') checked @endif value="new" class="form-check-input" id="jenis_survey_new">
                  <label class="form-check-label" for="">&nbsp; PASCA PM</label>
                </div>
                <div class="col-md-2 mb-2">
                  <input type="radio"  name="jenis_survey" value="relokasi" @if ($service->jenis_survey == 'relokasi') checked @endif class="form-check-input" id="radio2">
                  <label class="form-check-label" for="radio2">&nbsp; TEMUAN DH/SRQ</label>
                </div>
                <div class="col-md-2 mb-2">
                  <input type="radio"  name="jenis_survey" value="audit" @if ($service->jenis_survey == 'audit') checked @endif class="form-check-input" id="radio3">
                  <label class="form-check-label" for="radio3">&nbsp; COMPLAIN</label>
                </div>
                <div class="col-md-3">
                  <div class="form-check">
                    <input type="radio"  name="jenis_survey" value="other" class="form-check-input" id="radio4">
                    <label class="form-check-label" for="radio4">&nbsp; Lainnya</label>
                  </div>
                  <input type="text" name="other_jenis_survey" placeholder="Lainnya" class="form-control" id="other_jenis_survey_input" style="display: none;">
                </div>
              </div>

              <script>
                // Menampilkan input teks "Lainnya" saat opsi "Lainnya" dipilih
                const radioOther = document.getElementById('radio4');
                const otherJenisSurveyInput = document.getElementById('other_jenis_survey_input');

                radioOther.addEventListener('change', function() {
                  if (radioOther.checked) {
                    otherJenisSurveyInput.style.display = 'block';
                  } else {
                    otherJenisSurveyInput.style.display = 'none';
                  }
                });
              </script>


              <div class="row">
                <div class="col-md-6 mb-3">
                  <h5 class="text-center" style="background-color: black; color: white">Defect Level</h5>
                  <div class="form-check">
                    <input type="radio"  name="defect_level" @if ($service->defect_level == 'High') checked @endif value="High" class="form-check-input" id="_column1">
                    <label class="form-check-label" for="_column1">&nbsp; &nbsp;High</label>
                  </div>
                  <div class="form-check">
                    <input type="radio"  name="defect_level" @if ($service->defect_level == 'Medium') checked @endif value="Medium" class="form-check-input" id="radio2_column1">
                    <label class="form-check-label" for="radio2_column1">&nbsp;&nbsp;Medium</label>
                  </div>
                  <div class="form-check">
                    <input type="radio"  name="defect_level" value="Low" @if ($service->defect_level == 'Low') checked @endif class="form-check-input" id="radio3_column1">
                    <label class="form-check-label" for="radio3_column1">&nbsp;&nbsp;Low</label>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <h5 class="text-center" style="background-color: black; color: white">Defect Type</h5>
                  <br>
                  <div class="form-check">
                    <input type="radio"  name="defect_type" @if ($service->defect_type == 'Minor') checked @endif value="Minor" class="form-check-input" id="">
                    <label class="form-check-label" for="">Minor</label>
                  </div>
                  <div class="form-check">
                    <input type="radio"  name="defect_type" @if ($service->defect_type == 'Tidak standar') checked @endif value="Tidak standar" class="form-check-input" id="">
                    <label class="form-check-label" for="">Tidak standar</label>
                  </div>
                  <div class="form-check">
                    <input type="radio"  name="defect_type" @if ($service->defect_type == 'Area sulit dijangkau / Hard Access') checked @endif value="Area sulit dijangkau / Hard Access" class="form-check-input" id="radio2">
                    <label class="form-check-label" for="radio2">Area sulit dijangkau / Hard Access</label>
                  </div>
                  <div class="form-check">
                    <input type="radio"  name="defect_type" @if ($service->defect_type == 'Sumber kontaminasi produk') checked @endif value="Sumber kontaminasi produk" class="form-check-input" id="radio3">
                    <label class="form-check-label" for="radio3">Sumber kontaminasi produk</label>
                  </div>
                  <div class="form-check">
                    <input type="radio"  name="defect_type" @if ($service->defect_type == 'Mengurangi kualitas') checked @endif value="Mengurangi kualitas" class="form-check-input" id="radio4">
                    <label class="form-check-label" for="radio4">Mengurangi kualitas</label>
                  </div>
                  <div class="form-check">
                    <input type="radio"  name="defect_type" @if ($service->defect_type == 'Tidak Dibutuhkan') checked @endif value="Tidak Dibutuhkan" class="form-check-input" id="radio5">
                    <label class="form-check-label" for="radio5">Tidak Dibutuhkan</label>
                  </div>
                  <div class="form-check">
                    <input type="radio"  name="defect_type" @if ($service->defect_type == 'Tidak Safety') checked @endif value="Tidak Safety" class="form-check-input" id="radio6">
                    <label class="form-check-label" for="radio6">Tidak Safety</label>
                  </div>
                  <div class="form-check">
                    <input type="radio"  name="defect_type" @if ($service->defect_type == 'Other') checked @endif value="Other" class="form-check-input" id="radio_other">
                    <label class="form-check-label" for="radio_other">Other</label>
                    <input type="text" name="other_defect_type" id="other_defect_input" style="display: none;">
                  </div>
                  <script>
                    // Menampilkan input teks saat opsi "Lainnya" dipilih
                    const radioOther = document.getElementById('radio_other');
                    const otherDefectInput = document.getElementById('other_defect_input');

                    radioOther.addEventListener('change', function() {
                      if (radioOther.checked) {
                        otherDefectInput.style.display = 'block';
                      } else {
                        otherDefectInput.style.display = 'none';
                      }
                    });
                  </script>
                  <br><br>
                </div>

                <h5 class="text-center" style="background-color: black;color:white">Catatan Equipment </h5>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="">Jenis Equipment</label>
                    <input  type="text" name="jenis_equipment" class="form-control" id="" value="{{$service->jenis_equipment}}" required="">
                    <label for="">Brand & Model</label>
                    <input  type="text" name="brand" class="form-control" id="" value="{{$service->brand}}" required="">
                    <label for="">Serial No</label>
                    <input  type="text" name="serial" class="form-control" id="" value="{{$service->serial}}" required="">
                  </div>
                  <div class="col-md-6 mb-3">
                    <br>
                    <label for="">Name Plate : &nbsp;</label>
                    <input {{ $service->name_plate == "ada" ? 'checked' : '' }}  type="radio" name="name_plate" value="ada" class="form-check-input" id="radio1" name="jenis_survey">
                    <label class="form-check-label" for="radio1">&nbsp; &nbsp;Ada</label>

                    <input {{ $service->name_plate == "tidak ada" ? 'checked' : '' }}  type="radio" name="name_plate" value="tidak ada" class="form-check-input" id="radio1" name="jenis_survey">
                    <label class="form-check-label" for="radio1"> &nbsp;&nbsp;Tidak Ada</label>
                    <br>
                    <br>

                    <label for="">Tahun Pembuatan</label>
                    <input  type="text" name="tahun_pembuatan" class="form-control" id="" value="{{$service->tahun_pembuatan}}" required="">
                    <label for="">Tahun Install</label>
                    <input  type="text" id="datepicker" name="tahun_install" class="form-control" id="" value="{{$service->tahun_install}}" required="">
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="">Trouble Desc :</label>
                    <textarea  class="form-control" name="deskripsi" id="" cols="10" rows="4">{{$service->deskripsi}}</textarea>
                  </div>
                  <div class="col-md-12 mb-2">
                    <label for="">Action :</label>
                    <textarea  class="form-control" name="tindakan" id="" cols="10" rows="4">{{$service->tindakan}}</textarea>
                  </div>
                  <div class="col-md-12 mb-2">
                    <label for="">Rekomendasi Teknisi Lapangan :</label>
                    <textarea  class="form-control" name="rekomendasi_teknisi_lapangan" id="" cols="10" rows="4">{{$service->rekomendasi_teknisi_lapangan}}</textarea>
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
                    @foreach ($list as $data)
                    <tr>
                      <td>1</td>
                      <td><input value="{{$data->deskripsilist}}"  type="text" class="form-control" name="deskripsilist[]"></td>
                      <td><input value="{{$data->modelpart}}"  type="text" class="form-control" name="modelpart[]"></td>
                      <td><input value="{{$data->qty}}"  type="number" class="form-control" name="qty[]"></td>
                      <td><input value="{{$data->keterangan}}"  type="text" class="form-control" name="keterangan[]"></td>
                    </tr>

                    @endforeach
                  </tbody>
                </table>

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
              <button type="button" class="btn btn-primary" id="addPersonelTeam">Add List</button><br>
<br>

               
</table>
        <tr>
            <th>Status</th>
        </tr>
        <tr>
            <td colspan="2"><select onchange="setColor(this);" name="status" id="" class="form-select">
                                                <option value="{{$service->status}}">{{$service->status}}</option>
                    <option value="Pengadaaan">Pengadaaan</option>
                    <option value="On Schedule">On Schedule</option>
                    <option value="On Progress">On Progress</option>
                    <option value="Complete (Close)">Complete (Close)</option>
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
@include('formimage.edit')
      </div>
          </div>
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