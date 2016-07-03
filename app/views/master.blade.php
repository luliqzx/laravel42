<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cats DB</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
	<div class="container">  
		<div class="page-header">    
			<div class="text-right">      
				@if(Auth::check())        
				Logged in as         <strong>{{{Auth::user()->username}}}</strong>        {{link_to('logout', 'Log Out')}}     
				@else        
				{{link_to('login', 'Log In')}}      
				@endif    
			</div>  
			@yield('header')  
		</div>  @if(Session::has('message'))    
		<div class="alert alert-success">     
			{{Session::get('message')}}    
		</div> 
		@endif
		@if(Session::has('error'))   
		<div class="alert alert-warning">     
			{{Session::get('error')}}   
		</div>  
		@endif 
		@yield('content') 
	</div>
</body>
</html>