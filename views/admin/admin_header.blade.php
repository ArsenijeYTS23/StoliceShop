<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SpryStore E-commerce Category Bootstrap Responsive Website Template | Home </title>
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style-liberty.css')}}">
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- Template CSS -->

</head>
<body>


	<!-- Header -->
  <div class="container">
       <h1>Admin Panel</h1>
  <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
  Meni
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="{{url('admin/home')}}">Ubaci proizvod</a></li>
    <li><a href="{{url('admin/list_product')}}">Izmeni proizvod</a></li>
    <li><a href="{{url('admin/home_page')}}">Izmeni pocetnu stranu</a></li>
    <li><a href="{{url('admin/abouts')}}">Izmeni - o nama</a></li>
    <li role="separator" class="divider"></li>
    <li>		<a class="dropdown-item" href="{{ route('logout') }}"
    			 onclick="event.preventDefault();
    										 document.getElementById('logout-form').submit();">
    				{{ __('Logout') }}
    		</a>

    		<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    				@csrf
    		</form></li>
  </ul>
</div>
<script> $('.dropdown-toggle').dropdown() </script>
