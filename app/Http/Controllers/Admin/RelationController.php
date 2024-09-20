<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;
use Illuminate\Support\Facades\DB;


class RelationController extends Controller
{
    public function DBrelations() {
        #dd(Category::find(1)?->phone->phone_num);
        $category = Category::find(1);
        $topics = $category->topics;
/*        dd(DB::table('categories')
        ->join('topics', 'topics.catID', '=', 'categories.id')
        ->where('categories.id', '=', 1)
        ->first()); */
        }
    }
