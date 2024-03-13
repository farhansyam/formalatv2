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
            <form action="{{ route('kapasitas.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="">kapasitas</label>
                  <input type="text" name="kapasitas" class="form-control" id=""  value=""
                    required="">
                  <label for="">Satuan</label>
                  <select name="satuan" id="" class="form-select">
                    <option value="PK">PK</option>
                    <option value="RTU">RTU</option>
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