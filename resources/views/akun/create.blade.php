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
        <!-- Tambahkan CSS Select2 -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

        <div class="col-md-12 mb-8">
            <label for="username">Username</label>
            <input type="text" name="name" class="form-control" id="username" value="" required>
        </div>
        <div class="col-md-12 mb-8">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="" required>
        </div>
        <div class="col-md-12 mb-8 d-none" id="customer-field">
            <label for="customer">Customer</label>
            <select name="customer" class="form-control" id="customer">
                @foreach ($customer as $c)
                    <option value="{{$c->nama}}">{{$c->nama}}</option>
                @endforeach
            </select>
        </div>  
        <div class="col-md-12 mb-8 d-none" id="site-field">
            <label for="site">Site</label>
            <select name="site[]" class="form-control" id="site" multiple="multiple">
                @foreach ($area as $s)
                    <option value="{{$s->site}}">{{$s->site}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-12 mb-8">
            <label for="role">Role</label>
            <select name="role" id="role" class="form-control" required>
                <option value="admin">Admin</option>
                <option value="customer">Customer</option>
                <option value="spv">SPV</option>
                <option value="team_lead">Team Lead</option>
            </select>
        </div>
        <div class="col-md-12 mb-8">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" required>
        </div>
    </div>

    <!-- Tambahkan JavaScript Select2 dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function () {
            // Inisialisasi Select2 untuk elemen site
            $('#site').select2({
                tags: true,
                placeholder: "Select or add sites",
                allowClear: true
            });

            // Fungsi untuk memperbarui field yang perlu ditampilkan
            function updateFields() {
                const role = $('#role').val();
                const customerField = $('#customer-field');
                const siteField = $('#site-field');

                if (role === 'user') {
                    customerField.removeClass('d-none');
                    siteField.addClass('d-none');
                    $('#customer').prop('required', true);
                    $('#site').prop('required', false);
                } else if (role === 'admin') {
                    customerField.addClass('d-none');
                    siteField.addClass('d-none');
                    $('#customer').prop('required', false);
                    $('#site').prop('required', false);
                } else {
                    customerField.addClass('d-none');
                    siteField.removeClass('d-none');
                    $('#customer').prop('required', false);
                    $('#site').prop('required', true);
                }
            }

            // Panggil fungsi updateFields saat halaman dimuat pertama kali
            updateFields();

            // Event listener untuk memperbarui field saat role diubah
            $('#role').change(updateFields);
        });
    </script>


              <button class="btn btn-info px-4 mt-3" type="submit">
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
          

@endsection