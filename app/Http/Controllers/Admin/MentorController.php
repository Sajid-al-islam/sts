<?php

namespace App\Http\Controllers\Admin;

use App\Models\Mentor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $mentor_name = $request->name;
        $institute = $request->institute;
        $subject = $request->subject;
        $mentor_email = $request->email;
        $mentor_phone = $request->contact;
        $address = $request->address;
        $mentor_nid = $request->mentor_id;
        $interested_class = $request->interested;
        
        // dd($request->all());
        // $student_id = Auth::user()->id;
        $MentorInfo = Mentor::create([
            'user_id' => Auth::user()->id,
            'institute' => $request->institute,
            'subject' => $request->subject,
            'email' => $request->email,
            'contact' => $request->contact,
            'address' => $request->address,
            'mentor_id' => $request->mentor_id,
            'interested' => $request->interested
        ]);
        

        $MentorInfo->save();

        return view('admin.mentor.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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