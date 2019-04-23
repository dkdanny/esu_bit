<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 23/08/2018
 * Time: 08:37
 */
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="css/small-business.css" rel="stylesheet">
      <title>recherche</title>
  </head>

  <body>
      <?php
        /*Barre de navigation*/
        include_once'navigation.php';
        /* inclusion de la classe Livre*/
        include_once '../Model/Livre.php';
        $livre = new Livre();
        if(isset($_POST['recherche'])) $results = $livre->__listerOuvrageParRecherche($_POST['recherche']);
        /*Inclusion de la classe Bibliotheque*/
        include_once '../Model/Bibliotheque.php';
        $bib = new Bibliotheque();
      ?>
      <!-- Le champ d'insersion de la recherche ou des mots cles de la recherche suivi du boutton recherche -->
      <div class="masthead-warning">
          <div class="container h-100 ">
              <div class="row h-100">
                  <div class="col-3"></div>
                  <div class="col-6 my-auto ">
                      <div class="masthead-content text-white py-5 py-md-3 ">
                          <form method="POST" action="reponse.php">
                              <div class="input-group input-group-newsletter">
                                  <input required type="text" class="form-control" name="recherche" placeholder="Recherche sur universal bitabu" aria-label="Entre la recherche" aria-describedby="basic-addon">
                                  <div class="input-group-append">
                                      <button class="btn btn-outline-warning" type="submit"  id="recherche">Recherche</button>
                                  </div>
                          </form>
                      </div>
                  </div>
                  <div class="col-3">
                  </div>
              </div>
          </div>
      </div>

    <!-- Page Content -->
    <div class="container">
      <!-- Page Heading -->
      <h1 class="py-5 py-md-3">
        <small class="lead text-dark" >
            <?php count($results);
                $comptage = count($results);
                if ($comptage == 0)
                {
                    echo 'Aucune information sur ce sujet. Revenez un peu plus tard';
                }
                elseif ($comptage <= 1)
                {
                    echo 'Environ '.$comptage.' élément trouvé pour cette recherche';
                }
                else
                {
                    echo 'Environ '.$comptage.' éléments trouvés pour cette recherche';
                }
            ?>
        </small>
      </h1>
      <!-- Project One -->
        <?php
            if($results != null)
            {
                foreach ($results as $result):
        ?>
              <div class="row">
                  <div class="col-md-8">
                    <h5>
                        <?php
                            $x= ($result['id']*2019200322).'2sD6c6'.uniqid();
                        ?>
                        <a href="lecture_info.php?resultat=<?php echo $x;?>" name="read" class="text-justify">
                            <?php echo $result['titreTrav'];?>
                        </a>
                    </h5>
                    <h6 class="small text-justify">
                        <?php echo $result['trav_resumer'];?>
                    </h6>
                    <!-- Domaine de publication / Universite / date de publication -->
                    <cite title="Source Title">
                        <?php echo $result['domaine'];?> |
                        <?php echo $bib->__ajouter_par($result['id_bib']);?> |
                        <?php echo $result['date_publication'];?> |
                    </cite>
                    <hr>
                </div>
              </div>
              <!-- /.row -->
        <?php
            endforeach;
            }
        ?>

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Suivant</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>

  <?php
  /*footer*/
  include_once 'footer.php';
  ?>

</html>
