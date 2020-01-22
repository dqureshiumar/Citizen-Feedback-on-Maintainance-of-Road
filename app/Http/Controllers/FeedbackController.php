<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Feedbacks;
use DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use Intervention\Image\ImageManagerStatic as Image;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function index()
    {
        return view('roads.submit');
    }
    public function homepage(){
    $side = DB::table('feedbacks')
            ->limit(3)
            ->where('verified',1)
            ->orderBy('id', 'desc')
            ->get();
    $recents = DB::table('feedbacks')
                ->limit(2)
                ->where('verified',1)
                ->orderBy('id', 'desc')
                ->get();
    return view('roads.index')->with('side',$side)->with('recents',$recents);
    }
    public function views()
    {
        $feeds = Feedbacks::where(['userid'=>Auth::user()->id])->orderBy('id','desc')->get();
        return view('roads.feedback')->with('feeds',$feeds);;
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
    public function store(Request $request)
    {
        $input=$request->all();
        $images=array();
        if($files=$request->file('filename')){
            foreach($files as $file){
                // Get filename with the extension
                $filenameWithExt = $file->getClientOriginalName();
                // Resize the Image
                $image_resize = Image::make($file->getRealPath());  
                //Resize Step 2
                $image_resize->resize(1000, 500)->encode('jpg');
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $file->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                //$path = $image_resize->storeAs('public/property_images', $fileNameToStore);
                $store = Storage::put('public/feedbacks/'.$fileNameToStore, $image_resize->__toString());
                $images[]=$fileNameToStore;
            }
        }
        else {
            $fileNameToStore = 'noimage.jpg';
        }
        $feedback = new Feedbacks;
        $feedback->userid = auth()->user()->id;
        $feedback->feedarea = $request->input('feedarea');
        $feedback->other = $request->input('other');
        $feedback->remark = $request->input('remark');
        $feedback->state = $request->input('state');
        $feedback->city = $request->input('city');
        $feedback->pincode = $request->input('pincode');
        $feedback->landmark = $request->input('landmark');
        $feedback->address = $request->input('address');
        $feedback->filename = implode("|",$images);
        $feedback->save();
        return redirect('/my-feedbacks')->with('success', 'Feedbacks Added');;  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feedback = Feedbacks::find($id);
        return view('roads.view')->with('feedback',$feedback);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feedback = Feedbacks::find($id);
        return view('roads.edit')->with('feedback',$feedback);
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
        $input=$request->all();
        $images=array();
        if($files=$request->file('filename')){
            foreach($files as $file){
                // Get filename with the extension
                $filenameWithExt = $file->getClientOriginalName();
                // Resize the Image
                $image_resize = Image::make($file->getRealPath());  
                //Resize Step 2
                $image_resize->resize(1000, 500)->encode('jpg');
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $file->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                //$path = $image_resize->storeAs('public/property_images', $fileNameToStore);
                $store = Storage::put('public/feedbacks/'.$fileNameToStore, $image_resize->__toString());
                $images[]=$fileNameToStore;
            }
        }
        else {
            $fileNameToStore = 'noimage.jpg';
        }
        $feedback = Feedbacks::find($id);
        $feedback->userid = auth()->user()->id;
        $feedback->feedarea = $request->input('feedarea');
        $feedback->other = $request->input('other');
        $feedback->remark = $request->input('remark');
        $feedback->state = $request->input('state');
        $feedback->city = $request->input('city');
        $feedback->pincode = $request->input('pincode');
        $feedback->landmark = $request->input('landmark');
        $feedback->address = $request->input('address');
        $feedback->filename = implode("|",$images);
        $feedback->save();
        return redirect('/home')->with('success', 'Feedbacks Updates');  

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedbacks = Feedbacks::find($id);
        
        //Check if post exists before deleting
        if (!isset($feedbacks)){
            return redirect('/home')->with('error', 'No Feedbacks Found');
        }
        // Check for correct user
        if(auth()->user()->id !==$feedbacks->userid){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }
        if($feedbacks->filename != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/feedbacks/'.$feedbacks->filename);
        }
        
        $feedbacks->delete();
        return redirect('/home')->with('success', 'Feedbacks Removed');
    }
    public function view_verified()
    {
        $verify =  DB::table('feedbacks')
        ->where('verified', 1)
        ->get();
        return view('roads.verify')->with('verify',$verify);
    }

    public function view_not_verified()
    {
        $verify =  DB::table('feedbacks')
        ->where('verified', 0)
        ->get();
        return view('roads.notverified')->with('verify',$verify);
    }
    public function verify($id){
        DB::table('feedbacks')
        ->where('id', $id)
        ->update(['verified' => 1]);
        return redirect('/home')->with('success', 'Feedback Verified');
    }

    public function all(){
        $feedbacks = Feedbacks::all();
        return view('roads.allfedbacks')->with('feedbacks',$feedbacks);
    }

    
}
