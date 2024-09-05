@extends('master.main') 
 
@section('content') 
    
@component('components.players.players-trash', ['players' => $players])
@endcomponent

@endsection 