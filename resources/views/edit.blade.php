<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>lab1</title>

        <style>
        body {
            padding-top:40px;
        }
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
        .createi {

           background-repeat: no-repeat;
           background-size: cover;
           background-position:center ;
                   padding-top:200px;
                       margin: 0;
                    position: absolute;
                    top: 50%;
                   left: 50%;
                   margin-right: -50%;
                   transform: translate(-50%, -50%);
                   line-height: 150%;
                   }
                   input[type=text], select {
         width: 100%;
         padding: 12px 20px;
         margin: 8px 0;
         display: inline-block;
         border: 1px solid #ccc;
         border-radius: 4px;
         box-sizing: border-box;
       }

       input[type=submit] {
         width: 100%;
         background-color: #4CAF50;
         color: white;
         padding: 14px 20px;
         margin: 8px 0;
         border: none;
         border-radius: 4px;
         cursor: pointer;
       }

       input[type=submit]:hover {
         background-color: #45a049;
       }

       div {
         border-radius: 5px;
         background-color: #f2f2f2;
         padding: 20px;
       }
        </style>
    </head>
    <body class="createі">
 <!-- Страница изменение поста  , аналогична созданию -->
    <h2>Редактор страниц</h1>
    <!-- Выводим номер страницы за ид -->
    <h3>Номер страницы : {{$page->id}}</h2>
        <!-- Выводим урл страницы  -->
    <h3>Page url : {{$page->url}}</h3>
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
