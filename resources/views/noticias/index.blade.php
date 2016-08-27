@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Noticias</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('noticias.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($noticias->isEmpty())
                <div class="well text-center">No Noticias found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Title</th>
			<th>Text</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($noticias as $noticia)
                        <tr>
                            <td>{!! $noticia->title !!}</td>
					<td>{!! $noticia->text !!}</td>
                            <td>
                                <a href="{!! route('noticias.edit', [$noticia->id]) !!}"><i class="glyphicon glyphicon-edit">Update</i></a>
                                <a href="{!! route('noticias.delete', [$noticia->id]) !!}" onclick="return confirm('Are you sure wants to delete this Noticia?')"><i class="glyphicon glyphicon-remove">Delete</i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection