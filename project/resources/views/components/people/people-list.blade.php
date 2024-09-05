@extends('master.main') 
 
@section('content') 
    <div class="container mt-5 mb-5"> 
    <h1>People List</h1>

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
                <th scope="col">Birth Date</th> 
                <th scope="col">Email</th>     
                <th scope="col">Actions</th>             
            </tr>
            
            </thead> 
            <tbody> 
            @foreach($people as $person) 
                <tr> 
                    <th scope="row">
                        {{ $person->id }}
                    </th>
                    <td>{{$person->name}}</td> 
                    <td>{{$person->birthDate}}</td>
                    <td>{{$person->email}}</td>
                    <td>
                        <div class="pr-1">
                            <a href="{{url('people/' . $person->id)}}" type="button" class="btn btn-success">Show</a>
                        
                            <a href="{{url('people/' . $person->id . '/edit')}}" type="button" class="btn btn-primary">Edit</a>

                            <form method="POST" action="{{ url('people/' . $person->id) }}" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    <!-- <button class="btn btn-primary">Edit<a href=""></a></button>
                    <button class="btn btn-danger">Delete<a href=""></a></button> -->
                    </td>
                </tr> 
            @endforeach 
            </tbody> 
        </table>


    <!-- <div>
     <a href="{{url('people/export/')}}" type="button" class="btn btn-success">Export</a>
    </div>
    <br>
    <br>
    
    <div>
        <h2>Import</h2>
        <form action="{{url('people/import/')}}" method="POST">
        @csrf
            <input type="file" name="excelFile" accept="">
            <button type="submit">Upload</button>
        </form>
    </div> -->

    <br>
        {{ $people->links() }}
    </div> 
@endsection 