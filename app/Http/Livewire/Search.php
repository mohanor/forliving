<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;

class Search extends Component
{
    public function render()
    {
        $categories = DB::table('categories')
                            ->get();

        return view('livewire.search')
                ->with(['categories' => $categories]);
    }
}
