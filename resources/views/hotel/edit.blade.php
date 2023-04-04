@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Product Details') }}</div>

                <div class="card-body"> 
                    <form method="POST" action="{{route('hotels.update',$hotel)}}">
                        @csrf
                    <div class="form-group">
                        <label> Room Name : </label>
                        <input type="text" value="{{$hotel->roomname}}" name="roomname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Room Description : </label>
                        <textarea name="roomdescription" class="form-control">{{$hotel->roomdescription}}</textarea>
                    </div>
                    <div class="form-group">
                        <label> Room Quantity : </label>
                        <input type="number" value="{{$hotel->roomquantity}}" name="roomquantity" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Price : </label>
                        <input type="text" value="{{$hotel->price}}" name="price" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                      <button type='submit' class="btn btn-primary">Update</button>&nbsp;
                      <a href="{{route('hotels.index')}}" class="btn btn-primary">Cancel</a>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
