
<html>
  <head>
    <title>
      Laravel Message
    </title>
  </head>
  <body>
    <h1>Hello</h1>
    <form class="" action="{{asset('/addMsg')}}" method="post">
      {{ csrf_field() }}
      <div class="">
        標題：<input type="text" name="title" value="">
      </div>
      <div class="">
        內容：<input type="text" name="msg" value="">
      </div>
      <button type="submit" name="button">送出</button>
    </form>
    @foreach ($msgs as $msg)
        <div>
          <p>編號：{{ $msg->id }}</p>
          <p>標題：{{ $msg->title }}</p>
          <p>內容：{{ $msg->content }}</p>
        </div>

    @endforeach
  </body>
</html>
