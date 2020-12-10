@extends('layouts.app')

@section('content')
<div id="app" class="container-fluid">
  <!-- ヘッダー -->
  <div class="row sticky-top" style="">
    @component('components.nav')
    @endcomponent
    <!-- 検索バー -->
    <div class="row" style="">
      <div class="col-12 p-0 ">
        <nav class="navbar navbar-light bg-light py-2 mx-0 px-0">
          <div class="container">
            <a class="navbar-brand my-0 navbar_head" href="#" style="font-weight:bold;">物件を検索する</a>
            <button type="button " class="navbar-toggler" data-toggle="collapse" data-target="#navbarList" aria-controls="navbarList" aria-expanded="false" aria-label="ナビゲーションの切替">
              <i class="text-danger fas fa-angle-down"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarList">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                  <div class="col-12 d-flex justify-content-center ">
                    <div class="col py-3" style="opacity: 0.9;">
                      <form action="{{asset('items/serch')}}" class="col-12"
                      class="form-inline " method="post">
                      {{ csrf_field()}}
                      {{method_field('get')}}
                      <div class="form-group">
                        <input type="text" class="form-control " placeholder="駅名" name="station">
                      </div>
                      <button type="submit" class="btn btn-outline-danger btn-block">物件を検索</button>
                    </form>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
<!-- メインコンテンツ -->
<div class="row">
  <!-- 画像スライド -->
  <div class="col-md-7 d-flex justify-content-center">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">img
        <!-- first-slide -->
        <div class="carousel-item active">
          <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100"
          height="400" src="{{asset('img/item/naisou/'.$item->item_image1)}}"
          preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide">
        </div>
        <!-- second-slide -->
        <div class="carousel-item">
          <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100"
          height="400" src="{{asset('img/item/gaikan/'.$item->item_image3)}}"
          preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Second slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!-- 物件情報 -->
  <div class="col-md-4 align-self-center pl-4">
    <!--  -->
    <h3 class="text-danger">{{$item->name}}</h3>
    <h5>物件のアピールポイント！</h5>
    <p style="font-size:12px;" class="text-secondary">駅からも大学にも近いので、非常に住みやすい物件です。</br>
      周辺施設にはスーパーやコンビニも徒歩5分で行けます。</br>
      また、非常に治安もよく夜はとても静かなので初めての一人暮らしでも安心です！
    </p>
    <a type="button" href="{{asset('mail')}}"
    class="btn btn-outline-danger btn-block ">問い合わせする</a>
  </div>
</div>

<!-- ページ下部 -->
<div class="row my-5 d-flex bd-highlight d-flex justify-content-center">
  <!-- 物件詳細情報 -->
  <div class="col-md-5 flex-fill bd-highlight" >
    <ul class="nav nav-tabs border-bottom border-danger"
    style="font-weight:bold;" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link text-dark active" id="home-tab" data-toggle="tab"
      href="#home" role="tab" aria-controls="home" aria-selected="true">
      基本情報
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" id="profile-tab"
    data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
    間取り
  </a>
</li>
<li class="nav-item">
  <a class="nav-link text-dark" id="contact-tab"
  data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
  詳細
</a>
</li>
</ul>
<div class="tab-content " id="myTabContent">
  <!-- 基本情報 -->
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <table class="table table-bordered ">
      <tbody>
        <tr>
          <th scope="row" style="color:#FF4500;">家賃</th>
          <td>{{ number_format($item->rent)}}円</td>
        </tr>
        <tr>
          <th scope="row" style="color:#FF4500;">物件名</th>
          <td>{{$item->name}}</td>
        </tr>
        <tr>
          <th scope="row" style="color:#FF4500;">最寄り駅</th>
          <td>{{$item->station}}</td>
        </tr>
        <tr>
          <th scope="row" style="color:#FF4500;">建物種別</th>
          <td>{{$item->status}}</td>
        </tr>
        <tr>
          <th scope="row" style="color:#FF4500;">築年数</th>
          <td>{{$item->age.'年'}}</td>
        </tr>
        <tr>
          <th scope="row" style="color:#FF4500;">間取り</th>
          <td>{{$item->construction}}</td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- 間取り中身 -->
  <div class="tab-pane fade border" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <img src="{{asset('img/item/madori/'.$item->item_image2)}}" alt="" class="h-100 w-100">
  </div>
  <!--物件詳細 -->
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <table class="table table-bordered">
      <tbody>
        <tr>
          <th scope="row" style="color:#FF4500;">初期費用</th>
          <td>{{$item->first_cost}}</td>

        </tr>
        <tr>
          <th scope="row" style="color:#FF4500;">損保</th>
          <td>{{$item->insurance}}</td>

        </tr>
        <tr>
          <th scope="row" style="color:#FF4500;">取引形態</th>
          <td>{{$item->transaction}}</td>
        </tr>
        <tr>
          <th scope="row" style="color:#FF4500;">ほか初期費用</th>
          <td>{{$item->age.'年'}}</td>
        </tr>
        <tr>
          <th scope="row" style="color:#FF4500;">間取り</th>
          <td>{{$item->construction}}</td>
        </tr>
        <tr>
          <th scope="row" style="color:#FF4500;">備考</th>
          <td>{{$item->remarks}}</td>
        </tr>
        <tr>
          <th scope="row" style="color:#FF4500;">記載日</th>
          <td>{{$item->created_at}}</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
<!-- googlemap -->
<div class="col-md-5 flex-fill bd-highlight">
  <div id="map" style=" height: 500px;" class=""></div>
</div>
</div>
<span></span>
<!-- メインコンテンツ終わり -->
</div>
</div>
@component('components.footer')
@endcomponent
<!-- <span id="js-getVariable" data-name="{{ $item->station }}"></span> -->
<span id="js-getVariable" data-name="{{ $item->station }}"></span>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script type="text/javascript">

// console.log();
const name = '{{ $item->station }}';
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
