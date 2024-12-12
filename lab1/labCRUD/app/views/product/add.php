<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
      body, html {
         margin: 0;
         height: 100%; 
      }
      .card {
          display: flex;
          justify-content: center;
          align-items: center;
          min-height: 70vh; 
          background-color: #f0f0f0; 
          padding: 20px; 
      }
      .card-title {
          font-size: 2.5em;
          color: #333;
      }
      .divider {
        border: none;
        height: 2px; 
        background-color: black; 
        margin: 20px ; 
    }
    </style>
    <title>Addition</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Administration</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Trang ngoài</a>
        </li>
        <li class="nav-item category">
          <a class="nav-link active" aria-current="page" href="#">Thể loại</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tác giả</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Bài viết</a>
        </li>
        
    </div>
  </div>
</nav>


<form action="index.php?controller=product&action=store" method="POST">
<label for="">Tên sản phẩm</label>
<input type="text" class="form-controll" name="name">

<label for="">Giá sản phẩm</label>
<input type="text" class="form-controll" name="price">
<input type="submit" value="Tạo sản phẩm ">

</form>

<div class="card text-center">
    <h2 class="card-title">TLU'S MUSIC GARDEN</h2>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>