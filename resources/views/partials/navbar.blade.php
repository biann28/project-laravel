<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="static/css/myCss.css" rel="stylesheet">
<meta charset="UTF-8">
<link href="static/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="static/css/customIndex.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="static/css/bootstrap-responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
</div>
    <!-- Collect the nav links, forms, and other content for toggling -->
            </div>
            <div class="container">
            <a class="navbar-brand" href="#">B | Blog</a>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="navlink {{ ($title === "Home") ? 'active': '' }}"><a href="/home">Home<span class="sr-only">(current)</span></a></li>
        <li class="navlink {{ ($title === "About") ? 'active': '' }}"><a href="/about">About</a></li>
        <li class="navlink {{ ($title === "Blog") ? 'active': '' }}"><a href="/blog">Blog</a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
