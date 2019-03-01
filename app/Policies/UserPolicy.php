<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    /** 验证当前用户更新的是否自己 **/
    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }
}
