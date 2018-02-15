<?php

namespace App\Http\Controllers;

use App\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $people = People::get();
      return JSON_encode(compact('people'));
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
    $rules = [
      'first_name' => 'required',
      'last_name' => 'required',
      'favorite_food' => 'required'
    ];

    $validator = \Validator::make($data,$rules);

    if($validator->passes())
    {
      People::create([
        'first_name' => $data['first_name'],
        'last_name' => $data['last_name'],
        'favorite_food' => $data['favorite_food']
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
  public function show($id)
  {
      $people = People::find($id);
      return JSON_encode(compact('people'));
  }
}
