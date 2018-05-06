<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CSV to .htaccess redirection 301</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <style>
    .header-app-container:before {
      content: '';
      display: block;
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: radial-gradient(875.03px at 50% 100%, rgba(0, 100, 255, 0.25) 0%, rgba(0, 100, 255, 5e-05) 100%);
      -webkit-animation: a2123173423pulseBG 3s infinite linear;
      -moz-animation: a2123173423pulseBG 3s infinite linear;
      animation: a2123173423pulseBG 3s infinite linear;
    }

    .headline {
      font-size: 36px;
      text-align: center;
      font-weight: 300;
    }

    .step {
      display: flex;
    }

    .step-image {
      margin-right: 30px;
    }

    .step-icon svg.first-step path {
      fill: #4821ba;
    }

    .step-icon svg.second-step path {
      fill: #2e55c3;
    }

    .step-icon svg.third-step path {
      fill: #30b69f;
    }

    .step-icon svg {
      width: 200px;
      height: auto;
    }

    .step-icon svg path {
      fill: #000;
    }

    #footer {
      padding: 30px 0;
      background-color: #0b0e15;
      margin-top: 30px;
    }

    .step {
      font-weight: 300;
    }

    .step h2 {
      font-weight: 300;
    }

    #footer a {
      color: #fff;
    }
  </style>
</head>
<body
    style="overflow-x: hidden; min-height: 100vh; background: linear-gradient(0deg, #0B0F15, #0B0F15); font-family: 'Roboto', sans-serif;">

