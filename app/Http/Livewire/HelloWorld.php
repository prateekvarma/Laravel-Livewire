<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    // the $name variable will auto pass into the view (new feature of laravel 7)
    public $name = "Jose";

    public function render()
    {
        return view('livewire.hello-world');
    }
}
