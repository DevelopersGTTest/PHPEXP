<?php

interface Agent{
    public function reporter_start();
    public function reporter_stop();
}

class ModelApi implements Agent {
    public $data;

    //Getter & Setter

    function getData(){
        return $this->data;
    }

    function setData($data){
        $this->data = $data
    }

    public function reporter_start(){
        echo 'start.....';
    }

    public function reporter_stop(){
        echo 'stop....';
    }
}


$agentUMGDevsolutions = new ModelApi();
$agentUMGDevsolutions->setData('REPORTER 1 USER')


//show the info
echo $agentUMGDevsolutions->getData();

?>