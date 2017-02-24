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
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Scuole materne</h1>
                        <p>
                            Uno degli aspetti delle nostre attività a livello socio-culturale sono le scuole materne. Poiché crediamo molto nell'istruzione fin dai primi anni di vita del bambino, abbiamo ritenuto cosa buona aprire delle scuole materne in tutti i villaggi della Parrocchia, anzi delle tre Parrocchie gestite per un po' di tempo da Don Tarcisio e dai suoi collaboratori locali. Solo nelle città si sapeva che ci fosse una scuola anche per i piccoli, nei villaggi più sperduti nessuno ne era a conoscenza. I bambini passavano la giornata fuori in mezzo al fango in caso di pioggia, o tra i rifiuti di ogni tipo.<br>
                            Abbiamo iniziato ad aprire le scuole in Parrocchia e poi piano piano anche nei villaggi lontani. Ci è voluto molto tempo, poiché i genitori e gli amministratori locali ne capissero l'importanza, ed anche se vi è ancora molto da fare, possiamo dire che ci sono ora dei buoni riscontri.<br>
                            Il primo passo indispensabile sono stati gli incontri concordati con il catechista del posto, il quale con il capo villaggio indice una riunione di tutti gli abitanti del luogo. Nel giorno stabilito ci ritroviamo all'aperto, sotto un albero, per informare e far capire l'importanza dell'istruzione, aiutati da uno psicologo locale.<br>
                            Per non pesare sul magro bilancio delle famiglie, assicuriamo che il materiale necessario sarà messo a disposizione dalla Missione: il locale, a volte i banchi, la lavagna, le panche, il materiale scolastico, la pentola per cucinare l'uji (pappetta tipo semolino),ma soprattutto non sarà a loro carico il compenso per le maestre. Queste ultime non sono tutte diplomate, la maggioranza la prepariamo noi con incontri di formazione e aggiornamento mensili e intensivi, tre/quattro giorni o una settimana durante le vacanze. Si scelgono ragazze di fiducia, con una certa serietà, che abbiano frequentato la VII (terza media) e magari la IV superiore (fine superiori).<br>
                            I risultati sono soddisfacenti: 67 scuole materne per 150 maestre circa, frequentate da più di 3.000 bambini con una spesa mensile intorno agli 8.000.000 di scellini (1.000 scellini equivalgono a circa 0,50 €).
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
