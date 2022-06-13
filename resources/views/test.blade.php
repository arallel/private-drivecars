<!DOCTYPE html>
<html>
<head>
<title>Homepage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" type="text/css" href="Landingpage/w3.css"> -->
<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<link rel="stylesheet" type="text/css" href="Landingpage/styles.css">
</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Drive Cars</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="#projects">Project</a>
        <a class="nav-link" href="#feature">Features</a>
        <a class="nav-link" href="#about">About</a>
        <a class="nav-link" href="{{Route('login')}}">Login</a>
      </div>
    </div>
  </div>
</nav> 
<!-- Page content -->
<div class="container" style="max-width:1564px">
  <img class="img-fluid" src="Landingpage/images/car.jpg" width="1320" height="10">
  <div class="w3-container w3-padding-32" id="projects">
 
            <div class="shadow-sm p-3 mb-5 bg-body border e37_2">
                   <div  class="shadow-sm p-3 mb-5 bg-body border e3_5"></div> 
                    <div class="e24_8"></div>
                     <div class="e22_7"></div>
                      <span  class="e25_18">full documentation</span><span  class="e25_21">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                      </span>
              </div>
              <div class="border shadow-sm p-3 mb-5 bg-body e37_4">
                     <div  class="border shadow-sm p-3 mb-5 bg-body e3_6"></div>
                      <div  class="e25_13"></div>
                       <div  class="e25_12"></div>
                        <span  class="e25_19">Real Time Location</span>
                         <span  class="e25_22">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                         </span>
                  </div>
                  <div class="border shadow-sm p-3 mb-5 bg-body e37_5">
                    <div  class="border shadow-sm p-3 mb-5 bg-body e22_5"></div>
                     <div  class="e25_14"></div>
                       <span  class="e25_20">Smart Scan Using Barcode</span>
                       <span  class="e25_23">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                       <div  class="e25_17"></div>
                      <div  class="e22_4"></div>
                    </div>
  </div>

                  <div id="about" class="e37_6">
                  <div  class="e8_4"></div>
                  <div  class="shadow-lg p-3 mb-5  e8_5"></div>
                  <div  class="shadow p-3 mb-5 e8_6"></div>
                  <div  class="shadow p-3 mb-5 e8_7"></div>
                  <div  class="shadow p-3 mb-5 e8_8"></div>
                  <span  class="e13_4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                  <span  class="e13_6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                  <span  class="e13_7">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                </div>
                <div id="feature" class="shadow-lg e52_7">
                  <div  class="shadow e51_2"></div>
                  <span  class="e52_2">Value & Feature</span>
                  <span  class="e52_3">1.Safe </span>
                  <span  class="e52_5">2.Real Time Location</span>
                  <span  class="e52_6">3.Just Scan And Ready To Use</span>
                </div>
                
                <div class="shadow e52_11">
                  footer
                </div>
                <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
