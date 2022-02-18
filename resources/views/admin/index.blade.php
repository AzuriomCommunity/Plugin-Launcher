@extends('admin.layouts.admin')

@section('title', trans('launcher::admin.title'))

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">

            <form action="{{ route('launcher.admin.settings') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="linux">{{ trans('launcher::admin.os.linux') }}</label>
                    <input class="form-control" id="linux" name="linux" value="{{ $linux }}" required="required">
                </div>

                <div class="form-group">
                    <label for="windows">{{ trans('launcher::admin.os.windows') }}</label>
                    <input class="form-control" id="windows" name="windows" value="{{ $windows }}" required="required">
                </div>

                <div class="form-group">
                    <label for="mac">{{ trans('launcher::admin.os.mac') }}</label>
                    <input class="form-control" id="mac" name="mac" value="{{ $mac }}" required="required">
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> {{ trans('messages.actions.save') }}
                </button>

            </form>

        </div>
    </div>
@endsection
