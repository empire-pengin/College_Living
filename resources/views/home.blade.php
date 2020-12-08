@extends('layouts.app')

@section('content')
<!-- nav -->
<div class="container-fluid sticky-top">
<div class="row d-sm-block d-md-none ">
@component('components.nav')
    @endcomponent
</div>
</div>
<div class="d-flex bd-highlight pr-0  " >
  <!-- サイドバー -->
  <div class="  bd-highlight d-none d-md-block">
    @component('components.sidebar')
    @endcomponent
  </div>

  <div class="container-fluid  flex-grow-1 bd-highlight" >
    <!-- ヘッダー PC画面-->
    <div class="row  d-none d-md-block"
    style="background-image: url('{{ asset('img/header.jpg')}}'); background-size: cover; " >
    <!-- ヘッダー文章 -->
    <div class="col-lg-4 offset-8">
      <div class="mt-5">
        <h1>College</h1>
        <h1>　Living</h1>
        <p>先輩の一人暮らしの体験談を見て、よりよい大学生活を送るためのお部屋探しサイト</p>
      </div>
    </div>
    <div class="col-12  py-5  d-flex align-items-end justify-content-center">
      <!-- ヘッダー物件検索 -->
      <div class="p-4 bg-light" style="opacity: 0.9;">
        <form action="{{asset('items/serch')}}"
        class="form-inline " method="post">
        {{ csrf_field()}}
        {{method_field('get')}}
        <div class="form-group">
          <input type="text" class="form-control " placeholder="駅名" name="station">
        </div>
        <button type="submit" class="btn btn-danger"><i class="fas fa-search"></i></button>
      </form>
    </div>
    <!-- ヘッダー体験談検索 -->
    <div class="p-4 bg-light" style="opacity: 0.9;">
      <form action="{{asset('experiences/serch')}}"
      class="form-inline " method="post">
      {{ csrf_field()}}
      {{method_field('get')}}
      <div class="form-group">
        <!-- <label class="mr-2" style="font-weight:bold;">大学名</label> -->
        <input type="text" class="form-control " placeholder="大学名を入力" name="college_name">
      </div>
      <button type="submit" class="btn btn-danger">体験談を検索</button>
    </form>
  </div>
</div>
</div>
<!-- スマホ画面ヘッダー -->
<div class=" d-sm-block d-md-none row"
    style="background-image: url('{{ asset('img/header-sumaho.jpg')}}'); background-size: cover; ">
<div class="col-lg-4 offset-8">
      <div class="mt-5">
        <h1>College</h1>
        <h1>　Living</h1>
        <p>先輩の一人暮らしの体験談を見て、よりよい大学生活を送るためのお部屋探しサイト</p>
      </div>
    </div>
    
</div>
<!-- 体験談表示 -->
<div class="row  bg-light d-flex justify-content-center">
  <div class="col-12 mt-5">
    <h1  class="text-center" style="color:#FF4500;">Experiences</h1>
    <p style=" " class="text-center">一人暮らしの体験談を確認して、イメージを膨らませよう！</p>
  </div>
  @for($i=0;$i<=2;$i++)
  <!-- 体験談パソコン用 -->
  <div class="col-lg-4  shadow d-none  d-lg-block border-right">
    <a href="{{ asset('experiences/'.$experience[$i]->id)}}" style="text-decoration:none;">
      <img  src="{{ asset('img/college/'. $experience[$i]->image )}}"
      class="img-fluid border-bottom" alt="" >
      <div class="bg-white pt-2 px-2 text-dark " >
        <h6 class="mb-0 border-bottom border-danger pb-2 pl-1">
          <strong>{{$experience[$i]->college_name}}</strong>
        </h6>
        <div class="" style="font-size:12px;">
          <ul style="list-style:none; " class="pl-1 py-2">
            <li>
              <strong>{{'学部: '.$experience[$i]->undergraduate}}</strong>
            </li>
            <li>
              {{'家賃: '.number_format($experience[$i]->rent).'円'}}/{{'山手線「'.$experience[$i]->where_live.'」'}}
            </li>
          </ul>
        </div>
        <div>
        </div>
      </div>
    </a>
  </div>
  <!-- 体験談スマホ用 -->
  <div class="col-sm-10 col-md-10 mt-2 bg-white pt-2 px-2 text-dark d-sm-block d-lg-none " >
    <a href="" class="justify-content-start d-flex text-dark" style="text-decoration:none;">
      <img  src="{{ asset('img/college/'. $experience[$i]->image )}}"
      class=" border-bottom" alt=""style="width:200px;" >
      <div class="">
      <h6 class="mb-0 border-bottom border-danger pb-2 pl-1">
      <strong>{{$experience[$i]->college_name}}</strong>
    </h6>
    <div class="" style="font-size:12px;">
      <ul style="list-style:none; " class="pl-1 py-2">
        <li>
          <strong>{{'学部: '.$experience[$i]->undergraduate}}</strong>
        </li>
        <li>
          {{'家賃: '.number_format($experience[$i]->rent).'円'}}/{{'山手線「'.$experience[$i]->where_live.'」'}}
        </li>
      </ul>
    </div>
      </div>
    </a>
  </div>
  @endfor
  <a href="#" class="col-sm-5 btn btn-outline-danger btn-lg my-4" tabindex="-1" role="button" aria-disabled="true">
    Check More
  </a>
