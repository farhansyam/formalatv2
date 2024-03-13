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
        <h4 class="card-title mb-0 text-center">Edit Room</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('room.update',$room->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="">Room</label>
              <input type="text" name="room" class="form-control" id="" value="{{$room->room}}" required="">
              <label for="">Kode</label>
              <input type="text" name="kode" class="form-control" id="" value="{{$room->kode}}" maxlength="3" required="">
              <input type="hidden" name="id" class="form-control" id="" value="{{$room->id}}">
              <button class="btn btn-info px-4 mt-3" type="submit">
                Submit
              </button>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection