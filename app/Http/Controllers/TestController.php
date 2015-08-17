<?php

namespace App\Http\Controllers;

use App\User;
use App\Userprofile;
use Illuminate\Http\Request;
use Auth;
//use Illuminate\Support\Facades\


use App\Http\Requests;
use App\Http\Controllers\Controller;


class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {

        return $request->reg_role;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('test');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $profile = new Userprofile($request->all());
            Auth::user()->userprofile()->save($profile);
            //$profile->save();

            return redirect ('/auth/logout');
            // The user is logged in...
            // Maybe add a Redirect::to()
        } else {

            return 'some error occured';
            // User is not logged in...
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
