@extends('layout')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
    <h2>Add new product</h2>
</div>
</div>
</div>


<form action="{{route('store')}}" method="POST">
    @csrf
<div class="col-sm-4">
    <div class="left">
        <strong>Name</strong>
        <input type="text" name="name" class="form-control" placeholder="name">
    </div>

    <div class="left">
        <strong>Type</strong>
        <input type="text" name="type" class="form-control" placeholder="Type"></textarea>
    </div>

    <div class="left">
        <strong>Price</strong>
        <input type="number" name="price" class="form-control" placeholder="Price"></input>
    </div>
</br> 
<div class="left">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form> 

@endsection

