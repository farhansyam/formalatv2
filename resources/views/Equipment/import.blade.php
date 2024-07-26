@extends('layouts.back2')
@section('content')
   <style>
        .import-form {
            display: flex;
            align-items: center;
        }

        .import-form .form-control {
            flex: 1;
            margin-right: 10px;
        }

        .import-form .btn {
            white-space: nowrap;
        }
    </style>
 <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form class="import-form" action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input class="form-control" type="file" name="file" required>
            <button class="btn btn-primary" type="submit">Import</button>
        </form>
    </div>
@endsection
