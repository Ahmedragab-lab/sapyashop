<?php
namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\storeservices;
use App\Repo\ServicesInterface;

class ServiceController extends Controller
{
    protected $servs;

    public function __construct(ServicesInterface $servs)
    {
        $this->servs = $servs;
    }

    public function index()
    {
        return $this->servs->index();
    }

    public function create()
    {
        return $this->servs->create();
    }


    public function store(storeservices $request)
    {
        return $this->servs->store($request);
    }

    public function edit($id)
    {
        return $this->servs->edit($id);
    }


    public function update(storeservices $request, $id)
    {
        return $this->servs->update( $request, $id);
    }

    public function destroy($id)
    {
        return $this->servs->destroy($id);
    }
}
