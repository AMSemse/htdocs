<?php

class View
{

    public function newPage()
    {
      include_once('header.html');
      ?>
      <form action="index.php" method="POST">
        <div class="mb-3 mt-3">
          <label for="etunimi" class="form-label">Etunimi:</label>
          <input type="text" class="form-control" id="etunimi" name="etunimi" placeholder="Käyttäjän etunimi">
        </div>
        <div class="mb-3 mt-3">
          <label for="sukunimi" class="form-label">Sukunimi:</label>
          <input type="text" class="form-control" id="sukunimi" name="sukunimi" placeholder="Käyttäjän sukunimi">
        </div>
        <button type="submit" name="action" value="add" class="btn btn-primary">Tallenna</button>
      </form>
    <?php
      include_once('footer.html');
    }


    public function showAll($kayttajat)
    {
      include_once('header.html');
      ?>
      <a href="index.php?action=add">Lisää uusi</a>
      <table class="table">
        <tr>
          <td>ID</td>
          <td>Etunimi</td>
          <td>Sukunimi</td>
          <td>Muokkaa</td>
          <td>Poista</td>
        </tr>
        <?php
          foreach ($kayttajat as $kayttaja) {
            echo "<tr><td>" . $kayttaja['kayttajaID'] . "</td><td>" . $kayttaja['etunimi'] . "</td><td>" . $kayttaja['sukunimi'] . "</td>";
            echo "<td><a href='index.php?action=edit&id=" . $kayttaja['kayttajaID'] . "'><i class='bi bi-pencil-square'></i></a>
            </td><td><a href='index.php?action=delete&id=" . $kayttaja['kayttajaID'] . "'><i class='bi bi-trash'></a></td></tr>";
          }
      ?>
      </table>
    <?php
      include_once("footer.html");
    }


    public function editPage($kayttaja)
    {
      include_once("header.html");
      ?>
      <form action="index.php" method="POST">
        <input type="hidden" name="kayttajaID" value="<?php echo $kayttaja->get_kayttajaID(); ?>">
        <div class="mb-3 mt-3">
          <label for="etunimi" class="form-label">Etunimi:</label>
          <input type="text" class="form-control" id="etunimi" name="etunimi" placeholder="Käyttäjän etunimi" value="<?php echo $kayttaja->get_etunimi(); ?>">
        </div>
        <div class="mb-3 mt-3">
          <label for="sukunimi" class="form-label">Sukunimi:</label>
          <input type="text" class="form-control" id="sukunimi" name="sukunimi" placeholder="Käyttäjän sukunimi" value="<?php echo $kayttaja->get_sukunimi(); ?>">
        </div>
        <button type="submit" name="action" value="update" class="btn btn-primary">Päivitä</button>
      </form>
      <?php
      include_once("footer.html");
    }
}

?>