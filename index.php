<?php

class Point
{
  protected float $x;
  protected float $y;

  public function __construct($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
  }

  public function getX()
  {
    return $this->x;
  }

  public function setX($x)
  {
    $this->x = $x;

    return $this;
  }

  public function getY()
  {
    return $this->y;
  }

  public function setY($y)
  {
    $this->y = $y;

    return $this;
  }

  public function getXY()
  {
    return [$this->x, $this->y];
  }

  public function setXY($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
  }

  public function toString()
  {
    return "($this->x,$this->y)";
  }
}

class MoveablePoint extends Point
{
  protected float $xSpeed;
  protected float $ySpeed;

  public function __construct($x, $y, $xSpeed, $ySpeed)
  {
    parent::__construct($x, $y);
    $this->xSpeed = $xSpeed;
    $this->ySpeed = $ySpeed;
  }

  public function getXSpeed()
  {
    return $this->xSpeed;
  }

  public function setXSpeed($xSpeed)
  {
    $this->xSpeed = $xSpeed;

    return $this;
  }

  public function getYSpeed()
  {
    return $this->ySpeed;
  }

  public function setYSpeed($ySpeed)
  {
    $this->ySpeed = $ySpeed;

    return $this;
  }

  public function setSpeed($xSpeed, $ySpeed)
  {
    $this->xSpeed = $xSpeed;
    $this->ySpeed = $ySpeed;
  }

  public function getSpeed()
  {
    return [$this->xSpeed, $this->ySpeed];
  }

  public function toString()
  {
    return "($this->x,$this->y),speed=($this->xSpeed,$this->ySpeed)";
  }

  public function move()
  {
    $this->x += $this->xSpeed;
    $this->y += $this->ySpeed;
    return $this;
  }
}

$point = new Point(10, 20);
echo $point->toString() . '<br>';

$movablePoint = new MoveablePoint(10, 20, 5, 7);
echo $movablePoint->toString();
