<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use App\Models\Bank;
use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $banks = cache()->remember('listOfBank', today(), function() {
            return Bank::select(['id', 'bank_code', 'name'])->where('status', 1)->get();
        });

        return view('client.payment.checkout', compact('banks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $checkout = Checkout::create([
            'reference_no'  => date('Y').Auth::user()->id.strtoupper(Str::random(6).date('md')),
            'user_id'       => \Auth::user()->id,
            'bank_id'       => $request->bank_id,
        ]);

        return redirect()->route('deposit.instruction', $checkout);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        //
    }

    public function instruction(Checkout $checkout)
    {
        // Include with to avoid n+1 problem
        // $checkout = Checkout::with('bank')

        return view('client.payment.instructions.bdo', compact('checkout'));
    }

    public function verification(Checkout $checkout)
    {
        $deposit = Deposit::firstOrCreate([
            'checkout_id' => $checkout->id
            ],
            [
                'user_id'       => Auth::user()->id,
                'bank_name'     => $checkout->bank->name,
                'account_no'    => $checkout->bank->account_no
            ]);

        return view('client.payment.verification', compact('deposit'));
    }

    public function verificationProcess(Request $request, Deposit $deposit)
    {
        $deposit->update([
            'bank_name'     => $request->bank_name,
            'account_no'    => $request->account_no,
            'date'          => $request->date,
            'time'          => $request->time,
            'deposit_code'  => $request->deposit_code,
            'amount'        => $request->amount_paid
        ]);

        $deposit->addMedia($request->image)->toMediaCollection('Proof-of-Payment');

        \Session::flash('Success', 'Payment completed. Verification in progress...');

        return redirect()->route('dashboard');
    }
}
