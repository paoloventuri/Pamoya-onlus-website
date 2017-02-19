<!DOCTYPE html>
<html lang="it">

<head>
    <title>Immagini di vita quotidiana - Associazione Pamoya Onlus</title>

    <?php include 'common\head.php';?>
</head>

<body>
    <div id="wrapper"> <meta name="viewport" content="width=device-width">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php include 'common\header.php';?>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include 'common\menu.php';?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Immagini di vita quotidiana</h1>
                        <?php slider('img\vita\vita_01', 1);?>
                        <br>
                        <br>
                        <?php slider('img\vita\vita_02', 2);?>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        <?php include 'common\footer.php';?>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
