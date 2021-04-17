<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Repositories\CompanyRepository;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $companyRepository;

    public function __construct(CompanyRepository $companyRepository){
        $this->companyRepository = $companyRepository;
    }


    public function index()
    {
        $companies = $this->companyRepository->all();
        return view('dashboard.company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->companyRepository->store($this->validateData($request));
        toastr()->success('Company added successfully!');
        return redirect()->back();
    }

    private function validateData(Request $request , $mode = 'required'){
        $data = $request->validate([
            'name' => 'required|string',
        ]);

        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = $this->companyRepository->edit($id);
        return view('dashboard.company.index',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->companyRepository->update($id, $this->validateData($request, 'nullable'));
        toastr()->success('Company Updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->companyRepository->delete($id);
        toastr()->success('Company deleted successfully!');
        return redirect()->back();
    }
}
