<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;


class MemberController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $username = $request->input('username');
        $pwd = $request->input('pwd');
        $fullname = $request->input('fullname');
        $gender = $request->input('is_male');
        $birthday = $request->input('birthday');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $access_level = $request->input('access_level');
        if($gender == 'on') {
            $gender = 1;
        } else {
            $gender = 0;
        }

        // ['false', $username, $pwd, $fullname, $gender, $birthday, $email, $phone, $access_level, 'Cao Minh', null, Carbon::now('Asia/Ho_Chi_Minh'), Carbon::now('Asia/Ho_Chi_Minh')];
        $result =\DB::insert('insert into member (del_flag, username, password, fullname, is_male, birthday, email, phone, picture, access_level, created_by, modified_by, created_at, updated_at) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)', ['0', $username, $pwd, $fullname, $gender, $birthday, $email, $phone,'avatar_50.jpg', $access_level, 1, null, Carbon::now('Asia/Tokyo'), Carbon::now('Asia/Tokyo')]);
        return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
