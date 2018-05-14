<?php
require('../App/Autoloader.php');
require('../App/App.php');
require('../App/Database.php');
require('../App/Config.php');
Autoloader::register(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>House One</title>
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/Style.css" rel="stylesheet">

    <link href="vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="favicon.ico">
    
    <link href="vendor/bootstrap/css/w3.css" rel="stylesheet">
    <link href="css/timeline.css" rel="stylesheet">

        <!-- loader -->

    <link href="css/loader.css" rel="stylesheet">

    <script>document.documentElement.className = 'js';</script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" onload="myFunction()">
    
    <!-- LOADER -->
    <div id="loader_container" class="row" >
        <div >
        <div class="loader">
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
        </div>
            <header class="col-md-8 col-md-offset-2">
                <a href="#" id="loader_title"><h1 class="titre">House One</h1></a>
            </header> 
        </div>
    </div>

    <div style="display:none;" id="myDiv" class="animate-bottom">         
        <!-- Navigation -->
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div>
                <div class="navbar-header">
                    <a class="navbar-brand page-scroll" href="#page-top">
                        <i class="fa fa-play-circle"></i> <span class="light">House</span> One
                    </a>
                </div>

                <div class="collapse navbar-collapse navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">Présentation</a>
                        </li>
                         <li>
                            <a class="page-scroll" href="#picture">Photos</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#team">Team</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#time-line">Time Line</a>
                        </li>
                        <li>
                           <a  href="#" class="dropdown-toggle" data-toggle="dropdown">Ressources <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-level">
                            <li><a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLScazZf11H92N68tpr_9GMVIPVMqkmsRMvNjzXpvVW_0Lew0qQ/viewform?c=0&w=1">sondage</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Nous contacter</a>
                        </li>
                        <li>
                           
                            <a class="page-scroll"  href="#" class="dropdown-toggle" data-toggle="dropdown">Langage <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-level">
                            <li><a href="#">Français</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <div class="home-top" id="home-top">
            <canvas id="web-canvas" style="position: absolute;z-index:4;"></canvas>
            <div id="top-content"></div> 

            <header class="intro" >
            <div class="intro-body">
                    <img src="img/logo.jpg" >
                <div class="container">
                        
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

                        <h1 class="brand-heading">House One</h1>
                        <p class="Helvetica Neue">L'intelligence au service du confort</p>
                            <p class="intro-text">Un projet proposé par Polytech Annecy
                            <br></p>
                             <a href="#about" class="btn btn-circle page-scroll"><i class="fa fa-angle-double-down animated"></i>    
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </header>
        </div>
          
        <!-- About Section -->
        <section id="about" class="container content-section text-center">
            <div class="row">
                        <div class="titleDivider">
                            <div class="cst_textWrap ">
                                <h3 class="cst_title">
                                    A propos du projet
                                </h3>
                                <div class="S_cbdiv_TitleUnderline">
                                </div>
                            </div>
                        </div> 
            </div> 
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <p>HouseOne est un projet d’apprentissage développé dans le cadre de la formation Instrumentation - Automatique - Informatique de l’école de Polytech’ Annecy-Chambéry, au cours de la promotion 2020.</p>

                    <p>Ce projet a pour but de mettre en place différents équipements permettant une supervision intelligente pour un habitat tel qu’une maison et est ancré dans le domaine du Bâtiment Intelligent.</p>
                                            
                    <p>   Pour effectuer une installation de ce type, plusieurs technologies peuvent être employées telle que la Gestion Technique du Bâtiment. Dans notre cas nous utilisons la technologie des objets connectés qui permet d’implanter notre système sans effectuer de travaux.</p>
                                            
                    <p>   Ce système a une visée “domotique” et porte donc sur des particuliers, c’est pourquoi il se doit d’être facile d’utilisation. En effet, une simple site web avec authentification permet de relever des informations sur son chez-soi comme la consommation électrique à l’aide de prises et d’interrupteurs connectés. Celui-ci offre également la possibilité à l’utilisateur d’agir sur son habitat grâce à un système de déverrouillage distant de la porte d’entrée.</p>
                                            
                    <p>   HouseOne a pu voir le jour grâce aux compétences de 8 élèves ingénieurs issus de formations différentes offrant ainsi des compétences pluridisciplinaires, ainsi que par l’expertise du personnel d’encadrement.</p>
                        
                </div>
            </div>
        </section>

        <section >
            <div align="center">
                
                   <img src="img/iotecosystem.png" width="40%" height="40%">
            
            </div>
        </section>
      

       <!-- slideshow -->
            <section id="picture" class="container content-section text-center">
                    <div class="row">
                            <div class="titleDivider">
                                <div class="cst_textWrap ">
                                    <h3 class="cst_title">
                                        Photos  
                                    </h3>
                                    <div class="S_cbdiv_TitleUnderline">
                                    </div>
                                </div>
                            </div>
                        </div>
                <div class="w3-content w3-display-container">
                    <img class="mySlides" src="img/17.jpg" style="width:100%">
                    <img class="mySlides" src="img/5.jpg" style="width:100%">
                    <img class="mySlides" src="img/6.jpg" style="width:100%">
                    <img class="mySlides" src="img/IMG_20180502_155245.jpg" style="width:100%">
                    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
                </div>
            </section>


        <!-- team Section -->
        <section id="team" class="content-section text-center">
            <div class="row">
                <div class="titleDivider">
                    <div class="cst_textWrap ">
                        <h3 class="cst_title">
                            Team
                        </h3>
                        <div class="S_cbdiv_TitleUnderline">
                        </div>
                    </div>
                </div> 
            </div> 
            <div class="row memberscontainer">
                <?php 
              $result_membres = App::getDatabase()->query("SELECT * from Member");
                while($data = mysql_fetch_assoc($result_membres)) 
                { 
                    ?>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 memberTeamContainer">
                    <div class="cst_hovershadow_Griditem S_cbdiv_teambloc">
                        <img class="cst_divimage img-circle" src="<?php echo $data['chemin_acces_photo']; ?>"></img>
                    
                        <h4 class="cst_titlemembre"><?php  echo $data['nom'].' '.$data['prenom'].''; ?></h4>
                        <p class="cst_descriptionmembre"><?php echo $data['short_description']; ?>
                        </p>
                    </div>
                </div>
                <?php }; ?>         
            </div>
        </section>

        <!-- timeline Section -->
        <section id="time-line" class="content-section">
            <div class="row">
                <div class="titleDivider">
                    <div class="cst_textWrap ">
                        <h3 class="cst_title text-center">
                            Time-Line
                        </h3>
                        <div class="S_cbdiv_TitleUnderline">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container cst_container_base S_container_timeline">
                    <div class="cst_timeline cst_timelineStyle01 c-div S_cbdiv_timeline">
                        <ul class="cst_timelinelist c-list S_cblist_timeline">
                            <li class="cst_hovershadow_Griditem ">
                                <div class="cst_block_item c-div S_cbdiv_listitem">
                                    <div class="c-div S_cbdiv_LeftList">
                                        <p class="cst_date S_cbpara_TimelineDate">
                                            8 Février 2018
                                        </p>
                                    </div>
                                    <div class="cst_setting_item c-div S_cbdiv_TimelineBlock">
                                        <h4 class=" c-heading S_cbhead_TimelineBlocktitle">
                                            Réunion APP
                                        </h4>
                                        <div class="c-div S_cbdiv_TimelineDescr">
                                            <p class="S_cbdiv_TimelineDescrText">
                                                Une réunion de présentation est organisée pour nous expliquer
                                                <br> les différents sujets d'APP afin de faire une répartition des groupes.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="cst_hovershadow_Griditem  ">
                                <div class="cst_block_item c-div S_cbdiv_listitem">
                                    <div class="c-div S_cbdiv_LeftList">
                                        <p class="cst_date S_cbpara_TimelineDate">
                                            27 Février 2018
                                        </p>
                                    </div>
                                    <div class="cst_setting_item c-div S_cbdiv_TimelineBlock">
                                        <h4 class="c-heading S_cbhead_TimelineBlocktitle">
                                            Première séance APP
                                        </h4>
                                        <div class="c-div S_cbdiv_TimelineDescr">
                                            <p class="cst_description S_cbdiv_TimelineDescrText">
                                                Pendant cette séance nous avons partagé les idées entre
                                                <br> nous et à la fin de la séance nous avons effectué une répartition
                                                <br> des rôles pour les séances qui restent.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="cst_hovershadow_Griditem  ">
                                <div class="cst_block_item c-div S_cbdiv_listitem">
                                    <div class="c-div S_cbdiv_LeftList">
                                        <p class="cst_date S_cbpara_TimelineDate">
                                            13 Mars 2018
                                        </p>
                                    </div>
                                    <div class="cst_setting_item c-div S_cbdiv_TimelineBlock">
                                        <h4 class=" c-heading S_cbhead_TimelineBlocktitle">
                                            Recherches et documentation
                                        </h4>
                                        <div class="c-div S_cbdiv_TimelineDescr">
                                            <p class="cst_description S_cbdiv_TimelineDescrText">
                                                Répartition en deux sous-groupes par rapport aux deux
                                                <br> grandes parties de notre projet (Supervision et Energie)
                                                <br> afin de bien avancer dans les recherches.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="cst_hovershadow_Griditem  ">
                                <div class="cst_block_item c-div S_cbdiv_listitem">
                                    <div class="c-div S_cbdiv_LeftList">
                                        <p class="cst_date S_cbpara_TimelineDate">
                                            27 Mars 2018
                                        </p>
                                    </div>
                                    <div class="cst_setting_item c-div S_cbdiv_TimelineBlock">
                                        <h4 class="c-heading S_cbhead_TimelineBlocktitle">
                                            Détermination des objectifs
                                        </h4>
                                        <div class="c-div S_cbdiv_TimelineDescr">
                                            <p class="cst_description S_cbdiv_TimelineDescrText">
                                                Dans la troisième séance nous avons commencé l'étude du matériel,
                                                <br> et à la fin de la séance nous avons présenté nos idées au responsable
                                                <br> qui nous a proposé quelques modifications.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="cst_hovershadow_Griditem  ">
                                <div class="cst_block_item c-div S_cbdiv_listitem">
                                    <div class="c-div S_cbdiv_LeftList">
                                        <p class="cst_date S_cbpara_TimelineDate">
                                            3 Avril 2018
                                        </p>
                                    </div>
                                    <div class="cst_setting_item c-div S_cbdiv_TimelineBlock">
                                        <h4 class=" c-heading S_cbhead_TimelineBlocktitle">
                                            Gestion de projet
                                        </h4>
                                        <div class="c-div S_cbdiv_TimelineDescr">
                                            <p class="cst_description S_cbdiv_TimelineDescrText">
                                                La séance comporte une réunion de 45 minutes avec
                                                <br> les encadrants du projet portant sur la gestion de projet.
                                                <br> Après nous avons realisé une analyse de projet pour bien définir nos objectifs.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="cst_hovershadow_Griditem  ">
                                <div class="cst_block_item c-div S_cbdiv_listitem">
                                    <div class="c-div S_cbdiv_LeftList">
                                        <p class="cst_date S_cbpara_TimelineDate">
                                            10 Avril 2018
                                        </p>
                                    </div>
                                    <div class="cst_setting_item c-div S_cbdiv_TimelineBlock">
                                        <h4 class="c-heading S_cbhead_TimelineBlocktitle">
                                            Liste des matériels
                                        </h4>
                                        <div class="c-div S_cbdiv_TimelineDescr">
                                            <p class="cst_description S_cbdiv_TimelineDescrText">
                                                Dans cette séance nous nous sommes mis d'accord sur le matériel nécessaire
                                                <br> pour notre projet dans le but de choisir ce qui s'adapte
                                                <br> à nos idées.Nous avons également réalisé un sondage
                                                <br> puis nous avons commencé l'élaboration du cahier des charges.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="cst_hovershadow_Griditem  ">
                                <div class="cst_block_item c-div S_cbdiv_listitem">
                                    <div class="c-div S_cbdiv_LeftList">
                                        <p class="cst_date S_cbpara_TimelineDate">
                                            3 Mai 2018
                                        </p>
                                    </div>
                                    <div class="cst_setting_item c-div S_cbdiv_TimelineBlock">
                                        <h4 class="c-heading S_cbhead_TimelineBlocktitle">
                                            Rapport de projet
                                        </h4>
                                        <div class="c-div S_cbdiv_TimelineDescr">
                                            <p class="cst_description S_cbdiv_TimelineDescrText">
                                                L'avant dernière séance était destinée à la rédaction du rapport et de la présentation de notre
                                                <br> projet APP. Nous avons également effectué une réunion bilan sur le e-portfolio.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="cst_hovershadow_Griditem  ">
                                <div class="cst_block_item c-div S_cbdiv_listitem">
                                    <div class="c-div S_cbdiv_LeftList">
                                        <p class="cst_date S_cbpara_TimelineDate">
                                            15 Mai 2018
                                        </p>
                                    </div>
                                    <div class="cst_setting_item c-div S_cbdiv_TimelineBlock">
                                        <h4 class="c-heading S_cbhead_TimelineBlocktitle">
                                            Dernière séance APP
                                        </h4>
                                        <div class="c-div S_cbdiv_TimelineDescr">
                                            <p class="cst_description S_cbdiv_TimelineDescrText">
                                                Cette séance été prévue pour finaliser le rapport
                                                <br> de ce semestre sans oublier de ce mettre d'accord
                                                <br> sur nos objectifs pour le semestre prochain.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="container content-section text-center">
            <div class="row">
                <div class="titleDivider">
                    <div class="cst_textWrap ">
                        <h3 class="cst_title">
                            Nous contacter
                        </h3>
                        <div class="S_cbdiv_TitleUnderline">
                        </div>
                    </div>
                </div> 
            </div> 
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <p><a href="mailto:alexandre.boccagny@etu.univ-smb.fr">alexandre.boccagny@etu.univ-smb.fr</a>
                    <br> 
                    <a href="mailto:charles.chretien@etu.univ-smb.fr">charles.chretien@etu.univ-smb.fr</a>
                    <br> 
                    <a href="mailto:donovan.lebon@etu.univ-smb.fr">donovan.lebon@etu.univ-smb.fr</a>
                    </p>

                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://twitter.com/" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/alexandreiut" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/u/1/104057595852773726067" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>    
        <!-- Map Section -->
        <div><iframe style="width: 100%" style="height: 100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1650.3405859090146!2d6.157377812526042!3d45.92068665877599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478b09ca8fe2ed71%3A0xcc490cd01f5e3328!2sPolytech+Annecy-Chamb%C3%A9ry!5e0!3m2!1sfr!2sfr!4v1524661109487" width="1920" height="480" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    </div> 
    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Team HouseOne 2020</p>
        </div>
    </footer>
        <!-- Nécéssaire pour le fonctionnement des flèche  -->
</div>
    <script src="js/node_modules/vue/dist/vue.js"></script>
    <!-- loader -->
    <script src="js/loader.js"></script>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Theme JavaScript -->
    <script src="js/gmap.js"></script>


     <script>
        var slideIndex = 1;
        showDivs(slideIndex);
        
        function plusDivs(n) {
            showDivs(slideIndex += n);
        }
        
        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1} 
            if (n < 1) {slideIndex = x.length} ;
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none"; 
            }
            x[slideIndex-1].style.display = "block"; 
        }
        </script>


<!-- STARS -->
    <script src="js/starsfunctions.js"></script>
    <script src="js/stars.js"></script> 

</body>

</html>
