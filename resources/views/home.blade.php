@extends('layouts.app')

@section('title', 'HOME')

@section('content')
<h3>HOME</h3>
<div>
    <p>
        <a href="{{ url('/form01') }}">
            フォーム
        </a>
    </p>
</div>
@endsection