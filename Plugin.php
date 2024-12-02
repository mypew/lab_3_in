<?php namespace Bree7e\Cris;

use Backend;
use Event;
use System\Classes\PluginBase;

/**
 * cris Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Массив, содержажий плагины из официального репозитария, 
     * необходимые для работы данного плагина
     *
     * @var array
     */
    public $require = [
       
    ];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'CRIS',
            'description' => 'Лабораторная работа 3 по Инноватике',
            'author'      => 'Илья Новоселов',
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
        return [];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'cris' => [
                'label'       => 'Лабораторная 3 Инноватика',
                'url'         => Backend::url('bree7e/cris/students'),
                'icon'        => 'icon-book',
                'permissions' => ['bree7e.cris.*'],
                'order'       => 300,
                'sideMenu'    => [
                    'students' => [
                        'label'       => 'Студенты',
                        'icon'        => 'icon-user',
                        'url'         => Backend::url('bree7e/cris/students'),
                        'permissions' => ['bree7e.cris.*']
                    ],
                    'groups' => [
                        'label'       => 'Группы',
                        'icon'        => 'icon-folder-o',
                        'url'         => Backend::url('bree7e/cris/groups'),
                        'permissions' => ['bree7e.cris.*']
                    ],
                ]                
            ],
        ];
    }
}