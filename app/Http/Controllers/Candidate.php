<?php

namespace App\Http\Controllers;

use App\Models\CandidateProfile;
use Illuminate\Http\Request;

class Candidate extends Controller
{
    public function profile(Request $request)
    {
      
    
      $image = $request->file('image')->store('images','');
   
      $rdoc = $request->file('rdoc')->store('rdocs','');

      $candidate = CandidateProfile::Create([
        'name'=>$request->name,
        'email'=>$request->email,
        'state'=>$request->state,
        'gender'=>$request->gender,
        'location'=>json_encode($request->pjl),
        'image'=>$image,
        'rdoc'=>$rdoc,
      ]);

      return response([
        'message'=>'Resume Uploaded',
        'status'=>'You resume is uploaded successfully ',
        'candidate'=> $candidate ,
      ],200);
    }
}
