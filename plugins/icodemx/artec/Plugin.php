<?php namespace Icodemx\Artec;

use Backend;
use System\Classes\PluginBase;

/**
 * Artec Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Artec',
            'description' => 'No description provided yet...',
            'author'      => 'Icodemx',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Icodemx\Artec\Components\Contacto' => 'Contacto',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'icodemx.artec.some_permission' => [
                'tab' => 'Artec',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'artec' => [
                'label'       => 'Artec',
                'url'         => Backend::url('icodemx/artec/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['icodemx.artec.*'],
                'order'       => 500,
            ],
        ];
    }

    public function registerMailTemplates()
    {
        return [
            'icodemx.artec::mail.contacto' => 'Template contact form'
        ];
    }
}
