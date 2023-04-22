<?php

namespace App\Controllers;
//defined('BASEPATH') OR exit('No direct script access allowed');       


class ApiController extends BaseController
{


    public function stats()
    {
        $data = array('key1' => 'value1', 'key2' => 'value2');
        return $this->response
                    ->setStatusCode(200)
                    ->setContentType('application/json')
                    ->setBody(json_encode($data));
    }

}