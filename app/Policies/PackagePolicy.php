<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Package;

class PackagePolicy extends Policy
{
    public function update(User $user, Package $package)
    {
        // return $package->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Package $package)
    {
        return true;
    }
}
