<?php 
include "include/header.php";
include('connexion.php');
include('stat/stat.php');
?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">ordinateur</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $tordi;?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">imprimante</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"> <?php echo $timp;?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-print" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">scanner</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $tscan;?></h2> 
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-qrcode" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">ecran</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $tecran;?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-television" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card gradient-7">
                            <div class="card-body">
                                <h3 class="card-title text-white">telephone</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $ttel;?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-mobile" aria-hidden="true"></i><span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card gradient-8">
                            <div class="card-body">
                                <h3 class="card-title text-white">switch</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $tswitch;?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-server" aria-hidden="true"></i><span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card gradient-9">
                            <div class="card-body">
                                <h3 class="card-title text-white">serveur</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $tserveur;?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-server" aria-hidden="true"></i><span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-muted">total Equipement</h4>
                                <div id="chartContainer" style="height: 370px; width: 100%;">
                                    <?php
                                        $dataPoints = array( 
                                            array("y" => $tordi,"label" => "Ordinateur" ),
                                            array("y" => $timp, "label" => "Imprimante" ),
                                            array("y" => $tscan, "label" => "scanner" ),
                                            array("y" => $tecran, "label" => "Ecran" ),
                                            array("y" => $ttel, "label" => "Telephone" ),
                                            array("y" => $tswitch, "label" => "Switsh" ),
                                            array("y" => $tserveur, "label" => "Serveur" )
                                        );
                                    
                                    ?>
                                </div>
                            </div>
                        </div>  
                    </div> 
                    <div class="col-lg-6 col-md-6">
                        <div class="card card-widget">
                            <div class="card-body">
                                <h4 class="text-muted"> les parc en pannes </h4>
                                <div class="mt-4">
                                    <h4><?php echo $pordi;?></h4>
                                    <h6>pc <span class="pull-right"><?php echo (int)$p;?>%</span></h6>
                                    <div class="progress mb-3" style="height: 7px">
                                        <div class="progress-bar active progress-bar-striped bg-danger" style="width: <?php echo (int)$p;?>%;" role="progressbar"><span class="sr-only">30% Order</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h4><?php echo $imp;?></h4>
                                    <h6 class="m-t-10 text-muted">imprimente <span class="pull-right"><?php echo (int)$pi;?>%</span></h6>
                                    <div class="progress mb-3" style="height: 7px">
                                        <div class="progress-bar bg-info active progress-bar-striped" style="width: <?php echo (int)$pi;?>%;" role="progressbar"><span class="sr-only">50% Order</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h4><?php echo $scan;?></h4>
                                    <h6 class="m-t-10 text-muted">scanne<span class="pull-right"><?php echo (int)$ps;?>%</span></h6>
                                    <div class="progress mb-3" style="height: 7px">
                                        <div class="progress-bar bg-success active progress-bar-striped" style="width: <?php echo (int)$ps;?>%;" role="progressbar"><span class="sr-only">20% Order</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h4><?php echo $pecran;?></h4>
                                    <h6 class="m-t-10 text-muted">ecran<span class="pull-right"><?php echo (int)$pe;?>%</span></h6>
                                    <div class="progress mb-3" style="height: 7px">
                                        <div class="progress-bar bg-warning  active progress-bar-striped" style="width: <?php echo (int)$pe;?>%;" role="progressbar"><span class="sr-only">20% Order</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h4><?php echo $ptel;?></h4>
                                    <h6 class="m-t-10 text-muted">telephone<span class="pull-right"><?php echo (int)$pt;?>%</span></h6>
                                    <div class="progress mb-3" style="height: 7px">
                                        <div class="progress-bar bg-primary active progress-bar-striped" style="width: <?php echo (int)$pt;?>%;" role="progressbar"><span class="sr-only">20% Order</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h4><?php echo $pswitch;?></h4>
                                    <h6 class="m-t-10 text-muted">switch<span class="pull-right"><?php echo (int)$psw;?>%</span></h6>
                                    <div class="progress mb-3" style="height: 7px">
                                        <div class="progress-bar bg-warning active progress-bar-striped" style="width: <?php echo (int)$psw;?>%;" role="progressbar"><span class="sr-only">20% Order</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h4><?php echo $pserveur?></h4>
                                    <h6 class="m-t-10 text-muted">seveur<span class="pull-right"><?php echo (int)$pse;?>%</span></h6>
                                    <div class="progress mb-3" style="height: 7px">
                                        <div class="progress-bar bg-secondary active progress-bar-striped" style="width: <?php echo (int)$pse;?>%;" role="progressbar"><span class="sr-only">20% Order</span>
                                        </div>
                                     </div>
                                 </div>
                            </div>
                        </div>   
                    </div> 
                </div>
            </div>
            
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	
	data: [{
		type: "column",
		yValueFormatString: "#,##0.##",
		dataPoints: <?php echo json_encode($dataPoints); ?>
	}]
});
chart.render();
 
}
</script>
</head>
        
    <?php include "include/footer.php";?>