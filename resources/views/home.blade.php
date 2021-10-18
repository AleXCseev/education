@extends('layouts.app')

@section('title-block')Главная @endsection('title-block')

@section('content')

    <h1>Главная страница</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi unde aut explicabo aliquid eius exercitationem tempore placeat possimus, illum libero tenetur velit fuga nam perferendis. Quas nemo perferendis recusandae repellendus!
    </p>

@endsection('content')

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection('aside')
