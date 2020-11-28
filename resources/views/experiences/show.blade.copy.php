@extends('layouts.app')
@section('title', '体験談詳細')
@section('content')
<div id="app" class="container-fluid p-0">
  <!-- ヘッダー -->
  <div class=" sticky-top  p-0" style="">
    @component('components.nav')
    @endcomponent
  </div>
  <div class="row justify-content-center">
    <div class="col-5 my-4 mx-5 p-0 bg-light">
      <div class="mt-5">
        <div class="mt-1 mb-5">
         <h1>{{$experience->college_name."".$experience->undergraduate}}</h1>
        </div>
        <div class="mt-4 mb-5">
          <h2>{{'家賃：'.$experience->rent}}</h2>
        </div>
        <div class="mt-1">
          <h3>{{'性別：'.$experience->sex}}</h3>
        </div>
      </div>
    </div>
    <div class="col-5 my-4 mx-5 p-0 shadow">
      <img src="{{asset('img/college/'.$experience->image)}}" alt="">
    </div>
  </div>
  <!-- googlemap -->
  <div class="row justify-content-center">
    <div class="col-5  my-4 mx-5 p-0 flex-fill bd-highlight">
      <div id="map" style="width: 600px; height: 500px;"></div>
    </div>
    <!-- 体験談1 -->
    <div class="col-5 my-4 mx-5 p-0 flex-fill bd-highlight">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab"
          href="#home" role="tab" aria-controls="home" aria-selected="true">
          体験談1
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
              <h3>{{'仕送り額：'.$experience->undergraduate}}</h3>
            </div>
            <div class="mt-4 mb-5">
              <h3>{{'住んでいる場所：'.$experience->where_live}}</h3>
            </div>
            <div class="mb-5">
              <h3>{{'バイトやインターン：'.$experience->part}}</h3>
            </div>
            <div class="mb-5">
              <h3>{{'出身地：'.$experience->from}}</h3>
            </div>
          </div>
          <!-- <table class="table table-bordered">
            <tbody>
              <tr>
                <th scope="row">家賃</th>
                <td>{{$experience->rent}}</td>
              </tr>
              <tr>
                <th scope="row">物件名</th>
                <td>{{$experience->rent}}</td>
              </tr>
              <tr>
                <th scope="row">最寄り駅</th>
                <td>{{$experience->rent}}</td>
              </tr>
              <tr>
                <th scope="row">建物種別</th>
                <td>{{$experience->rent}}</td>
              </tr>
              <tr>
                <th scope="row">築年数</th>
                <td>{{$experience->rent}}</td>
              </tr>
              <tr>
                <th scope="row">間取り</th>
                <td>{{$experience->rent}}</td>
              </tr>
            </tbody>
          </table> -->
        </div>
        <!--体験談2 -->
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <div class="mt-5">
            <div class="mt-1 mb-5">
              <h3>{{'隣人トラブル：'.$experience->troble}}</h3>
            </div>
            <div class="mt-4 mb-5">
              <h3>{{'友人関係：'.$experience->frend}}</h3>
            </div>
            <div class="mb-5">
              <div class="col-6">
                <h3>一人暮らしで困ったこと：</h3>
                <h3>{{$experience->accident}}</h3>
                <!-- <h3>{{'一人暮らしで困ったこと：'.$experience->accident}}</h3> -->
              </div>
            </div>
          </div>
          <!-- <table class="table table-bordered">
            <tbody>
              <tr>
                <th scope="row">初期費用</th>
                <td>{{$experience->rent}}</td>
              </tr>
              <tr>
                <th scope="row">損保</th>
                <td>{{$experience->rent}}</td>
              </tr>
              <tr>
                <th scope="row">取引形態</th>
                <td>{{$experience->rent}}</td>
              </tr>
              <tr>
                <th scope="row">ほか初期費用</th>
                <td>{{$experience->rent}}</td>
              </tr>
              <tr>
                <th scope="row">間取り</th>
                <td>{{$experience->rent}}</td>
              </tr>
              <tr>
                <th scope="row">備考</th>
                <td>{{$experience->rent}}</td>
              </tr>
              <tr>
                <th scope="row">記載日</th>
              <td>{{$experience->rent}}</td>
              </tr>
            </tbody>
          </table> -->
        </div>
      </div>
    </div>
  </div>
  <div class="col-12  py-5  d-flex align-items-end justify-content-center mt-3 mb-3">
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
  <div class=" p-0" style="">
      @component('components.footer')
      @endcomponent
  </div>
</div>

<span id="js-getVariable" data-name="{{$experience->where_live}}"></span>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script type="text/javascript">

// console.log();
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