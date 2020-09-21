@extends('layouts.app')

@section('title-page')
    Главная страница
@endsection

@section('content')
    <h1>Главная страница</h1>
    <!-- Комментарий -->
    <p>Первый абзац.</p>
    <p>Второй абзац.</p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст на главной</p>
@endsection
