<?php

    $array = array( "lastnamePetsitter" => "", "firstnamePetsitter" => "", "lastnameClient" => "", "firstnameClient" => "" , "service" => "" , "startDate" => "" , "endDate" => "" ,"message" => "", "lastnamePetsitterError" => "", "firstnamePetsitterError" => "", "lastnameClientError" => "", "firstnameClientError" => "" , "startDateError" => "" , "endDateError" => "", "serviceError" => "" , "messageError" => "", "isSuccess" => false);
    $emailTo = "franck.perie24@gmail.com";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    { 

        $array["lastnamePetsitter"] = test_input($_POST["lastnamePetsitter"]);
        $array["firstnamePetsitter"] = test_input($_POST["firstnamePetsitter"]);
        $array["lastnameClient"] = test_input($_POST["lastnameClient"]);
        $array["firstnameClient"] = test_input($_POST["firstnameClient"]);
        $array["service"] = test_input($_POST["service"]); 
        $array["startDate"] = test_input($_POST["startDate"]);
        $array["endDate"] = test_input($_POST["endDate"]);
        $array["message"] = test_input($_POST["message"]);
        $array["isSuccess"] = true; 
        $emailText = "";

        if (empty($array["lastnamePetsitter"]))
        {
            $array["lastnamePetsitterError"] = "Merci d'indiquer le nom du petsitter";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Nom du petsitter : {$array['lastnamePetsitter']}\n";
        }

        if(empty($array["firstnamePetsitter"])) 
        {
            $array["firstnamePetsitterError"] = "Merci de renseigner le prénom du petsitter";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Prénom du petsitter : {$array['firstnamePetsitter']}\n";
        }

        if (empty($array["lastnameClient"]))
        {
            $array["lastnameClientError"] = "Merci d'indiquer le nom du client";
            $array["isSuccess"] = false; 
        }
        else
        {
            $emailText .= "\nNom du client : {$array['lastnameClient']}\n";
        }

        if(empty($array["firstnameClient"])) 
        {
            $array["firstnameClientError"] = "Merci d'indiquer le prénom du client";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Prénom du client: {$array['firstnameClient']}\n";
        }

        if(empty($array["service"]) ) 
        {
            $array["serviceError"] = "Merci d'indiquer un type de prestation";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "\nPrestation : {$array['service']}\n";
        }

        if(empty($array["startDate"])) 
        {
            $array["startDateError"] = "Merci de renseigner une date de début";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Date de début : {$array['startDate']}\n";
        }
        if(empty($array["endDate"])) 
        {
            $array["endDateError"] = "Merci de renseigner une date de fin";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Date de fin : {$array['endDate']}\n";
        }

        if (empty($array["message"]))
        {
            $array["messageError"] = "Merci d'indiquer le contenu du message";
            $array["isSuccess"] = false; 
        }
        else
        {
            $emailText .= "\nMessage :\n{$array['message']}\n";
        }
        
        if($array["isSuccess"]) 
        {
            $headers = "De : {$array['lastnamePetsitter']} {$array['firstnamePetsitter']}";
            mail($emailTo, "Vacanc' Ô poil, Déclaration d'une prestation :", $emailText, $headers);
        }
        
        echo json_encode($array);
        
    }

    function test_input($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
 
?>