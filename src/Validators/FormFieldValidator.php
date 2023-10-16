<?php

namespace App\Validators;

class FormFieldValidator
{

    private $continueValidation = true;
    public $isValid = true;

    //file form
    public $uploadedTmpFilename = null;
    public $uploadedTmpPath = null;
    public $uploadedTmpFullpath = null;
    public $uploadedFilePath = null;
    public $uploadedTmpOriginalFilename=null;

    function __construct(private string $name, private mixed $value, private $validateAll = false)
    {
    }




    

    function ifExists()
    {
        if (!$this->continueValidation) {
            return $this;
        }
        if (empty($this->value)) {
            $this->continueValidation = false;
        }
        return $this;
    }

    function validateUrl(&$errors = [], $m = "[name] should be valid url"){
        if (!$this->continueValidation) {
            return $this;
        }
        if (!filter_var($this->value, FILTER_VALIDATE_URL)) {
            $this->isValid = false;
            $errors[$this->name] = isset($errors[$this->name]) ? $errors[$this->name] : [];
            $errors[$this->name]["empty"] = t($this->parseErrorMessage($m, [
                "name" => $this->name
            ]));
        }
        if (empty($this->isValid) && !$this->validateAll) {
            $this->continueValidation = false;
        }
        return $this;
    }

    function validateBool(&$errors = [], $m = "[name] should not boolean type"){
        if (!$this->continueValidation) {
            return $this;
        }
        if (!in_array($this->value, array("true", "false", "1", "0", "yes", "no"), true)) {
            $this->isValid = false;
            $errors[$this->name] = isset($errors[$this->name]) ? $errors[$this->name] : [];
            $errors[$this->name]["empty"] = t($this->parseErrorMessage($m, [
                "name" => $this->name
            ]));
        }
        if (empty($this->isValid) && !$this->validateAll) {
            $this->continueValidation = false;
        }
        return $this;
    }

    function validateEmpty(&$errors = [], $m = "[name] should not be empty"): self
    {
        if (!$this->continueValidation) {
            return $this;
        }
        if (empty($this->value)) {
            $this->isValid = false;
            $errors[$this->name] = isset($errors[$this->name]) ? $errors[$this->name] : [];
            $errors[$this->name]["empty"] = t($this->parseErrorMessage($m, [
                "name" => $this->name
            ]));
        }
        if (empty($this->isValid) && !$this->validateAll) {
            $this->continueValidation = false;
        }
        return $this;
    }

    function validatePhone(&$errors = [], $m = "[name] is not a valid phone number"): self
    {
        return $this->validateRegex("/^[0-9\-\s\+]{6,20}$/i", $errors, $m );
    }


    function validateStringMinMax($min = 0, $max = 30, &$errors = [], $m = "[name] should contain at least [min] characteres and cannot contains more than [max] characteres"): self
    {
        if (!$this->continueValidation) {
            return $this;
        }
        if (!(strlen($this->value) >= $min)) {
            $errors[$this->name] = empty($errors[$this->name]) ?   [] : $errors[$this->name];
            $errors[$this->name]["min"] = t($this->parseErrorMessage($m, [
                "name" => $this->name,
                "min" => $min,
                "max" => $max
            ]));
            $this->isValid = false;
        } else if (!(strlen($this->value) <= $max)) {
            $errors[$this->name] = empty($errors[$this->name]) ?   [] : $errors[$this->name];
            $errors[$this->name]["max"] = t($this->parseErrorMessage($m, [
                "name" => $this->name,
                "min" => $min,
                "max" => $max
            ]));
            $this->isValid = false;
        }
        if (empty($this->isValid) && !$this->validateAll) {
            $this->continueValidation = false;
        }
        return  $this;
    }

    function validateStringMin($min = 0, &$errors = [], $m = "[name] should contain at least [min] characteres"): self
    {
        if (!$this->continueValidation) {
            return $this;
        }
        if (!(strlen($this->value) >= $min)) {
            $errors[$this->name] = empty($errors[$this->name]) ?   [] : $errors[$this->name];
            $errors[$this->name]["min"] = t($this->parseErrorMessage($m, [
                "name" => $this->name,
                "min" => $min
            ]));
            $this->isValid = false;
        }
        if (empty($this->isValid) && !$this->validateAll) {
            $this->continueValidation = false;
        }
        return $this;
    }

    function validateStringMax($max = 100, &$errors = [], $m = "[name] should contain at least [min] characteres"): self
    {
        if (!$this->continueValidation) {
            return $this;
        }
        if ((strlen($this->value) > $max)) {
            $errors[$this->name] = empty($errors[$this->name]) ?   [] : $errors[$this->name];
            $errors[$this->name]["max"] = t($this->parseErrorMessage($m, [
                "name" => $this->name,
                "max" => $max
            ]));
            $this->isValid = false;
        }
        if (empty($this->isValid) && !$this->validateAll) {
            $this->continueValidation = false;
        }
        return $this;
    }

    


