@push('css')
  <link rel="stylesheet" href="{{ asset('css/reserves/calendars/singale.css') }}">
@endpush
@php
    // タイムゾーンを設定
  date_default_timezone_set('Asia/Tokyo');
 //関数定義
        $now_date       = date("Y-m-d"); //現在の日付("2021-09-10")などで任意の日付
        $start_date     = date("Y-m-01", strtotime($now_date));   //開始の年月日
        $start_week     = date("w",      strtotime($start_date)); //開始の曜日の数字
        $end_date       = date("Y-m-t",  strtotime($now_date));   //終了の年月日
        $end_week       = date("w",      strtotime($end_date));   //終了の曜日の数字
        $end_date_num   = date("t",      strtotime($now_date));   //終了の日 
        
@endphp
<table class="calender-single">
      <tr> <!--年月表示-->
        {{ date("Y年m月") }}
      </tr>
      <tr>
        <th class="sun">日</th>
        <th>月</th>
        <th>火</th>
        <th>水</th>
        <th>木</th>
        <th>金</th>
        <th class="sat">土</th>
      </tr>
            <!-- 日程表示-->
      <tr>

@php
$day = 1;    
@endphp

@for($i=0;$i<=$start_week-1;++$i)
  <td></td>
@endfor
@for($day;$day<=$end_date_num;++$day)

  @php $md=$day+$i; @endphp
        @if($md % 7 == 0)
          <td class="sat">
            <p class="calendar-num">{{ $day }}</p>
                @php
                    $date = date($day > 9 ? "Y-m-".$day : "Y-m-0".$day)
                @endphp
              @if (in_array($date,$reserves))
                  <p>済み</p>
              @else
              <p class="cakendar-button"><a href="{{ route('reserves.create',['mst_site_id'=>$mst_site->id,'date'=>$date]) }}">予約</a></p>
              @endif
            </td></tr><tr>

        @elseif($md % 7 == 1)
          <td class="sun">
            <p class="calendar-num">{{ $day }}</p>
                @php
                    $date = date($day > 9 ? "Y-m-".$day : "Y-m-0".$day)
                @endphp
              @if (in_array($date,$reserves))
                  <p>済み</p>
              @else
              <p class="cakendar-button"><a href="{{ route('reserves.create',['mst_site_id'=>$mst_site->id,'date'=>$date]) }}">予約</a></p>
              @endif
          </td>
        @else
          <td>
            <p class="calendar-num">{{ $day }}</p>
                @php
                    $date = date($day > 9 ? "Y-m-".$day : "Y-m-0".$day)
                @endphp
              @if (in_array($date,$reserves))
                  <p>済み</p>
              @else
              <p class="cakendar-button"><a href="{{ route('reserves.create',['mst_site_id'=>$mst_site->id,'date'=>$date]) }}">予約</a></p>
              @endif
          </td>
        @endif
@endfor

  @for($e=0;$e<=6-$end_week;++$e)
    <td></td>
  @endfor
</tr>
</table>

<p class="cakendar-button"><a href="{{ route('mst_sites.index') }}">戻る</a></p>



{{-- 　php
  @php
      for($i=0;$i<=$start_week-1;++$i){//$i=1;$i<=$start_week;これやとダメやった
        echo "<td></td>";
      }
      $day=1; //日数
      for($day;$day<=$end_date_num;++$day){
      $md=$day+$i;
        if($md%7==0){//土曜日折り返し
          echo "<td class=\"sat\">".$day."<td></tr><tr>";
        }elseif($md%7==1){
          echo "<td class=\"sun\">".$day."</td>";
        }else{
          echo "<td>".$day."</td>";
        }
      } //空きの表示
      for($e=0;$e<=6-$end_week;++$e){//
        echo "<td></td>";
      }
      @endphp
          </tr>
        </table> --}}
</div>
<style>
  .container {
  /* font-family: 'Noto Sans JP', sans-serif; */
  margin-top: 80px;
}
a {
  text-decoration: none;
}
th {
  height: 30px;
  text-align: center;
  border-bottom:1px solid #000;
}
td {
  height: 40px;
  border-bottom:1px solid #000;
}

.today {
  background: orange !important;
}
th:nth-of-type(1), td:nth-of-type(1) {
  color: red;
}
th:nth-of-type(7), td:nth-of-type(7) {
  color: blue;
}
.calender-single {
}
</style>