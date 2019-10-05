<h1>thêm thành viên</h1>

@if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>   {{$error}}</div>
     @endforeach
 @endif
<div class="meo">
	{{ Form::open(array('action' => 'PostsController@store', 'method' => 'post')) }}
	{{ Form::text('title') }}
    {{ Form::text('body') }}

    {{ Form::submit('Click Me!') }}
{{ Form::close() }}
</div>
    