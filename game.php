<?php

class Game {
    private int     $i;
    private string  $title;
    private int     $nbPlayers;

    public function __construct($id,$title,$nbPlayers){
        $this->id = $id;
        $this->title = $title;
        $this->nbPlayers = $nbPlayers;
        
    }
}
/**
 * Get the value of id
 */
public function getId(){
    return $this->id;
}

/**
 * Set the value of id
 * 
 * @return self
 */
public function setId($id){
    $this->id = $id;
}
?>