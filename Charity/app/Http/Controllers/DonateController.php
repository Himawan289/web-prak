<?php

namespace App\Http\Controllers;

use App\Cause;
use App\Donate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonateController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You need to login first.');
        }
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'amount' => 'required|numeric|min:1',
            'cause_id' => 'required|exists:causes,id',
        ]);

        try {
            // Create the donation record
            $donation = Donate::create($validatedData);

            // Increment the raised amount for the cause
            Cause::where('id', $request->cause_id)->increment('raised', $request->amount);

            // Count the number of donations for the cause
            $donationCount = Donate::where('cause_id', $validatedData['cause_id'])->count();

            // Update the donor count for the cause
            Cause::where('id', $validatedData['cause_id'])->update(['donors' => $donationCount]);

            return redirect()->back()->with('success', 'Donation successful!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function findByCause($id)
    {
        $donations = Donate::where('cause_id', $id)->get();
        return response()->json($donations);
    }
}
