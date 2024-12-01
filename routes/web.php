<?php

use Carbon\Carbon;
use App\Models\AcSplit;
use App\Models\ExhaustFan;
use App\Models\ColdStorage;
use App\Models\CoolingUnit;
use Illuminate\Http\Request;
use App\Exports\HistoryExport;
use App\Exports\EquipmentExport;
use App\Models\ChillerCentrifugal;
use App\Models\EvaporatorAirCooler;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\Type\Parameter;
use App\Http\Controllers\AHUController;
use App\Http\Controllers\FCUController;
use App\Http\Controllers\PACController;

use App\Http\Controllers\AkunController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\AUHPController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\FreonController;
use App\Http\Controllers\PompaController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\AcSplitController;
use App\Http\Controllers\RegulerController;
use App\Http\Controllers\AcSplitController2;
use App\Http\Controllers\AcSplitController3;
use App\Http\Controllers\AcSplitController4;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TasklistController;
use App\Http\Controllers\AuthorityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\KapasitasController;
use App\Http\Controllers\WaterMistController;
use App\Http\Controllers\ExhaustFanController;
use App\Http\Controllers\HumidifierController;
use App\Http\Controllers\ColdStorageController;
use App\Http\Controllers\CoolingUnitController;
use App\Http\Controllers\MiniChillerController;
use App\Http\Controllers\SpotCoolingController;
use App\Http\Controllers\CoolingTowerController;
use App\Http\Controllers\DehumidifierController;
use App\Http\Controllers\TroubleshootController;
use App\Http\Controllers\FormBeritaAcaraController;
use App\Http\Controllers\ChillerCentrifugalController;
use App\Http\Controllers\EvaporatorAirCoolerController;
use App\Http\Controllers\AirCooledWaterChillerController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/pdf/preview/{filename}', function ($filename) {
        // Path ke file PDF
        $filePath = public_path($filename);

        // Menampilkan PDF dalam tab baru
        return response()->file($filePath);
})->name('pdf.preview');
Auth::routes();



Route::get('/export', [EquipmentController::class, 'exportindex'])->name('equipment.exportindex');

Route::get('/history/export', function (Request $request) {
        $site = $request->input('site');
        $jenis = $request->input('jenis');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        return Excel::download(
                new HistoryExport($site, $jenis, $startDate, $endDate),
                'history-' . now()->format('Y-m-d') . '.xlsx'
        );
})->name('history.export');

Route::get('/equipment/export', function () {
        return Excel::download(new EquipmentExport, 'equipment.xlsx');
})->name('equipment.export2¥');

Route::get('/eq', [DashboardController::class, 'eq'])->name('eq')->middleware('auth');
Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('customer', CustomerController::class)->name('index', 'customer.index')->middleware('auth');
Route::resource('kapasitas', KapasitasController::class)->name('index', 'kapasitas.index')->middleware('auth');
Route::resource('area', AreaController::class)->name('index', 'area.index')->middleware('auth');
Route::resource('brand', BrandController::class)->name('index', 'brand.index')->middleware('auth');
Route::resource('tasklist', TasklistController::class)->name('index', 'tasklist.index')->middleware('auth');
Route::resource('freon', FreonController::class)->name('index', 'freon.index')->middleware('auth');
Route::resource('reguler', RegulerController::class)->name('index', 'reguler.index')->middleware('auth');
Route::resource('authority', AuthorityController::class)->name('index', 'authority.index')->middleware('auth');
Route::resource('room', RoomController::class)->name('index', 'room.index')->middleware('auth');
Route::resource('akun', AkunController::class)->name('index', 'akun.index')->middleware('auth');
Route::resource('schedule', ScheduleController::class)->name('schedule', 'schedule.index')->middleware('auth');
Route::resource('equipment', EquipmentController::class)->name('index', 'equipment.index')->middleware('auth');
Route::get('equipment/print/{id}', [EquipmentController::class, 'print'])->name('equipment.print')->middleware('auth');
Route::delete('gambar1/delete/{id}', [EquipmentController::class, 'gambar1_destroy'])->name('gambar.destroy')->middleware('auth');
Route::delete('gambar2/delete/{id}', [EquipmentController::class, 'gambar2_destroy'])->name('gambar2.destroy')->middleware('auth');
Route::delete('history/delete/{id}', [EquipmentController::class, 'history_destoroy'])->name('history.destroy')->middleware('auth');
Route::get('history/approve/{id}/{type2}', [EquipmentController::class, 'history_approve'])->name('history.approve')->middleware('auth');
Route::get('equipment/pp/{id}', [EquipmentController::class, 'printpp'])->name('equipment.printp')->middleware('auth');
Route::post('equipment/search', [EquipmentController::class, 'search'])->name('equipment.search')->middleware('auth');
Route::get('schedulee/progres', [ScheduleController::class, 'progres'])->name('schedulee.progres')->middleware('auth');
Route::get('schedulee/complete', [ScheduleController::class, 'finish'])->name('schedulee.complete')->middleware('auth');
Route::get('schedulegetprogres', [ScheduleController::class, 'GetScheduleProgres'])->name('schedulegetprogres')->middleware('auth');
Route::get('schedulegetcomplete', [ScheduleController::class, 'GetScheduleComplete'])->name('schedulegetcomplete')->middleware('auth');
Route::get('schedulee/all', [ScheduleController::class, 'all'])->name('schedulee.all')->middleware('auth');
Route::get('schedulegetall', [ScheduleController::class, 'GetScheduleAll'])->name('schedulegetAll')->middleware('auth');
Route::get('schedulegsession/{id}', [ScheduleController::class, 'schedulession'])->name('schedulesession')->middleware('auth');

