<?php

require_once 'model.php';
require_once 'view.php';


switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
            if ($action == 'edit') {
                require_once 'db_config.php';
                $kayttajaID = $_GET["id"];
                $query = "SELECT * FROM kayttaja WHERE kayttajaID = :kayttajaID LIMIT 1";
                $result = $pdo->prepare($query);
                $result->execute([
                    "kayttajaID" => $kayttajaID
                ]);
                $result = $result->fetch();

                $kayttaja = new Kayttaja();
                $kayttaja->set_kayttajaID($result['kayttajaID']);
                $kayttaja->set_etunimi($result['etunimi']);
                $kayttaja->set_sukunimi($result['sukunimi']);

                $view = new View();
                $view->editPage($kayttaja);

            } elseif ($action == 'delete') {
                require_once 'db_config.php';

                $kayttajaID = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
                if (!$kayttajaID) {
                    header("Location: index.php");
                    die();
                } else {
                    $query = "DELETE FROM kayttaja WHERE kayttajaID = :kayttajaID LIMIT 1";
                    $result = $pdo->prepare($query);
                    $result->execute([
                        "kayttajaID" => $kayttajaID
                    ]);

                    header('Location: index.php');
                }
            } elseif ($action == 'add') {
                $view = new View();
                $view->newPage();
            }
        } else {
            require_once 'db_config.php';
            $stmt = $pdo->query('SELECT * FROM kayttaja');
            $kayttajat = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $view = new View();
            $view->showAll($kayttajat);
        }
        break;
    case 'POST':
        if (isset($_POST['action'])) {
            $action = $_POST['action'];
            if ($action == 'add') {
                if (isset($_POST['etunimi']) && isset($_POST['sukunimi'])) {
                    require_once 'db_config.php';

                    $etunimi = filter_var($_POST['etunimi'], FILTER_UNSAFE_RAW);
                    $sukunimi = filter_var($_POST['sukunimi'], FILTER_UNSAFE_RAW);

                    $query = "INSERT INTO kayttaja (etunimi, sukunimi) VALUES (:etunimi, :sukunimi)";
                    $result = $pdo->prepare($query);
                    $result->execute([
                        "etunimi" => $etunimi,
                        "sukunimi" => $sukunimi,
                    ]);
                    header('Location: index.php');
                } else {
                    header('Location: index.php?action=add');
                    exit;
                }

            } elseif ($action == 'update') {
                require_once 'db_config.php';
                $kayttajaID = filter_var($_POST['kayttajaID'], FILTER_SANITIZE_NUMBER_INT);
                $etunimi = filter_var($_POST['etunimi'], FILTER_UNSAFE_RAW);
                $sukunimi = filter_var($_POST['sukunimi'], FILTER_UNSAFE_RAW);

                $query = "UPDATE kayttaja SET etunimi=:etunimi, sukunimi=:sukunimi WHERE kayttajaID=:kayttajaID";

                $result = $pdo->prepare($query);
                $result->execute([
                    "etunimi" => $etunimi,
                    "sukunimi" => $sukunimi,
                    "kayttajaID" => $kayttajaID
                ]);
                header('Location: index.php');
            }
        }
        break;
    default:

}
