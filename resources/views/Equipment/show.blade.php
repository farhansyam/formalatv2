@extends('layouts.back2')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header bg-primary">
        <h5 class="mb-0 text-white"><?php
                                    // Array untuk memetakan angka ke jenis
                                    $jenis = [
                                      1 => "AC Split",
                                      2 => "Cooled Water Chiller",
                                      3 => "AHUP",
                                      4 => "PAC",
                                      5 => "Cold Storage",
                                      6 => "Cooling Unit & AC Panel",
                                      7 => "Mini Chiller",
                                      8 => "Evaporative Air Cooler",
                                      9 => "AHU",
                                      10 => "Cooling tower",
                                      11 => "Humidifier",
                                      12 => "Dehumidifier",
                                      13 => "FCU (Fan Cooling Unit)",
                                      14 => "Exhaust Fan",
                                      15 => "Pompa",
                                      16 => "Spot Cooling",
                                      17 => "Water Mist",
                                      18 => "Chiller Centrifugal",
                                      19 => "Floor Standing",
                                      20 => "Ac Cassette",
                                      21 => "Split Duct",
                                      22 => "Air Cooled Chiller",
                                      23 => "Centralize Chiller",
                                      24 => "Ultrasonic Humidifier",
                                      25 => "Piping & Accs",
                                      26 => "Panel SCR",
                                      27 => "ATCS",
                                      28 => "Lakos Filter"
                                    ];
                                    // Ambil singkatan dari jenis berdasarkan angka
                                    $singkatan1 = isset($jenis[$equipment->jenis]) ? substr(str_replace(' ', '', ucwords(strtolower($jenis[$equipment->jenis]))), 0, 3) : '';
                                    $singkatan2 = strtoupper($equipment->kode_room);

                                    echo strtoupper($singkatan1 . $singkatan2 . $formattedId = sprintf('%05d', $equipment->id));
                                    // Mengambil karakter pertama


                                    ?></h5>
      </div>
      <div class="form-horizontal">
        <div class="form-body">
          <div class="card-body">
            <h5 class="card-title mb-0">Equipment Info</h5><br>
            <img src="{{asset('')}}/{{$equipment->qrcode}}" alt="" width="200">

            @foreach(explode(',', $equipment->foto) as $imageName)
            <img src="{{asset('image')}}/{{$imageName}}" alt="" width="200">
            @endforeach
          </div>
          <hr class="mt-0 mb-5">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-4">Jenis:
                  </label>
                  <div class="col-md-8">
                    <p class="form-control-static"> @if($equipment->jenis == 1)
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
                      @endif
                    </p>
                  </div>
                </div>
              </div>
              <!--/span-->
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-3">Brand:</label>
                  <div class="col-md-9">
                    <p class="form-control-static">{{$equipment->brand}}</p>
                  </div>
                </div>
              </div>
              <!--/span-->
            </div>
            <!--/row-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-4">Serial Number:</label>
                  <div class="col-md-8">
                    <p class="form-control-static">{{$equipment->serial_number}}</p>
                  </div>
                </div>
              </div>
              <!--/span-->
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-3">Plat Name:</label>
                  <div class="col-md-9">
                    <p class="form-control-static">{{$equipment->nameplate}}</p>
                  </div>
                </div>
              </div>
              <!--/span-->
            </div>
            <!--/row-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-4">Tahun Pembuatan:</label>
                  <div class="col-md-8">
                    <p class="form-control-static">{{$equipment->tahun_pembuatan}}</p>
                  </div>
                </div>
              </div>
              <!--/span-->
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-3">Tahun Instalasi:</label>
                  <div class="col-md-9">
                    <p class="form-control-static">{{$equipment->tahun_installasi}}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-4">Kapasitas:</label>
                  <div class="col-md-8">
                    <p class="form-control-static">{{$equipment->kapasitas}} PK</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-3">Area:</label>
                  <div class="col-md-9">
                    <p class="form-control-static">{{$equipment->area}}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-4">Customer:</label>
                  <div class="col-md-8">
                    <p class="form-control-static">{{$equipment->customer}}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-3">Running Hours:</label>
                  <div class="col-md-9">
                    <p class="form-control-static">{{$equipment->jamoperasi}}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-4">Freon Type:</label>
                  <div class="col-md-8">
                    <p class="form-control-static">{{$equipment->jenis_freon}}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-3">Room :</label>
                  <div class="col-md-9">
                    <p class="form-control-static">{{$equipment->room}}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-4">PM Regulerly :</label>
                  <div class="col-md-8">
                    <p class="form-control-static">{{$equipment->reguler}}</p>
                  </div>
                </div>
              </div>
              <!--/span-->
            </div>
            <hr>
            @if(auth()->user()->role_sipm == 'user')
            @else
            @if($schedule->count() > 0)

            @foreach ($schedule as $d )
            @if($d->schedule <= date('Y-m-d')) <div class="form-actions">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4 col-sm-12 mb-2">
                        <a href="{{ route('survey.create', $equipment->id) }}" class="btn btn-primary w-100">
                          <i class="fs-5"></i> Form Survey
                        </a>
                      </div>
                      <div class="col-md-4 col-sm-12 mb-2">

                        @if($equipment->jenis == 1)
                        <a href="{{route('ac-split.create2',$equipment->id)}}">
                          <button type="button" class="btn btn-info w-100">
                            Form PM Ac Split
                          </button>
                        </a>
                        @elseif($equipment->jenis == 3)
                        <a href="{{route('auhp.create2',$equipment->id)}}">
                          <button type="button" class="btn btn-info w-100">
                            Form PM AUHP
                          </button>
                        </a>
                        @elseif($equipment->jenis == 2)
                        <a href="{{route('acwc.create2',$equipment->id)}}">
                          <button type="button" class="btn btn-info w-100">
                            Form PM Cooled Water Chiller
                          </button>
                        </a>

                        @elseif($equipment->jenis == 3)
                        <a href="{{ route('AUHP.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List AUHP
                          </button>
                        </a>

                        @elseif($equipment->jenis == 4)
                        <a href="{{route('pac.create2',$equipment->id)}}">
                          <button type="button" class="btn btn-info w-100">
                            Form PM PAC
                          </button>
                        </a>

                        @elseif($equipment->jenis == 5)
                        <a href="{{ route('cold-storage.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info w-100">Task List Cold Storage</button>
                        </a>

                        @elseif($equipment->jenis == 6)
                        <a href="{{ route('cooling-unit.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info w-100">
                            Form PM Cooling Unit & AC Panel
                          </button>
                        </a>
                        @elseif($equipment->jenis == 7)
                        <a href="{{ route('mini-chiller.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info w-100">
                            Form PM Mini Chiller
                          </button>
                        </a>
                        @elseif($equipment->jenis == 8)
                        <a href="{{ route('evaporator-aircooler.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info w-100">
                            Form PM Evaporative Air Cooler
                          </button>
                        </a>
                        @elseif($equipment->jenis == 9)
                        <a href="{{route('ahu.create2',$equipment->id)}}">
                          <button type="button" class="btn btn-info w-100">
                            Form PM AHU
                          </button>
                        </a>
                        @elseif($equipment->jenis == 10)
                        <a href="{{ route('cooling-tower.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info w-100">
                            Form PM Cooling Tower
                          </button>
                        </a>
                        @elseif($equipment->jenis == 11)
                        <a href="{{ route('humidifier.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info w-100">
                            Form PM Humidifier
                          </button>
                        </a>
                        @elseif($equipment->jenis == 12)
                        <a href="{{ route('dehumidifier.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info w-100">
                            Form PM Dehumidifier
                          </button>

                        </a>
                        @elseif($equipment->jenis == 13)

                        <a href="{{ route('fcuu.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info w-100">
                            Form PM Fan Cooling Unit
                          </button>
                        </a>
                        @elseif($equipment->jenis == 14)
                        <a href="{{ route('exhaustfan.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info w-100">
                            Form PM Exhaust Fan
                          </button>
                        </a>
                        @elseif($equipment->jenis == 15)
                        <a href="{{ route('pompaa.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info w-100">
                            Form PM Pompa
                          </button>
                        </a>
                        @elseif($equipment->jenis == 16)
                        <a href="{{ route('spoot-cooling.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info w-100">
                            Form PM Spot Cooling
                          </button>
                        </a>
                        @elseif($equipment->jenis == 17)
                        <a href="{{route('water-mistt.create2',$equipment->id)}}">
                          <button type="button" class="btn btn-info w-100">
                            Form PM Water Mist
                          </button>
                        </a>
                        @elseif($equipment->jenis == 18)
                        <a href="{{route('chiller-centrifugall.create2',$equipment->id)}}">
                          <button type="button" class="btn btn-info w-100">
                            Form PM Chiller Centrifugal
                          </button>
                        </a>
                        @elseif($equipment->jenis == 7)
                        <a href="{{ route('mini-chiller.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Mini Chiller
                          </button>
                        </a>
                        @elseif($equipment->jenis == 8)
                        <a href="{{ route('evaporator-aircooler.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Evaporative Air Cooler
                          </button>
                        </a>
                        @elseif($equipment->jenis == 9)
                        <a href="{{ route('ahu.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List AHU
                          </button>
                        </a>
                        @elseif($equipment->jenis == 10)
                        <a href="{{ route('cooling-tower.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Cooling Tower
                          </button>
                        </a>
                        @elseif($equipment->jenis == 11)
                        <a href="{{ route('humidifier.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Humidifier
                          </button>
                        </a>
                        @elseif($equipment->jenis == 12)
                        <a href="{{ route('dehumidifier.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Dehumidifier
                        </a>
                        @elseif($equipment->jenis == 13)
                        <a href="{{ route('FCU.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Fan Cooling Unit
                          </button>
                        </a>
                        @elseif($equipment->jenis == 14)
                        <a href="{{ route('exhaust-fan.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Exhaust Fan
                          </button>
                        </a>
                        @elseif($equipment->jenis == 15)
                        <a href="{{ route('pompa.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Pompa
                          </button>
                        </a>
                        @elseif($equipment->jenis == 16)
                        <a href="{{ route('spot-cooling.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Spot Cooling
                          </button>
                        </a>
                        @elseif($equipment->jenis == 17)
                        <a href="{{ route('water-mist.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Water Mist
                          </button>
                        </a>
                        @elseif($equipment->jenis == 18)
                        <a href="{{ route('chiller-centrifugall.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Chiller Centrifugal
                          </button>
                        </a>
                        @elseif($equipment->jenis == 19)
                         <a href="{{route('ac-split3.create2',$equipment->id)}}">
                          <button type="button" class="btn btn-info w-100">
                            Form PM Ac Floor Standing
                          </button>
                        </a>
                        @elseif($equipment->jenis == 20)
                       <a href="{{route('ac-split4.create2',$equipment->id)}}">
                          <button type="button" class="btn btn-info w-100">
                            Form PM Ac Cassete
                          </button>
                        </a>
                        @elseif($equipment->jenis == 21)
                        <a href="{{route('ac-split2.create2',$equipment->id)}}">
                          <button type="button" class="btn btn-info w-100">
                            Form PM Split Duct
                          </button>
                        </a>
                        @endif
                      </div>
                      <div class="col-md-4 col-sm-12 mb-2">
                        <a href="{{ route('ts.create', $equipment->id) }}" type="button" class="btn btn-danger w-100">
                          Form TS
                        </a>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
          </div>
          @else
          <div class="form-actions">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-4 col-sm-12 mb-2">
                      <a href="{{ route('survey.create', $equipment->id) }}" class="btn btn-primary w-100">
                        <i class="fs-5"></i> Form Survey
                      </a>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-2">

                      @if($equipment->jenis == 1)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM Ac Split
                      </button>
                      @elseif($equipment->jenis == 2)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM AUHP
                      </button>
                      @elseif($equipment->jenis == 3)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM Cooled Water Chiller
                      </button>
                      @elseif($equipment->jenis == 3)
                      <button type="button" class="btn btn-light">
                        Task List AUHP
                      </button>
                      @elseif($equipment->jenis == 4)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM PAC
                      </button>
                      @elseif($equipment->jenis == 5)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">Task List Cold Storage</button>

                      @elseif($equipment->jenis == 6)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM Cooling Unit & AC Panel
                      </button>
                      @elseif($equipment->jenis == 7)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM Mini Chiller
                      </button>
                      @elseif($equipment->jenis == 8)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM Evaporative Air Cooler
                      </button>
                      @elseif($equipment->jenis == 9)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM AHU
                      </button>
                      @elseif($equipment->jenis == 10)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM Cooling Tower
                      </button>
                      @elseif($equipment->jenis == 11)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM Humidifier
                      </button>
                      @elseif($equipment->jenis == 12)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM Dehumidifier
                      </button>

                      @elseif($equipment->jenis == 13)

                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM Fan Cooling Unit
                      </button>
                      @elseif($equipment->jenis == 14)
                      <button>
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Form PM Exhaust Fan
                        </button>
                        @elseif($equipment->jenis == 15)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Form PM Pompa
                        </button>
                        @elseif($equipment->jenis == 16)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Form PM Spot Cooling
                        </button>
                        @elseif($equipment->jenis == 17)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Form PM Water Mist
                        </button>
                        @elseif($equipment->jenis == 18)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Form PM Chiller Centrisfugal
                        </button>
                        @elseif($equipment->jenis == 19)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Form PM Floor Standing
                        </button>
                        @elseif($equipment->jenis == 20)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Form PM Ac Cassette
                        </button>
                        @elseif($equipment->jenis == 21)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Form PM Split Duct
                        </button>
                        @elseif($equipment->jenis == 21)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Form PM Split Duct
                        </button>
                        @elseif($equipment->jenis == 22)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Air Cooled Chiller
                        </button>
                        @elseif($equipment->jenis == 23)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Centralize Chiller
                        </button>
                        @elseif($equipment->jenis == 24)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Ultrasonic Humidifier
                        </button>
                        @elseif($equipment->jenis == 25)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Piping & Accs
                        </button>
                        @elseif($equipment->jenis == 26)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Panel SCR
                        </button>
                        @elseif($equipment->jenis == 27)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          ATCS
                        </button>
                        @elseif($equipment->jenis == 28)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Lakos Filter
                        </button>
                        @endif
                    </div>
                    <div class="col-md-4 col-sm-12 mb-2">
                      <a href="{{ route('ts.create', $equipment->id) }}" type="button" class="btn btn-danger w-100">
                        Form TS
                      </a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          @endif
          @break
          @endforeach
          @else
          <div class="form-actions">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-4 col-sm-12 mb-2">
                      <a href="{{ route('survey.create', $equipment->id) }}" class="btn btn-primary w-100">
                        <i class="fs-5"></i> Form Survey
                      </a>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-2">

                      @if($equipment->jenis == 1)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM Ac Split
                      </button>
                      @elseif($equipment->jenis == 3)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM AUHP
                      </button>
                      @elseif($equipment->jenis == 2)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM Cooled Water Chiller
                      </button>
                      @elseif($equipment->jenis == 3)
                      <button type="button" class="btn btn-light">
                        Task List AUHP
                      </button>
                      @elseif($equipment->jenis == 4)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM PAC
                      </button>
                      @elseif($equipment->jenis == 5)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">Task List Cold Storage</button>

                      @elseif($equipment->jenis == 6)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM Cooling Unit & AC Panel
                      </button>
                      @elseif($equipment->jenis == 7)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM Mini Chiller
                      </button>
                      @elseif($equipment->jenis == 8)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM Evaporative Air Cooler
                      </button>
                      @elseif($equipment->jenis == 9)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM AHU
                      </button>
                      @elseif($equipment->jenis == 10)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM Cooling Tower
                      </button>
                      @elseif($equipment->jenis == 11)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM Humidifier
                      </button>
                      @elseif($equipment->jenis == 12)
                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM Dehumidifier
                      </button>

                      @elseif($equipment->jenis == 13)

                      <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                        Form PM Fan Cooling Unit
                      </button>
                      @elseif($equipment->jenis == 14)
                      <button>
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Form PM Exhaust Fan
                        </button>
                        @elseif($equipment->jenis == 15)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Form PM Pompa
                        </button>
                        @elseif($equipment->jenis == 16)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Form PM Spot Cooling
                        </button>
                        @elseif($equipment->jenis == 17)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Form PM Water Mist
                        </button>
                        @elseif($equipment->jenis == 18)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Form PM Chiller Centrifugal
                        </button>
                        @elseif($equipment->jenis == 19)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Form PM Floor Standing
                        </button>
                        @elseif($equipment->jenis == 20)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Form PM Ac Cassette
                        </button>
                        @elseif($equipment->jenis == 21)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Form PM Split Duct
                        </button>
                        @elseif($equipment->jenis == 21)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Form PM Split Duct
                        </button>
                        @elseif($equipment->jenis == 22)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Air Cooled Chiller
                        </button>
                        @elseif($equipment->jenis == 23)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Centralize Chiller
                        </button>
                        @elseif($equipment->jenis == 24)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Ultrasonic Humidifier
                        </button>
                        @elseif($equipment->jenis == 25)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Piping & Accs
                        </button>
                        @elseif($equipment->jenis == 26)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Panel SCR
                        </button>
                        @elseif($equipment->jenis == 27)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          ATCS
                        </button>
                        @elseif($equipment->jenis == 28)
                        <button type="button" class="btn btn-light w-100" onclick="CheckPM()">
                          Lakos Filter
                        </button>
                        @endif

                    </div>
                    <div class="col-md-4 col-sm-12 mb-2">
                      <a href="{{ route('ts.create', $equipment->id) }}" type="button" class="btn btn-danger w-100">
                        Form TS
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
            @endif
            <div class="row">
              <hr>
              <h6>Schedule Plan</h6>

              @foreach ($schedule as $data)
              <p style="background-color:{{$data->status}}">{{$data->schedule}}</p>
              @endforeach
            </div>
            <div class="row">
              <hr>
              <h6>History Equipment</h6>
              <table class="table table-borderless text-nowrap align-middle mb-0" id="example">
                <thead>
                  <th>No</th>
                  <th>Id</th>
                  <th>Site</th>
                  <th>Status</th>
                  <th>Jenis Equipment</th>
                  <th>Type</th>
                  <th>Date</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @php
                  $no =1;
                  @endphp
                  @foreach ($history as $data)
                  @php
                  $equipment = \App\Models\Equipment::find($data->id_equipment);
                  @endphp
                  <tr class="bg-light">
                    <td class="rounded-start bg-transparent">
                      <div class="d-flex align-items-center gap-3">
                        <div>
                          <span class="">{{$no++}}</span>
                        </div>
                      </div>
                    </td>
                    <td class="bg-transparent">
                      <!-- <i class=""></i>{{$equipment->brand}} -->
                      <i class=""></i><?php
                                      // Array untuk memetakan angka ke jenis
                                      $jenis = [
                                        1 => "AC Split",
                                        3 => "AHUP",
                                        2 => "Cooled Water Chiller",
                                        4 => "PAC",
                                        5 => "Cold Storage",
                                        6 => "Cooling Unit & AC Panel",
                                        7 => "Mini Chiller",
                                        8 => "Evaporative Air Cooler",
                                        9 => "AHU",
                                        10 => "Cooling tower",
                                        11 => "Humidifier",
                                        12 => "Dehumidifier",
                                        13 => "FCU (Fan Cooling Unit)",
                                        14 => "Exhaust Fan",
                                        15 => "Pompa",
                                        16 => "Spot Cooling",
                                        17 => "Water Mist",
                                        18 => "Chiller Centrifugal",
                                        19 => "Floor Standing",
                                        20 => "Ac Cassette",
                                        21 => "Split Duct",
                                        22 => "Air Cooled Chiller",
                                        23 => "Centralize Chiller",
                                        24 => "Ultrasonic Humidifier",
                                        25 => "Piping & Accs",
                                        26 => "Panel SCR",
                                        27 => "ATCS",
                                        28 => "Lakos Filter"
                                      ];
                                      // Ambil singkatan dari jenis berdasarkan angka
                                      $singkatan1 = isset($jenis[$equipment->jenis]) ? substr(str_replace(' ', '', ucwords(strtolower($jenis[$equipment->jenis]))), 0, 3) : '';
                                      $singkatan2 = strtoupper($equipment->kode_room);
                                      echo strtoupper($singkatan1 . $singkatan2 . $formattedId = sprintf('%05d', $equipment->id));
                                      // Mengambil karakter pertama


                                      ?>
                    </td>
                    <td class="bg-transparent">
                      {{$equipment->site}}
                    </td>
                    <td class="bg-transparent">
                      {{$data->approval}}
                    </td>
                    <td class="bg-transparent">
                      @if($equipment->jenis == 1)
                      {{ "AC Split" }}
                      @elseif($equipment->jenis == 3)
                      {{ "AHUP" }}
                      @elseif($equipment->jenis == 2)
                      {{ "Cooled Water Chiller" }}
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
                      @endif
                    </td>
                    <td class="bg-transparent">{{$data->type}}</td>
                    <td class="bg-transparent">{{$data->created_at}}</td>
                    <td class="text-end rounded-end bg-transparent">

                      @if($data->type != "Survei" && $data->type !="Troubleshoot")
                      @if($equipment->jenis == 1)
                      <div style="display: flex; align-items: center;">
                        
                        <a href=" {{ route('ac-split.print', $data->id) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>
                        <a href="{{ route('ac-split.show',$data->id) }}" class=""><button class="badge bg-primary" style="margin-right: 10px;">Detail</button></a>
                  @if(auth()->user()->role_sipm != 'user')

                        <a href="{{ route('ac-split.edit',$data->id) }}" class=""><button class="badge bg-warning" style="margin-right: 10px;">Edit</button></a>
  @endif                        @elseif($equipment->jenis == 2)
                        <div style="display: flex; align-items: center;">
                          <a href=" {{ route('acwc.print', $data->id) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>
                          <a href="{{ route('acwc.show',$data->id) }}" class=""><button class="badge bg-primary" style="margin-right: 10px;">Detail</button></a>
                  @if(auth()->user()->role_sipm != 'user')

                          <a href="{{ route('acwc.edit',$data->id) }}" class=""><button class="badge bg-warning" style="margin-right: 10px;">Edit</button></a>
                          @endif
                          @elseif($equipment->jenis == 3)
                          <div style="display: flex; align-items: center;">
                            <a href=" {{ route('auhp.print', $data->id) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>
                            <a href="{{ route('auhp.show',$data->id) }}" class=""><button class="badge bg-primary" style="margin-right: 10px;">Detail</button></a>
                  @if(auth()->user()->role_sipm != 'user')

                            <a href="{{ route('auhp.edit',$data->id) }}" class=""><button class="badge bg-warning" style="margin-right: 10px;">Edit</button></a>
                            @endif
                            @elseif($equipment->jenis == 4)
                            <div style="display: flex; align-items: center;">
                              <a href=" {{ route('pac.print', $data->id) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>
                              <a href="{{ route('pac.show',$data->id) }}" class=""><button class="badge bg-primary" style="margin-right: 10px;">Detail</button></a>
                  @if(auth()->user()->role_sipm != 'user')

                              <a href="{{ route('pac.edit',$data->id) }}" class=""><button class="badge bg-warning" style="margin-right: 10px;">Edit</button></a>
                              @endif
                              @elseif($equipment->jenis == 5)
                              <div style="display: flex; align-items: center;">
                              <a href=" {{ route('cs.print', $data->id) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>
                                <a href="{{ route('cs.show',$data->id) }}" class=""><button class="badge bg-primary" style="margin-right: 10px;">detail</button></a>
                  @if(auth()->user()->role_sipm != 'user')

                                <a href="{{ route('cs.edit',$data->id) }}" class=""><button class="badge bg-warning" style="margin-right: 10px;">Edit</button></a>
                                @endif
                                @elseif($equipment->jenis == 6)
                                <div style="display: flex; align-items: center;">
                              <a href=" {{ route('cu.print', $data->id) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>
                                  <a href="{{ route('cu.show',$data->id) }}" class=""><button class="badge bg-primary" style="margin-right: 10px;">Detail</button></a>
                  @if(auth()->user()->role_sipm != 'user')

                                  <a href="{{ route('cu.edit',$data->id) }}" class=""><button class="badge bg-warning" style="margin-right: 10px;">Edit</button></a>
                                  @endif
                                  @elseif($equipment->jenis == 7)
                                  <div style="display: flex; align-items: center;">
                                     <a href=" {{ route('mini-chilleer.print', $data->id) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>
                                    <a href="{{ route('mini-chilleer.show',$data->id) }}" class=""><button class="badge bg-primary" style="margin-right: 10px;">Detail</button></a>
                  @if(auth()->user()->role_sipm != 'user')

                                    <a href="{{ route('mini-chilleer.edit',$data->id) }}" class=""><button class="badge bg-warning" style="margin-right: 10px;">Edit</button></a>
                                    @endif
                                    @elseif($equipment->jenis == 8)
                                    <div style="display: flex; align-items: center;">
                                     <a href=" {{ route('evaporator-aircooler.print', $data->id) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>
                                      <a href="{{ route('evaporator-aircooler.show',$data->id) }}" class=""><button class="badge bg-primary" style="margin-right: 10px;">Detail</button></a>
                  @if(auth()->user()->role_sipm != 'user')

                                      <a href="{{ route('evaporator-aircooler.edit',$data->id) }}" class=""><button class="badge bg-warning" style="margin-right: 10px;">Edit</button></a>
                                      @endif
                                      @elseif($equipment->jenis == 9)
                                      <div style="display: flex; align-items: center;">
                                      <a href=" {{ route('ahu.print', $data->id) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>
                                        <a href="{{ route('ahu.show',$data->id) }}" class=""><button class="badge bg-primary" style="margin-right: 10px;">Detail</button></a>
                  @if(auth()->user()->role_sipm != 'user')

                                        <a href="{{ route('ahu.edit',$data->id) }}" class=""><button class="badge bg-warning" style="margin-right: 10px;">Edit</button></a>
                                        @endif
                                        @elseif($equipment->jenis == 10)
                                        <div style="display: flex; align-items: center;">
                                         <a href=" {{ route('cooling-tower.print', $data->id) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>
                                          <a href="{{ route('cooling-tower.show',$data->id) }}" class=""><button class="badge bg-primary" style="margin-right: 10px;">Detail</button></a>
                  @if(auth()->user()->role_sipm != 'user')

                                          <a href="{{ route('cooling-tower.edit',$data->id) }}" class=""><button class="badge bg-warning" style="margin-right: 10px;">Edit</button></a>
                                          @endif
                                          @elseif($equipment->jenis == 11)
                                          <div style="display: flex; align-items: center;">
                                            <a href="{{ route('humidifier.print', $data->id) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>
                                            <a href="{{ route('humidifier.show',$data->id) }}" class=""><button class="badge bg-primary" style="margin-right: 10px;">Detail</button></a>
                  @if(auth()->user()->role_sipm != 'user')

                                            <a href="{{ route('humidifier.edit',$data->id) }}" class=""><button class="badge bg-warning" style="margin-right: 10px;">Edit</button></a>
                                            @endif
                                            @elseif($equipment->jenis == 12)
                                            <div style="display: flex; align-items: center;">
                                            <a href="{{ route('dehumidifier.print', $data->id) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>
                                              <a href="{{ route('dehumidifierr.show',$data->id) }}" class=""><button class="badge bg-primary" style="margin-right: 10px;">Detail</button></a>
                  @if(auth()->user()->role_sipm != 'user')

                                              <a href="{{ route('dehumidifierr.edit',$data->id) }}" class=""><button class="badge bg-warning" style="margin-right: 10px;">Edit</button></a>
                                              @endif
                                              @elseif($equipment->jenis == 13)
                                              <div style="display: flex; align-items: center;">
                                                <a href="{{ route('fcuu.print', $data->id) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>
                                                <a href="{{ route('fcuu.show',$data->id) }}" class=""><button class="badge bg-primary" style="margin-right: 10px;">Detail</button></a>
                  @if(auth()->user()->role_sipm != 'user')

                                                <a href="{{ route('fcuu.edit',$data->id) }}" class=""><button class="badge bg-warning" style="margin-right: 10px;">Edit</button></a>
                                                @endif
                                                @elseif($equipment->jenis == 14)
                                                <div style="display: flex; align-items: center;">
                                                 <a href="{{ route('exhaust-fan.print', $data->id) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>
                                                  <a href="{{ route('exhaust-fan.show',$data->id) }}" class=""><button class="badge bg-primary" style="margin-right: 10px;">Detail</button></a>
                  @if(auth()->user()->role_sipm != 'user')

                                                  <a href="{{ route('exhaust-fan.edit',$data->id) }}" class=""><button class="badge bg-warning" style="margin-right: 10px;">Edit</button></a>
                                                  @endif
                                                  @elseif($equipment->jenis == 15)
                                                  <div style="display: flex; align-items: center;">
                                                    <a href="{{ route('pompaa.print', $data->id) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>
                                                    <a href="{{ route('pompaa.show',$data->id) }}" class=""><button class="badge bg-primary" style="margin-right: 10px;">Detail</button></a>
                  @if(auth()->user()->role_sipm != 'user')

                                                    <a href="{{ route('pompaa.edit',$data->id) }}" class=""><button class="badge bg-warning" style="margin-right: 10px;">Edit</button></a>
                                                    @endif
                                                    @elseif($equipment->jenis == 16)
                                                    <div style="display: flex; align-items: center;">
                                                      <a href="{{ route('spoot-cooling.print', $data->id) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>
                                                      <a href="{{ route('spoot-cooling.show',$data->id) }}" class=""><button class="badge bg-primary" style="margin-right: 10px;">Detail</button></a>
                  @if(auth()->user()->role_sipm != 'user')

                                                      <a href="{{ route('spoot-cooling.edit',$data->id) }}" class=""><button class="badge bg-warning" style="margin-right: 10px;">Edit</button></a>
                                                      @endif
                                                      @elseif($equipment->jenis == 17)
                                                      <div style="display: flex; align-items: center;">
                                                        <a href="{{ route('water-mist.print', $data->id) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>
                                                        <a href="{{ route('water-mist.show',$data->id) }}" class=""><button class="badge bg-primary" style="margin-right: 10px;">Detail</button></a>
                  @if(auth()->user()->role_sipm != 'user')

                                                        <a href="{{ route('water-mist.edit',$data->id) }}" class=""><button class="badge bg-warning" style="margin-right: 10px;">Edit</button></a>
                                                        @endif
                                                        @elseif($equipment->jenis == 18)
                                                        <div style="display: flex; align-items: center;">
                                                          <a href="{{ route('chiller-centrifugall.print', $data->id) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>
                                                          <a href="{{ route('chiller-centrifugall.show',$data->id) }}" class=""><button class="badge bg-primary" style="margin-right: 10px;">Detail</button></a>
                  @if(auth()->user()->role_sipm != 'user')

                                                          <a href="{{ route('chiller-centrifugall.edit',$data->id) }}" class=""><button class="badge bg-warning" style="margin-right: 10px;">Edit</button></a>
  @endif                                                        @elseif($equipment->jenis == 19)
                                                        <div style="display: flex; align-items: center;">
                                                         <a href=" {{ route('ac-split3.print', $data->id) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>

                                                          <a href="{{ route('ac-split3.show',$data->id) }}" class=""><button class="badge bg-primary" style="margin-right: 10px;">Detail</button></a>
                  @if(auth()->user()->role_sipm != 'user')

                                                          <a href="{{ route('ac-split3.edit',$data->id) }}" class=""><button class="badge bg-warning" style="margin-right: 10px;">Edit</button></a>
  @endif                                                        @elseif($equipment->jenis == 20)
                                                        <div style="display: flex; align-items: center;">
                                                         <a href=" {{ route('ac-split4.print', $data->id) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>

                                                          <a href="{{ route('ac-split4.show',$data->id) }}" class=""><button class="badge bg-primary" style="margin-right: 10px;">Detail</button></a>
                  @if(auth()->user()->role_sipm != 'user')

                                                          <a href="{{ route('ac-split4.edit',$data->id) }}" class=""><button class="badge bg-warning" style="margin-right: 10px;">Edit</button></a>
  @endif                                                        @elseif($equipment->jenis == 21)
                                                        <div style="display: flex; align-items: center;">
                                                         <a href=" {{ route('ac-split2.print', $data->id) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>

                                                          <a href="{{ route('ac-split2.show',$data->id) }}" class=""><button class="badge bg-primary" style="margin-right: 10px;">Detail</button></a>
                  @if(auth()->user()->role_sipm != 'user')

                                                          <a href="{{ route('ac-split2.edit',$data->id) }}" class=""><button class="badge bg-warning" style="margin-right: 10px;">Edit</button></a>
                                                          @endif
                                                          @endif
                                                          @else
                                                          <div style="display: flex; align-items: center;">

                                                            @if ($data->type == "Survei")
                                                            <a href=" {{ route('survey.print', $data->id_act) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>
                                                            <a href=" {{ route('formberitaacara.show', $data->id_act) }}" class="" style="margin-right: 10px;"><button class="badge bg-primary">Detail</button></a>
                                                            <a href=" {{ route('formberitaacara.edit', $data->id_act) }}" class="" style="margin-right: 10px;"><button class="badge bg-warning">Edit</button></a>
                                                            @else
                                                            <a href=" {{ route('troubleshoot.print', $data->id_act) }}" target="_blank" class="" style="margin-right: 10px;"><button class="badge bg-success">Print</button></a>
                                                            <a href=" {{ route('troubleshoot.show', $data->id_act) }}" class="" style="margin-right: 10px;"><button class="badge bg-primary">Detail</button></a>
                                                            <a href=" {{ route('troubleshoot.edit', $data->id_act) }}" class="" style="margin-right: 10px;"><button class="badge bg-warning">Edit</button></a>

                                                            @endif
                                                            @endif
                                                          @if(auth()->user()->role_sipm != 'user')

                                                            <form action="{{ route('history.destroy', $data->id) }}" method="POST">
                                                              @csrf
                                                              @method('DELETE')
                                                              <button class="badge bg-danger" type="submit">Delete</button>
                                                             </form>
                                                          @endif
                                                          @if($data->approval == 'Waiting') 
                                                          @if(auth()->user()->role_sipm == 'spv')
                                                            <a href=" {{ route('history.approve', $data->id_act) }}" class="" style="margin-right: 10px;"><button class="badge bg-warning">Approve</button></a>
                                                          @endif  
                                                          @endif  


                                                          </div>
                                                        </div>
                    </td>
                  </tr>
                  @endforeach

              </table>
            </div>
            <!--/span-->
            <!--/span-->
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function CheckPM() {
      alert("Belum ada Jadwal PM hari ini / Lewat dari hari ini");
    }
  </script>
  @endsection