<?php
namespace App\Mailer;

class Mailer{

    static function sendMailWithTemplace($tempate,$title, $to, $params){
        $elastic=new ElasticMailer();
        global $twig;
        $view=$twig->render($tempate, $params);
        return $elastic->send($to, t($title), null, $view,"no-reply@admissionfacile.com");

    }

    static function sendVerificationNotification($to, $params){
        $elastic=new ElasticMailer();
        global $twig;
        $view=$twig->render("emails/confirm-email.html.twig", $params);
        return $elastic->send($to, t("Vérification de compte"), null, $view,"no-reply@admissionfacile.com");

    }

    static function sendResetPasswordLink($to, $link, $expiresAt, $userEmail){
        $elastic=new ElasticMailer();
        global $twig;
        $view=$twig->render("reset-password.html.twig", [
            "email" => $userEmail,
            "expiry" => $expiresAt,
            "link" => $link
        ]);
        return $elastic->send($to, t("Réinitialisation de compte"), null, $view,"no-reply@admissionfacile.com");

    }
}