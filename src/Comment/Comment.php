<?php
namespace Bassa\Php2\Comment;

class Comment {
  private int $id;
  private int $userId;
  private int $articleId;
  private string $text;

  public function __construct() {
    echo "Загрузился класс Comment" . PHP_EOL;
  }
}