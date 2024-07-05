<?php

namespace App\Repositories;

use App\Interfaces\CheckKodamRepositoryInterface;
use App\Models\CheckKodam;

class CheckKodamRepository implements CheckKodamRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function index(){
        return CheckKodam::all();
    }

    public function getById($id){
       return CheckKodam::findOrFail($id);
    }

    public function store(array $data){
       return CheckKodam::create($data);
    }

    public function update(array $data,$id){
       return CheckKodam::whereId($id)->update($data);
    }

    public function delete($id){
        CheckKodam::destroy($id);
    }
}
