@extends('layouts.back2')
@section('content')

<div id="reader" style="display: none;"></div>
<div id="searchByIdForm">
    <h4>Search By Id</h4>
    <form action="{{route('equipment.search')}}" method="post">
        <div class="row">
            @csrf
            <div class="col-lg-6">
                <input type="text" name="id" class="form-control">
            </div>
            <div class="col-lg-5">
                <button type="submit" class="btn btn-primary">Search</button>

            </div>
        </div>
    </form>
    <span class="" style="background-color: #ffb9b9;">Equipment tidak ditemukan</span>
</div>
<br><br>
<div id="searchByQRForm" style="display: none;">
    <h4>Scan QR Code</h4>
    <button onclick="startQRScanner()" class="btn btn-success">Start QR Scanner</button>
</div>

<button onclick="showSearchById()" class="btn btn-primary">Search by ID</button>
<button onclick="showSearchByQR()" class="btn btn-success">Search by QR</button>

<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<script>
    let scanner;

    function startQRScanner() {
        document.getElementById("reader").style.display = "block";
        document.getElementById("searchByIdForm").style.display = "none";
        document.getElementById("searchByQRForm").style.display = "none";

        const onScanSuccess = (decodedText, decodedResult) => {
            console.log(`Code matched = ${decodedText}`, decodedResult);
            window.location.href = decodedText;
        }

        const onScanFailure = (error) => {
            console.warn(`Code scan error = ${error}`);
        }

        const html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: {
                    width: 250,
                    height: 250
                }
            },
            /* verbose= */
            false
        );
        scanner = html5QrcodeScanner;
        scanner.render(onScanSuccess, onScanFailure);
    }

    function showSearchById() {
        if (scanner) {
            scanner.stop();
        }
        document.getElementById("reader").style.display = "none";
        document.getElementById("searchByIdForm").style.display = "block";
        document.getElementById("searchByQRForm").style.display = "none";
    }

    function showSearchByQR() {
        if (scanner) {
            scanner.stop();
        }
        document.getElementById("reader").style.display = "none";
        document.getElementById("searchByIdForm").style.display = "none";
        document.getElementById("searchByQRForm").style.display = "block";
    }
</script>
@endsection