<?php

namespace App\View\Components;

use Illuminate\View\Component;

class faq extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $data; 
    public $currentYear;

    public function __construct($data,$currentYear)
    {
        $this->data=$data;
        $this->currentYear=$currentYear;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.faq',[
            'data' => $this->data,
            'currentYear' => $this->currentYear
        ]);
    }
}
