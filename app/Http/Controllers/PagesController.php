<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Type\VoidType;
use App\Polls;

class PagesController extends Controller
{
    public function index(){
        return view('Vote.index');
    }
    public function about(){
        return view('Vote.About');
    }
    public function services(){
        return view('Vote.Services');
    }
    public function createpoll(){
        return view('Vote.CreatePoll');
    }
    public function submitpoll(){
        return view('Vote.SubmitPoll');
    }
    public function SearchPoll(Request $PollDetails ){
        $this->validate($PollDetails,[
            'Vote_Code' => 'required',
            'Voters_Email' => 'required',
        ]);
        $Poll_Id = $PollDetails->Vote_Code;
        $Voters_Email = $PollDetails->Voters_Email;

        $FindPoll = Polls::where('votecode',$Poll_Id)->get();
        if($FindPoll->isEmpty()){
            return redirect('/SubmitPoll')->with('error','Unable to locate Poll,Check code and try again!!!');
        }
        else{
            foreach($FindPoll as $FindPol){
                $Allowed_Emails = $FindPol['Email_Of_Voters'];
                $Exploded_Allowed_Emails = explode(',',$Allowed_Emails);
                $Voters_Email = strtolower($Voters_Email);

                foreach($Exploded_Allowed_Emails as $Exploded_Allowed_Email){
                    $Emails = strtolower($Exploded_Allowed_Email);
                    if($Voters_Email != $Emails){
                        return redirect('/SubmitPoll')->with('error','We are sorry You are not allowed to take part in this Poll');
                    }
                    else{
                        return redirect('Cast/'.$Poll_Id.'/');
                    }
                }
                /*
                if(in_array($Voters_Email,$Exploded_Allowed_Emails)){
                    return 123;
                }
                else{
                    return 'Lies';
                }
                */

            }

        }
    }
}
