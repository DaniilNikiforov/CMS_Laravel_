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
        .create {
            background: url(https://www.zastavki.com/pictures/originals/2015/Backgrounds_Ebony__white_background_105180_.png) ;
  
    background-repeat: no-repeat;
    background-size: cover;
    background-position:center ;
            padding-top:30px;
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
    <body class="create ">

    <h2>Create Page</h1>

        <form action="{{url('createPage')}}" method="post">
        @csrf
        
                <div><span>Caption : </span><input type="text" id="caption" name="caption"  required maxlength="71"></div>
                <div><span>aliasOf : </span><input type="text" id="aliasOf" name="aliasOf"  maxlength="40"></div>
                <div><span>URL : </span><input type="text" id="url" name="url"  required maxlength="40"></div>
                <div><span>parent : </span><input type="text" id="parentCode" name="parentCode"  required maxlength="71"></div>
                <div><span>orderNum : </span><input type="text" id="orderNum" name="orderNum"  required maxlength="40"></div>
                <div><span>Content : </span><textarea style="height:700px;width:700px;" type="text" id="content" name="content" required pattern="<([A-Z][A-Z0-9]*)\b[^>]*>(.*?)</\1>"></textarea></div>
                <input type="submit" id="form-submit" value="Надіслати">
        </form>
        
    </body>
</html>
