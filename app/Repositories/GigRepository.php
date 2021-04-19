<?php

namespace App\Repositories;
use Exception;
use App\Models\Gigs;
use App\Models\Company;
use App\Models\State;
use App\Models\Country;

class GigRepository implements GigInterface{

    protected $company;

    public function __construct(Gigs $gig){
        $this->gig = $gig;
    }
    public function all(){
        return Gigs::orderBy('id', 'asc')->paginate(8);
    }

    public function companyGet(){
        return Company::get();
    }

    public function countryGet(){
        return Country::get();
    }

    public function stateGet(){
        return State::get();
    }

    public function edit($id){
        return Gigs::findorfail($id);
    }

    public function store(array $data){

        return Gigs::create($data);
    }

    public function update($id, array $data){
        $gig = Gigs::findorfail($id)->update($data);

        if(empty($gig)){
            toastr()->error('Gig not found!');
            return redirect()->back();
        }

        return $gig;
    }

    public function delete($id){
        return Gigs::destroy($id);
    }

}
