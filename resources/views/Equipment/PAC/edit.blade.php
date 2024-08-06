@extends('layouts.back2')
@section('content')
<div class="container-fluid">
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="card-title mb-0 text-center">Task List PAC (Precision Air Conditioning)</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pac.update',$PAC->id) }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" required name="id_equipment" value="{{ $id }}">
 <table class="table table-bordered" id="">
        <tr>
            <th>Tanggal</th>
            <th>Engineer List</th>
        </tr>
        <tr>
            <td><input type="date" name="tanggal" required class="form-control" value="{{$PAC->tanggal}}"></td>
            <td><textarea name="enginer_list" id="" cols="60" rows="10">{{$PAC->enginer_list}}</textarea></td>
        </tr>
        <tr>
            <th>Start Time</th>
            <th>Stop Time</th>
        </tr>
        <tr>
<td><input type="time" class="form-control" name="start" required value="{{$PAC->start}}"></td>
            <td><input type="time" name="end" class="form-control" id="" value="{{$PAC->end}}"></td>
        </tr>
            
</table>

                            @method('PUT')
                            @csrf
                            <table class="table table-bordered" id="personelTeamTable">
                                <thead>
                                    <h5 class="text-center" style="background-color: black;color:white">A.Filter Section</h5>

                                    <tr>
                                        <th>No</th>
                                        <th>Item Checked</th>
                                        <th>Spec.Range / Cond.Std.</th>
                                        <th>Actual Checked</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Check/Replace Filters</td>
                                        <td>Clean Or Dirty</td>
                                        <td><select name="q1[]" class="form-select" id="">
                                                <option value="{{$PAC->q1}}">{{$PAC->q1}}</option>
                                                <option value="Clean">Clean</option>
                                                <option value="Dirty">Dirty</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Grille Area Unrestricted</td>
                                        <td>Ok Or No</td>
                                        <td><select name="q2[]" class="form-select" id="">
                                                <option value="{{$PAC->q2}}">{{$PAC->q2}}</option>
                                                <option value="Ok">OK</option>
                                                <option value="No">No</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Wipe Section Clean</td>
                                        <td>Clean Or Dirty</td>
                                        <td><select name="q3[]" class="form-select" id="">
                                                <option value="{{$PAC->q3}}">{{$PAC->q3}}</option>
                                                <option value="Clean">Clean</option>
                                                <option value="Dirty">Dirty</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Coil Clean</td>
                                        <td>Clean Or Dirty</td>
                                        <td><select name="q4[]" class="form-select" id="">
                                                <option value="{{$PAC->q4}}">{{$PAC->q4}}</option>
                                                <option value="Clean">Clean</option>
                                                <option value="Dirty">Dirty</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Clean Condesate Pan</td>
                                        <td>Clean Or Dirty</td>
                                        <td><select name="q5[]" class="form-select" id="">
                                                <option value="{{$PAC->q5}}">{{$PAC->q5}}</option>
                                                <option value="Clean">Clean</option>
                                                <option value="Dirty">Dirty</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Clean Trap In Condensate Drain</td>
                                        <td>Clean Or Dirty</td>
                                        <td><select name="q6[]" class="form-select" id="">
                                                <option value="{{$PAC->q6}}">{{$PAC->q6}}</option>
                                                <option value="Clean">Clean</option>
                                                <option value="Dirty">Dirty</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Check/Test Filter-Clog Switch Operation</td>
                                        <td>Ok Or No</td>
                                        <td><select name="q7[]" class="form-select" id="">
                                                <option value="{{$PAC->q7}}">{{$PAC->q7}}</option>
                                                <option value="Ok">OK</option>
                                                <option value="No">No</option>
                                            </select></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered" id="personelTeamTable">
                                <thead>
                                    <h5 class="text-center" style="background-color: black;color:white">B.Blower Section</h5>

                                    <tr>
                                        <th>No</th>
                                        <th class="text-center">Item Checked</th>
                                        <th>Spec.Range / Cond.Std.</th>
                                        <th>Blower 1</th>
                                        <th></th>
                                        <th>Blower 2</th>
                                        <th></th>
                                        <th>Blower 3</th>
                                        <th></th>
                                        <th>Keterangan</th>
                                    </tr>

                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>Before</th>
                                        <th>After</th>
                                        <th>Before</th>
                                        <th>After</th>
                                        <th>Before</th>
                                        <th>After</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mounting Bolts Tight</td>
                                        <td>Ok Or No</td>
                                        @foreach (explode(',',$PAC->q8) as $val)
                                        <td><select name="q8[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="OK">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Fan-Guard Bolts Tight</td>
                                        <td>Ok Or No</td>
                                        @foreach(explode(',',$PAC->q9) as $val)
                                        <td><select name="q9[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="OK">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Impeller Spins Freely</td>
                                        <td>Ok Or No</td>
                                        @foreach(explode(',',$PAC->q10) as $val)
                                        <td><select name="q10[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="OK">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Check/Test Air Sail Switch</td>
                                        <td>Ok Or No</td>
                                        @foreach(explode(',',$PAC->q11) as $val)
                                        <td><select name="q11[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="OK">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>


                                    <tr>
                                        <td>5</td>
                                        <td>Motor Amp Draw Compare To Nameplate Amps</td>
                                        <td>
                                            <p class="text-center">FLA L1 = A</p>
                                            <p class="text-center">FLA L2 = A</p>
                                            <p class="text-center">FLA L3 = A</p>
                                        </td>
                                        <td>
                                            <p>L1</p>
                                            <p>L2</p>
                                            <p>L3</p>
                                        </td>
                                        <td>
                                            <p>L1</p>
                                            <p>L2</p>
                                            <p>L3</p>
                                        </td>
                                        <td>
                                            <p>L1</p>
                                            <p>L2</p>
                                            <p>L3</p>
                                        </td>
                                        <td>
                                            <p>L1</p>
                                            <p>L2</p>
                                            <p>L3</p>
                                        </td>
                                        <td>
                                            <p>L1</p>
                                            <p>L2</p>
                                            <p>L3</p>
                                        </td>

                                        <td>
                                            <p>L1</p>
                                            <p>L2</p>
                                            <p>L3</p>
                                        </td>

                                        <td>
                                            @foreach (explode(',',$PAC->q12) as $val)
                                            <input type="text" class="form-control text-center" required name="q12[]" value="{{$val}}">
                                            @endforeach
                                        </td>

                                    </tr>


                                    <tr>
                                        <td>6</td>
                                        <td>Check Belt Tension And Condition</td>
                                        <td>Ok Or No</td>
                                        @foreach(explode(',',$PAC->q13) as $val)
                                        <td><select name="q13[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No   ">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>


                                    <tr>
                                        <td>7</td>
                                        <td>Check Sheave/Pulley</td>
                                        <td>Ok Or No</td>
                                        @foreach(explode(',',$PAC->q14) as $val)
                                        <td><select name="q14[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No   ">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                </tbody>
                            </table>
                            <table class="table table-bordered" id="personelTeamTable">
                                <tbody>
                                    <h5 class="text-center" style="background-color: black;color:white">C.Reheat</h5>
                                    <tr>
                                        <td>No</td>
                                        <th>Item Checked</th>
                                        <th>Spec.Range / Cond.Std.</th>
                                        <th>Blower 1</th>
                                        <th></th>
                                        <th>Blower 2</th>
                                        <th></th>
                                        <th>Blower 3</th>
                                        <th></th>
                                        <th>Keterangan</th>
                                    </tr>

                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>Before</th>
                                        <th>After</th>
                                        <th>Before</th>
                                        <th>After</th>
                                        <th>Before</th>
                                        <th>After</th>
                                        <th></th>
                                    </tr>
                                    </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Reheat Amp Draw</td>
                                        <td>FLA = A</td>
                                        @foreach (explode(',',$PAC->q15) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q15[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Check Heater Resistance</td>
                                        <td>18-22 OHM</td>
                                        @foreach (explode(',',$PAC->q16) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q16[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Inspect Elements</td>
                                        <td>Ok Or No</td>
                                        @foreach(explode(',',$PAC->q17) as $val)
                                        <td><select name="q17[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Check Wire Connections</td>
                                        <td>Ok Or No</td>
                                        @foreach(explode(',',$PAC->q18) as $val)
                                        <td><select name="q18[]" class="form-select" required>
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>




                            <table class="table table-bordered" id="personelTeamTable">
                                <h5 class="text-center" style="background-color: black;color:white">D.Steam Generating Humidifier</h5>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Item Checked</th>
                                        <th>Spec.Range / Cond.Std.</th>
                                        <th>Actual Checked</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Humidifier Amp Draw</td>
                                        <td>..........................A</td>
                                        @foreach (explode(',',$PAC->q19) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q19[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Check Drain Valve/Drain Lines/Trap For Damage/Clogs/Leaks</td>
                                        <td>Ok Or No</td>
                                        <td><select name="q20[]" class="form-select" required id="">
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Check Water Fill Valve And All Supply Lines/Connection For Leaks</td>
                                        <td>Clean Or Dirty</td>
                                        <td><select name="q21[]" class="form-select" required id="">
                                                <option value="{{$PAC->q21}}">{{$PAC->q21}}</option>
                                                <option value="Clean">Clean</option>
                                                <option value="Dirty">Dirty</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Check Condition Of Steam Hose</td>
                                        <td>Clean Or Dirty</td>
                                        <td><select name="q22[]" class="form-select" required id="">
                                                <option value="{{$PAC->q22}}">{{$PAC->q22}}</option>
                                                <option value="Clean">Clean</option>
                                                <option value="Dirty">Dirty</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Clean Strainer</td>
                                        <td>Clean Or Dirty</td>
                                        <td><select name="q23[]" class="form-select" required id="">
                                                <option value="{{$PAC->q23}}">{{$PAC->q23}}</option>
                                                <option value="Clean">Clean</option>
                                                <option value="Dirty">Dirty</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Check Humidifier Bottle (Boiler Tank)</td>
                                        <td>Clean Or Dirty</td>
                                        <td><select name="q24[]" class="form-select" required id="">
                                                <option value="{{$PAC->q24}}">{{$PAC->q24}}</option>
                                                <option value="Clean">Clean</option>
                                                <option value="Dirty">Dirty</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Check Operation Of Humidifier</td>
                                        <td>Ok Or No</td>
                                        <td><select name="q25[]" class="form-select" required id="">
                                                <option value="{{$PAC->q25}}">{{$PAC->q25}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                    </tr>

                                </tbody>
                            </table>
                            <table class="table table-bordered" id="personelTeamTable">
                                <h5 class="text-center" style="background-color: black;color:white">E.Electrical Panel</h5>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Item Checked</th>
                                        <th>Spec.Range / Cond.Std.</th>
                                        <th>Actual Checked</th>
                                        <th></th>
                                        <th>Keterangan</th>
                                    </tr>

                                    <tr>
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
                                        <td>Check Fuses</td>
                                        <td>Ok Or No</td>
                                        @foreach(explode(',',$PAC->q26) as $val)
                                        <td><select name="q26[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Check Contractors For Pitting (Replace If Pitted)</td>
                                        <td>Ok Or No</td>
                                        @foreach(explode(',',$PAC->q27) as $val)
                                        <td><select name="q27[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Check/Re-Torque Wire Connections</td>
                                        <td>Ok Or No</td>
                                        @foreach(explode(',',$PAC->q28) as $val)
                                        <td><select name="q28[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Voltage Line To Neutral Ground</td>
                                        <td>220 + 10%</td>
                                        @foreach (explode(',',$PAC->q29) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q29[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Voltage Line To Line</td>
                                        <td>380 + 10%</td>
                                        @foreach (explode(',',$PAC->q30) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q30[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Frequency</td>
                                        <td>50 + 10%</td>
                                        @foreach (explode(',',$PAC->q31) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q31[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered" id="personelTeamTable">
                                <h5 class="text-center" style="background-color: black;color:white">F.Controls</h5>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Item Checked</th>
                                        <th>Spec.Range / Cond.Std.</th>
                                        <th>Actual Checked</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Check/Verify Control Operation</td>
                                        <td>Ok Or No</td>
                                        <td><select name="q32[]" class="form-select" required id="">
                                                <option value="{{$PAC->q32}}">{{$PAC->q32}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Check/Test changeover device</td>
                                        <td>Ok Or No</td>
                                        <td><select name="q33[]" class="form-select" required id="">
                                                <option value="{{$PAC->q33}}">{{$PAC->q33}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Check/Test water-detection device</td>
                                        <td>Ok Or No</td>
                                        <td><select name="q34[]" class="form-select" required id="">
                                                <option value="{{$PAC->q34}}">{{$PAC->q34}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Check/Test CAN connection between indoor and outdoor units</td>
                                        <td>Ok Or No</td>
                                        <td><select name="q35[]" class="form-select" required id="">
                                                <option value="{{$PAC->q35}}">{{$PAC->q35}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                    </tr>

                                </tbody>
                            </table>

                            <table class="table table-bordered" id="personelTeamTable">
                                <h5 class="text-center" style="background-color: black;color:white">G.Refrigeration Piping</h5>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Item Checked</th>
                                        <th>Spec.Range / Cond.Std.</th>
                                        <th>Actual Checked</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Check Refrigerant Lines (Clamps secure/no rubbing/no leaks)</td>
                                        <td>Ok Or No</td>
                                        <td><select name="q36[]" class="form-select" required id="">
                                                <option value="{{$PAC->q36}}">{{$PAC->q36}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Check For Moisture (sight glass)</td>
                                        <td>Ok Or No</td>
                                        <td><select name="q37[]" class="form-select" required id="">
                                                <option value="{{$PAC->q37}}">{{$PAC->q37}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Check for restriction temperature drop across filter drier</td>
                                        <td>Clean Or Dirty</td>
                                        <td><select name="q38[]" class="form-select" required id="">
                                                <option value="{{$PAC->q38}}">{{$PAC->q38}}</option>
                                                <option value="Clean">Clean</option>
                                                <option value="Dirty">Dirty</option>
                                            </select></td>
                                    </tr>

                                </tbody>
                            </table>

                            <table class="table table-bordered" id="personelTeamTable">
                                <h5 class="text-center" style="background-color: black;color:white">H.Compressor Function</h5>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Item Checked</th>
                                        <th>Spec.Range / Cond.Std.</th>
                                        <th>Comp.1</th>
                                        <th></th>
                                        <th>Comp.2</th>
                                        <th></th>
                                        <th>Comp.3</th>
                                        <th></th>
                                        <th>Keterangan</th>
                                    </tr>

                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>Before</th>
                                        <th>After</th>
                                        <th>Before</th>
                                        <th>After</th>
                                        <th>Before</th>
                                        <th>After</th>
                                        <th></th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ampere Draw</td>
                                        <td>OA....A</td>
                                        @foreach (explode(',',$PAC->q39) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q39[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Check Oil Level</td>
                                        <td>55 - 90 PsiG</td>
                                        @foreach (explode(',',$PAC->q40) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q40[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Check for oil leaks</td>
                                        <td>200 - 300 PsiG</td>
                                        @foreach (explode(',',$PAC->q41) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q41[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Check Compressor Mounts (springs/bushings)</td>
                                        <td>OK or No</td>
                                        @foreach(explode(',',$PAC->q42) as $val)
                                        <td><select name="q42[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Cap Tubes (Not Rubbing)</td>
                                        <td>OK or No</td>
                                        @foreach(explode(',',$PAC->q43) as $val)
                                        <td><select name="q43[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Check/Re-torque wire connections (inside compressor box)</td>
                                        <td>OK or No</td>
                                        @foreach(explode(',',$PAC->q44) as $val)
                                        <td><select name="q44[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Compressor operation (vibration/noise)</td>
                                        <td>
                                            <p>HZ</p>
                                            <p>DB</p>
                                        </td>
                                        @foreach (explode(',',$PAC->q45) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q45[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td>Check crank-case heater fuses/operation</td>
                                        <td>OK or No</td>
                                        @foreach(explode(',',$PAC->q46) as $val)
                                        <td><select name="q46[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td>Check for refrigerant leaks</td>
                                        <td>OK or No</td>
                                        @foreach(explode(',',$PAC->q47) as $val)
                                        <td><select name="q47[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>10</td>
                                        <td>Suction pressure Circuit</td>
                                        <td>55 - 90 PsiG</td>
                                        @foreach (explode(',',$PAC->q48) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q48[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>11</td>
                                        <td>Discharge pressure Circuit</td>
                                        <td>200-300 PsiG</td>
                                        @foreach (explode(',',$PAC->q49) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q49[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>12</td>
                                        <td>Superheat Circuit</td>
                                        <td>… ͦC</td>
                                        @foreach (explode(',',$PAC->q50) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q50[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>13</td>
                                        <td>Low-pressure switch cut out Circuit</td>
                                        <td>OK or No</td>
                                        @foreach(explode(',',$PAC->q51) as $val)
                                        <td><select name="q51[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td>Low-pressure cut in circuit</td>
                                        <td>OK or No</td>
                                        @foreach(explode(',',$PAC->q52) as $val)
                                        <td><select name="q52[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>15</td>
                                        <td>High pressure cut out circuit</td>
                                        <td>OK or No</td>
                                        @foreach(explode(',',$PAC->q53) as $val)
                                        <td><select name="q53[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>16</td>
                                        <td>Sight Glass</td>
                                        <td>OK or No</td>
                                        @foreach(explode(',',$PAC->q54) as $val)
                                        <td><select name="q54[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                </tbody>
                            </table>


                            <table class="table table-bordered" id="personelTeamTable">
                                <h5 class="text-center" style="background-color: black;color:white">I.Condensor Function</h5>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Item Checked</th>
                                        <th>Spec.Range / Cond.Std.</th>
                                        <th>Before</th>
                                        <th>After</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Coil clean of debris (clean coil if required)</td>
                                        <td>Clean Or Dirty</td>
                                        @foreach(explode(',',$PAC->q55) as $val)
                                        <td><select name="q55[]" class="form-select" required id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Clean">Clean</option>
                                                <option value="Dirty">Dirty</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Fans free of debris</td>
                                        <td>Clean Or Dirty</td>
                                        @foreach(explode(',',$PAC->q56) as $val)
                                        <td><select name="q56[]" class="form-select" required id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Clean">Clean</option>
                                                <option value="Dirty">Dirty</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Fans securely mounted</td>
                                        @foreach (explode(',',$PAC->q57) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q57[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Motor bearings in good condition</td>
                                        @foreach (explode(',',$PAC->q58) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q58[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Check all refrigerant lines for vibration isolation. Support as necessary</td>
                                        <td>Ok Or No</td>
                                        @foreach(explode(',',$PAC->q59) as $val)
                                        <td><select name="q59[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Check for refrigerant leaks</td>
                                        <td>Ok Or No</td>
                                        @foreach(explode(',',$PAC->q60) as $val)
                                        <td><select name="q60[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Check surge-protection device (if installed) status-indicator lights</td>
                                        <td>Ok Or No</td>
                                        @foreach(explode(',',$PAC->q61) as $val)
                                        <td><select name="q61[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td>Check/Re-torque wire connections</td>
                                        <td>Ok Or No</td>
                                        @foreach(explode(',',$PAC->q62) as $val)
                                        <td><select name="q62[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td>Check contactors for pitting (replace if pitted)</td>
                                        <td>Ok Or No</td>
                                        @foreach(explode(',',$PAC->q63) as $val)
                                        <td><select name="q63[]" class="form-select" id="">
                                                <option value="{{$val}}">{{$val}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>10</td>
                                        <td>Verify operation sequence/set points</td>
                                        @foreach (explode(',',$PAC->q64) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q64[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>11</td>
                                        <td>Charge verification: </td>
                                        @foreach (explode(',',$PAC->q65) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q65[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>A.Outdoor Ambient Temperature</td>
                                        @foreach (explode(',',$PAC->q66) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q66[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>B.Subcooling</td>
                                        @foreach (explode(',',$PAC->q67) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q67[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>C.Indoor-unit Return-air Temperature</td>
                                        @foreach (explode(',',$PAC->q68) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q68[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>D.Sight-glass level (if Lee-Temp or pumped refrigerant) </td>
                                        @foreach (explode(',',$PAC->q69) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q69[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>12</td>
                                        <td>Motor amp draw </td>
                                        @foreach (explode(',',$PAC->q70) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q70[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table table-bordered" id="personelTeamTable">
                                <h5 class="text-center" style="background-color: black;color:white">H.General Function</h5>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Item Checked</th>
                                        <th>Spec.Range / Cond.Std.</th>
                                        <th>Actual Checked</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Cooling Test</td>
                                        <td>OK Or NO</td>
                                        <td><select name="q71[]" class="form-select" required id="">
                                                <option value="{{$PAC->q71}}">{{$PAC->q71}}</option>
                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Heating Test</td>
                                        <td>OK Or NO</td>
                                        <td><select name="q72[]" class="form-select" required id="">
                                                <option value="{{$PAC->q72}}">{{$PAC->q72}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Humidification Test</td>
                                        <td>OK Or NO</td>
                                        <td><select name="q73[]" class="form-select" required id="">
                                                <option value="Ok">Ok</option>
                                                <option value="{{$PAC->q73}}">{{$PAC->q73}}</option>

                                                <option value="No">No</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Dehumidification Test</td>
                                        <td>Ok Or No</td>
                                        <td><select name="q74[]" class="form-select" required id="">
                                                <option value="{{$PAC->q74}}">{{$PAC->q74}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Alarm Test</td>
                                        <td>Ok Or No</td>
                                        <td><select name="q75[]" class="form-select" required id="">
                                                <option value="{{$PAC->q75}}">{{$PAC->q75}}</option>

                                                <option value="Ok">Ok</option>
                                                <option value="No">No</option>
                                            </select></td>
                                    </tr>

                                </tbody>
                            </table>

                            <table class="table table-bordered" id="personelTeamTable">
                                <h5 class="text-center" style="background-color: black;color:white">I.Room Function</h5>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Item Checked</th>
                                        <th>Spec.Range / Cond.Std.</th>
                                        <th>Actual Checked</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Temperature</td>
                                        @foreach (explode(',',$PAC->q76) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q76[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Humidity</td>
                                        @foreach (explode(',',$PAC->q77) as $val)
                                        <td><input type="text" class="form-control text-center" required name="q77[]" value="{{$val}}"></td>
                                        @endforeach
                                    </tr>


                                </tbody>
                            </table>
   <table class="table table-bordered" id="">
        <tr>
            <th>Temuan</th>
            <th>Rekomendasi</th>
        </tr>
        <tr>
            <td><textarea name="temuan" id="" cols="60" rows="10">{{$PAC->temuan}}</textarea></td>
            <td><textarea name="rekomendasi" id="" cols="60" rows="10">{{$PAC->rekomendasi}}</textarea></td>
        </tr>
        <tr>
            <th>Intensive Check</th>
            <th>Job Complete</th>
        </tr>
        <tr>
            <td><td><select name="status" id="" class="form-select">
                    <option value="{{$PAC->intensive}}">{{$PAC->intensive}}</option>
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>

                </select></td>
            <td><select name="status" id="" class="form-select">
                    <option value="{{$PAC->status}}">{{$PAC->status}}</option>
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>
                </select></td>
        </tr>
            @include('formimage.formkosong')
</table>

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