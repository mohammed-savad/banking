<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Statmend;
use App\Models\User;



class BankController extends Controller
{

    public function dashboard()
    {
        $balcamnt = Statmend::latest()->take(1)->get();
        return view('dashboard',compact('balcamnt'));
    }

    public function statment()
    {
        $statment = Statmend::get();
        return view('user.statment',compact('statment'));
    }

    public function withdraw()
    {
        return view('user.withdraw');
    }
    public function store_withdraw(Request $request)
    {
       
        $rules = [
             
            'withdraw' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
       
        if ($validator->fails()) {

            Session::flash('message', 'Please correct the errors and re-submit');
            Session::flash('alert-class', 'bg-danger');

            return redirect()->back()->withErrors($validator);
        }
        
        $data = [
            'amount' => $request->withdraw,
            'user_id' => $request->user_id,
            'type' => 'Debit',
            'detailes' => 'Withdraw',
            
        ];
       
        Statmend::create($data);
        return redirect()->route('statment');
    }
    public function transfer()
    {
        $user = User::get();
        return view('user.transfer',compact('user'));
    }
    public function store_tranfer(Request $request)
    {
       
        $rules = [
             
            'amount' => 'required',
            'transfer_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
       
        if ($validator->fails()) {

            Session::flash('message', 'Please correct the errors and re-submit');
            Session::flash('alert-class', 'bg-danger');

            return redirect()->back()->withErrors($validator);
        }
        
        $data = [
            'amount' => $request->amount,
            'user_id' => $request->user_id,
            'transfer' => $request->transfer_id,
            'type' => 'Debit',
            'detailes' => 'tranfer to',
            
        ];
        $tranfer = [
            'amount' => $request->amount,
            'user_id' => $request->transfer_id,
            'transfer' => $request->user_id,
            'type' => 'Credit',
            'detailes' => 'tranfer from',
            
        ];
       
        Statmend::create($data);
        Statmend::create($tranfer);
        return redirect()->route('statment');
    }
    public function deposit()
    {
        $balcamnt = Statmend::latest()->take(1)->get();
        return view('user.deposit',compact('balcamnt'));
    }
    public function store(Request $request)
    {
      
        $rules = [
             
            'deposit' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
       
        if ($validator->fails()) {

            Session::flash('message', 'Please correct the errors and re-submit');
            Session::flash('alert-class', 'bg-danger');

            return redirect()->back()->withErrors($validator);
        }
      
        $data = [
            'amount' => $request->deposit,
            'user_id' => $request->user_id,
            'type' => 'Credit',
            'detailes' => 'Deposite',
        ];
       
        Statmend::create($data);
        return redirect()->route('statment');
    }

   


}
