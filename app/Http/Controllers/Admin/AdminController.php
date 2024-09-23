<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\uploadFile;

class AdminController extends Controller
{
    use uploadFile;
    public function users()
    {
        return view('admin.users.users');
    }
    public function add_user()
    {
        return view('admin.users.add_user');
    }
    public function edit_user()
    {
        return view('admin.users.edit_user');
    }

    public function topics()
    {
        return view('admin.topics.topics');
    }
    public function topic_details()
    {
        return view('admin.topics.topic_details');
    }
    public function add_topic()
    {
        return view('admin.topics.add_topic');
    }
    public function edit_topic()
    {
        return view('admin.topics.edit_topic');
    }

    public function categories()
    {
        return view('admin.categories.categories');
    }
    public function add_category()
    {
        return view('admin.categories.add_category');
    }
    public function edit_category()
    {
        return view('admin.categories.edit_category');
    }

    public function testimonials()
    {
        return view('admin.testimonials.testimonials');
    }
    public function add_testimonial()
    {
        return view('admin.testimonials.add_testimonial');
    }
    public function edit_testimonial()
    {
        return view('admin.testimonials.edit_testimonial');
    }

    public function messages()
    {
        return view('admin.messages.messages');
    }
    public function msg_details()
    {
        return view('admin.messages.message_details');
    }

}
