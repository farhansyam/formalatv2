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
            <h4 class="card-title mb-0 text-center">Tambah Customer</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="">Customer</label>
                  <input type="text" name="nama" class="form-control" id=""  value=""
                    required="">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="">Bidang Usaha</label>
                  <input type="text" name="bidang" class="form-control" id=""  value=""
                    required="">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="">Alamat</label>
                  <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
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