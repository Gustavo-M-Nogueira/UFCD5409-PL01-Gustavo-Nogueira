@extends('master.main') 
 
@section('content') 
@extends('master.main') 
 
@section('content') 
<div class="container mt-4 mb-4 w-50">      
    <h1>Show Person</h1>  
            <div class="form-group">
                <label for="name">Name</label>
                <input 
                    readonly
                    type="text"
                    id="name"
                    name="name"
                    class="form-control"
                    value="{{   $person->name   }}">
                <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>   

                <br>
                
                <label for="email">email</label>
                <input 
                    readonly
                    type="email"
                    id="email"
                    name="email"
                    class="form-control"
                    value="{{   $person->email }}">

                <br>

                <label for="birthDate">Birth Date</label> <br>
                <input 
                    readonly
                    type="date"
                    id="birthDate" 
                    name="birthDate" 
                    rows="7" 
                    class="form-control"
                    value="{{   $person->birthDate }}">


            </div>
            <a href="{{url('people')}}" type="button" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection 