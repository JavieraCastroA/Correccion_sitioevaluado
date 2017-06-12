<?php include("header.php");?>
<?php
 $csv = array_map("str_getcsv", file('datos.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
$la_url = $_GET['url'];
?>

<header class="intro-header" style="background-image: url('<?php echo $csv[$la_url]["images"];?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1 class="article"><?php echo($csv[$la_url]["titulo"])?></h1>
                    <hr class="small">
                    <span class="subheading">Imagen y narración se unen de modo indisociable en todo intento de transmisión de la memoria. </span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="site-heading">
                <h7><?php echo $csv[$la_url]['resumen'];?> </h7>
                <h5>Palabras clave <small>:<?php echo $csv[$la_url]['tags'];?> </h5>

            </div>
        </div>
    </div>
</div>
</header>


    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                  <p><?php echo($csv[$la_url]["texto"])?></p>
                  <p><?php echo($csv[$la_url]["mitexto"])?></p>
                  <h6>Link: <a href="<?php echo $csv[$la_url]['vinculo'];?>"><?php echo $csv[$la_url]['vinculo'];?></a></h6>
                  <h6>Citas: <?php echo($csv[$la_url]["apa"])?></h6>

              </div>
            </div>
        </div>
    </article>
    <hr>

<?php include("footer.php");?>
