@extends('layouts.back2')
@section('content')
<!-- --------------------------------------------------- -->
<!-- Header End -->
<!-- --------------------------------------------------- -->
<div class="container-fluid">
  <!-- --------------------------------------------------- -->
  <!--  Form Inputs Grid Start -->
  <!-- --------------------------------------------------- -->
  <section>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="border-bottom title-part-padding">
            <h4 class="card-title mb-0 text-center">My Signature</h4>
          </div>
          <script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>
          <div class="card-body">
              @if(auth()->user()->sign != '0')
               <img src="{{ asset(auth()->user()->sign) }}" alt="Signature" width="200">
              <a href="{{route('akun.signcreate')}}"><button class="btn btn-primary">Edit</button></a><br><br>

              @else
              <h2>Belum Ada</h2>
              <a href="{{route('akun.signcreate')}}"><button class="btn btn-primary">Tambah</button></a><br><br>
              @endif
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- --------------------------------------------------- -->
  <!--  Form Inputs Grid End -->
  <!-- --------------------------------------------------- -->
</div>
</div>

</div>

@endsection