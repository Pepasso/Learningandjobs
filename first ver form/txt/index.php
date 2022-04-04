<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Введите ваш IP</title>
  <style>

  body {
    background-image: url(https://st2.depositphotos.com/3223379/5387/i/950/depositphotos_53875805-stock-photo-information-technology-background.jpg);
  }
  * {
    box-sizing: border-box;
  }

  input[type=numbers] {
    width: auto;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
    margin-top: 40px;
    margin-left: 43%;
    text-align: center;
  }

  input[type=submit] {
    background-color: #1f27b9;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: left;
    margin-top: 5px;
    margin-left: 46%;
} 

  input[type=submit]:hover {
    background-color: #1f27b9;
  }

  .container {
    opacity: 0.96;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 50px;
    margin-top: 15%; 
  }

  .col-25 {
    text-align: center;
    width: 50%;
    margin-top: 6px;
    margin-left: 25%;
  }

  .row:after {
    content: "";
    clear: both;
  }
 
  </style>       
</head>
<body>
      
  <?php  header('location: http://dev.adm-nk.ru/txt/write.txt'); ?>

</body>
</html>

