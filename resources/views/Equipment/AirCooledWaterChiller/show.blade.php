@extends('layouts.back2')
@section('content')
<!-- --------------------------------------------------- -->
<!-- Header End -->
<!-- --------------------------------------------------- -->
<div class="container-fluid">
    <!-- --------------------------------------------------- -->
    <!--  Form Input disableds Grid Start -->
    <!-- --------------------------------------------------- -->
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h5 class="text-center" style="background-color: black;color:white">Task List Air Cooled Water Chiller</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('acwc.store') }}" method="POST">
                            @csrf
                                              <table class="table table-bordered" id="">
        <tr>
            <th>Tanggal</th>
            <th>Engineer List</th>
        </tr>
        <tr>
            <td><input disabled type="date" value="{{$acwc->tanggal_survey}}" name="tanggal_survey" required class="form-control">   <label for="">Jadwal</label>
                <select disabled  name="tanggal_schedule" id="" required class="form-select" style="color: black">
                    <option value="{{$acwc->schedule}}">{{$acwc->schedule}}</option>
                </select></td>  
            <td><textarea name="enginerlist" id="" cols="60" rows="10" disabled>{{$acwc->enginerlist}}</textarea></td>
        </tr>
        <tr>
            <th>Start Time</th>
            <th>Stop Time</th>
        </tr>
        <tr>
<td><input type="time" class="form-control" name="start" value="{{$acwc->start}}" disabled required></td>
            <td><input type="time" name="stop" class="form-control" value="{{$acwc->end}}" disabled id=""></td>
        </tr>
            
