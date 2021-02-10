<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}
body {
        background-color: lightblue;    
    }
</style>
</head>
<body>
@csrf
<div class="navbar">
  <a href="http://localhost:8000/paginausuario">Inicio</a>
  <a href="http://localhost:8000/listausuario1">Produtos</a>
  <a href="http://localhost:8000/editar/1">Editar Login</a>
  <a href="http://localhost:8000">Sair</a>
</div>

<div class="main">
<h1>Meus Produtos</h1>
<br>
@foreach ($produto as $produto)
    <h2>{{$produto->getNome()}} | R$ {{$produto->getPreço()}} <button>Comprar</button>   </h2>
@endforeach
</div>

</body>
</html>