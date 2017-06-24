<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
 <!-- Modal Trigger -->
  <a class="waves-effect waves-light btn" href="#modal1">Modal</a>
  <!-- Modal Trigger -->
 <a class="waves-effect waves-light btn" href="#modal1">Modal</a>

 <!-- Modal Structure -->
 <div id="modal1" class="modal">
   <div class="modal-content">
     <h4>Modal Header</h4>
     <p>A bunch of text</p>
   </div>
   <div class="modal-footer">
     <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
   </div>
 </div>


  <!-- Modal Structure -->
  <div id="modal2" class="modal2">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
  <!--  Scripts-->
  <script src="js/materialize.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('.modal-trigger').leanModal();
    $('.modal').modal();
    $('#modal1').modal('open');
  });
  </script>
  </body>
</html>
