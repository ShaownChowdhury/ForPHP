<?php

interface BkashAbstract{

     function bkashlogin($email,$pass);
     function bkashConfirmOrder();
     function bkashSendinvoice();
}
// interface NogodAbstract{

//      function nogodlogin($email,$pass);
//      function nogodConfirmOrder();
//      function nogodSendinvoice();
// }

class Payment implements BkashAbstract{
    function bkashlogin($email,$pass)
    {
        echo "login";
    }
    function bkashConfirmOrder()
    {
        echo "login";
        
    }
    function bkashSendinvoice(){
        echo "login";
    }
}
// class Payment extends BkashAbstract{
//     function login($email,$pass)
//     {
//         echo "login";
//     }
//     function confirmOrder()
//     {
//         echo "login";
        
//     }
//     function sendinvoice(){
//         echo "login";
//     }
// }










?>