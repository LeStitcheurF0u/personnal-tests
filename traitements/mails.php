<?php
if (isset($_SERVER['HTTP_ORIGIN'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['honeypot']) && empty($_POST['honeypot'])) {
            if (!preg_match('!^ *$!s', $_POST['nom'] && !preg_match('!^ *$!s', $_POST['prenom']) && !preg_match('!^ *$!s', $_POST['mail']) && !preg_match('!^ *$!s', $_POST['sujet']) && !preg_match('!^ *$!s', $_POST['sujet']))) {
                $mail = strip_tags($_POST['mail']);
                $nom = strip_tags($_POST['nom']);
                $prenom = strip_tags($_POST['prenom']);
                $content = strip_tags($_POST['message']);

                switch ($_POST['subject']) {
                    case 0:
                        $_SESSION['error'] = "Vous n'avez pas choisi de sujet";
                        header('location: index.php');
                        break;
                    case 1:
                        $subject = "Demande de devis";
                        break;
                    case 2:
                        $subject = "J'ai un projet web";
                        break;
                    case 3:
                        $subject = "Demande de renseignements";
                        break;
                    case 4:
                        $subject = "Autre demande";
                        break;
                    default:
                        $_SESSION['error'] = "Ce sujet n'est pas valide";
                        header('location: index.php');
                        break;
                }
            }
        }
    }
}
