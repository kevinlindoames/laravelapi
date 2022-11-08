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

    public function create(User $user)
    {
        return true;
    }

    public function view (User $user,User $model)

    {
        return true;
    }

    public function update(User $user,User $model)
    {
        return true;
    }

    public function delete(User $user,User $model)
    {
        return true;
    }
}
