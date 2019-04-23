<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 16/08/2018
 * Time: 17:19
 */
if (!isset($_SESSION))
{
    session_start();
}
?>
    <?php if (isset($_SESSION['id_c'])):?>
        <!-- Champs des questions -->
        <form method="post" action="../Controler/c_forum_sujet.php">
            <div class="card my-4">
                <h5 class="list-group-item list-group-item-warning">
                    POSEZ VOTRE QUESTION
                </h5>
                <div class="card-body">
                    <div>
                        <div class="form-group">
                            <textarea class="form-control" type="text" name="sujet" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="Envoyer">Envoyer</button>
                    </div>
                </div>
            </div>
        </form>
    <?php endif; ?>

