@extends('layouts.back2')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
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
        <form action="{{ route('authority.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-6 mb-8">
              <label for="">Email</label>
              <select name="email" class="form-select select2" id="">
                @foreach ($users as $data)
                <option value="{{$data->email}}">{{$data->name}}</option>
                @endforeach
              </select>
            </div>
            <button class="btn btn-info px-4 mt-3" type="submit">
              Submit
            </button>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script>
  $('.select2').select2();
</script>

@endsection