<?php

namespace Azuriom\Plugin\Launcher\Providers;

use Azuriom\Extensions\Plugin\BasePluginServiceProvider;
use Azuriom\Models\Permission;

class LauncherServiceProvider extends BasePluginServiceProvider
{
    /**
     * Register any plugin services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any plugin services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->registerPolicies();

        $this->loadViews();

        $this->loadTranslations();

        $this->loadMigrations();

        $this->registerRouteDescriptions();

        $this->registerAdminNavigation();

        $this->registerUserNavigation();

        Permission::registerPermissions([
            'launcher.manage' => 'launcher::admin.permissions.manage',
        ]);
    }

    protected function routeDescriptions()
    {
        return [
            'launcher.index' => 'Launcher',
        ];
    }

    /**
     * Return the admin navigations routes to register in the dashboard.
     *
     * @return array
     */
    protected function adminNavigation()
    {
        return [
            'launcher' => [
                'name' => 'Launcher', // Traduction du nom de l'onglet
                'icon' => 'bi bi-controller', // Icône Bootstrap Icons
                'route' => 'launcher.admin.settings', // Route de la page
                'permission' => 'launcher.manage'
            ]
        ];
    }
}
