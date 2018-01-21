<?php

class Login {
    private $NUMVEND;
    private $NICK;
    private $PASS;

    public function inicializar($NUMVEND, $NICK, $PASS) {
        $this->NUMVEND = $NUMVEND;
        $this->NICK = $NICK;
        $this->PASS = $PASS;
    }

    public function getNUMVEND(){return $this->NUMVEND;}
    public function setNUMVEND($NUMVEND){$this->NUMVEND = $NUMVEND;}

    public function getNICK(){return $this->NICK;}
    public function setNICK($NICK){$this->NICK = $NICK;}

    public function getPASS(){return $this->PASS;}
    public function setPASS($PASS){$this->PASS = $PASS;}
}