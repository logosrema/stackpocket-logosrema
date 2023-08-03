<?php
class standard {

    private $drawNumber ;
    private $gameinfo;
    private $betdata;


    public function __construct($drawNumber,$gameinfo,$betdata)
    {

        $this->drawNumber = $drawNumber;
        $this->gameinfo   =$gameinfo;
        $this->betdata    =$betdata;
        
    }





    public function index(){

        switch($this->gameinfo['game_id']){

            case 1:
                  return $this->game120();

                  break;
            
            case 2:
                $this->game60();

                break;
        }
    }


    public function game120(){

        
    if($this->betdata == 1  && $this->drawNumber[0] == 1){

        return ['status'=>2,'num_wins'=>1];
    }
    else{
        return ['status'=>2,'num_wins'=>1];
    }

    }


    public function game60(){

        
        if($this->betdata == 2  && $this->drawNumber[0] == 1){
    
            return ['status'=>2,'num_wins'=>1];
        }
        else{
            return ['status'=>2,'num_wins'=>1];
        }
    
        }

}



// $gameinfo = ['game_id'=>1,'game_model'=>1];
// $drawNumber = [1,2,3,4,5];
// $betdata = 1;

// if($gameinfo['game_model'] == 1){
//     $model  = new standard($drawNumber,$gameinfo,$betdata);
   

//     re$model->index());

// }