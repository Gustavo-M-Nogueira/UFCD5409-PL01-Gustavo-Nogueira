@extends('master.main') 
 
@section('content') 
    <div class="container mt-5 mb-5"> 
    <h1>Pets List</h1>

    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{  session('status')   }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    
        <table class="table"> 
            <thead> 
            <tr> 
                <th scope="col">#</th> 
                <th scope="col">Name</th> 
                <th scope="col">Color</th> 
                <th scope="col">Birth Date</th> 
                <th scope="col">Onwer</th> 
                <th scope="col">Actions</th> 
                
            </tr>
            
            </thead> 
            <tbody> 
            @foreach($pets as $pet) 
                <tr> 
                    <th scope="row">
                        {{ $pet->id }}
                    </th>
                    <td>{{$pet->name}}</td> 
                    <td>{{$pet->color}}</td> 
                    <td>{{$pet->birthDate}}</td> 
                    <td>{{$pet->person->name}}</td>

                    <td>
                        <div class="pr-1">
                            <a href="{{url('pets/' . $pet->id)}}" type="button" class="btn btn-success">Show</a>
                        
                            <a href="{{url('pets/' . $pet->id . '/edit')}}" type="button" class="btn btn-primary">Edit</a>

                            <form method="POST" action="{{ url('pets/' . $pet->id) }}" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr> 
            @endforeach 
            </tbody> 
        </table>

    <br>
        {{ $pets->links() }}
    </div> 
@endsection 