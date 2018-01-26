<?php

namespace App\Http\Controllers;
use App\Offer;
use App\question;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        return view('question.home');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        /*
            $this->validate($request, [
           'specilaization' => 'required',
           'title' => 'required',
           'detail' => 'required',
           'file' => 'required|mimes:pdf,word,docx,rar,png,jpg,gif,jpeg|max:2048',
           'Email'=>'required|unique:orders',
           'phone'=>'required|unique:orders',
           'date_deliever' => 'required',
           'num_researcher' => 'required',
           'ducoment' => 'required',


        ]);*/
        $time=strtotime($request->date);
        $day=date("d",$time);
        $month=date("m",$time);
        $year=date("Y",$time);
        $order = new question();
        $order->specialist=$request->specilaization;
        $order->title=$request->title.Auth::id();
        $order->details=$request->detail;
        $order->Email=$request->email;
        $order->dead_line=$request->date;
        $order->dead_line_user=carbon::createFromDate($year,$month,$day)->subDay(3);
        $order->researcherCount=$request->num_researcher;
        $order->moqPayment=$request->fullpayment;
        $order->hourePrice=$request->payment_byhour;
        $order->houresCount=$request->hours;
        $order->docType=$request->ducoment;
        $order->phone=$request->phone;
        if ($request->hasFile('file')) {
            $filenameWithExtention = $request->file('file')->getClientOriginalName();
            $fileName = pathinfo($filenameWithExtention, PATHINFO_FILENAME);
            $extention = $request->file('file')->getClientOriginalExtension();
            $fileStore = $fileName . '_' . time() . '.' . $extention;
            $path = $request->file('file')->move(base_path() . '/public/file/', $fileStore);
            //echo '/public/file/'.$fileStore;
            $order->file = $fileStore;
        }

        $order->save();

        return redirect('/submit/'.$order->id);
        //return view('question.submit')->with('question',$request);
    }
    public function index1($id){
        $question=question::find($id);
        return view('question.submit',compact('question'));
    }
    public function refuse($id){
        $question=question::find($id);
        return view('question.submit',compact('question'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store1($id) {

        $question=question::find($id);
        $users=User::where('specialist',$question->specialist)->orderBy('connects', 'desc')->take($question->researcherCount)->get();
        foreach ($users as $user)
        {
            $offers=new offer();
            $offers->user_id=$user->id;
            $offers->order_id=$question->id;
            $offers->save();
        }
        return redirect('/sendedOrder/'.$id);


    }
    public function show($id)
    {
        //
        $question=question::find($id);
        $message='your order of '. $question->title .' is submitted to our system we will email you with progress, thank you for using our service';
        return view('question.message')->with('message',$message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
