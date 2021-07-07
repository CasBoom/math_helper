@extends('layout.main')
@section('title')
Dashboard
@endsection

@section('content')
    <form method="/create_quiz" action="post">
        <h2>Calculus II trainer</h2>
        @csrf
        <input type="hidden" value="{{hash('ripemd160',now() . rand()) }}" name="id">
        Name: <input type="text" name="name"><br>
        <input type="submit" value="Start">
    </form>
@endsection
