<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LeavesController extends Controller
{
    public function index()
    {
        try {
            $leaves = Leave::where('status', 'pending')->with('user')->paginate(10);

            return view('pages.leaves', [
                'data' => $leaves
            ]);
        } catch (Exception $e) {
            Log::error('Error fetching leaves: ' . $e->getMessage());
            return response()->json([
                'message' => 'Error fetching leaves.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'starting_date' => 'required|date',
                'days' => 'required|integer|min:1',
                'reason' => 'required|string|max:255',
            ]);

            Leave::create([
                "user_id" => Auth::user()->id,
                "starting_date" => $validatedData['starting_date'],
                "days" => $validatedData['days'],
                "reason" => $validatedData['reason'],
            ]);

            return redirect()->back();
        } catch (Exception $e) {
            Log::error('Error creating leave request: ' . $e->getMessage());

            return response()->json([
                'message' => 'An error occurred while creating the leave request.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function show(string $id)
    {
        //
    }

    public function proceed($data)
    {
        $data = json_decode($data);
        $id = $data->user_id;
        $user = User::findOrFail($id);

        User::findOrFail($id)->update([
            "leaves" => (int) $user->leaves + (int) $data->days,
        ]);

        Leave::findOrFail($data->id)->update([
            "status" => "approved"
        ]);

        return redirect()->back();
    }

    public function custom(Request $request)
    {

        $validatedData = $request->validate([
            "id" => "required|int",
            "leaves" => "required|int|min:1",
            "user_id" => "required|int",
        ]);

        $id = $validatedData["user_id"];
        $user = User::findOrFail($id);
        User::findOrFail($id)->update([
            "leaves" => (int) $user->leaves + (int) $validatedData["leaves"],
        ]);

        Leave::findOrFail($validatedData["id"])->update([
            "status" => "partial approved"
        ]);

        return redirect()->back();
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        Leave::findOrFail($id)->delete($id);

        return redirect()->back();
    }
}
