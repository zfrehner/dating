<?php

class Validation
{

    function validName($name)
    {
        return !empty($name) && ctype_alpha($name);
    }


    function validAge($age)
    {
        return !is_nan((floatval($age))) && $age >= 18 && $age <= 110;
    }


    function validPhone($phone)
    {
        // Allow +, - and . in phone number
        $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
        // Remove "-" from number
        $phone_to_check = str_replace("-", "", $filtered_phone_number);
        // Check the length of number
        // This can be customized if you want phone number from a specific country
        if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
            return false;
        } else {
            return true;
        }
    }


    function validEmail($email)
    {
        if (empty($email)) {
            return true;
        } else {
            return (!preg_match(
                "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email))
                ? FALSE : TRUE;
        }
    }


    function validOutdoor($outdoor)
    {
        $outdoorActivity = getOutDoor();
        if (empty($outdoor)) {
            return false;
        }

        foreach ($outdoor as $activity) {
            if (in_array($activity, $outdoorActivity)) {
                return true;
            }
        }
        return false;
    }


    function validIndoor($indoor)
    {
        $indoorActivity = getInDoor();
        if (empty($indoor)) {
            return false;
        }

        foreach ($indoor as $activity) {
            if (in_array($activity, $indoorActivity)) {
                return true;
            }
        }
        return false;
    }
}