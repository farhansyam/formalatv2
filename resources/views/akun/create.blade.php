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
            <h4 class="card-title mb-0 text-center">Tambah User</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('akun.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
              <div class="row">
                <div class="col-md-6 mb-8">
                  <label for="">Username</label>
                  <input type="text" name="name" class="form-control" id=""  value=""
                    required="">
                </div>
                <div class="col-md-6 mb-8">
                  <label for="">Email</label>
                  <input type="email" name="email" class="form-control" id=""  value=""
                    required="">
                </div>
                <div class="col-md-6 mb-8">
                  <label for="">Password</label>
                  <input type="password" name="password" id="" cols="30" rows="10" class="form-control">
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