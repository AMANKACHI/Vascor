<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="Assets/img/fav-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/css/master.css">
    <title>Vascor</title>
  </head>
  <body>

    <div class="container-fluid social-header ">
      <div class="row">
        <div class="col-xs-6">
              <h5 class="text-left white"><i class="fa fa-envelope" aria-hidden="true" style=" font-size:10px;"></i>service-client@vascor.com</h5>
        </div>
        <div class="col-xs-6">
              <h5 class="text-right white"><i class="fa fa-mobile" aria-hidden="true" style=" font-size:14px; color:white;"></i> +212 5 22 74 25 74</h5>
        </div>

      </div>
    </div>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Vascor</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="index.html">Presentation</a></li>
                    <li><a href="index.html">Services</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
</nav>

  <div class="text-center box" id="Home">
      <img class="img-responsive" src="Assets/img/chaufage.jpg" alt="Vascor est une societe qui fait de la  construction,Climatisation, froid, Brumisation, ventilation">
          <div class="image-title">
              <h1 class="">VASCOR</h1>
                <h3 class="hidden-xs">Services & solutions</h3>
          </div>
  </div>


  <div class="container">
    <div class="row">
      <p class="lead text-center " style="margin-top:10px;">Contact form</p>
      <form id="contact-form" method="post" action="includes/mail.php" role="form">

<div class="messages"></div>

<div class="controls">

  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label for="form_name">Firstname *</label>
              <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
              <div class="help-block with-errors"></div>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label for="form_lastname">Lastname *</label>
              <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
              <div class="help-block with-errors"></div>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label for="form_email">Email *</label>
              <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
              <div class="help-block with-errors"></div>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label for="form_need">Please specify your need *</label>
              <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                  <option value=""></option>
                  <option value="Request quotation">Request quotation</option>
                  <option value="Request order status">Request order status</option>
                  <option value="Request copy of an invoice">Request copy of an invoice</option>
                  <option value="Other">Other</option>
              </select>
              <div class="help-block with-errors"></div>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-12">
          <div class="form-group">
              <label for="form_message">Message *</label>
              <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
              <div class="help-block with-errors"></div>
          </div>
      </div>
      <div class="col-md-12">
          <input type="submit" class="btn btn-success btn-send" value="Send message">
      </div>
  </div>
  <div class="row">
      <div class="col-md-12">
          <p class="text-muted">
              <strong>*</strong> These fields are required. Contact form by
              <a href="#" target="_blank">AMANKACHI Soufiane</a>.</p>
      </div>
  </div>
</div>

</form>

    </div>

  </div>


  <footer>
  <div class="container-fluid">
    <div class="row">
        <div class="col-xs-6">
          <h2 class="text-center white"> VASCOR</h2>
          <h5 class="text-center white">Siège Social : 23 Rue Boured Roch Noires Casablanca</h5>
          <h5 class="text-center white">Magasin Casablanca :75 Rue LAgl Ghlame Hay SALAM 1 Sidi Bernousi casablanca</h5>
          <h5 class="text-center white">Magasin Fes :77 Bis Residence Taj Bd saint</h5>
        </div>
        <div class="col-xs-6">
          <h3 class="text-center white">Telephone</h3>
          <h5 class="text-center white">+212 6 61 43 58 03</h5>
          <h5 class="text-center white">+212 6 61 49 19 92</h5>
          <h5 class="text-center white">+212 5 22 74 25 74</h5>
        </div>

    </div>

  </div>
  </footer>

    <script type="text/javascript" src="includes/validator.js"></script>
    <script type="text/javascript" src="Assets/js/jquery.js"></script>
    <script type="text/javascript" src="Assets/js/popper.min.js"></script>
    <script type="text/javascript" src="Assets/js/bootstrap.js"></script>
  </body>
</html>
