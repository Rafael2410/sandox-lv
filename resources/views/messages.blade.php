@extends('layouts.app')

@section('title-page')
    Сообщения из Базы данных
@endsection

@section('content')
    <h1>Сообщения</h1>
    @foreach( $data as $item )
        <div class="alert alert-info">
            <h3>{{ $item->subject }}</h3>
            <p>{{ $item->email }}</p>
            <p><small>{{ $item->created_at }}</small></p>
            <a href="#"><button class="btn btn-warning">Подробнее</button></a>
        </div>
    @endforeach
@endsection

