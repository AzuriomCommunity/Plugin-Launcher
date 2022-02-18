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
        ]);
    }

    public function save(Request $request)
    {
        $data = $this->validate($request, [
            'linux' => ['required', 'string', 'max:255'],
            'windows' => ['required', 'string', 'max:255'],
            'mac' => ['required', 'string', 'max:255'],
        ]);

        Setting::updateSettings([
            'launcher.linux' => $request->input('linux'),
            'launcher.windows' => $request->input('windows'),
            'launcher.mac' => $request->input('mac'),
        ]);

        return redirect()->route('launcher.admin.settings')->with('success', trans('admin.settings.status.updated'));
    }
}
