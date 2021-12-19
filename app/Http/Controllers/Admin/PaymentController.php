<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\StudentInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
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
        $student_name = $request->name;
        $student_age = $request->age;
        $student_address = $request->address;
        $student_email = $request->email;
        $student_phone = $request->phone;
        $student_class = $request->class;
        $student_futureGoal = $request->future_goal;
        $parents_name = $request->parents_name;
        $parents_contact = $request->paranets_contact;
        
        $number = $request->mobile_number;
        $transaction_id = $request->transaction_id;
        
        // dd($request->all());
        // $student_id = Auth::user()->id;
        $StudentInfo = StudentInfo::create([
            'student_id' => Auth::user()->id,
            'name' => $student_name,
            'age' => $student_age,
            'address' => $student_address,
            'email' => Auth::user()->email,
            'phone' => Auth::user()->phone,
            'class' => $student_class,
            'future_goal' => $student_futureGoal,
            'parents_name' => $parents_name,
            'parents_contact' => $parents_contact
        ]);
        

        $StudentInfo->save();

        return redirect('admin/subscription');
        
    }
    public function subscription()
    {

        return view('admin.subscribe.subscription');
    }
    public function subscription_post(Request $request)
    {
        $payment = Payment::create([
            'mobile_number' => request('mobile_number'),
            'transaction_id' => request('transaction_id'),
            'payment_method' => request('payment_method'),
            'student_id' => Auth::user()->id
        ]);

        $payment->save();
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