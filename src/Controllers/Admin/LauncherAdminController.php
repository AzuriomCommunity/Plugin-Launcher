<?php

namespace Azuriom\Plugin\Launcher\Controllers\Admin;

use Azuriom\Http\Controllers\Controller;
use Azuriom\Models\Setting;
use Illuminate\Http\Request;

class LauncherAdminController extends Controller
{
    /**
     * Show the home admin page of the plugin.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('launcher::admin.index', [
            'linux' => setting('launcher.linux'),
            'windows' => setting('launcher.windows'),
            'mac' => setting('launcher.mac'),
            'description' => setting('launcher.description'),
            'type' => setting('launcher.ressourcesType', false),
            'ressourceName' => setting('launcher.ressourceName'),
            'ressourceLink' => setting('launcher.ressourceLink'),
            'ressourceIcon' => setting('launcher.ressourceIcon'),
        ]);
    }

    public function save(Request $request)
    {
        Setting::updateSettings([
            'launcher.linux' => $request->input('linux'),
            'launcher.windows' => $request->input('windows'),
            'launcher.mac' => $request->input('mac'),
            'launcher.description' => $request->input('description'),
            'launcher.ressourcesType' => $request->filled('singleRessourceDisplay'),
            'launcher.ressourceName' => $request->input('ressourceName'),
            'launcher.ressourceLink' => $request->input('ressourceLink'),
            'launcher.ressourceIcon' => $request->input('ressourceIcon'),
        ]);

        return redirect()->route('launcher.admin.settings')->with('success', trans('admin.settings.status.updated'));
    }
}
