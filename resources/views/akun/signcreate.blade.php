@extends('layouts.back2')
@section('content')
<div class="container-fluid">
  <section>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="border-bottom title-part-padding">
            <h4 class="card-title mb-0 text-center">My Signature</h4>
          </div>
          <script src="{{ asset('dist/libs/jquery/dist/jquery.min.js') }}"></script>
          <div class="card-body">
                <form action="{{ route('akun.signstore') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input class="form-control" type="file" name="sign"><br><br>
                  <button class="btn btn-primary">Tambah</button>
                </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
