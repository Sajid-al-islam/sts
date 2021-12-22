<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\StudentInfo;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $payment_user_info = Payment::get('student_id')->toArray();
        foreach($payment_user_info as $info) {
            $user_info = User::where('id', $info)->get()->pluck('name')->toArray();
        }
        // dd($payment_user_info, $user_info);
        $payments = Payment::select('id','student_id','payment_method', 'mobile_number','transaction_id','payment_confirmation')->get();
        
        return view('admin.orders.index', [
            'payments' => $payments,
            'user_info' => $user_info
        ]);
    }

    public function status(Request $request, Payment $payment)
    {
        
        $payment->payment_confirmation = $request->payment_confirmation;
        // dd($request->all());
        $payment->where('student_id', $request->student_id)->update([
            'payment_confirmation' => $request->payment_confirmation
        ]);

        return redirect()->back();
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
        //
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