@extends('layouts.app')

@section('title-block')Главная @endsection('title-block')

@section('content')

    <h1>Главная страница</h1>

@endsection('content')

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection('aside')
