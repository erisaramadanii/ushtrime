<?php
class Person {
    private $emri;
    private $mosha;

    public function __construct($emri, $mosha) {
        $this->emri = $emri;
        $this->mosha = $mosha;
    }

    public function getInfo() {
        return "Emri: " . $this->emri . " | Mosha: " . $this->mosha;
    }

    public function getEmri() {
        return $this->emri;
    }

    public function setEmri($emri) {
        $this->emri = $emri;
    }

    public function getMosha() {
        return $this->mosha;
    }

    public function setMosha($mosha) {
        $this->mosha = $mosha;
    }
}
?>

