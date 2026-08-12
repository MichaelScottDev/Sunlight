<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TipSubmission;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $tips          = TipSubmission::latest()->paginate(25);
        $total         = TipSubmission::count();
        $newCount      = TipSubmission::where('status', 'new')->count();
        $reviewedCount = TipSubmission::where('status', 'reviewed')->count();

        return view('admin.dashboard', compact('tips', 'total', 'newCount', 'reviewedCount'));
    }

    public function show($id)
    {
        $tip = TipSubmission::findOrFail($id);

        if ($tip->status === 'new') {
            $tip->update(['status' => 'read']);
        }

        return view('admin.show', compact('tip'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => ['required', 'in:new,read,reviewed,actioned'],
        ]);

        TipSubmission::findOrFail($id)->update(['status' => $request->status]);

        return back()->with('success', 'Status updated.');
    }
}
