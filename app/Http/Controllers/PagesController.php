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
            return $FindPoll;
        }
    }
}
