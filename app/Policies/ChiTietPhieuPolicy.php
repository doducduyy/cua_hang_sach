<?php

namespace App\Policies;

use App\Models\ChiTietPhieu;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ChiTietPhieuPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ChiTietPhieu $chiTietPhieu): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ChiTietPhieu $chiTietPhieu): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ChiTietPhieu $chiTietPhieu): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ChiTietPhieu $chiTietPhieu): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ChiTietPhieu $chiTietPhieu): bool
    {
        return false;
    }
}
