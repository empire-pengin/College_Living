@extends('layouts.app')
<!-- ​ style="font-size: 80px; padding-left: 700px; color: white; padding-top: 100px" -->
<!-- class="display-3 text-white text-right pr-" -->
@section('content')
<!-- :;dv -->
  <!-- {{ var_dump($experience )}} -->
<div class="container">
  <div class="row">
    <div style="background-image: url('{{ asset('img/college/college5.jpg')}}'); background-size: cover; height: 500px;">
      <h1 class="display-1 text-white col-md-4 offset-md-6">College</h1>
      <h1 style="font-size: 80px; padding-left: 800px; color: white;">Living</h1>
      <p style="padding-left:700px; opacity: 0.7px;">hogehoge</p>
      <form class="form-inline justify-content-center" action="{{asset('experiences/serch')}}" method="post">
        {{ csrf_field()}}
        {{method_field('get')}}
        <div class="form-group">
          <input style="width: 300px; height: 50px; margin-top: 50px;" type="text" class="form-control" placeholder="検索したい大学名" name="college_name">
        </div>
        <div class="form-group">
          <button style="height: 50px; margin-top: 50px"  type="submit" class="btn btn-primary">検索</button>
        </div>
      </form>
    </div>
  </div>
</div>
​
<div class="container bg-light justify-content-center">
  <p style="text-align:left; font-size:50px;">最新体験談</p>
  <p style="text-align:left; ">hogehoge</p>
  <!-- <div class="row">
      @for ($i=0;$i<=2;$i++)
        <img class="col-sm-3 border-right border-dark" width="300" height="300" src="{{ asset('img/college/'. $experience[$i]->image )}}" >
      @endfor
  </div> -->
  <div class="row pl-1 justify-content-center bg-primary">
    @for($i=0;$i<=2;$i++)
      <div class="col-md-3 m-1 p-0 shadow">
        <div class="">
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
      </div>
    @endfor
  </div>
  <button type="button" class="btn btn-primary btn-lg">最新体験談へ</button>
</div>
​
<div class="container">
  <div>
    <p  style="text-align:left; font-size:50px;">おすすめ物件</p>
    <p style="text-align:left;">hogehoge</p>
  </div>
  <!-- <div class="row"> -->
  <!-- @for ($i=0;$i<=3;$i++)
    <img class="col-sm-6" width="300" height="300" src="{{ asset('img/item/naisou/'. $item[$i]->item_image1 )}}" >
  @endfor -->
  <!-- </div> -->
  <div class="row pl-2">
    @for($i=0;$i<=3;$i++)
      <div class="col-md-5 m-1 p-0 shadow">
        <div class="">
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
      </div>
    @endfor
  </div>
  <form  class="form-inline justify-content-center" action="{{asset('experiences/serch')}}" method="post">
    {{ csrf_field()}}
    {{method_field('get')}}
    <div class="form-group" >
      <input style="width: 300px; height: 50px;" type="text" class="form-control" placeholder="駅名検索" name="college_name" >
    </div>
    <div class="form-group">
      <button style="height: 50px" type="submit" class="btn btn-primary">検索</button>
    </div>
  </form>
</div>
@endsection