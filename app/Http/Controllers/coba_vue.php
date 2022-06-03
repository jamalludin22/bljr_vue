<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class coba_vue extends Controller
{
    public function index(){
        $users= User::all();
        return response()->json($users);
    }

    public function show($id){
        $user= User::find($id);
        return response()->json($user);
    }

    public function store(Request $request){

        // $validated = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);

        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
 
        if ($validation->fails()):
            return response()->json([
                "status" => false,
                "message"=> $validation->errors(),
            ], 403);
        endif;


        $user = User::create([
            "name" => $request -> name,
            "email" => $request -> email,
            "password" => Hash::make($request -> password)
        ]);
        // $user= new User;
        // $user -> name = ;
        // $user -> email = ;
        // $user -> password = ;

        // $user -> save();
        return response()->json([
            "status" => true,
            "message"=> "Data User Berhasil Disimpan",
            "data" => $user
        ]);
    }

    public function update($id, Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $user = User::find($id);
        User::where('id', $id)
        ->update([
            'name' => $request -> name,
            'email' => $request -> email
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Data User Berhasil Diubah'
        ]);
    }

    public function destroy($id){
        $user = User::find($id);
        $user ->delete();
        return response()->json([
            'status' => true,
            'message' => 'Data User Berhasil Dihapus'
        ]);
    }
}
