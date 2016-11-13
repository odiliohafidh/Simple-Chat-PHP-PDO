<?php
    include("konek.php");
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Chat Ndes</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME  CSS -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>


    <div class="container">
        <div class="row pad-top pad-bottom">


            <div class=" col-lg-6 col-md-6 col-sm-6">
                <div class="chat-box-div">
                    <div class="chat-box-head">
                        Chat Ndes
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="fa fa-cogs"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="index.php"><span class="fa fa-refresh"></span>&nbsp;Refresh</a></li>
                                    <li class="divider"></li>
                                    <!--<li><a href="#"><span class="fa fa-circle-o-notch"></span>&nbsp;Logout</a></li>-->
                                </ul>
                            </div>
                    </div>
                    <div class="panel-body chat-box-main">
                        <?php
                            $st_tmpil = $con->prepare('SELECT * FROM isichat');
							$st_tmpil->execute();
							
                            while ($data = $st_tmpil->fetch()) {
								extract($data);
                            ?>
                        <!--Looping-->
                        <div class="chat-box-left">
                            <?php echo $data['chat']; ?>
                        </div>
                        <div class="chat-box-name-left">
                            <img src="assets/img/user.png" alt="bootstrap Chat box user image" class="img-circle" />
                            -  <?php echo $data['nama']; ?>
                        </div>
                        <hr class="hr-clas" />
                        <!--Looping-->
                        <?php
                        }
                        ?>
                    </div>

                    <!--Mau masukin nama dan komen-->
					<div class="chat-box-footer">
                    <form action="post.php" method="post">
                    
                        <div class="input-group">
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda">
                        </div>
                        <div class="input-group">
                            <textarea class="form-control" name="chat">Isi Chat Anda
                            </textarea>
                            <span class="input-group-btn">
                                <button class="btn btn-info" type="submit" name="tambah" value="tambah">SEND</button>
                            </span>
                        </div>
                   
                    </form>
					 </div>
                    <!--Mau masukin nama dan komen-->
                    
                </div>

            </div>

        </div>
    </div>


    <!-- USING SCRIPTS BELOW TO REDUCE THE LOAD TIME -->
    <!-- CORE JQUERY SCRIPTS FILE -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- CORE BOOTSTRAP SCRIPTS  FILE -->
    <script src="assets/js/bootstrap.js"></script>
</body>

</html>