<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tender;

class TenderController extends Controller
{
    public function index()
    {
        $user_id = !empty(auth()->user()) ? auth()->user()->id  : 0;
        $tenders = Tender::latest()->where('user_id',$user_id)->paginate(10);
        return view('tenders.index', compact('tenders'));
    }

    public function create()
    {
        return view('tenders.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required|string',
            'sub_category' => 'required|string',
            'title' => 'required|string|max:255',
            'address' => 'required|string',
            'contact_number' => 'required|string',
            'email' => 'required|email',
            'description' => 'required|string',
            'boq' => 'nullable|file|mimes:pdf,doc,docx',
            'tender_value' => 'required|numeric',
            'end_date' => 'required|date',
            'required_documents' => 'required|array',
            'work_photos' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('boq')) {
            $validated['boq'] = $request->file('boq')->store('boq', 'public');
        }

        if ($request->hasFile('work_photos')) {
            $validated['work_photos'] = $request->file('work_photos')->store('work_photos', 'public');
        }

        $validated['required_documents'] = array_filter($request->required_documents);
        $validated['user_id'] = !empty(auth()->user()) ? auth()->user()->id  : 0;


        Tender::create($validated);

        return redirect()->route('tenders.index')
            ->with('success', 'Tender created successfully.');
    }

    public function edit(Tender $tender)
    {
        return view('tenders.edit', compact('tender'));
    }

    public function update(Request $request, Tender $tender)
    {
        $validated = $request->validate([
            'category' => 'required|string',
            'sub_category' => 'required|string',
            'title' => 'required|string|max:255',
            'address' => 'required|string',
            'contact_number' => 'required|string',
            'email' => 'required|email',
            'description' => 'required|string',
            'boq' => 'nullable|file|mimes:pdf,doc,docx',
            'tender_value' => 'required|numeric',
            'end_date' => 'required|date',
            'required_documents' => 'required|array',
            'work_photos' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('boq')) {
            Storage::disk('public')->delete($tender->boq);
            $validated['boq'] = $request->file('boq')->store('boq', 'public');
        }

        if ($request->hasFile('work_photos')) {


            $url = url('').'/';
            if (file_exists($url.$tender->work_photos)) {
                Storage::disk('public')->delete($tender->work_photos);
            }
            $validated['work_photos'] = $request->file('work_photos')->store('work_photos', 'public');
        }

        $validated['required_documents'] = array_filter($request->required_documents);
        $validated['user_id'] = !empty(auth()->user()) ? auth()->user()->id  : 0;
        $tender->update($validated);

        return redirect()->route('tenders.index')
            ->with('success', 'Tender updated successfully.');
    }

    public function destroy(Tender $tender)
    {
        if ($tender->boq) {
            Storage::disk('public')->delete($tender->boq);
        }
        if ($tender->work_photos) {
            Storage::disk('public')->delete($tender->work_photos);
        }

        $tender->delete();

        return redirect()->route('tenders.index')
            ->with('success', 'Tender deleted successfully.');
    }
}
