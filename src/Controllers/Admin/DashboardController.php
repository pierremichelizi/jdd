<?php
namespace App\Controllers\Admin;

use App\Models\UserModel;
use Core\Auth;
use Core\Controller;
use Core\Route;

#[Route("/admin")]
#[Auth(roles:["ADMIN"], onErrorTo:"/auth/admin/login")]
class DashboardController extends Controller{



    #[Route("/dashboard")]
    //
    public function dashboard(){
        return $this->render("admin/dashboard/index.html.twig");
    }


    #[Route("/users")]
    public function users(){
        $user = UserModel::getAll();
        return $this->render("admin/dashboard/users/listing.html.twig", [
            "data"=>$user
        ]);
    }


}

