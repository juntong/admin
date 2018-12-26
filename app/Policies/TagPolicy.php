<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TagPolicy
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

    /**
     * @param User $user
     * @return bool
     * @throws \Exception
     */
    public function viewAny(User $user)
    {
        return $user->hasAnyPermission([
            'super admin'
        ]);
    }

    /**
     * @param User $user
     * @return bool
     * @throws \Exception
     */
    public function view(User $user)
    {
        return $user->hasAnyPermission([
            'super admin'
        ]);
    }

    /**
     * @param User $user
     * @return bool
     * @throws \Exception
     */
    public function create(User $user)
    {
        return $user->hasAnyPermission([
            'super admin'
        ]);
    }

    /**
     * @param User $user
     * @return bool
     * @throws \Exception
     */
    public function update(User $user)
    {
        return $user->hasAnyPermission([
            'super admin'
        ]);
    }

    /**
     * @param User $user
     * @return bool
     * @throws \Exception
     */
    public function delete(User $user)
    {
        return $user->hasAnyPermission([
            'super admin'
        ]);
    }
}
