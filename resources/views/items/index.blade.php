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
        

        <!--メインコンテンツ  -->
        <div class="row bg-light d-flex justify-content-center pl-3">
          <!-- 物件表示 -->
          @foreach($item as $items)
          <div class="col-md-3 m-1 p-0 shadow">
            <div class="">
              <img src="{{asset('img/item/naisou/'.$items->item_image1)}}"
              class="img-fluid" alt="" style="">
              <div class="bg-white" style=" ">
              <h5 class="mb-0">{{$items->name}}</h5>
              <div>
                <span>{{'家賃'.$items->rent.'円'}}</span>
                <span>{{'山手線「'.$items->station.'」'}}</span>
              </div>
              <div>
                <span>{{'築'.$items->age.'年'}}</span>
                <span>{{'間取り'.$items->construction}}</span>
              </div>
              </div>
            </div>
          </div>
          @endforeach
          <div class="my-5 col-3 d-flex justify-content-center " style="font-size:16px;">
            {{ $item->links() }}
          </div>
        </div>
      </div>
      @component('components.footer')
      @endcomponent
@endsection