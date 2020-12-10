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
                    <!-- ヘッダー物件検索 -->
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
</div>

<div class="col-10 offset-1">
  @if(!empty($message))
  <div class="alert alert-danger" role="alert">
    {{ $message}}
  </div>
  @endif
</div>
<!--メインコンテンツ  -->
<div class="row  d-flex justify-content-center p-0 m-0">
  <!-- 物件表示 -->
  @foreach($item as $items)
  <div class="col-sm-5 col-lg-3 mx-3 my-1 p-0">
    <a href="{{ asset('items/'.$items->id)}}" style="text-decoration:none;">
      <div class="">
        <img src="{{asset('img/item/naisou/'.$items->item_image1)}}"
        class="img-fluid" alt="" style="">
        <div class="text-dark pt-2  " style="">
          <h6 class="mb-0 border-bottom border-danger pb-2 pl-0">
            <!-- <span class="text-white bg-danger rounded p-1">Rent</span> -->
            {{$items->name}}
          </h6>
          <div style="font-size:12px;">
            <ul style="list-style:none; "
            class="pl-1 py-2 text-dark">
            <li>
              {{'山手線「'.$items->station.'」'}}/{{'家賃'. number_format($items->rent).'円'}}/{{'築'.$items->age.'年'}}
            </li>
          </ul>
        </div>
      </div>
    </div>
  </a>
</div>
@endforeach
<div class="my-5 col-12 d-flex justify-content-center " style="font-size:16px;">
  {{ $item->links() }}
</div>
</div>
</div>
@component('components.footer')
@endcomponent
@endsection
