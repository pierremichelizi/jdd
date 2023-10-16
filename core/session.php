<?php

use App\Models\UserModel;

session_set_cookie_params(24*60*60,"/");
session_start();

$_SESSION["__csrf_token"]=$_SESSION["__csrf_token"] ??bin2hex(random_bytes(32));




class Session
{
    private ?SessionState $state = null;

    function __construct()
    {
        
        $this->state = new SessionState();
    }

    /**
     * Get the value of state
     *
     * @return SessionState
     */
    public function getState(): SessionState
    {
        return $this->state;
    }


    public function isGranted(array $roles)
    {
        if ($this->isAuthenticated()) {
            $user = $this->state->getUser();
            if (in_array("*", $roles)) {
                return true;
            }

            foreach ($roles as $role) {
                if (strpos($user["user_roles"], $role)===false) {
                    return false;
                }
            }
            return true;
        }
        return false;
    }

    public function isAuthenticated()
    {
        return !empty($this->state->getUser());
    }
}


class SessionState
{

    private $isLogged = false;

    private $user = null;

    //private $lastSentFile = [];

    private $flash=[];

    public function __construct()
    {
        
        if(!empty($_SESSION["user"])){
            $this->user = $_SESSION["user"];
        }else{
            $_SESSION["user"]  = null;
        }
        
        $this->isLogged = !!$this->user ;
        $this->flash =!empty( $_SESSION["flash"]["target"]) &&  $_SESSION["flash"]["target"]===$_SERVER['REQUEST_URI'] ?$_SESSION["flash"] :  [];
        $this->persist("flash");
    }

    public function clear(){
        $_SESSION=[];
    }

    /**
     * Get the value of isLogged
     */
    public function getIsLogged()
    {
        return $this->isLogged;
    }

    /**
     * Set the value of isLogged
     */
    public function setIsLogged($isLogged): self
    {
        $this->isLogged = $isLogged;

        return $this;
    }

    /**
     * Get the value of csrfToken
     */
    public function getCsrfToken()
    {
        return $_SESSION["__csrf_token"];
    }



    /**
     * Get the value of user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     */
    public function setUser($user): self
    {
        $this->user = $user;
        $this->persist("user");
        return $this;
    }

    /**
     * Get the value of flash
     */
    public function getFlash()
    {
        return $this->flash;
    }

    /**
     * Set the value of flash
     */
    public function setFlash(array $flash): self
    {
        $this->flash = $flash;
        $this->persist("flash");
        return $this;
    }

    /**
     * Get the value of lastSentFile
     */
    /*public function getLastSentFile($key):array | null
    {
        return $this->lastSentFile[$key] ?? null;
    }

    /**
     * Set the value of lastSentFile
     
    public function addLastSentFile($filename,array $lastSentFile): self
    {
        $this->lastSentFile[$filename] = $lastSentFile;
        $this->persist("lastSentFile");
        return $this;
    }

    public function clearUploadedFile($filename){
        unset($this->lastSentFile[$filename]);
        $this->persist("lastSentFile");
        return $this;
    }

    public function clearFiles(){
        $this->lastSentFile=[];
        $this->persist("lastSentFile");
        return $this;
    }*/

    public function persist($key){
        $_SESSION[$key]= $this->{$key};
    }

}
