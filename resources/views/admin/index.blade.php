@extends('admin.layouts.admin')

@section('title', trans('launcher::admin.title'))

@section('content')
    <form action="{{ route('launcher.admin.settings') }}" method="POST">
        @csrf
        <h4>{{ trans('launcher::admin.plugin_settings') }}</h4>
        <p><i class="bi bi-exclamation-triangle"></i> {{ trans('launcher::admin.custom_description_info') }}</p>
        <div class="card shadow mb-4">
            <div class="card-body">

                <div class="form-group">
                    <label for="description">{{ trans('launcher::admin.custom_description') }}</label>
                    <input class="form-control" id="description" name="description" value="{{ $description }}">
                </div>
                <br>
                <div class="form-group custom-control form-switch">
                    <input type="checkbox" class="form-check-input" id="enableSwitch" name="singleRessourceDisplay"
                           @if($type) checked @endif>
                    <label class="custom-control-label"
                           for="enableSwitch">{{ trans('launcher::admin.single_ressources') }}</label>
                </div>
            </div>
        </div>
        @if($type)
            <h4>{{ trans('launcher::admin.single.custom_link') }}</h4>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="form-group">
                        <label for="ressourceName">{{ trans('launcher::admin.single.display_name') }}</label>
                        <input class="form-control" id="ressourceName" name="ressourceName" value="{{ $ressourceName }}">
                    </div>

                    <div class="form-group">
                        <label for="link">{{ trans('launcher::admin.single.link') }}</label>
                        <input class="form-control" id="link" name="ressourceLink" value="{{ $ressourceLink }}">
                    </div>

                    <div class="form-group">
                        <label for="icon">{{ trans('launcher::admin.single.icon') }}</label>
                        <input class="form-control" id="icon" name="ressourceIcon" placeholder="Ex : bi bi-save" value="{{ $ressourceIcon }}">
                    </div>
                </div>
            </div>
        @else
            <h4>{{ trans('launcher::admin.link_config') }}</h4>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="form-group">
                        <label for="linux">{{ trans('launcher::admin.os.linux') }}</label>
                        <input class="form-control" id="linux" name="linux" value="{{ $linux }}">
                    </div>

                    <div class="form-group">
                        <label for="windows">{{ trans('launcher::admin.os.windows') }}</label>
                        <input class="form-control" id="windows" name="windows" value="{{ $windows }}">
                    </div>

                    <div class="form-group">
                        <label for="mac">{{ trans('launcher::admin.os.mac') }}</label>
                        <input class="form-control" id="mac" name="mac" value="{{ $mac }}">
                    </div>
                </div>
            </div>
        @endif

        <button type="submit" class="btn btn-primary">
            <i class="bi bi-save"></i> {{ trans('messages.actions.save') }}
        </button>
    </form>
@endsection