</table>
                            <table class="table table-bordered" id="personelTeamTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pertanyaan</th>
                                        <th>Frequency</th>
                                        <th>Standard Condition</th>
                                        <th>Actual Check</th>
                                    </tr>
                                <tbody>

                                    <input disabled type="hidden" required name="id" value="{{ $id }}">
                                    <tr>
                                        <td>1</td>
                                        <td>Check the evaporator refrigerant pressure and the condenser refrigerant</td>
                                        <td>Weekly</td>
                                        @foreach (explode(',', $acwc->q1) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q1[]"></td>
                                        @endforeach

                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Check the liquid line sight glasses</td>
                                        <td>Weekly</td>
                                        @foreach (explode(',', $acwc->q2) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q2[]"></td>
                                        @endforeach

                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Measure and record the system superheat</td>
                                        <td>1 Month</td>
                                        @foreach (explode(',', $acwc->q3) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q3[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Measure and record the system subcooling</td>
                                        <td>1 Month</td>
                                        @foreach (explode(',', $acwc->q4) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q4[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Manually rotate condenser fans to insure proper clearance</td>
                                        <td>1 Month</td>
                                        @foreach (explode(',', $acwc->q5) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q5[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Check the fan assemblies for proper clearance in the fan openings</td>
                                        <td>6 Month</td>
                                        @foreach (explode(',', $acwc->q6) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q6[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Check motor shaft misalignment, abnormal end-play, vibration and noise</td>
                                        <td>6 Month</td>
                                        @foreach (explode(',', $acwc->q7) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q7[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td>Check the oil level and refrigerant charge</td>
                                        <td>6 Month</td>
                                        @foreach (explode(',', $acwc->q8) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q8[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td>Check oil analysis to determine system moisture content and acid level</td>
                                        <td>6 Month</td>
                                        @foreach (explode(',', $acwc->q9) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q9[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>10</td>
                                        <td>Leak test the chiller</td>
                                        <td>6 Month</td>
                                        @foreach (explode(',', $acwc->q10) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q10[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>11</td>
                                        <td>Check operating and safety controls</td>
                                        <td>6 Month</td>
                                        @foreach (explode(',', $acwc->q11) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q11[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>12</td>
                                        <td>Inspect electrical components for deficiencies</td>
                                        <td>6 Month</td>
                                        @foreach (explode(',', $acwc->q12) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q12[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>13</td>
                                        <td>Inspect all piping components for leakage and damage</td>
                                        <td>6 Month</td>
                                        @foreach (explode(',', $acwc->q13) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q13[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td>Clean out any inline strainers</td>
                                        <td>6 Month</td>
                                        @foreach (explode(',', $acwc->q14) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q14[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>15</td>
                                        <td>Clean and repaint any areas that show signs of corrosion</td>
                                        <td>6 Month</td>
                                        @foreach (explode(',', $acwc->q15) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q15[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>16</td>
                                        <td>Clean the condenser coils</td>
                                        <td>6 Month</td>
                                        @foreach (explode(',', $acwc->q16) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q16[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>17</td>
                                        <td>Clean the condenser fans</td>
                                        <td>6 Month</td>
                                        @foreach (explode(',', $acwc->q17) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q17[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>18</td>
                                        <td>Clean panel control box & Component</td>
                                        <td>6 Month</td>
                                        @foreach (explode(',', $acwc->q18) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q18[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>19</td>
                                        <td>Check all sensor (Condition & read)</td>
                                        <td>6 Month</td>
                                        @foreach (explode(',', $acwc->q19) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q19[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>20</td>
                                        <td>Check Cooler & Pipe Insulation</td>
                                        <td>6 Month</td>
                                        @foreach (explode(',', $acwc->q20) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q20[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>21</td>
                                        <td>Check Condensor air velocity</td>
                                        <td>6 Month</td>
                                        @foreach (explode(',', $acwc->q21) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q21[]"></td>
                                        @endforeach
                                    </tr>

                                </tbody>
                            </table>

                            <table class="table table-bordered" id="personelTeamTable">
                                <h5 class="text-center" style="background-color: black;color:white">Service Check</h5>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pertanyaan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Unit Serial Number :</td>
                                        <td><input disabled type="text" value="{{$acwc->q22}}" class="form-control text-center" required name="q22[]"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Unit Model No :</td>
                                        <td><input disabled type="text" value="{{$acwc->q23}}" class="form-control text-center" required name="q23[]"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Compressor A Serial No :</td>
                                        <td><input disabled type="text" value="{{$acwc->q24}}" class="form-control text-center" required name="q24[]"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Compressor A Model No :</td>
                                        <td><input disabled type="text" value="{{$acwc->q25}}" class="form-control text-center" required name="q25[]"></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Compressor B Serial No :</td>
                                        <td><input disabled type="text" value="{{$acwc->q26}}" class="form-control text-center" required name="q26[]"></td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Compressor B Model No :</td>
                                        <td><input disabled type="text" value="{{$acwc->q27}}" class="form-control text-center" required name="q27[]"></td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Elevation(°) :</td>
                                        <td><input disabled type="text" value="{{$acwc->q28}}" class="form-control text-center" required name="q28[]"></td>
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td>Nameplate Voltage(V) :</td>
                                        <td><input disabled type="text" value="{{$acwc->q29}}" class="form-control text-center" required name="q29[]"></td>
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td>Fan Motor RLA :</td>
                                        <td><input disabled type="text" value="{{$acwc->q30}}" class="form-control text-center" required name="q30[]"></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td><b>Evap Water Drop Press.(Bar)</b></td>
                                    </tr>

                                    <tr>
                                        <td>10</td>
                                        <td>Des.PSID:</td>
                                        <td><input disabled type="text" value="{{$acwc->q31}}" class="form-control text-center" required name="q31[]"></td>
                                    </tr>

                                    <tr>
                                        <td>11</td>
                                        <td>Des.GPM:</td>
                                        <td><input disabled type="text" value="{{$acwc->q32}}" class="form-control text-center" required name="q32[]"></td>
                                    </tr>

                                    <tr>
                                        <td>12</td>
                                        <td>Act.PSID:</td>
                                        <td><input disabled type="text" value="{{$acwc->q33}}" class="form-control text-center" required name="q33[]"></td>
                                    </tr>

                                    <tr>
                                        <td>13</td>
                                        <td>Act.GPM:</td>
                                        <td><input disabled type="text" value="{{$acwc->q34}}" class="form-control text-center" required name="q34[]"></td>
                                    </tr>


                                </tbody>
                            </table>

                            <table class="table table-bordered" id="personelTeamTable">
                                <thead>
                                    <tr>
                                        <th class="px-5">Circuit Compressor</th>
                                        <th>UOM</th>
                                        <th>Standard</th>
                                        <th>Before</th>
                                        <th></th>
                                        <th>After</th>
                                        <th></th>
                                        <th>Remarks</th>
                                    </tr>

                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>Cir A</th>
                                        <th>Cir B</th>
                                        <th>Cir A</th>
                                        <th>Cir B</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Unit Voltage</td>
                                        <td>
                                            <p>R-S</p>
                                            <p>S-T</p>
                                            <p>T-R</p>
                                        </td>
                                        <td>
                                            <p>Volt</p>
                                            <p>Volt</p>
                                            <p>Volt</p>
                                        </td>
                                        <td>
                                            @foreach (explode(',',$acwc->q35) as $val)
                                            <input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q35[]">
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach (explode(',',$acwc->q36) as $val)
                                            <input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q36[]">
                                            @endforeach

                                        </td>
                                        <td>
                                            @foreach (explode(',',$acwc->q37) as $val)
                                            <input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q37[]">
                                            @endforeach

                                        </td>
                                        <td>
                                            @foreach (explode(',',$acwc->q38) as $val)
                                            <input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q38[]">
                                            @endforeach

                                        </td>
                                        <td>
                                            @foreach (explode(',',$acwc->q39) as $val)
                                            <input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q39[]">
                                            @endforeach

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Comp.Amp</td>
                                        <td>
                                            <p>R</p>
                                            <p>S</p>
                                            <p>T</p>
                                        </td>
                                        <td>
                                            <p>Amp</p>
                                            <p>Amp</p>
                                            <p>Amp</p>
                                        </td>
                                        <td>
                                            @foreach (explode(',',$acwc->q40) as $val)
                                            <input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q40[]">
                                            @endforeach

                                        </td>
                                        <td>
                                            @foreach (explode(',',$acwc->q41) as $val)
                                            <input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q41[]">
                                            @endforeach

                                        </td>
                                        <td>
                                            @foreach (explode(',',$acwc->q42) as $val)
                                            <input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q42[]">
                                            @endforeach

                                        </td>
                                        <td>
                                            @foreach (explode(',',$acwc->q43) as $val)
                                            <input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q43[]">
                                            @endforeach

                                        </td>
                                        <td>
                                            @foreach (explode(',',$acwc->q44) as $val)
                                            <input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q44[]">
                                            @endforeach

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Unit Operating Mode</td>
                                        <td></td>
                                        @foreach (explode(',',$acwc->q45) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q45[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>Last Diagnostic</td>
                                        <td></td>
                                        @foreach (explode(',',$acwc->q46) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q46[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>Evap EWT</td>
                                        <td></td>
                                        @foreach (explode(',',$acwc->q47) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q47[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>Evap lwt</td>
                                        <td></td>
                                        @foreach (explode(',',$acwc->q48) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q48[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>Outdoor Air Temp</td>
                                        <td></td>
                                        @foreach (explode(',',$acwc->q49) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q49[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>Chilled Water Setpoint</td>
                                        <td></td>
                                        @foreach (explode(',',$acwc->q50) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q50[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>Current Limit Setpoint</td>
                                        <td></td>
                                        @foreach (explode(',',$acwc->q51) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q51[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>Sat.Evap.Ref.Temp</td>
                                        <td></td>
                                        @foreach (explode(',',$acwc->q52) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q52[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>Sat.Cond.Ref.Temp</td>
                                        <td></td>
                                        @foreach (explode(',',$acwc->q53) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q53[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>Condensor ref.press.</td>
                                        <td></td>
                                        @foreach (explode(',',$acwc->q54) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q54[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>Evaporator ref.press.</td>
                                        <td></td>
                                        @foreach (explode(',',$acwc->q55) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q55[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>Compressor RLA</td>
                                        <td></td>
                                        @foreach (explode(',',$acwc->q56) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q56[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>Compressor Start</td>
                                        <td></td>
                                        @foreach (explode(',',$acwc->q57) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q57[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>Compressor Hours</td>
                                        <td></td>
                                        @foreach (explode(',',$acwc->q58) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q58[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>Compressor Hours</td>
                                        <td></td>
                                        @foreach (explode(',',$acwc->q59) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q59[]"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>Oil Level Compressor</td>
                                        <td></td>
                                        @foreach (explode(',',$acwc->q60) as $val)
                                        <td><input disabled type="text" value="{{$val}}" class="form-control text-center" required name="q60[]"></td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                            </tbody>
                            </table>
                                                                                                                 <table class="table table-bordered" id="">
        <tbody><tr>
            <th>Temuan</th>
            <th>Rekomendasi</th>
        </tr>
        <tr>
            <td><textarea disabled name="temuan" id="" cols="60" rows="10">{{$acwc->temuan}}</textarea></td>
            <td><textarea disabled name="rekomendasi" id="" cols="60" rows="10">{{$acwc->rekomendasi}}</textarea></td>
        </tr>
        <tr>
            <th>Job Complete</th>
        </tr>
        <tr>
            <td colspan="2"><select disabled onchange="setColor(this);" name="status" id="" class="form-select">
                    <option value="{{$acwc->status}}">{{$acwc->status}}</option>

                                                <option value="?">?</option>
                    <option value="Completed">Completed</option>
                    <option value="On Progres">On Progres</option>
                </select></td>
        </tr>
            
</tbody></table>
                            @include('formimage.show')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- --------------------------------------------------- -->
    <!--  Form Input disableds Grid End -->
    <!-- --------------------------------------------------- -->
</div>
@endsection