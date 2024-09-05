@extends('master.main') 
 
@section('content') 
    
@component('components.pets.pet-form-edit', ['pet' => $pet])
@endcomponent

@endsection 