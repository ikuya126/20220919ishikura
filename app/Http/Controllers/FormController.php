<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Http\Requests\ContactRequest;

class FormController extends Controller
{

    public function index()
    {
        return view('index');
    }
    public function create(ContactRequest $request)
    {
        $input = $request->all();
        Form::create($input);
        return redirect('/thanks');
    }

    public function thanks()
    {
        return view('thanks');
    }
}
