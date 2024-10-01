<?php

namespace App\Policies;

use App\Models\User;
use App\Models\JemaatBaru;
use Illuminate\Auth\Access\HandlesAuthorization;

class JemaatBaruPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_jemaat::baru');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, JemaatBaru $jemaatBaru): bool
    {
        return $user->can('view_jemaat::baru');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_jemaat::baru');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, JemaatBaru $jemaatBaru): bool
    {
        return $user->can('update_jemaat::baru');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, JemaatBaru $jemaatBaru): bool
    {
        return $user->can('delete_jemaat::baru');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_jemaat::baru');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, JemaatBaru $jemaatBaru): bool
    {
        return $user->can('force_delete_jemaat::baru');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_jemaat::baru');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, JemaatBaru $jemaatBaru): bool
    {
        return $user->can('restore_jemaat::baru');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_jemaat::baru');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, JemaatBaru $jemaatBaru): bool
    {
        return $user->can('replicate_jemaat::baru');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_jemaat::baru');
    }
}
