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