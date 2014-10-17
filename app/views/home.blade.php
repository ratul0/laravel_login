<h1>Coming Soon</h1>
@if(Auth::check())
	<a href="{{ URL::route('logout') }}">Logout</a>
@else
	<a href="{{ URL::route('login') }}">Login</a>
@endif
