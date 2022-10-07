<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
/**   creamos el titulo,la descripcion y el link */
   public $title, $body, $link, $text, $place, $img;

    public function __construct($title, $body, $link = '',$text = '',$place = '',$img = '')
    {
        $this->title = $title;
        $this->body = $body;
        $this->link = $link;
        $this->text = $text;
        $this->place = $place;
        $this->img = $img;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
