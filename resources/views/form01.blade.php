@extends('layouts.app')

@section('title', '入力フォーム')

@section('header')
<div>
    <p>
        <a href="{{ url('/') }}">
            HOMEに戻る
        </a>
    </p>
</div>

@section('content')
<h3>ユーザー情報</h3>
<div>
    <form>
        @csrf
        <div class="table">
            <div class="table_line">
                <label>
                    年齢
                </label>
                <label>
                    <input type="radio" name="age" value='23'>23
                </label>
                <label>
                    <input type="radio" name="age" value='24'>24
                </label>
                <label>
                    <input type="radio" name="age" value='25'>25
                </label>
            </div>
            <div class="table_line">
                <label>
                    性別
                </label>
                <label>
                    <input type="radio" name="sex" value='1'>男
                </label>
                <label>
                    <input type="radio" name="sex" value='2'>女
                </label>
            </div>
            <br>
            <input type="submit" value="送信">
        </div>
    </form>
</div>
@endsection