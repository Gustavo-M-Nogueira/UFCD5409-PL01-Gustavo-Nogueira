@extends('master.main') 
 
@section('content') 
<div class="container mt-4 mb-4 w-50">      
    <h1>Show Address</h1>  
            
            <div class="form-group">
                <label for="address">Address</label>
                <input 
                    readonly
                    type="text"
                    id="address"
                    name="address"
                    class="form-control"
                    value="{{$address->address}}">
                <small id="addressHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>


                <br>
                
                <label for="city">City</label>
                <input 
                    readonly
                    type="text"
                    id="city"
                    name="city"
                    class="form-control"
                    value="{{$address->city}}">
                
                
                <br>

                <label for="country">Country</label>
                <input 
                    readonly
                    type="text"
                    id="country"
                    name="country"
                    class="form-control"
                    value="{{$address->country}}">        
                

                <br>

                <label for="postal_code">Postal Code</label>
                <input 
                    readonly
                    type="text"
                    id="postal_code"
                    name="postal_code"
                    class="form-control"
                    value="{{$address->postal_code}}">
                
                <br>

                <label for="person_id">Onwer</label>
                <input 
                readonly
                    type="text"
                    id="person_id"
                    name="person_id"
                    class="form-control"
                    value="{{$address->person->name}}">

            </div>
            <a href="{{url('addresses')}}" type="button" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection 