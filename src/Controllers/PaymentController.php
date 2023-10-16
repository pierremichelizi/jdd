<?php

namespace App\Controllers;

use App\Mailer\Mailer;
use App\Models\ApplicationModel;
use App\Models\InvoiceModel;
use App\Models\JobApplicationModel;
use App\Models\UserModel;
use App\Validators\DataValidator;
use App\Validators\FormFieldValidator;
use Core\Auth;
use Core\Controller;
use Core\DB;
use Core\GET;
use Core\Inject;
use Core\Param;
use Core\POST;
use Core\Response;
use Core\Route;
use Core\Router;
use DateTime;



#[Route("payments")]
class PaymentController extends Controller
{
    #[Route("/{invoice}/resume")]
    #[Auth(onErrorTo: "/login")]
    function pay(#[Param()] $invoice){
        $invoiceData = InvoiceModel::get($invoice);
        $user = session()->getState()->getUser();
        if($invoiceData ){
            if(!empty($invoiceData["invoice_paid_at"])){
                return Router::redirect("/payments/sent");
            }
            if(((!empty($invoiceData["job_application_id"]) && $user["user_id"]===$invoiceData["job_application_user_id"])) || (!empty($invoiceData["application_id"]) && $user["user_id"]===$invoiceData["application_user_id"])){
                return $this->render("client/payment.html.twig", [
                    "invoiceID"=>$invoice
                ]);
            }
           
        }
        return "Invoice Invalide";
        
    }

    #[POST("/{invoice}/confirm")]
    function confirmation(#[Param()] $invoice){
        $data = $_POST;
        $errors=[];
        $user = session()->getState()->getUser();
        $invoice = InvoiceModel::get($invoice);
        /*if(!empty($invoice["invoice_paid_at"])){
            return [
                "redirect_to"=>"/payments/sent"
            ];
        }*/
        if(!empty($user) ){
            if(!empty($data) && !empty($invoice)){
                // $validator = new FormFieldValidator("bank-name", $data["bank-name"] ?? null);
                // $validator->validateEmpty($errors, "Le nom de la banque ne peut pas etre vide");
    
                if (\DateTime::createFromFormat('Y-m-d', $data["datetime"] ?? null) == false) {
                    $errors["datetime"] = ["invalid_date" => "Date invalide"];
                }
    
                $logoValidator = new FormFieldValidator("proof", null);
                $logoValidator
                    ->validateUploadedFile($errors, $data["proof"] ?? null, ["application/pdf"]);
    
                if (\count($errors)) {
                    $params["errors"] = $errors;
                    $logoValidator->clearTmpFile();
                    Response::setHttpResponseCode(400);
                    return $errors;
                } else {
                    $data=[
                        "invoice_payment_proof_file"=>$logoValidator->upload()->getUploadedFilePath(),
                        "invoice_paid_at"=>(new DateTime($data["datetime"]))->format("Y-m-d H:i:s")
                    ];
                    InvoiceModel::update([
                        ...$data,
                        "invoice_id"=>$invoice["invoice_id"]
                    ]);

                    if(((!empty($invoice["job_application_id"]) && $user["user_id"]===$invoice["job_application_user_id"]))){
                        JobApplicationModel::update([
                            "job_application_id"=>$invoice["job_application_id"],
                            "job_application_is_paid"=>1
                        ]);
                    }else if (!empty($invoice["application_id"]) && $user["user_id"]===$invoice["application_user_id"]){
                        ApplicationModel::update([
                            "application_id"=>$invoice["application_id"],
                            "application_is_paid"=>1
                        ]);
                    }

                    return[
                        "redirect_to"=>"/payments/sent"
                    ];
                }
            }else{
                Response::setHttpResponseCode(400);
                return ["form"=>["Données invalides."]];
            }
            
        }else{
            Response::setHttpResponseCode(400);
            return ["form"=>["Vous n'etes pas authorisé à éffectuer cette action."]];
        }
        
       

        
    }

    #[Route("/{invoice}/confirm")]
    function confirm(#[Param()] $invoice){
        $invoice = InvoiceModel::get($invoice);
        if(!empty($invoice["invoice_paid_at"])){
            return Router::redirect("/payments/sent");
        }
        return $this->render("client/payment-confirm.html.twig", [
            "invoiceID"=>$invoice["invoice_id"]
        ]);
    }

    #[GET("/sent")]
    function sent(){
        return $this->render("client/payment-confirm-sent.html.twig", [
        ]);
    }
}
