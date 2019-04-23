<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 21/08/2018
 * Time: 10:16
 */
    include_once 'Model/Bibliotheque.php';
    $_bib = new Bibliotheque();
    $_stock=$_bib->__repertoire_travaux();
?>
    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">
    <!-- Search Widget -->

        <!-- sujets traites Widget -->
        <div class="card my-4">
            <div class="list-group">
                <h5 class="list-group-item list-group-item-primary">Repertoire des travaux</h5>
                <?php foreach ($_stock as $_stocker):?>
                <a href="#" class="list-group-item list-group-item-action" size=""><?=$_stocker['titreTrav'];?></a>
                <?php endforeach;?>
            </div>
        </div>

    </div>


