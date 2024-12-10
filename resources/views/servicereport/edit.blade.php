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
              </div>
              <div class="row">
  <div class="col-md-6 mb-3">
    <label for="jenis_survey" class="form-label">Jenis Survey</label>
    <select name="jenis_survey" class="form-select" id="jenis_survey">
      <option value="new">PASCA PM</option>
      <option value="relokasi">TEMUAN DH/SRQ</option>
      <option value="audit">COMPLAIN</option>
      <option value="other">Lainnya</option>
    </select>
    <input type="text" name="other_jenis_survey" placeholder="Lainnya" class="form-control mt-2" id="other_jenis_survey_input" style="display: none;">
  </div>

  <div class="col-md-6 mb-3">
    <label for="defect_level" class="form-label">Defect Level</label>
    <select name="defect_level" class="form-select" id="defect_level">
      <option value="High">High</option>
      <option value="Medium">Medium</option>
      <option value="Low">Low</option>
    </select>
  </div>

  <div class="col-md-6 mb-3">
    <label for="defect_type" class="form-label">Defect Type</label>
    <select name="defect_type" class="form-select" id="defect_type">
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



                <h5 class="text-center" style="background-color: black;color:white">Catatan Equipment </h5>
                <div class="row">
                  
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
                    $("#addPersonelTeamss").click(function() {
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
            <td><input type="text" class="form-control" name="keterangan22[]" required></td>
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
                                <th>Parameter</th>
                                <th>Nilai</th>
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
                            @foreach ($gambar2 as $index => $data)
                            <tr>
                                <td>{{$n++}}</td>
                                <td><img src="{{asset('gambar2')}}/{{$data->gambar}}" alt="" height="200"></td>
                                <td>@if($index == 0) Suhu  @elseif($index == 1) Tekanan @else Tegangan Listrik @endif</td>
                                <td><input disabled value="{{$data->keterangan2 }}" disabled type="text" class="form-control" name="keterangan[]"></td>
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
    </div>

  </section>
  <!-- --------------------------------------------------- -->
  <!--  Form Inputs Grid End -->
  <!-- --------------------------------------------------- -->
</div>
</div>

</div>

@endsection