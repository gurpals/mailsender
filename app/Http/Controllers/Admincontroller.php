<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use App\Models\User;
use App\Models\Campaigns;
use Auth;
use App\Jobs\SendEmailJob;
class Admincontroller extends Controller
{
/*auth*/
    public function adminLogin(){
        return view('Admin.login');
    }
    public function login(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/getCampaingn');
        }
        else{
         return redirect()->back()->with('error', 'credentials doesnot match!');
        }
    }

    public function logout(){
            Auth::logout();
            return redirect('/admin-login');
    }

/*Campaingn*/


    public function importView(Request $request,$id){
        $contacts= Contacts::where('campaign_id',$id)->orderBy('id', 'DESC')->get();
        $totalContactsCount= Contacts::where('campaign_id',$id)->count();
        $totalEmailSend= Contacts::where('campaign_id',$id)->where('is_email_sent','sent')->count();
        $totalEmailPending= Contacts::where('campaign_id',$id)->where('is_email_sent','pending')->count();
       return view('Admin.importCsv',compact('contacts','totalContactsCount','totalEmailSend','totalEmailPending'));
    }
    

    public function createCampaingn(Request $request){
        $this->Validate($request, [
            'name' => 'required|max:45|min:2'
     
        ]);
        $data = $request->all();
        $input=Campaigns::create($data);
             $Campaigns= Campaigns::orderBy('id', 'DESC')->get();
            return view('Admin.campaign_list',['Campaigns' => $Campaigns]);
    }
  
    public function getCampaingn(Request $request){

        $Campaigns= Campaigns::orderBy('id', 'DESC')->get();

        return view('Admin.campaign_list',compact('Campaigns'));
    }

    public function updateCampaingn(Request $request){
        $this->Validate($request, [
            'name' => 'required|max:45|min:2'
        ]);
        $data = Campaigns::where('id',$request->campaign_id)->update(['name'=>$request->name]);
        if($data){
             $Campaigns= Campaigns::orderBy('id', 'DESC')->get();
            return view('Admin.campaign_list',compact('Campaigns'));
        }else{
            return redirect()->back()->with('msg','Data not found ! ');
        }
    }

    public function CampaingnDetail($id){
        $data = Campaigns::find($id);
        if($data){

            return view('Admin.edit-campaingn',compact('data'));
        }else{
            return redirect()->back()->with('msg','Data not found ! ');
        }
    }

    public function deleteCampaingn($id){
            Campaigns::find($id)->delete();
            $Campaigns= Campaigns::orderBy('id', 'DESC')->get();
            return view('Admin.campaign_list', ['success' => 'Campaign deleted successfully','Campaigns'=>$Campaigns]);
    }


/*contacts*/

    public function getContacts(){

        $contacts= Contacts::orderBy('id', 'DESC')->get();

        return view('Admin.app-contacts',compact('contacts'));
    }
    
    public function importContacts(Request $request){
        $this->Validate($request, [
            'uploaded_file' => 'required|max:2097152|mimes:csv'
     
        ]);

        $data=[];
        $file = $request->file('uploaded_file');
        if ($file) {
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize(); //Get size of uploaded file in bytes
            //Check for file extension and size
            $this->checkUploadedFileProperties($extension, $fileSize);
            //Where uploaded file will be stored on the server 
            $location = 'uploads'; //Created an "uploads" folder for that
            // Upload file
            $file->move($location, $filename);
            // In case the uploaded file path is to be stored in the database 
            $filepath = public_path($location . "/" . $filename);
            // Reading file
            $file = fopen($filepath, "r");
            $importData_arr = array(); // Read through the file and store the contents as an array

            $i = 0;
        //Read the contents of the uploaded file 
        while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
            $num = count($filedata);
            // Skip first row (Remove below comment if you want to skip the first row)
            if ($i == 0) {
            $i++;
            continue;
            }
            for ($c = 0; $c < $num; $c++) {
            $importData_arr[$i][] = $filedata[$c];
           
            }
            $i++;
        }
        fclose($file); //Close after reading
        $j = 0;
        foreach ($importData_arr as $importData) {
                $data = Contacts::create([
                'campaign_id'                 => $request->campaign_id,
                'domain'                      =>$importData[0], 
                'email'                       =>$importData[1],
                'name'                        =>$importData[2],
                'organization'                =>$importData[3],
                'street'                      =>$importData[4],
                'city'                        =>$importData[5],
                'state'                      =>$importData[6],
                'postal_code'                =>$importData[7],
                'country'                    =>$importData[8],
                'telephone'                  =>$importData[9],
                ]);
                $send_mail = $importData[1];
                $name      = $importData[2];
                $id        = $request->campaign_id;
                dispatch(new SendEmailJob($send_mail,$name,$id));
                Contacts::where('email',$importData[1])->where('campaign_id',$request->campaign_id)->update(['is_email_sent'=>'sent']);   
            }

         $contacts= Contacts::where('campaign_id',$request->campaign_id)->orderBy('id', 'DESC')->get();

         return redirect()->back()->with(['success'=>'Data added sucessfully !','contacts'=>$contacts]);
        }
      
    }
 
    public function checkUploadedFileProperties($extension, $fileSize){
        $valid_extension = array("csv", "xlsx"); //Only want csv and excel files
        $maxFileSize = 2097152; // Uploaded file size limit is 2mb
            if (in_array(strtolower($extension), $valid_extension)) {
                if ($fileSize <= $maxFileSize) {
                }else{
                    return redirect()->back()->with('error','No file was uploaded');
                }
            }else{
                 return redirect()->back()->with('error','Invalid file extension');
               
            }
    } 


     public function resentEmail($id){
        $contacts=Contacts::where('campaign_id',$id)->where('is_email_sent','pending')->get('email');
        foreach ($contacts as $value) {
            $send_mail = $value;
                dispatch(new SendEmailJob($send_mail));
        }
         $contacts= Contacts::where('campaign_id',$id)->orderBy('id', 'DESC')->get();
        return redirect()->back()->with(['success'=>'email sent sucessfully !','contacts'=>$contacts]);

     }
}
