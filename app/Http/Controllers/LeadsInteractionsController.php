<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Leads;
use App\Models\LeadsInteractions;
use App\Http\Requests\LeadsInteractionsRequest;

class LeadsInteractionsController extends Controller
{    
    public function index()
    {
        $leads = LeadsInteractions::all();
        return view('interactions.index', compact('leads'));
    }
    
    public function create()
    {
        $leads = Leads::all();
        return view('interactions.new', compact('leads'));
    }

   
    public function store(LeadsInteractionsRequest $request)
    {        
        Leads::findOrFail($request->lead_id);

        LeadsInteractions::create([
            'lead_id'=> $request->lead_id,
            'interacao'=> $request->interacao,
            'nota'=> $request->nota   
        ]);
        return redirect()->route('leadsInteractions')->with('success','');
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        LeadsInteractions::findOrFail($id)->delete();
        return redirect()->route('leadsInteractions');
    }
}
