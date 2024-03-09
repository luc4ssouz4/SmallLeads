<?php
namespace App\Http\Controllers;

use App\Models\Leads;

use App\Http\Requests\LeadsRequest;
use App\Http\Requests\LeadsEditRequest;


class LeadsController extends Controller
{
    
    public function index()
    {        
        $leads = Leads::all();
        return view('dashboard', compact('leads'));
    }    

    public function clients()
    {
        
        $leads = Leads::where("convertido", "=", "1")->get();
        return view('clients.index', compact('leads'));
    }  
    public function create()
    {
        return view('leads.new');
    }
    
    public function store(LeadsRequest $request)
    {
        
        Leads::create([
            'nome'=> $request->nome,
            'sobrenome'=> $request->sobrenome,
            'email'=> $request->email,
            'empresa'=> $request->empresa,
            'telefone'=> $request->telefone,
            'tags'=> $request->tags      
        ]);
        return redirect()->route('leadsList')->with('success','');
    }  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        //
        $lead = Leads::findOrFail($id);  
        return view('leads.edit', compact('lead'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     */
    public function update(LeadsEditRequest $request, $id)
    {
        //
        $lead = Leads::findOrFail($id); 

        if(isset($request->email))
        $lead->update(['email'=> $request->email]);

        $lead->update([
            'nome'=> $request->nome,
            'sobrenome'=> $request->sobrenome,
            'empresa'=> $request->empresa,
            'telefone'=> $request->telefone,
            'tags'=> $request->tags,   
            'convertido'=> ($request->convertido == "on") ? "1" : "0"
        ]);

        return view('leads.edit', compact('lead'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        Leads::findOrFail($id)->delete();
        return redirect()->route('leadsList');
    }
}
