@extends('layouts.app')

@section('content')
<div class="d-flex bd-highlight pr-0  " >
  <!-- サイドバー -->
  <div class="  bd-highlight ">
    @component('components.sidebar')
    @endcomponent
  </div>
  <div class="container-fluid  flex-grow-1 bd-highlight" >
    <!-- ヘッダー -->
    <div class="row  "
    style="background-image: url('{{ asset('img/header.jpg')}}'); background-size: cover; " >
    <!-- 検索バー -->
    <div class="">
    </div>
    <!-- <div class="col-12 h-25">x</div> -->
    <!-- ヘッダー文章 -->
    <div class="col-4 offset-8">
      <div class="mt-5">
        <h1>College</h1>
        <h1>　Living</h1>
        <p>先輩の一人暮らしの体験談を見て、よりよい大学生活を送るためのお部屋探しサイト</p>
      </div>
    </div>
    <!-- ヘッダー検索バー -->
    <div class="col-12  py-5  d-flex align-items-end justify-content-center">
      <div class="p-4 bg-light" style="opacity: 0.9;">
        <form action="{{asset('experiences/serch')}}"
        class="form-inline " method="post">
        {{ csrf_field()}}
        {{method_field('get')}}
        <div class="form-group">
          <label>大学名</label>
          <input type="text" class="form-control " placeholder="検索したい大学名を入力してください" name="college_name">
        </div>
        <button type="submit" class="btn btn-primary ">体験談を検索</button>
      </form>
    </div>
  </div>
</div>
<!-- 体験談表示 -->
<div class="row  bg-light d-flex justify-content-center">
  <div class="col-12 mt-5">
    <h1 style="" class="text-center">最新体験談</h1>
    <p style=" " class="text-center">hogehoge</p>
  </div>
  @for($i=0;$i<=2;$i++)
  <div class="col-4  shadow  border-right">
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
    Check More
  </a>
</div>
<!-- 物件表示 -->
<div class="row  d-flex justify-content-center">
  <div class="col-12 mt-5 ">
  <div class="center-block">
    <h1 style="" class="text-center">最新物件</h1>
    <p style=" " class="text-center">hogehoge</p>
  </div>
  </div>
  @for($i=0;$i<=3;$i++)
  <div class="col-4 my-4 mx-5 bg-primary  p-0 shadow">
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
  <div class="col-12">
    <div class="center-block d-flex justify-content-center">
      <a href="#" class="btn btn-dark btn-lg my-4 " tabindex="-1" role="button" aria-disabled="true">
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
