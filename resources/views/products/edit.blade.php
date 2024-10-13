@extends('layouts.master')
@section('content')



<form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="product_name">Product Name:</label><br>
    <input type="text" name="product_name" id="" value="{{$product->product_name}}" class="form-control" placeholder="Enter product name">
    <label for="product_img">product photo</label>
    <input type="file" name="product_img" id="" value="{{$product->product_img}}">
 
    <input class="btn btn-warning" type="submit" value="Update Product">
</form>

@endsection