</div>

<!-- 物件表示 -->
<div class="row  d-flex justify-content-center">
  <div class="col-12 mt-5 ">
    <div class="center-block">
      <h1 style="color:#FF4500;" class="text-center">Rent</h1>
      <p style=" " class="text-center">山手線沿線の物件を確認できます！</p>
    </div>
  </div>
  @for($i=1;$i<=4;$i++)
  <!-- 物件のパソコン表示 -->
  <div class="col-lg-4 my-4 mx-5 d-none  d-lg-block   p-0 shadow">
    <a href="{{ asset('items/'.$i )}}" style="text-decoration:none;">
      <img src="{{asset('img/item/naisou/'.$item[$i]->item_image1)}}"
      class="img-fluid"  alt="">
      <div class="bg-white text-dark pt-2 px-2" style="">
        <h6 class="mb-0 border-bottom border-danger pb-2 pl-1">
          <strong>{{$item[$i]->name}}</strong>
        </h6>
        <div style="font-size:12px;">
          <ul style="list-style:none; " class="pl-1 py-2">
            <li>
              {{'家賃'. number_format($item[$i]->rent).'円'}}/{{'山手線「'.$item[$i]->station.'」'}}/{{'築'.$item[$i]->age.'年'}}
              /{{'間取り'.$item[$i]->construction}}
            </li>
          </ul>
        </div>
      </div>
    </a>
  </div>
  <!-- 物件スマホ画面 -->
  <div class="col-sm-10 bg-light text-dark  mt-2 px-0 d-sm-block d-lg-none" style="">
    <a href="" class="justify-content-start d-flex" style="text-decoration:none;">
    @if($i%2===0)
    <img src="{{asset('img/item/naisou/'.$item[$i]->item_image1)}}"
      class="" style="width:200px;"  alt="">
      <div class="text-dark">
      <h6 class="mb-0  border-bottom border-danger pb-2 ">
      <strong>{{$item[$i]->name}}</strong>
    </h6>
    <div style="font-size:12px;">
      <ul style="list-style:none; " class=" py-2">
        <li>
          {{'家賃'. number_format($item[$i]->rent).'円'}}/{{'山手線「'.$item[$i]->station.'」'}}/{{'築'.$item[$i]->age.'年'}}
          /{{'間取り'.$item[$i]->construction}}
        </li>
      </ul>
    </div>
      </div>
    @else
      <div class="text-dark">
      <h6 class="mb-0 border-bottom border-danger pb-2 ">
      <strong>{{$item[$i]->name}}</strong>
    </h6>
    <div style="font-size:12px;">
      <ul style="list-style:none; " class=" py-2">
        <li>
          {{'家賃'. number_format($item[$i]->rent).'円'}}/{{'山手線「'.$item[$i]->station.'」'}}/{{'築'.$item[$i]->age.'年'}}
          /{{'間取り'.$item[$i]->construction}}
        </li>
      </ul>
    </div>
      </div>
      <img src="{{asset('img/item/naisou/'.$item[$i]->item_image1)}}"
      class="" style="width:200px;"  alt="">
    @endif
    
    </a>
  </div>
  @endfor
  <div class="col-12">
    <div class="center-block d-flex justify-content-center">
      <a href="{{ asset('items')}}"
      class="btn btn-outline-danger btn-lg my-4 " tabindex="-1" role="button" aria-disabled="true">
      Click More
    </a>
  </div>
</div>

</div>
<!-- フッター -->
<div class="row">
  @component('components.footer')
  @endcomponent
</div>
</div>
</div>

@endsection