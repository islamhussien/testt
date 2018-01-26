<?php

namespace App\Http\Controllers;

use App\Offer;
use App\question;
use App\status;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');
    }

    public function showOrdersForReachers(){
        $id=Auth::id();
        $offers=Offer::where('user_id',$id)->get();
        $questions=[];
        $i=0;
        foreach($offers as $offer)
        {
            //echo $offer->order_id;
            $questions[$i]=question::where('id',$offer->order_id)->get()->toarray();
            $i++;
        }
        //dd($questions);
        return view('researchers.showAll',compact('questions'));
    }
    public function approval($id,$count){
        $offers=Offer::where('user_id',Auth::id())->get();
        $offer='0';
        for($i=1;$i<=count($offers);$i++){
            if($count==$i){
                $offer=$offers[$i-1];
            }
        }
        $user=User::find(auth::id());
        $user->connects=$user->connects-2;
        $user->save();
        $status= new status();
        $status->user_id=$offer->user_id;
        $status->order_id=$offer->order_id;
        $status->status=1;
        $status->save();
        $myCurrentProjects=status::where('user_id',Auth::id())->get();
        $offer->delete();
        $questions=[];
        $i=0;
        foreach($myCurrentProjects as $myCurrentProject)
        {
            //echo $offer->order_id;
            $questions[$i]=question::where('id',$myCurrentProject->order_id)->get()->toarray();
            $i++;
        }
        //dd($questions);
        return redirect('/myProjects');

    }
    public function myProjects(){
        $status=status::where('user_id',Auth::id())->get();
        $questions=[];
        $i=0;
        foreach($status as $statuses)
        {
            //echo $offer->order_id;
            $questions[$i]=question::where('id',$statuses->order_id)->get()->toarray();
            $i++;
        }
        //dd($status);
        return view('researchers.myProjects')->with('questions',$questions);
    }
    public function refuse($id,$count){
        $offers=Offer::where('user_id',Auth::id())->get();
        $offer='0';
        for($i=1;$i<=count($offers);$i++){
            if($count==$i){
                $offer=$offers[$i-1];
            }
        }
        $offer->delete();
    }

}
