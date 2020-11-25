@extends('layouts.app')

@section('content')

<!-- {{var_dump($experience)}} -->



<form method="POST" action="{{asset('experiences/store')}}" enctype="multipart/form-data">
    @csrf
    <!--大学名  -->
    <div class="form-group">
        <label for="exampleFormControlInput1">大学名</label>
        <input type="text" name="college_name">
    </div>
    
    <!-- 学部学科 -->
    <div class="form-group">
        <label for="exampleFormControlInput1">学部学科</label>
        <input type="text" name="undergraduate">
    </div>
    <!-- 仕送り額 -->
    <div class="form-group">
        <label for="exampleFormControlInput1">仕送り額</label>
        <input type="text" name="remittance">
    </div>
    <!-- 家賃 -->
    <div class="form-group">
        <label for="exampleFormControlInput1">家賃</label>
        <input type="text" name="rent">
    </div>
    <!-- 住んでいる場所 -->
    <div class="form-group">
        <label for="exampleFormControlInput1">住んでいる場所</label>
        <input type="text" name="where_live">
    </div>
    <!-- 性別 -->
    <div class="form-group">
        <label for="exampleFormControlInput1">性別</label>
        <input type="text" name="sex">
    </div>
    <!-- バイトやインターン -->
    <div class="form-group">
        <label for="exampleFormControlInput1">バイトやインターン</label>
        <input type="text" name="part">
    </div>
    <!-- 隣人トラブル -->
    <div class="form-group">
        <label for="exampleFormControlInput1">隣人トラブル</label>
        <input type="text" name="troble">
    </div>
    <!-- 友人関係 -->
    <div class="form-group">
        <label for="exampleFormControlInput1">友人関係</label>
        <input type="text" name="frend">
    </div>
    <!-- 出身地 -->
    <div class="form-group">
        <label for="exampleFormControlInput1">出身地</label>
        <input type="text" name="from">
    </div>
    <!-- 一人暮らしで困ったこと -->
    <div class="form-group">
        <label for="exampleFormControlInput1">一人暮らしで困ったこと</label>
        <input type="text" name="accident">
    </div>
    <!-- 画像 -->
    <span class="filelabel" title="ファイルを選択">
        <span id="selectednum">画像を選択</span>
     </span>
    <input type="file" style="" class="" id="" aria-describedby="" name="image">
    <button type="submit" class="btn btn-primary  float-right btn-sm m-2"
        style="font-weight:bold;">
        送信する
    </button>
</form>

@endsection