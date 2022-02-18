@extends('layouts.app')

@section('title', trans('launcher::messages.title'))

@section('content')
    <div class="container content">
        <p class="text-center">{{ empty($description) ? trans('launcher::messages.description') : $description }}</p>
        <div class="row">
            @if($type)
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-center"><i class="{{ $icon }} fa-3x"></i></h3>
                            <br>
                            <p class="text-center text-uppercase">
                                <a href="{{ $link }}" target="_blank">
                                    {{ $ressourceName }}
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            @else
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-center"><i class="fab fa-linux fa-3x"></i></h3>
                            <br>
                            <p class="text-center text-uppercase">
                                <a href="{{ $linux }}" target="_blank">
                                    {{ trans('launcher::admin.os.linux') }}
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
                            <p class="text-center text-uppercase">
                                <a href="{{ $windows }}" target="_blank">
                                    {{ trans('launcher::admin.os.windows') }}
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
                            <p class="text-center text-uppercase">
                                <a href="{{ $mac }}" target="_blank">
                                    {{ trans('launcher::admin.os.mac') }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
