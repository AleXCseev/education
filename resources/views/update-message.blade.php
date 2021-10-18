@extends('layouts.app')

@section('title-block')Редактировать сообщение @endsection('title-block')

@section('content')

    <h1>Редактировать сообщение</h1>

    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">

        @csrf

        <div class="form-group mb-2">
            <label for="name">Введите имя</label>
            <input type="text" name="name" value="{{ $data->name }}" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="form-group mb-2">
            <label for="email">Email</label>
            <input type="mail" name="email" value="{{ $data->email }}" placeholder="Введите email" id="email" class="form-control">
        </div>

        <div class="form-group mb-2">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Тема сообщения" id="subject" class="form-control">
        </div>

        <div class="form-group mb-2">
            <label for="message">Сообщение</label>
            <textarea type="text" name="message" placeholder="Введите сообщение" id="message" class="form-control">{{ $data->message }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Редактировать</button>
    </form>

@endsection('content')
