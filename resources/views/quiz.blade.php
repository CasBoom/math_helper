@extends('layout.main')
@section('title')
Quiz
@endsection

@section('content')
    <form>
        <h2>Question {{Route::input('question')}}</h2>
        @csrf
        <input type="hidden" value="number">
        <input type="hidden" value="answer">
        Question:<br>
        <img alt="question" src="{{@url('img/differentials/14a.png')}}"><br>
        Answers:<br>
        <input type="radio" name="answer"> <img alt="answer1" src="{{@url('img/differentials/14b.png')}}">
        <input type="radio" name="answer"> <img alt="answer2" src="{{@url('img/differentials/1b.png')}}"><br>
        <input type="radio" name="answer"> <img alt="answer3" src="{{@url('img/differentials/15b.png')}}">
        <input type="radio" name="answer"> <img alt="answer4" src="{{@url('img/differentials/12b.png')}}"><br><br>
        <input type="submit" value="next">
    </form>
@endsection
