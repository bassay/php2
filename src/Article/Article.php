<?php
namespace Bassa\Php2\Article;

class Article {
  private int $id;
  private int $userId;
  private string $title;
  private string $body;

  public function __construct() {
    echo "Загрузился класс Article" . PHP_EOL;
  }

}