@extends('master')

@section('content')
<h1>Edit Profile</h1>




	{!! Form::model($user, ['method' => 'PATCH', 'url' => 'home/profile' . $user->user_id]) !!}
		<div class="form-group">
			{!! Form::label('state', 'State:') !!}
			{!! Form::text('state', null, ['class' => 'form-control']) !!}

		</div>
		<div class="form-group">
			{!! Form::label('city', 'City:') !!}
			{!! Form::text('city', null, ['class' => 'form-control']) !!}

		</div>

		<div class="form-group">
        			{!! Form::label('area', 'Area:') !!}
        			{!! Form::text('area', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">
        			{!! Form::label('street', 'Street:') !!}
        			{!! Form::text('street', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">
        			{!! Form::label('door', 'Door:') !!}
        			{!! Form::text('door', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">
        			{!! Form::label('pincode', 'Pincode:') !!}
        			{!! Form::text('pincode', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">
        			{!! Form::label('landmark_1', 'Landmark_1:') !!}
        			{!! Form::text('landmark_1', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">
                			{!! Form::label('landmark_2', 'Landmark_2:') !!}
                			{!! Form::text('landmark_2', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">
                			{!! Form::label('phone', 'Phone:') !!}
                			{!! Form::text('phone', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">
                     {!! Form::label('gender', 'Gender:') !!}<br>
                     {!! Form::radio('gender', 'male', array('class'=>'user-rad')) !!}Male<br>
                     {!! Form::radio('gender', 'female', array('class'=>'user-rad')) !!}Female

        </div>

        <div class="form-group">
                        			{!! Form::label('currency', 'Currency:') !!}
                        			{!! Form::text('currency', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">
                        			{!! Form::label('tax_code', 'Tax Code:') !!}
                        			{!! Form::text('tax_code', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">
                        			{!! Form::label('tax_rate', 'Tax Rate:') !!}
                        			{!! Form::text('tax_rate', null, ['class' => 'form-control']) !!}

        </div>

		{{--<div class="form-group">--}}
			{{--{!! Form::label('published_at', 'Published on:') !!}--}}
			{{--{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}--}}

		{{--</div>--}}

		{{--<div class="form-group">--}}
                			{{--{!! Form::label('tag_list', 'Tags:') !!}--}}
                			{{--{!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control', 'multiple']) !!}--}}

        {{--</div>--}}

		<div class="form-group">

			{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

		</div>

	{!! Form::close() !!}




@endsection
