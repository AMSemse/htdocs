<div class="container">
  <div class="row">
    <div class="col-md-6 text-center"> <!-- canvas -->
      <canvas id="canvas" width="350" height="300">

      </canvas>
    </div>
    <div class="col-md-6"> <!-- scoreboard -->
      <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center active">
          Scoreboard
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Correct Guesses
          <span class="badge bg-primary rounded-pill">
            <?php echo $_SESSION["correctGuesses"] ?>
          </span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Incorrect Guesses
          <span class="badge bg-primary rounded-pill">
            <?php echo $_SESSION["incorrectGuesses"] ?>
          </span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Games Won
          <span class="badge bg-primary rounded-pill">
            <?php echo $_SESSION["gamesWon"] ?>
          </span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Games Lost
          <span class="badge bg-primary rounded-pill">
            <?php echo $_SESSION["gamesLost"] ?>
          </span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Total games played
          <span class="badge bg-primary rounded-pill">
            <?php echo $_SESSION["gamesWon"] + $_SESSION["gamesLost"] ?>
          </span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <button class="btn btn-outline-<?php echo $returnedColor ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Your rating is based on your percentage of correct guesses.">
            Rating: <?php echo $returnedGrade ?>
          </button>
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#resetConfirmModal">Reset Stats</button>
        </li>
      </ul>
    </div>
  </div>
</div>
<?php include "resetModal.php" ?>