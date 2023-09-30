@extends('layouts.app')

@section('title', 'Launcher')

@section('content')
    <p class="text-center">{{ empty($description) ? trans('launcher::messages.description') : $description }}</p>

    <div class="row text-center">
        @if($type)
            <div class="offset-md-4 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ $link }}" target="_blank">
                            <span class="display-1 mb-2"><i class="{{ $icon }}"></i></span>

                            <p class="card-text">
                                {{ $ressourceName }}
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        @else
            @if(!$linuxEnabled)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ $linux }}" target="_blank" class="text-reset d-block">
                                <span class="display-1 mb-2"><i class="bi bi-ubuntu"></i></span>

                                <p class="card-text">
                                    Linux
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            @endif
            @if(!$windowsEnabled)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ $windows }}" target="_blank" class="text-reset d-block">
                                <span class="display-1 mb-2"><i class="bi bi-windows"></i></span>

                                <p class="card-text">
                                    Windows
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            @endif
            @if(!$macEnabled)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ $mac }}" target="_blank" class="text-reset d-block">
                                <span class="display-1"><i class="bi bi-apple"></i></span>

                                <p class="card-text">
                                    macOS
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        @endif
    </div>
@endsection
