@extends('layouts.app')
@section('title', '体験談詳細')
@section('content')
<div id="app" class="container-fluid p-0">
  <!-- ヘッダー -->
  <div class=" sticky-top  p-0" style="">
    @component('components.nav')
    @endcomponent
  </div>
  <!-- 画面上部↓ -->
  <div class="row m-0 p-0">
    <!-- タイトル -->
    <div class="offset-1 col-10 text-danger my-5">
      <h1>{{$experience->college_name}}</h1>
    </div>
    <!-- 大学の画像表示 -->
    <div class="offset-1 col-7 ">
      <img class="w-100" src="{{asset('img/college/'.$experience->image)}}"  style="height: 500px" alt="">
    </div>
    <!-- 大学概要 -->
    <div class="col-3 border-top border-danger">
      <ul class="pl-0" style="list-style:none;">
        <li class="">Item #1</li>
        <li class="">Item #2</li>
        <li class="">Item #3</li>
      </ul>
      <div class="mt-3 mb-3">
        <h5>{{'学部：'.$experience->undergraduate}}</h5>
      </div>
      <div class="mt-3 mb-3">
        <h5>{{'家賃：'.$experience->rent}}</h5>
      </div>
      <div class="mt-3 mb-3">
        <h5>{{'性別：'.$experience->sex}}</h5>
      </div>
      <div class="border-bottom border-danger p-0">
        <h5>{{'住んでいる場所：'.$experience->where_live}}</h5>
      </div>
    </div>
    <div class="offset-1 col-10 my-5">
      <p>{{$experience->college_name.'大学の体験談へようこそ、下に詳細な記事があるから見ていってね！'}}</p>
    </div>
  </div>
  <!-- 画面上部↑ -->
  <!-- 画面中部↓ -->
  <div class="row p-0 m-0">
    <div class="offset-1 col-5 border-right bg-light">
      <!-- 見出し -->
      <div class="border-bottom border-danger text-danger">
        <h1>体験談詳細</h1>
      </div>
      <!-- 体験談詳細中身 -->
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th scope="row">仕送り額</th>
            <td>{{$experience->remittance}}</td>
          </tr>
          <tr>
            <th scope="row">バイトやインターン</th>
            <td>{{$experience->part}}</td>
          </tr>
          <tr>
            <th scope="row">出身地</th>
            <td>{{$experience->from}}</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-5 bg-light">
      <!-- 見出し -->
      <div class="border-bottom border-danger text-danger">
        <h1>体験談感想</h1>
      </div>
      <!-- 体験談感想中身 -->
      <div class="">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <th scope="row">隣人トラブル</th>
              <td>{{$experience->troble}}</td>
            </tr>
            <tr>
              <th scope="row">友人関係</th>
              <td>{{$experience->frend}}</td>
            </tr>
            <tr>
              <th scope="row">一人暮らしで困ったこと</th>
              <td>{{$experience->accident}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- 画面中部↑ -->

  <!--↓画面下部↓ -->
  <div class="row p-0 m-0 d-flex justify-content-center">
    <div class=" col-12  text-danger my-5">
      <h1 class="text-center ">おススメ体験談</h1>
    </div class="">
    @for($i=0;$i<=3;$i++)
    <div class="col-md-5 m-1 d-flex bg-secondary">
      <img style="height:200px; width:150px;" src="{{asset('img/college/'.$all[$i]->image)}}" alt="">
      <div class="" style="">
        <h5 class="">{{$all[$i]->troble}}</h5>
        <h5>{{$all[$i]->frend}}</h5>
        <h5>{{$all[$i]->accident}}</h5>
        <ul class="pl-0" style="list-style:none;">
          <li class="">Item #1</li>
          <li class="">Item #2</li>
          <li class="">Item #3</li>
        </ul>
      </div>
    </div>
    @endfor
  </div>
  <!-- 検索バー -->
  <div class="row my-5 col-6 offset-3" style="">
    <div class="col-12 p-0 ">
      <!-- 検索ボタン -->
      <div class="d-flex justify-content-center my-3">
        <form class="form-inline justify-content-center" action="{{asset('items/serch')}}" method="post">
          {{ csrf_field()}}
          {{method_field('get')}}
          <div class="form-group">
            <label>駅名</label>
            <input type="text" class="form-control " placeholder="駅名入力" name="station">
          </div>
          <button type="submit" class="btn btn-primary ">検索</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ↑画面下部 -->
<!-- フッター -->
<div class="row p-0 m-0" style="">
  @component('components.footer')
  @endcomponent
</div>
</div>
@endsection
