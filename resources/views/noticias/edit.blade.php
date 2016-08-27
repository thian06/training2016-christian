@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($noticia, ['route' => ['noticias.update', $noticia->id], 'method' => 'patch']) !!}

        @include('noticias.fields')

    {!! Form::close() !!}
</div>
@endsection
