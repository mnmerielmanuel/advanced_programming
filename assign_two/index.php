<?php
class User
{
  public $name;
  public $username;
  public $email;


  function set_name($name)
  {
      $this->name=$name;
  }
  function get_name()
  {
      return $this->name;
  }
  function set_username($username)
  {
      $this->username=$username;
  }
  function get_username()
  {
      return $this-> username;
  }
  function set_email($email)
  {
      $this->email=$email;
  }
  function get_email()
  {
      return $this->email;
  }
  function addFriend($name)
  {
  echo $name . " added a friend <br>";
    }
  function postStatus($name)
  {
  echo $name . " posted a status <br>";
    }
}
$example = new User();

$example->set_name("Meriel Necole T. Manuel");
$example->set_email("mnmerielmanuel@gmail.com");
$example->set_username("Riel");
echo "Name: " . $example->get_name() . "<br>";
echo "Username: " . $example->get_username() . "<br>";
echo "Email: " . $example->get_email() . "<br>";
$example->addFriend("You");
$example->postStatus("Meriel");
