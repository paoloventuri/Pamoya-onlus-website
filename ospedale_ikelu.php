<!DOCTYPE html>
<html lang="it">

<head>
    <?php define('DOCROOT', realpath(dirname(__FILE__)).'/'); ?>
    
    <title>Ospedale di Ikelu - Associazione Pamoya Onlus</title>

    <?php include DOCROOT.'common/head.php';?>
</head>

<body>
    <div id="wrapper"> <meta name="viewport" content="width=device-width">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php include DOCROOT.'common/header.php';?>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include DOCROOT.'common/menu.php';?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Ospedale di Ikelu: un sogno che si realizza!!!</h1>
                        <p>
                        Finalmente, grazie al lavoro dei numerosi volontari che si sono avvicendati in questi anni e grazie ai numerosi sostenitori, <b><u>è stato inaugurato in data 7 ottobre 2011 l'ospedale di Ikelu nel sud della Tanzania</u></b>. A gennaio 2011 è stato firmato un accordo con il partner locale di Sicomoro ONG e con le autorità governative locali che si occuperanno di portare avanti le pratiche per la registrazione dell'ospedale e renderlo a tutti gli effetti attivo.  Nei prossimi 2 anni l'Associazione Pamoya in collaborazione con l'<a href="http://www.sicomoronlus.org">Associazione Sicomoro</a> si impegneranno di fornire il materiale ospedaliero necessario, l'attrezzature specialistica, a garantire la presenza di un team di medici volontari che affiancherà il personale sanitario locale e a fornire consulenza sull'attività e gestione dell'ospedale dal momento del suo avvio fino alla piena autonomia locale.
                        <video class="center" width="450" height="320" controls>
                            <source src="img/video/pamoya-video1.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div id="centr">
                            <h3>PROGETTO IN COLLABORAZIONE CON:</h3>
                            <img src="img/ikelu/ikelu_02.jpg" oncontextmenu="return false;">
                            <a href="http://www.sicomoronlus.org">Sicomoro ONLUS</a>
                            <img src="img/ikelu/ikelu_03.jpg" oncontextmenu="return false;">
                            <a href="http://www.rotary2050.org">Rotary - Distretto 2050</a>
                        </div>
                        </p>
                        <br>
                        <h3 id="centr">OSPEDALE DI IKELU AL LAVORO</h3>
                        <?php slider('img/ikelu/ikelu_04', 1);?>
                        <br>
                        <h3 id="centr">7 OTTOBRE 2011: INAUGURAZIONE OSPEDALE DI IKELU</h3>
                        <?php slider('img/ikelu/ikelu_06', 2);?>
                        <br>
                        <h3 id="centr">LE VARIE FASI DELLA COSTRUZIONE</h3>
                        <?php slider('img/ikelu/ikelu_07', 3);?>
                        <br>
                        <br>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        <?php include DOCROOT.'common/footer.php';?>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
