<?php
namespace App\Http\Controllers;

use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;
use Illuminate\Support\Facades\DB as FacadesDB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Socialmedia;
use App\Models\Patient;
use App\Models\Report;
use App\Models\Vartable;
use PhpOption\Option;
use App\Models\Logo;
use Response;
use Image;
use File;
use PDF;

class MedReportController extends Controller
{
    
    ////////////////////////////////////////////////////////////////////////////////////////
    public function pat_store(Request $request)
    {
        try {
            $form_data = array(
                'pat_passport_no'                       => $request->pat_passport_no,
                'pat_name'                              => $request->pat_name,
                'pat_nationality'                       => $request->pat_nationality,
                'pat_date_of_birth'                     => $request->pat_date_of_birth,
                'pat_gender'                            => $request->pat_gender,
                'pat_job'                               => $request->pat_job,
                'pat_payer'                             => $request->pat_payer,
               
               );
            Patient::create($form_data);
            return redirect()->back()->with('success', $form_data['pat_name'] .'  added successfuly to the database');
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() === '23000') {
                // integrity constraint violation
                dd("خطأ في الادخال قد يكون الحقل موجود مسبقاً أو حقل مطلوب بقي فارغ , يرجى التحقق؟");
                //return redirect()->back()->withError('Invalid data');
            }
        }
    }
    ////////////////////////////////////////////////////////////////////////////////////////
    public function rep_store(Request $request)
    {
        try {
            $image_file = $request->image;
            if ($image_file != null) {
                $image = Image::make($image_file);
                Response::make($image->encode('jpeg'));
            } else {
                $image=null;
            }
                
            $form_data = array(
                    'rep_passport_no'              => $request->rep_passport_no,
                    'rep_sample_type'              => $request->rep_sample_type,
                    'rep_result'                   => $request->rep_result,
                    'rep_result_ar'                => $request->rep_result_ar,
                    'rep_verified_by'              => $request->rep_verified_by,
                    'rep_lab_director'             => $request->rep_lab_director,
                    'rep_reviewed_by'              => $request->rep_reviewed_by,
                    'rep_registration_date'        => $request->rep_registration_date,
                    'rep_result_date'              => $request->rep_result_date,
                    'rep_acc_no'                   => $request->rep_acc_no,
                    'rep_image'                    => $image,

            
                );
                
            Report::create($form_data);
            return redirect()->back()->with('success', $form_data['rep_passport_no'] .'  added successfuly to the database');
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() === '23000') {
                dd("خطأ في الادخال , قد يكون رقم جواز المدخل السفر غير موجود أو حقل مطلوب بقي فارغ, يرجى التحقق من ذلك؟");
               
            }
        }
    }
    ////////////////////////////////////////////////////////////////////////////////////////
    /*  public function getSubcategory(Request $request){
         $Rep_Id= $request->q;
         $data_result = DB::table('Patients')
         ->join('Reports', 'Patients.pat_passport_no', '=', 'Reports.rep_passport_no')
         ->select('Patients.*', 'Reports.*')->where('Patients.pat_passport_no','=',  $Rep_Id )
         ->get();
         return view('details',compact('data_result'));
    }*/
    //////////////////////////////////////////////////////////////////////////////////////////
    public function showRep($id)
    {
        $image = Report::findOrFail($id);
        $image_file = Image::make($image -> rep_image);
        $response = Response::make($image_file->encode('jpeg'));
        $response->header('Content-Type', 'image/jpeg');
        return $response;
    }
    //////////////////////////////////////////////////////////////////////////////////////////
    public function showPat($id)
    {
        $image = Patient::findOrFail($id);
        $image_file = Image::make($image -> pat_image);
        $response = Response::make($image_file->encode('jpeg'));
        $response->header('Content-Type', 'image/jpeg');
        return $response;
    }
    ////////////////////////////////////////////////////////////////////////////////////////
    public function search(Request $request)
    {
        $search_val =  $request -> input('search_in_page');
        $data_result = DB::table('Patients')
                    ->join('Reports', 'Patients.pat_passport_no', '=', 'Reports.rep_passport_no')
                    ->select('Patients.*', 'Reports.*')->where('Patients.pat_passport_no', '=', $search_val)
                    ->get();

        $search_val =  $request -> input('search_in_page');
        return view('Result_search', compact('data_result'));
    }
    //////////////////////////////////////////////////////////////////////////////////////////
    public function ShowDetalis($var_id)
    {
        $Rep_Id= $var_id;
        $data_result = DB::table('Patients')
        ->join('Reports', 'Patients.pat_passport_no', '=', 'Reports.rep_passport_no')
        ->select('Patients.*', 'Reports.*')->where('Reports.id', '=', $Rep_Id)
        ->get();
        $QR_passporNo=DB::table('Reports')->select('rep_passport_no')->where('Reports.id', '=', $Rep_Id)->get();
        $logo=Logo::all();
        $social=Socialmedia::all();
        //N10252B
        $qrcod=QrCode::size(120)->generate(url('/getReport/sh?search_in_page=').strval(substr($QR_passporNo, strpos($QR_passporNo, ':')+2, strlen(strpos($QR_passporNo, '"'))-4))) ;
 
        return view('details', compact('data_result', 'logo', 'social', 'qrcod'));
    }
    ///////////////////////////////////////////////////////////////////////////////
    public function showlogo($id)
    {
        $image = Logo::findOrFail($id);
        $image_file = Image::make($image -> logo_image);
        $response = Response::make($image_file->encode('jpeg'));
        $response->header('Content-Type', 'image/jpeg');
        return $response;
    }
    ///////////////////////////////////////////////////////////////////////////////////
    public function Search_Criteria(Request $request)
    {
        $search_val = array(
            'Passport_No'                       =>$request->Passport_No,
            'Acc_No_From'                       =>$request->Acc_No_From,
            'Acc_No_To'                         =>$request->Acc_No_To,
            'Accession_Number'                  =>$request->Accession_Number,
            'Visit_Date_To'                     =>$request->Visit_Date_To,
            'Visit_Date_From'                   =>$request->Visit_Date_From,
            );
        $data_result = DB::table('Patients')
                ->join('Reports', 'Patients.pat_passport_no', '=', 'Reports.rep_passport_no')
                ->select('Patients.*', 'Reports.*')
                ->where('Patients.pat_passport_no', '=', $search_val['Passport_No'])
                ->where('rep_acc_no', '=', $search_val['Accession_Number'])
                ->orwhereBetween('rep_registration_date', [$search_val['Visit_Date_From'] , $search_val['Visit_Date_To'] ])
                ->orwhereBetween('rep_acc_no', [$search_val['Acc_No_From'] , $search_val['Acc_No_To'] ])
                ->get();
        return view('Search_Criteria', compact('data_result'));
    }
    ///////////////////////////////////////////////////////////////////////////////////////
    public function setValueInGlobalVar($Var){
        DB::table('vartables')->truncate();
         $form_data = array(
            'public_var'         =>  $Var,
           );
           Vartable::create($form_data);
         return view('repdetails');
    }
    ////////////////////////////////////////////////////////////////////////////////////////
    public function index()
    {
       
        $getrow = DB::table('vartables')->select('public_var')->get();
        foreach ($getrow as $col) {
            $Rep_Id= $col->public_var;
        }
        //dd($Rep_Id);
        $data_result = DB::table('Patients')
        ->join('Reports', 'Patients.pat_passport_no', '=', 'Reports.rep_passport_no')
        ->select(['Patients.*', 'Reports.*'])->where('Reports.id','=',  $Rep_Id )
        ->get();
        
        $socialmedia = Socialmedia::all();
        $pdf = PDF::loadView('index', compact('data_result','socialmedia'));
        return $pdf->stream('document.pdf');
    }
    ///////////////////////////////////////////////////////////////////////////////////////



    public function pdf()
    {
       
        $getrow = DB::table('vartables')->select('public_var')->get();
        foreach ($getrow as $col) {
            $Rep_Id= $col->public_var;
        }
        //dd($Rep_Id);
        $data_result = DB::table('Patients')
        ->join('Reports', 'Patients.pat_passport_no', '=', 'Reports.rep_passport_no')
        ->select(['Patients.*', 'Reports.*'])->where('Reports.id','=',  $Rep_Id )
        ->get();
        
        $socialmedia = Socialmedia::all();
        $pdf = PDF::loadView('index', compact('data_result','socialmedia'));
        return $pdf->download('Result.pdf');
    }
}
