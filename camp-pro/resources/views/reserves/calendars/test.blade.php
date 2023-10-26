<br>
<button id="btn3">ボタン3</button>
 <input id="from" value="bbbbbb">
 <script>
    // document.getElementById( "target" ).value = "SYNCER" ;
    function valueC(){
    from.value="cccccc";
  }
  var btn3 = document.getElementById('btn3');
  var from = document.getElementById("from");
  
  btn3.addEventListener('click', valueC, false);
 </script>



<button data-day="1" name="item1" onclick="foo(rform)">商品1</button>
 <input id="reserve-from" value=""><br>

 <script>
    var rbtn = document.getElementById('calendar-btn');
    var rfrom = document.getElementById("reserve-from");

  foo(rfrom) {
  alert('反応はしてる');
  
   // datasetは、data-xxxで指定されたすべてが入る
   // {id:"foo", index:1}
   var rday = rbtn.currentTarget.dataset['day'];
   rfrom.value = rday;
  //  const data = e.currentTarget.dataset['id']; // fooが返される
  }
 </script>

