<?php

require_once "Controlador.php";
class ControleRemoto implements Controlador
{
    private $volume;
    private $tocando;
    private $ligado;

    public function __construct(){
        $this->volume= 50;
        $this->tocando= true;
        $this->ligado= true;
    }
    function getLigar(){
        return $this->ligado;
    }
    function setLigar($ligado){
        $this->ligado= $ligado;
    }
    function getTocando(){
        return $this->tocando;
    }
    function setTocando($tocando){
        $this->tocando = $tocando;
    }
    function getVolume(){
        return $this->volume;
    }
    function setVolume($volume){
        $this->volume = $volume;
    }

    public function ligar()
    {
       echo "<br>Controle->". $this->setLigar(true);echo'ligado!';
    }
    public function desligar()
    {
        echo "<br>Controle->".$this->setLigar(false);echo'desligado!';
    }
    public function aumentarVolume()
    {
        if($this->getLigar()){
            echo '<br>Aumentar volume->'. $this->getVolume().$this->setVolume ($this->getVolume() + 5);
        }
    }
    public function diminuirVolume()
    {
        if($this->getLigar()){
            echo '<br>Diminuir volume->'.$this->getVolume().$this->setVolume($this->getVolume() - 5);
        }
    }
    public function play()
    {
        if(!$this->getTocando() &&  $this->getLigar()){
            echo '<br>Play->'.$this->setTocando(true);echo "yes";
        }
    }
    public function pause()
    {
        if($this->getTocando() && $this->getLigar()){
            echo '<br>Pause:'.$this->setTocando(false);echo 'yes';
        }
    }
}
