<?php

    $array = array( "name" => "", "email" => "", "phone" => "", "address" => "" , "service" => "" , "startDate" => "" , "endDate" => "" ,"message" => "", "addressError" => "", "nameError" => "", "emailError" => "", "phoneError" => "" , "startDateError" => "" , "endDateError" => "", "serviceError" => "" , "messageError" => "", "isSuccess" => false);
    $emailTo = "franck.perie24@gmail.com";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    { 

        $array["name"] = test_input($_POST["name"]);
        $array["email"] = test_input($_POST["email"]);
        $array["phone"] = test_input($_POST["phone"]);
        $array["address"] = test_input($_POST["address"]);
        $array["service"] = test_input($_POST["service"]); // A voir si le test est faisable vu que pas vraiment input
        $array["startDate"] = test_input($_POST["startDate"]);
        $array["endDate"] = test_input($_POST["endDate"]);
        $array["message"] = test_input($_POST["message"]);
        $array["isSuccess"] = true; 
        $emailText = "";

        if (empty($array["name"]))
        {
            $array["nameError"] = "Merci d'indiquer un nom et un prénom";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Nom : {$array['name']}\n";
        }

        if(!isEmail($array["email"])) 
        {
            $array["emailError"] = "Merci de renseigner une adresse email valide";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Email : {$array['email']}\n";
        }

        if (!isPhone($array["phone"]))
        {
            $array["phoneError"] = "Que des chiffres et des espaces";
            $array["isSuccess"] = false; 
        }
        else
        {
            $emailText .= "Numéro de téléphone : {$array['phone']}\n";
        }

        if(empty($array["address"])) 
        {
            $array["addressError"] = "Merci d'indiquer votre adresse complète";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Adresse: {$array['address']}\n";
        }

        if(empty($array["service"])) 
        {
            $array["serviceError"] = "Merci d'indiquer un type de prestation";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Prestation : {$array['service']}\n";
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
            $emailText .= "Message :\n{$array['message']}\n";
        }
        
        if($array["isSuccess"]) 
        {
            $headers = "De : {$array['name']} <{$array['email']}>\r\nReply-To: {$array['email']}";
            mail($emailTo, "Vacanc' Ô poil, demande de prestation :", $emailText, $headers);
        }
        
        echo json_encode($array);
        
    }

    function isEmail($email) 
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    function isPhone($phone) 
    {
        return preg_match("/^[0-9 ]*$/",$phone);
    }
    function test_input($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
 
?>