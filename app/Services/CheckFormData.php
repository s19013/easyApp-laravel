<?php
namespace App\Services;

class CheckFormData
{
    public static function checkGender($contact)
    {
        if ($contact->gender == 0) {return "男";}
        else  {return "女";}


    }

    public static function checkAge($contact)
    {
        if ($contact->age == 1) {return  '~19歳';}
        if ($contact->age == 2) {return  '20歳~29歳';}
        if ($contact->age == 3) {return  '30歳~39歳';}
        if ($contact->age == 4) {return  '40歳~49歳';}
        if ($contact->age == 5) {return  '50歳~59歳';}
        if ($contact->age == 6) {return  '60歳~';}
    }
}
?>
