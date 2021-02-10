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
  <a href="">Produto</a>
  <a href="#">News</a>
  <a href="#contact">Contact</a>
</div>

<div class="main">
  <h1>Fixed Top Menu</h1>
  
</div>

</body>
</html>