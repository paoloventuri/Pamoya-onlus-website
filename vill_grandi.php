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
