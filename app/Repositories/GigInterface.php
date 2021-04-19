<?php
namespace App\Repositories;

interface GigInterface{
    public function all();

    public function companyGet();

    public function countryGet();

    public function stateGet();

    public function edit($id);

    public function store(array $data);

    public function update($id, array $data);

    public function delete($id);
}
