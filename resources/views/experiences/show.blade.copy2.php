@extends('layouts.app')
@section('title', '体験談詳細')
@section('content')
<div id="app" class="container-fluid p-0">
  <!-- ヘッダー -->
  <div class=" sticky-top  p-0" style="">
    @component('components.nav')
    @endcomponent
  </div>

  <div class="row justify-content-center mt-5 m-0 p-0 ">
      <!-- 上部左側文章 -->
      <div class="col-4 my-4 ml-5 p-0 bd-highlight align-self-center">
        <div class="mt-5">
        <!-- この辺はUlとli使うのはどうでしょう？ -->
          <div class="mt-1 mb-5">
            <h1>{{$experience->college_name." ".$experience->undergraduate}}</h1>
          </div>
          <div class="mt-5 mb-5">
            <h2>{{'家賃：'.$experience->rent}}</h2>
          </div>
          <div class="mt-1">
            <h3>{{'性別：'.$experience->sex}}</h3>
          </div>
        </div>
      </div>
      <!-- 上部画像 -->
      <div class="col-7 ml-5 my-4 p-0">
        <img class="w-100" src="{{asset('img/college/'.$experience->image)}}"  style="height: 500px" alt="">
      </div>
  </div>
  <!-- 下部左側MAP -->
  <div class="row justify-content-center p-0 m-0">
    <div class="col-5 mt-4 mr-5 p-0 flex-fill bd-highlight">
      <div id="map" style="width: 600px; height: 500px;"></div>
    </div>
    <!-- 下部右側文章 -->
    <div class="col-5 my-4 mx-5 p-0 flex-fill bd-highlight">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <!-- 体験談1 -->
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab"
          href="#home" role="tab" aria-controls="home" aria-selected="true">
          体験談
          </a>
        </li>
        <!-- 体験談2 -->
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
            体験談2
          </a>
        </li>
      </ul>
      <div class="tab-content " id="myTabContent">
        <!-- 体験談1 -->
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="mt-5">
            <div class="mt-1 mb-5">
              <div class="col-12">
                <h3 class="mb-3 font-weight-bold">仕送り額</h3>
                <p>{{$experience->remittance.'円'}}</p>
              </div>
            </div>
            <div class="mt-4 mb-5">
              <div class="col-12">
                <h3 class="mb-3 font-weight-bold">住んでいる場所</h3>
                <p>{{$experience->where_live}}</p>
              </div>
            </div>
            <div class="mb-5">
              <div class="col-12">
                <h3 class="mb-3 font-weight-bold">バイトやインターン</h3>
                <p>{{$experience->part}}</p>
              </div>
            </div>
            <div class="mb-5">
              <div class="col-12">
                <h3 class="mb-3 font-weight-bold">出身地</h3>
                <p>{{$experience->from}}</p>
              </div>
            </div>
          </div>
        </div>
        <!--体験談2 -->
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <div class="mt-5">
            <div class="col-12 mt-1 mb-5">
              <div class="col-12">
                <h3 class="mb-3 font-weight-bold">隣人トラブル</h3>
                <p>{{$experience->troble}}</p>
              </div>
            </div>
            <div class="col-12 mt-4 mb-5">
              <div class="col-12">
                <h3 class="mb-3 font-weight-bold">友人関係</h3>
                <p>{{$experience->frend}}</p>
              </div>
            </div>
            <div class="col-12 mt-4 mb-5">
              <div class="col-12">
                <h3 class="mb-3 font-weight-bold">一人暮らしで困ったこと</h3>
                <p>{{$experience->accident}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 物件検索ボタン -->
  <div class="col-12  py-5  d-flex align-items-end justify-content-center mt-3 mb-3">
    <div class="p-4 bg-success" style="opacity: 0.9;">
      <form action="{{asset('items/serch')}}"
      class="form-inline " method="post">
      {{ csrf_field()}}
      {{method_field('get')}}
      <div class="form-group">
        <label>駅名：</label>
        <input type="text" class="form-control " placeholder="検索したい駅名を入力してください" name="college_name">
      </div>
      <button type="submit" class="btn btn-primary ">駅名を検索</button>
      </form>
    </div>
  </div>
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