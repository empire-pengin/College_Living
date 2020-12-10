<div class="col-md-3 border-top border-danger border-danger pb-0 mt-2" style="font-size: 22px;">
  <table class="pl-0 mt-5 mb-5 table" style="list-style:none;">
    <tbody>
      <tr>
        <th class=""><span class="text-danger"><i class="fas fa-graduation-cap text-dange"></i></span>　{{'学部 '.$experience->undergraduate}}
      </tr>
      <tr>
        <th class=""><span class="text-danger"><i class="fas fa-yen-sign"></i></span>　{{'家賃 '. number_format($experience->rent)}}円
      </tr>
      <tr>
        <th class=""><i><span class="text-danger"><span class="fas fa-user-circle text-danger "></i>　{{'性別 '.$experience->sex}}
      </tr>
      <tr>
        <th class="border-bottom border-danger pb-5"><span class="text-danger"><i class="fas fa-home text-dange"></i></span>　{{'居住地 '.$experience->where_live}}
      </tr>
    <tbody>
  </table>
</div>

<table class="table table-bordered">
  <tbody>
    <tr>
      <th scope="row">仕送り額</th>
      <td>{{ number_format($experience->remittance)}}</td>
    </tr>
    <tr>
      <th scope="row">バイトやインターン</th>
      <td>{{$experience->part}}</td>
    </tr>
    <tr>
      <th scope="row">出身地</th>
      <td>{{$experience->from}}</td>
    </tr>
  </tbody>
</table>

<div class="col-md-3 border-top border-danger border-danger pb-0 mt-2" style="font-size: 22px;">
<ul class="pl-0 mt-5 mb-5 " style="list-style:none;">
  <li class=""><span class="text-danger"><i class="fas fa-graduation-cap text-dange"></i></span>　{{'学部 '.$experience->undergraduate}}
  </li>
  <li class=""><span class="text-danger">
    <i class="fas fa-yen-sign">
    </i></span>　{{'家賃 '. number_format($experience->rent)}}円</li>
    <li class=""><i><span class="text-danger">
      <span class="fas fa-user-circle text-danger ">
      </i>　{{'性別 '.$experience->sex}}
    </li>
    <li class="border-bottom border-danger pb-5"><span class="text-danger">
      <i class="fas fa-home text-dange">
      </i></span>　{{'居住地 '.$experience->where_live}}
    </li>
  </ul>
</div>

