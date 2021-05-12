<!DOCTYPE html>
<html lang="it">

<head>
    <?php define('DOCROOT', realpath(dirname(__FILE__)).'/'); ?>

    <title>Ultime notizie da Ikelu - Associazione Pamoya Onlus</title>

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
                    <li role="presentation" class="active"><a href="#">Ultime notizie</a></li>
                    <li><a href="foto_ospedale.php">Fotografie dell'Ospedale</a></li>
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
                            <h3 id="centr">IMPIANTO EOLICO</h3>
                            <p>
                                Al fine di completare una struttura già molto funzionale, l'Associazione Pamoya sta realizzando alcune opere importanti presso l'ospedale di Ikelu in Tanzania. <br>
                                Per far fronte al continuo aumento delle richieste di ricovero presso il reparto di Neonatologia, si è reso indispensabile la costruzione di un nuovo padiglione esclusivamente per neonati prematuri.<br>
                                Entro la fine di questo anno 2021, verrà realizzato un impianto eolico di piccole dimensioni (7 kwh) al fine di sostenere le batterie che forniscono energia elettrica all'Ospedale durante le ore di scarsa insolazione e durante la notte. <br>
                                I due pacchi di batterie possono "immagazzinare" 200 Kw di energia, ma al fine di salvaguardare dall'usura le batterie stesse, ne viene prelevata solo il 50%. <br>
                                Visti i consumi in costante aumento, sopratutto durante le ore notturne, abbiamo.optato per la soluzione "eolica", considerato che la zona è molto ventilata, e che da rilevazioni effettuate durante un periodo di 6 mesi, l'impianto dovrebbe produrre energia per il 90% nelle 24 ore, sopratutto nella seconda metà delle ore notturne.
                            </p>
                            <br>
                            <h3 id="centr">NUOVA CAPPELLA</h3>
                            <p>
                                L'Ospedale di Ikelu era sprovvisto di un seppur minimo spazio per la pratica religiosa del personale. <br>
                                Considerato che al mattino prima dell'inizio del servizio è consuetudine che il personale stesso, composto anche di un numero considerevole di religiose, si riunisca per un momento di preghiera, il C.D. di "Pamoya", sentita la direzione dell'Ospedale, il Vescovo della Diocesi di Njombe e naturalmente il parroco don Tarcisio, ha deliberato di costruire una piccola cappella (100mq.) all'interno della zona Ospedale. <br>
                                La struttura portante in metallo è stata costruita in Vallecamonica. Verrà inviata tramite container nei prossimi mesi, e montata, imprevisti permettendo nei mesi di Ottobre/ Novembre 2021. <br>
                                Nei mesi di Marzo/Aprile durante la nostra presenza a Ikelu, abbiamo predisposto i basamenti in c.a. sui quali fissare la struttura portante.
                            </p>
                            <br>
                            <?php slider('img/ikelu/ikelu_08', 1);?>
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
