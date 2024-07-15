<br>
<h5 class="text-center" style="background-color: black;color:white">Tambahkan Foto Equipment</h5>
<table class="table table-bordered" id="GambarTable">
    <thead>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Info</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- Initial row -->
        <tr>
            <td>1</td>
            <td><input type="file" class="form-control" name="gambar[]" required></td>
            <td><input type="text" class="form-control" name="info[]" required></td>
            <td><select name="keterangangambar[]" id="" class="form-select">
                    <option value="Before">Before</option>
                    <option value="After">After</option>
                </select></td>
            <td></td>
        </tr>
    </tbody>
</table>
<button type="button" class="btn btn-primary" id="addGambar">Add Gambar</button>
<br>
<script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>

<script>
    $(document).ready(function() {
        var personelCounter = 1;
        var pekerjaanCounter = 1;

        // Add a new row for Nama Personel Team
        $("#addGambar").click(function() {
            personelCounter++;
            var newRow = `
        <tr>
            <td>${personelCounter}</td>
            <td><input type="file" class="form-control" name="gambar[]"></td>
            <td><input type="text" class="form-control" name="info[]"></td>
            <td><select name="keterangangambar[]" id="" class="form-select">
                      <option value="Before">Before</option>
                      <option value="After">After</option>
                    </select></td>
            <td><button type="button" class="btn btn-danger remove-row">X</button></td>

        </tr>
    `;
            $("#GambarTable tbody").append(newRow);
        });
    });


    // Remove a row from the Nama Personel Team table
    $("#GambarTable").on("click", ".remove-row", function() {
        $(this).closest("tr").remove();
        personelCounter--;
        // Update the row numbers
        $("#GambarTable tbody tr").each(function(index) {
            $(this).find("td:first").text(index + 1);
        });
    });
</script>
<br>
<h5 class="text-center" style="background-color: black;color:white">Tambahkan Foto Parameter</h5>
<table class="table table-bordered" id="GambarTableParameter">
    <thead>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Info</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- Initial row -->
        <tr>
            <td>1</td>
            <td><input type="file" class="form-control" name="gambar2[]" required></td>
            <td><input type="text" class="form-control" name="info2[]" required></td>
            <td><select name="keterangangambar2[]" id="" class="form-select">
                    <option value="Before">Before</option>
                    <option value="After">After</option>
                </select></td>
            <td></td>
        </tr>
    </tbody>
</table>
<button type="button" class="btn btn-primary" id="addGambar2">Add Gambar</button>
<br>
<script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>

<script>
    $(document).ready(function() {
        var personelCounter = 1;
        var pekerjaanCounter = 1;

        // Add a new row for Nama Personel Team
        $("#addGambar2").click(function() {
            personelCounter++;
            var newRow = `
        <tr>
            <td>${personelCounter}</td>
            <td><input type="file" class="form-control" name="gambar2[]"></td>
            <td><input type="text" class="form-control" name="info2[]"></td>
            <td><select name="keterangangambar2[]" id="" class="form-select">
                      <option value="Before">Before</option>
                      <option value="After">After</option>
                    </select></td>
            <td><button type="button" class="btn btn-danger remove-row">X</button></td>

        </tr>
    `;
            $("#GambarTableParameter tbody").append(newRow);
        });
    });


    // Remove a row from the Nama Personel Team table
    $("#GambarTableParameter").on("click", ".remove-row", function() {
        $(this).closest("tr").remove();
        personelCounter--;
        // Update the row numbers
        $("#GambarTableParameter tbody tr").each(function(index) {
            $(this).find("td:first").text(index + 1);
        });
    });
</script>