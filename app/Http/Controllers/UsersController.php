<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //
    public function show(User $user)
    {
    	return view('users.show', compact('user'));
    }
    public function edit(User $user)
    {
    	return view('users.edit',compact('user'));
    }

	/** 修改保存 **/
	public function update(UserRequest $request, User $user)
	{
		// dd($request->all());die;
	    $user->update($request->all());
	    // Db::table('users')->where('id',$user->id)->update($request->all());
	    return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
	}
}
