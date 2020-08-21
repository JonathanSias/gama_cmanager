<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Basic Page Needs
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta charset="utf-8">
        <!-- TITLE -->
        <title>Gerenciador de Acervos de Museus Acadêmicos</title>
        {{-- <link rel="icon" href="../_icons/favicon/museu_icon.png"> --}}
        <meta name="description" content="">
        <meta name="author" content="Jonathan Sias">
        <!--  -->
        <!-- Responsive attribute to mobiles view -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- STYLE -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!-- HEADER -->
        <header>
            <div class="topnav">
                <ul class="nav navbar-nav">
                    <li> <a href="{{ url('login') }}"> <i class="fa fa-sign-in"></i> LOGIN</a> </li>
                    <li onclick="openNav()" id="menu-button"> <a><span>&#9776; Menu</span></a> </li>
                </ul>
            </div>
        </header>
        <!-- Side Nav
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <div id="mySidenav" class="sidenav">
            <a id="closebtn" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="{{ url('home') }}"> <i class="fa fa-home"></i> Home</a>
            <a href="{{ url('museus') }}"> <i class="fa fa-university"></i> Museus</a>
            <a href="{{ url('colecoes') }}"> <i class="fa fa-tags"></i> Coleções</a>
            <a href="{{ url('pecas') }}"> <i class="fa fa-picture-o"></i> Peças</a>
            <a href="{{ url('usuarios') }}"> <i class="fa fa-users"></i> Usuários</a>
        </div>

        {{-- content --}}
        @yield('content')
        {{-- end --}}
        
        <!-- Sidenav script -->
        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "15%";
                document.getElementById("main").style.marginLeft = "20%";
                document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
            }
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginLeft= "10%";
                document.body.style.backgroundColor = "white";
            }
        </script>
    </body>
</html>