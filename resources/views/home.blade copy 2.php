@extends('layouts.app')

@section('content')
<div class="d-flex bd-highlight pr-0 " style="overflow: visible">
<!-- サイドバー -->
  <div class="  bd-highlight position-fixed ">
  @component('components.sidebar')
  @endcomponent
  </div>
  <div class="container-fluid  flex-grow-1 bd-highlight" >
  <!-- ヘッダー -->
  <div class="row" >
  ss
  </div>
  <!-- 体験談表示 -->
  <div class="row  bg-primary d-flex justify-content-center">
  @for($i=0;$i<=2;$i++)
  <div class="col-4 shadow border-right">
    <img  src="{{ asset('img/college/'. $experience[$i]->image )}}"
      class="img-fluid" alt="" style="">
      <div class="bg-white" style="">
            <h5 class="mb-0">{{$experience[$i]->college_name}}</h5>
            <div>
              <span>{{'家賃: '.$experience[$i]->rent.'円'}}</span>
              <span>{{'山手線「'.$experience[$i]->where_live.'」'}}</span>
            </div>
            <div>
              <span>{{'学部: '.$experience[$i]->undergraduate}}</span>
            </div>
          </div>
  </div>
  @endfor
  <a href="#" class="btn btn-dark btn-lg my-4" tabindex="-1" role="button" aria-disabled="true">
    More
  </a>
  </div>
  <!-- 物件表示 -->
  <div class="row  d-flex justify-content-center">
  @for($i=0;$i<=3;$i++)
  <div class="col-5 m-1 p-0 shadow">
    <img src="{{asset('img/item/naisou/'.$item[$i]->item_image1)}}"
      class="img-fluid"  alt="">
    <div class="bg-white" style="">
      <h5 class="mb-0">{{$item[$i]->name}}</h5>
      <div>
        <span>{{'家賃'.$item[$i]->rent.'円'}}</span>
        <span>{{'山手線「'.$item[$i]->station.'」'}}</span>
      </div>
      <div>
        <span>{{'築'.$item[$i]->age.'年'}}</span>
        <span>{{'間取り'.$item[$i]->construction}}</span>
      </div>
    </div>
  </div>
  @endfor
  </div>
  <!-- フッター -->
  <div class="row">
  @component('components.footer')
  @endcomponent
  </div>
  </div>
</div>
@endsection