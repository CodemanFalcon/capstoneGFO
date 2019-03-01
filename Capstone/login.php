<!-- 10-22-2018 Julia Endress -->
<!-- MARKUP -->
<!DOCTYPE html>
<html lang="en">
<!-- HEADER -->
<header>
  <?php include_once('header.php'); ?>
</header>
<!-- MAIN -->
<body id="mybackground">
  <div class="container">
    <div class="elementToFadeIn">
      <div class="myContainerLogin">
        <header>
          <div class="row">
             <div class="col-md-12">
              <nav id="myNav" class="navbar fixed-top navbar-light bg-light">
                <div class="container-fluid">
                  <ul class="nav navbar-nav" >
                    <li class="myLogo"><a>Graduation,<span id="myLogo">The Fastest Option</span></a></li>
                      <ul class="nav navbar-nav">
                      </ul>          
                  </ul>               
                </div>
              </nav>
            </div>
          </div>   
          <div class="row">
            <div class="col-md-12">
              <section class="myContent">
              <div id="loginForm">
                <figure id ="loginImg"><img href="images/lock.png" src="images/lock.png" alt="Lock Icon" titlte = "Lock Icon"/></figure>
                <form id="loginForms" autocomplete="off" class="form-horizontal">
                  <div class="form-group">
                    <label class="control-label col-md-4" for="username">Username:</label>
                    <div class="col-md-4">
                      <input class="form-control" id="username" name="username" required="" step="1" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-4" for="password">Password:</label>
                    <div class="col-md-4">
                      <input class="form-control" id="password" name="password" required="" step="2" type="password">
                    </div>
                  </div>
                  <div class="form-group"> 
                    <div class="col-md-offset-4 col-md-4">
                      <input class="btn btn-success" type="button" value="Login" id="submit" onclick="validate()"/>   
                      <input class="btn btn-info" type="reset">
                    </div>
                  </div>
                </form>
              </div>
              <div class="row">
               <div class="col-md-12">
                <nav id="myNav" class="navbar fixed-top navbar-light bg-light">
                  <div class="container-fluid">
                    <ul class="nav navbar-nav" >                   
                        <ul class="nav navbar-nav">
                        </ul>          
                    </ul>
                    <ul class="nav navbar-nav navbar-left">
                      <!--<li><a href="index.php"><span class="glyphicon glyphicon-chevron-left"></span></a></li>-->
                    </ul>
                  </div>
                </nav>
              </div>
              </div>  
              </section>
            </div>
          </div>
        </header>
      </div>
      </div>
  </div>
</div>
</body>
</html>
<script src="js/entered.js" type="text/javascript">/*enter click*/</script>