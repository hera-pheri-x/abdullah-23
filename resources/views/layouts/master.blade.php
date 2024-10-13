<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
{{-- --------------------header---------------- --}}
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Header</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

{{-- --------------------nav bar---------------- --}}

<div class="container-fluid p-5 bg-info text-white text-center">
    <h1>nav bar</h1>
    <a href="{{route('dashboard')}}">Home</a>
    <a href="{{url('products')}}">All Product</a>
    <a href="{{url('products/create')}}">Add Product</a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="{{route('logout')}}"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </a>
    </form>
  </div>
    
  
@yield('content')

  
<div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>Footer</h1>
    <p>Resize this responsive page to see the effect!</p> 
  </div>


  
</body>
</html>