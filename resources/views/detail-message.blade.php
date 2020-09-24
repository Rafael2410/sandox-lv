@extends('layouts.app')

@section('title-page')
    {{ $data->subject }}
@endsection

@section('content')
        <div class="alert alert-info">
            <h3>{{ $data->subject }}</h3>
            <p>{{ $data->name }}</p>
            <p>{{ $data->email }}</p>
            <p>{{ $data->message }}</p>
            <p><small>{{ $data->created_at }}</small></p>
            <a href="{{ route('contact-data-update', $data->id) }}"><button class="btn btn-primary">Редактировать</button></a>
            <a href="{{ route('contact-data-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>
        </div>
@endsection

