<?php
class GameCharacter
{
  private $playerName;
  private $score;
  
  public function setPlayer()
  {
    $this->playerName = $playerName;
  }
  
  public function setScore()
  {
    $this->score = $score;
  }
  
  public function getPlayer()
  {
    return $this->$playerName;
  }
  
  public function getScore()
  {
    return $this->score;
  }
}