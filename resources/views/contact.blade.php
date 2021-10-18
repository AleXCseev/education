@extends('layouts.app')

@section('title-block')Contact  @endsection('title-block')

@section('content')

    <h1>Contact</h1>

    <form action="{{ route('contact-form') }}" method="post">

        @csrf

        <div class="form-group mb-2">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="form-group mb-2">
            <label for="email">Email</label>
            <input type="mail" name="email" placeholder="Введите email" id="email" class="form-control">
        </div>

        <div class="form-group mb-2">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
        </div>

        <div class="form-group mb-2">
            <label for="message">Сообщение</label>
            <textarea type="text" name="message" placeholder="Введите сообщение" id="message" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Отправить</button>
    </form>

@endsection('content')
