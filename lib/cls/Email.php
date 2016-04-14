<?php
/**
 * Created by PhpStorm.
 * User: Tyler
 * Date: 3/23/2015
 * Time: 11:55 PM
 */

class Email {
    public function mail($to, $subject, $message, $headers) {
        mail($to, $subject, $message, $headers);
    }
}