@extends('layouts.app')

@section('title', trans('launcher::messages.title'))

@section('content')
    <div class="container content">
        <p class="text-center">{{ trans('launcher::messages.description') }}</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center"><i class="fab fa-linux fa-3x"></i></h3>
                        <br>
                        <p class="text-center">
                            <a href="{{ $linux }}" target="_blank">
                                {{ strtoupper(trans('launcher::admin.os.linux')) }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center"><i class="fab fa-windows fa-3x"></i></h3>
                        <br>
                        <p class="text-center">
                            <a href="{{ $windows }}" target="_blank">
                                {{ strtoupper(trans('launcher::admin.os.windows')) }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center"><i class="fab fa-apple fa-3x"></i></h3>
                        <br>
                        <p class="text-center">
                            <a href="{{ $mac }}" target="_blank">
                                {{ strtoupper(trans('launcher::admin.os.mac')) }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
