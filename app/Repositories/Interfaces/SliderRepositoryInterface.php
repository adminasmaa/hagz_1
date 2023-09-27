<?php


namespace App\Repositories\Interfaces;


interface SliderRepositoryInterface
{


    public function getAll($data);

    public function create();

    public function edit($Id);

    public function show($Id);

    public function destroy($slider);

    public function store($request);

    public function update($slider, $request);
}
