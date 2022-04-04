 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Выберите время</title>
  <style>

  body {
    background-image: url(https://st2.depositphotos.com/3223379/5387/i/950/depositphotos_53875805-stock-photo-information-technology-background.jpg);
    background-repeat: no-repeat;
    background-size: cover;
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
    padding: 12px 100px;
    border: 1;
    border-radius: 4px;
    cursor: pointer;
    float: left;
    margin-top: 10%;
    margin-left: 36%;
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

  a {
    text-decoration: none;
    border-bottom: 2px dashed darkorchid;
    /* padding-bottom: 3px; */
  }

  .row:after {
    content: "";
    clear: both;
  }
 
  </style>       
</head>
<body>
  <form method="post" action="check.php">
    <input type="submit" name="button1" value="1ч">
    <input type="submit" name="button2" value="4ч">
    <input type="submit" name="button3" value="8ч">
  </form>
</body>
</html>

