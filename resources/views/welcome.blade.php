@extends('master')

@section('content')

    <nav id="bs-navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav navbar-right">
          @if (Auth::guest())
            <li><a href="{{ url('/auth/login') }}">Login</a></li>
            <li><a href="{{ url('/auth/register') }}">Sign Up</a></li>
          @endif
          </ul>
        </nav>

@endsection
