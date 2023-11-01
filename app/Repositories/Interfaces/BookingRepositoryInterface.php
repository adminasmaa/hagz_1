<?php


namespace App\Repositories\Interfaces;


interface BookingRepositoryInterface
{


    public function getAll($data);

    public function create();

    public function edit($Id);

    public function show($Id);

    public function destroy($booking);

    public function store($request);

    public function update($booking, $request);
}
