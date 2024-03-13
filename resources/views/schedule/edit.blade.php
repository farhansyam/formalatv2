@extends('layouts.back2')
@section('content')
<!-- --------------------------------------------------- -->
<!-- Header End -->
<!-- --------------------------------------------------- -->
<!-- --------------------------------------------------- -->
<!--  Form Inputs Grid Start -->
<!-- --------------------------------------------------- -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="border-bottom title-part-padding">
        <h4 class="card-title mb-0 text-center">Tambah Schedule</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('schedule.update',$schedule->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="">Schedule</label>
              <input type="date" name="schedule" class="form-control" id="" value="{{$schedule->schedule}}" required="">
              <input type="hidden" name="id" class="form-control" id="" value="{{$schedule->id}}" required="">
              <label for="">Id Equipment</label>
              <select name="id_equipment" id="" class="form-select" required>
                <option value="{{$schedule->id}}">{{$formattedId = sprintf('%05d', $schedule->id_equipement)}}EQ</option>

                @foreach ($equipment as $data)
                <option value="{{$data->id}}">{{$formattedId = sprintf('%05d', $data->id)}}EQ</option>
                @endforeach
              </select>
              <button class="btn btn-info px-4 mt-3" type="submit">
                Submit
              </button>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection