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
        <h4 class="card-title mb-0 text-center">Tambah PM Reguler</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('reguler.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="">Reguler</label>
              <input type="text" name="reguler" class="form-control" id="" value="" required="">

            </div>
            <div class="col-md-6 mb-3">
              <label for="">Type</label>
                <select name="type" id="" class="form-select">
                  <option value="1">Hari</option>
                  <option value="2">Bulan</option>
                  <option value="3">Tahun</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="">Value</label>
              <input type="number" name="value" class="form-control" id="" value="" required="">

            </div>
            <button class="btn btn-info px-4 mt-3" type="submit">
              Submit
            </button>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection