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
            <h4 class="card-title mb-0 text-center">Tambah kapasitas</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('kapasitas.update',$kapasitas->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="">kapasitas</label>
                  <input type="text" name="kapasitas" class="form-control" id=""  value="{{$kapasitas->kapasitas}}"
                    required="">
                  <label for="">Satuan</label>
                  <input type="text" name="satuan" class="form-control" id=""  value="{{$kapasitas->satuan}}"
                    required="">
                  <input type="hidden" name="id" class="form-control" id=""  value="{{$kapasitas->id}}">
              <button class="btn btn-info px-4 mt-3" type="submit">
                Submi
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
          

@endsection