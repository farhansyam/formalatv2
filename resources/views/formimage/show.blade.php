   <h5 class="text-center" style="background-color: black;color:white">Foto Equipment</h5>
   <table class="table table-bordered" id="personelTeamTable">
       <thead>
           <tr>
               <th>No</th>
               <th>Gambar</th>
               <th>Info</th>
               <th>Keterangan</th>
           </tr>
       </thead>
       <tbody>
           <!-- Initial row -->
           @php
           $n = 1;
           @endphp
           @foreach ($gambar as $data)
           <tr>
               <td>{{$n++}}</td>
               <td><img src="{{asset('gambar')}}/{{$data->gambar}}" alt="" height="200"></td>
               <td><input value="{{$data->info}}" disabled type="text" class="form-control" name="keterangan[]"></td>
               <td><input value="{{$data->keterangan}}" disabled type="text" class="form-control" name="keterangan[]"></td>
           </tr>

           @endforeach
       </tbody>
   </table>
   <br>
   <h5 class="text-center" style="background-color: black;color:white">Foto Parameter</h5>
   <table class="table table-bordered" id="personelTeamTable">
       <thead>
           <tr>
               <th>No</th>
               <th>Gambar</th>
               <th>Info</th>
               <th>Keterangan</th>
           </tr>
       </thead>
       <tbody>
           <!-- Initial row -->
           @php
           $n = 1;
           @endphp
           @foreach ($gambar2 as $data)
           <tr>
               <td>{{$n++}}</td>
               <td><img src="{{asset('gambar2')}}/{{$data->gambar}}" alt="" height="200"></td>
               <td><input value="{{$data->info}}" disabled type="text" class="form-control" name="keterangan[]"></td>
               <td><input value="{{$data->keterangan}}" disabled type="text" class="form-control" name="keterangan[]"></td>
           </tr>

           @endforeach
       </tbody>
   </table>
   <br>