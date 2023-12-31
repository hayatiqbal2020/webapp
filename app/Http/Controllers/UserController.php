<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signupuser(Request $request, User $user)
    {
        $isSaved = User::create([
            "name"=> $request->input("name"),
            "mobile_no"=> $request->input("mobile_no"),
            "email"=> $request->input("email"),
            "password"=> $request->input("password"),
            "user_type_id"=> 1
        ]);
        if($isSaved){
            return redirect("/");
        }
        else {
            return redirect("/signup");
        }
    }


    public function login(Request $request, User $user){
        $email = $request->input("email");
        $password = $request->input("password");

        $user = User::where("email", $email)
                        ->where("password", $password)->first();
        if($user){
            Session::put("user", $user);
            return redirect("/usertype/show");
        }
        else {
            return redirect("/");
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
