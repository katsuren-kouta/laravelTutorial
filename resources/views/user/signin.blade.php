@extends('layouts.app')

@section('title', 'ログイン')

@section('container')
<div class="signup-form">
    <p>{{$message}}</p>

    @isset($email)
    <p>{{$email}}</p>
    @endisset

    @isset($password)
    <p>{{$password}}</p>
    @endisset

    <form action="{{route('signin')}}" method="post">
        @csrf
        <div class="form-row">
            <label class="form-label">メールアドレス</label>
            <input type="email" name="email" class="form-input">
        </div>
        <div class="form-row">
            <label class="form-label">パスワード</label>
            <input type="password" name="password" class="form-input">
        </div>
        <button type="submit">ログイン</button>
    </form>
</div>
@endsection