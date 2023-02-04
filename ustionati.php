<!DOCTYPE html>
<html lang="it">

<head>
   <?php define('DOCROOT', realpath(dirname(__FILE__)).'/'); ?>

   <title>Progetto Ustionati - Associazione Pamoya Onlus</title>

   <?php include DOCROOT.'common/head.php';?>
</head>

<body>
   <div id="wrapper">
      <meta name="viewport" content="width=device-width">
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
                  <h1 class="page-header">Progetto Ustionati</h1>
                     <p>
                        Il Saint Joseph Hospital si trova in una zona della Tanzania in cui non fa mai particolarmente caldo, specialmente nei mesi da Giugno ad Agosto, e in cui ancora molte famiglie, specialmente nei villaggi, si scaldano utilizzando fuochi liberi, per questo motivo nella pediatria dell’ospedale vengono ricoverati spesso bambini che purtroppo sono rimasti vittima del fuoco, o dell’acqua bollente.
                        <br>
                        Da anni Pamoya Onlus sostiene completamente il ricovero di tutti questi bambini, e grazie alla collaborazione con diversi Medici Specialisti italiani ha migliorato le cure rivolte a questi piccoli pazienti.
                        <br>
                        Il ricovero di un bambino ustionato può durare un paio di settimane ma anche più di un mese, e poi per altri due mesi continuano le visite di follow up e medicazioni. 
                        <br>
                        Possono essere effettuate varie procedure per curare queste lesioni, come la tecnica dello skin graft, e possono essere impiegati molti farmaci.
                        <br>
                        Pamoya si prende carico di tutte le spese e questo grazie ai donatori.
                        Nel 2022 40 bambini ustionati sono stati curati grazie all’aiuto di Pamoya Onlus.
                        <br>
                        <br>
                        <h4>
                           Per donare e sostenere il progetto<br>
                           Causale:<br>
                           Progetto Ustionati<br>
                           Coordinate Bancarie:<br>
                           BANCA POPOLARE DI SONDRIO Filiale di Edolo (BS)<br>
                           ABI: 05696<br>
                           CAB: 54470<br>
                           CIN: O<br>
                           IBAN: IT51O0569654470000055555X61<br>
                        </h4>
                     </p>
                     <div class="center">
                        <img src="img/ustionati/ustionati_01.jpg" width="560" oncontextmenu="return false;">
                        <img src="img/ustionati/ustionati_02.jpg" width="560" oncontextmenu="return false;">
                     </div>
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