<html>
<head>
<title>To DO Application</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        <form action="/todo_save" onsubmit="return check();" method="post">
          @csrf
          <input type="text" name="data" id="data" placeholder="TODAY TODO">
          <button type="submit" name="submit">submit</button>
        </form>

    </div>
    <div>
      <ul>
      @foreach( \App\Data::all() as $data )
      @if($data->status == "approve")
        <li style="margin-top:20px; background-color:lightgreen; font-size:20px;"> {{ $data->data ?? '' }}  <a href="/todo_edit/{{$data->id}}"><button><i class="fa fa-pencil"></i></button></a>  <a href="/todo_delete/{{$data->id}}"><button><i class="fa fa-ban"></i></button></a> <a href="/todo_status/{{$data->id}}/{{$data->status}}"><button><i class="fa fa-thumbs-o-up"></i></button></a>
          <hr></li>
      @else
        <li style="margin-top:20px; background-color:#FFCCCB; font-size:20px;""> {{ $data->data ?? '' }}  <a href="/todo_edit/{{$data->id}}"><button><i class="fa fa-pencil"></i></button></a>  <a href="/todo_delete/{{$data->id}}"><button><i class="fa fa-ban"></i></button></a> <a href="/todo_status/{{$data->id}}/{{$data->status}}"><button><i class="fa fa-thumbs-down"></i></button></a>
          <hr></li>
      @endif
      @endforeach
    </ul>
    </div>
  </div>
</body

</html>
