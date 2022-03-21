<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\Models\User;

use Validator;
use JWTAuth;
Use Hash;

class AuthController extends Controller
{

    public function login(Request $request){
        $data = null;
        $valid = Validator::make($request->all(),[
            'email' => 'required|email|max:150',
            'password' => 'required|min:8'
        ]);

        if($valid->fails()){
            $error = $valid->errors();
            return toJson(code_data_error(),msg_data_error(),$error);
        }else{
            $credentials = $request->only(['email', 'password']);

            if (! $token = JWTAuth::attempt($credentials)) {
                return toJson(402,msg_general_error(),null);
            }else{
                $user = Auth::user();
                $user->token = $token;
                $user->token_type = 'bearer';
                //$user->expires_in = auth('api')->factory()->getTTL() * 60;
                if($user->user_type_id != 2){
                  $this->logout();
                  return toJson(402,msg_general_error(),null);
                }else{
                $data["user"] = $user;
                return toJson(code_success(),msg_success(),$data);
              }
            }
		}

    }

    public function logout()
    {
        auth()->logout();
        return toJson(code_success(),msg_success(),null);
    }

}
