<?php namespace Icodemx\Portafolio;

use Backend;
use System\Classes\PluginBase;

/**
 * Portafolio Plugin Information File
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
            'name' => 'Portafolio',
            'description' => 'No description provided yet...',
            'author' => 'Icodemx',
            'icon' => 'icon-suitcase'
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
            'Icodemx\Portafolio\Components\Artworks' => 'Artworks',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'icodemx.portafolio.edit_artwork' => [
                'tab' => 'Portafolio',
                'label' => 'Editar Obras de Arte'
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
        return [
            'portafolio' => [
                'label' => 'Portafolio',
                'url' => Backend::url('icodemx/portafolio/artwork'),
                'icon' => 'icon-suitcase',
                'permissions' => ['icodemx.portafolio.*'],
                'order' => 4,
                'sideMenu' => [
                    'artwork' => [
                        'label' => 'Obras de Arte',
                        'url' => Backend::url('icodemx/portafolio/artwork'),
                        'icon' => 'icon-paint-brush',
                        'permissions' => ['icodemx.portafolio.edit_artwork'],
                    ]
                ],
            ]
        ];
    }
}
