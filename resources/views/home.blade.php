@extends('layouts.app')

@section('title', 'HOME')

@section('content')
<h1>HOME</h1>
<div>
    <p>
        <label>リンク一覧</label>
        <br>
        <a href="{{ url('/form01') }}">
            フォーム
        </a>
    </p>
</div>
<div>
    <p>
        <label>別ウィンドウの表示検証</label>
        <br>
        <input type="button" value="googleを表示" onclick="openWindow()">
    </p>
</div>
@endsection