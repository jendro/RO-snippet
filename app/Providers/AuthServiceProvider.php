<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use App\Model\Snippet;
use App\Policies\SnippetPolicy;
use App\Model\SnippetKomentar;
use App\Policies\SnippetKomentarPolicy;

class AuthServiceProvider extends ServiceProvider
{
    
    protected $policies = [
        Snippet::class => SnippetPolicy::class,
        SnippetKomentar::class => SnippetKomentarPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
