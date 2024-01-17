<?php

 // app/Http/Controllers/PeopleController.php

 namespace App\Http\Controllers;

 use App\Models\People;
 use App\Http\Resources\PeopleResource;
 use Illuminate\Http\Request;
 
 class PeopleController extends Controller
 {
    public function index()
    {
        $people = People::all();
        return PeopleResource::collection($people);
    } 
 
     public function store(Request $request)
     {
         $person = People::create($request->all());
         return new PeopleResource($person);
     }
 
     public function show(People $person)
     {
         return new PeopleResource($person);
     }
 
     public function update(Request $request, People $person)
     {
         $person->update($request->all());
         return new PeopleResource($person);
     }
 
     public function destroy(People $person)
     {
         $person->delete();
         return response()->json(null, 204);
     }
 } 