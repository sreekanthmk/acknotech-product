@extends('master')

@section('content')
	<title>Guided tree</title>

	{{--<link href="{{ asset('/css/app.css') }}" rel="stylesheet">--}}

	<!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Guidedtree</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Land Management<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Add a lLand</a></li>
                    <li><a href="#">Form a Project</a></li>

                  </ul>
                </li>

                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Crop Management<span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#">Tasks</a></li>
                                    <li><a href="#">Crop Production</a></li>
                                    <li><a href="#">Add Crop Production</a></li>

                                  </ul>
                </li>

                <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Finance<span class="caret"></span></a>
                                                  <ul class="dropdown-menu">
                                                    <li><a href="#">Sales</a></li>
                                                    <li><a href="#">Expenses</a></li>
                                                    <li><a href="#">Investments</a></li>
                                                    <li><a href="#">Loans</a></li>
                                                    <li><a href="#">Transactions</a></li>

                                                  </ul>
                </li>

                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resources<span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#">People</a></li>
                                    <li><a href="#">Mechanization</a></li>
                                    <li><a href="#">Fields</a></li>
                                    <li><a href="#">Inventory</a></li>
                                    <li><a href="#">Manage Items</a></li>
                                    <li><a href="#">Documents</a></li>
                                    <li><a href="#">Weather</a></li>
                                    <li><a href="#">Gov. Schemes</a></li>
                                    <li><a href="#">Subsidies</a></li>
                                    <li><a href="#">Insurance Schemes</a></li>
                                  </ul>
                </li>

                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Analysis<span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Reports</a></li>

                                  </ul>
                                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">

                <li><a href="#"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></a></li>


                 <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-user" aria-hidden="true"><span class="caret"></span></span></a>
                  <ul class="dropdown-menu">
                   <li><a href="{{ url('home/profile') }}">Edit Profile</a></li>
                   <li><a href="{{ url('home/subscriptions') }}">My Subscriptions</a></li>
                   <li><a href="{{ url('auth/logout') }}">Log out</a></li>
                  </ul> </li>


              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>

        @if(isset($action))
            @if($action = 'signup')


            @include('test')
            @endif
        @endif





@endsection
