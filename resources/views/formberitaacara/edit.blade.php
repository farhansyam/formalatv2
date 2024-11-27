@extends('layouts.back2')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="border-bottom title-part-padding">
        <h4 class="card-title mb-0 text-center">Berita Acara Survey/Pengecekan</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('formberitaacara.update',$beritaacara->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row">
            <div class="col-md-4 mb-3">
              <label for="">Customer</label>
              <input  type="text" name="customer" class="form-control" id="" value="{{$beritaacara->customer}}" required="">
              <label for="">No Kontak</label>
              <input  type="text" name="no_kontak" class="form-control" id=""  value="{{$beritaacara->no_kontak}}" required="">
              <label for="">Alamat</label>
              <textarea  class="form-control" name="alamat" id=""  cols="10" rows="4">{{$beritaacara->alamat}}</textarea>

            </div>
            <div class="col-md-4 mb-3">
              <label for="">Engineer List</label>
              <textarea  class="form-control" name="engineer_list" id="" cols="10" rows="4" >{{$beritaacara->engineer_list}}</textarea>
            </div>
            <div class="col-md-4 mb-3">
              <label for="">Tanggal Survey</label>
              <div class="input-group">
                <input  type="date" class="form-control" id="" aria-describedby="inputGroupPrepend2" required="" name="tanggal_survey" value="{{$beritaacara->tanggal_survey}}" >
              </div>
            </div>
          </div>
          <h5 class="text-center" style="background-color: black;color:white">Task List</h5>
          <div class="row">
            <div class="col-md-6 mb-3">
              <div class="form-check">
                <input  type="checkbox"  name="c1" @if ($beritaacara->c1 == 1) checked @endif value="1" class="form-check-input" id="invalidcheck1">
                <label class="form-check-label" for="invalidcheck1">1. Intensive Safety Briefing</label>
              </div>
              <div class="form-check">
                <input  type="checkbox"  name="c2" @if ($beritaacara->c2 == 1) checked @endif value="1" class="form-check-input" id="invalidcheck2">
                <label class="form-check-label" for="invalidcheck2">2. Memastikan tools teknisi memadai</label>
              </div>
              <div class="form-check">
                <input  type="checkbox"  name="c3" @if ($beritaacara->c3 == 1) checked @endif value="1" class="form-check-input" id="invalidcheck3">
                <label class="form-check-label" for="invalidcheck3">3. Memastikan APD&Pernut-JSA lengkap</label>
              </div>
              <div class="form-check">
                <input  type="checkbox"  name="c4" @if ($beritaacara->c4 == 1) checked @endif value="1" class="form-check-input" id="invalidcheck4">
                <label class="form-check-label" for="invalidcheck4">4. Dokumen penunjang memadai(jika dibutuhkan)</label>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="form-check">
                <input  type="checkbox"  name="c5" @if ($beritaacara->c5 == 1) checked @endif value="1" class="form-check-input" id="invalidcheck5">
                <label class="form-check-label" for="invalidcheck5">5. Mencatat data equipment</label>
              </div>
              <div class="form-check">
                <input  type="checkbox"  name="c6" value="1" @if ($beritaacara->c6 == 1) checked @endif class="form-check-input" id="invalidcheck6">
                <label class="form-check-label" for="invalidcheck6">6. Mencatat laporan/keluhan teknis user</label>
              </div>
              <div class="form-check">
                <input  type="checkbox"  name="c7" value="1" @if ($beritaacara->c7 == 1) checked @endif class="form-check-input" id="invalidcheck7">
                <label class="form-check-label" for="invalidcheck7">7. Melakukan survey dengan aman,menyeluruh,dan terukur</label>
              </div>
              <div class="form-check">
                <input  type="checkbox"  name="c8" value="1" @if ($beritaacara->c8 == 1) checked @endif class="form-check-input" id="invalidcheck8">
                <label class="form-check-label" for="invalidcheck8">8. Dokumen Melakukan analisa,tindakan,dan rekomendasi</label>
              </div>

            </div>
          </div>

          <h5 class="text-center" style="background-color: black;color:white">Jenis Survey</h5>

          <div class="row">
            <div class="col-md-2 mb-2">
              <input  {{ $beritaacara->jenis_survey == "new" ? 'checked' : '' }} type="radio" name="jenis_survey" value="new" class="form-check-input" id="radio1" name="jenis_survey">
              <label class="form-check-label" for="radio1">&nbsp; New Install</label>
            </div>
            <div class="col-md-2 mb-2">
              <input {{ $beritaacara->jenis_survey == "relokasi" ? 'checked' : '' }} type="radio" name="jenis_survey" value="relokasi" class="form-check-input" id="radio2" name="jenis_survey">
              <label class="form-check-label" for="radio2">&nbsp; Relokasi/Modifikasi</label>
            </div>
            <div class="col-md-2 mb-2">
              <input  type="radio" name="jenis_survey" value="audit" {{ $beritaacara->jenis_survey == "audit" ? 'checked' : '' }} class="form-check-input" id="radio3" name="jenis_survey">
              <label class="form-check-label" for="radio3"> &nbsp;Audit Preparation</label>
            </div>
            <div class="col-md-2 mb-2">
              <input  type="radio" name="jenis_survey" value="trouble" {{ $beritaacara->jenis_survey == "trouble" ? 'checked' : '' }} class="form-check-input" id="radio4" name="jenis_survey">
              <label class="form-check-label" for="radio4">&nbsp;Laporan Trouble</label>
            </div>
            <div class="col-md-3">
              <input  type="text" name="jenis_survey" placeholder="Lainnya" class="form-control" id="radio5" name="lainnya">
              <br>
            </div>
          </div>

          <h5 class="text-center" style="background-color: black;color:white">Catatan Equipment </h5>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="">Jenis Equipment</label>
              <input  type="text" name="jenis_equipment" class="form-control" id="" value="{{$beritaacara->jenis_equipment}}" required="">
              <label for="">Brand & Model</label>
              <input  type="text" name="brand" class="form-control" id="" value="{{$beritaacara->brand}}" required="">
              <label for="">Serial No</label>
              <input  type="text" name="serial" class="form-control" id="" value="{{$beritaacara->serial}}" required="">
            </div>
            <div class="col-md-6 mb-3">
              <br>
              <label for="">Name Plate : &nbsp;</label>
              <input {{ $beritaacara->name_plate == "ada" ? 'checked' : '' }}  type="radio" name="name_plate" value="ada" class="form-check-input" id="radio1" name="jenis_survey">
              <label class="form-check-label" for="radio1">&nbsp; &nbsp;Ada</label>

              <input {{ $beritaacara->name_plate == "tidak ada" ? 'checked' : '' }}  type="radio" name="name_plate" value="tidak ada" class="form-check-input" id="radio1" name="jenis_survey">
              <label class="form-check-label" for="radio1"> &nbsp;&nbsp;Tidak Ada</label>
              <br>
              <br>

              <label for="">Tahun Pembuatan</label>
              <input  type="text" name="tahun_pembuatan" class="form-control" id="" value="{{$beritaacara->tahun_pembuatan}}" required="">
              <label for="">Tahun Install</label>
              <input  type="text" id="date" name="tahun_install" class="form-control" id="" value="{{$beritaacara->tahun_install}}" required="">
            </div>
            <div class="col-md-12 mb-3">
              <label for="">Deskripsi / Laporan User :</label>
              <textarea  class="form-control" name="deskripsi" id="" cols="10" rows="4">{{$beritaacara->deskripsi}}</textarea>
            </div>
            <div class="col-md-12 mb-2">
              <label for="">Analisa Awal :</label>
              <textarea  class="form-control" name="analisa_awal" id="" cols="10" rows="4">{{$beritaacara->analisa_awal}}</textarea>
            </div>
            <div class="col-md-12 mb-2">
              <label for="">Tindakan :</label>
              <textarea  class="form-control" name="tindakan" id="" cols="10" rows="4">{{$beritaacara->tindakan}}</textarea>
            </div>
            <div class="col-md-12 mb-2">
              <label for="">Rekomendasi Teknisi Lapangan :</label>
              <textarea  class="form-control" name="rekomendasi_teknisi_lapangan" id="" cols="10" rows="4">{{$beritaacara->rekomendasi_teknisi_lapangan}}</textarea>
            </div>
          </div>
          <input type="hidden" name="id_equipment" value="{{$beritaacara->id_equipment}}">
          <h5 class="text-center" style="background-color: black;color:white">List Kebutuhan Part material dan jasa </h5>
          <table class="table table-bordered" id="personelTeamTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Deskripsi</th>
                <th>Model/Part Number</th>
                <th>Qty</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <!-- Initial row -->
              @php
              $no = 1;
              @endphp
              @foreach ($list as $data)
              <tr>
                <td>{{$no++}}</td>
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

          </button>
                    @include('formimage.formkosong')
</table>

                            <button class="btn btn-info px-4 mt-3" type="submit">Submit form</button>
                        </form>
@include('formimage.edit')
      </div>
    </div>
  </div>
</div>

@endsection