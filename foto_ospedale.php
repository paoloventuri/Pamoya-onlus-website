<!DOCTYPE html>
<html lang="it">

<head>
    <?php define('DOCROOT', realpath(dirname(__FILE__)).'/'); ?>

    <title>Fotografie dell'ospedale - Associazione Pamoya Onlus</title>

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
                <ul class="nav nav-tabs">
                    <li><a href="progetto.php">Il Progetto</a></li>
                    <li><a href="notizie.php" title="">Ultime notizie</a></li>
                    <li role="presentation" class="active"><a href="#">Fotografie dell'Ospedale</a></li>
                    <li><a href="relazioni.php">Relazioni Medici</a></li>
                    <li><a href="ipotesi_sviluppo.php">Ipotesi di sviluppo</a></li>
                    <li><a href="bilancio_ikelu.php">Bilancio ospedale</a></li>
                    <li><a href="numeri_ikelu.php">I numeri dell'ospedale</a></li>
                </ul>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <p>
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
                        </p>
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
