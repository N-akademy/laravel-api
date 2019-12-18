<?php

namespace App\Http\Controllers;
use Validator;
use App\Intern;
use Illuminate\Http\Request;

class InternController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interns =Intern::All();
        return response()->json([
            'state' =>'sucess',
            'description'=>$interns
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lastname' => 'required|max:50|string',
            'firstname' => 'required|max:50|string',
            'age' => 'required|integer',
            'phone_number' => 'required|integer|max:10|unique:interns|',
            'email' => 'required|email|unique:interns|'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'state' =>'error',
                'message' => $validator->error()
            ]);

        } else {
            // On se crée un objet de type Movie qui utilisera l'hydratation
            $intern = new Intern([
                'lastname'=>$request->lastname,
                'firstname'=>$request->firstname,
                'age'=>$request->age,
                'phone_number'=>$request->phone_number,
                'email'=>$request->email,
            ]);
        }

        $intern->save();

        return response()->json([
            'state'=>'sucess',
            'message'=>'Cet apprenant a été crée.'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Intern  $intern
     * @return \Illuminate\Http\Response
     * */

    public function show(Intern $intern)
    {
        $apprenant=Intern::find($intern);

        return response()->json([
            'state' =>'sucess',
            'description'=>$apprenant
        ]);

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Intern  $intern
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'lastname' => 'required|max:50|string',
            'firstname' => 'required|max:50|string',
            'age' => 'required|integer',
            'phone_number' => 'required|integer|max:10|unique:interns|',
            'email' => 'required|email|unique:interns|'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'state' =>'error',
                'message' => $validator->errors()
            ]);

        } else {
            // On se crée un objet de type Movie qui utilisera l'hydratation
           
            $int=Intern::find($id);
            $int->lastname = $request->input('lastname');
            $int->firstname = $request->input('firstname');
            $int->age = $request->input('age');
            $int->phone_number = $request->input('phone_number');
            $int->email = $request->input('email');
        
    }
        
        $int->save();

        return response()->json([
            'state' =>'sucess',
            'description'=>'Un apprenant a été modifiée'
        ]);

        }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Intern  $intern
     * @return \Illuminate\Http\Response
     */
    public function destroy(Intern $intern)
    {
        $int= Intern::find($intern);
        
        $intern->delete();
        return response()->json([
            'state' =>'sucess',
            'description'=>'Un apprenant a été supprimée' 
        ]);
    

    }
   
}
 