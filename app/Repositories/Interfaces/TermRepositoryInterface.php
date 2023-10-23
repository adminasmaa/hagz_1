<?php


namespace App\Repositories\Interfaces;


interface TermRepositoryInterface
{


    public function getAll($data);

    public function create();

    public function edit($Id);

    public function show($Id);

    public function destroy($term);

    public function store($request);

    public function update($term, $request);
}
