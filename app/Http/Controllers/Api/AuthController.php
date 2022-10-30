<?php

namespace App\Http\Controllers\Api;

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

    public function login(Request $request)
    {

        $user = User::where('phone', $request->phone)->where('type', UserTyps::GARAGE_KEEPER['code'])->first();

        if (empty($user)) {

            $data = [
                'success' => false,

                'message' => 'phone not found',
            ];

            return response()->json($data, 401);
        } else {

            if (Hash::check($request->password, $user->password)) {

                $user->api_token = hash('sha256', Str::random(60));

                $user->save();

                $data = [
                    'success' => true,

                    'message' => trans('garage_keeper.logged_in_successfully'),

                    'data' => new UserResource($user),
                ];

                return  response()->json($data, 200);
            }
        }
    }

    public function logout()
    {
        $user_id = Auth::guard('api')->id();

        User::where('id', $user_id)->update(['api_token' => null]);

        $data = [
            'success' => true,
            'message' => trans('garage_keeper.logged_out_successfully'),
        ];
        
        return  response()->json($data, 200);
    }
}
