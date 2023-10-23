<?php


namespace App\Repositories\Interfaces;


interface PolicyRepositoryInterface
{


    public function getAll($data);

    public function create();

    public function edit($Id);

    public function show($Id);

    public function destroy($policy);

    public function store($request);

    public function update($policy, $request);
}