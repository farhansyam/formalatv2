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
                        <h4 class="card-title mb-0 text-center">Task List AHU</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('ahu.update',$ahu->id) }}" id="myForm" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
  <table class="table table-bordered" id="">
        <tr>
            <th>Tanggal</th>
            <th>Engineer List</th>
        </tr>
        <tr>
            <td><input  type="date" name="tanggal" required class="form-control" value="{{$ahu->tanggal}}">    
<br>
                 <label for="">Jadwal</label>
                <select name="tanggal_schedule" id="" required class="form-select" style="color: black">
                    <option value="{{$ahu->tanggal_schedule}}">{{$ahu->tanggal_schedule}}</option>
                </select></td>            <td><textarea name="enginerlist" id="" cols="60" rows="10">{{$ahu->enginer_list}}</textarea></td>
        </tr>
        <tr>
            <th>Start Time</th>
            <th>Stop Time</th>
        </tr>
        <tr>
<td><input type="time" class="form-control" name="start" value="{{$ahu->start}}" required></td>
            <td><input  type="time" name="end" class="form-control" value="{{$ahu->end}}" id=""></td>
        </tr>
            
</table>
                            <table class="table table-bordered" id="personelTeamTable">
                                <thead>
                                    <h5 class="text-center" style="background-color: black;color:white">A.Filter AHU</h5>

                                    <tr>
                                        <th>No</th>
                                        <th>Item Checked</th>
                                        <th>Standard Condition</th>
                                        <th>Freq (Month)</th>
                                        <th>Actual Checked</th>
                                        <th></th>
                                        <th>Remark</th>
                                    </tr>

                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>Before</th>
                                        <th>After</th>
                                        <th></th>
                                    </tr>

                                </thead>
                                <tbody>

                                    <input type="hidden" required name="id" value="{{ $id }}">
                                    <input type="hidden" required name="id2" value="{{ $id2 }}">
                                    <tr>
                                        <td>1</td>
                                        <td>Check Pressure Different in/out Prefilter</td>
                                        <td>30-100 pa</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q1) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q1[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Check Pressure Different in/out Bagfilter (Pocket Filter)</td>
                                        <td>70-225 pa</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q2) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q2[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Cleaning Pre Filter</td>
                                        <td>Clean</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q3) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q3[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Cleaning Bag Filter</td>
                                        <td>Clean</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q4) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q4[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Replace Pre Filter</td>
                                        <td>3 Month</td>
                                        <td>3M</td>
                                        @foreach (explode(',',$ahu->q5) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q5[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Replace Bag Filter</td>
                                        <td>248 pa</td>
                                        <td>3M</td>
                                        @foreach (explode(',',$ahu->q6) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q6[]" value="{{$val}}"></td>
                                        @endforeach

                                    </tr>
                                </tbody>
                            </table>

                            <table class="table table-bordered" id="personelTeamTable">
                                <thead>
                                    <h5 class="text-center" style="background-color: black;color:white">B.Cooling Coil</h5>

                                    <tr>
                                        <th>No</th>
                                        <th>Item Checked</th>
                                        <th>Standard Condition</th>
                                        <th>Freq (Month)</th>
                                        <th>Actual Checked</th>
                                        <th></th>
                                        <th>Remark</th>
                                    </tr>

                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>Before</th>
                                        <th>After</th>
                                        <th></th>
                                    </tr>

                                </thead>

                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Check Pressure Different in/out Cooling Coil</td>
                                        <td>30-100 pa</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q7) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q7[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Check temperature Cooling Coil</td>
                                        <td>10-12°C</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q8) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q8[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Inspect Temperature Water in & out</td>
                                        <td>Delta T 3-5°C</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q9) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q9[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Inspect Pressure Water in & out</td>
                                        <td>D.P 0,5 - 1 Bar</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q10) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q10[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Inspect Manual valve</td>
                                        <td>Normal</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q11) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q11[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Inspect Motorize valve</td>
                                        <td>Normal</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q12) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q12[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Cleaning Cooling Oil</td>
                                        <td>Clean</td>
                                        <td>3M</td>
                                        @foreach (explode(',',$ahu->q13) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q13[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td>Check Air Velocity</td>
                                        <td>2,5 m/s</td>
                                        <td>3M</td>
                                        @foreach (explode(',',$ahu->q14) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q14[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td>Replace Snap ring Motorize valve</td>
                                        <td>3 Month</td>
                                        <td>3M</td>
                                        @foreach (explode(',',$ahu->q15) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q15[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>10</td>
                                        <td>Cleaning Strainer</td>
                                        <td>Clean</td>
                                        <td>3M</td>
                                        @foreach (explode(',',$ahu->q16) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q16[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                </tbody>
                            </table>
                            <table class="table table-bordered" id="personelTeamTable">
                                <thead>
                                    <h5 class="text-center" style="background-color: black;color:white">C.Heating Coil</h5>

                                    <tr>
                                        <th>No</th>
                                        <th>Item Checked</th>
                                        <th>Standard Condition</th>
                                        <th>Freq (Month)</th>
                                        <th>Actual Checked</th>
                                        <th></th>
                                        <th>Remark</th>
                                    </tr>

                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>Before</th>
                                        <th>After</th>
                                        <th></th>
                                    </tr>

                                </thead>

                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Check Pressure Different in/out Heating Coil</td>
                                        <td>30-100 pa</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q17) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q17[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Check temperature HHeating Coil</td>
                                        <td>10-12°C</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q18) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q18[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Inspect Temperature Water in & out</td>
                                        <td>Delta T 3-5°C</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q19) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q19[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Inspect Pressure Water in & out</td>
                                        <td>D.P 0,5 - 1 Bar</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q20) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q20[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Inspect Manual valve</td>
                                        <td>Normal</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q21) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q21[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Inspect Motorize valve</td>
                                        <td>Normal</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q22) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q22[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Cleaning Heating Oil</td>
                                        <td>Clean</td>
                                        <td>3M</td>
                                        @foreach (explode(',',$ahu->q23) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q23[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td>Check Air Velocity</td>
                                        <td>2,5 m/s</td>
                                        <td>3M</td>
                                        @foreach (explode(',',$ahu->q24) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q24[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td>Replace Snap ring Motorize valve</td>
                                        <td>3 Month</td>
                                        <td>3M</td>
                                        @foreach (explode(',',$ahu->q25) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q25[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                </tbody>
                            </table>

                            <table class="table table-bordered" id="personelTeamTable">
                                <thead>
                                    <h5 class="text-center" style="background-color: black;color:white">D.Blower AHU</h5>

                                    <tr>
                                        <th>No</th>
                                        <th>Item Checked</th>
                                        <th>Standard Condition</th>
                                        <th>Freq (Month)</th>
                                        <th>Actual Checked</th>
                                        <th></th>
                                        <th>Remark</th>
                                    </tr>

                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>Before</th>
                                        <th>After</th>
                                        <th></th>
                                    </tr>

                                </thead>

                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Check V-Belt Condition</td>
                                        <td>Kondisi Bagus</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q26) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q26[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Check V-Belt Tension</td>
                                        <td>2,7-4,1 kgF</td>
                                        <td>3M</td>
                                        @foreach (explode(',',$ahu->q27) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q27[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Dressing V-Belt</td>
                                        <td>Kondisi Bagus</td>
                                        <td>3M</td>
                                        @foreach (explode(',',$ahu->q28) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q28[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Replace V-Belt</td>
                                        <td>6 Month</td>
                                        <td>6M</td>
                                        @foreach (explode(',',$ahu->q29) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q29[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Check Abrassion of Pulley</td>
                                        <td>Normal</td>
                                        <td>6M</td>
                                        @foreach (explode(',',$ahu->q30) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q30[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Check Allignment of Pulley</td>
                                        <td>Center</td>
                                        <td>6M</td>
                                        @foreach (explode(',',$ahu->q31) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q31[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Check Cover Blower</td>
                                        <td>Kondisi Bagus</td>
                                        <td>3M</td>
                                        @foreach (explode(',',$ahu->q32) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q32[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td>Check Blower Condition</td>
                                        <td>Normal</td>
                                        <td>3M</td>
                                        @foreach (explode(',',$ahu->q33) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q33[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td>Cleaning Blower</td>
                                        <td>Clean</td>
                                        <td>3M</td>
                                        @foreach (explode(',',$ahu->q34) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q34[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>10</td>
                                        <td>Cleaning Cover Blower</td>
                                        <td>Clean</td>
                                        <td>3M</td>
                                        @foreach (explode(',',$ahu->q35) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q35[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>11</td>
                                        <td>Check Motor Blower</td>
                                        <td>Normal</td>
                                        <td>3M</td>
                                        @foreach (explode(',',$ahu->q36) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q36[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>12</td>
                                        <td>Cleaning Cover motor blower</td>
                                        <td>Clean</td>
                                        <td>3M</td>
                                        @foreach (explode(',',$ahu->q37) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q37[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>13</td>
                                        <td>Check Temperature Motor blower</td>
                                        <td>40-60°C</td>
                                        <td>3M</td>
                                        @foreach (explode(',',$ahu->q38) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q38[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td>Greasing Bearing Motor Blower & Pillow block Bearing</td>
                                        <td></td>
                                        <td>3M</td>
                                        @foreach (explode(',',$ahu->q39) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q39[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>15</td>
                                        <td>Check Insulation Motor Blower</td>
                                        <td>>50MΩ</td>
                                        <td>12M</td>
                                        @foreach (explode(',',$ahu->q40) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q40[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table table-bordered" id="personelTeamTable">
                                <thead>
                                    <h5 class="text-center" style="background-color: black;color:white">E.Drain System</h5>

                                    <tr>
                                        <th>No</th>
                                        <th>Item Checked</th>
                                        <th>Standard Condition</th>
                                        <th>Freq (Month)</th>
                                        <th>Actual Checked</th>
                                        <th></th>
                                        <th>Remark</th>
                                    </tr>

                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>Before</th>
                                        <th>After</th>
                                        <th></th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Inspect Basin</td>
                                        <td>Kondisi Bagus</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q41) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q41[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Cleaning Basin</td>
                                        <td>Clean</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q42) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q42[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Inspect U-Trap</td>
                                        <td>Clean</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q43) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q43[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Inspect Piping</td>
                                        <td>Clean</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q44) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q44[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Cleaning Piping</td>
                                        <td>Clean</td>
                                        <td>1M</td>
                                        @foreach (explode(',',$ahu->q45) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q45[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                </tbody>
                            </table>
                                <table class="table table-bordered" id="personelTeamTable">
                                        <thead>
                                            <h5 class="text-center" style="background-color: black;color:white">F.Control Panel</h5>
    
                                            <tr>
                                                <th>No</th>
                                                <th>Item Checked</th>
                                                <th>Standard Condition</th>
                                                <th>Freq (Month)</th>
                                                <th>Actual Checked</th>
                                                <th></th>
                                                <th>Remark</th>
                                            </tr>
    
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>Before</th>
                                                <th>After</th>
                                                <th></th>
                                            </tr>
    
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Inspect Panel Control Component</td>
                                                    <td>Kondisi Bagus</td>
                                                    <td>1M</td>
                                                    @foreach (explode(',',$ahu->q47) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q47[]" value="{{$val}}"></td>
                                        @endforeach
                                                </tr>
                                                
                                                <tr>
                                                    <td>2</td>
                                                    <td> Cleaning Dust in the panel box </td>
                                                    <td>Clean</td>
                                                    <td>3M</td>
                                                    @foreach (explode(',',$ahu->q48) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q48[]" value="{{$val}}"></td>
                                        @endforeach
                                                </tr>
                                                
                                                <tr>
                                                    <td>3</td>
                                                    <td>Check terminal tight </td>
                                                    <td>Clean</td>
                                                    <td>3M</td>
                                                    @foreach (explode(',',$ahu->q49) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q49[]" value="{{$val}}"></td>
                                        @endforeach
                                                </tr>
                                                
                                            </tbody>
                                    </table>


                            <table class="table table-bordered" id="personelTeamTable">

                                <h5 class="text-center" style="background-color: black;color:white">F.Checklist History PM</h5>
                                <thead>
                                    <tr>
                                        <th>Checklist History PM</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="text-center" name="q46[]" @if($ahu->q46 == 'OK') checked @endif value="OK" onclick="toggleCheckbox(this)">
                                            OK
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="text-center" name="q46[]" @if($ahu->q46 == 'NOT OK') checked @endif value="NOT OK" onclick="toggleCheckbox(this)">
                                            NOT OK
                                        </label>
                                    </td>
                                    <script>
                                        function toggleCheckbox(checkbox) {
                                            var checkboxes = document.getElementsByName('q46[]');
                                            for (var i = 0; i < checkboxes.length; i++) {
                                                if (checkboxes[i] !== checkbox) {
                                                    checkboxes[i].checked = false;
                                                }
                                            }
                                        }
                                    </script>
                                </tbody>
                            </table>
                            <table class="table table-bordered" id="">
        <tr>
            <th>Temuan</th>
            <th>Rekomendasi</th>
        </tr>
        <tr>
            <td><textarea name="temuan" id="" cols="60" rows="10">{{$ahu->temuan}}</textarea></td>
            <td><textarea name="rekomendasi" id="" cols="60" rows="10">{{$ahu->rekomendasi}}</textarea></td>
        </tr>
        <tr>
            <th>Job Complete</th>
        </tr>
        <tr>
            <td colspan="2"><select name="status" id="" class="form-select">
                    <option value="{{$ahu->status}}">{{$ahu->status}}</option>
                         <option value="Completed">Completed</option>
                    <option value="On Progres">On Progres</option>
                </select></td>
        </tr>
            
</table>
@include('formimage.formkosong')

                            <button class="btn btn-info px-4 mt-3" type="submit">Submit form</button>
                        </form>
@include('formimage.edit')
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- --------------------------------------------------- -->
    <!--  Form Inputs Grid End -->
    <!-- --------------------------------------------------- -->
</div>
@endsection