<?php namespace Icodemx\Portafolio\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Artwork Back-end Controller
 */
class Artwork extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.ReorderController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Icodemx.Portafolio', 'portafolio', 'artwork');
    }
}
