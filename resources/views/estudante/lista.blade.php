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
<a href="http://localhost:8000/Principal">Inicio</a>
  <a href="http://localhost:8000/lista">Meus Produtos</a>
  <a href="http://localhost:8000/editarProduto/1">Alterar Produto</a>
  <a href="http://localhost:8000/deletarProduto/1">Deletar Produto</a>
  <a href="http://localhost:8000/editar/1">Editar Login</a>
  <a href="http://localhost:8000">Sair</a>
</div>

<div class="main">
<h1>Lista De Produtos</h1>
<br>
@foreach ($produto as $produto)
        
    <h2>{{$produto->getNome()}} | R$ {{$produto->getPreço()}}   </h2>


@endforeach
</div>

</body>
</html>