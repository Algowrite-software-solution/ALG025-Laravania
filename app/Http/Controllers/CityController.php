<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Action\ResponseProtocol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CityController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $city = City::all();
        return ResponseProtocol::success($city);

    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //add the city

        try {
            //validate the data
            $validateData=$request->validate([
                'city_name'=>'required|string'
            ]);

            //create the city
            DB::beginTransaction();
            $city=City::create($validateData);
            DB::commit();
            return ResponseProtocol::success($city,'City created successfully',);


        } catch (\Throwable $th) {
            //throw $th;
            return ResponseProtocol::failed($th->getMessage(),'City creation failed');
            DB::rollBack();
        }
    }

 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        try {
            //validate the data
            $validateData=$request->validate([
                'city_name'=>'required|string',
                'id'=>'required|integer'
            ]);

            //update the city
            DB::beginTransaction();
            $city=City::find($validateData['id']);
            $city->update($validateData);
            DB::commit();
            return ResponseProtocol::success($city,'City updated successfully',);

        } catch (\Throwable $th) {
            //throw $th;
            return ResponseProtocol::failed($th->getMessage(),'City update failed');
            DB::rollBack();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        try {
            //validate the data
            $validateData=$request->validate([
                'id'=>'required|integer'
            ]);

            //delete the city
            DB::beginTransaction();
            $city=City::find($validateData['id']);
            $city->delete();
            DB::commit();
            return ResponseProtocol::success($city,'City deleted successfully',);

        } catch (\Throwable $th) {
            //throw $th;
            return ResponseProtocol::failed($th->getMessage(),'City deletion failed');
            DB::rollBack();
        }
    }
}
