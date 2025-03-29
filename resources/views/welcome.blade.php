@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
    <img src="/img/banner.jpg" alt="banner" />
    <h1>teste</h1>
    @if ($nome == 'Marcos')
        <p>o nome é {{ $nome }} e a idade é {{ $idade }} anos e trabalha com {{ $area }}</p>
    @else
        <p>O nome não é {{ $nome }}</p>
    @endif
    @for ($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }}</p>

        @if ($arr[$i] == 'Pedro')
            <p>Paulo</p>
        @endif
    @endfor

    @foreach ($nomes as $nome)
        <p>{{ $loop->index }}</p>
        <p>{{ $nome }}</p>
    @endforeach
@endsection
