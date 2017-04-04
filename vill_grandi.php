<!DOCTYPE html>
<html lang="it">

<head>
    <?php define('DOCROOT', realpath(dirname(__FILE__)).'/'); ?>
    
    <title>Villaggio Grandi - Associazione Pamoya Onlus</title>

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
                        <h1 class="page-header">Villaggio Grandi</h1>
                        
                        <h4>
                            Segui il <a href="https://www.facebook.com/Kituo-cha-Watoto-Yatima-Renato-Grandi-1508062396178899">Kituo cha Watoto Yatima Renato Grandi</a> su 
                            <a href="https://www.facebook.com/Kituo-cha-Watoto-Yatima-Renato-Grandi-1508062396178899">
                                <img src="img/loghi/facebook.png", oncontextmenu="return false;">
                            </a>
                        </h4>

                        <p>
                            Il villaggio "Renato Grandi" è stato inaugurato l'8 Maggio 2013 per volontà di don Tarcisio Moreschi e di Fausta Pina in collaborazione con la Fondazione Renato Grandi.<br>
                            Ospita bambini orfani, bambini con problematiche familiari e ragazze madri. Qui i minori vengono accolti in un clima che è lontano dall'idea di orfanotrofio, un clima molto più simile a quello di una grande famiglia allargata. I bambini sono suddivisi nelle 8 casette presenti, costruite riprendendo il modello di abitazione tanzaniana, in ognuna delle quali sono presenti anche due o tre ragazze stipendiate che si prendono cura dei bimbi e fanno loro da madri.<br>
                            I bambini accolti vengono seguiti nel loro percorso scolastico, che comprende anche delle lezioni extra svolte nei pomeriggi. Durante il resto della giornata, ognuno di loro è impegnato, a seconda dell'età, in piccoli lavori domestici, oltre che in attività di svago, gioco e apprendimento in creatività. Mission del villaggio "Grandi" è quello di insegnare ai bambini l'importanza del prendersi cura l'uno dell'altro, crescendo in armonia con chi ci sta a fianco. Importante sotto questo aspetto è il sostegno reciproco che i bambini si danno soprattutto nelle attività quotidiane, oltre che nell'aiuto che i più grandi forniscono agli ospiti più piccoli. Aspetto molto bello della vita nel villaggio è la constatazione che tutti i bambini, scevri dai pregiudizi degli adulti, convivono con naturalezza con chi, a causa dell'Aids e della disabilità, presenta delle differenze che, invece di rappresentare un motivo di isolamento, divengono dei punti di forza sia dei singoli che del gruppo.<br>
                            Ad aprile 2017 i bambini presenti al centro sono 93 e hanno un'età compresa tra i pochi mesi e i 15 anni. Oltre a loro, ci sono altri 7 tra ragazzi e ragazze che, terminato il percorso della scuola primaria, frequentano le scuole secondarie e professionali e rientrano al centro soltanto durante i periodi di vacanza.
                            <br>
                            <img class="center" src="img/grandi/grandi_13.jpg" oncontextmenu="return false;">
                        </p>
                        <?php slider('img/grandi', 1);?>
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
