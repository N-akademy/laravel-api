<?php

namespace App\Http\Controllers;
use Validator;
use App\InternSkill;
use Illuminate\Http\Request;

class InternSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intSkill =InternSkill::All();
        return response()->json([
            'state' =>'sucess',
            'description'=>$intSkill
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
            
            $intSkill = new InternSkill([
                'name'=>$request->name,  
            ]);
            $intSkill->save();
            return response()->json([
                'state'=>'sucess',
                'message'=> "Une compétence a été ajouté à un apprenant."
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InternSkill  $internSkill
     * @return \Illuminate\Http\Response
     */
    public function show(InternSkill $internSkill)
    {
        $value=InternSkill::find($intSkill);

        return response()->json([
            'state' =>'sucess',
            'description'=>$value
        ]);
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InternSkill  $internSkill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InternSkill $internSkill)
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
            $intSkill=InternSkill::find($intSkill->id);
            $intSkill->name = $request->input('name');
        }
        
        $intSkill->save();

        return response()->json([
            'state' =>'sucess',
            'description'=>'Une compétence a été modifiée dans le profil apprennants'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InternSkill  $internSkill
     * @return \Illuminate\Http\Response
     */
    public function destroy(InternSkill $internSkill)
    {
        $intSkills= InternSkill::find($intSkill);
        
        $intSkill->delete();
        return response()->json([
            'state' =>'sucess',
            'description'=>'Une compétence a été supprimée chez un apprenant' 
        ]);
    }
}
