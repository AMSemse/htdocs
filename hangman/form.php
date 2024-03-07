<div class="container mb-3 mt-3">
  <div class="row text-center justify-content-center">
    <div class="col-6">
      <?php
        foreach (range("A", "Z") as $letter) {
          if(in_array($letter, $_SESSION["guesses"])) {
            echo '<button class="btn btn-secondary disabled m-1 ps-3 pe-3 alpha" id="'.$letter.'">'.$letter.'</button>';
          } else {
            echo '<button class="btn btn-info m-1 ps-3 pe-3 alpha" id="'.$letter.'">'.$letter.'</button>';
          }
        }
      ?>
    </div>
  </div>
</div>

