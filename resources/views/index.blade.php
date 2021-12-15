@extends('layouts.app')

@section('title', '入力フォーム')

@section('content')
<h3>ユーザー情報</h3>
<div>
    <form>
        <div class="table">
            <div class="table_line">
                <label>
                    年齢
                </label>
                <!--文字列のクリックで選択できる-->
                <label>
                    <input type="radio" name="age" value='23'>23
                </label>
                <!--文字列のクリックで選択できる-->
                <label>
                    <input type="radio" name="age" value='24'>24
                </label>
                <!--文字列のクリックで選択できる-->
                <label>
                    <input type="radio" name="age" value='25'>25
                </label>
            </div>
            <div class="table_line">
                <label>
                    性別
                </label>
                <!--文字列のクリックで選択できる-->
                <label>
                    <input type="radio" name="sex" value='1'>男
                </label>
                <!--文字列のクリックで選択できる-->
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
