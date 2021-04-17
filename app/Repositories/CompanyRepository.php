<?php

namespace App\Repositories;
use Exception;
use App\Models\Company;

class CompanyRepository implements CompanyInterface{

    protected $company;

    public function __construct(Company $company){
        $this->company = $company;
    }
    public function all(){
        return Company::orderBy('id', 'asc')->paginate(8);
    }

    public function edit($id){
        return Company::findorfail($id);
    }

    public function store(array $data){

        return Company::create($data);
    }

    public function update($id, array $data){
        $company = Company::findorfail($id)->update($data);

        if(empty($company)){
            toastr()->error('Company not found!');
            return redirect()->back();
        }



        return $company;
    }

    public function delete($id){
        return Company::destroy($id);
    }


}
