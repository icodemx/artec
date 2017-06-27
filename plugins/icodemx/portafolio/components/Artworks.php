<?php namespace Icodemx\Portafolio\Components;

use Cms\Classes\ComponentBase;
use Icodemx\Portafolio\Models\Artwork;

class Artworks extends ComponentBase
{

    public $artworks;

    public function componentDetails()
    {
        return [
            'name' => 'Artworks Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRender()
    {
        $this->artworks = Artwork::IsPublished()->orderBy('title')->get();
    }
}
