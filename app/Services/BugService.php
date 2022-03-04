<?php

namespace App\Services;

use App\Models\Bug;

class BugService
{
    public function store($description, $summary)
    {
        return Bug::create([
            'description' => $description,
            'summary'     => $summary,
        ]);
    }
}
