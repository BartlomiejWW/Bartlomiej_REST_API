<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Http\Resources\PersonResource;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $people = Person::all();
        return PersonResource::collection($people);
    }

    public function store(Request $request)
    {
        $person = Person::create($request->all());
        return new PersonResource($person);
    }

    public function show(Person $person)
    {
        return new PersonResource($person);
    }

    public function update(Request $request, Person $person)
    {
        $person->update($request->all());
        return new PersonResource($person);
    }

    public function destroy(Person $person)
    {
        $person->delete();
        return response()->json(null, 204);
    }
} 