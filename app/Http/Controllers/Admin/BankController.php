<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bank;

class BankController extends Controller
{
    public function index()
    {
        $banks = Bank::all();

        return view('admin.management.bank.index', compact('banks'));
    }

    public function create()
    {
        return view('admin.management.bank.create');
    }

    public function store(Request $request)
    {
        //Put Validation

        // Pre Process
        // Separate this process from the controller
        $bank_code = preg_split("/[\s,_-]+/", $request->bank_name);
        $acronym = "";

        foreach ($bank_code as $letter) {
          $acronym .= $letter[0];
        }

        Bank::create([
            'name'          => ucwords($request->bank_name),
            'bank_code'     => ucwords($acronym),
            'account_no'    => $request->account_number,
            'account_name'  => ucwords($request->account_name),
            'account_type'  => 'PHP ' . ucwords($request->account_type),
        ]);

        return redirect()->route('bank.index');
    }

    public function show(Bank $bank)
    {
        //
    }

    public function edit(Bank $bank)
    {
        return view('admin.management.bank.edit', compact('bank'));
    }

    public function update(Request $request, Bank $bank)
    {

        $bank_code = preg_split("/[\s,_-]+/", $request->bank_name);
        $acronym = "";

        foreach ($bank_code as $letter) {
          $acronym .= $letter[0];
        }

        $bank->update([
            'name'          => ucwords($request->bank_name),
            'bank_code'     => ucwords($acronym),
            'account_no'    => $request->account_number,
            'account_name'  => ucwords($request->account_name),
            'account_type'  => 'PHP ' . ucwords($request->account_type),
            'status'        => ($request->has('status')) ? 1 : 0
        ]);

        return redirect()->route('bank.index');
    }

    public function destroy(Bank $bank)
    {
        $bank->delete();

        return redirect()->route('bank.index');
    }
}
