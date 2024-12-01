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
                                 <div class="card-body">
            <div class="d-flex align-items-center mb-3">
                <a href="{{ route('equipment.export') }}" class="me-2">
                  <button class="btn btn-success">Export All Equipment to Excel</button>
                </a>
                </div>
                </div>
            </div>
        </div>
        <form action="{{ route('history.export') }}" method="GET">
            @csrf
    <div class="row mb-3">
        <div class="col-md-3">
            <select name="site" class="form-select">
                <option value="all">All Site</option>
                @foreach ($area as $site)
                    <option value="{{ $site->area }}">{{ $site->area }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
           <select name="jenis" id="" class="form-select">
                <option value="all">All Type</option>
                <option value="1">Ac Split</option>
                <option value="19">Floor Standing</option>
                <option value="20">Ac Cassette</option>
                <option value="21">Split Duct</option>
                <option value="2">Cooled Water Chiller</option>
                <option value="9">AHU</option>
                <option value="14">Exhaust Fan</option>
              </select>
        </div>
        <div class="col-md-3">
            <input type="date" name="start_date" class="form-control" placeholder="Start Date">
        </div>
        <div class="col-md-3">
            <input type="date" name="end_date" class="form-control" placeholder="End Date">
        </div>
    </div>
    <button type="submit" class="btn btn-success">Export History</button>
</form>

</div>

</section>
<!-- --------------------------------------------------- -->
<!--  Form Input disableds Grid End -->
<!-- --------------------------------------------------- -->
</div>
@endsection