<div class="header-app" style="position: relative;">
  <div class="container header-app-container" style="color: #fff; padding-top: 100px;">

    <div class="main-content" style="position: relative; z-index: 1;">
      <h1 style="font-size: 56px; line-height: 64px; font-weight: bold; text-align: center; margin-bottom: 8px;">
        CSV to .htaccess<br>Redirection 301
      </h1>

      <div class="text-center" style="margin-bottom: 40px;">
        <a href="https://github.com/Akiletour/csvtohtaccess">
          <img src="logo-github.png" alt="" width="150" height="49">
        </a>
      </div>

      <p class="text-center"
         style="font-size: 24px; color: rgba(255,255,255, .5); font-weight: 300; line-height: 1.2em">Allows you to
        convert a CSV file to an.htaccess file<br>containing the 301 redirect list.</p>

      <form action="" method="post" enctype="multipart/form-data" class="form-inline justify-content-center"
            style="margin-top: 70px;">
        <div class="form-group text-center">
          <input type="file" class="form-control-file" name="csvfile">
        </div>
        <div class="form-group">
          <button class="btn btn-danger btn-lg" type="submit">Convert</button>
        </div>
      </form>
    </div>

    <div id="result"
         style="position: relative; z-index: 3; background: #141a23; border-radius: 5px; padding: 12px 0 0; margin-top: 40px; margin-bottom: -60px; box-shadow: 0 5px 50px 0 rgba(0, 0, 0, 0.35);">
      <div class="result-buttons" style="padding: 14px;">
        <div class="result-buttons-icon"
             style="display: inline-block; vertical-align: top; margin-right: 4px; border-radius: 50%; background: #3e434a; width: 10px; height: 10px;"></div>
        <div class="result-buttons-icon"
             style="display: inline-block; vertical-align: top; margin-right: 4px; border-radius: 50%; background: #3e434a; width: 10px; height: 10px;"></div>
        <div class="result-buttons-icon"
             style="display: inline-block; vertical-align: top; margin-right: 4px; border-radius: 50%; background: #3e434a; width: 10px; height: 10px;"></div>
      </div>
        <?php if (isset($_FILES['csvfile'])) : ?>
          <pre style="color: rgba(255,255,255, .5); max-height: 400px; padding: 12px;"><?php
              $fp = fopen("php://temp", 'r+');
              fputs($fp, file_get_contents($_FILES['csvfile']['tmp_name']));
              rewind($fp);

              $data = [];

              while (($item = fgetcsv($fp)) !== FALSE) {
                  echo sprintf("RewriteRule\t^%s$\t%s\t[R=301,L,NC]\n", $item[0], $item[1]);
              }
              ?></pre>
        <?php else : ?>
          <p style="color: rgba(255,255,255, .5); max-height: 400px; padding: 12px;">$ cat example.csv<br>old url, new
            url</p>
        <?php endif; ?>
    </div>
  </div>

  <div style="position: absolute; left: 50%; transform: translateX(-50%); bottom: 0; display: flex;">
    <svg width="1510px" height="914px" viewBox="0 0 1420 914" version="1.1"><title>Polygons background Copy</title>
      <desc>Created with Sketch.</desc>
      <defs></defs>
      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Landing-page" transform="translate(0.000000, -2.000000)">
          <g id="Header-Copy" transform="translate(0.000000, 2.000000)">
            <g id="Polygons-background-Copy" transform="translate(-58.000000, -10.000000)">
              <polygon id="Polygon" fill="#3871D0"
                       transform="translate(435.301270, 945.301270) rotate(-30.000000) translate(-435.301270, -945.301270) "
                       points="435.30127 897.30127 476.87049 921.30127 476.87049 969.30127 435.30127 993.30127 393.732051 969.30127 393.732051 921.30127"></polygon>
              <polygon id="Polygon-Copy" fill="#3859D0"
                       transform="translate(435.568730, 858.698730) rotate(-30.000000) translate(-435.568730, -858.698730) "
                       points="435.56873 810.69873 477.13795 834.69873 477.13795 882.69873 435.56873 906.69873 393.999511 882.69873 394.190698 834.368523"></polygon>
              <polygon id="Polygon-Copy-137" fill="#284AC3"
                       transform="translate(510.000000, 816.353829) rotate(-30.000000) translate(-510.000000, -816.353829) "
                       points="510 768.353829 551.569219 792.353829 551.569219 840.353829 510 864.353829 468.430781 840.353829 468.621968 792.023622"></polygon>
              <polygon id="Polygon-Copy-27" fill="#3859D0"
                       transform="translate(510.767949, 987.951905) rotate(-30.000000) translate(-510.767949, -987.951905) "
                       points="510.767949 939.951905 552.337169 963.951905 552.337169 1011.95191 510.767949 1035.95191 469.19873 1011.95191 469.389917 963.621698"></polygon>
              <polygon id="Polygon-Copy-3" fill="#3838D0"
                       transform="translate(360.767949, 815.951905) rotate(-30.000000) translate(-360.767949, -815.951905) "
                       points="360.767949 767.951905 402.337169 791.951905 402.337169 839.951905 360.767949 863.951905 319.19873 839.951905 319.389917 791.621698"></polygon>
              <polygon id="Polygon-Copy-4" fill="#3A35A7"
                       transform="translate(435.767949, 772.951905) rotate(-30.000000) translate(-435.767949, -772.951905) "
                       points="435.767949 724.951905 477.337169 748.951905 477.337169 796.951905 435.767949 820.951905 394.19873 796.951905 394.389917 748.621698"></polygon>
              <polygon id="Polygon-Copy-136" fill="#4641B8"
                       transform="translate(511.000000, 730.353829) rotate(-30.000000) translate(-511.000000, -730.353829) "
                       points="511 682.353829 552.569219 706.353829 552.569219 754.353829 511 778.353829 469.430781 754.353829 469.621968 706.023622"></polygon>
              <polygon id="Polygon-Copy-139" fill="#3833AC"
                       transform="translate(585.738003, 773.353829) rotate(-30.000000) translate(-585.738003, -773.353829) "
                       points="585.738003 725.353829 627.307222 749.353829 627.307222 797.353829 585.738003 821.353829 544.168784 797.353829 544.359971 749.023622"></polygon>
              <polygon id="Polygon-Copy-5" fill="#39249C"
                       transform="translate(360.767949, 729.951905) rotate(-30.000000) translate(-360.767949, -729.951905) "
                       points="360.767949 681.951905 402.337169 705.951905 402.337169 753.951905 360.767949 777.951905 319.19873 753.951905 319.389917 705.621698"></polygon>
              <polygon id="Polygon-Copy-2" fill="#3881D0"
                       transform="translate(360.767949, 901.951905) rotate(-30.000000) translate(-360.767949, -901.951905) "
                       points="360.767949 853.951905 402.337169 877.951905 402.337169 925.951905 360.767949 949.951905 319.19873 925.951905 319.389917 877.621698"></polygon>
              <polygon id="Polygon-Copy-12" fill="#38AFD0"
                       transform="translate(360.767949, 987.951905) rotate(-30.000000) translate(-360.767949, -987.951905) "
                       points="360.767949 939.951905 402.337169 963.951905 402.337169 1011.95191 360.767949 1035.95191 319.19873 1011.95191 319.389917 963.621698"></polygon>
              <polygon id="Polygon-Copy-6" fill="#388ED0"
                       transform="translate(285.767949, 858.951905) rotate(-30.000000) translate(-285.767949, -858.951905) "
                       points="285.767949 810.951905 327.337169 834.951905 327.337169 882.951905 285.767949 906.951905 244.19873 882.951905 244.389917 834.621698"></polygon>
              <polygon id="Polygon-Copy-8" fill="#3860D0"
                       transform="translate(285.767949, 772.951905) rotate(-30.000000) translate(-285.767949, -772.951905) "
                       points="285.767949 724.951905 327.337169 748.951905 327.337169 796.951905 285.767949 820.951905 244.19873 796.951905 244.389917 748.621698"></polygon>
              <polygon id="Polygon-Copy-15" fill="#005EC6"
                       transform="translate(212.084392, 815.500000) rotate(-30.000000) translate(-212.084392, -815.500000) "
                       points="212.084392 786.632487 237.084392 801.066243 237.084392 829.933757 212.084392 844.367513 187.084392 829.933757 187.199373 800.867655"></polygon>
              <polygon id="Polygon-Copy-53" fill="#005EC6"
                       transform="translate(1409.084392, 816.500000) rotate(-30.000000) translate(-1409.084392, -816.500000) "
                       points="1409.08439 787.632487 1434.08439 802.066243 1434.08439 830.933757 1409.08439 845.367513 1384.08439 830.933757 1384.19937 801.867655"></polygon>
              <polygon id="Polygon-Copy-54" fill="#723BD9"
                       transform="translate(1259.084392, 554.500000) rotate(-30.000000) translate(-1259.084392, -554.500000) "
                       points="1259.08439 525.632487 1284.08439 540.066243 1284.08439 568.933757 1259.08439 583.367513 1234.08439 568.933757 1234.19937 539.867655"></polygon>
              <polygon id="Polygon-Copy-17" fill="#005EC6"
                       transform="translate(212.084392, 643.500000) rotate(-30.000000) translate(-212.084392, -643.500000) "
                       points="212.084392 614.632487 237.084392 629.066243 237.084392 657.933757 212.084392 672.367513 187.084392 657.933757 187.199373 628.867655"></polygon>
              <polygon id="Polygon-Copy-80" fill="#2C3F53"
                       transform="translate(845.084392, 37.500000) rotate(-30.000000) translate(-845.084392, -37.500000) "
                       points="845.084392 8.63248654 870.084392 23.0662433 870.084392 51.9337567 845.084392 66.3675135 820.084392 51.9337567 820.199373 22.8676546"></polygon>
              <polygon id="Polygon-Copy-24" fill="#5200AC"
                       transform="translate(285.084392, 517.500000) rotate(-30.000000) translate(-285.084392, -517.500000) "
                       points="285.084392 488.632487 310.084392 503.066243 310.084392 531.933757 285.084392 546.367513 260.084392 531.933757 260.199373 502.867655"></polygon>
              <polygon id="Polygon-Copy-25" fill="#5200AC"
                       transform="translate(510.084392, 554.500000) rotate(-30.000000) translate(-510.084392, -554.500000) "
                       points="510.084392 525.632487 535.084392 540.066243 535.084392 568.933757 510.084392 583.367513 485.084392 568.933757 485.199373 539.867655"></polygon>
              <polygon id="Polygon-Copy-16" fill="#0D64C3"
                       transform="translate(166.042196, 839.750000) rotate(-30.000000) translate(-166.042196, -839.750000) "
                       points="166.042196 825.316243 178.542196 832.533122 178.542196 846.966878 166.042196 854.183757 153.542196 846.966878 153.599687 832.433827"></polygon>
              <polygon id="Polygon-Copy-60" fill="#652CD0"
                       transform="translate(959.042196, 561.750000) rotate(-30.000000) translate(-959.042196, -561.750000) "
                       points="959.042196 547.316243 971.542196 554.533122 971.542196 568.966878 959.042196 576.183757 946.542196 568.966878 946.599687 554.433827"></polygon>
              <polygon id="Polygon-Copy-42" fill="#5196E2"
                       transform="translate(405.042196, 324.750000) rotate(-30.000000) translate(-405.042196, -324.750000) "
                       points="405.042196 310.316243 417.542196 317.533122 417.542196 331.966878 405.042196 339.183757 392.542196 331.966878 392.599687 317.433827"></polygon>
              <polygon id="Polygon-Copy-61" fill="#5196E2"
                       transform="translate(1391.042196, 438.750000) rotate(-30.000000) translate(-1391.042196, -438.750000) "
                       points="1391.0422 424.316243 1403.5422 431.533122 1403.5422 445.966878 1391.0422 453.183757 1378.5422 445.966878 1378.59969 431.433827"></polygon>
              <polygon id="Polygon-Copy-69" fill="#652CD0"
                       transform="translate(1408.042196, 643.750000) rotate(-30.000000) translate(-1408.042196, -643.750000) "
                       points="1408.0422 629.316243 1420.5422 636.533122 1420.5422 650.966878 1408.0422 658.183757 1395.5422 650.966878 1395.59969 636.433827"></polygon>
              <polygon id="Polygon-Copy-65" fill="#212E3C"
                       transform="translate(1092.042196, 55.750000) rotate(-30.000000) translate(-1092.042196, -55.750000) "
                       points="1092.0422 41.3162433 1104.5422 48.5331216 1104.5422 62.9668784 1092.0422 70.1837567 1079.5422 62.9668784 1079.59969 48.4338273"></polygon>
              <polygon id="Polygon-Copy-43" fill="#1D80EC"
                       transform="translate(196.542196, 242.399147) rotate(-30.000000) translate(-196.542196, -242.399147) "
                       points="196.542196 234.316243 203.542196 238.357695 203.542196 246.440599 196.542196 250.482051 189.542196 246.440599 189.574391 238.30209"></polygon>
              <polygon id="Polygon-Copy-71" fill="#37217E"
                       transform="translate(138.103630, 532.500000) rotate(-30.000000) translate(-138.103630, -532.500000) "
                       points="138.10363 524.417096 145.10363 528.458548 145.10363 536.541452 138.10363 540.582904 131.10363 536.541452 131.135824 528.402943"></polygon>
              <polygon id="Polygon-Copy-62" fill="#1D80EC"
                       transform="translate(1097.103630, 393.500000) rotate(-30.000000) translate(-1097.103630, -393.500000) "
                       points="1097.10363 385.417096 1104.10363 389.458548 1104.10363 397.541452 1097.10363 401.582904 1090.10363 397.541452 1090.13582 389.402943"></polygon>
              <polygon id="Polygon-Copy-70" fill="#1D80EC"
                       transform="translate(1455.103630, 306.500000) rotate(-30.000000) translate(-1455.103630, -306.500000) "
                       points="1455.10363 298.417096 1462.10363 302.458548 1462.10363 310.541452 1455.10363 314.582904 1448.10363 310.541452 1448.13582 302.402943"></polygon>
              <polygon id="Polygon-Copy-44" fill="#1D80EC"
                       transform="translate(556.216878, 266.500000) rotate(-30.000000) translate(-556.216878, -266.500000) "
                       points="556.216878 260.726497 561.216878 263.613249 561.216878 269.386751 556.216878 272.273503 551.216878 269.386751 551.239875 263.573531"></polygon>
              <polygon id="Polygon-Copy-64" fill="#1D80EC"
                       transform="translate(1288.216878, 245.500000) rotate(-30.000000) translate(-1288.216878, -245.500000) "
                       points="1288.21688 239.726497 1293.21688 242.613249 1293.21688 248.386751 1288.21688 251.273503 1283.21688 248.386751 1283.23987 242.573531"></polygon>
              <polygon id="Polygon-Copy-63" fill="#1D80EC"
                       transform="translate(1055.216878, 524.500000) rotate(-30.000000) translate(-1055.216878, -524.500000) "
                       points="1055.21688 518.726497 1060.21688 521.613249 1060.21688 527.386751 1055.21688 530.273503 1050.21688 527.386751 1050.23987 521.573531"></polygon>
              <polygon id="Polygon-Copy-68" fill="#1D80EC"
                       transform="translate(904.216878, 173.500000) rotate(-30.000000) translate(-904.216878, -173.500000) "
                       points="904.216878 167.726497 909.216878 170.613249 909.216878 176.386751 904.216878 179.273503 899.216878 176.386751 899.239875 170.573531"></polygon>
              <polygon id="Polygon-Copy-11" fill="#2E55C3"
                       transform="translate(210.767949, 729.951905) rotate(-30.000000) translate(-210.767949, -729.951905) "
                       points="210.767949 681.951905 252.337169 705.951905 252.337169 753.951905 210.767949 777.951905 169.19873 753.951905 169.389917 705.621698"></polygon>
              <polygon id="Polygon-Copy-9" fill="#481FBA"
                       transform="translate(285.767949, 686.951905) rotate(-30.000000) translate(-285.767949, -686.951905) "
                       points="285.767949 638.951905 327.337169 662.951905 327.337169 710.951905 285.767949 734.951905 244.19873 710.951905 244.389917 662.621698"></polygon>
              <polygon id="Polygon-Copy-13" fill="#5C2CB6"
                       transform="translate(360.767949, 643.951905) rotate(-30.000000) translate(-360.767949, -643.951905) "
                       points="360.767949 595.951905 402.337169 619.951905 402.337169 667.951905 360.767949 691.951905 319.19873 667.951905 319.389917 619.621698"></polygon>
              <polygon id="Polygon-Copy-18" fill="#652CD0" opacity="0.5"
                       transform="translate(435.767949, 600.951905) rotate(-30.000000) translate(-435.767949, -600.951905) "
                       points="435.767949 552.951905 477.337169 576.951905 477.337169 624.951905 435.767949 648.951905 394.19873 624.951905 394.389917 576.621698"></polygon>
              <polygon id="Polygon-Copy-22" fill="#5517CA"
                       transform="translate(510.767949, 643.951905) rotate(-30.000000) translate(-510.767949, -643.951905) "
                       points="510.767949 595.951905 552.337169 619.951905 552.337169 667.951905 510.767949 691.951905 469.19873 667.951905 469.389917 619.621698"></polygon>
              <polygon id="Polygon-Copy-23" fill="#4810AF"
                       transform="translate(585.767949, 686.951905) rotate(-30.000000) translate(-585.767949, -686.951905) "
                       points="585.767949 638.951905 627.337169 662.951905 627.337169 710.951905 585.767949 734.951905 544.19873 710.951905 544.389917 662.621698"></polygon>
              <polygon id="Polygon-Copy-141" fill="#4810AF"
                       transform="translate(660.000000, 730.353829) rotate(-30.000000) translate(-660.000000, -730.353829) "
                       points="660 682.353829 701.569219 706.353829 701.569219 754.353829 660 778.353829 618.430781 754.353829 618.621968 706.023622"></polygon>
              <polygon id="Polygon-Copy-14" fill="#513090"
                       transform="translate(285.767949, 600.951905) rotate(-30.000000) translate(-285.767949, -600.951905) "
                       points="285.767949 552.951905 327.337169 576.951905 327.337169 624.951905 285.767949 648.951905 244.19873 624.951905 244.389917 576.621698"></polygon>
              <polygon id="Polygon-Copy-10" fill="#4411A1"
                       transform="translate(435.767949, 686.951905) rotate(-30.000000) translate(-435.767949, -686.951905) "
                       points="435.767949 638.951905 477.337169 662.951905 477.337169 710.951905 435.767949 734.951905 394.19873 710.951905 394.389917 662.621698"></polygon>
              <polygon id="Polygon-Copy-7" fill="#009CC8"
                       transform="translate(285.767949, 944.951905) rotate(-30.000000) translate(-285.767949, -944.951905) "
                       points="285.767949 896.951905 327.337169 920.951905 327.337169 968.951905 285.767949 992.951905 244.19873 968.951905 244.389917 920.621698"></polygon>
              <polygon id="Polygon-Copy-19" fill="#05A5B5"
                       transform="translate(210.767949, 901.951905) rotate(-30.000000) translate(-210.767949, -901.951905) "
                       points="210.767949 853.951905 252.337169 877.951905 252.337169 925.951905 210.767949 949.951905 169.19873 925.951905 169.389917 877.621698"></polygon>
              <polygon id="Polygon-Copy-20" fill="#05B5AD"
                       transform="translate(210.767949, 987.951905) rotate(-30.000000) translate(-210.767949, -987.951905) "
                       points="210.767949 939.951905 252.337169 963.951905 252.337169 1011.95191 210.767949 1035.95191 169.19873 1011.95191 169.389917 963.621698"></polygon>
              <polygon id="Polygon-Copy-21" fill="#12AA90"
                       transform="translate(135.767949, 944.951905) rotate(-30.000000) translate(-135.767949, -944.951905) "
                       points="135.767949 896.951905 177.337169 920.951905 177.337169 968.951905 135.767949 992.951905 94.1987298 968.951905 94.3899169 920.621698"></polygon>
              <polygon id="Polygon-Copy-59" fill="#30B69F"
                       transform="translate(60.767949, 901.951905) rotate(-30.000000) translate(-60.767949, -901.951905) "
                       points="60.7679492 853.951905 102.337169 877.951905 102.337169 925.951905 60.7679492 949.951905 19.1987298 925.951905 19.3899169 877.621698"></polygon>
              <polygon id="Polygon-Copy-66" fill="#1A947E"
                       transform="translate(61.767949, 987.951905) rotate(-30.000000) translate(-61.767949, -987.951905) "
                       points="61.7679492 939.951905 103.337169 963.951905 103.337169 1011.95191 61.7679492 1035.95191 20.1987298 1011.95191 20.3899169 963.621698"></polygon>
              <polygon id="Polygon" fill="#3871D0"
                       transform="translate(884.539273, 945.301270) rotate(-30.000000) translate(-884.539273, -945.301270) "
                       points="884.539273 897.30127 926.108493 921.30127 926.108493 969.30127 884.539273 993.30127 842.970054 969.30127 842.970054 921.30127"></polygon>
              <polygon id="Polygon-Copy" fill="#3859D0"
                       transform="translate(884.738003, 858.951905) rotate(-30.000000) translate(-884.738003, -858.951905) "
                       points="884.738003 810.951905 926.307222 834.951905 926.307222 882.951905 884.738003 906.951905 843.168784 882.951905 843.359971 834.621698"></polygon>
              <polygon id="Polygon-Copy-143" fill="#2F50C8"
                       transform="translate(810.000000, 816.353829) rotate(-30.000000) translate(-810.000000, -816.353829) "
                       points="810 768.353829 851.569219 792.353829 851.569219 840.353829 810 864.353829 768.430781 840.353829 768.621968 792.023622"></polygon>
              <polygon id="Polygon-Copy-3" fill="#3838D0"
                       transform="translate(1034.569219, 945.000000) rotate(-30.000000) translate(-1034.569219, -945.000000) "
                       points="1034.56922 897 1076.13844 921 1076.13844 969 1034.56922 993 993 969 993.191187 920.669793"></polygon>
              <polygon id="Polygon-Copy-5" fill="#39249C"
                       transform="translate(1034.569219, 859.000000) rotate(-30.000000) translate(-1034.569219, -859.000000) "
                       points="1034.56922 811 1076.13844 835 1076.13844 883 1034.56922 907 993 883 993.191187 834.669793"></polygon>
              <polygon id="Polygon-Copy-2" fill="#3881D0"
                       transform="translate(809.738003, 901.951905) rotate(-30.000000) translate(-809.738003, -901.951905) "
                       points="809.738003 853.951905 851.307222 877.951905 851.307222 925.951905 809.738003 949.951905 768.168784 925.951905 768.359971 877.621698"></polygon>
              <polygon id="Polygon-Copy-12" fill="#388ED0"
                       transform="translate(809.738003, 987.951905) rotate(-30.000000) translate(-809.738003, -987.951905) "
                       points="809.738003 939.951905 851.307222 963.951905 851.307222 1011.95191 809.738003 1035.95191 768.168784 1011.95191 768.359971 963.621698"></polygon>
              <polygon id="Polygon-Copy-6" fill="#388ED0"
                       transform="translate(734.738003, 858.951905) rotate(-30.000000) translate(-734.738003, -858.951905) "
                       points="734.738003 810.951905 776.307222 834.951905 776.307222 882.951905 734.738003 906.951905 693.168784 882.951905 693.359971 834.621698"></polygon>
              <polygon id="Polygon-Copy-142" fill="#433DBC"
                       transform="translate(734.767949, 773.353829) rotate(-30.000000) translate(-734.767949, -773.353829) "
                       points="734.767949 725.353829 776.337169 749.353829 776.337169 797.353829 734.767949 821.353829 693.19873 797.353829 693.389917 749.023622"></polygon>
              <polygon id="Polygon-Copy-144" fill="#4943C8"
                       transform="translate(810.000000, 730.353829) rotate(-30.000000) translate(-810.000000, -730.353829) "
                       points="810 682.353829 851.569219 706.353829 851.569219 754.353829 810 778.353829 768.430781 754.353829 768.621968 706.023622"></polygon>
              <polygon id="Polygon-Copy-8" fill="#3860D0"
                       transform="translate(959.569219, 902.000000) rotate(-30.000000) translate(-959.569219, -902.000000) "
                       points="959.569219 854 1001.13844 878 1001.13844 926 959.569219 950 918 926 918.191187 877.669793"></polygon>
              <polygon id="Polygon-Copy-146" fill="#3466F5"
                       transform="translate(960.000000, 988.353829) rotate(-30.000000) translate(-960.000000, -988.353829) "
                       points="960 940.353829 1001.56922 964.353829 1001.56922 1012.35383 960 1036.35383 918.430781 1012.35383 918.621968 964.023622"></polygon>
              <polygon id="Polygon-Copy-9" fill="#481FBA"
                       transform="translate(959.569219, 816.000000) rotate(-30.000000) translate(-959.569219, -816.000000) "
                       points="959.569219 768 1001.13844 792 1001.13844 840 959.569219 864 918 840 918.191187 791.669793"></polygon>
              <polygon id="Polygon-Copy-145" fill="#3D1AA0"
                       transform="translate(885.000000, 773.353829) rotate(-30.000000) translate(-885.000000, -773.353829) "
                       points="885 725.353829 926.569219 749.353829 926.569219 797.353829 885 821.353829 843.430781 797.353829 843.621968 749.023622"></polygon>
              <polygon id="Polygon-Copy-13" fill="#5517C9"
                       transform="translate(1034.569219, 772.951905) rotate(-30.000000) translate(-1034.569219, -772.951905) "
                       points="1034.56922 724.951905 1076.13844 748.951905 1076.13844 796.951905 1034.56922 820.951905 993 796.951905 993.191187 748.621698"></polygon>
              <polygon id="Polygon-Copy-18" fill="#3A35A7"
                       transform="translate(1109.569219, 731.000000) rotate(-30.000000) translate(-1109.569219, -731.000000) "
                       points="1109.56922 683 1151.13844 707 1151.13844 755 1109.56922 779 1068 755 1068.19119 706.669793"></polygon>
              <polygon id="Polygon-Copy-33" fill-opacity="0.5" fill="#4412A1"
                       transform="translate(1184.767949, 687.951905) rotate(-30.000000) translate(-1184.767949, -687.951905) "
                       points="1184.76795 639.951905 1226.33717 663.951905 1226.33717 711.951905 1184.76795 735.951905 1143.19873 711.951905 1143.38992 663.621698"></polygon>
              <polygon id="Polygon-Copy-58" fill="#4412A1"
                       transform="translate(734.767949, 687.951905) rotate(-30.000000) translate(-734.767949, -687.951905) "
                       points="734.767949 639.951905 776.337169 663.951905 776.337169 711.951905 734.767949 735.951905 693.19873 711.951905 693.389917 663.621698"></polygon>
              <polygon id="Polygon-Copy-38" fill="#5C2CB6"
                       transform="translate(1259.767949, 644.951905) rotate(-30.000000) translate(-1259.767949, -644.951905) "
                       points="1259.76795 596.951905 1301.33717 620.951905 1301.33717 668.951905 1259.76795 692.951905 1218.19873 668.951905 1218.38992 620.621698"></polygon>
              <polygon id="Polygon-Copy-56" fill="#5326A7"
                       transform="translate(884.767949, 687.951905) rotate(-30.000000) translate(-884.767949, -687.951905) "
                       points="884.767949 639.951905 926.337169 663.951905 926.337169 711.951905 884.767949 735.951905 843.19873 711.951905 843.389917 663.621698"></polygon>
              <polygon id="Polygon-Copy-35" fill="#39249C"
                       transform="translate(1259.767949, 730.951905) rotate(-30.000000) translate(-1259.767949, -730.951905) "
                       points="1259.76795 682.951905 1301.33717 706.951905 1301.33717 754.951905 1259.76795 778.951905 1218.19873 754.951905 1218.38992 706.621698"></polygon>
              <polygon id="Polygon-Copy-47" fill="#4820BA"
                       transform="translate(1334.767949, 687.951905) rotate(-30.000000) translate(-1334.767949, -687.951905) "
                       points="1334.76795 639.951905 1376.33717 663.951905 1376.33717 711.951905 1334.76795 735.951905 1293.19873 711.951905 1293.38992 663.621698"></polygon>
              <polygon id="Polygon-Copy-51" fill="#1F9E88"
                       transform="translate(1409.767949, 902.951905) rotate(-30.000000) translate(-1409.767949, -902.951905) "
                       points="1409.76795 854.951905 1451.33717 878.951905 1451.33717 926.951905 1409.76795 950.951905 1368.19873 926.951905 1368.38992 878.621698"></polygon>
              <polygon id="Polygon-Copy-52" fill="#05B46F"
                       transform="translate(1409.767949, 988.951905) rotate(-30.000000) translate(-1409.767949, -988.951905) "
                       points="1409.76795 940.951905 1451.33717 964.951905 1451.33717 1012.95191 1409.76795 1036.95191 1368.19873 1012.95191 1368.38992 964.621698"></polygon>
              <polygon id="Polygon-Copy-67" fill="#0C955F"
                       transform="translate(1484.767949, 945.951905) rotate(-30.000000) translate(-1484.767949, -945.951905) "
                       points="1484.76795 897.951905 1526.33717 921.951905 1526.33717 969.951905 1484.76795 993.951905 1443.19873 969.951905 1443.38992 921.621698"></polygon>
              <polygon id="Polygon-Copy-48" fill="#513090"
                       transform="translate(1334.767949, 601.951905) rotate(-30.000000) translate(-1334.767949, -601.951905) "
                       points="1334.76795 553.951905 1376.33717 577.951905 1376.33717 625.951905 1334.76795 649.951905 1293.19873 625.951905 1293.38992 577.621698"></polygon>
              <polygon id="Polygon-Copy-46" fill="#3860D0"
                       transform="translate(1334.767949, 773.951905) rotate(-30.000000) translate(-1334.767949, -773.951905) "
                       points="1334.76795 725.951905 1376.33717 749.951905 1376.33717 797.951905 1334.76795 821.951905 1293.19873 797.951905 1293.38992 749.621698"></polygon>
              <polygon id="Polygon-Copy-50" fill="#2E55C2"
                       transform="translate(1409.767949, 730.951905) rotate(-30.000000) translate(-1409.767949, -730.951905) "
                       points="1409.76795 682.951905 1451.33717 706.951905 1451.33717 754.951905 1409.76795 778.951905 1368.19873 754.951905 1368.38992 706.621698"></polygon>
              <polygon id="Polygon-Copy-49" fill="#05A5B4"
                       transform="translate(1334.767949, 859.951905) rotate(-30.000000) translate(-1334.767949, -859.951905) "
                       points="1334.76795 811.951905 1376.33717 835.951905 1376.33717 883.951905 1334.76795 907.951905 1293.19873 883.951905 1293.38992 835.621698"></polygon>
              <polygon id="Polygon-Copy-29" fill="#5517C9"
                       transform="translate(1109.767949, 644.951905) rotate(-30.000000) translate(-1109.767949, -644.951905) "
                       points="1109.76795 596.951905 1151.33717 620.951905 1151.33717 668.951905 1109.76795 692.951905 1068.19873 668.951905 1068.38992 620.621698"></polygon>
              <polygon id="Polygon-Copy-55" fill="#5D23CA"
                       transform="translate(959.767949, 644.951905) rotate(-30.000000) translate(-959.767949, -644.951905) "
                       points="959.767949 596.951905 1001.33717 620.951905 1001.33717 668.951905 959.767949 692.951905 918.19873 668.951905 918.389917 620.621698"></polygon>
              <polygon id="Polygon-Copy-57" fill="#5D23CA"
                       transform="translate(659.250000, 643.475953) rotate(-30.000000) translate(-659.250000, -643.475953) "
                       points="659.25 618.475953 680.900635 630.975953 680.900635 655.975953 659.25 668.475953 637.599365 655.975953 637.698942 630.80397"></polygon>
              <polygon id="Polygon-Copy-34" fill="#652CD0" opacity="0.5"
                       transform="translate(1184.767949, 601.951905) rotate(-30.000000) translate(-1184.767949, -601.951905) "
                       points="1184.76795 553.951905 1226.33717 577.951905 1226.33717 625.951905 1184.76795 649.951905 1143.19873 625.951905 1143.38992 577.621698"></polygon>
              <polygon id="Polygon-Copy-14" fill="#4412A1"
                       transform="translate(959.569219, 730.000000) rotate(-30.000000) translate(-959.569219, -730.000000) "
                       points="959.569219 682 1001.13844 706 1001.13844 754 959.569219 778 918 754 918.191187 705.669793"></polygon>
              <polygon id="Polygon-Copy-28" fill="#4811AF"
                       transform="translate(1034.767949, 687.951905) rotate(-30.000000) translate(-1034.767949, -687.951905) "
                       points="1034.76795 639.951905 1076.33717 663.951905 1076.33717 711.951905 1034.76795 735.951905 993.19873 711.951905 993.389917 663.621698"></polygon>
              <polygon id="Polygon-Copy-10" fill="#3656CA"
                       transform="translate(1109.569219, 816.000000) rotate(-30.000000) translate(-1109.569219, -816.000000) "
                       points="1109.56922 768 1151.13844 792 1151.13844 840 1109.56922 864 1068 840 1068.19119 791.669793"></polygon>
              <polygon id="Polygon-Copy-32" fill="#3838D0"
                       transform="translate(1184.767949, 772.951905) rotate(-30.000000) translate(-1184.767949, -772.951905) "
                       points="1184.76795 724.951905 1226.33717 748.951905 1226.33717 796.951905 1184.76795 820.951905 1143.19873 796.951905 1143.38992 748.621698"></polygon>
              <polygon id="Polygon-Copy-39" fill="#388ED0"
                       transform="translate(1259.767949, 816.951905) rotate(-30.000000) translate(-1259.767949, -816.951905) "
                       points="1259.76795 768.951905 1301.33717 792.951905 1301.33717 840.951905 1259.76795 864.951905 1218.19873 840.951905 1218.38992 792.621698"></polygon>
              <polygon id="Polygon-Copy-30" fill="#3881D0"
                       transform="translate(1184.767949, 858.951905) rotate(-30.000000) translate(-1184.767949, -858.951905) "
                       points="1184.76795 810.951905 1226.33717 834.951905 1226.33717 882.951905 1184.76795 906.951905 1143.19873 882.951905 1143.38992 834.621698"></polygon>
              <polygon id="Polygon-Copy-40" fill="#009CC7"
                       transform="translate(1259.767949, 902.951905) rotate(-30.000000) translate(-1259.767949, -902.951905) "
                       points="1259.76795 854.951905 1301.33717 878.951905 1301.33717 926.951905 1259.76795 950.951905 1218.19873 926.951905 1218.38992 878.621698"></polygon>
              <polygon id="Polygon-Copy-45" fill="#13AA90"
                       transform="translate(1334.767949, 945.951905) rotate(-30.000000) translate(-1334.767949, -945.951905) "
                       points="1334.76795 897.951905 1376.33717 921.951905 1376.33717 969.951905 1334.76795 993.951905 1293.19873 969.951905 1293.38992 921.621698"></polygon>
              <polygon id="Polygon-Copy-31" fill="#376FCD"
                       transform="translate(1109.767949, 901.951905) rotate(-30.000000) translate(-1109.767949, -901.951905) "
                       points="1109.76795 853.951905 1151.33717 877.951905 1151.33717 925.951905 1109.76795 949.951905 1068.19873 925.951905 1068.38992 877.621698"></polygon>
              <polygon id="Polygon-Copy-36" fill="#05B4AD"
                       transform="translate(1184.767949, 944.951905) rotate(-30.000000) translate(-1184.767949, -944.951905) "
                       points="1184.76795 896.951905 1226.33717 920.951905 1226.33717 968.951905 1184.76795 992.951905 1143.19873 968.951905 1143.38992 920.621698"></polygon>
              <polygon id="Polygon-Copy-41" fill="#099E98"
                       transform="translate(1259.767949, 988.951905) rotate(-30.000000) translate(-1259.767949, -988.951905) "
                       points="1259.76795 940.951905 1301.33717 964.951905 1301.33717 1012.95191 1259.76795 1036.95191 1218.19873 1012.95191 1218.38992 964.621698"></polygon>
              <polygon id="Polygon-Copy-37" fill="#38AFD0"
                       transform="translate(1110.767949, 987.951905) rotate(-30.000000) translate(-1110.767949, -987.951905) "
                       points="1110.76795 939.951905 1152.33717 963.951905 1152.33717 1011.95191 1110.76795 1035.95191 1069.19873 1011.95191 1069.38992 963.621698"></polygon>
              <polygon id="Polygon-Copy-7" fill="#3871D0"
                       transform="translate(734.738003, 944.951905) rotate(-30.000000) translate(-734.738003, -944.951905) "
                       points="734.738003 896.951905 776.307222 920.951905 776.307222 968.951905 734.738003 992.951905 693.168784 968.951905 693.359971 920.621698"></polygon>
              <polygon id="Polygon-Copy-19" fill="#3859D0"
                       transform="translate(659.738003, 901.951905) rotate(-30.000000) translate(-659.738003, -901.951905) "
                       points="659.738003 853.951905 701.307222 877.951905 701.307222 925.951905 659.738003 949.951905 618.168784 925.951905 618.359971 877.621698"></polygon>
              <polygon id="Polygon-Copy-140" fill="#335BEC"
                       transform="translate(660.250000, 816.353829) rotate(-30.000000) translate(-660.250000, -816.353829) "
                       points="660.25 768.353829 701.819219 792.353829 701.819219 840.353829 660.25 864.353829 618.680781 840.353829 618.871968 792.023622"></polygon>
              <polygon id="Polygon-Copy-20" fill="#3860D0"
                       transform="translate(659.738003, 987.951905) rotate(-30.000000) translate(-659.738003, -987.951905) "
                       points="659.738003 939.951905 701.307222 963.951905 701.307222 1011.95191 659.738003 1035.95191 618.168784 1011.95191 618.359971 963.621698"></polygon>
              <polygon id="Polygon-Copy-21" fill="#3871D0"
                       transform="translate(584.738003, 944.951905) rotate(-30.000000) translate(-584.738003, -944.951905) "
                       points="584.738003 896.951905 626.307222 920.951905 626.307222 968.951905 584.738003 992.951905 543.168784 968.951905 543.359971 920.621698"></polygon>
              <polygon id="Polygon-Copy-26" fill="#388ED0"
                       transform="translate(509.767949, 901.951905) rotate(-30.000000) translate(-509.767949, -901.951905) "
                       points="509.767949 853.951905 551.337169 877.951905 551.337169 925.951905 509.767949 949.951905 468.19873 925.951905 468.389917 877.621698"></polygon>
              <polygon id="Polygon-Copy-138" fill="#2781C6"
                       transform="translate(585.000000, 859.353829) rotate(-30.000000) translate(-585.000000, -859.353829) "
                       points="585 811.353829 626.569219 835.353829 626.569219 883.353829 585 907.353829 543.430781 883.353829 543.621968 835.023622"></polygon>
            </g>
          </g>
        </g>
      </g>
    </svg>
  </div>

