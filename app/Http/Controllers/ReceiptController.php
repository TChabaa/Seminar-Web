<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ReceiptController extends Controller
{
    public function store(Request $request)
    {
        Log::info('Store method called'); // Debugging

        $request->validate([
            'receipt_image' => 'required|image|max:2048',
        ]);

        if ($request->hasFile('receipt_image')) {
            Log::info('File received'); // Debugging

            $path = $request->file('receipt_image')->store('receipts', 'public');
            $userId = Auth::id();

            Log::info('Path: ' . $path); // Debugging
            Log::info('User ID: ' . $userId); // Debugging

            Receipt::create([
                'user_id' => $userId,
                'receipt_image' => $path,
            ]);

            return redirect()->back()->with('success', 'Receipt uploaded successfully');
        } else {
            Log::info('File not received'); // Debugging
            return redirect()->back()->with('error', 'File not received');
        }
    }
}
