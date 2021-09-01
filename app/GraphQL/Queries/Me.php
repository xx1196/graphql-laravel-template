<?php

namespace App\GraphQL\Queries;

class Me
{
    /**
     * @param null $_
     * @param array<string, mixed> $args
     */
    public function __invoke($_, array $args)
    {
        $user = auth()->user();
        return compact('user');
    }
}
