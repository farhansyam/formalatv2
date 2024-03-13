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
            <h4 class="card-title mb-0 text-center">Edit Area</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('area.update',$area->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="">Site</label>
                  <input type="text" name="area" class="form-control" id=""  value="{{$area->area}}"
                    required="">
                  <label for="">Area Site</label>
                  <input type="text" name="site" class="form-control" id=""  value="{{$area->site}}"
                    required="">
                  <input type="hidden" name="id" class="form-control" id=""  value="{{$area->id}}">
              <button class="btn btn-info px-4 mt-3" type="submit">
                Submi
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
          

@endsection