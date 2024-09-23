<?php

namespace App\Traits;

use App\Models\Topic;

trait incrementViews
{
    public function trendings(string $id)
    {
        // Increment the views by 20 when clicked on views bookmark
        $topic = Topic::findOrFail($id);
        $topic->views += 1;
        $topic->save();

        return redirect()->back();
    }
}
