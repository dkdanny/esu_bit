<?php
    include_once '../Model/Forum.php';
    $_for = new Forum();
    $_stock=$_for->__afficheSujet();
?>
    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">
        <!-- Search Widget -->
        <div class="card my-4">
            <h5 class="list-group-item list-group-item-warning">RECHERCHES</h5>
            <div class="card-body">
                <div class="input-group">
                </div>
                    <form method="post" action="forum_affiche_resultat.php">
                        <div class="input-group input-group-newsletter">
                            <input required type="text" class="form-control" name="recherche" placeholder="Recherche" aria-label="Entre la recherche" aria-describedby="basic-addon">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" id="recherche">
                                Recherche
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- sujets traites Widget -->
        <div class="card my-4">
            <div class="list-group">
                <h5 class="list-group-item list-group-item-warning">SUJETS TRAITES</h5>
                <?php foreach ($_stock as $_stocker):?>
                    <a href="forum.php?forum=<?= ($_stocker['id']*199620182114).'24dhP9z'.uniqid();?>" class="list-group-item list-group-item-action">
                        <?php echo $_stocker['sujet']?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        </div>
    </div>