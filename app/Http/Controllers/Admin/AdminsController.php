<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdmin;
use App\Repo\AdminsInterface;
use Illuminate\Support\Facades\Hash;

class AdminsController extends Controller
{

    protected $admins;

    public function __construct(AdminsInterface $Admin)
    {
        $this->admins = $Admin;
    }


    public function index()
    {
        return $this->admins->index();
    }

    public function create()
    {
        return $this->admins->create();

    }

    public function store(StoreAdmin $request)
    {
        return $this->admins->store( $request);

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return $this->admins->edit($id);
    }


    public function update(StoreAdmin $request)
    {
        return $this->admins->update($request);
    }

    public function destroy($id)
    {
        return $this->admins->destroy($id);
    }
}
