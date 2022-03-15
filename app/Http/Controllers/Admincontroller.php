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
            return redirect()->intended('/dashboard');
        }
        else{
            return redirect()->back()->with('error', 'Your credentials doesnot match with our records.');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

/*Campaingn*/


    public function importView(Request $request,$id){
        $resolveClass = resolve(Contacts::class);
        $campaign_name = $resolveClass->getCampaignName($id);
        $contacts = $resolveClass->getContactsUsingID($id);
        $totalSentEmails = $resolveClass->getCountOfSentEmailContacts($id,'campaign');
        $totalPendingEmails = $resolveClass->getCountOfPendingEmailContacts($id,'campaign');
        //return $contacts;
        $unityArray = array();
        $i =0;
        foreach($contacts as $key => $contact){
            $unityArray['sent'.$i] = $resolveClass->getUnityCountSentEachUpload($id,$contact,'Sent');
            $unityArray['pending'.$i] = $resolveClass->getUnityCountPendingEachUpload($id,$contact,'pending');
            $i++;
        }
        //return $unityArray;
        return view('Admin.importCsv', compact('unityArray','campaign_name', 'contacts','totalSentEmails','totalPendingEmails'));
    }
    
    public function getResolvedCampaigns(){
        return resolve(Campaigns::class)->getDescRecords();
    }
    public function ContactDetailAccordingDate(Request $request){
        $resolveClass = resolve(Contacts::class);
        $campaign_name = $resolveClass->getCampaignName($request->campaign);
        $contacts = $resolveClass->getContactsCreatedAt($request->year,$request->campaign);
        return view('Admin.contacts-list', compact('campaign_name', 'contacts'));
    }
    public function createCampaingn(Request $request){
        $this->Validate($request, [
            'name' => 'required|max:45|min:2'
        ]);
        $data = $request->all();
        $input = Campaigns::create($data);
        //$Campaigns = $this->getResolvedCampaigns();
        return redirect()->route('admin.read.campaigns');
    }

    public function getCampaingn(Request $request){
        $Campaigns = $this->getResolvedCampaigns();
        return view('Admin.campaign_list', compact('Campaigns'));
    }

    public function updateCampaingn(Request $request){
        $this->Validate($request, [
            'name' => 'required|max:45|min:2'
        ]);
        $data = Campaigns::where('id',$request->campaign_id)->update(['name'=>$request->name]);
        return redirect()->route('admin.read.campaigns');
    }

    public function CampaingnDetail($id){
        $data = Campaigns::where('id',$id)->first();
        return view('Admin.edit-campaingn', compact('data'));
    }

    public function deleteCampaingn($id){
        Campaigns::find($id)->delete();
        return back();
    }

    public function getContacts(){
        $contacts = $this->getResolvedCampaigns();
        return view('Admin.app-contacts',compact('contacts'));
    }
    
    public function importContacts(Request $request){
        $this->Validate($request, [
            'uploaded_file' => 'required|max:2097152|mimes:csv'
        ]);

        $data=[];
        if ($request->hasfile('uploaded_file')) {   
            $file = $request->file('uploaded_file');
            $filename = $file->getClientOriginalName();
            $location = 'uploads';
            $file->move($location, $filename); 
            $filepath = public_path($location . "/" . $filename);
            $file = fopen($filepath, "r");
            $importData_arr = array();
            $i = 0;
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
            fclose($file);
            foreach ($importData_arr as $importData) {
                $data = Contacts::create([
                    'campaign_id'                 => $request->campaign_id,
                    'domain'                      => $importData[0], 
                    'email'                       => $importData[1],
                    'name'                        => $importData[2],
                    'organization'                => $importData[3],
                    'street'                      => $importData[4],
                    'city'                        => $importData[5],
                    'state'                       => $importData[6],
                    'postal_code'                 => $importData[7],
                    'country'                     => $importData[8],
                    'telephone'                   => $importData[9]
                ]);
            }
            return redirect()->back()->with(['success'=>'CSV Uploaded Successfully!']);
        }
      
    }

    public function SendAllEmailsInQueue($id){
        $allContacts = Contacts::where('campaign_id',$id)->where('is_email_sent','pending')->get()->unique('email');
        if(!count($allContacts)){
            return back()->with('qerror','You do not have any pending records. Please Upload CSV First');
        }
        foreach($allContacts as $single_contact){
            //$array = ['name' => $single_contact->name, 'email' => $single_contact->email];
            SendEmailJob::dispatch($single_contact);
        }
        return back();
    }
    
    // public function SendAllPendingEmailsInQueue($id){
    //     $contacts = Contacts::where('campaign_id',$id)->where('is_email_sent','pending')->get('name','email');
    //     if(count($contacts) > 0){
    //         foreach($contacts as $single_contact){
    //             //$array = ['name' => $single_contact->name, 'email' => $single_contact->email];
    //             SendEmailJob::dispatch($single_contact);
    //         }
    //     }
    //     return back();
    // }
}
