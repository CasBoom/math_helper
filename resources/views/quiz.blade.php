@extends('layout.main')
@section('title')
Quiz
@endsection

@section('content')
    <form>
        <h2>Question {{Route::input('question')}}</h2>
        Question:<br>
        <img alt="question">
        @csrf
        Answers:
        <input type="radio" name="answer"> <img src="answer1">
        <input type="submit" value="next">
    </form>
@endsection
