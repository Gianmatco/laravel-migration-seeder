@extends('layouts.default')

@section('pageTile','lista pacchetti')

@endsection

@section('mainContent')
<div>
    <h1>pacchetti </h1>
    <div class="row">
        @foreach ($pacchetti as $pacchetto)
        <div class="col">
            {{$pacchetto->titolo}}
        </div>
            
        @endforeach
    </div>
</div>
    
@endsection