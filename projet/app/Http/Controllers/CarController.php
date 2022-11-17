<?php
namespace App\Http\Controllers;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;
class CarController extends Controller
{
   public function index()
    {
        $cars = Car::all();
        return view ('cars')->with('cars', $cars);
    }
    public function create()
    {
        return view('create');
    }
    public function store(StoreCarRequest $request)
    {
        $input = $request->all();
        Car::create($input);
        return redirect('/');
    }

    public function show($id)
    {

        $carId = Car::find($id);
        return view('show', ['car' => $carId]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cars = Car::find($id);
        return view('edit')->with('car', $cars);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarRequest  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, $id)
    {
        $cars = Car::find($id);
        $input = $request->all();
        $cars->update($input);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::destroy($id);
        return redirect('/');
    }
}