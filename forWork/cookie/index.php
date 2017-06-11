<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
    <div class="container">
     <h1>Hello, world!</h1>
      <div class="row  no-gutters">
          <div class="col-sm-8" style="background-color: grey;height: 300px;">col-sm-8</div>
          <div class="col-sm-1" style="background-color:#fff;height: 300px;">col-sm-1</div>
          <div class="col-sm-3" style="background-color: grey;height: 300px;">col-sm-4</div>
        </div>
        <div class="row  no-gutters" style="padding-top: 2%;">
          <div class="col-sm-4" style="background-color: grey;height: 300px; border: solid 1px #fff">col-sm-8</div>
          <div class="col-sm-4" style="background-color:grey;height: 300px; border: solid 1px #fff">col-sm-1</div>
          <div class="col-sm-4" style="background-color: grey;height: 300px; border: solid 1px #fff">col-sm-4</div>
        </div>
        <div class="row"  style="padding-top: 2%;">
          <div class="col-md-4 well col-md-offset-4">
            <form>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name here"><div class="nameValidation"></div>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" name="submit" id="button" value="submit" class="btn btn-primary pull-right">
              </div>
            </form>
          </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready({
        $('#button').click(function(){
          
        })
      });
    </script>

  </body>
</html>