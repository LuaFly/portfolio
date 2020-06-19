<?php
namespace Classe; 

class usuario{
    public $nome; 
    public $picture;
    function facebook(){
        if(empty($_SESSION["userLogin"])){
          
            /** Auth FACEBOOK */
          
            $facebook = new \League\OAuth2\Client\Provider\Facebook([
            'clientId' =>  FACEBOOK["app_id"],
           'clientSecret' => FACEBOOK["app_secret"],
           'redirectUri' => FACEBOOK["app_redirect"],
            'graphApiVersion' =>FACEBOOK ["app_version"],
            ]);
            $authUrl = $facebook->getAuthorizationUrl([
              "scope" => ["email"]
            ]);
          
            $error = filter_input(INPUT_GET, "error", FILTER_SANITIZE_STRIPPED);;
            if($error){
              return null;
            }
          
            $code =  filter_input(INPUT_GET, "code", FILTER_SANITIZE_STRIPPED);;
            if ($code){
              $token =$facebook->getAccessToken('authorization_code', [
                "code" => $code
              ]);
              $_SESSION["userLogin"] =$facebook->getResourceOwner($token);
               return $this->getAttr();
            }
          
           return $authUrl;
          }else{
          
            $user = $_SESSION["userLogin"];
           return $this->getAttr();
          }
    }
    function getAttr(){
        $this->nome = $_SESSION["userLogin"]->getFirstName();
        $this->picture = $_SESSION["userLogin"]->getPictureUrl();
        return $this;

    }
}