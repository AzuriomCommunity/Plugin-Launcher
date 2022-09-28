@extends('admin.layouts.admin')

@section('title', 'Launcher')

@section('content')
    <form action="{{ route('launcher.admin.settings') }}" method="POST">
        @csrf
        <h4>{{ trans('launcher::admin.plugin_settings') }}</h4>
        <div class="card shadow mb-4">
            <div class="card-body">
                <p><i class="bi bi-exclamation-triangle"></i> {{ trans('launcher::admin.custom_description_info') }}</p>

                <div class="mb-3">
                    <label for="description">{{ trans('launcher::admin.custom_description') }}</label>
                    <input class="form-control" id="description" name="description" value="{{ $description }}">
                </div>

                <div class="mb-3 form-check form-switch">
                    <input type="checkbox" class="form-check-input" id="enableSwitch" name="singleRessourceDisplay"
                           @if($type) checked @endif>
                    <label class="form-check-label"
                           for="enableSwitch">{{ trans('launcher::admin.single_ressources') }}</label>
                </div>
            </div>
        </div>
        @if($type)
            <h4>{{ trans('launcher::admin.single.custom_link') }}</h4>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="ressourceName">{{ trans('launcher::admin.single.display_name') }}</label>
                        <input class="form-control" id="ressourceName" name="ressourceName" value="{{ $ressourceName }}">
                    </div>

                    <div class="mb-3">
                        <label for="link">{{ trans('messages.fields.link') }}</label>
                        <input class="form-control" id="link" name="ressourceLink" value="{{ $ressourceLink }}">
                    </div>

                    <div class="mb-3">
                        <label for="icon">{{ trans('messages.fields.icon') }}</label>
                        <input class="form-control" id="icon" name="ressourceIcon" placeholder="bi bi-save" value="{{ $ressourceIcon }}">

                        <small class="form-text">@lang('messages.icons')</small>
                    </div>
                </div>
            </div>
        @else
            <h4>{{ trans('launcher::admin.link_config') }}</h4>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="linux">Linux</label>
                        <input class="form-control" id="linux" name="linux" value="{{ $linux }}">
                    </div>

                    <div class="mb-3 form-check form-switch">
                        <input type="checkbox" class="form-check-input" id="displayLinux" name="displayLinux"
                               @if($linuxEnabled) checked @endif>
                        <label class="form-check-label" for="displayLinux">{{ trans('launcher::admin.hide_this') }}</label>
                    </div>

                    <div class="mb-3">
                        <label for="windows">Windows</label>
                        <input class="form-control" id="windows" name="windows" value="{{ $windows }}">
                    </div>

                    <div class="mb-3 form-check form-switch">
                        <input type="checkbox" class="form-check-input" id="displayWindows" name="displayWindows"
                               @if($windowsEnabled) checked @endif>
                        <label class="form-check-label" for="displayWindows">{{ trans('launcher::admin.hide_this') }}</label>
                    </div>

                    <div class="mb-3">
                        <label for="mac">macOS</label>
                        <input class="form-control" id="mac" name="mac" value="{{ $mac }}">
                    </div>

                    <div class="mb-3 form-check form-switch">
                        <input type="checkbox" class="form-check-input" id="displayMac" name="displayMac"
                               @if($macEnabled) checked @endif>
                        <label class="form-check-label" for="displayMac">{{ trans('launcher::admin.hide_this') }}</label>
                    </div>
                </div>
            </div>
        @endif

        <button type="submit" class="btn btn-primary">
            <i class="bi bi-save"></i> {{ trans('messages.actions.save') }}
        </button>
    </form>
@endsection
