<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Primary Meta Tags -->
  <title>MyWebSoluce</title>
  <meta name="title" content="MyWebSoluce">
  <meta name="description" content="MyWebSoluce entreprise de création de sites web implenté dans le Finistère, en Bretagne">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.mywebsoluce.fr/">
  <meta property="og:title" content="MyWebSoluce">
  <meta property="og:description" content="MyWebSoluce entreprise de création de sites web implenté dans le Finistère, en Bretagne">
  <meta property="og:image" content="assets/img/bannière_mws.webp">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://www.mywebsoluce.fr/">
  <meta property="twitter:title" content="MyWebSoluce">
  <meta property="twitter:description" content="MyWebSoluce entreprise de création de sites web implenté dans le Finistère, en Bretagne">
  <meta property="twitter:image" content="assets/img/bannière_mws.webp">


  <link rel="stylesheet" href="/assets/fontawesome/css/all.css">
  <link rel="stylesheet" href="css/style.css?ts=<?= time(); ?>" />
  <link rel="shortcut icon" href="assets/img/logo.webp" type="image/x-icon" />
  <link rel="stylesheet" href="/css/swiper-bundle.min.css" />
  <!-- Matomo -->
  <script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
      var u = "//www.mywebsoluce.fr/matomo";
      _paq.push(['setTrackerUrl', u + 'matomo.php']);
      _paq.push(['setSiteId', '1']);
      var d = document,
        g = d.createElement('script'),
        s = d.getElementsByTagName('script')[0];
      g.async = true;
      g.src = u + 'matomo.js';
      s.parentNode.insertBefore(g, s);
    })();
  </script>
  <!-- End Matomo Code -->

</head>