    function validateEmail(&$errors = [], $m = "[name] is not valid"): self
    {
        if (!$this->continueValidation) {
            return $this;
        }
        $email = filter_var($this->value,FILTER_VALIDATE_EMAIL);
        if (empty( $email )) {
            $errors[$this->name] = empty($errors[$this->name]) ?   [] : $errors[$this->name];
            $errors[$this->name]["email"] = t($this->parseErrorMessage($m, [
                "name" => $this->name
            ]));
            $this->isValid = false;
        }
        if (empty($this->isValid) && !$this->validateAll) {
            $this->continueValidation = false;
        }
        return $this;
    }

    function validateName(&$errors = [], $m = "[name] is not valid"): self
    {
        return $this->validateRegex("/^([a-z\'\_\-\,0-9À-ÿ\s\.\/]{2,255})$/i", $errors, $m );
    }

    function validatePassword(&$errors = [], $m = " should contains at min 8 and max 16 alphabetical lowercase and uppercase characteres with specialchars . # @ and numerical characteres."): self
    {
        if (!$this->continueValidation) {
            return $this;
        }
        // Vérification de la longueur minimale
        if (strlen($this->value) < 8) {
            $errors[$this->name] = empty($errors[$this->name]) ?   [] : $errors[$this->name];
            $errors[$this->name]["password_len"] =  t($this->parseErrorMessage("Le mot de passe doit contenir au moins 8 caractères", [
                "name" => $this->name
            ]));
            $this->isValid = false;
            return false;
        }

        // Vérification de la présence d'au moins une lettre majuscule
        if (!preg_match('/[A-Z]/', $this->value)) {
            $errors[$this->name]["password_maj"] =  t($this->parseErrorMessage("Le mot de passe doit contenir au moins une majuscule", [
                "name" => $this->name
            ]));
            $this->isValid = false;
            return $this;
        }

        // Vérification de la présence d'au moins un chiffre
        if (!preg_match('/[0-9]/', $this->value)) {
            $errors[$this->name]["password_num"] =  t($this->parseErrorMessage("Le mot de passe doit contenir au moins un chiffre", [
                "name" => $this->name
            ]));
            $this->isValid = false;
            return $this;
        }

        // Vérification de la présence d'un des caractères spéciaux: @ . _ ~ #
        if (!preg_match('/[@._~#]/', $this->value)) {
            $errors[$this->name]["password_num"] =  t($this->parseErrorMessage("Le mot de passe doit contenir au moins un des caractères suivants:(@._~#)", [
                "name" => $this->name
            ]));
            $this->isValid = false;
            return $this;
        }


        if (empty($this->isValid) && !$this->validateAll) {
            $this->continueValidation = false;
        }
        return $this;
    }

    function validateEquals($compareValue, &$errors = [], $m = " are not equals.")
    {
        if (!$this->continueValidation) {
            return $this;
        }
        if ($this->value !== $compareValue) {
            $errors[$this->name] = empty($errors[$this->name]) ?   [] : $errors[$this->name];
            $errors[$this->name]["equals"] = t($this->parseErrorMessage($m, [
                "name" => $this->name
            ]));
            $this->isValid = false;
        }
        if (empty($this->isValid) && !$this->validateAll) {
            $this->continueValidation = false;
        }
        return $this;
    }

    function validateRegex($regex, &$errors = [], $m = " does not match the pattern."): self
    {
        if (!$this->continueValidation) {
            return $this;
        }
        if (!preg_match($regex, $this->value)) {
            $errors[$this->name] = empty($errors[$this->name]) ?   [] : $errors[$this->name];
            $errors[$this->name]["pattern"] = t($this->parseErrorMessage($m, [
                "name" => $this->name
            ]));
            $this->isValid = false;
        }
        if (empty($this->isValid) && !$this->validateAll) {
            $this->continueValidation = false;
        }
        return $this;
    }

    function validateNullOr($next, &$errors = [], $m = " does not match the pattern.")
    {
        if ($this->value === null) {
            return  true;
        } else {
            // $next()
        }
    }

