<?php
namespace Core;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_CLASS | Attribute::IS_REPEATABLE)]
class Route
{
    function __construct(private string $path, private array $allowedMethods = ["GET", "POST", "PATCH", "PUT", "DELETE", "OPTION"])
    {
    }

    public function getPath()
    {
        return $this->path;
    }

    public function getAllowedMethods()
    {
        return $this->allowedMethods;
    }
}



#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_CLASS  | Attribute::IS_REPEATABLE)]
class GET extends Route
{
    function __construct(string $path)
    {
        parent::__construct($path, ["GET"]);
    }
}

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_CLASS  | Attribute::IS_REPEATABLE)]
class POST extends Route
{
    function __construct(string $path)
    {
        parent::__construct($path, ["POST"]);
    }
}

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_CLASS  | Attribute::IS_REPEATABLE)]
class PUT extends Route
{
    function __construct(string $path)
    {
        parent::__construct($path, ["PUT"]);
    }
}

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_CLASS  | Attribute::IS_REPEATABLE)]
class PATCH extends Route
{
    function __construct(string $path)
    {
        parent::__construct($path, ["PATCH"]);
    }
}

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_CLASS  | Attribute::IS_REPEATABLE)]
class DELETE extends Route
{
    function __construct(string $path)
    {
        parent::__construct($path, ["DELETE"]);
    }
}

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_CLASS)]
abstract class Authorization{
    
    function __construct(protected array $roles = ['*'], protected $onErrorTo=null, protected $onSuccessTo=null)
    {
    }

    protected function authorize(){}

    /**
     * Get the value of roles
     *
     * @return array
     */
    public function getRoles(): array
    {
        return $this->roles;
    }


    /**
     * Get the value of onSuccessTo
     */
    public function getOnSuccessTo()
    {
        return $this->onSuccessTo;
    }


    /**
     * Get the value of onErrorTo
     */
    public function getOnErrorTo()
    {
        return $this->onErrorTo;
    }


}

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_CLASS)]
class Auth extends Authorization
{


    public  function authorize(){

        if(session()->isGranted($this->roles)){
            if(!empty($this->onSuccessTo)){

               
                header("Location: ".$this->onSuccessTo);
                
                die();
            }else{
                return true;
            }
        }else{
            if(!empty($this->onErrorTo)){
                session()->getState()->setFlash(["error"=>"Vous devez d'abord vous connecter", "target"=>"/login"]);
                header("Location: ".$this->onErrorTo);
                die();
            }else{
                return false;
            }
        }

    }
}

#[Attribute(Attribute::TARGET_METHOD )]
class NoAuth extends Authorization
{

    public  function authorize(){
        if(!session()->getState()->getUser()){
            if(!empty($this->onSuccessTo)){
                header("Location: ".$this->onSuccessTo);
                die();
            }else{
                return true;
            }
        }else{
            if(!empty($this->onErrorTo)){
                header("Location: ".$this->onErrorTo);
                die();
            }else{
                return false;
            }
        }
    }
}




#[Attribute(Attribute::TARGET_PARAMETER)]
class Inject
{
    function __construct(private string $name)
    {
    }

    function getName()
    {
        return $this->name;
    }

    function getValue($routeMetada)
    {
        return new $this->name;
    }
}

#[Attribute(Attribute::TARGET_PARAMETER)]
class Param
{
    function __construct(private string|null $name=null)
    {
    }

    function getName()
    {
        return $this->name;
    }

    function getValue($routeMetada)
    {
        return $routeMetada["params"][$this->name];
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }
}
