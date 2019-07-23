<?php

namespace App\Policies;

use App\Model\Contributor;
use App\Model\SnippetKomentar;

use Illuminate\Auth\Access\HandlesAuthorization;


class SnippetKomentarPolicy
{
    use HandlesAuthorization;

    public function destroy(Contributor $contributor, SnippetKomentar $snippetKomentar)
    {
        return $contributor->id == $snippetKomentar->contributor_id;
    }
    
    public function edit(Contributor $contributor, SnippetKomentar $snippetKomentar)
    {
        return true;
    }
    
}
