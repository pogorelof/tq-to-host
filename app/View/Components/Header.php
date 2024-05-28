<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public $header;
    public $photo;
    public $color;
    public $size;
    public function __construct($header, $photo, $color, $size)
    {
        $this->header = $header;
        $this->photo = $photo;
        $this->color = $color;
        $this->size = $size;
    }
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
