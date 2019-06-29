<?php
  class User
  {
      private $name;
      private $email;
      private $password;
      private $country;
      private $avatar;
      private $id;

      public function __construct ($theName, $theEmail, $theCountry, $theAvatar, $thePassword = null)
      {
        $this->name = $theName;
        $this->email = $theEmail;
        $this->country = $theCountry;
        $this->password = $thePassword;
        $this->avatar = $theAvatar;
      }

      public function getName () {
        return $this->name;
      }

      public function getEmail () {
        return $this->email;
      }

      public function getPassword () {
        return $this->password;
      }

      public function setPassword ($thePassword) {
        $this->password = password_hash($thePassword, PASSWORD_DEFAULT);
      }

      public function getCountry () {
        return $this->country;
      }

      public function getAvatar () {
        return $this->avatar;
      }

      public function getId () {
        return $this->id;
      }

      public function setId ($theId) {
        $this->id = $theId;
      }

      public function getDataInArray()
        {
          return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'email' => $this->getEmail(),
            'country' => $this->getCountry(),
            'password' => $this->getPassword(),
            'avatar' => $this->getAvatar(),
          ];
        }

  }
