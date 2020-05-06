<html>
<head>
<title>To DO Application</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>

var check = () => {
    var data = document.getElementById('data').value;
    if( !data ){
      alert("please fill");
      return false;
    }
};

</script>
</head>
<body>
  <div align="center">
    <h1 style="color:grey;">TODO APPLICATION</h1>
    <div>
      <br>
        <form action="/todo_save_edit/{{$id}}" onsubmit="return check();" method="post">
          @csrf
          <input type="text" name="data" id="data" value="{{$item}}">
          <button type="submit" name="submit">submit</button>
        </form>

    </div>
  </div>
</body

</html>
