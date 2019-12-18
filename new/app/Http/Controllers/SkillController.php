<?php

namespace App\Http\Controllers;
use Validator;
use App\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skill =Skill::All();
        return response()->json([
            'state' =>'sucess',
            'description'=>$skill
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
            'name' => 'required|max:50|string',   
        ]);

        if ($validator->fails()) {
            return response()->json([
                'state' =>'error',
                'message' => $validator->errors()
            ]);

        } else {
            
            $skill = new Skill([
                'name'=>$request->name,  
            ]);
            $skill->save();
            return response()->json([
                'state'=>'sucess',
                'message'=> "QQCH a été crée."
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        $value=Skill::find($skill);

        return response()->json([
            'state' =>'sucess',
            'description'=>$value
        ]);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
    
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'state' =>'error',
                'message' => $validator->errors()
            ]);

        } else {    
            $skill=Skill::find($skill->id);
            $skill->name = $request->input('name');
        }
        
        $skill->save();

        return response()->json([
            'state' =>'sucess',
            'description'=>'Une compétence a été modifiée'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $skills= Skill::find($skill);
        
        $skill->delete();
        return response()->json([
            'state' =>'sucess',
            'description'=>'Une compétence a été supprimée' 
        ]);
    }
}
