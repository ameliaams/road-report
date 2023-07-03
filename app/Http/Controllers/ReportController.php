<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $report = Report::orderBy('created_at', 'DESC')->get();
  
        return view('report.index', compact('report'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('report.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Report::create($request->all());
 
        return redirect()->route('report')->with('success', 'Report added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $report = Report::findOrFail($id);
  
        return view('report.show', compact('report'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $report = Report::findOrFail($id);
  
        return view('report.edit', compact('report'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $report = Report::findOrFail($id);
  
        $report->update($request->all());
  
        return redirect()->route('report')->with('success', 'Report updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $report = Report::findOrFail($id);
  
        $report->delete();
  
        return redirect()->route('report')->with('success', 'Report deleted successfully');
    }
}
