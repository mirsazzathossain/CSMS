<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;

class CarSlider extends Component
{
    public $cars;
    public function mount(){
        $this->cars = Car::latest()->take(4)->get();
    }
    public function render()
    {
        return view('livewire.car-slider');
    }
}
