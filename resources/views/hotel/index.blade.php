@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @if (session()->has('alert'))
                    <div class="alert {{ session()->get('alert-type')}}" role="alert">
                        {{session()->get('alert')}}
                    </div>
                @endif
                <div style="font-size:25px;"class="card-header">{{ __('Hotel List') }} <a style="float:right;" href="{{route('hotels.create')}}" class="btn btn-dark">Add New Room</a></div>
                <br>
                <form action="" method="">
                            <div style="float:right;" class="form-group row">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control mb-2"  name="keyword" value="{{ request()->get('keyword')}}">
                                </div>
                                <div class="col-sm-3">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                <!-- </form> -->
                <div class="card-body">
                   <table class="table">
                    <thead>
                    
                        <tr style="text-align:center;">
                            <th>ID</th>
                            <th>Room Name</th>
                            <th>Room Description</th>
                            <th>Room Quantity</th>
                            <th>Price</th>
                            <th colspan='3'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hotels as $hotel)
                        <tr>
                            <td>{{ $hotel->id }}</td>
                            <td>{{ $hotel->roomname }}</td>
                            <td>{{ $hotel->roomdescription}}</td>
                            <td>{{ $hotel->roomquantity}}</td>
                            <td>{{ $hotel->price}}</td>
                            <td><a href="{{route('hotels.show', $hotel)}}" class="btn btn-success">Show</a></td>
                            <td><a href="{{route('hotels.edit', $hotel)}}" class="btn btn-warning">Edit</a></td>
                            <td><a href="{{route('hotels.delete', $hotel)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                   </table>
                   {{ $hotels->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
