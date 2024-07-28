<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Validator;

class TestimonialController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'content' => 'required|max:240'
        ]);

        if($validator->fails()) {
            return back()->withErrors([
                'message' => 'must be less than 240 characters'
            ]);
        }

        if(! auth()->check()) {
            return back()->withErrors([
                'message' => 'you must be login'
            ]);
        }

        $request['user_id'] = auth()->user()->id;

        Testimonial::create($request->all());

        return back()->with('message', 'successfully submitting testimonial');
    }
}
