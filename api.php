<?php 
header("Access-Control-Allow-Origin: * ");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"));
include('class.php');
 
$c = new eComm();
extract($_GET);

if(isset($login)){
    $email = $data->email;
    $password = $data->password;
    echo json_encode($c->login($email, $password));
    exit();
}

if(isset($register)){

    $email = $data->email;
    $name = $data->name;
    $phone = $data->phone;
    $password = $data->password;
    // $comfirm_password = $data->comfirm_password;
    $nairaAcc = '';
    $dollarAcc = '';

    $poundsAcc = "";
    $eurosAcc = '';
    $nairaBalance  = '';
    $dollarBalance = '';
    $poundsBalance = '';
    $eurosBalance = '';

    // if($password !== $comfirm_password){
    //     http_response_code(400);
    //     echo json_encode(['status_code' => 400,'status' => 'fail','message' => 'Password mismatched!']);
    // }else{
    echo json_encode($c->register($name, $email, $phone, $password, $nairaAcc, $dollarAcc,
    $poundsAcc, $eurosAcc, $nairaBalance, $dollarBalance, $poundsBalance, $eurosBalance));
        exit();
    // }
    
}

if(isset($userData)){
    
    
    $token  = $c->token();
    echo json_encode($c->userData($token));
    exit();
}

?>