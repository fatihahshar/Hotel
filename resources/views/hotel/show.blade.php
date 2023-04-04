@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Hotel Details') }}</div>

                <div class="card-body">
                   <div class="form-group">
                        <label>Room Name</label>
                        <input type="text" value="{{$hotel->roomname}}" name="roomname" class="form-control" readonly>
                   <div>
                    <div>
                        <label>Room Description</label>
                        <textarea name="roomdescription" class="form-control" readonly>{{ $hotel->roomdescription}}</textarea>
                    </div>
                    <div>
                        <label>Room Quantity</label>
                        <input type="number" value="{{ $hotel->roomquantity}}" name="roomquantity" class="form-control" readonly>   
                    <div>
                    <div>
                        <label>Price</label>
                        <input type="text" value="{{ $hotel->price}}" name="price" class="form-control" readonly>
                    <div>
                    <div class="form-group">
                        @if($hotel->pict)
                        <a target="_blank" href="{{ $hotel->pict_url }}" class="btn btn-link">
                            Open Picture
                    </a>
                    @endif
                    </div><br>
                    <a href="{{route('hotels.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
