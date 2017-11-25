<!DOCTYPE html>
<html lang="it">

<head>
    <?php define('DOCROOT', realpath(dirname(__FILE__)).'/'); ?>
    <title>Adotta un lettino - Associazione Pamoya Onlus</title>

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
                        <h1 class="page-header">Un lettino pediatrico</h1>
                        <p>
                        Il progetto denominato &quot;Un lettino pediatrico&quot; è destinato ad aiutare i bambini ustionati e sottratti alle cure in ospedale per la mancanza di disponibilità economica.<br>
                        Nei primi otto mesi dell'anno 2017 sono già stati curati con esito positivo 25 bambini di età inferiore ai 6 anni.<br>
                        Il costo per un mese di degenza più gli alimenti della mamma che lo assiste ammonta a circa 100€.<br>
                        <br>
                        Per partecipare a questo progetto basta versare un piccolo contributo a:<br>
                        <h4><center>Associazione Pamoya-Onlus<br>IBAN: IT98S0834054710000000200628<br>Causale: adotta un lettino</center></h4><br>
                        <img class="center" src="img/donazioni/donazioni_02.jpg" oncontextmenu="return false;" height="600">
                        </p>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#wrapper -->
        <?php include DOCROOT.'common/footer.php';?>
    </div>
    <!-- /#page-wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
