<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
// use App\Models\images;
use Response;
use Image;
class api extends Controller
{   

    public function myExplode($value,$oparator="x"){
       return explode($oparator,$value);
    }

    public function upload(Request $request)
    {   
        $validator = \Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'quality' => 'numeric|min:0|max:100',
            'blur' => 'numeric|min:0|max:100',
            'brightness' => 'numeric|min:-100|max:100',
            
        ]);
        if ($validator->fails()){
            return ['errors'=>$validator->errors()->all()];
        }else{
            $newfilename = rand().date('ymdh').".".strtolower($request->image->getClientOriginalExtension());
            $image = Image::make($request->image);
            // crop
            if($request->query('crop')){
                $value = $this->myExplode($request->query('crop'));
                $image->crop($value[0],$value[1]);
            }
            // blur
            if($request->query('blur')){
                $image->blur($request->query('blur'));
            }
            // brightness
            if($request->query('brightness')){
                $image->brightness($request->query('brightness'));
            }
            // fit
            if($request->query('fit')){
                $value = $this->myExplode($request->query('fit'));
                $image->fit($value[0],$value[1]);
            }
            $image->save('upload/thumb/'.$newfilename , $request->query('quality') ?? 40)->orientate();
            $request->image->storeAs('full', $newfilename, 'mydir');
            // images::create([
            //     'path' => $newfilename,
            // ]);

            if($request->query('url') == 'true'){
                return Response::json(['url'=>public_path('upload/thumb/'.$newfilename)]);
            }else{
            return Response::download(public_path('upload/thumb/'.$newfilename));  
            }      
        }
    }

   
}