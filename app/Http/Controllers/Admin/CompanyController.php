<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanies;
use App\Repo\CompaniesInterface;
use Illuminate\Http\Request;

class CompanyController extends Controller
{


    protected $Company;
    public function __construct(CompaniesInterface $Company)
    {
        $this->Company = $Company;
    }


    public function index()
    {

         return $this->Company->index();
    }


    public function create()
    {
        return $this->Company->create();
    }


    public function store(StoreCompanies $request)
    {
        return $this->Company->store($request);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {

        return $this->Company->edit($id);
    }


    public function update(StoreCompanies $request, $id)
    {
        return $this->Company->update( $request, $id);
    }


    public function destroy($id)
    {
        return $this->Company->destroy($id);
    }
}
