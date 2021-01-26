<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/mainpage.css">
  <title>BlogIt</title>
</head>

<body>
  <nav class="navbar navbar-light bg-warning">
    <a class="navbar-brand heading" href="#">BlogIt🖋️</a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExample01" style="">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <p class="normal-heading">@anjujoseph555</p>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-dark normal-heading">Logout</button>
          <!-- <a class="nav-link normal-heading" href="#">Logout</a> -->
        </li>
      </ul>

    </div>
  </nav>
  <div class="container contact-form">
    <form method="post">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <input type="text" name="txtName" class="form-control normal-heading" placeholder="Post Title *" value="" />
          </div>
          <div class="form-group">
            <textarea name="txtMsg" class="form-control normal-heading" placeholder="Post Content *" style="width: 100%; height: 150px;"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="btnSubmit" class="btnContact normal-heading" value="Post" />
          </div>
        </div>
      </div>
    </form>


    <div class="container">
      <div class="row blog-post">
        <div class="col-sm-3" style="text-align:center;">
          <br>
          <img src="https://lh3.googleusercontent.com/a-/AOh14GhjmtNSR-cb7fCloZ3uQocOHdnzcpnE8OwcEvObrw" class="imagePosition">
          <p class="blog-content-body" style="color:blue;">@anujoseph222</p>
        </div>


        <div class="col-sm-9">
          <h5 class="blog-content-title"><bold>Grid Elements</bold></h5>
          <p class="blog-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.A Grid Layout must have a parent element with the <em>display</em> property set to
            <em>grid</em> or <em>inline-grid</em>.</p>
          <div class="grid-container">

            <div class="grid-item">
              <button type="button" name="button"><i class="fas fa-thumbs-up fa-x icon"></i></button>
              <button type="button" name="button"><i class="fas fa-thumbs-down fa-x icon"></i></button>
            </div>

            <div class="grid-item">
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                  40%
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />

    <div class="container">
      <div class="row blog-post">
        <div class="col-sm-3" style="text-align:center;">
          <br>
          <img src="https://lh3.googleusercontent.com/a-/AOh14GhjmtNSR-cb7fCloZ3uQocOHdnzcpnE8OwcEvObrw" class="imagePosition">
          <p class="blog-content-body" style="color:blue;">@anujoseph222</p>
        </div>


        <div class="col-sm-9">
          <h5 class="blog-content-title"><bold>Grid Elements</bold></h5>
          <p class="blog-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.A Grid Layout must have a parent element with the <em>display</em> property set to
            <em>grid</em> or <em>inline-grid</em>.</p>
          <div class="grid-container">

            <div class="grid-item">
              <button type="button" name="button"><i class="fas fa-thumbs-up fa-x icon"></i></button>
              <button type="button" name="button"><i class="fas fa-thumbs-down fa-x icon"></i></button>
            </div>

            <div class="grid-item">
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                  40%
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />

  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
