<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 28/08/2018
 * Time: 13:43
 */
    if (!isset($_SESSION))
    {
        session_start();
    }
    include_once '../Model/Bibliotheque.php';

    $_bib = new Bibliotheque();
    //$_stock=$_bib->__repertoire_travaux();
   $_stock=$_bib->__nbre_publication_par_bibliotheque();
?>
    <div class="row">
        <!--Panel-->
        <div class="col-sm-3">
            <div class="card my-4">
                <div class="list-group">
                    <h5 class="list-group-item list-group-item-warning">
                        Notifications
                    </h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Publications
                                <span class="badge badge-primary badge-pill">
                                    <?php
                                        //foreach ($_stock as $_stocker):
                                            echo $_stock['titreTrav'];
                                        //endforeach;
                                    ?>
                                </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Nouveautés
                                <span class="badge badge-primary badge-pill">2</span>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    <!--/.Panel-->