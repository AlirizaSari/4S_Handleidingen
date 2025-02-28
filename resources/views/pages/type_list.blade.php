@extends('layouts.default')

@section('breadcrumb')
	<li><a href="/{{ $brand->id }}/{{ $brand->name_url_encoded }}/" alt="Manuals for '{{$brand->name}}'" title="Manuals for '{{$brand->name}}'">{{ $brand->name }}</a></li>
@stop

@section('content')

<h1>{{ $brand->name }}</h1>

<p>{{ __('introduction_texts.type_list', ['brand'=>$brand->name]) }}</p>

    <div class="container">
		<ul class="grid-container">
			@foreach($types as $type)
				<li>
					<a href="/{{ $brand->id }}/{{ $brand->name_url_encoded }}/{{ $type->id }}/{{ $type->name_url_encoded }}/">{{ $type->name }}</a>
				</li>
			@endforeach
		</ul>
	</div>

@stop