@extends('layouts.app')
@section('title', '体験談詳細')
@section('content')
<div id="app" class="container-fluid p-0">
  <!-- ヘッダー -->
  <div class=" sticky-top  p-0" style="">
    @component('components.nav')
    @endcomponent
  </div>

  <div class="row p-0 m-0">
    <!-- 上部左側文章 -->
    <div class="col-4 my-4 mx-5 p-0 bg-light">
      <div class="mt-5">
      <!-- この辺はUlとli使うのはどうでしょう？ -->
        <div class="mt-1 mb-5">
          <h1>{{$experience->college_name." ".$experience->undergraduate}}</h1>
        </div>
        <div class="mt-4 mb-5">
          <h2>{{'家賃：'.$experience->rent}}</h2>
        </div>
        <div class="mt-1">
          <h3>{{'性別'.$experience->sex}}</h3>
        </div>
      </div>
    </div>
    <!-- 上部画像 -->
    <div class="col-5 my-4 mx-5 p-0 shadow">
      <img src="{{asset('img/college/'.$experience->image)}}" alt=""
      class="img-fluid">
    </div>
  </div>
  <!-- 下部左側MAP -->

  <!-- 下部右側文章 -->
  
  <!-- 物件検索ボタン -->

  <div class=" p-0" style="">
    @component('components.footer')
    @endcomponent
  </div>
</div>
<span id="js-getVariable" data-name="{{$experience->where_live}}"></span>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
const name = '{{$experience->where_live}}';
var address = name;
function initMap() {
  var target = document.getElementById('map'); //マップを表示する要素を指定
  // var address = '東京都新宿区新宿３丁目３８−１'; //住所を指定
  var geocoder = new google.maps.Geocoder();
  geocoder.geocode({ address: address }, function(results, status){
    if (status === 'OK' && results[0]){
      console.log(results[0].geometry.location);
      var map = new google.maps.Map(target, {
        center: results[0].geometry.location,
        zoom: 18
      });
      var marker = new google.maps.Marker({
        position: results[0].geometry.location,
        map: map,
        animation: google.maps.Animation.DROP
      });
    }else{
      //住所が存在しない場合の処理
      alert('住所が正しくないか存在しません。');
      target.style.display='none';
    }
  });
}
</script>
<!-- google map api -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyAtJ17qJ1koXoUkMddqDSRudM_ogj7yrg4&callback=initMap"></script>
@endsection
