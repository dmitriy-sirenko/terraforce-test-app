<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    public function delete(User $user, Product $product)
    {
        return ($user->id === $product->user_id);
    }

    public function edit(User $user, Product $product)
    {
        return ($user->id === $product->user_id);
    }

    public function show(User $user, Product $product)
    {
        return ($user->id === $product->user_id);
    }
}