    function validateUploadedFile(&$errors = [], $defaultFilePath=null,$acceptedMimes = ["image/png", "image/jpg", "image/jpeg"], $minSize = 0, $maxSize = 2 * 1024 * 1024)
    {
        
        if (!$this->continueValidation) {
            return $this;
        }
        
        $fileData = $_FILES[$this->name] ?? null;

        if (!empty($fileData["name"])) {
            if ($fileData["size"] < $minSize) {
                $this->isValid = false;
                $errors[$this->name] = empty($errors[$this->name]) ? [] : $errors[$this->name];
                $errors[$this->name]["file_size_min"] = t("La taille du fichier doit etre au moins de " . ($minSize) . "Mo");
                if (!$this->validateAll) {
                    return $this;
                }
            }
            if ($fileData["size"] > $maxSize) {
                $this->isValid = false;
                $errors[$this->name] = empty($errors[$this->name]) ? [] : $errors[$this->name];
                $errors[$this->name]["file_size_max"] = t("La taille du fichier ne peut pas dépasser " . ($maxSize / 1024 / 1024) . "Mo");
                if (!$this->validateAll) {
                    return $this;
                }
            }
            if (!in_array($fileData["type"], $acceptedMimes)) {
                $this->isValid = false;
                $errors[$this->name] = empty($errors[$this->name]) ? [] : $errors[$this->name];
                $errors[$this->name]["file_type"] = t("Les type de fichiers acceptés sont " . implode(",", $acceptedMimes) . '.');
                if (!$this->validateAll) {
                    return $this;
                }
            }
            
            $relativeBase = "/" . "tmp" . "/" . "uploads" . "/";
            $basepath = dirname(dirname(__DIR__)) . $relativeBase;
            $extension = strtolower(pathinfo($fileData["name"], PATHINFO_EXTENSION));
            $destinationDir = $this->sanitizeFilename($basepath);
            $filename = uuid() . "." . $extension;
            $fullname = $destinationDir . $filename;
            $hasUploaded= uploadFile($fileData["tmp_name"], $fullname);
            if (!$hasUploaded) {
                $errors[$this->name] = empty($errors[$this->name]) ? [] : $errors[$this->name];
                $errors[$this->name]["file_upload"] = t("Téléversement de fichier a échoué");
                return $this;
            } else {
                $this->uploadedTmpOriginalFilename = $fileData["name"];
                $this->uploadedTmpFilename = $filename;
                $this->uploadedTmpPath = $relativeBase . $filename;
                $this->uploadedTmpFullpath = $fullname;
                //$this->saveLastFile($this->name);
                return $this;
            }
        } else {
            if(isset($defaultFilePath) && file_exists(BASE_PUBLIC_DIR. $defaultFilePath)){
                return $this;
            }
            $errors[$this->name]["file_upload"] = t($this->parseErrorMessage("Le fichier ne peut etre vide.", [
                "name" => $this->name
            ]));

        }
        return $this;
    }

    private function sanitizeFilename($filename)
    {
        return sanitizeFilename($filename);
    }

    private function parseErrorMessage($m, $values)
    {
        return  str_replace(array_map(fn ($x) => '[' . $x . ']', array_keys($values)), $values, $m);
    }



    /**
     * Get the value of uploadedTmpFilename
     */
    public function getUploadedTmpFilename()
    {
        

        return $this->uploadedTmpFilename;
    }

    /**
     * Get the value of uploadedTmpPath
     */
    public function getUploadedTmpPath()
    {
        

        return $this->uploadedTmpPath;
    }

    public function getFileBase64Encode()
    {
        

        if (!empty($this->uploadedTmpFullpath)) {
            return fileToBase64($this->uploadedTmpFullpath);
        }
    }


    public function upload($to = null)
    {
        if (!$this->continueValidation) {
            return $this;
        }

        if (!empty($this->uploadedTmpPath)) {
            $currentLocation = ($to ?? "/uploads/") . $this->uploadedTmpFilename;
            $relativeDirLocation = "public" . $currentLocation;
            rename($this->sanitizeFilename(dirname(dirname(__DIR__))."/".$this->uploadedTmpPath), $this->sanitizeFilename(dirname(dirname(__DIR__)) . "/" . ($relativeDirLocation)));
            $this->clearTmpFile();
            $this->uploadedFilePath = $currentLocation;
        }
        return $this;
    }

    /*function saveLastFile()
    {
        if ($this->uploadedTmpPath) {
            $lastOne=session()->getState()->getLastSentFile($this->name);
            if(!empty($lastOne["uploadedTmpFullpath"])){
                unlink($lastOne["uploadedTmpFullpath"]);
            }
            session()->getState()->addLastSentFile($this->name, [
                "uploadedTmpPath" => $this->uploadedTmpPath,
                "uploadedTmpFilename" => $this->uploadedTmpFilename,
                "uploadedTmpFullpath" => $this->uploadedTmpFullpath,
                "uploadedTmpOriginalFilename" => $this->uploadedTmpOriginalFilename
            ]);
        }
    }*/

    function clearTmpFile()
    {
        if ($this->uploadedTmpFullpath) {
            if(!empty($this->uploadedTmpFullpath) &&  file_exists($this->uploadedTmpFullpath)) unlink($this->uploadedTmpFullpath);
            //session()->getState()->clearUploadedFile($this->name);
            $this->uploadedTmpFilename = null;
            $this->uploadedTmpPath = null;
            $this->uploadedTmpFullpath = null;
            $this->uploadedFilePath = null;;
        }
    }

    /**
     * Get the value of uploadedFilePath
     */
    public function getUploadedFilePath()
    {
        
        return  $this->uploadedTmpFilename ? ($to ?? "/uploads/") . $this->uploadedTmpFilename : $this->uploadedFilePath;
    }
}
