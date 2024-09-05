@extends('master.main') 
 
@section('content') 
<div class="container mt-4 mb-4 w-50">      
    <h1>Add Pet</h1>  
    <form method="POST" action="{{ url('pets') }}" enctype="multipart/form-data">
            @csrf 
            <div class="form-group">
                <label for="name">Name</label>
                <input 
                    type="text"
                    id="name"
                    name="name"
                    autocomplete="name"
                    placeholder="Type your name"
                    class="form-control
                    @error('name') is-invalid @enderror"
                    value="{{   old('name') }}"
                    required
                    aria-describedby="nameHelp">
                <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>

                @error('name') 
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
                <br>

                <label for="color">Color</label>
                <input 
                    type="text"
                    id="color"
                    name="color"
                    autocomplete="color"
                    placeholder="Type the color"
                    class="form-control
                    @error('color') is-invalid @enderror"
                    value="{{   old('color') }}"
                    required
                    aria-describedby="colorHelp">

                @error('color') 
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <br>

                <label for="birthDate">Birth Date</label> <br>
                <input 
                    type="date"
                    id="birthDate" 
                    name="birthDate" 
                    autocomplete="birthDate"
                    rows="7" 
                    placeholder="Type your birthDate" 
                    class="form-control
                    @error('birthDate') is-invalid @enderror" 
                    value="{{   old('birthDate') }}"
                    required 
                    aria-describedby="birthDateHelp">

                @error('birthDate')
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
                    value="{{   old('person_id') }}"
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