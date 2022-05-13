<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Socialmedia;
use App\Models\Logo;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Image;
use Response;

class EditController extends Controller
{
    public function view () 
    {
       return view('Edit/reportpage');
    }

    public function search(Request $request)
    {
        $search_val =  $request -> input('search_in_page');
        $patdata = DB::table('Patients')->select('Patients.*')->where('Patients.pat_passport_no', '=', $search_val)->get();
        $repdata = DB::table('Reports')->select('Reports.*')->where('Reports.rep_passport_no', '=', $search_val)->get();
        $search_val =  $request -> input('search_in_page');
        return view('Edit/editpatrep', compact('patdata','repdata'));
    }


    public function destroy($id)
    {
        {
            $repdata=Report::find($id);
            $repdata->delete();
             return redirect('/report');
        }
    }

    public function updatepat(Request $request)
    {
        $patdata= Patient::find($request->id);
        $patdata->update([
            'pat_passport_no'                       => $request->pat_passport_no,
            'pat_name'                              => $request->pat_name,
            'pat_nationality'                       => $request->pat_nationality,
            'pat_date_of_birth'                     => $request->pat_date_of_birth,
            'pat_gender'                            => $request->pat_gender,
            'pat_job'                               => $request->pat_job,
            'pat_payer'                             => $request->pat_payer,
     
            
        ]);
        $patdata->save();
        return redirect('/');
    }

    public function editrep($repid)
    {
        {
          
            $repdata = DB::table('Reports')->select('Reports.*')->where('Reports.id', '=', $repid)->get();
             return view('Edit/updaterep',compact('repdata'));
        }
    }


    public function updaterep(Request $request){

        $image_file = $request->image;
        if ($image_file != null) {
            $image = Image::make($image_file);
            Response::make($image->encode('jpeg'));
        } else {
            $image=null;
        }

        $repdata= Report::find($request->id);
        $repdata->update([
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
                   
    
            
                            ]);
                            $repdata->save();
                            return redirect('/report');
               }
  

      

}

