@extends('master.main') 
 
@section('content') 
<div class="container mt-4 mb-4 w-50">      
    <h1>Edit Address</h1>  
    <form method="POST" action="{{ url('addresses/' . $address->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="address">Address</label>
                <input 
                    type="text"
                    id="address"
                    name="address"
                    autocomplete="address"
                    placeholder="Type your address"
                    class="form-control
                    @error('address') is-invalid @enderror"
                    value="{{$address->address}}"
                    required
                    aria-describedby="addressHelp">
                <small id="addressHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>

                @error('address') 
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <br>

                <label for="city">City</label>
                <input 
                    type="text"
                    id="city"
                    name="city"
                    autocomplete="city"
                    placeholder="Type your address id"
                    class="form-control
                    @error('city') is-invalid @enderror"
                    value="{{$address->city}}"
                    required
                    aria-describedby="cityHelp">        
                
                @error('city') 
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
                <br>

                <label for="country">Country</label>
                <input 
                    type="text"
                    id="country"
                    name="country"
                    autocomplete="country"
                    placeholder="Type your address id"
                    class="form-control
                    @error('country') is-invalid @enderror"
                    value="{{$address->country}}"
                    required
                    aria-describedby="countryHelp">        
                
                @error('country') 
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <br>

                <label for="postal_code">Postal Code</label>
                <input 
                    type="text"
                    id="postal_code"
                    name="postal_code"
                    autocomplete="postal_code"
                    placeholder="Type your address id"
                    class="form-control
                    @error('postal_code') is-invalid @enderror"
                    value="{{$address->postal_code}}"
                    required
                    aria-describedby="postal_codeHelp">        
                
                @error('postal_code') 
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <br>

                <label for="person_id">Onwer</label>
                <input 
                    type="text"
                    id="person_id"
                    name="person_id"
                    autocomplete="person_id"
                    placeholder="Type the onwer"
                    class="form-control
                    @error('person_id') is-invalid @enderror"
                    value="{{$address->person_id}}"
                    required
                    aria-describedby="person_idHelp">

                @error('person_id') 
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
        </form>
    </div>
@endsection 