<?php


class PasswordHash{

    static function hashPassword($password){
      $options = [
          'cost' => 12,
      ];
      $hashPassword= password_hash($password, PASSWORD_BCRYPT, $options);

      return $hashPassword;

    }



}

?>