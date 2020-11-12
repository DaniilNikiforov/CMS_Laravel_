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
                background-color: black;
            }

           
            .body__body {
                margin-top:30px;
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
  color: white;
  text-decoration: none;
  padding: .5em 1em calc(.8em + 2px);
  border-radius: 2px;
  background: rgb(0,0,0);
  box-shadow: 0 -3px rgb(53,167,110) inset;
  transition: 0.2s;
  
} 
a.button7:hover { background: rgb(53, 167, 110); }
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

.center1 {
    text-align:center;
}
th, td {border: 2px solid #69c;}
body {
    background: url(https://www.zastavki.com/pictures/originals/2015/Backgrounds_Ebony__white_background_105180_.png) ;
  
    background-repeat: no-repeat;
    background-size: cover;
    background-position:center ;
}
        </style>
    </head>
    <header class="header__top"> 
        <h1>admin panel</h1>
        </header>
   
    <body class="body__body">
      


      
        <table>
        <caption>Model № 1</caption>
            <tr>
            <td>alias</td>
                <td>URL</td>
                <td>parent</td>
                <td>orderNum</td>
                <td>TITLE</td>
                <td>CREATED</td>
                <td>EDITED</td>
                <td>ID №</td>
                <td>EDIT</td>
                <td>DEL</td>
                <td >Child</td>
                <td >View</td>
            </tr>
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
                <td><span><a href='admin/edit/{{$page->id}}'class="button7"><button>Edit</button></a></span></td>
                <td style="display:flex"><span><form action="{{url('deletePage')}}" method="POST">
                    @csrf
                    <input type="text" name='id' style="display:none" value='{{$page->id}}'>
                    <input type="submit" id="form-submit" value="Delete" >
                </form></span></td>
                
                <td><span><a href="{{route('chi')}}/{{$page->url}}"class="button7"><button>children</button></a></span></td>
               <td><span><a href="{{url($page->url)}}"class="button7"><button>View</button></a></span></td>
               @endif
            </tr>           
                  
       @endforeach
       <h2>Количество страниц <span>{{$page->id-29}}</span></h2>
        </table>
        <div class="center">
        <span><a href="{{route('new')}}" class="button7 " ><button> Add new</button></a></span>
        </div>
        <div class="center1">
        
       <a href='/default'class="button7 ">Головна сторинка</a>
        </div>
    </body>
</html>
