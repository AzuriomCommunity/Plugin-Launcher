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
                            <a href="{{ $link }}" target="_blank">
                                <h3 class="card-title text-center"><i class="{{ $icon }} fa-3x"></i></h3>
                                <br>
                                <p class="text-center text-uppercase">
                                    {{ $ressourceName }}
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            @else
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ $linux }}" target="_blank">
                                <h3 class="card-title text-center"><i class="fab fa-linux fa-3x"></i></h3>
                                <br>
                                <p class="text-center text-uppercase">
                                    {{ trans('launcher::admin.os.linux') }}
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ $windows }}" target="_blank">
                                <h3 class="card-title text-center"><i class="fab fa-windows fa-3x"></i></h3>
                                <br>
                                <p class="text-center text-uppercase">
                                    {{ trans('launcher::admin.os.windows') }}
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ $mac }}" target="_blank">
                                <h3 class="card-title text-center"><i class="fab fa-apple fa-3x"></i></h3>
                                <br>
                                <p class="text-center text-uppercase">
                                    {{ trans('launcher::admin.os.mac') }}
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
