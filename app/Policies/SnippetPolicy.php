<?php

namespace App\Policies;

use App\Model\Contributor;
use App\Model\Snippet;

use Illuminate\Auth\Access\HandlesAuthorization;


class SnippetPolicy
{
    use HandlesAuthorization;

    public function update(Contributor $contributor, Snippet $snippet)
    {
        return $contributor->id == $snippet->contributor_id;
    }

    public function destroy(Contributor $contributor, Snippet $snippet)
    {
        return $contributor->id == $snippet->contributor_id;
    }

    public function star(Contributor $contributor, Snippet $snippet)
    {
        $auth = $contributor->id != $snippet->contributor_id;
        $hasStar = $snippet->checkContributorStarExist($contributor->id); 
        return ($auth&&!$hasStar);
    }
    
}
