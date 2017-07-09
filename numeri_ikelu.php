<!DOCTYPE html>
<html lang="it">

<head>
    <?php define('DOCROOT', realpath(dirname(__FILE__)).'/'); ?>

    <title>I numeri dell'ospedale - Associazione Pamoya Onlus</title>

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
                    <li><a href="foto_ospedale.php">Fotografie dell'ospedale</a></li>
                    <li><a href="relazioni.php">Relazioni Medici</a></li>
                    <li><a href="ipotesi_sviluppo.php">Ipotesi di sviluppo</a></li>
                    <li><a href="bilancio_ikelu.php">Bilancio dell'ospedale</a></li>
                    <li role="presentation" class="active"><a href="#">I numeri dell'ospedale</a></li>
                </ul>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                    <h2>I numeri del St Joseph Hospital di Ikelu - Anno 2016</h2>


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
