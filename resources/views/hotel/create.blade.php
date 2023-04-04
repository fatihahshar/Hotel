@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Room') }}</div>

                <div class="card-body">
                   <form method="POST" action="{{route('hotels.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Room Name:</label>
                        <input type="text" class="form-control" name="roomname" placeholder="Enter Room Name">
                    </div>
                    <div class="form-group">
                        <label>Room Description : </label>
                        <textarea class="form-control" name="roomdescription" placeholder="Enter Room Description"></textarea>
                    </div>
                    <div clas="form-group">
                        <label>Quantity : </label>
                        <input type="number" id="quantity" name="roomquantity" class="form-control" placeholder="Enter room quantity">
                    <div>
                    <div class="form-group">
                        <label>Price : </label>
                        <input type="text" step="0.01" min="0" name="price" class="form-control" placeholder="Enter room price">
                    </div>
                    <div class="form-group">
                        <label>Picture</label>
                        <input type="file" class="form-control" name="pict">   
                    <div><br>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
                        <a href="{{route('hotels.index')}}" class="btn btn-primary">Back</a>
                    </div>
                    <br>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
