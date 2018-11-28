<html lang="en" class="ib-invoice ib-unpaid">
   <head>
      <meta charset="utf-8">
      <title>Onyx</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
div{
    color: #fff;
    font-family: Tahoma, Verdana, Segoe, sans-serif;
    padding: 10px;
}
.container{
    background-color:#2E4272;
    display:flex;
}
.fixed{
    background-color:#4F628E;
    width: 200px;
}
.flex-item{
    background-color:#7887AB;
    flex-grow: 1;
}
      </style>
   </head>
   <body>
      <div class="container">
    <div class="fixed">Fixed width 111</div>
    <div class="flex-item">Dynamically sized content 222</div>
</div>
   </body>
</html>