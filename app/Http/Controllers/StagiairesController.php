<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stagiaire;

class StagiairesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stagiaires= Stagiaire::all();
        return view('stagiaires.index')->with(['stagiaires'=> $stagiaires ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('stagiaires.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'registration_number' => 'required|numeric| unique:employes,registration_number',
            'full_name' => 'required',
            'depart' => 'required',
            'hire_date' => 'required',
            'adress' => 'required',
            'city' => 'required',
            'phone' => 'required',
        ]);
        Stagiaire::create($request->except('_token'));
        return redirect()->route('stagiaires.index')->with(['success'=>'Trainer added successfully'
    ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $stagiaire = Stagiaire::where('registration_number',$id)->First();
        return view('stagiaires.show')->with([
            'stagiaire' =>$stagiaire
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $stagiaire = Stagiaire::where('registration_number',$id)->First();
        return view('stagiaires.edit')->with([
            'stagiaire' =>$stagiaire
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $stagiaire = Stagiaire::where('registration_number',$id)->first();
        $this->validate($request,[
            'registration_number' => 'required|numeric| unique:employes,id,' . $stagiaire->registration_number,
            'full_name' => 'required',
            'depart' => 'required',
            'hire_date' => 'required',
            'adress' => 'required',
            'city' => 'required',
            'phone' => 'required',
        ]);
        $stagiaire->update($request->except('_token','_method'));
        return redirect()->route('stagiaires.index')->with([
            'success'=>'trainer updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $stagiaire = Stagiaire::where('registration_number',$id)->first();
        return redirect()->route('stagiaires.index')->with([
            'success'=>'trainer deleted successfully'
        ]);
    }

    public function certificateRequest($id)
    {
        $stagiaire = Stagiaire::where('registration_number',$id)->first();
        $stagiaire->delete();
        return view('stagiaires.certificate-request')->with([
            'stagiaire'=>$stagiaire
        ]);
    }
}
