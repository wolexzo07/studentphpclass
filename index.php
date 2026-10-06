<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OPERATION</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"/>
   <link rel="stylesheet" href="css/index.css"/>
   <link rel="stylesheet" href="bootstrap-icons-1.13.1/bootstrap-icons.min.css"/>
  </head>
  <body>
    
    <div class="container-fluid">

        <div class="row mt-4">
          
            <div class="col-lg-1 col-md-1 col-12"></div>
            
            <div class="col-lg-10 col-md-10 col-12">

                <?php include("fetch.php");?>

            </div>
            
            <div class="col-lg-1 col-md-1 col-12"></div>

        </div>

      </div>

      <div class="panel">
        <div class="container">
          <div class="row">
            <div class="col-12 p-3"><i style="font-size:30px;" class="bi bi-x-circle float-end closePanel"></i></div>
          </div>
          <div class="row">
            <div class="col-12"></div>
          </div>
        </div>
      </div>

          <!--<div class="col-xl-3 col-xxl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 bg-primary">

            <h1 class="text-center">CRUD OPERATION</h1>

          </div>
          
          <div class="col-xl-3 col-xxl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 bg-success">

            <h1 class="text-center">CRUD OPERATION</h1>

          </div>
          
          <div class="col-xl-3 col-xxl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 bg-primary">

            <h1 class="text-center">CRUD OPERATION</h1>

          </div>
          
          <div class="col-xl-3 col-xxl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 bg-success">

            <h1 class="text-center">CRUD OPERATION</h1>

          </div>--->

      

    <script src="js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="js/jquery-4.0.0.min.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>