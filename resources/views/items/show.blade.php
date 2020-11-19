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
            <!-- 検索ボタン -->
            <div class="d-flex justify-content-center my-3">
              <form class="form-inline" action="{{asset('items/serch')}}" method="post">
                {{ csrf_field()}}
                {{method_field('get')}}
                <div class="form-group">
                  <label>駅名</label>
                  <input type="text" class="form-control " placeholder="検索したい駅名を入力してください" name="station">
                </div>
                <button type="submit" class="btn btn-primary ">検索</button>
              </form>
            </div>
          </div>
        </div>
        <!-- メインコンテンツ -->
        <div class="row">
            <!-- 画像スライド -->
            <div class="col-9">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">img
                        <!-- first-slide -->
                        <div class="carousel-item active">
                        <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" 
                        width="600" height="400" src="{{asset('img/item/naisou/'.$item->item_image1)}}" 
                        preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide">
                        </div>
                        <!-- second-slide -->
                        <div class="carousel-item">
                        <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" 
                        width="800" height="400" src="{{asset('img/item/gaikan/'.$item->item_image3)}}"
                        preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Second slide">
                        </div>
                        <!-- <div class="carousel-item">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Third slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"/><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>
                        </div> -->
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
            <div class="col-3 align-self-center">
            <!--  -->
            <h3>{{$item->name}}</h3>
            <h5>副題</h5>
            <p>物件説明</p>
            <button type="button" class="btn btn-outline-primary">問い合わせする</button>
            </div>
        </div>
        <div class="row my-5 d-flex bd-highlight">
            <!-- 物件詳細情報 -->
            <div class="col-6 flex-fill bd-highlight">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab"
                         href="#home" role="tab" aria-controls="home" aria-selected="true">
                          概要
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                          間取り
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                          詳細
                        </a>
                    </li>
                </ul>
                <div class="tab-content " id="myTabContent">
                    <!-- 概要 -->
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <table class="table table-bordered">
                        
                        <tbody>
                          <tr>
                            <th scope="row">家賃</th>
                            <td>{{$item->rent}}</td>
                            
                          </tr>
                          <tr>
                            <th scope="row">物件名</th>
                            <td>{{$item->name}}</td>
                            
                          </tr>
                          <tr>
                            <th scope="row">最寄り駅</th>
                            <td>{{$item->station}}</td>
                          </tr>
                          <tr>
                            <th scope="row">建物種別</th>
                            <td>{{$item->status}}</td>
                          </tr>
                          <tr>
                            <th scope="row">築年数</th>
                            <td>{{$item->age.'年'}}</td>
                          </tr>

                          <tr>
                            <th scope="row">間取り</th>
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
                            <th scope="row">初期費用</th>
                            <td>{{$item->first_cost}}</td>
                            
                          </tr>
                          <tr>
                            <th scope="row">損保</th>
                            <td>{{$item->insurance}}</td>
                            
                          </tr>
                          <tr>
                            <th scope="row">取引形態</th>
                            <td>{{$item->transaction}}</td>
                          </tr>
                          <tr>
                            <th scope="row">ほか初期費用</th>
                            <td>{{$item->age.'年'}}</td>
                          </tr>
                          <tr>
                            <th scope="row">間取り</th>
                            <td>{{$item->construction}}</td>
                          </tr>
                          <tr>
                            <th scope="row">備考</th>
                            <td>{{$item->remarks}}</td>
                          </tr>
                          <tr>
                            <th scope="row">記載日</th>
                            <td>{{$item->created_at}}</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
            <!-- googlemap -->
            <div class="col-6 flex-fill bd-highlight">
            <div id="map" style="height: 100%; width: 100%;"></div>
            </div>
        </div>
        <!-- メインコンテンツ終わり -->
        </div>
      </div>
      @component('components.footer')
      @endcomponent
      <span id="js-getVariable" data-name="{{ $item->station }}"></span>
      <!-- jqueryの読み込む -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADy2Z_VYXNySO-uJSwOWRvs19LrJ3se9U"
        ></script>
        <script src="https://maps.googleapis.com/maps/api/geocode/json?address="
        ></script>
        <script type="text/javascript">
        const adress = $('#js-getVariable').data();
        //地名から座標を取得する

        //指定の場所にピンを指す
      var map = new google.maps.Map(document.getElementById('map'), {

        center: {
          lat: -34.397, //緯度を設定
          lng: 150.644 //経度を設定
        },
        zoom: 8 //地図のズームを設定
      });
    </script>
@endsection
