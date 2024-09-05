@extends('master.main') 
 
@section('content') 
    <div class="container mt-5 mb-5"> 
    <h1>Players List</h1>

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
                <th scope="col">Address</th> 
                <th scope="col">City</th> 
                <th scope="col">Country</th> 
                <th scope="col">Postal Code</th> 
                <th scope="col">Onwer</th> 
                <th scope="col">Actions</th> 
                
            </tr>
            
            </thead> 
            <tbody> 
            @foreach($addresses as $address) 
                <tr> 
                    <td>{{$address->id}}</td>  
                    <td>{{$address->address}}</td> 
                    <td>{{$address->city}}</td> 
                    <td>{{$address->country}}</td> 
                    <td>{{$address->postal_code}}</td> 
                    <td>{{$address->person->name}}</td>
                    <td>
                        <div class="pr-1">
                            <a href="{{url('addresses/' . $address->id)}}" type="button" class="btn btn-success">Show</a>
                        
                            <a href="{{url('addresses/' . $address->id . '/edit')}}" type="button" class="btn btn-primary">Edit</a>

                            <form method="POST" action="{{ url('addresses/' . $address->id) }}" class="d-inline-block">
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
        {{ $addresses->links() }}
    </div> 
@endsection 