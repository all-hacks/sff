<!DOCTYPE html>
<?php
  include_once('../php/function.php');
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMART FLOATING FARM</title>
    <link rel="icon" href="../assets/img/sff-logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/sff2.css">
    <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="../js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="../js/moment.min.js"></script>
    <script type="text/javascript" src="../js/sff.js"></script>
    <script type="text/javascript" src="../css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
  </head>
  <body>
    <div class="header navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-logo col col-xs-2">
            <div class="logo">
              <img class="logo-desktop" src="../assets/img/sff-logo-rect2.png" alt="">
              <img class="logo-phone" src="../assets/img/sff-logo.png" alt="">
            </div>
          </div>
          <div class="platformStatus col col-xs-10">
            <div class="row">
              <div class="col-stasName col col-sm-3">
                <span class="stasName">
                  <img src="../assets/icon/sff-pf.png" alt="">
                </span>
                <label class="stasLabel whiteText" id="id-stasName">
                  <?php getStasName(); ?>
                </label>
              </div>
              <div class="col-stasLocation col col-sm-3">
                <span class="stasLocation">
                  <i class="fa fa-map-marker fa-lg whiteText"></i>
                </span>
                <label class="stasLabel whiteText" id="id-stasLocation">Bogor, Indonesia</label>
              </div>
              <div class="col-stasDate col col-sm-3">
                <span class="stasDate">
                  <i class="fa fa-calendar fa-lg whiteText"></i>
                </span>
                <label class="stasLabel stasDate whiteText" id="id-stasDate"></label>
              </div>
              <div class="col-stasTime col col-sm-3">
                <span class="stasTime">
                  <i class="fa fa-clock-o fa-lg whiteText"></i>
                </span>
                <label class="stasLabel stasDate whiteText" id="id-stasTime"></label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="baris1 container-fluid">
      <div class="row" style="padding:15px;">
        <div class="col-chart1 col-sm-6">
          <h3>Smart Floating Farm Monitoring</h3>
          <div class="allParamChart" id="chart1">
            <script type="text/javascript">
              allParamChart();
            </script>
          </div>
        </div>
        <div class="col-sm-6" style="padding-left:15px; padding-top:0; padding-right:0;">
          <div class="col-chart2">
            <h3>Heading</h3>
            <div class="col-chart-2-content" style="text-align:center; margin-top:20px; margin-left:200px;">
              <div class="coc1"style="position:absolute;">
                <img id='dYaw' src="../assets/icon/coc/1.png" style="height:250px;">
              </div>
              <div class="coc2" style="position:absolute;">
                <img id='dRoll' src="../assets/icon/coc/2.png" style="height:250px;">
              </div>
              <div class="coc4" style="position:absolute;">
                <img id='dPitch' src="../assets/icon/coc/4.png" style="height:250px;">
              </div>
              <div class="coc3" style="position:absolute;">
                <img src="../assets/icon/coc/3.png" style="height:250px;">
              </div>
            </div>
            <div class="row">
              <div class="col-xs-4" style="margin-top:0px; height:250px;">
                <div class="roll">
                  <label>Roll</label>
                  <div class="ab">
                    <label id="roll-lbl">0</label>
                  </div>
                </div>
                <div class="pitch">
                  <label>Pitch</label>
                  <div class="ab">
                    <label id="pitch-lbl">0</label>
                  </div>
                </div>
                <div class="yaw">
                  <label>Yaw</label>
                  <div class="ab">
                    <label id="yaw-lbl">0</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="whiteText" style="text-align:center; margin-top:10px; padding-bottom:5px;">
              <label>Time Update: </label>
              <label id="timeUpd"></label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="baris1-5 container-fluid">
      <div class="row" style="padding-bottom:15px;">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <div class="col-planth">
                <div class="row">
                  <div class="col-planth-chart col-xs-2">
                    <div class="pH-Chart" id="pHchart">
                      <script type="text/javascript">
                        pHChart();
                      </script>
                    </div>
                    <div style="position:absolute;">
                      <img src="../assets/icon/ruler.png" style="height:180px; margin-top:-200px; margin-left:2.5px;">
                    </div>
                  </div>
                  <div class="col-xs-10">
                    <h3 class="whiteText">
                      <span><img src="../assets/icon/plantH.png" alt=""></span>
                      <label>Plant height</label>
                    </h3>
                    <div class="planth-content">
                      <label id="planth">0</label>
                    </div>
                    <div class="whiteText satuan"> cm</div>
                    <div class="whiteText" style="text-align:center;">Time Update:</div>
                    <div class="whiteText" style="text-align:center;">
                      <label id="timeUpd1">Saturday, 22 July 2017</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-soilM col-sm-6">
                <div class="col-soilM-content">
                  <h3 class="whiteText">
                    <span><img src="../assets/icon/soil-moist.png" alt=""></span>
                    <label>Soil Moisture</label>
                  </h3>
                  <div class="soilM-content">
                    <label id="soilM">0</label>
                    <label class="whiteText satuan"> %</label>
                  </div>
                  <div class="soilM-Chart">
                    <div id="soilMchart">
                      <script type="text/javascript">
                      soilMChart();
                      </script>
                    </div>
                    <div style="position:absolute;">
                      <img src="../assets/icon/persent.png" style="z-index:-10; width:100%; height:40px; margin-top:-60px; margin-left:-5px;">
                    </div>
                  </div>
                  <div class="whiteText" style="text-align:center;">Time Update:</div>
                  <div class="whiteText" style="text-align:center;">
                    <label id="timeUpd2">Saturday, 22 July 2017</label>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="row" style="padding-left:15px; padding-right:15px;">
            <div class="col-temp col-sm-12">
              <div class="row">
                <div class="soil-temp col-xs-4">
                  <h3 class="whiteText">
                    <span><img src="../assets/icon/soil-temp.png" alt=""></span>
                    <label>Soil Temp</label>
                  </h3>
                  <div class="soilT-content">
                    <label id="soilT">0</label>
                    <label class="whiteText satuan"> &#x2103</label>
                  </div>
                </div>
                <div class="air-temp col-xs-4">
                  <h3 class="whiteText">
                    <span><img src="../assets/icon/airT.png" alt=""></span>
                    <label>Air Temp</label>
                  </h3>
                  <div class="airT-content">
                    <label id="airT">0</label>
                    <label class="whiteText satuan"> &#x2103</label>
                  </div>
                </div>
                <div class="aH col-xs-4">
                  <div class="airH">
                    <h3 class="whiteText">
                      <span><img src="../assets/icon/airH.png" alt=""></span>
                      <label>Air Humid</label>
                    </h3>
                    <div class="airH-content">
                      <label id="airhumid">0</label>
                      <label class="whiteText satuan"> %</label>
                    </div>
                  </div>
                </div>
              </div>
              <div style="text-align:center; margin-top:-10px;">
                <div class="whiteText" style="text-align:center;">Time Update:</div>
                <div class="whiteText" style="text-align:center;">
                  <label id="timeUpd3">Saturday, 22 July 2017</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="baris2 container-fluid">
      <div class="row" style="padding-bottom:15px;">
        <div class="col-sm-6">
          <div class="row">
            <div class="sL col col-xs-6">
              <div class="smokeL">
                <h3 class="whiteText">
                  <span><img src="../assets/icon/smokeL.png" alt=""></span>
                  <label>Smoke Level</label>
                </h3>
                <div class="smokeL-content">
                  <label id="smokel">0</label>
                  <label class="whiteText satuan"> %</label>
                  <div class="whiteText" style="text-align:center; margin-top:-10px;">Time Update:</div>
                  <div class="whiteText" style="text-align:center;">
                    <label id="timeUpd4">Saturday, 22 July 2017</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="lI col col-xs-6">
              <div class="lightI">
                <h3 class="whiteText">
                  <span><img src="../assets/icon/lightI.png" alt=""></span>
                  <label>Light Intensity</label>
                </h3>
                <div class="lightI-content">
                  <label id="light">0</label>
                  <label class="whiteText satuan"> %</label>
                  <div class="whiteText" style="text-align:center; margin-top:-10px;">Time Update:</div>
                  <div class="whiteText" style="text-align:center;">
                    <label id="timeUpd5">Saturday, 22 July 2017</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="wL col col-xs-6">
              <div class="waterL">
                <h3 class="whiteText">
                  <span><img src="../assets/icon/waterL.png" alt=""></span>
                  <label>Water Level</label>
                </h3>
                <div class="waterL-content">
                  <label id="waterlevel">0</label>
                  <label class="whiteText satuan"> cm</label>
                  <div class="whiteText" style="text-align:center; margin-top:-10px;">Time Update:</div>
                  <div class="whiteText" style="text-align:center;">
                    <label id="timeUpd6">Saturday, 22 July 2017</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="vL col col-xs-6">
              <div class="vibL">
                <h3 class="whiteText">
                  <span><img src="../assets/icon/vibL.png" alt=""></span>
                  <label>Vibration Level</label>
                </h3>
                <div class="vibL-content">
                  <label id="vibralevel">0</label>
                  <label class="whiteText satuan"> %</label>
                  <div class="whiteText" style="text-align:center; margin-top:-10px;">Time Update:</div>
                  <div class="whiteText" style="text-align:center;">
                    <label id="timeUpd7">Saturday, 22 July 2017</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      //lala()
    </script>
  </body>

</html>
