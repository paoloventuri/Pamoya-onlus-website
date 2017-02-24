<!DOCTYPE html>
<html lang="it">

<head>
    <?php define('DOCROOT', realpath(dirname(__FILE__)).'/'); ?>
    
    <title>Distribuzione viveri - Associazione Pamoya Onlus</title>

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
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Distribuzione dei viveri</h1>
                        <p>
                            Questa attività è stata avviata da Fausta già da parecchi anni, quasi tutte le persone che vengono in questi giorni di distribuzione sono sieropositive oppure orfane, in situazioni di alto disagio, quindi Fusta ha deciso di dare loro le cose essenziali come per esempio; sapone, olio, zucchero, sale, farina proteica fatta da Fausta mescolando vari ingredienti, pesciolini secchi che a loro piacciono tanto. Questo succede una volta al mese, una giornata è dedicata ai poveri del villaggio, un'altra giornata invece per quelli che vengono da villaggi più lontani sempre della Parrocchia di Mtwango, a volte da 10, 11 o 12 Km. di distanza, a piedi naturalmente. In questa attività Fausta si fa aiutare da alcune persone del posto, hanno formato un gruppo che si impegna a svolgere questo compito mensilmente. Purtroppo succedeva che fra le persone bisognose si rubassero le cose distribuite, questo gruppo ha capito che per evitare ciò doveva mettere un certo ordine, suddividendosi così i compiti, ognuno di loro distribuisce un articolo e alla fine i poveri devono passare da Fausta che registra su di una tabella i beni consegnati, occasione anche per parlare con loro, c'è sempre qualcosa da dire e loro hanno sempre qualcosa da chiedere.
                        </p>
                        <br>
                        <?php slider('img/viveri', 1);?>
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
