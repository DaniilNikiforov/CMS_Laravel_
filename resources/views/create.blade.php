<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <title>lab1</title>

        <style>
        * {
    box-sizing: border-box;
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
        .create {
           
    /* background-repeat: no-repeat;
    background-size: cover;
    background-position:center ; */
  padding-top:600px;
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
    <body class="create ">
 <!-- Страница создание поста  -->
    <h2>Create Page</h1>

        <form action="{{url('createPage')}}" method="post">
        @csrf
         <!-- Выводим поля для вода данных-->
                <div><span>Caption : </span><input type="text" id="caption" name="caption"  required maxlength="71"></div>
                <div><span>aliasOf : </span><input type="text" id="aliasOf" name="aliasOf"  maxlength="40"></div>
                <div><span>URL : </span><input type="text" id="url" name="url"  required maxlength="40"></div>
                <div><span>parent : </span><input type="text" id="parentCode" name="parentCode"  required maxlength="71"></div>
                <div><span>orderNum : </span><input type="text" id="orderNum" name="orderNum"  required maxlength="40"></div>
                  <!-- Проверяем данные на пагинатор и водим данные которые потом будут подставляться под контент-->
                <div><span>Content : </span><textarea style="height:700px;width:700px;" type="text" id="content" name="content" required pattern="<([A-Z][A-Z0-9]*)\b[^>]*>(.*?)</\1>"></textarea></div>
                <input type="submit" id="form-submit" value="Надіслати">
        </form>
        
    </body>
</html>
