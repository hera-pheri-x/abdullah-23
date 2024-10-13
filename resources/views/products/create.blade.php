@extends('layouts.master')
@section('content')



<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <label for="product_name">Product Name:</label><br>
    <input type="text" name="product_name" id="" class="form-control" placeholder="Enter product name">
    <label for="product_img">product photo</label>
    <input type="file" name="product_img" id="">

    <input class="btn btn-warning" type="submit" value="Add Product">
</form>



@endsection