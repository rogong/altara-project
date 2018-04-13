<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Http\Resources\Patient as PatientResource;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get Patient
        $patients = Patient::paginate(15);

        //Return collection of patients as aresource
        return PatientResource::collection($patients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $patient = $request->isMethod('put') ? Patient::findOrFail
     ($request->patient_id) : new Patient;

     $patient->id = $request->input('patient_id');
     $patient->firsname = $request->input('firsname');
     $patient->lastname = $request->input('lastname');
     $patient->issue = $request->input('issue');
     $patient->address = $request->input('address');
     $patient->city = $request->input('city');
     $patient->state = $request->input('state');
     $patient->gender = $request->input('gender');
     $patient->age = $request->input('age');
     $patient->description = $request->input('description');
     $patient->image = $request->input('image');

     if($patient->save()) {
        return new PatientResource($patient);
     }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Get patient
        $patient = Patient::findOrFail($id);

        //Return single patient as a reource
        return new PatientResource($patient);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $patient = Patient::findOrFail($id);

        //Return single patient as a reource
        if($patient->delete()){
            return new PatientResource($patient);
        }
    }
}
