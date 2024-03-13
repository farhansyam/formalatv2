@extends('layouts.back2')
@section('content')
<!-- --------------------------------------------------- -->
<!-- Header End -->
<!-- --------------------------------------------------- -->
<!-- --------------------------------------------------- -->
<!--  Form Inputs Grid Start -->
<!-- --------------------------------------------------- -->
<div class="row">
  <div class="col-16">
    <div class="card">
      <div class="border-bottom title-part-padding">
        <h4 class="card-title mb-0 text-center">Edit equipment</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('equipment.update',$equipment->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="">jenis</label>
              <select name="jenis" id="" class="form-select">
                @if($equipment->jenis == 1)
                <option value="1">Ac Split</option>
                @elseif($equipment->jenis == 2)
                <option value="2">AHUP</option>
                @elseif($equipment->jenis == 3)
                <option value="3">Cooled Water Chiller</option>
                @elseif($equipment->jenis == 4)
                <option value="4">PAC</option>
                @elseif($equipment->jenis == 5)
                <option value="5">Cold Storage</option>
                @elseif($equipment->jenis == 6)
                <option value="6">Cooling Unit & AC Panel</option>
                @elseif($equipment->jenis == 7)
                <option value="7">Mini Chiller</option>
                @elseif($equipment->jenis == 8)
                <option value="8">Evaporative Air Cooler</option>
                @elseif($equipment->jenis == 9)
                <option value="9">AHU</option>
                @elseif($equipment->jenis == 10)
                <option value="10">Cooling tower</option>
                @elseif($equipment->jenis == 11)
                <option value="11">Humidifier</option>
                @elseif($equipment->jenis == 12)
                <option value="12">Dehumidifier</option>
                @elseif($equipment->jenis == 13)
                <option value="13">FCU (Fan Cooling Unit)</option>
                @elseif($equipment->jenis == 14)
                <option value="14">Exhaust Fan</option>
                @elseif($equipment->jenis == 15)
                <option value="15">Pompa</option>
                @elseif($equipment->jenis == 16)
                <option value="16">Spot Cooling</option>
                @elseif($equipment->jenis == 17)
                <option value="17">Water Mist</option>
                @elseif($equipment->jenis == 18)
                <option value="18">Chiller Centrifugal</option>
                @elseif($equipment->jenis == 19)
                <option value="19">Floor Standing</option>
                @elseif($equipment->jenis == 20)
                <option value="20">Ac Cassette</option>
                @elseif($equipment->jenis == 21)
                <option value="21">Split Duct</option>
                @elseif($equipment->jenis == 21)
                <option value="21">Split Duct</option>
                @elseif($equipment->jenis == 22)
                <option value="22">Air Cooled Chiller</option>
                @elseif($equipment->jenis == 23)
                <option value="23">Centralize Chiller</option>
                @elseif($equipment->jenis == 24)
                <option value="24">Ultrasonic Humidifiert</option>
                @elseif($equipment->jenis == 25)
                <option value="25">Piping & Accs</option>
                @elseif($equipment->jenis == 26)
                <option value="26">Panel SCR</option>
                @elseif($equipment->jenis == 27)
                <option value="27">ATCS</option>
                @elseif($equipment->jenis == 28)
                <option value="28">Lakos Filter</option>
                @endif
                <option value="1">Ac Split</option>
                <option value="19">Floor Standing</option>
                <option value="20">Ac Cassette</option>
                <option value="21">Split Duct</option>
                <option value="2">AHUP</option>
                <option value="3">Cooled Water Chiller</option>
                <option value="4">PAC</option>
                <option value="5">Cold Storage</option>
                <option value="6">Cooling Unit & AC Panel</option>
                <option value="7">Mini Chiller</option>
                <option value="8">Evaporative Air Cooler</option>
                <option value="9">AHU</option>
                <option value="10">Cooling tower</option>
                <option value="11">Humidifier</option>
                <option value="12">Dehumidifier</option>
                <option value="13">FCU (Fan Cooling Unit)</option>
                <option value="14">Exhaust Fan</option>
                <option value="15">Pompa</option>
                <option value="16">Spot Cooling</option>
                <option value="17">Water Mist</option>
                <option value="18">Chiller Centrifugal</option>
                <option value="22">Air Cooled Chiller</option>
                <option value="23">Centralize Chiller</option>
                <option value="24">Ultrasonic Humidifiert</option>
                <option value="25">Piping & Accs</option>
                <option value="26">Panel SCR</option>
                <option value="27">ATCS</option>
                <option value="28">Lakos Filter</option>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="">Brand</label>
              <input type="text" name="brand" class="form-control" id="" value="{{$equipment->brand}}" required="">
            </div>
            <div class="col-md-6 mb-3">
              <label for="">Model</label>
              <input type="text" name="model" class="form-control" value="{{$equipment->model}}" id="" value="" required="">
            </div>
            <div class="col-md-6 mb-3">
              <label for="">Serial Number</label>
              <input type="text" name="serial_number" class="form-control" id="" value="{{$equipment->serial_number}}" required="">
            </div>
            <div class="col-md-6 mb-3">
              <label for="">Name Plate</label>
              <select name="nameplate" id="" class="form-select">
                <option value="{{$equipment->nameplate}}">{{$equipment->nameplate}}</option>
                <option value="ada">Ada</option>
                <option value="Tidak Ada">Tidak ada</option>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="">Kode Equipment</label>
              <input type="text" name="kode" class="form-control" id="" value="{{$equipment->kode}}" required="">
            </div>
            <div class="col-md-6">
              <label for="">tahun pembuatan</label>
              <input type="number" id="yearInput" value="{{$equipment->tahun_pembuatan}}" name="tahun_pembuatan" min="2000" max="2100" step="1" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
              <label for="">tahun instalasi</label>
              <input type="number" id="yearInput" name="tahun_installasi" value="{{$equipment->tahun_installasi}}" min="2000" max="2100" step="1" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
              <label for="">Kapasitas</label>
              <select name="kapasitas" id="" class="form-select">
                @foreach ($kapasitas as $data)
                <option value="{{$equipment->kapasitas}}">{{$equipment->kapasitas}}</option>
                <option value="{{$data->kapasitas}}">{{$data->kapasitas}} - {{$data->satuan}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="">Site - Area Site</label>
              <select name="area" id="" class="form-select">
                @foreach ($area as $data)
                <option value="{{$equipment->area}}">{{$equipment->area}} - {{$equipment->site}}</option>
                <option value="{{$data->area}}">{{$data->area}} - {{$data->site}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="">Customer</label>
              <select name="customer" id="" class="form-select">
                @foreach ($customer as $data)
                <option value="{{$equipment->customer}}">{{$equipment->customer}}</option>
                <option value="{{$data->nama}}">{{$data->nama}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="">Room</label>
              <select name="room" id="" class="form-select">
                @foreach ($room as $data)
                <option value="{{$data->room}}">{{$data->room}}-{{$data->kode}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="">Running Hours</label>
              <input name="jamoperasi" type="number" id="" class="form-control" value="{{$equipment->jamoperasi}}" placeholder="Masukan Jam">
            </div>

            <div class="col-md-6 mb-3">
              <label for="">Jenis Freon</label>
              <select name="jenis_freon" id="" class="form-select">
                @foreach ($freon as $data)
                <option value="{{$equipment->jenis_freon}}">{{$equipment->jenis_freon}}</option>
                <option value="{{$data->jenis_freon}}">{{$data->jenis_freon}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="">PM Regulerly</label>
              <select name="reguler" id="" class="form-select">
                <option value="{{$equipment->reguler}}">{{$equipment->reguler}}</option>
                @foreach ($reguler as $data)
                <option value="{{$data->reguler}}">{{$data->reguler}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="">Other Info</label>
              <input name="other" type="other" id="" class="form-control" value="{{$equipment->other}}" placeholder="Masukan Keterangan tambahan">
            </div>
            <div class="col-md-6 mb-3">
              <label for="">Foto Equipment</label>
              <style>
                .preview-images-zone {
                  width: 100%;
                  border: 1px solid #ddd;
                  min-height: 180px;
                  border-radius: 5px;
                  padding: 20px;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  flex-wrap: wrap;
                }

                .preview-image {
                  width: 200px;
                  height: 200px;
                  margin: 10px;
                  position: relative;
                }

                .preview-image img {
                  width: 100%;
                  height: 100%;
                  object-fit: cover;
                  border-radius: 5px;
                }

                .preview-image .delete {
                  position: absolute;
                  top: 0;
                  right: 0;
                  cursor: pointer;
                  background-color: rgba(255, 255, 255, 0.8);
                  border-radius: 50%;
                  padding: 5px;
                }
              </style>
              <input class="form-control" type="file" id="fileInput" multiple accept="image/*" name="foto[]">
              <div class="preview-images-zone"></div>
              <!-- Bootstrap Bundle with Popper -->
              <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
              <script>
                document.getElementById('fileInput').addEventListener('change', function() {
                  var previewZone = document.querySelector('.preview-images-zone');
                  previewZone.innerHTML = '';
                  var files = this.files;
                  if (files) {
                    [].forEach.call(files, function(file) {
                      var reader = new FileReader();
                      reader.onload = function(event) {
                        var previewImage = document.createElement('div');
                        previewImage.className = 'preview-image';
                        var image = new Image();
                        image.src = event.target.result;
                        previewImage.appendChild(image);
                        var deleteButton = document.createElement('span');
                        deleteButton.className = 'delete';
                        deleteButton.innerHTML = '&times;';
                        deleteButton.addEventListener('click', function() {
                          previewImage.parentNode.removeChild(previewImage);
                        });
                        previewImage.appendChild(deleteButton);
                        previewZone.appendChild(previewImage);
                      };
                      reader.readAsDataURL(file);
                    });
                  }
                });
              </script>
            </div>
            <input type="hidden" value="{{$equipment->id}}" name="id">
            <div class="col-md-3 mb-3">

              <button class="btn btn-info" type="submit">
                Submit
              </button>
            </div>

        </form>
        <form action="{{ route('equipment.destroy', $equipment->id) }}" method="POST" style="margin-left: 10px;">
          @csrf
          @method('DELETE')
          <div class="col-md-3 mb-3">

            <button class="btn btn-danger">Delete</button>
              </div>
        </form>
      </div>
    </div>
  </div>


  @endsection