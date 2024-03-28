<?php

use App\Models\AcSplit;
use App\Models\ChillerCentrifugal;
use App\Models\ColdStorage;
use App\Models\CoolingUnit;
use App\Models\EvaporatorAirCooler;
use App\Models\ExhaustFan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AHUController;
use App\Http\Controllers\FCUController;
use App\Http\Controllers\PACController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\AUHPController;
use App\Http\Controllers\FreonController;
use App\Http\Controllers\PompaController;
use App\Http\Controllers\AcSplitController;
use App\Http\Controllers\RegulerController;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ScheduleController;
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
use App\Http\Controllers\AuthorityController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TasklistController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use SebastianBergmann\Type\Parameter;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('customer', CustomerController::class)->name('index', 'customer.index')->middleware('auth');
Route::resource('kapasitas', KapasitasController::class)->name('index', 'kapasitas.index')->middleware('auth');
Route::resource('area', AreaController::class)->name('index', 'area.index')->middleware('auth');
Route::resource('tasklist', TasklistController::class)->name('index', 'tasklist.index')->middleware('auth');
Route::resource('freon', FreonController::class)->name('index', 'freon.index')->middleware('auth');
Route::resource('reguler', RegulerController::class)->name('index', 'reguler.index')->middleware('auth');
Route::resource('authority', AuthorityController::class)->name('index', 'authority.index')->middleware('auth');
Route::resource('room', RoomController::class)->name('index', 'room.index')->middleware('auth');
Route::resource('akun', AkunController::class)->name('index', 'akun.index')->middleware('auth');
Route::resource('schedule', ScheduleController::class)->name('schedule', 'schedule.index')->middleware('auth');
Route::resource('equipment', EquipmentController::class)->name('index', 'equipment.index')->middleware('auth');
Route::get('equipment/print/{id}', [EquipmentController::class,'print'])->name('equipment.print')->middleware('auth');
Route::delete('gambar1/delete/{id}', [EquipmentController::class,'gambar1_destroy'])->name('gambar.destroy')->middleware('auth');
Route::delete('gambar2/delete/{id}', [EquipmentController::class,'gambar2_destroy'])->name('gambar2.destroy')->middleware('auth');
Route::delete('history/delete/{id}', [EquipmentController::class,'history_destoroy'])->name('history.destroy')->middleware('auth');
Route::get('equipment/pp/{id}', [EquipmentController::class,'printpp'])->name('equipment.printp')->middleware('auth');
Route::post('equipment/search', [EquipmentController::class, 'search'])->name('equipment.search')->middleware('auth');
Route::get('scheduleget', [ScheduleController::class, 'GetSchedule'])->name('scheduleget')->middleware('auth');
Route::get('part', [EquipmentController::class, 'part'])->name('part.index')->middleware('auth');
Route::get('part/{id}', [EquipmentController::class, 'partshow'])->name('part.show')->middleware('auth');


Route::resource('formberitaacara', FormBeritaAcaraController::class)->name('index', 'formberitaacara.index')->middleware('auth');
Route::get('survey/{id}', [FormBeritaAcaraController::class,'create'])->name('survey.create')->middleware('auth');
Route::get('search', [EquipmentController::class,'scan'])->name('scan')->middleware('auth');
Route::resource('troubleshoot', TroubleshootController::class)->name('index', 'troubleshoot.index')->middleware('auth');
Route::get('ts/{id}', [TroubleshootController::class, 'create'])->name('ts.create')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');



Route::resource('formberitaacara', FormBeritaAcaraController::class)->name('index', 'formberitaacara.index');
Route::get('survey/{id}', [FormBeritaAcaraController::class,'create'])->name('survey.create');
Route::get('search', [EquipmentController::class,'scan'])->name('scan');
Route::resource('troubleshoot', TroubleshootController::class)->name('index', 'troubleshoot.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('add-ac-split/{id}', [AcSplitController::class, 'create2'])->name('ac-split.create2');
Route::resource('ac-split', AcSplitController::class)->name('index', 'ac-split.index')->middleware('auth');

Route::get('cold-storage/create/{id}', [ColdStorageController::class, 'create2'])->name('cold-storage.create2');
Route::resource('cs', ColdStorageController::class)->name('index', 'cs.index')->middleware('auth');

Route::get('cu/create/{id}', [CoolingUnitController::class, 'create2'])->name('cooling-unit.create2');
Route::resource('/cu', CoolingUnitController::class)->name('index','coolong-unit.index');
Route::get('auhp/create/{id}', [AUHPController::class, 'create2'])->name('auhp.create2');        
Route::resource('/auhp', AUHPController::class)->name('index','auhp.index');

Route:: get('mch/create/{id}', [MiniChillerController::class, 'create2'])->name('mini-chiller.create2');

Route::resource('mini-chilleer', MiniChillerController::class)->name('index','mini-chilleer.index');

Route::get('evp/create/{id}', [EvaporatorAirCoolerController::class, 'create2'])->name('evaporator-aircooler.create2');
Route::resource('/evaporator-aircooler', EvaporatorAirCoolerController::class)->names([
        'edit' => 'evaporator-aircooler.edit', // Nama untuk rute index
        'show' => 'evaporator-aircooler.show', // Nama untuk rute index
]);
Route::get('acwc/create/{id}', [AirCooledWaterChillerController::class, 'create2'])->name('acwc.create2');              
Route::resource('acwc', AirCooledWaterChillerController::class)->name('index', 'acwc');


Route::get('pac/create/{id}', [PACController::class, 'create2'])->name('pac.create2');    
Route::resource('/pac', PACController::class)->names([
        'edit' => 'pac.edit', // Nama untuk rute index
        'show' => 'pac.show', // Nama untuk rute index
        ]); 





      
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

Route::get('cooling-tower/create/{id}', [CoolingTowerController::class, 'create2'])->name('cooling-tower.create2');       
Route::resource('/cooling-tower', CoolingTowerController::class)->names([
        'edit' => 'cooling-tower.edit', // Nama untuk rute index
        'show' => 'cooling-tower.show', // Nama untuk rute index
        ]); 


Route::get('humidifier/create/{id}', [HumidifierController::class, 'create2'])->name('humidifier.create2');        
Route::resource('/humidifierr', HumidifierController::class)->names([
        'edit' => 'humidifier.edit', // Nama untuk rute index
        'show' => 'humidifier.show', // Nama untuk rute index
        ]); 
    

Route::get('dehumidifier/create/{id}', [DehumidifierController::class, 'create2'])->name('dehumidifier.create2');        
Route::resource('/dehumidifierr', DehumidifierController::class)->name('index','dehumidifer.index'); 
    
Route::get('fcuu/create/{id}', [FCUController::class, 'create2'])->name('fcuu.create2');       
Route::resource('/fcuu', FCUController::class)->name('index','fcuu.index'); 
    
Route::get('exhaustfan/create/{id}', [ExhaustFanController::class, 'create2'])->name('exhaustfan.create2');       
Route::resource('/exhaustfan', ExhaustFanController::class)->names([
        'edit' => 'exhaust-fan.edit', // Nama untuk rute index
        'show' => 'exhaust-fan.show', // Nama untuk rute index
        ]); 
    
Route::get('pompaa/create/{id}', [PompaController::class, 'create2'])->name('pompaa.create2');       
Route::resource('/pompaa', PompaController::class)->names([
        'edit' => 'pompaa.edit', // Nama untuk rute index
        'show' => 'pompaa.show', // Nama untuk rute index
        ]); 
    
Route::get('spoot-cooling/create/{id}', [SpotCoolingController::class, 'create2'])->name('spoot-cooling.create2');       
Route::resource('/spoot-cooling', SpotCoolingController::class)->names([
        'edit' => 'spoot-cooling.edit', // Nama untuk rute index
        'show' => 'spoot-cooling.show', // Nama untuk rute index
        ]); 
    
Route::get('water-mist/{id}', [WaterMistController::class, 'create'])->name('water-mist.create2');       
Route::resource('/water-mist', WaterMistController::class)->names([
        'edit' => 'water-mist.edit', // Nama untuk rute index
        'show' => 'water-mist.show', // Nama untuk rute index
        ]); 

Route::get('chiller-centrifugal/{id}', [ChillerCentrifugalController::class, 'create'])->name('chiller-centrifugal.create2');       
Route::resource('/chiller-centrifugal', ChillerCentrifugalController::class)->names([
        'edit' => 'chiller-centrifugal.edit', // Nama untuk rute index
        'show' => 'chiller-centrifugal.show', // Nama untuk rute index
        ]); 
