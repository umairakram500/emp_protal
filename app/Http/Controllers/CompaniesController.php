<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Auth, Session;
use App\Traits\s3;

class CompaniesController extends Controller
{
    use s3;
    public function index()
    {
        $companies = Company::All();
        //echo $this->upload();
        return view("companies.index", ['companies' => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        

        return view("companies.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'bail|required|max:255',
            'description' => 'required',
        ]);

        $company = new Company();
        $company->name = $request->name;
        $company->description = $request->description;
        $company->user_id = Auth::user()->id;
        if($company->save()){
            Session::flash('message', 'Company added successfully'); 
            return redirect()->route('companies.index');
        }
        //$companies = Company::where('id', $company);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        
        //$company = Company::where('id', $company->id)->with('projects')->get();
        //$company = Company::find($company->id)->projects()->get();
        //$company = Company::with('projects')->find($company->id)->get();
        //$porjects = $company->projects();
        //echo "<pre>";
        // foreach($company->projects as $pro){
        //     dump($pro);
        //     die;
        // }
        return view('companies.show', ['company' => $company]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view("companies.create", ['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $company->name = $request->name;
        $company->description = $request->description;
        if($company->save()){
            Session::flash('message', 'Company updated successfully'); 
            return redirect()->route('companies.index');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $comp = Company::find($company->id);
        if($comp->exists()){
            if($comp->delete()){
                $comp->projects()->delete(); 
                Session::flash('message', 'Company deleted successfully'); 
                return redirect()->route('companies.index');
            }
            
        } else {
            echo "not found you are looking for";
        }

        
    }

}
