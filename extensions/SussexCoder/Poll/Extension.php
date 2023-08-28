<?php namespace SussexCoder\Poll;

use System\Classes\BaseExtension;

/**
 * Poll Extension Information File
 */
class Extension extends BaseExtension
{
    /**
     * Returns information about this extension.
     *
     * @return array
     */
    public function extensionMeta()
    {
        return [
            'name'        => 'Poll',
            'author'      => 'Daniel Crawley',
            'description' => 'Easily add a Poll to your website, offer your customers the chance to vote on tomorrows "Soup of the Day"',
            'icon'        => 'fa-poll',
            'version'     => '1.0.0'
        ];
    }

    public function registerDashboardWidgets()
    {
        return [
            'SussexCoder\Poll\DashboardWidgets\Widget' => [
                'label' => 'Poll Results',
                'context' => 'dashboard',
            ],
        ];
    }

    /**
     * Register method, called when the extension is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this extension.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'SussexCoder\Poll\Components\Block' => [
                'code' => 'pollBlock',
                'name' => 'Poll Block',
                'description' => 'Displays the Poll',
            ],
        ];
    }

    /**
     * Registers any admin permissions used by this extension.
     *
     * @return array
     */
    public function registerPermissions()
    {
// Remove this line and uncomment block to activate
        return [
//            'Sussexcoder.Poll.SomePermission' => [
//                'description' => 'Some permission',
//                'group' => 'module',
//            ],
        ];
    }
}
