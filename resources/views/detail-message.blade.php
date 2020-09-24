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
        </div>
@endsection

