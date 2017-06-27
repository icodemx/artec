<?php namespace Rainlab\Blog\Components;

use Cms\Classes\ComponentBase;
use RainLab\Blog\Models\Post as ModelPost;
use Response;

class Post extends ComponentBase
{
    public $post;

    public function componentDetails()
    {
        return [
            'name' => 'Post Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function init()
    {
        $slug = $this->property('slug');
        $this->post = ModelPost::where('slug', $slug)->first();
        if (!$this->post) {
            return Response::make($this->controller->run('404'), 404);
        }
    }

    public function onRun()
    {
        $this->post->addVisit();
    }

}
