<?php

namespace App\Http\Controllers\Api;

use App\Constants\Admin\AdminTyps;
use App\Constants\UserTyps;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AuthController extends Controller
{
   
    public function login(Request $request){

        $user = User::where('email',$request->email)->where('type',UserTyps::GARAGE_KEEPER['code'])->first();

        if (empty($user)){

           $data['status'] =false;
           $data['message'] = "email not found";

           return $data;

        }else{

            if (Hash::check($request->password, $user->password)){

                $user->api_token = hash('sha256', Str::random(60));
                $user->save();

                $data['status'] = true;
                $data['message'] = "logged in successfully";
                $data['data'] = new UserResource($user);

                return response()->json($data);

            }
            
        }
    }

    public function logout(){
        $user_id = Auth::guard('api')->id();
        User::where('id',$user_id)->update(['api_token'=>null]);
        
        $data['status'] =true;
        $data['message'] = "loged_out";
        return $data;
    }
    
}
