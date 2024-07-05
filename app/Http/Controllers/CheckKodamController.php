<?php

namespace App\Http\Controllers;

use App\Classes\ApiResponseClass;
use App\Http\Requests\StoreCheckRequest;
use App\Http\Resources\CheckKodamResource;
use App\Interfaces\CheckKodamRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use OpenAI\Laravel\Facades\OpenAI;

class CheckKodamController extends Controller
{
    private $checkKodam;

    public function __construct(CheckKodamRepositoryInterface $checkKodam)
    {
        $this->checkKodam = $checkKodam;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->checkKodam->index();
        return ApiResponseClass::sendResponse(CheckKodamResource::collection($data), '', 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCheckRequest $request)
    {
        DB::beginTransaction();
        try {

            $animals = file_get_contents(storage_path('app/public').'/animals.json');
            $animals = json_decode($animals);
            $idx = array_rand($animals->data);
            $anChoose = $animals->data[$idx];

            if(str_word_count($anChoose) == 1){
                $colors = file_get_contents(storage_path('app/public').'/colors.json');
                $colors = json_decode($colors);
                $idx = array_rand($colors->data);
                $colChoose = $colors->data[$idx];
                $anChoose = $anChoose.' '.$colChoose;
            }

            $details = [
                'name' => $request->name,
                'email' => $request->email,
                'result' => $anChoose
            ];

            $data = $this->checkKodam->store($details);
            DB::commit();
            return ApiResponseClass::sendResponse(new CheckKodamResource($data), 'Data Create Successful', 201);
        } catch (\Exception $ex) {
            return ApiResponseClass::rollback($ex);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = $this->checkKodam->getById($id);

        return ApiResponseClass::sendResponse(new CheckKodamResource($data), '', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->checkKodam->delete($id);

        return ApiResponseClass::sendResponse('Data Delete Successful', '', 204);
    }
}
