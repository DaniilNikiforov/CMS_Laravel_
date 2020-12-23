<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>lab1</title>

        <style>
            table span {
                margin-right:8px;
            }
            .header__top {
                width: 100%;

                height:600px;
            }


            .body__body {
                padding-top:90px;
                margin: 0;
             position: absolute;
             top: 20%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
            line-height: 150%;
            }
            h1 {
                color:white;
                text-align:center;
            }
              a.button7 {
  font-weight: 600;
  color: green;
  text-decoration: none;
  padding: .5em 1em calc(.8em + 2px);
  border-radius: 2px;
 cursor:pointer;

  transition: 0.2s;

}
/* a.button7:hover { background: rgb(53, 167, 110); }
a.button7:active {
  background: rgb(33,147,90);
  box-shadow: 0 3px rgb(33,147,90) inset;
}
caption {
caption-side: bottom;
text-align: right;
padding: 10px 0;
font-size: 14px;
}
table {
border: 1px solid #69c;
border-collapse: separate;
empty-cells: hide;
}


th, td {border: 2px solid #69c;} */


body {
    padding-top:100px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position:center ;
}
.center {
    text-align:center;
}
h2 {
    display:flex;
    text-align:center;
    align-items:center;
    justify-content:center;
}
.styled-table {
    text-align:center;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

}
        </style>
    </head>
    <header class="header__top">

    </header>

    <body class="body__body">



      <!-- Таблица админки -->
        <table  class="styled-table">
       <thead>
            <tr>
            <td>alias</td>
                <td>URL</td>
                <td>родители</td>
                <td>orderNum</td>
                <td>Титул</td>
                <td>Создано</td>
                <td>Изменено</td>
                <td>Номер</td>
                <td>Изменение</td>
                <td>Удаление</td>
                <td >Дети</td>
                <td >Просмотр</td>
            </tr>
            </thead>
            @foreach($pagesList as $page)
            <tr>
            <td><span>{{$page->aliasOf}}</span></td>
                <td><span>{{$page->url}}</span></td>
                <td><span>{{$page->parentCode}}</span></td>
                <td><span>{{$page->orderNum}}</span></td>
                <td><span>{{$page->caption}}</span></td>
                <td><span>{{$page->createdDate}}</span></td>
                <td><span>{{$page->editedDate}}</span></td>
                <td><span>{{$page->id}}</span></td>
                @if($page->url != 'default')
                 <!--  действие изменить страницу -->
                <td><span><a href='admin/edit/{{$page->id}}'class="button7"><button>Изменить</button></a></span></td>
                <!-- метод пост , действие удаление страницы -->
                <td style="display:flex"><span><form action="{{url('deletePage')}}" method="POST">
                    @csrf
                    <input type="text" name='id' style="display:none" value='{{$page->id}}'>
                         <!--  действие удалить страницу -->
                    <input type="submit" id="form-submit" value="Delete" >
                </form></span></td>

                <td><span><a href="{{route('chi')}}/{{$page->url}}"class="button7"><button>дети</button></a></span></td>
               <td><span><a href="{{url($page->url)}}"class="button7"><button>Посмотреть</button></a></span></td>
               @endif
            </tr>

       @endforeach
          <!--  выводим количетсво страниц -->
       <h2>Cтраниц - <span>{{$counter}}</span></h2>
        </table>
        <div class="center">
             <!--  действие добавить новый пост на страницу -->
        <span><a href="{{route('new')}}" class="button7 " ><button> Добавить новый пост</button></a></span>
        </div>
        <div class="center1">
             <!--  действие переход на главную страницу с родителями -->
       <a href='/default'class="button7 ">Главная страница</a>
        </div>
    </body>
</html>
