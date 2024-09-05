@extends('master.main') 
 
@section('content') 
@extends('master.main') 
 
@section('content') 
<div class="container mt-4 mb-4 w-50">      
    <h1>Show Pet</h1>  
            <div class="form-group">
                <label for="name">Name</label>
                <input 
                    readonly
                    type="text"
                    id="name"
                    name="name"
                    class="form-control"
                    value="{{   $pet->name   }}">
                <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>   
                
                <br>

                <label for="color">Color</label>
                <input 
                    readonly
                    type="text"
                    id="color"
                    name="color"
                    class="form-control"
                    value="{{   $pet->color   }}">

                <br>

                <label for="birthDate">Birth Date</label> <br>
                <input 
                    readonly
                    type="date"
                    id="birthDate" 
                    name="birthDate" 
                    class="form-control" 
                    value="{{   $pet->birthDate   }}">

                <br>

                <label for="person_id">Onwer</label>
                <input 
                    readonly
                    type="text"
                    id="person_id"
                    name="person_id"
                    class="form-control"
                    value="{{   $pet->person->name   }}">

            </div>
            <a href="{{url('pets')}}" type="button" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection 