<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

// use JasperPHP\JasperPHP as JasperPHP;

use JasperPHP\JasperPHP;

require_once('../vendor/autoload.php');




Route::get('/c', function () {

// require __DIR__ . '/vendor/autoload.php';

  $input = app_path('/reports/hello_world.jrxml');
// $input = __DIR__ . '/vendor/geekcom/phpjasper/examples/hello_world.jrxml';   

$jasper = new JasperPHP;
$jasper->compile($input)->execute();
});


Route::get('/r', function () {
// $input = __DIR__ . '/vendor/geekcom/phpjasper/examples/hello_world.jasper'; 

  $input = app_path('/reports/hello_world.jasper');

// $output = __DIR__ . '/vendor/geekcom/phpjasper/examples';  
  $output = app_path('/reports');

$jasper = new JasperPHP;
$jasper->process(
    $input,
    $output,
    array("pdf", "rtf")
)->execute();

});




// Route::get('/java', function () {
    
//             $jasper = new JasperPHP;
        
//             // Compile a JRXML to Jasper
//              $filename = 'department';
//             $output = app_path('/reports/' . $filename);
//           $t=  $jasper->compile($output)->execute();
         
//            // $t=  $jasper->compile( '/home/midhun/hi/hello.jrxml')->execute();
//         var_dump($t);
     
//             // Process a Jasper file to PDF and RTF (you can use directly the .jrxml)
//             $jasper->process(
//                 '/home/midhun/hi/hello.jrxml',
//                 false,
//                 array("pdf", "rtf"),
//                 array("php_version" => "8.0.3")
//             )->execute();
        
//             // List the parameters from a Jasper file.
//             $array = $jasper->list_parameters(
//                 '/home/midhun/hi/hello.jrxml'
//             )->execute();
//             var_dump($array);
//             return view('welcome');
//         });



Route::get('/', function () {
    return view('welcome');
});

Route::get('pdf', [PDFController::class, 'generatePDF']);
Route::get('printPDF', [PDFController::class, 'printPDF']);

Route::get('printData', [PDFController::class, 'printData']);
Route::get('print_data', [PDFController::class, 'print_data']);