</div>

<div class="app-content" style="background-color: #fff; position: relative; z-index: 2; padding-top: 90px;">
  <div class="container">
    <div class="headline" style="margin-bottom: 80px;">
      With a few clicks, you can generate your.htaccess file to redirect your old URL to the new one.
    </div>

    <div class="steps ">
      <div class="step">
        <div class="step-image">
          <div class="step-icon">
            <svg class="first-step" width="42" height="42" viewBox="0 0 42 42" version="1.1">
              <path
                  d="M 34.0732 16.6191C 33.5394 16.6191 32.9922 16.5524 32.4316 16.4189C 31.8978 16.2855 31.3639 16.0986 30.8301 15.8584L 25.625 21.0635L 28.8281 22.1445C 28.8815 22.1445 28.9215 22.1579 28.9482 22.1846C 29.0016 22.2113 29.0417 22.2513 29.0684 22.3047L 40.6396 33.916C 40.7731 34.0495 40.8398 34.2096 40.8398 34.3965C 40.8398 34.5833 40.7731 34.7435 40.6396 34.877L 35.1943 40.3623C 35.141 40.4157 35.0742 40.4557 34.9941 40.4824C 34.9141 40.5358 34.8206 40.5625 34.7139 40.5625C 34.6338 40.5625 34.5537 40.5358 34.4736 40.4824C 34.3936 40.4557 34.3135 40.4157 34.2334 40.3623L 22.6621 28.7109C 22.6354 28.6842 22.6087 28.6576 22.582 28.6309C 22.5553 28.5775 22.5286 28.5241 22.502 28.4707L 21.4209 25.2275L 16.2158 30.4727C 16.9098 31.9141 17.1501 33.3288 16.9365 34.7168C 16.723 36.0781 16.0824 37.306 15.0146 38.4004C 14.2939 39.0944 13.4665 39.6283 12.5322 40.002C 11.598 40.3757 10.5837 40.5625 9.48926 40.5625C 8.9554 40.5625 8.42155 40.5091 7.8877 40.4023C 7.38053 40.3223 6.87337 40.2021 6.36621 40.042C 6.25944 40.0153 6.16602 39.9486 6.08594 39.8418C 6.00586 39.7617 5.95247 39.6683 5.92578 39.5615C 5.89909 39.4548 5.89909 39.3346 5.92578 39.2012C 5.95247 39.0944 6.00586 39.001 6.08594 38.9209L 9.88965 35.1172L 7.6875 32.9551C 7.66081 32.9284 7.63411 32.915 7.60742 32.915C 7.60742 32.8883 7.60742 32.8617 7.60742 32.835L 5.52539 30.7529L 1.76172 34.5566C 1.68164 34.6367 1.58822 34.6901 1.48145 34.7168C 1.37467 34.7435 1.2679 34.7435 1.16113 34.7168C 1.05436 34.7168 0.960938 34.6901 0.880859 34.6367C 0.800781 34.5566 0.73405 34.4766 0.680664 34.3965C -0.0133464 33.0885 -0.200195 31.6071 0.120117 29.9521C 0.467122 28.2972 1.24121 26.8825 2.44238 25.708C 3.53678 24.5869 4.7513 23.9062 6.08594 23.666C 7.44727 23.4258 8.79525 23.6527 10.1299 24.3467L 16.9365 17.5L 9.92969 10.4932L 6.12598 10.4932C 6.0459 10.4932 5.96582 10.4798 5.88574 10.4531C 5.80566 10.3997 5.72559 10.3464 5.64551 10.293L 0.200195 4.80762C 0.0667318 4.67415 0 4.514 0 4.32715C 0 4.1403 0.0667318 3.98014 0.200195 3.84668L 4.28418 -0.237305C 4.41764 -0.370767 4.5778 -0.4375 4.76465 -0.4375C 4.9515 -0.4375 5.11165 -0.370767 5.24512 -0.237305L 10.6904 5.20801C 10.7705 5.28809 10.8239 5.36816 10.8506 5.44824C 10.8773 5.52832 10.8906 5.6084 10.8906 5.68848L 10.8906 9.53223L 17.8975 16.5391L 24.6641 9.77246C 23.9967 8.41113 23.7965 7.0498 24.0635 5.68848C 24.3304 4.30045 25.0378 3.03255 26.1855 1.88477C 26.9329 1.13737 27.8138 0.563477 28.8281 0.163086C 29.8424 -0.237305 30.9102 -0.4375 32.0312 -0.4375C 32.5117 -0.4375 32.9788 -0.397461 33.4326 -0.317383C 33.9131 -0.263998 34.3802 -0.157227 34.834 0.00292969C 34.9408 0.0296232 35.0342 0.0963534 35.1143 0.203125C 35.1943 0.283203 35.2477 0.376627 35.2744 0.483398C 35.3011 0.59017 35.3011 0.710287 35.2744 0.84375C 35.2477 0.950522 35.1943 1.04395 35.1143 1.12402L 31.3105 4.8877L 33.4326 7.00977C 33.486 7.03646 33.526 7.0765 33.5527 7.12988C 33.5794 7.15658 33.6061 7.19662 33.6328 7.25L 35.6748 9.29199L 39.4385 5.48828C 39.5452 5.4082 39.652 5.35482 39.7588 5.32812C 39.8923 5.30143 40.0124 5.30143 40.1191 5.32812C 40.2526 5.35482 40.3594 5.42155 40.4395 5.52832C 40.5195 5.63509 40.5729 5.74186 40.5996 5.84863C 40.8398 7.12988 40.8265 8.62467 40.5596 10.333C 40.3193 12.0413 39.612 13.5094 38.4375 14.7373C 37.8503 15.3512 37.1829 15.8184 36.4355 16.1387C 35.6882 16.459 34.9007 16.6191 34.0732 16.6191ZM 23.7432 27.8701L 34.7139 38.8809L 39.1982 34.3965L 28.2275 23.3857L 24.7041 22.1846L 22.582 24.3467L 23.7432 27.8701ZM 9.5293 5.96875L 4.76465 1.2041L 1.6416 4.32715L 6.40625 9.13184L 9.5293 9.13184L 9.5293 5.96875ZM 39.3984 7.4502L 36.1553 10.7334C 36.0218 10.8669 35.8617 10.9336 35.6748 10.9336C 35.488 10.9336 35.3278 10.8669 35.1943 10.7334L 32.5117 8.05078C 32.5117 8.05078 32.4984 8.03744 32.4717 8.01074C 32.4717 7.98405 32.4583 7.9707 32.4316 7.9707L 29.8691 5.36816C 29.8158 5.31478 29.7624 5.24805 29.709 5.16797C 29.6823 5.08789 29.6689 4.99447 29.6689 4.8877C 29.6689 4.80762 29.6823 4.72754 29.709 4.64746C 29.7624 4.56738 29.8158 4.4873 29.8691 4.40723L 33.2725 1.00391C 33.0589 0.977213 32.8454 0.963867 32.6318 0.963867C 32.445 0.937174 32.2448 0.923828 32.0312 0.923828C 31.0703 0.923828 30.1628 1.09733 29.3086 1.44434C 28.4811 1.76465 27.7604 2.23177 27.1465 2.8457C 26.1589 3.86003 25.5716 4.94108 25.3848 6.08887C 25.1979 7.23665 25.4382 8.38444 26.1055 9.53223C 26.1855 9.66569 26.2122 9.8125 26.1855 9.97266C 26.1589 10.1328 26.0921 10.2663 25.9854 10.373L 10.7305 25.668C 10.6237 25.7747 10.4902 25.8415 10.3301 25.8682C 10.1699 25.8682 10.0231 25.8415 9.88965 25.7881C 8.74186 25.0941 7.60742 24.8271 6.48633 24.9873C 5.39193 25.1208 4.36426 25.6813 3.40332 26.6689C 2.54915 27.4964 1.94857 28.484 1.60156 29.6318C 1.28125 30.7796 1.25456 31.8473 1.52148 32.835L 5.04492 29.3115C 5.17839 29.1781 5.33854 29.1113 5.52539 29.1113C 5.71224 29.1113 5.8724 29.1781 6.00586 29.3115L 8.68848 31.9941C 8.68848 31.9941 8.68848 32.0075 8.68848 32.0342C 8.71517 32.0609 8.74186 32.0742 8.76855 32.0742L 11.3311 34.6367C 11.3844 34.7168 11.4245 34.7969 11.4512 34.877C 11.5046 34.957 11.5312 35.0371 11.5312 35.1172C 11.5312 35.224 11.5046 35.3174 11.4512 35.3975C 11.4245 35.4775 11.3844 35.5576 11.3311 35.6377L 7.92773 39.041C 8.16797 39.0944 8.42155 39.1344 8.68848 39.1611C 8.9554 39.1878 9.22233 39.2012 9.48926 39.2012C 10.1299 39.2012 10.8639 39.0811 11.6914 38.8408C 12.5456 38.6273 13.333 38.1602 14.0537 37.4395C 14.9613 36.5052 15.4818 35.4642 15.6152 34.3164C 15.7487 33.1419 15.4684 31.9274 14.7744 30.6729C 14.721 30.5394 14.6943 30.4059 14.6943 30.2725C 14.721 30.1123 14.7878 29.9788 14.8945 29.8721L 30.1895 14.5371C 30.2962 14.4303 30.4163 14.3636 30.5498 14.3369C 30.71 14.3102 30.8568 14.3369 30.9902 14.417C 31.4974 14.6839 32.0179 14.8975 32.5518 15.0576C 33.0856 15.1911 33.5928 15.2578 34.0732 15.2578C 34.7406 15.2578 35.3545 15.1377 35.915 14.8975C 36.4756 14.6305 36.9827 14.2568 37.4365 13.7764C 38.2373 12.9222 38.7712 11.9212 39.0381 10.7734C 39.3317 9.62565 39.4518 8.5179 39.3984 7.4502Z"></path>
            </svg>
          </div>
        </div>
        <div class="step-text">
          <h2>1. Creating the CSV file.</h2>
          <p style="color: #7a7f87; font-size: 18px;">Create a new document on Google Sheets to make two columns, the
            first for the old address and a second for the new address.</p>
        </div>
      </div>
      <div class="step-separator" style="width: 2px; height: 24px; opacity: 0.25; margin-left: 90px; border: dashed 1px #000; margin-bottom: 10px;">
      </div>
      <div class="step">
        <div class="step-image">
          <div class="step-icon">
            <svg class="second-step" width="41" height="42" viewBox="0 0 41 42" version="1.1">
              <path id="path-cloud-os_fill"
                    d="M 32.2314 29.5117C 32.0446 29.5651 31.8711 29.5384 31.7109 29.4316C 31.5508 29.3249 31.4574 29.1781 31.4307 28.9912C 31.3773 28.8044 31.404 28.6309 31.5107 28.4707C 31.6175 28.3105 31.7643 28.2171 31.9512 28.1904C 33.0456 27.9235 34.0599 27.4964 34.9941 26.9092C 35.9284 26.2952 36.7292 25.5612 37.3965 24.707C 38.0905 23.8529 38.6243 22.9053 38.998 21.8643C 39.3717 20.7965 39.5586 19.6888 39.5586 18.541C 39.5586 17.2064 39.2917 15.9518 38.7578 14.7773C 38.2507 13.5762 37.5433 12.5352 36.6357 11.6543C 35.7549 10.7467 34.7139 10.0394 33.5127 9.53223C 32.3382 9.02506 31.0703 8.77148 29.709 8.77148C 29.6022 8.77148 29.4954 8.77148 29.3887 8.77148C 29.3086 8.77148 29.2152 8.78483 29.1084 8.81152C 28.9482 8.83822 28.8014 8.81152 28.668 8.73145C 28.5345 8.62467 28.4411 8.50456 28.3877 8.37109C 27.9873 7.25 27.4268 6.23568 26.7061 5.32812C 26.012 4.42057 25.1979 3.64648 24.2637 3.00586C 23.3561 2.33854 22.3551 1.83138 21.2607 1.48438C 20.1663 1.11068 19.0186 0.923828 17.8174 0.923828C 16.2959 0.923828 14.8545 1.21745 13.4932 1.80469C 12.1318 2.39193 10.944 3.19271 9.92969 4.20703C 8.91536 5.19466 8.11458 6.36914 7.52734 7.73047C 6.9401 9.0651 6.64648 10.4932 6.64648 12.0146C 6.64648 12.2816 6.65983 12.5485 6.68652 12.8154C 6.71322 13.0557 6.73991 13.3226 6.7666 13.6162C 6.79329 13.7764 6.7666 13.9365 6.68652 14.0967C 6.60645 14.2301 6.48633 14.3236 6.32617 14.377C 4.83138 14.8574 3.63021 15.7249 2.72266 16.9795C 1.8151 18.2074 1.36133 19.5954 1.36133 21.1436C 1.36133 23.1188 2.06868 24.8138 3.4834 26.2285C 4.89811 27.6165 6.60645 28.3105 8.6084 28.3105L 8.84863 28.3105C 9.06217 28.3105 9.23568 28.3773 9.36914 28.5107C 9.5026 28.6442 9.56934 28.8044 9.56934 28.9912C 9.56934 29.1781 9.5026 29.3382 9.36914 29.4717C 9.23568 29.6051 9.06217 29.6719 8.84863 29.6719L 8.6084 29.6719C 7.40723 29.6719 6.28613 29.4583 5.24512 29.0312C 4.2041 28.5775 3.29655 27.9635 2.52246 27.1895C 1.74837 26.4154 1.13444 25.5078 0.680664 24.4668C 0.226888 23.4258 0 22.318 0 21.1436C 0 19.4085 0.480469 17.8337 1.44141 16.4189C 2.42904 14.9775 3.73698 13.9232 5.36523 13.2559C 5.33854 13.0423 5.31185 12.8421 5.28516 12.6553C 5.28516 12.4417 5.28516 12.2282 5.28516 12.0146C 5.28516 10.3063 5.60547 8.69141 6.24609 7.16992C 6.91341 5.64844 7.80762 4.32715 8.92871 3.20605C 10.0765 2.08496 11.4111 1.2041 12.9326 0.563477C 14.4541 -0.103842 16.0824 -0.4375 17.8174 -0.4375C 19.0986 -0.4375 20.3398 -0.25065 21.541 0.123047C 22.7422 0.496744 23.8499 1.0306 24.8643 1.72461C 25.8786 2.41862 26.7861 3.24609 27.5869 4.20703C 28.3877 5.16797 29.015 6.23568 29.4688 7.41016C 29.5221 7.41016 29.5622 7.41016 29.5889 7.41016C 29.6156 7.41016 29.6556 7.41016 29.709 7.41016C 31.2572 7.41016 32.7119 7.70378 34.0732 8.29102C 35.4346 8.87826 36.6224 9.67904 37.6367 10.6934C 38.651 11.681 39.4518 12.8555 40.0391 14.2168C 40.6263 15.5514 40.9199 16.9928 40.9199 18.541C 40.9199 19.849 40.7064 21.1035 40.2793 22.3047C 39.8522 23.4792 39.2516 24.5602 38.4775 25.5479C 37.7035 26.5355 36.7826 27.3763 35.7148 28.0703C 34.6471 28.7376 33.486 29.2181 32.2314 29.5117ZM 14.334 14.6572L 26.5859 14.6572C 26.7995 14.6572 26.973 14.6973 27.1064 14.7773C 27.2399 14.8574 27.3066 14.9909 27.3066 15.1777L 27.3066 39.8018C 27.3066 39.9886 27.2399 40.1621 27.1064 40.3223C 26.973 40.4824 26.7995 40.5625 26.5859 40.5625L 14.334 40.5625C 14.1471 40.5625 13.987 40.4824 13.8535 40.3223C 13.7201 40.1621 13.6533 39.9886 13.6533 39.8018L 13.6533 15.1777C 13.6533 14.9909 13.7201 14.8574 13.8535 14.7773C 13.987 14.6973 14.1471 14.6572 14.334 14.6572ZM 15.0146 39.2012L 25.9053 39.2012L 25.9053 16.0186L 15.0146 16.0186L 15.0146 39.2012ZM 20.46 36.3984C 19.7126 36.3984 19.0719 36.1315 18.5381 35.5977C 18.0042 35.0638 17.7373 34.4098 17.7373 33.6357C 17.7373 32.8883 18.0042 32.2477 18.5381 31.7139C 19.0719 31.18 19.7126 30.9131 20.46 30.9131C 21.2074 30.9131 21.848 31.18 22.3818 31.7139C 22.9157 32.2477 23.1826 32.8883 23.1826 33.6357C 23.1826 34.4098 22.9157 35.0638 22.3818 35.5977C 21.848 36.1315 21.2074 36.3984 20.46 36.3984ZM 20.46 32.2744C 20.0863 32.2744 19.766 32.4079 19.499 32.6748C 19.2321 32.9417 19.0986 33.262 19.0986 33.6357C 19.0986 34.0361 19.2321 34.3698 19.499 34.6367C 19.766 34.9036 20.0863 35.0371 20.46 35.0371C 20.8337 35.0371 21.154 34.9036 21.4209 34.6367C 21.6878 34.3698 21.8213 34.0361 21.8213 33.6357C 21.8213 33.262 21.6878 32.9417 21.4209 32.6748C 21.154 32.4079 20.8337 32.2744 20.46 32.2744ZM 22.502 24.1865L 18.418 24.1865C 18.2311 24.1865 18.071 24.1064 17.9375 23.9463C 17.804 23.7594 17.7373 23.5726 17.7373 23.3857C 17.7373 23.1989 17.804 23.0654 17.9375 22.9854C 18.071 22.8786 18.2311 22.8252 18.418 22.8252L 22.502 22.8252C 22.6888 22.8252 22.849 22.8786 22.9824 22.9854C 23.1159 23.0654 23.1826 23.1989 23.1826 23.3857C 23.1826 23.5726 23.1159 23.7594 22.9824 23.9463C 22.849 24.1064 22.6888 24.1865 22.502 24.1865ZM 22.502 20.1025L 18.418 20.1025C 18.2311 20.1025 18.071 20.0225 17.9375 19.8623C 17.804 19.6755 17.7373 19.4886 17.7373 19.3018C 17.7373 19.1149 17.804 18.9814 17.9375 18.9014C 18.071 18.7946 18.2311 18.7412 18.418 18.7412L 22.502 18.7412C 22.6888 18.7412 22.849 18.7946 22.9824 18.9014C 23.1159 18.9814 23.1826 19.1149 23.1826 19.3018C 23.1826 19.4886 23.1159 19.6755 22.9824 19.8623C 22.849 20.0225 22.6888 20.1025 22.502 20.1025Z"></path>
            </svg>
          </div>
        </div>
        <div class="step-text">
          <h2>2. Export du fichier CSV</h2>
          <p style="color: #7a7f87; font-size: 18px;">Click File => Download in format => Comma separated values
            (.csv)</p>
        </div>
      </div>

      <div>
        <div class="step-separator" style="width: 2px; height: 24px; opacity: 0.25; margin-left: 90px; border: dashed 1px #000; margin-bottom: 10px;">
      </div>
      <div class="step">
        <div class="step-image">
          <div class="step-icon">
            <svg width="48" height="36" viewBox="0 0 48 36" version="1.1" class="third-step">
              <g id="Canvas" transform="translate(-5120 -4587)">
                <g id="Icon/Socket Registry">
                  <g id="socket">
                    <use xlink:href="#path-socket-registry_fill" transform="translate(5120 4587)"></use>
                  </g>
                  <g id="socket">
                    <use xlink:href="#path-socket-registry_fill" transform="translate(5142.15 4600.85)"></use>
                  </g>
                </g>
              </g>
              <defs>
                <path id="path-socket-registry_fill" fill-rule="evenodd"
                      d="M 19.0356 21.9375L 25.1177 11.2935C 25.1602 11.2212 25.1816 11.1489 25.1816 11.0771C 25.1816 11.0049 25.1602 10.9326 25.1177 10.8604L 19.0356 0.216309C 18.9927 0.144043 18.9395 0.090332 18.8755 0.0541992C 18.8115 0.0180664 18.7437 0 18.6729 0L 6.50879 0C 6.4375 0 6.3667 0.0180664 6.29541 0.0541992C 6.22412 0.090332 6.17432 0.144043 6.146 0.216309L 0.0639648 10.8604C 0.0214844 10.9326 0 11.0049 0 11.0771C 0 11.1489 0.0214844 11.2212 0.0639648 11.2935L 6.146 21.9375C 6.17432 22.0098 6.22412 22.0635 6.29541 22.0996C 6.3667 22.1357 6.4375 22.1538 6.50879 22.1538L 18.6729 22.1538C 18.7437 22.1538 18.8115 22.1357 18.8755 22.0996C 18.9395 22.0635 18.9927 22.0098 19.0356 21.9375ZM 7.03809 1.47705L 18.1602 1.47705L 23.7012 11.0771L 18.1602 20.6772L 7.03809 20.6772L 1.47705 11.0771L 7.03809 1.47705Z"></path>
              </defs>
            </svg>
          </div>
        </div>
        <div class="step-text">
          <h2>3. Upload on CSVToHtaccess</h2>
          <p style="color: #7a7f87; font-size: 18px;">And we load the file here.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="footer">
  <div class="container text-center">
    <a href="https://www.inrage.fr">Made with ❤️ at inRage</a>
  </div>
</div>


</body>
</html>
