<?php

namespace App\Http\Livewire;

use App\Tweet;
use Livewire\Component;

class ShowTweets extends Component
{

    public $message = 'Apenas um teste';

    public function render()
    {
        $tweets = Tweet::get();

        return view('livewire.show-tweets', compact('tweets'));
    }
}
