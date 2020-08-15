@extends('layouts.app')

@section('title', 'Launcher')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ plugin_asset('launcher', 'css/style.css') }}">

    <div class="container content">
        <h2 class="title">{{ trans('launcher::messages.title') }}</h2>
        <br>
        @if($server && ($playersCount = $server->getOnlinePlayers()) >= 0)
            <p class="desc">{{ trans('launcher::messages.desc1') }}{{ $playersCount }}{{ trans('launcher::messages.desc2') }}</p>
            <br>
        @else
            <h4 class="font-link">{{ trans('launcher::messages.serveroff') }}</h4>	
            <br>				  
		@endif

        <div class="row">
            <div class="launcher-plateform col-md-4">
                <p></p>
                <img src="{{ plugin_asset('launcher', 'img/windows.png') }}"></img>
                <p></p>
                <h3>windows</h3>
                <a href="#" class="btn-launcher">Télécharger</a>
            </div>
            <div class="launcher-plateform col-md-4">
                <p></p>
                <img src="{{ plugin_asset('launcher', 'img/apple.png') }}"></img>
                <p></p>
                <h3>mac os</h3>
                <a href="#" class="btn-launcher">Télécharger</a>
            </div>
            <div class="launcher-plateform col-md-4">
                <p></p>
                <img src="{{ plugin_asset('launcher', 'img/linux.png') }}"></img>
                <p></p>
                <h3>linux</h3>
                <a href="#" class="btn-launcher">Télécharger</a>
            </div>
        </div>
    </div>
@endsection