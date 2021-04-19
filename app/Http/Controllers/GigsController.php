<?php

namespace App\Http\Controllers;

use App\Models\Gigs;
use App\Repositories\GigRepository;
use Illuminate\Http\Request;

class GigsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $gigRepository;

    public function __construct(GigRepository $gigRepository){
        $this->gigRepository = $gigRepository;
    }

    public function index()
    {
        $gigs = $this->gigRepository->all();
        $companies = $this->gigRepository->companyGet();
        $countries = $this->gigRepository->countryGet();
        $states = $this->gigRepository->stateGet();
        return view('dashboard.gigs.index', compact('gigs','companies','countries','states'));
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
        $this->gigRepository->store($this->validateData($request));
        toastr()->success('Gig added successfully!');
        return redirect()->back();
    }

    private function validateData(Request $request , $mode = 'required'){
        $data = $request->validate([
            'company_id' => 'required',
            'country_id' => 'required',
            'role' => 'required|string',
            'state_id' => 'required',
            'address' => 'required|string',
            'employment_type' => 'required',
            'min_wage' => 'required',
            'max_wage' => 'required',

        ]);

        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gigs  $gigs
     * @return \Illuminate\Http\Response
     */
    public function show(Gigs $gigs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gigs  $gigs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gig = $this->gigRepository->edit($id);
        return view('dashboard.gigs.index',compact('gig'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gigs  $gigs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->gigRepository->update($id, $this->validateData($request, 'nullable'));
        toastr()->success('Gig Updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gigs  $gigs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->gigRepository->delete($id);
        toastr()->success('Gig deleted successfully!');
        return redirect()->back();
    }
}
