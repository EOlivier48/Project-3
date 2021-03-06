<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;

class VisitsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //GET visits
      $visits = Visit::get();
      return JSON_encode(compact('visits'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $data = $request->json()->all();
    //refactored the giant if statement to use laravel's validator.
    //while not necessarily smaller it is definitely more readable.
    //if ((array_key_exists('person_id',$data) && isset($data['person_id'])) && (array_key_exists('state_id',$data) && isset($data['state_id'])) && (array_key_exists('date_visited',$data) && isset($data['date_visited'])))
    $rules = [
      'person_id' => 'required',
      'state_id' => 'required',
      'date_visited' => 'required'
    ];

    $validator = \Validator::make($data,$rules);

    if($validator->passes())
    {
      Visit::create([
        'person_id' => $data['person_id'],
        'state_id' => $data['state_id'],
        'date_visited' => $data['date_visited']
      ]);
      return response("Success",200);
    }
    else
    {
        return response("Bad Request",400);
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($visit)
  {
      //GET vists/{id}
      return JSON_encode(compact('visit'));
  }

  public function showVisitsForPerson($id)
  {
      //show all visits for person
      //$visits = Visit::where('person_id', $id)->get();
      $visits = \App\People::find($id)->visits;
      return JSON_encode(compact('visits'));
  }
}
