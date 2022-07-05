<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class CalcController extends Controller
{
    //
    public function history(Request $request){
       
        $info=new History();        
    
              $info->carName=$request->carName;
              $info->carReg=$request->carReg;
               $info->time=$request->time;
               if($info == null) {

                dd("hakuna kitu");
        
            } else {
         
                $info->save();
                
        
            }
              
                
               
              return view('home');         
           
    }
    public function admin(){
        $history=History::all();

        return view('admin',compact('history'));    
    }
   public function delete($id){
    $history=History::find($id);
    $history->delete();
    return redirect()->back();
   }
    }
    
