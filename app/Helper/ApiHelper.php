<?php



  function msg_success(){
    return "Success";
  }

  function code_success(){
    return 200;
  }

  function msg_data_error(){
    return "Missing Some Request Data";
  }

  function code_data_error(){
    return 400;
  }

  function msg_general_error(){
    return "There is an error";
  }

  function toJson($code,$message,$data){
        $status['code'] = $code;
        $status['message'] = $message;
        $response['status'] = $status;
        if($data != null)
            $response['data'] = $data;
        return response()->json($response,200);
    }

  /*function random_code(){
    return rand(1111, 9999);
  }*/
