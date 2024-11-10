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
            <h4 class="card-title mb-0 text-center">Edit Brand</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('brand.update',$brand->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="">Brand</label>
                  <input type="text" name="brand" class="form-control" id=""  value="{{$brand->brand}}"
                    required="">
                  <input type="hidden" name="id" class="form-control" id=""  value="{{$brand->id}}">
              <button class="btn btn-info px-4 mt-3" type="submit">
                Submi
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
          

@endsection