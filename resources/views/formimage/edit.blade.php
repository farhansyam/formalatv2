<br><br>
                    <h5 class="text-center" style="background-color: black;color:white">Foto Equipment Sebelumnya</h5>
                    <table class="table table-bordered" id="personelTeamTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Info</th>
                                <th>Keterangan</th>
                                <th>Option</th>
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
                                <td><input disabled value="{{$data->info}}" disabled type="text" class="form-control" name="keterangan[]"></td>
                                <td><input disabled value="{{$data->keterangan}}" disabled type="text" class="form-control" name="keterangan[]"></td>
                                <td>
                                    <form action="{{ route('gambar.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger mx-1 btn-block" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <h5 class="text-center" style="background-color: black;color:white">Foto Parameter Sebelumnya</h5>
                    <table class="table table-bordered" id="personelTeamTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Info</th>
                                <th>Keterangan</th>
                                <th>Opsi</th>
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
                                <td><input disabled value="{{$data->info}}" disabled type="text" class="form-control" name="keterangan[]"></td>
                                <td><input disabled value="{{$data->keterangan}}" disabled type="text" class="form-control" name="keterangan[]"></td>
                                <td>
                                    <form action="{{ route('gambar2.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger mx-1 btn-block" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>