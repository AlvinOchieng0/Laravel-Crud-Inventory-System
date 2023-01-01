@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit product</h2>
            <div class="pull-right">
            </div>
        </div>
    </div>
</div>

<div class="row">
@foreach($products as $product)

<form action="/edit/{{$product->id}}" method="POST">
    @csrf

    <div class="col-sm-14">
        <div class="left">
            <strong>Name</strong>
            <input type="text" name="prodname" class="form-control" value="{{$product->prodname}}" placeholder="name">
        </div>
        <div class="left">
            <strong>Type</strong>
            <input type="text" name="prodtype" class="form-control" value="{{$product->prodtype}}" placeholder="Type">
        </div>
        <div class="left">
            <strong>Price</strong>
            <input type="number" name="price" class="form-control" value="{{$product->price}}" placeholder="Price">
        </div>
        <div class="left">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endforeach

</div>
@endsection
