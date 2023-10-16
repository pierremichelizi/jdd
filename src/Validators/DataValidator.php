<?php

namespace App\Validators;


class DataValidator
{


   
     
    function validateEmpty($value,$name, &$errors=[], $m="[name] should not be empty"): self
    {
        if (empty($value)) {
            $errors[ $name]=isset($errors[$name]) ? $errors[ $name] : [];
            $errors[ $name][] = t($this->parseErrorMessage($m, [
                "name"=>$name
            ]));
            return $this;
        } 
        return $this;
    }
     
    function validateStringMinMax($value, $name, $min=0, $max=30, &$errors=[], $m="[name] should contain at least [min] characteres and cannot contains more than [max] characteres"): self
    {
        if (!(strlen($value) >= $min)) {
            $errors[$name]=empty($errors[$name]) ?   []:$errors[ $name];
            $errors[ $name][]=t($this->parseErrorMessage($m, [
                "name"=>$name,
                "min"=>$min,
                "max"=>$max
            ]));
            return $this;
        } else if (!(strlen($value) <= $max)) {
            $errors[$name]=empty($errors[$name]) ?   []:$errors[ $name];
            $errors[ $name][] = t($this->parseErrorMessage($m, [
                "name"=>$name,
                "min"=>$min,
                "max"=>$max
            ]));
            return $this;
        }
        return  true;
    }

    function validateStringMin($value, $name, $min=0, &$errors=[], $m="[name] should contain at least [min] characteres"): self
    {
        if (!(strlen($value) >= $min)) {
            $errors[$name]=empty($errors[$name]) ?   []:$errors[ $name];
            $errors[ $name][]=t($this->parseErrorMessage($m, [
                "name"=>$name,
                "min"=>$min
            ]));
            return $this;
        }
        return $this;
    }

    function validateStringMax($value, $name, $max=100, &$errors=[], $m="[name] should contain at least [min] characteres"): self
    {
        if ((strlen($value) > $max)) {
            $errors[$name]=empty($errors[$name]) ?   []:$errors[ $name];
            $errors[ $name][]=t($this->parseErrorMessage($m, [
                "name"=>$name,
                "max"=>$max
            ]));
            return $this;
        }
        return $this;
    }



    function validateEmail($value, $name, &$errors=[], $m="[name] is not valid"): self
    {
        $email = filter_var($value, FILTER_SANITIZE_EMAIL);
        if (empty(filter_var($email, FILTER_VALIDATE_EMAIL))) {
            $errors[$name]=empty($errors[$name]) ?   []:$errors[ $name];
            $errors[ $name][] = t($this->parseErrorMessage($m, [
                "name"=>$name
            ]));
            return $this;
        }
        return  true;
    }

    function validatePassword($value, $name, &$errors=[], $m=" should contains at min 8 and max 16 alphabetical lowercase and uppercase characteres with specialchars . # @ and numerical characteres."): self
    {
        if (!preg_match("^/[0-9a-zA-Z\.\#\@]{8,16}+$/", $value)) {
            $errors[$name]=empty($errors[$name]) ?   []:$errors[ $name];
            $errors[ $name][]=  t($this->parseErrorMessage($m, [
                "name"=>$name
            ]));
            return $this;
        }
        return $this;
    }

    function validateEquals($value, $compareValue, $name, &$errors=[], $m=" are not equals."): bool
    {
        if($value !== $compareValue){
            $errors[$name]=empty($errors[$name]) ?   []:$errors[ $name];
            $errors[ $name][]= t($this->parseErrorMessage($m, [
                "name"=>$name
            ]));
            return $this;
        }
        return $value===$compareValue;
    }

    function validateRegex($value, $regex, $name, &$errors=[], $m=" does not match the pattern."):self
    {
        if(!preg_match($regex,$value)){
            $errors[$name]=empty($errors[$name]) ?   []:$errors[ $name];
            $errors[$name][]= t($this->parseErrorMessage($m, [
                "name"=>$name
            ]));
            return $this;
        }
            return $this;
    }

    function validateNullOr($value, $next, $name, &$errors=[], $m=" does not match the pattern."){
        if($value===null){
            return  true;
        }else{
           // $next()
        }
    }


    function parseErrorMessage($m, $values){
        return  str_replace(array_map(fn ($x)=>'['.$x.']', array_keys($values)), $values, $m);
    }


}


