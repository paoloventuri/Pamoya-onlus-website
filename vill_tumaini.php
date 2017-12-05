<!DOCTYPE html>
<html lang="it">

<head>
    <?php define('DOCROOT', realpath(dirname(__FILE__)).'/'); ?>

    <title>Villaggio Tumaini - Associazione Pamoya Onlus</title>

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
                        <h1 class="page-header">Il villaggio della speranza</h1>

                        <h4>
                            Segui il <a href="https://www.facebook.com/Centro-orfani-Tumaini-Kituo-cha-watoto-Tumaini-1899965703568591">Centro orfani Tumaini - Kituo cha watoto Tumaini</a> su
                            <a href="https://www.facebook.com/Centro-orfani-Tumaini-Kituo-cha-watoto-Tumaini-1899965703568591">
                                <img src="img/loghi/facebook.png", oncontextmenu="return false;">
                            </a>
                        </h4>
                        <iframe class="center" width="560" height="315" src="https://www.youtube.com/embed/qavgpYTi5dE?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                        <br>
                        <p>
                            Il &quot;Villaggio Tumaini&quot; ha iniziato la sua attività nel 2002. Il nome della prima bambina ospitata era Tumaini, che nella lingua locale significa &quot;speranza&quot;.<br>
                            Attualmente accoglie 56 bambini dagli 0 ai 14 anni, più 22 tra scuola primaria privata (5) e scuole secondarie/professionali. La maggior parte degli ospiti sono orfani di genitori, morti a causa dell'AIDS, alcuni anche sieropositivi… Ci sono anche dei neonati.<br>
                            Il villaggio è formato da 9 case-famiglia; ciascuna di esse ospita non più di 9 o 10 bambini di età diversa. Sono assistiti da 2 o 3 &quot;mamme-ragazze&quot; che passano l'intera giornata con i bambini.<br>
                            Il personale è composto da 20/22 &quot;mamme&quot;, 5 operai e 5 suore.<br>
                            Le case sono gestite in autonomia e sono autosufficienti. La verdura quotidiana è garantita dal proprio orto. La sufficienza alimentare della comunità è assicurata, invece, dalla coltivazione di un discreto appezzamento di terreno agricolo. Tutti gli ospiti, che sono in grado, coltivano l'orto, lavorano il campo comune e accudiscono gli animali domestici.<br>
                            La responsabile della comunità è una suora che, con la qualifica di infermiera professionale, assicura l'assistenza sanitaria di prima necessità. Le altre religiose si occupano dell'attività agricola, della scuola materna e delle case-famiglia.<br>
                            La scuola materna è frequentata anche da bambini dei villaggi vicini.<br>
                            I bambini, in età scolare, frequentano le scuole pubbliche. I rapporti con le famiglie e i villaggi da cui provengono sono costanti: visite periodiche e soggiorno durante le vacanze scolastiche.<br>
                            Ogni ospite è accompagnato da un libretto personale, con fotografia, che documenta il suo percorso educativo, la maturazione umana e culturale e le tappe importanti della vita nella comunità.<br>
                            Una volta al mese uno psicologo incontra le mamme e i ragazzi più grandi. Gli adolescenti possono esporre i loro problemi, ed essere così aiutati a sviluppare in modo corretto le relazioni con i coetanei e con gli adulti.<br>
                            Alla comunità si affiancano, ogni anno, tre o quattro ragazzi del &quot;servizio civile&quot;. Essi svolgono varie attività: assistenza scolastica, visite guidate alla locale latteria e alle piantagioni di the e di riso. I ragazzi, accompagnati dai volontari, amano visitare la latteria del posto: scattano fotografie, fanno disegni e scrivono interessanti racconti.<br>
                            A Natale e nel mese di agosto i ragazzi, con la guida dei volontari, offrono alla comunità un saggio delle loro attitudini di recitazione e di canto. Intrattenimenti sempre molto applauditi.<br>
                            Le case già esistenti possono ospitare i bambini ammalati, i volontari e gli ospiti.<br>
                            La nuova casa in costruzione sarà riservata in modo particolare agli adolescenti. Quelli che frequentano la scuola secondaria possono prima studiare indisturbati, poi dare una mano ai più piccoli durante il pranzo ed il gioco.<br>
                            &quot;Maestra&quot; Fausta ha la responsabilità di tutto il villaggio e: gestisce inoltre una quarantina di scuole materne del circondario, aggiorna le 80 &quot;insegnanti&quot;, distribuisce le paghette, organizza per gli ammalati incontri con gli esperti…<br>
                            In particolare si prende cura delle necessità di circa 200 sieropositivi a cui assicura gli alimenti, i viaggi in ospedale, l'istruzione dei figli ed il microcredito.<br>
                            La promiscuità, la cultura tribale, la mancanza di istruzione e la fiducia negli stregoni, che si arricchiscono sulla pelle di gente malata, sono le cause principali della crescita del numero dei sieropositivi e, naturalmente, delle loro morti precoci.<br>
                        </p>
                        <?php slider('img/tumaini', 1);?>
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
