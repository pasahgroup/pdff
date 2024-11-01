<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;
use DB;
use App\Models\employee;
use JasperPHP\JasperPHP;

require_once('../vendor/autoload.php');

class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Laravel PDF Example',
            'date' => date('m/d/Y'),
        ];

        return view('myPDF',$data);

        //$pdf = PDF::loadView('myPDF', $data);
        // return $pdf->download('document.pdf');
    }

      public function printPDF()
    {
        $data = [
            'title' => 'Laravel PDF Example',
            'date' => date('m/d/Y'),
        ];

        //return view('myPDF', $data);

        $pdf = PDF::loadView('myPDF', $data);
     return $pdf->download('document.pdf');
    }

// print jasperPDF
   public function printJ()
    {

// require __DIR__ . '/vendor/autoload.php';

  $input = app_path('/reports/hello_world.jrxml');
// $input = __DIR__ . '/vendor/geekcom/phpjasper/examples/hello_world.jrxml';   

$jasper = new JasperPHP;
$jasper->compile($input)->execute();
    }


 public function printJR()
    {

  $input = app_path('/reports/hello_world.jasper');

// $output = __DIR__ . '/vendor/geekcom/phpjasper/examples';  
  $output = app_path('/reports');

$jasper = new JasperPHP;
$jasper->process(
    $input,
    $output,
    array("pdf", "rtf")
)->execute();

    }


      public function printData()
    {
      $datax = DB::table('employees')->paginate(50);

      $datas=employee::get();
      // $data['data'] =$datas;
     //dd($datas);
$data = [
            'title' => 'Laravel PDF Example',
            'date' => date('m/d/Y'),
         'datas' =>$datas,
        ];
        //return view('data',compact('datas'));
      // $pdf = PDF::loadView('data', ['datas' => $data]);
          return view('data',$data);
     $pdf = PDF::loadView('data',$data);
     // return $pdf->download('document.pdf');
    }

      public function print_data()
    {
      $datax = DB::table('employees')->paginate(50);

      $datas=employee::get();
      // $data['data'] =$datas;
     //dd($datas);
$data = [
            'title' => 'Laravel PDF Example',
            'date' => date('m/d/Y'),
         'datas' =>$datas,
        ];
        //return view('data',compact('datas'));
      // $pdf = PDF::loadView('data', ['datas' => $data]);
          //return view('data',$data);
     $pdf = PDF::loadView('data',$data);
   return $pdf->download('document_hg.pdf');
    }
}
