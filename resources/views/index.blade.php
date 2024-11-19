@extends('layouts.back2')

@section('content')
@if($equipment == 0)
p
@else
<div class="container-fluid">
  <div class="row">
    @if (auth()->user()->role_sipm == 'user')
    <h2>Welcome {{auth()->user()->role_sipm}}</h2>
    @elseif (auth()->user()->role_sipm == 'spv')  
    @elseif (auth()->user()->role_sipm == 'team_lead')  
    @else
      <div class="col-md-12">
      
      @foreach ($customer as $data)
      <br>
      <h5>Customer : {{$data->nama}}</h5>
      <div class="row" style="background-color: #9edda8;">
        <div class="col-sm-6 col-xl-4">
          <br>

          <div class="card bg-light-warning shadow-none">
            <div class="card-body p-2">
              @php
              $pending = $data->itemschedules()
              ->where('created_at', '>=', Carbon\Carbon::now()->startOfMonth())
              ->where('status', '#ffb6b6')
              ->count();
              $progres = $data->itemschedules()
              ->where('created_at', '>=', Carbon\Carbon::now()->startOfMonth())
              ->where('status', '#FFAE1F')
              ->count();
              $completed = $data->itemschedules()
              ->where('created_at', '>=', Carbon\Carbon::now()->startOfMonth())
              ->where('status', '#13DEB9')
              ->count();

              // $totalPMThisMonth = $data->schedulesthismonth()->count();

              // Hitung persentase jika totalPMThisMonth tidak sama dengan 0
              // $percentage = ($totalPMThisMonth != 0) ? ($completedPMThisMonth / $totalPMThisMonth) * 100 : 0;
              @endphp

              <h6 class="mb-0 ms-3">TOTAL PM THIS MONTH : <br><br>
               <div class="d-flex justify-content-between mt-2">
                <div class="bg-danger text-white px-2 py-1 rounded">Pending: {{ $pending }}</div>
                <div class="bg-warning text-white px-2 py-1 rounded">In Progress: {{ $progres }}</div>
                <div class="bg-success text-white px-2 py-1 rounded">Completed: {{ $completed }}</div>
                </div>
              </h6>
            </div>
          </div>

        </div>
        <div class="col-sm-6 col-xl-4">
          <br>

          <div class="card bg-light-danger shadow-none">
            <div class="card-body p-2">
                   @php

                $pendinglastmonth = $data->itemSchedules()
                ->where('created_at', '>=', Carbon\Carbon::now()->subMonth()->startOfMonth())
                ->where('created_at', '<', Carbon\Carbon::now()->startOfMonth())
                 ->where('status', '#ffb6b6')
                 ->count();
                $progreslastmonth = $data->itemSchedules()
                ->where('created_at', '>=', Carbon\Carbon::now()->subMonth()->startOfMonth())
                ->where('created_at', '<', Carbon\Carbon::now()->startOfMonth())
                 ->where('status', '#FFAE1F')
                 ->count();
                $completelastmonth = $data->itemSchedules()
                ->where('created_at', '>=', Carbon\Carbon::now()->subMonth()->startOfMonth())
                ->where('created_at', '<', Carbon\Carbon::now()->startOfMonth())
                 ->where('status', '#13DEB9')
                 ->count();

                  @endphp
                 <h6 class="mb-0 ms-3">TOTAL PM LAST MONTH : <br><br>
               <div class="d-flex justify-content-between mt-2">
                <div class="bg-danger text-white px-2 py-1 rounded">Pending: {{ $pendinglastmonth }}</div>
                <div class="bg-warning text-white px-2 py-1 rounded">In Progress: {{ $progreslastmonth }}</div>
                <div class="bg-success text-white px-2 py-1 rounded">Completed: {{ $completelastmonth }}</div>
        </div>
              </h6>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-4">
          <br>

          <div class="card bg-light-primary shadow-none">
            <div class="card-body p-2">
              <h6 class="mb-0 ms-3">TOTAL PM 2 MONTH AGO : <br><br> @php

                $pending2month = $data->itemSchedules()
                ->where('created_at', '>=', Carbon\Carbon::now()->subMonths(2)->startOfMonth())
                ->where('created_at', '<', Carbon\Carbon::now()->subMonths(1)->startOfMonth())
                ->where('status', '#ffb6b6')
                 ->count();
                $progres2month = $data->itemSchedules()
                ->where('created_at', '>=', Carbon\Carbon::now()->subMonths(2)->startOfMonth())
                ->where('created_at', '<', Carbon\Carbon::now()->subMonths(1)->startOfMonth())
                ->where('status', '#FFAE1F')
                 ->count();
                $complete2month = $data->itemSchedules()
                ->where('created_at', '>=', Carbon\Carbon::now()->subMonths(2)->startOfMonth())
                ->where('created_at', '<', Carbon\Carbon::now()->subMonths(1)->startOfMonth())
                ->where('status', '#13DEB9')
                 ->count();
                  @endphp
                 <div class="d-flex justify-content-between mt-2">
  <a href="{{ route('eq', ['customer' => $data->id, 'bulan' => now()->format('m')]) }}" 
     class="bg-danger text-white px-2 py-1 rounded text-decoration-none">
    Pending: {{ $pending }}
  </a>
  <a href="{{ route('eq', ['customer' => $data->id, 'bulan' => now()->format('m'), 'status' => 'progress']) }}" 
     class="bg-warning text-white px-2 py-1 rounded text-decoration-none">
    In Progress: {{ $progres }}
  </a>
  <a href="{{ route('eq', ['customer' => $data->id, 'bulan' => now()->format('m'), 'status' => 'completed']) }}" 
     class="bg-success text-white px-2 py-1 rounded text-decoration-none">
    Completed: {{ $completed }}
  </a>
</div>
              </h6>
            </div>
          </div>
        </div>

      </div>
      @endforeach <br>
    </div>
 
    @endif
  </div>
</div>
@endif
@endsection