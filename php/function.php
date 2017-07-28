<?php

  function getStasName(){
    $data = file_get_contents('http://www.mantisid.id/api/product/sff_dt_r_newest.php');
    $parseData = json_decode($data);
    $stasN = $parseData->Station;
    echo $stasN;
  }
  function getDataNew(){
    $data = file_get_contents('http://www.mantisid.id/api/product/sff_dt_r_newest.php');
    $parseData = json_decode($data);
    $date = $parseData->Date_Time;
    $dateDate = substr($date,0,strpos($date,' '));
    $dateTime = substr($date,strpos($date,' ')+1,8);
    $soilM = $parseData->Soil_Moisture;
    $soilT = $parseData->Soil_Temp;
    $plantH = $parseData->Plant_Height;
    $waterL = $parseData->Water_Level;
    $airT = $parseData->Air_Temp;
    $airH = $parseData->Air_Humid;
    $lightI = $parseData->Light_Intensity;
    $smokeL = $parseData->Smoke;
    $vibraL = $parseData->Vibration;
    $gPitch = $parseData->Gyro_Pitch;
    $gRoll = $parseData->Gyro_Roll;
    $gYaw = $parseData->Gyro_Yaw;
    $stasN = $parseData->Station;
  }

  function getDataAll(){
    $data = file_get_contents('http://www.mantisid.id/api/product/sff_dt_r.php');
    $parseData = json_decode($data);
    $date = $parseData->records[0]->Date_Time;
    echo $date;
  }


?>
