<?php
namespace App\Repo;

interface ServicesInterface{
    public function index();
    public function create();
    public function store($request);
    public function edit($id);
    public function update($request,$id);
    public function destroy($id);
    // public function show_last($id);

    // public function show($id);
}