Route::get('scheduleget', [ScheduleController::class, 'GetSchedule'])->name('scheduleget')->middleware('auth');
Route::get('part', [EquipmentController::class, 'part'])->name('part.index')->middleware('auth');
Route::get('part/{id}', [EquipmentController::class, 'partshow'])->name('part.show')->middleware('auth');


Route::get('survey/print/{id}', [FormBeritaAcaraController::class, 'print'])->name('survey.print')->middleware('auth');
Route::resource('formberitaacara', FormBeritaAcaraController::class)->name('index', 'formberitaacara.index')->middleware('auth');
Route::get('survey/{id}', [FormBeritaAcaraController::class, 'create'])->name('survey.create')->middleware('auth');
Route::get('search', [EquipmentController::class, 'scan'])->name('scan')->middleware('auth');
Route::resource('troubleshoot', TroubleshootController::class)->name('index', 'troubleshoot.index')->middleware('auth');
Route::get('troubleshoot/print/{id}', [TroubleshootController::class, 'print'])->name('troubleshoot.print')->middleware('auth');

Route::get('ts/{id}', [TroubleshootController::class, 'create'])->name('ts.create')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');



Route::resource('formberitaacara', FormBeritaAcaraController::class)->name('index', 'formberitaacara.index');
Route::get('survey/{id}', [FormBeritaAcaraController::class, 'create'])->name('survey.create');
Route::get('search', [EquipmentController::class, 'scan'])->name('scan');
Route::resource('troubleshoot', TroubleshootController::class)->name('index', 'troubleshoot.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('add-ac-split/{id}', [AcSplitController::class, 'create2'])->name('ac-split.create2');
Route::resource('ac-split', AcSplitController::class)->name('index', 'ac-split.index')->middleware('auth');
Route::get('ac-split/print/{id}', [AcSplitController::class, 'print'])->name('ac-split.print')->middleware('auth');

Route::get('add-ac-split2/{id}', [AcSplitController2::class, 'create2'])->name('ac-split2.create2');
Route::resource('ac-split2', AcSplitController2::class)->name('index', 'ac-split2.index')->middleware('auth');
Route::get('ac-split2/print/{id}', [AcSplitController2::class, 'print'])->name('ac-split2.print')->middleware('auth');

Route::get('add-ac-split3/{id}', [AcSplitController3::class, 'create2'])->name('ac-split3.create2');
Route::resource('ac-split3', AcSplitController3::class)->name('index', 'ac-split3.index')->middleware('auth');
Route::get('ac-split3/print/{id}', [AcSplitController3::class, 'print'])->name('ac-split3.print')->middleware('auth');

Route::get('add-ac-split4/{id}', [AcSplitController4::class, 'create2'])->name('ac-split4.create2');
Route::resource('ac-split4', AcSplitController4::class)->name('index', 'ac-split4.index')->middleware('auth');
Route::get('ac-split4/print/{id}', [AcSplitController4::class, 'print'])->name('ac-split4.print')->middleware('auth');

Route::get('cold-storage/create/{id}', [ColdStorageController::class, 'create2'])->name('cold-storage.create2');
Route::resource('cs', ColdStorageController::class)->name('index', 'cs.index')->middleware('auth');
Route::get('cs/print/{id}', [ColdStorageController::class, 'print'])->name('cs.print')->middleware('auth');

Route::get('cu/create/{id}', [CoolingUnitController::class, 'create2'])->name('cooling-unit.create2');
Route::resource('/cu', CoolingUnitController::class)->name('index', 'coolong-unit.index');
Route::get('cu/print/{id}', [CoolingUnitController::class, 'print'])->name('cu.print')->middleware('auth');

Route::get('auhp/create/{id}', [AUHPController::class, 'create2'])->name('auhp.create2');
Route::resource('/auhp', AUHPController::class)->name('index', 'auhp.index');
Route::get('auhp/print/{id}', [AUHPController::class, 'print'])->name('auhp.print')->middleware('auth');

Route::get('mch/create/{id}', [MiniChillerController::class, 'create2'])->name('mini-chiller.create2');

Route::resource('mini-chilleer', MiniChillerController::class)->name('index', 'mini-chilleer.index');
Route::get('mini-chilleer/print/{id}', [MiniChillerController::class, 'print'])->name('mini-chilleer.print')->middleware('auth');

Route::get('evp/create/{id}', [EvaporatorAirCoolerController::class, 'create2'])->name('evaporator-aircooler.create2');
Route::resource('/evaporator-aircooler', EvaporatorAirCoolerController::class)->names([
        'edit' => 'evaporator-aircooler.edit', // Nama untuk rute index
        'show' => 'evaporator-aircooler.show', // Nama untuk rute index
]);
Route::get('evaporator-aircooler/print/{id}', [EvaporatorAirCoolerController::class, 'print'])->name('evaporator-aircooler.print')->middleware('auth');

Route::get('acwc/create/{id}', [AirCooledWaterChillerController::class, 'create2'])->name('acwc.create2');
Route::resource('acwc', AirCooledWaterChillerController::class)->name('index', 'acwc');
Route::get('acwc/print/{id}', [AirCooledWaterChillerController::class, 'print'])->name('acwc.print')->middleware('auth');


Route::get('pac/create/{id}', [PACController::class, 'create2'])->name('pac.create2');
Route::resource('/pac', PACController::class)->names([
        'edit' => 'pac.edit', // Nama untuk rute index
        'show' => 'pac.show', // Nama untuk rute index
]);
Route::get('pac/print/{id}', [PACController::class, 'print'])->name('pac.print')->middleware('auth');







// Route::get('cooling-unit/{id}', [CoolingUnitController::class, 'create'])->name('cooling-unit.create2');

// Route::get('cooling-unit/{id}', [CoolingUnitController::class, 'create'])->name('cooling-unit.create');
// Route::put('cooling-unit/{id}', [CoolingUnitController::class, 'update'])->name('cooling-unit.update');





// Route::get('evaporator-aircooler/{id}', [EvaporatorAirCoolerController::class, 'create2'])->name('evaporator-aircooler.create2');    
// Route::put('evaporator-aircooler/{id}', [EvaporatorAirCoolerController::class, 'update'])->name('evaporator-aircooler.update');

Route::get('ahu/create/{id}', [AHUController::class, 'create2'])->name('ahu.create2');
Route::resource('/ahu', AHUController::class)->names([
        'edit' => 'ahu.edit', // Nama untuk rute index
        'show' => 'ahu.show', // Nama untuk rute index
]);
Route::get('ahu/print/{id}', [AHUController::class, 'print'])->name('ahu.print')->middleware('auth');

Route::get('cooling-tower/create/{id}', [CoolingTowerController::class, 'create2'])->name('cooling-tower.create2');
Route::resource('/cooling-tower', CoolingTowerController::class)->names([
        'edit' => 'cooling-tower.edit', // Nama untuk rute index
        'show' => 'cooling-tower.show', // Nama untuk rute index
]);
Route::get('cooling-tower/print/{id}', [CoolingTowerController::class, 'print'])->name('cooling-tower.print')->middleware('auth');


Route::get('humidifier/create/{id}', [HumidifierController::class, 'create2'])->name('humidifier.create2');
Route::resource('/humidifierr', HumidifierController::class)->names([
        'edit' => 'humidifier.edit', // Nama untuk rute index
        'show' => 'humidifier.show', // Nama untuk rute index
]);
Route::get('humidifier/print/{id}', [HumidifierController::class, 'print'])->name('humidifier.print')->middleware('auth');



Route::get('dehumidifier/create/{id}', [DehumidifierController::class, 'create2'])->name('dehumidifier.create2');
Route::resource('/dehumidifierr', DehumidifierController::class)->name('index', 'dehumidifer.index');
Route::get('dehumidifier/print/{id}', [DeHumidifierController::class, 'print'])->name('dehumidifier.print')->middleware('auth');

Route::get('fcuu/create/{id}', [FCUController::class, 'create2'])->name('fcuu.create2');
Route::resource('/fcuu', FCUController::class)->name('index', 'fcuu.index');
Route::get('fcuu/print/{id}', [FCUController::class, 'print'])->name('fcuu.print')->middleware('auth');

Route::get('exhaustfan/create/{id}', [ExhaustFanController::class, 'create2'])->name('exhaustfan.create2');
Route::resource('/exhaustfan', ExhaustFanController::class)->names([
        'edit' => 'exhaust-fan.edit', // Nama untuk rute index
        'show' => 'exhaust-fan.show', // Nama untuk rute index
]);
Route::get('exhaust-fan/print/{id}', [ExhaustFanController::class, 'print'])->name('exhaust-fan.print')->middleware('auth');


Route::get('pompaa/create/{id}', [PompaController::class, 'create2'])->name('pompaa.create2');
Route::resource('/pompaa', PompaController::class)->names([
        'edit' => 'pompaa.edit', // Nama untuk rute index
        'show' => 'pompaa.show', // Nama untuk rute index
]);
Route::get('pompaan/print/{id}', [PompaController::class, 'print'])->name('pompaa.print')->middleware('auth');


Route::get('spoot-cooling/create/{id}', [SpotCoolingController::class, 'create2'])->name('spoot-cooling.create2');
Route::resource('/spoot-cooling', SpotCoolingController::class)->names([
        'edit' => 'spoot-cooling.edit', // Nama untuk rute index
        'show' => 'spoot-cooling.show', // Nama untuk rute index
]);
Route::get('spoot-cooling/print/{id}', [SpotCoolingController::class, 'print'])->name('spoot-cooling.print')->middleware('auth');


Route::get('water-mistt/create/{id}', [WaterMistController::class, 'create'])->name('water-mistt.create2');
Route::resource('/water-mistt', WaterMistController::class)->names([
        'edit' => 'water-mist.edit', // Nama untuk rute index
        'show' => 'water-mist.show', // Nama untuk rute index
]);
Route::get('water-mist/print/{id}', [WaterMistController::class, 'print'])->name('water-mist.print')->middleware('auth');


Route::get('chiller-centrifugall/create/{id}', [ChillerCentrifugalController::class, 'create'])->name('chiller-centrifugall.create2');
Route::resource('/chiller-centrifugall', ChillerCentrifugalController::class)->names([
        'edit' => 'chiller-centrifugall.edit', // Nama untuk rute index
        'show' => 'chiller-centrifugall.show', // Nama untuk rute index
]);
Route::get('chiller-centrifugall/print/{id}', [ChillerCentrifugalController::class, 'print'])->name('chiller-centrifugall.print')->middleware('auth');



Route::get('import', [ImportController::class, 'showForm'])->name('import.form');
Route::post('import', [ImportController::class, 'import'])->name('import');