<body>
  <div class="bg">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" width="100%" id="blobSvg" style="opacity: 1" filter="blur(qs20px)" transform="rotate(qs103)">
      <defs>
        <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" style="stop-color: rgb(238, 118, 51)"></stop>
          <stop offset="100%" style="stop-color: rgb(41, 41, 41)"></stop>
        </linearGradient>
      </defs>
      <path id="blob" fill="url(#gradient)" style="opacity: 1">
        <animate attributeName="d" dur="25s" repeatCount="indefinite" values="M415.01911,310.8863Q439.5452,371.7726,388.0904,405.2945Q336.6356,438.8164,280.7726,433.452Q224.9096,428.08761,185.95759,398.74511Q147.00559,369.40261,129.05219,330.15471Q111.09878,290.9068,102.89189,247.863Q94.68499,204.8192,97.4315,140.3164Q100.17801,75.81361,160.4068,60.51771Q220.6356,45.22181,275.226,60.1356Q329.8164,75.04939,372.9534,109.3658Q416.0904,143.6822,403.29171,196.8411Q390.49301,250,415.01911,310.8863Z;M463.5,311.5Q441,373,396,422Q351,471,287,455Q223,439,179,411Q135,383,79,350Q23,317,51.5,258.5Q80,200,94,143.5Q108,87,162,49.5Q216,12,281.5,24.5Q347,37,383.5,89Q420,141,453,195.5Q486,250,463.5,311.5Z;M432.03478,297.56957Q398.46218,345.13914,356.36479,367.83696Q314.26739,390.53478,267.26739,423.085Q220.26739,455.63521,175.78826,421.28282Q131.30913,386.93043,88.83152,348.48609Q46.35391,310.04174,68.21174,256.28131Q90.06957,202.52087,95.17544,139.65457Q100.28131,76.78826,162.38717,74.23956Q224.49304,71.69087,270.52087,88.04326Q316.5487,104.39565,381.35239,113.97913Q446.15608,123.56261,455.88173,186.78131Q465.60739,250,432.03478,297.56957Z;M437.20545,311.82292Q441.89352,373.64584,380.77431,387.66608Q319.65509,401.68633,271.82754,416.34317Q224,431,184.22569,401.27431Q144.45139,371.54861,81.45601,344.74769Q18.46064,317.94676,58.87153,261.64584Q99.28242,205.34491,102.46413,144.38253Q105.64584,83.42014,164.05961,69.5926Q222.47338,55.76506,274.24769,69.97338Q326.02199,84.18171,376.989,109.95139Q427.95601,135.72107,430.23669,192.86053Q432.51737,250,437.20545,311.82292Z;M440.79254,295.90011Q393.21514,341.80021,357.53347,375.20746Q321.85181,408.61471,271.82218,427.01866Q221.79254,445.4226,171.55544,422.09659Q121.31834,398.77057,68.79254,358.84083Q16.26674,318.91109,38.15202,256.60373Q60.03731,194.29637,79.65586,134.88912Q99.27441,75.48187,157.19648,42.12622Q215.11855,8.77057,268.67782,50.11855Q322.2371,91.46653,362.16684,121.87761Q402.09659,152.2887,445.23326,201.14435Q488.36994,250,440.79254,295.90011Z;M430.80624,308.72934Q432.1339,367.45868,372.72647,377.66948Q313.31905,387.88027,263.72647,442.80911Q214.1339,497.73795,154.61821,463.08837Q95.10253,428.43879,60.15953,372.16526Q25.21653,315.89174,60.3661,260.16239Q95.51568,204.43305,120.04418,166.21939Q144.57268,128.00574,181.94874,82.19376Q219.32479,36.38179,273.74216,57.19376Q328.15953,78.00574,384.05413,102.85329Q439.94874,127.70084,434.71366,188.85042Q429.47858,250,430.80624,308.72934Z;M456.0768,303.76136Q418.13543,357.52271,379.98225,404.29316Q341.82907,451.0636,284.01817,433.65772Q226.20727,416.25185,163.99091,418.54046Q101.77456,420.82907,62.72047,368.86953Q23.66638,316.90999,61.99091,261.65772Q100.31545,206.40545,118.97771,163.62635Q137.63998,120.84725,179.51817,86.26136Q221.39637,51.67547,267.19818,81.83773Q313,112,367.68455,125.86045Q422.36911,139.7209,458.19364,194.86045Q494.01817,250,456.0768,303.76136Z;M440.89145,308.17188Q431.49014,366.34375,386.51892,408.54441Q341.5477,450.74507,280.86143,454.67188Q220.17516,458.59868,161.4046,439.6065Q102.63404,420.61431,74.24712,365.23068Q45.86019,309.84704,51.25164,251.37253Q56.64309,192.89803,94.98232,154.25946Q133.32155,115.62089,180.13528,103.21957Q226.94901,90.81826,286.5366,64.96012Q346.12418,39.10197,382.33594,90.33923Q418.5477,141.57648,434.42023,195.78824Q450.29277,250,440.89145,308.17188Z;M409,303.5Q416,357,378,402Q340,447,282,439Q224,431,187,398.5Q150,366,105.5,335.5Q61,305,45,245Q29,185,59,124.5Q89,64,152.5,40Q216,16,265,63.5Q314,111,383,115.5Q452,120,427,185Q402,250,409,303.5Z;M394.89432,291.86359Q379.96349,333.72718,354.5999,379.04899Q329.23631,424.37079,274.96542,439.22911Q220.69452,454.08742,185.59462,409.0927Q150.49472,364.09798,125.7075,328.96349Q100.92028,293.82901,59.42363,237.80355Q17.92698,181.77809,66.30163,137.5999Q114.67627,93.42171,168.36359,75.4145Q222.05091,57.4073,282.76369,51.5999Q343.47647,45.7925,374.93276,97.57444Q406.38905,149.35639,408.1071,199.67819Q409.82516,250,394.89432,291.86359Z;M415.01911,310.8863Q439.5452,371.7726,388.0904,405.2945Q336.6356,438.8164,280.7726,433.452Q224.9096,428.08761,185.95759,398.74511Q147.00559,369.40261,129.05219,330.15471Q111.09878,290.9068,102.89189,247.863Q94.68499,204.8192,97.4315,140.3164Q100.17801,75.81361,160.4068,60.51771Q220.6356,45.22181,275.226,60.1356Q329.8164,75.04939,372.9534,109.3658Q416.0904,143.6822,403.29171,196.8411Q390.49301,250,415.01911,310.8863Z"></animate>
      </path>
      <path id="blob" fill="url(#gradient)" style="opacity: 1">
        <animate attributeName="d" dur="25s" repeatCount="indefinite" values="M409,303.5Q416,357,378,402Q340,447,282,439Q224,431,187,398.5Q150,366,105.5,335.5Q61,305,45,245Q29,185,59,124.5Q89,64,152.5,40Q216,16,265,63.5Q314,111,383,115.5Q452,120,427,185Q402,250,409,303.5Z;M440.79254,295.90011Q393.21514,341.80021,357.53347,375.20746Q321.85181,408.61471,271.82218,427.01866Q221.79254,445.4226,171.55544,422.09659Q121.31834,398.77057,68.79254,358.84083Q16.26674,318.91109,38.15202,256.60373Q60.03731,194.29637,79.65586,134.88912Q99.27441,75.48187,157.19648,42.12622Q215.11855,8.77057,268.67782,50.11855Q322.2371,91.46653,362.16684,121.87761Q402.09659,152.2887,445.23326,201.14435Q488.36994,250,440.79254,295.90011Z;M456.0768,303.76136Q418.13543,357.52271,379.98225,404.29316Q341.82907,451.0636,284.01817,433.65772Q226.20727,416.25185,163.99091,418.54046Q101.77456,420.82907,62.72047,368.86953Q23.66638,316.90999,61.99091,261.65772Q100.31545,206.40545,118.97771,163.62635Q137.63998,120.84725,179.51817,86.26136Q221.39637,51.67547,267.19818,81.83773Q313,112,367.68455,125.86045Q422.36911,139.7209,458.19364,194.86045Q494.01817,250,456.0768,303.76136Z;M430.80624,308.72934Q432.1339,367.45868,372.72647,377.66948Q313.31905,387.88027,263.72647,442.80911Q214.1339,497.73795,154.61821,463.08837Q95.10253,428.43879,60.15953,372.16526Q25.21653,315.89174,60.3661,260.16239Q95.51568,204.43305,120.04418,166.21939Q144.57268,128.00574,181.94874,82.19376Q219.32479,36.38179,273.74216,57.19376Q328.15953,78.00574,384.05413,102.85329Q439.94874,127.70084,434.71366,188.85042Q429.47858,250,430.80624,308.72934Z;M463.5,311.5Q441,373,396,422Q351,471,287,455Q223,439,179,411Q135,383,79,350Q23,317,51.5,258.5Q80,200,94,143.5Q108,87,162,49.5Q216,12,281.5,24.5Q347,37,383.5,89Q420,141,453,195.5Q486,250,463.5,311.5Z;M394.89432,291.86359Q379.96349,333.72718,354.5999,379.04899Q329.23631,424.37079,274.96542,439.22911Q220.69452,454.08742,185.59462,409.0927Q150.49472,364.09798,125.7075,328.96349Q100.92028,293.82901,59.42363,237.80355Q17.92698,181.77809,66.30163,137.5999Q114.67627,93.42171,168.36359,75.4145Q222.05091,57.4073,282.76369,51.5999Q343.47647,45.7925,374.93276,97.57444Q406.38905,149.35639,408.1071,199.67819Q409.82516,250,394.89432,291.86359Z;M437.20545,311.82292Q441.89352,373.64584,380.77431,387.66608Q319.65509,401.68633,271.82754,416.34317Q224,431,184.22569,401.27431Q144.45139,371.54861,81.45601,344.74769Q18.46064,317.94676,58.87153,261.64584Q99.28242,205.34491,102.46413,144.38253Q105.64584,83.42014,164.05961,69.5926Q222.47338,55.76506,274.24769,69.97338Q326.02199,84.18171,376.989,109.95139Q427.95601,135.72107,430.23669,192.86053Q432.51737,250,437.20545,311.82292Z;M415.01911,310.8863Q439.5452,371.7726,388.0904,405.2945Q336.6356,438.8164,280.7726,433.452Q224.9096,428.08761,185.95759,398.74511Q147.00559,369.40261,129.05219,330.15471Q111.09878,290.9068,102.89189,247.863Q94.68499,204.8192,97.4315,140.3164Q100.17801,75.81361,160.4068,60.51771Q220.6356,45.22181,275.226,60.1356Q329.8164,75.04939,372.9534,109.3658Q416.0904,143.6822,403.29171,196.8411Q390.49301,250,415.01911,310.8863Z;M440.89145,308.17188Q431.49014,366.34375,386.51892,408.54441Q341.5477,450.74507,280.86143,454.67188Q220.17516,458.59868,161.4046,439.6065Q102.63404,420.61431,74.24712,365.23068Q45.86019,309.84704,51.25164,251.37253Q56.64309,192.89803,94.98232,154.25946Q133.32155,115.62089,180.13528,103.21957Q226.94901,90.81826,286.5366,64.96012Q346.12418,39.10197,382.33594,90.33923Q418.5477,141.57648,434.42023,195.78824Q450.29277,250,440.89145,308.17188Z;M432.03478,297.56957Q398.46218,345.13914,356.36479,367.83696Q314.26739,390.53478,267.26739,423.085Q220.26739,455.63521,175.78826,421.28282Q131.30913,386.93043,88.83152,348.48609Q46.35391,310.04174,68.21174,256.28131Q90.06957,202.52087,95.17544,139.65457Q100.28131,76.78826,162.38717,74.23956Q224.49304,71.69087,270.52087,88.04326Q316.5487,104.39565,381.35239,113.97913Q446.15608,123.56261,455.88173,186.78131Q465.60739,250,432.03478,297.56957Z;M409,303.5Q416,357,378,402Q340,447,282,439Q224,431,187,398.5Q150,366,105.5,335.5Q61,305,45,245Q29,185,59,124.5Q89,64,152.5,40Q216,16,265,63.5Q314,111,383,115.5Q452,120,427,185Q402,250,409,303.5Z"></animate>
      </path>
      <path id="blob" fill="url(#gradient)" style="opacity: 1">
        <animate attributeName="d" dur="25s" repeatCount="indefinite" values="M409,303.5Q416,357,378,402Q340,447,282,439Q224,431,187,398.5Q150,366,105.5,335.5Q61,305,45,245Q29,185,59,124.5Q89,64,152.5,40Q216,16,265,63.5Q314,111,383,115.5Q452,120,427,185Q402,250,409,303.5Z;M432.03478,297.56957Q398.46218,345.13914,356.36479,367.83696Q314.26739,390.53478,267.26739,423.085Q220.26739,455.63521,175.78826,421.28282Q131.30913,386.93043,88.83152,348.48609Q46.35391,310.04174,68.21174,256.28131Q90.06957,202.52087,95.17544,139.65457Q100.28131,76.78826,162.38717,74.23956Q224.49304,71.69087,270.52087,88.04326Q316.5487,104.39565,381.35239,113.97913Q446.15608,123.56261,455.88173,186.78131Q465.60739,250,432.03478,297.56957Z;M430.80624,308.72934Q432.1339,367.45868,372.72647,377.66948Q313.31905,387.88027,263.72647,442.80911Q214.1339,497.73795,154.61821,463.08837Q95.10253,428.43879,60.15953,372.16526Q25.21653,315.89174,60.3661,260.16239Q95.51568,204.43305,120.04418,166.21939Q144.57268,128.00574,181.94874,82.19376Q219.32479,36.38179,273.74216,57.19376Q328.15953,78.00574,384.05413,102.85329Q439.94874,127.70084,434.71366,188.85042Q429.47858,250,430.80624,308.72934Z;M415.01911,310.8863Q439.5452,371.7726,388.0904,405.2945Q336.6356,438.8164,280.7726,433.452Q224.9096,428.08761,185.95759,398.74511Q147.00559,369.40261,129.05219,330.15471Q111.09878,290.9068,102.89189,247.863Q94.68499,204.8192,97.4315,140.3164Q100.17801,75.81361,160.4068,60.51771Q220.6356,45.22181,275.226,60.1356Q329.8164,75.04939,372.9534,109.3658Q416.0904,143.6822,403.29171,196.8411Q390.49301,250,415.01911,310.8863Z;M394.89432,291.86359Q379.96349,333.72718,354.5999,379.04899Q329.23631,424.37079,274.96542,439.22911Q220.69452,454.08742,185.59462,409.0927Q150.49472,364.09798,125.7075,328.96349Q100.92028,293.82901,59.42363,237.80355Q17.92698,181.77809,66.30163,137.5999Q114.67627,93.42171,168.36359,75.4145Q222.05091,57.4073,282.76369,51.5999Q343.47647,45.7925,374.93276,97.57444Q406.38905,149.35639,408.1071,199.67819Q409.82516,250,394.89432,291.86359Z;M440.79254,295.90011Q393.21514,341.80021,357.53347,375.20746Q321.85181,408.61471,271.82218,427.01866Q221.79254,445.4226,171.55544,422.09659Q121.31834,398.77057,68.79254,358.84083Q16.26674,318.91109,38.15202,256.60373Q60.03731,194.29637,79.65586,134.88912Q99.27441,75.48187,157.19648,42.12622Q215.11855,8.77057,268.67782,50.11855Q322.2371,91.46653,362.16684,121.87761Q402.09659,152.2887,445.23326,201.14435Q488.36994,250,440.79254,295.90011Z;M463.5,311.5Q441,373,396,422Q351,471,287,455Q223,439,179,411Q135,383,79,350Q23,317,51.5,258.5Q80,200,94,143.5Q108,87,162,49.5Q216,12,281.5,24.5Q347,37,383.5,89Q420,141,453,195.5Q486,250,463.5,311.5Z;M456.0768,303.76136Q418.13543,357.52271,379.98225,404.29316Q341.82907,451.0636,284.01817,433.65772Q226.20727,416.25185,163.99091,418.54046Q101.77456,420.82907,62.72047,368.86953Q23.66638,316.90999,61.99091,261.65772Q100.31545,206.40545,118.97771,163.62635Q137.63998,120.84725,179.51817,86.26136Q221.39637,51.67547,267.19818,81.83773Q313,112,367.68455,125.86045Q422.36911,139.7209,458.19364,194.86045Q494.01817,250,456.0768,303.76136Z;M440.89145,308.17188Q431.49014,366.34375,386.51892,408.54441Q341.5477,450.74507,280.86143,454.67188Q220.17516,458.59868,161.4046,439.6065Q102.63404,420.61431,74.24712,365.23068Q45.86019,309.84704,51.25164,251.37253Q56.64309,192.89803,94.98232,154.25946Q133.32155,115.62089,180.13528,103.21957Q226.94901,90.81826,286.5366,64.96012Q346.12418,39.10197,382.33594,90.33923Q418.5477,141.57648,434.42023,195.78824Q450.29277,250,440.89145,308.17188Z;M437.20545,311.82292Q441.89352,373.64584,380.77431,387.66608Q319.65509,401.68633,271.82754,416.34317Q224,431,184.22569,401.27431Q144.45139,371.54861,81.45601,344.74769Q18.46064,317.94676,58.87153,261.64584Q99.28242,205.34491,102.46413,144.38253Q105.64584,83.42014,164.05961,69.5926Q222.47338,55.76506,274.24769,69.97338Q326.02199,84.18171,376.989,109.95139Q427.95601,135.72107,430.23669,192.86053Q432.51737,250,437.20545,311.82292Z;M409,303.5Q416,357,378,402Q340,447,282,439Q224,431,187,398.5Q150,366,105.5,335.5Q61,305,45,245Q29,185,59,124.5Q89,64,152.5,40Q216,16,265,63.5Q314,111,383,115.5Q452,120,427,185Q402,250,409,303.5Z"></animate>
      </path>
    </svg>
  </div>

  <header>
    <nav>
      <a href="" class="logo">
        <img src="assets/img/logo-ligne.webp" alt="Logo MyWebSoluce" />
      </a>
      <ul>
        <li>
          <a href="#realisation">
            <i class="fa-solid fa-code icon"></i>
            <span>Réalisations</span>
          </a>
        </li>
        <li>
          <a href="#prestation">
            <i class="fa-solid fa-file-invoice-dollar icon"></i>
            <span>Prestations</span>
          </a>
        </li>
        <li>
          <a href="#contact">
            <i class="fa-solid fa-message icon"></i>
            <span>Contact</span>
          </a>
        </li>
      </ul>
    </nav>
    <img src="assets/img/bg2.webp" alt="Hero MyWebSoluce" id="hero" />
    <div id="header-content">
      <aside>
        <h1>MY<strong>WEB</strong>SOLUCE</h1>
        <h2 class="header-content-text">Créons ensemble le site web qui vous ressemble</h2>
        <div class="btn-container">
          <a class="btn-content" href="#contact">
            <span class="btn-title">ME CONTACTER</span>
            <span class="icon-arrow">
              <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#feeacf"></path>
                  <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#feeacf"></path>
                  <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#feeacf"></path>
                </g>
              </svg>
            </span>
          </a>
        </div>
      </aside>
    </div>
  </header>
  <main>
    <section id="realisation">
      <h2>Mes Réalisations</h2>
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <figure>
              <img src="assets/img/capsule.webp" alt="La capsule" loading="lazy" />
              <figcaption>
                <span>La Capsule V3</span>
                <a href="https://lacapsule.app" target='_blank'>Voir le projet</a>
              </figcaption>
            </figure>
          </div>
          <div class="swiper-slide">
            <figure>
              <img src="assets/img/moco.webp" alt="Morlaix Communauté" loading="lazy" />
              <figcaption>
                <span>Centre de ressource pour Morlaix Communauté</span>
                <a href="https://moco.mywebsoluce.fr" target='_blank'>Voir le projet</a>
              </figcaption>
            </figure>
          </div>
          <div class="swiper-slide">
            <figure>
              <img src="assets/img/quizz.webp" alt="Quizz" loading="lazy" />
              <figcaption>
                <span>Quizz créé pour une expérimentation IBEP</span>
                <a href="https://lestitcheurf0u.github.io/Quizz/" target='_blank'>Voir le projet</a>
              </figcaption>
            </figure>
          </div>
          <div class="swiper-slide">
            <figure>
              <img src="assets/img/cdr_capsule.webp" alt="Centre de ressource La Capsule" loading="lazy" />
              <figcaption>
                <span>Partie Back-End Centre de ressources La Capsule</span>
                <a href="https://cdr.lacapsule.org" target='_blank'>Voir le projet</a>
              </figcaption>
            </figure>
          </div>
          <div class="swiper-slide">
            <figure>
              <img src="assets/img/absumm.webp" alt="Absumm" loading="lazy" />
              <figcaption>
                <span>Site E-Commerce Absumm</span>
                <a href="https://absumm.mywebsoluce.fr" target='_blank'>Voir le projet</a>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="autoplay-progress">
          <svg viewBox="0 0 48 48">
            <circle cx="24" cy="24" r="20"></circle>
          </svg>
          <span></span>
        </div>
      </div>
    </section>
    <section id="prestation">
      <h2>Mes prestations</h2>
      <div class="packs">
        <div class="pack-container">
          <div class="pack-container__header">
            <p class="pack-container__header-title">Formule Copper</p>
            <div class="price-container">
              649
              <span>€</span>
            </div>
          </div>
          <div>
            <ul class="lists">
              <li class="list">
                <span>
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                <p>Votre site vitrine</p>
              </li>
              <li class="list">
                <span>
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                <p>One page (1 page)</p>
              </li>
              <li class="list">
                <span>
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                <p>Un template adapté à votre activité</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="pack-container">
          <div class="pack-container__header">
            <p class="pack-container__header-title">Formule Iron</p>
            <div class="price-container">
              829
              <span>€</span>
            </div>
          </div>
          <div>
            <ul class="lists">
              <li class="list">
                <span>
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                <p>Votre sitre vitrine</p>
              </li>
              <li class="list">
                <span>
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                <p>Entre 2 à 5 pages</p>
              </li>
              <li class="list">
                <span>
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                <p>Style adapté à vos besoin</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="pack-container">
          <div class="pack-container__header">
            <p class="pack-container__header-title">Formule Gold</p>
            <div class="price-container">
              1249
              <span>€</span>
            </div>
          </div>
          <div>
            <ul class="lists">
              <li class="list">
                <span>
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                <p>Votre site vitrine ou e-commerce</p>
              </li>
              <li class="list">
                <span>
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                <p>6 à 10 page ou 1 à 50 produits</p>
              </li>
              <li class="list">
                <span>
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                <p>Fonctionnalités standards au besoin d'un e-commerce</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="pack-container">
          <div class="pack-container__header">
            <p class="pack-container__header-title">Formule Diamant</p>
            <div class="price-container">
              <span>A partir de</span> 1849
              <span>€</span>
            </div>
          </div>
          <div>
            <ul class="lists">
              <li class="list">
                <span>
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                <p>
                  Votre site vitrine sans restriction de page ou votre
                  e-commerce sans restriction de produits
                </p>
              </li>
              <li class="list">
                <span>
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                <p>Fonctionnalités poussées</p>
              </li>
              <li class="list">
                <span>
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                <p>
                  Pack Zen (prix initial de 50€/mois) offerte la première
                  année
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <section class="other">
        <div class="other__header">
          <h3>Les autres prestations</h3>
        </div>
        <div class="other__content">
          <h4>Maintenance (Pack Zen)</h4>
          <div class="other__content-item">
            <i class="fa-solid fa-circle-check icon"></i>
            <p>
              Mises à jour une fois par mois, modification minueures (textes
              et images), conseil, formation à la prise en main
            </p>
            <div class="price">
              <div class="price-container">
                50€<span>/mois</span>
              </div>
              <div class="price-container">
                500€<span>/an</span>
              </div>
            </div>
          </div>
          <hr class="spacing" />
          <h4>Maintenance (Pack Serain)</h4>
          <div class="other__content-item">
            <i class="fa-solid fa-circle-check icon"></i>
            <p>
              Mise à jour une fois par mois, 3h d'interventions par mois,
              sauvegarde manuelle des fichiers et de la base de données,
              conseil & formation, rapports.
            </p>
            <div class="price">
              <div class="price-container">
                175€<span>/mois</span>
              </div>
              <div class="price-container">
                1750€<span>/an</span>
              </div>
            </div>
          </div>
          <hr class="spacing" />
          <h4>Autre demande</h4>
          <div class="other__content-item">
            <i class="fa-solid fa-circle-check icon"></i>
            <p>
              Refonte technique ou refonte visuelle, conseils, formations,
              bootcamp, etc...
            </p>
            <div class="price-container">
              <span>Sur devis</span>
            </div>
          </div>
        </div>
        <hr class="spacing" />
        <h4>Application Web</h4>
        <div class="other__content-item">
          <i class="fa-solid fa-circle-check icon"></i>
          <p>
            Création d'application web sur mesure, avec ou sans base de données, création de gestionnaire de stock, etc.
          </p>
          <div class="price-container">
            <span>Sur devis</span>
          </div>
        </div>
        </div>
      </section>
    </section>
    <section id="contact">
      <h2>Me contacter</h2>
      <div class="contact__content">
        <aside class="contact-infos">
          <div class="contact-infos__item">
            <img src="assets/img/avatar.webp" alt="avatar">
          </div>
          <div class="contact-infos__item">
            <i class="fa-solid fa-user pre"></i>
            <p>Alexandre HAREL</p>
          </div>
          <div class="contact-infos__item">
            <i class="fa-solid fa-phone pre"></i>
            <p>07 66 08 64 57</p>
          </div>
          <div class="contact-infos__item">
            <i class="fa-solid fa-envelope pre"></i>
            <p>contact@mywebsoluce.fr</p>
          </div>
          <div class="contact-infos__item">
            <i class="fa-solid fa-location-dot pre"></i>
            <p>Landivisiau, Bretagne, France</p>
          </div>
          <div class="contact-infos__socials">
            <a href="https://www.linkedin.com/in/alexandre-harel-a82521175/">
              <i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="https://twitter.com/LeStitcheurFou">
              <i class="fa-brands fa-twitter"></i>
            </a>
          </div>
        </aside>
        <?php
        include 'import/form.php';
        ?>
      </div>
    </section>
  </main>
  <footer>
    <section class="footer__top">
      <a href="mentions.html">Mentions Légales / CGU</a>
      <a href="https://github.com/LeStitcheurF0u/personnal-tests">Code source</a>
    </section>
    <hr />
    <section class="footer__bottom">
      <h3>Partenaires</h3>
      <section class='partenaires'>
        <a href="https://www.lacapsule.org">
          <img src="assets/img/logo_lacapsule.webp" alt="La Capsule logo" loading="lazy" />
          <span>La Capsule</span>
        </a>
        <a href="https://www.morlaix-communaute.bzh/">
          <img src="assets/img/logo-mxco.webp" alt="Morlaix Communauté Logo" loading="lazy" />
          <span>Morlaix Communauté</span>
        </a>
        <a href="https://margarinecommunication.fr/">
          <img src="assets/img/margarine.webp" alt="Margarine Logo" loading="lazy" />
          <span>Margarine - Agence de Communication</span>
        </a>
        <a href="https://www.goupil-ere.org/">
          <img src="assets/img/goupil.webp" alt="Goupil-ere Logo" loading="lazy" />
          <span>Goupil-ère</span>
        </a>
      </section>
    </section>
    &copyMyWebSoluce - 2023 - Tous droits réservés
  </footer>

  <script src="/js/app.js"></script>
  <script src="/js/swiper.js"></script>
  <script>
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");

    const swiper = new Swiper(".mySwiper", {
      speed: 600,
      loop: true,
      grabCursor: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      on: {
        autoplayTimeLeft(s, time, progress) {
          progressCircle.style.setProperty("--progress", 1 - progress)
          progressContent.textContent = `${Math.ceil(time / 1000)}s`
        }
      }
    });
  </script>
</body>

</html>