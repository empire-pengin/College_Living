@extends('layouts.app')

@section('content')
<div id="app" class="container-fluid">
  <!-- ヘッダー -->
  <div class="row sticky-top" style="">
    @component('components.nav')
    @endcomponent
  </div>
  <!--  物件検索バー -->
  <div class="row" style="">
    <div class="col-12 p-0 ">
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
    <div class="row  d-flex justify-content-center pl-3">
      <!-- 物件表示 -->
      @foreach($item as $items)
      <div class="col-3 mx-3 my-1 p-0">
      <a href="{{ asset('items/'.$items->id)}}" style="text-decoration:none;">
        <div class="">
          <img src="{{asset('img/item/naisou/'.$items->item_image1)}}"
          class="img-fluid" alt="" style="">
          <div class="text-dark pt-2  " style="">
      <h6 class="mb-0 border-bottom border-danger pb-2 pl-0">
        <span class="text-white bg-danger rounded p-1">Rent</span>
        {{$items->name}}
      </h6>
          <div style="font-size:12px;">
        <ul style="list-style:none; " 
        class="pl-1 py-2 text-dark">
          <li>
            {{'山手線「'.$items->station.'」'}}/{{'家賃'.$items->rent.'円'}}/{{'築'.$items->age.'年'}}
          </li>
        </ul>
      </div>
      </div>
        </div>
      </a>
      </div>
      @endforeach
      <div class="my-5 col-5 d-flex justify-content-center " style="font-size:16px;">
        {{ $item->links() }}
      </div>
    </div>
  <!-- footer -->
  @component('components.footer')
  @endcomponent
</div>
@endsection
