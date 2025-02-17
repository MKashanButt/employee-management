<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LetterController extends Controller
{

    public function index()
    {
        $data = Letter::with('users')->paginate(10);

        $users = User::where('role', '!=', 'admin')->pluck('name');

        return view('pages.letters', [
            "data" => $data,
            "users" => $users
        ]);
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'category' => 'required|string|in:warning,increment,employment',
                'user' => 'required|string|exists:users,id',
                'policy' => 'required|file|mimes:pdf,doc,docx|max:2048',
            ]);

            if ($request->hasFile('policy')) {
                $file = $request->file('policy');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('policies', $fileName, 'public');
            }

            Letter::create([
                'title' => $validatedData['title'],
                'category' => $validatedData['category'],
                'user_id' => $validatedData['user'],
                'policy_path' => $filePath,
            ]);

            return redirect()->back()->with('success', 'Letter created successfully!');
        } catch (Exception $e) {
            Log::error('Error creating letter: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while creating the letter.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
