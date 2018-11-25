<!--******************Navigation Bar*********************-->
<nav class="navbar navbar-expand navbar-dark bg-dark">
    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav mr-auto">
        <div class="collapse navbar-collapse" id="navbars">
            <li class="nav-item active">
                <a class="nav-link" href="#">🤴Viraj LK🤴 <span class="sr-only">(current)			</span></a>
            </li>
            <li class="nav-item"></li>
            <li class="nav-item"></li>
            <li class="nav-item">
                <a href="" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">About Us</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Contact</a>
            </li>
        </div>
        <li class="nav-item">
          	<form class="form-inline my-2 my-md-0">
              <input class="form-control" type="text" placeholder="Search" id="search" name="search">
              <input type="submit" class="btn btn-success" value="Search" id="search_btn" name="search_btn">
            </form>    
        </li>
        <li class="nav-item">
            <img src="<?php //echo base_url() ?>img/cart.png" height="25" width="25">
            <a href="" class="nav-link">Cart</a>  
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">Sign In</a>  
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">Sign Up</a>  
        </li>
    </ul> -->
    <div class="container-fluid navbar-nav">
        <div class="row">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-2">
                <a class="nav-link active text-center" href="#">🤴Viraj LK🤴 <span class="sr-only">(current)</span></a>
            </div>
            <div class="col-1">
                <a href="" class="nav-link text-center">Home</a>
            </div>
            <div class="col-2">
                <a href="" class="nav-link text-center">About Us</a>
            </div>
            <div class="col-1">
                <a href="" class="nav-link">Contact</a>
            </div>
            <div class="col-4">
                <form class="form-inline">
                    <input class="form-control" type="text" placeholder="Search" id="search" name="search">
                    <input type="submit" class="btn btn-success" value="Search" id="search_btn" name="search_btn">
                </form>    
            </div>
            <div class="col-1">
                <img src="<?php echo base_url() ?>img/cart.png" height="25" width="25">
                <a href="" class="nav-link">Cart</a>  
            </div>
            <div class="col-1">
                <a href="" class="nav-link">Sign In</a>  
            </div>
            <!-- <div class="col-1">
                <a href="" class="nav-link">Sign Up</a>    
            </div> -->
        </div>
    </div>
</nav>
<!--*****************************************************-->

<!--******************Accessories List***************-->
<div class="container-fluid bg-secondary">
    <div class="row" style="padding: 5px">
        <div class="col-2" id="mobile">
            <div class="row">
                <div class="text-white">Mobile Phones</div>
            </div>
            <div id="brand1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-3">
                            <img src="<?php echo base_url() ?>img/samsung.png" class="brand_img">
                            <label>SAMSUNG</label>
                        </div>
                        <div class="col-3">
                            <img src="<?php echo base_url() ?>img/apple.png" class="brand_img">
                            <label>IPHONE</label>
                        </div>
                        <div class="col-3">
                            <img src="<?php echo base_url() ?>img/nokia.png" class="brand_img">
                            <label>NOKIA</label>
                        </div>
                        <div class="col-3">
                            <img src="<?php echo base_url() ?>img/huawei.png" class="brand_img">
                            <label>HUAWEI</label>
                        </div>
                    </div>
                    <div class="col-12">&nbsp;</div>
                    <div class="row">
                        <div class="col-4">
                            <img src="<?php echo base_url() ?>img/htc.png" class="brand_img">
                            <label>HTC</label>
                        </div>
                        <div class="col-4">
                            <img src="<?php echo base_url() ?>img/lg.png" class="brand_img">
                            <label>LG</label>
                        </div>
                        <div class="col-4">
                            <img src="<?php echo base_url() ?>img/oppo.png" class="brand_img">
                            <label>OPPO</label>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <div class="col-2" id="tablet">
            <div class="row">
                <div class="text-white">Tablets</div>
            </div>
        </div>
      	<div class="col-2" id="battery">
            <div class="row">
                <div class="text-white">Batteries</div>
            </div>
        </div>
        <div class="col-2" id="charger">
            <div class="row">
                <div class="text-white">Chargers</div>
            </div>
        </div>
        <div class="col-2" id="headset">
            <div class="row">
                <div class="text-white">Headsets</div>
            </div>
        </div>
        <div class="col-2" id="card">
            <div class="row">
                <div class="text-white">Cards</div>
            </div>
        </div>
    </div>
</div>
<!--*****************************************************-->

