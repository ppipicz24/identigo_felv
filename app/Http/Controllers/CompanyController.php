<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all()->sortBy('name');
        $users = User::all();
        return view('companies.index', ['companies' => $companies, 'users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();
        return view('companies.create', ['companies' => $companies]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request -> validate([
            'name' => 'required|string|distinct',
            'tax' => 'required|string|distinct',
            'email' => 'required|email|distinct',
            'phone' => 'required|numeric|distinct|digits:11',
        ],
        [
            'name.required' => 'A név megadása kötelező!',
            'name.distinct' => 'A névnek egyedinek kell lennie!',
            'name.string' => 'A névnek szövegnek kell lennie!',
            'tax.required' => 'Az adószám megadása kötelező!',
            'tax.distinct' => 'Az adószámnak egyedinek kell lennie!',
            'tax.string' => 'Az adószámnak szövegnek kell lennie!',
            'email.required' => 'Az email cím megadása kötelező!',
            'email.distinct' => 'Az email címnek egyedinek kell lennie!',
            'email.email' => 'Az email címnek email címnek kell lennie!',
            'phone.required' => 'A telefonszám megadása kötelező!',
            'phone.distinct' => 'A telefonszámnak egyedinek kell lennie!',
            'phone.integer' => 'A telefonszámnak számnak kell lennie!',

        ]
    );

    $validated['user_id'] = Auth::id();

    $companies = Company::create($validated);
    // $companies->users()->sync($request->id);

    // $companies->users()->associate(User::all()->random()->id)->save();
    Session::flash('company-created'); 
    return to_route('companies.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
