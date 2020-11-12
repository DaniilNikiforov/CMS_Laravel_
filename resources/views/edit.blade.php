<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>lab1</title>

        <style>
        form {
            display:flex;
            flex-direction:column;
        }
        form input {
            width:150px;
        }
        form div {
            display:flex;
            margin-bottom:24px;
        }
        .createі {
            background: url(https://www.zastavki.com/pictures/originals/2015/Backgrounds_Ebony__white_background_105180_.png) ;
  
    background-repeat: no-repeat;
    background-size: cover;
    background-position:center ;
                margin: 0;
             position: absolute;
             top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
            line-height: 150%;
            }

        </style>
    </head>
    <body class="createі">

    <h2>Page Editor</h1>
    <h3>Page id : {{$page->id}}</h2>
    <h3>Page url : {{$page->url}}</h2>
        <form action="{{url('editPage')}}" method="post">
        @csrf
        <div><span>aliasOf : </span><input type="text" id="aliasOf" name="aliasOf" value="{{$page->aliasOf}}" ></div>
                <div><span>Caption : </span><input type="text" id="caption" name="caption" value="{{$page->caption}}" ></div>
                <div><span>parentCode : </span><input type="text" id="parentCode" name="parentCode" value="{{$page->parentCode}}" ></div>
                <div><span>orderNum : </span><input type="text" id="orderNum" name="orderNum" value="{{$page->orderNum}}" ></div>
                <div><span>Content : </span><textarea style="height:700px;width:700px;" type="text" id="content" name="content" required>{{$page->content}}</textarea></div>
               
                <input type="text" name='id' style="display:none" value='{{$page->id}}'>
                <input type="submit" id="form-submit" value="Надіслати">
        </form>
        
    </body>
</html>
