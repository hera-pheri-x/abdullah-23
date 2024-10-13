@extends('layouts.master')
@section('content')


<div class="container mt-3">
  <h2>Basic Table</h2>
         
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>PRODUCT NAME</th>
        <th>PRODUCT img</th>
        <th>Product price</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
       
      @foreach ($products as $item)      

      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->product_name}}</td>
        <td><img src="{{asset('upload/productphoto/'.$item->product_img)}}" width="100"></td>
        <td>
          <a href="{{ route('products.edit', $item->id) }}" class="btn btn-primary">Edit</a>
          <form action="{{ route('products.delete', $item->id) }}" method="post">
            @csrf 
            @method('DELETE')
          <button type='submit' class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
      
      
    </tbody>
  </table>
</div>







@endsection