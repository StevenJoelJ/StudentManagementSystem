<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class ClassesController extends Controller
{

    public function index(): View
    {
        return view('admins.classes.index', ['classes' => Classes::get()]);
    }


    public function create(): View
    {
        return view('admins.classes.create');
    }


    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('classes.index');
    }


    public function show(Classes $classes): View
    {
        return view('admins.classes.show', compact('classes'));
    }

    public function edit(Classes $classes): View
    {
        return view('admins.classes.edit', compact('classes'));
    }


    public function update(Request $request, Classes $classes): RedirectResponse
    {
        return redirect()->route('classes.index');
    }


    public function destroy(Classes $classes): RedirectResponse
    {
        return redirect()->route('classes.index');
    }
}
