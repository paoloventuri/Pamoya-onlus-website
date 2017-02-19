<!DOCTYPE html>
<html lang="it">

<head>
    <?php define('DOCROOT', realpath(dirname(__FILE__)).'/'); ?>
    
    <title>Gestione scuole - Associazione Pamoya Onlus</title>

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
                    <li><a href="distr_viveri.php">Distribuzione dei viveri</a></li>
                    <li role="presentation" class="active"><a href="#" title="">Gestione delle scuole</a></li>
                </ul>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <p>
                            <br>
                            Tra le varie attività gestite da Fausta c'è anche quella delle scuole materne rurali aperte da Fausta e Don Tarcisio, questo comporta incontrare una volta al mese le mamme-maestre, che sono circa 80, formate attraverso degli incontri e aggiornamenti che possono durare a volte anche settimane, tenuti da Fausta,  per dare loro la &quot;paghetta&quot;, per controllare i registri scolastici dove vengono annotate le presenze dei bambini, verificare le materie e gli argomenti trattati ogni giorno, infatti ogni maestra deve recarsi da Fausta con i propri registri compilati e firmati anche dal catechista e dal Direttore della scuola elementare, in quanto la gestione di queste scuole materne avviene in collaborazione con quelle elementari. Nelle scuole dove i bambini sono molti le maestre sono 3, altrimenti 2 per scuola. Queste maestre sono ragazze molto fortunate che hanno la possibilità di percepire una somma mensile di guadagno, ringraziano sempre Fausta dicendo &quot;Grazie che ci hai cambiato la vita&quot;, che grazie a questo lavoro hanno potuto togliere la paglia dal loro tetto e mettere la lamiera, hanno potuto mandare i loro figli alla scuola primaria, possono andare in ospedale quando serve. Fausta è coadiuvata da una suora in questa gestione. I bambini iscritti e frequentanti queste scuole sono circa 2.400 al mese, questo è un buonissimo risultato e punto di partenza per far comprendere l'importanza della scuola, questi bambini avranno sicuramente meno difficoltà e saranno più pronti per affrontare ed inserirsi nelle scuole elementari. In Africa la scuola materna non esiste, e Fausta vista la sua lunga esperienza di Maestra d'asilo in Italia, sa l'importanza di questa scuola, infatti incontra spesso i genitori e i capi villaggi per spiegare loro il valore della scuola in generale ma soprattutto quella della scuola materna, tanti capi villaggi hanno capito già l'importanza di queste scuole, infatti hanno potuto constatare come i bambini che hanno frequentato la materna sono diversi e avvantaggiati da quelli che invece non hanno potuto frequentare e per questo chiedono di poterle aprire in tutti i villaggi, ovviamente Fausta cerca di fare quello che può in quanto la spesa non è indifferente, al mese, solo di paghette spende circa 2.700.000 scellini.
                        </p>
                        <br>
                        <?php slider('img/scuole', 1);?>
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
