<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
   <link rel="stylesheet" href="css.css"></link>
   <script src="jquery/jquery-2.1.3.js"></script>
  
</head>
<body>
<div class="container">
   <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="#" method="post">
          <fieldset>
            <legend class="text-center">Commentaire</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Nom</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
   <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
   </div>
</div>
</body>
</html>