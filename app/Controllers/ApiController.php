<?php

namespace App\Controllers;
//defined('BASEPATH') OR exit('No direct script access allowed');       


class ApiController extends BaseController
{


    public function registration()
    {
        $data = array(
            'labels' => array('1', '2', '3', '4', '5','6','7','8','9','10','11', '12', '13', '14', '15', '16','17','18','19','20','21', '22', '23', '24', '25', '26','27','28','29','30','31'),
            'data' => array(15,5,8,30,35,20,25,10,8,30)
         );
        return $this->response
                    ->setStatusCode(200)
                    ->setContentType('application/json')
                    ->setBody(json_encode($data));
    }

}