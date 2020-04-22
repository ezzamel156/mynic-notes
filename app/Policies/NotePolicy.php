<?php

namespace App\Policies;

use App\Note;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NotePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can manage the model.
     *
     * @param  \App\User  $user
     * @param  \App\Note  $note
     * @return mixed
     */
    public function manage(User $user, Note $note)
    {
        return $user->is($note->owner);
    }
}
