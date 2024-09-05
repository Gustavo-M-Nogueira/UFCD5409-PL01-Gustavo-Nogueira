@extends('master.main') 
 
@section('content') 
    
@component('components.address.addresses-trash', ['addresses' => $addresses])
@endcomponent

@endsection 