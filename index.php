<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Google Imagenes</title>
    <?php require_once "./dependencias.php"?>
    <?php
        require_once "./contenido.php";
        $datos = contenido();
    ?>
</head>
<body style="background-color:blueviolet; color:white">
    <div class="container">
        <h1>Presentacion de imagenes tipo google</h1>
        <center><h2>Dioses de la mitologia egipcia y criaturas mitologicas</h2></center>
        <ul class="gridder">
            <?php 
            for($i = 0; $i < count($datos) ;$i++):
                $d = explode("||", $datos[$i]); 
            ?>
            <li class="gridder-list" data-griddercontent="<?php echo '#gridder-content-'.$i ?>">
                <img src="<?php echo $d[0] ?>">
            </li>
                <?php 
            endfor;
            ?>
        </ul>

        <?php
            for($i = 0; $i < count($datos); $i++): 
                $d=explode("||", $datos[$i]);
        ?>
        <div id="<?php echo 'gridder-content-'.$i ?>" class="gridder-content">
                <div class="row">
                    <div class="col-sm-6">
                    <img src="<?php echo $d[0] ?>" class="img-responsive" />
                    </div>
                    <div class="col-sm-6">
                        <h2><?php echo $d[1]; ?></h2>
                        <p><?php echo $d[2]; ?></p>
                    </div>
                </div>
        </div>
            <?php 
        endfor;
        ?>
    </div>
</body>
</html>

<script>
    $(document).ready(function(){
        $(".gridder").gridderExpander({
            scroll: true,
            scrollOffset: 60,
                    scrollTo: "panel",
                    animationSpeed: 100,
                    animationEasing: "easeInOutExpo",
                    showNav: true,
                    nextText: "<i class=\"fa-solid fa-arrow-right-long\"></i>",
                    prevText: "<i class=\"fa-solid fa-arrow-left-long\"></i>",
                    closeText: "<i class=\"fa-regular fa-rectangle-xmark\"></i>",
                    onStart: function(){
                        console.log("Gridder Inititialized");
                    },
                    onContent: function(){
                        console.log("Gridder Content Loaded");
                        $(".carousel").carousel();
                    },
                    onClosed: function(){
                        console.log("Gridder Closed");
                    }
        });
    });
</script>