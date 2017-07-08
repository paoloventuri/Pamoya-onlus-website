<!DOCTYPE html>
<html lang="it">

<head>
    <?php define('DOCROOT', realpath(dirname(__FILE__)).'/'); ?>
    
    <title>Il progetto - Associazione Pamoya Onlus</title>

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
                    <li role="presentation" class="active"><a href="#">Il Progetto</a></li>
                    <li><a href="foto_ospedale.php" title="">Fotografie dell'ospedale</a></li>
                    <li><a href="relazioni.php" title="">Relazioni Medici</a></li>
                    <li><a href="ipotesi_sviluppo.php" title="">Ipotesi di sviluppo</a></li>
                    <li><a href="bilancio_ikelu.php">Bilancio ospedale</a></li>
                </ul>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <p>
                            <br>
                            <div id="centr">
                                <h3>PROGETTO IN COLLABORAZIONE CON:</h3>
                                <img src="img/ikelu/ikelu_02.jpg" oncontextmenu="return false;">
                                <a href="http://www.sicomoronlus.org">Sicomoro ONLUS</a>
                                <img src="img/ikelu/ikelu_03.jpg" oncontextmenu="return false;">
                                <a href="http://www.rotary2050.org">Rotary - Distretto 2050</a>
                            </div>
                            <video class="center" width="450" height="320" controls>
                            <source src="img/video/pamoya-video1.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                            </video>
                            <br>
                            Nel villaggio di Ikelu, tra le cittadine di Njombe e Makambako, è sorto un ospedale che copre un'area di circa 150-200 mila abitanti. I lavori di costruzione iniziati nel settembre 2004 sono finalmente al termine. I reparti di maternità, ostetricia e odontoiatria sono quelli in fase più avanzata ai quali seguiranno quelli di chirurgia, pediatria e cura per l'AIDS.<br>
                            Le attività che impegneranno gli attori coinvolti nel progetto sono:<br>
                            <lu>
                                <li>Costruzione di una struttura ospedaliera completa che sarà in grado di fornire assistenza sanitaria ai residenti nella zona di Mtwango.</li>
                                <li>Sostegno all'avviamento dell'ospedale, attraverso la permanenza costante di un team di medici volontari italiani che si alterneranno per un periodo di 2 anni, accanto a loro lavorerà un team di figure sanitarie locali.</li>
                                <li>Formazione di personale locale medico e paramedico finalizzata a una gestione sanitaria ed amministrativa autonoma.</li>
                                <li>Sensibilizzazione e coinvolgimento della popolazione locale all'utilizzo ottimale dei servizi offerti.</li>
                            </lu>
                            <br>
                            Il progetto si svolge nella zona sud-ovest della Tanzania a circa 800 km da DAR ES SALAAM e a 200 km a sud di IRINGA.<br>
                            Esiste a 30 km un &quot;ospedale&quot; Luterano in condizioni fatiscenti e pietose.<br>
                            Le condizioni della popolazione sono di povertà e in alcuni casi ancora si rivolgono allo stregone.<br>
                            L'area di utilizzo dell'ospedale è di 150-200 mila abitanti. L'ospedale &quot;vero&quot; più vicino è a 150 km (ospedale della Consolata) e nei periodi delle piogge è molto difficoltoso e a volte impossibile da raggiungere.<br>
                            La struttura ospedaliera del progetto prevede letti di maternità, chirurgia, pediatria, medicina, vari ambulatori ed un pronto soccorso accettazione, un settore specifico per pazienti affetti da HIV-AIDS, ambulatorio odontoiatrico, servizio di laboratorio, farmacia, radiologia, mensa, ecc.<br>
                            L'organizzazione Pamoya supporta l'ospedale fornendo la strumentazione ospedaliera e supportando i tecnici nell'installazione e nell'utilizzo della stessa.
                            Sicomoro ONLUS invece invia i medici che dedicano le loro vacanze per supportare i medici locali.
                            L'ospedale sostenuto da Pamoya e Rotary Club ha inoltre acquistato un'auto che è stata adibita ad ambulanza.
                            Sempre con l'aiuto di Pamoya è stato possibile l'acquisto dei pannelli solari e di un generatore di emergenza che si affiancano alla fornitura elettrica standard.<br>
                        </p>
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
