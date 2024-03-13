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
        <h4 class="card-title mb-0 text-center">Tambah equipment</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('equipment.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="">jenis</label>
              <select name="jenis" id="" class="form-select">
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
              </select>
              <label for="">Brand</label>
              <input type="text" name="brand" class="form-control" id="" value="" required="">
              <label for="">Foto</label>
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
              <div class="container mt-5">
                <input class="form-control" type="file" id="fileInput" multiple accept="image/*" name="foto[]">
                <div class="preview-images-zone"></div>
              </div>
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
              <label for="">Serial Number</label>
              <input type="text" name="serial_number" class="form-control" id="" value="" required="">
              <label for="">Name Plate</label>
              <select name="nameplate" id="" class="form-select">
                <option value="ada">Ada</option>
                <option value="Tidak Ada">Tidak ada</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="">tahun pembuatan</label>
              <input type="number" id="yearInput" name="tahun_pembuatan" min="2000" max="2100" step="1" class="form-control">
              <label for="">tahun instalasi</label>
              <input type="number" id="yearInput" name="tahun_installasi" min="2000" max="2100" step="1" class="form-control">

              <label for="">Kapasitas</label>
              <select name="kapasitas" id="" class="form-select">
                @foreach ($kapasitas as $data)
                <option value="{{$data->kapasitas}}">{{$data->kapasitas}} - {{$data->satuan}}</option>
                @endforeach
              </select>
              <label for="">Site - Area Site</label>
              <select name="area" id="" class="form-select">
                @foreach ($area as $data)
                <option value="{{$data->area}}">{{$data->area}} - {{$data->site}}</option>
                @endforeach
              </select>
              <label for="">Customer</label>
              <select name="customer" id="" class="form-select">
                @foreach ($customer as $data)
                <option value="{{$data->nama}}">{{$data->nama}}</option>
                @endforeach
              </select>
              <br>
              <label for="">Running Hours</label>
              <input name="jamoperasi" type="number" id="" class="form-control" placeholder="Masukan Jam">
              <br>
              <label for="">Jenis Freon</label>
              <select name="jenis_freon" id="" class="form-select">
                @foreach ($freon as $data)
                <option value="{{$data->jenis_freon}}">{{$data->jenis_freon}}</option>
                @endforeach
              </select>

              <button class="btn btn-info px-4 mt-3" type="submit">
                Submit
              </button>
            </div>

        </form>
      </div>
    </div>
  </div>


  @endsection