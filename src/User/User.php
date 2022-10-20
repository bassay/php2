<?php
namespace Bassa\Php2\User;

class User {
  private int $id;
  private string $name;
  private string $surname;

  public function __construct() {
    echo "Загрузился класс USER" . PHP_EOL;
  }
}