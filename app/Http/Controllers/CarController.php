<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Facade\Ignition\ErrorPage\Renderer;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('components.car-list')->with([
            'cars' => Car::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('components.add-car');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'make' => 'required',
            'model' => 'required',
            'registration_date' => 'required',
            'mileage' => 'required',
            'condition' => 'required',
            'exterior_color' => 'required',
            'interior_color' => 'required',
            'transmission' => 'required',
            'engine_size' => 'required',
            'drivetrain' => 'required',
            'features' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);

        $images = array();
        foreach($request->file('image') as $file){
            $name=time().'-'.$request->name.'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images'),$name);
            $images[]=$name;
        }

        $car = new Car();
        $car->name = $request->name;
        $car->price = $request->price;
        $car->make = $request->make;
        $car->model = $request->model;
        $car->registration_date = $request->registration_date;
        $car->mileage = $request->mileage;
        $car->condition = $request->condition;
        $car->exterior_color = $request->exterior_color;
        $car->interior_color = $request->interior_color;
        $car->transmission = $request->transmission;
        $car->engine_size = $request->engine_size;
        $car->drivetrain = $request->drivetrain;
        $car->features = explode(",", $request->features);
        $car->images = $images;
        $car->description = $request->description;
        $car->save();

        return redirect()->route('car.index')->with('success', 'Car created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('components.edit-car')->with('car', Car::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'make' => 'required',
            'model' => 'required',
            'registration_date' => 'required',
            'mileage' => 'required',
            'condition' => 'required',
            'exterior_color' => 'required',
            'interior_color' => 'required',
            'transmission' => 'required',
            'engine_size' => 'required',
            'drivetrain' => 'required',
            'features' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'description' => 'required',
        ]);

        $car = Car::find($id);

        $images = array();
        if($files=$request->file('image')){
            foreach($files as $file){
                $name=time().rand(0, 99).'-'.$request->name.'.'.$file->getClientOriginalExtension();
                $file->move(public_path('images'),$name);
                $images[]=$name;
            }
            $car->images = $images;
        }

        $car->name = $request->name;
        $car->price = $request->price;
        $car->make = $request->make;
        $car->model = $request->model;
        $car->registration_date = $request->registration_date;
        $car->mileage = $request->mileage;
        $car->condition = $request->condition;
        $car->exterior_color = $request->exterior_color;
        $car->interior_color = $request->interior_color;
        $car->transmission = $request->transmission;
        $car->engine_size = $request->engine_size;
        $car->drivetrain = $request->drivetrain;
        $car->features = explode(",", $request->features);
        $car->description = $request->description;
        $car->save();

        return redirect()->route('car.edit', $id)->with('success', 'Car updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();

        return redirect()->route('car.index')->with('success', 'Car deleted successfully.');
    }
}
