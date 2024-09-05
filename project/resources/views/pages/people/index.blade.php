@extends('master.main') 
 
@section('content') 
    
@component('components.people.people-list', ['people' => $people])
@endcomponent

@endsection 