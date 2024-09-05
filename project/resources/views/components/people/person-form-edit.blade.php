@extends('master.main') 
 
@section('content') 
<div class="container mt-4 mb-4 w-50">      
    <h1>Edit Person</h1>  
    <form method="POST" action="{{ url('people/' . $person->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
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
                    value="{{$person->name}}"
                    required
                    aria-describedby="nameHelp">
                <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>

                @error('name') 
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
                <br>

                <label for="email">email</label>
                <input 
                    type="email"
                    id="email"
                    name="email"
                    autocomplete="email"
                    placeholder="Type your email"
                    class="form-control
                    @error('email') is-invalid @enderror"
                    value="{{$person->email}}"
                    required
                    aria-describedby="emailHelp">

                @error('email') 
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
                    value="{{$person->birthDate}}"
                    required 
                    aria-describedby="birthDateHelp">

                @error('birthDate')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

               
            </div>
            <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
        </form>
    </div>
@endsection 