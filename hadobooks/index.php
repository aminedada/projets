<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Hadobooks</title>
   <link type="image/x-icon" href="image/icon_1009.png" rel="shotcut icon"></link>
    <!-- Bootstrap Core CSS -->
    <link href="startbootstrap-grayscale-1.0.2/css/bootstrap.min.css" rel="stylesheet"></link>

    <!-- Custom CSS -->
    <link href="startbootstrap-grayscale-1.0.2/css/grayscale.css" rel="stylesheet"></link>
    
    <link href="startbootstrap-grayscale-1.0.2/css/le_css.css" rel="stylesheet" type="text/css"></link> 

    <link href="startbootstrap-grayscale-1.0.2/css/menu.css" rel="stylesheet" type="text/css"></link> 

    <!-- Custom Fonts -->
    <link href="startbootstrap-grayscale-1.0.2/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"></link>
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css"></link>
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"></link>

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file: -->
    <!--[if lt IE 9]>-->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
       <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i> <span class="light">HADOBOOKS</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    <li>
                        <a class="page-scroll" href="#about">A propos</a>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Hadobooks</br></br></h1>
                        <p class="intro-text"></p>
                         <form class="form-wrapper" method="POST" action="etape.php">
                            <input type="text" placeholder="Entrez votre recherche (livres, films)" name="isbn1">
                                <button type="submit">Search</button>
                            </input>    
                        </form>

                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>A PROPOS</h2>
                
   <font color="black"><p>Bienvenue sur Hadobooks !</br>Ici vous trouverez un catalogue sur vos livres préferés mais aussi des films et des musiques téléchargeable en toute legalités</br>Bonne navigation ! :)</p>
</font>
                <div class="img">
                    <a target="_blank" href="startbootstrap-grayscale-1.0.2/img/ludo.jpg">
                        <img src="startbootstrap-grayscale-1.0.2/img/ludo.jpg" alt="ludo" class="img-circle" width="140" height="140">
                        <font color="darkblue"><p>Ludovic Cron-</br>Peverelly</br>Front End</p></font>
                    </a>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    <a target="_blank" href="startbootstrap-grayscale-1.0.2/img/nordine.jpg">
                        <img src="startbootstrap-grayscale-1.0.2/img/nordine.jpg" alt="ludo" class="img-circle" width="140" height="140">
                        <font color="darkblue"><p>Nordine Bouti</br>Back End</p></font>
                      </a>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    <a target="_blank" href="startbootstrap-grayscale-1.0.2/img/amine.jpg">
                        <img src="startbootstrap-grayscale-1.0.2/img/amine.jpg" alt="ludo" class="img-circle" width="140" height="140">
                        <font color="darkblue"><p>Amine Friaa</br>Back End</p></font>
                      </a>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    <a target="_blank" href="startbootstrap-grayscale-1.0.2/img/john.jpg">
                        <img src="startbootstrap-grayscale-1.0.2/img/john.jpg" alt="ludo" class="img-circle" width="140" height="140">
                        <font color="darkblue"><p>Jonathan Ekoka</br>Eyombwan</br>Front End</p></font>
                      </a>          
                </div>        
            </div>
        </div>
    </section>
</body>

</html>
