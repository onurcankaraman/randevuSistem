<?php
  require_once('../../../kontrol/degiskenler.php');
  require_once('../../../kontrol/fonksiyonlar.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Calendify | Responsive Bootstrap 4 Admin Dashboard Template</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="../assets/images/favicon.ico" />
      
      <link rel="stylesheet" href="../assets/css/backend.min.css?v=1.0.1">
      <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">  </head>
  <body class="fixed-top-navbar top-nav  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      <div class="iq-top-navbar">
          <div class="container">
              <div class="iq-navbar-custom">
                  <div class="d-flex align-items-center justify-content-between">
                      <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                          <i class="ri-menu-line wrapper-menu"></i>
                          <a href="index.html" class="header-logo">
                              <img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                              <img src="../assets/images/logo-white.png" class="img-fluid rounded-normal darkmode-logo" alt="logo">
                          </a>
                      </div>
                      <div class="iq-menu-horizontal">
                      </div>
                      <nav class="navbar navbar-expand-lg navbar-light p-0">
                          <div class="change-mode">
                              <div class="custom-control custom-switch custom-switch-icon custom-control-indivne">
                                  <div class="custom-switch-inner">
                                      <p class="mb-0"> </p>
                                      <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                      <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                          <span class="switch-icon-left"><i class="a-left ri-moon-clear-line"></i></span>
                                          <span class="switch-icon-right"><i class="a-right ri-sun-line"></i></span>
                                      </label>
                                  </div>
                              </div>
                          </div>
                          <button class="navbar-toggler" type="button" data-toggle="collapse"
                              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                              aria-label="Toggle navigation">
                              <i class="ri-menu-3-line"></i>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                  <li class="caption-content">
                                      <a href="#" class="search-toggle dropdown-toggle d-flex align-items-center" id="dropdownMenuButton3" data-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false">
                                          <img src="../assets/images/user/01.jpg" class="avatar-40 img-fluid rounded" alt="user">
                                          <div class="caption ml-3">
                                              <h6 class="mb-0 line-height"><?php echo $kullaniciAdi ;?><i class="las la-angle-down ml-3"></i></h6>
                                          </div>
                                      </a>
                                      <div class="iq-sub-dropdown dropdown-menu user-dropdown" aria-labelledby="dropdownMenuButton3">
                                          <div class="card m-0">
                                              <div class="card-body p-0">
                                                  <a class="right-ic p-3 border-top btn-block position-relative text-center" href="../../../giris/index.php" role="button">
                                                       Çıkış Yap
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
      <div class="content-page">
    <div class="content-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="navbar-breadcrumb">
                            <h1 class="mb-1">KalDer Network Toplantıları Sistemi</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-8">
                    <ul class="d-flex nav nav-pills mb-4 text-center event-tab" id="event-pills-tab" role="tablist">
                        <li class="nav-item">
                            <a id="view-btn" class="nav-link active show" data-toggle="pill" href="#event1" data-extra="#search-with-button" role="tab" aria-selected="true">Randevularım</a>
                        </li>
                        <li class="nav-item">
                            <a id="view-schedule" class="nav-link" data-toggle="pill" href="#event2" data-extra="#view-event" role="tab" aria-selected="false">Randevu Al</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 tab-extra" id="view-event">
                    <div class="float-md-right mb-4"><a href="#event1" class="btn view-btn">Randevulara Bak</a></div>
                </div> 
            </div>        
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">                
                <div class="event-content">
                    <div id="event1" class="tab-pane fade active show">
                        <div class="row">                                
                            <?php
                                randevuGetir($bag, $kullaniciAdi);
                            ?>
                        </div>
                    </div>
                    <div id="event2" class="tab-pane fade">
                        <?php 
                        /*
                        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="d-flex nav nav-pills text-center schedule-tab" id="schedule-pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active show" data-toggle="pill" href="#schedule1" data-extras="#filter-button" role="tab" aria-selected="true">Toplantı İçin Randevu Al</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap align-items-center">
                                <div id="filter-none" class="filter-extra">
                            </div>
                        </div>
                        */ 
                        ?>
                        
                        <div class="schedule-content">
                            <div id="schedule01" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card card-block card-stretch">
                                            <div class="card-body">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <div class="date mr-3"><h4 class="text-info">15 Dec</h4></div>
                                                        <div class="border-left pl-3"> 
                                                            <div class="media align-items-top">
                                                                <h5 class="mb-3">Calendify Inner Pages</h5>
                                                                <div class="badge badge-color ml-3">Upcoming</div>
                                                            </div>
                                                            <div class="media align-items-center">
                                                                <p class="mb-0 pr-3"><i class="las la-clock mr-2 text-info"></i>08 Pm - 09 Pm</p>
                                                                <p class="mb-0"><i class="las la-map-marker mr-2 text-info"></i>1 Circle Street Leominster, Ma 01453</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center list-action">
                                                       <button type="button" class="btn btn-outline-success mt-2"><i class="ri-heart-line"></i>Success</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="col-lg-12">
                                        <div class="card card-block card-stretch">
                                            <div class="card-body">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <div class="date mr-3"><h4 class="text-danger">25 Dec</h4></div>
                                                        <div class="border-left pl-3"> 
                                                            <div class="media align-items-top">
                                                                <h5 class="mb-3">Admin Dashboard Team Meet</h5>
                                                                <div class="badge badge-color ml-3">Upcoming</div>
                                                            </div>                                                            
                                                            <div class="media align-items-center">
                                                                <p class="mb-0 pr-3"><i class="las la-clock mr-2 text-danger"></i>09:45 Pm - 10 Pm</p>
                                                                <p class="mb-0"><i class="las la-map-marker mr-2 text-danger"></i>1 Circle Street Leominster, Ma 01453</p>
                                                            </div>
                                                        </div>
                                                    </div>                                                    
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-edit-box-line"></i></a>
                                                        <a class="badge" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="col-lg-12">
                                        <div class="card card-block card-stretch">
                                            <div class="card-body">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <div class="date mr-3"><h4 class="text-success">29 Dec</h4></div>
                                                        <div class="border-left pl-3">  
                                                            <div class="media align-items-top">
                                                                <h5 class="mb-3">Calendify Pre-Launch Campaign</h5>
                                                                <div class="badge badge-color ml-3">Pending</div>
                                                            </div>
                                                            <div class="media align-items-center">
                                                                <p class="mb-0 pr-3"><i class="las la-clock mr-2 text-success"></i>10 Pm - 10:30 Pm</p>
                                                                <p class="mb-0"><i class="las la-map-marker mr-2 text-success"></i>1 Circle Street Leominster, Ma 01453</p>
                                                            </div> 
                                                        </div>
                                                    </div>                                                   
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-edit-box-line"></i></a>
                                                        <a class="badge" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                
                                </div>
                            </div>
                            <div id="schedule1" class="tab-pane fade active show">
                                <div class="row">
                                    <?php 
                                    if(isset($_POST["myBtn"])){
                                        $id = base64_decode(base64_decode(base64_decode($_POST["myBtn"])));
                                        $idExp = explode(",", $id);
                                        $user = mysqli_fetch_object(mysqli_query(vtBaglan(), "SELECT id FROM kullanicilar WHERE kullaniciAdi='".$_SESSION["kullaniciAdi"]."'"));
                                        
                                        $trhUp = mysqli_query($bag, "UPDATE tarihler SET durum='1' WHERE id=".$idExp[0]);
                                        if($trhUp == TRUE){
                                            $mentors = mysqli_fetch_object(mysqli_query($bag, "SELECT id,adi,ilgiAlani,kurum,link FROM mentorler WHERE id=".$idExp[1]));

                                            mysqli_query($bag, "INSERT INTO randevular (kullanici,tarih,link) VALUE ('".$user->id."','".$idExp[0]."','".$mentors->link."')");
                                        }
                                    }


                                    $allCalendar = mysqli_query(vtBaglan(), "SELECT * FROM tarihler WHERE durum=0 ORDER BY baslangicTarihi DESC");

                                    // WHERE baslangicTarihi >= '".date("Y-m-d H:i:s")."'
                                    $i=1;
                                    while($wr = mysqli_fetch_object($allCalendar)){
                                        $etkinlik = mysqli_fetch_object(mysqli_query($bag, "SELECT * FROM etkinliktur WHERE id=".$wr->etkinlikId));
                                        $mentor = mysqli_fetch_object(mysqli_query($bag, "SELECT id,adi,ilgiAlani,kurum FROM mentorler WHERE id=".$wr->mentorId));
                                    ?>
                                     <div class="col-lg-4 col-md-6">
                                        <div class="card card-block card-stretch card-height">
                                            <div class="card-body rounded event-detail event-detail-danger">
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div>
                                                        <h4 class="text-danger"><?php 
                                                        if(strlen($mentor->adi) > 25){
                                                            echo mb_substr($mentor->adi,0,25,"UTF8")."...";
                                                        }
                                                        else {
                                                            echo $mentor->adi; 
                                                        }
                                                        ?></h4>
                                                    </div>
                                                </div>
                                                <h4 class="my-2"><?php echo $etkinlik->etkinlikAdi; ?></h4>   
                                                <p class="mb-4 card-description"><?php echo $mentor->ilgiAlani; ?></p>
                                                <p class="mb-2 text-danger"><i class="las la-clock mr-3"></i><?php echo reverseDate($wr->baslangicTarihi,'d.m.Y H:i'); ?></p>
                                                <p class="mb-2 text-danger"><i class="las la-map-marker mr-3"></i><?php echo $mentor->kurum; ?></p>
                                                <div class="clearfix"></div>
                                                <div class="row">
                                                    <div class="col-md-12 text-right">
                                                        <form method="post" enctype="application/x-www-form-urlencoded" name="a<?php echo $i; ?>a">
                                                            <button type="submit" name="myBtn" class="btn btn-danger" value="<?php echo base64_encode(base64_encode(base64_encode($wr->id.",".$wr->mentorId))); ?>">Randevuyu Al</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $i++; } ?>
                                </div>
                            </div>
                            <div id="schedule2" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card card-block card-stretch card-height">
                                            <div class="card-body rounded event-detail event-detail1">
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div>
                                                        <h1 class="text-info">25</h1>
                                                        <h5 class="text-info">Dec</h5>
                                                    </div>
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-edit-box-line"></i></a>
                                                        <a class="badge" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </div>
                                                <h4 class="my-2">Calendify Homepage Final Edits</h4>   
                                                <p class="mb-4 card-description">Enhance Calendify with beautiful user interface and UI changes to ensure high conversion rate.</p>
                                                <p class="mb-2 text-info"><i class="las la-clock mr-3"></i>08 Pm - 09 Pm</p>
                                                <p class="mb-2 text-info"><i class="las la-map-marker mr-3"></i>1 Circle Street Leominster, Ma 01453</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card card-block card-stretch card-height">
                                            <div class="card-body rounded event-detail event-detail2 active">
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div>
                                                        <h1 class="text-danger">07</h1>
                                                        <h5 class="text-danger">Jan</h5>
                                                    </div>
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-edit-box-line"></i></a>
                                                        <a class="badge" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </div>
                                                <h4 class="my-2">Calendify Promotional Campaign</h4>   
                                                <p class="mb-4 card-description">Schedule meetings and promotional campaigns for your internal team by assigning task and roles.</p>
                                                <p class="mb-2 text-danger"><i class="las la-clock mr-3"></i>09:45 Pm - 10 Pm</p>
                                                <p class="mb-2 text-danger"><i class="las la-map-marker mr-3"></i>1 Circle Street Leominster, Ma 01453</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card card-block card-stretch card-height">
                                            <div class="card-body rounded event-detail event-detail3">
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div>
                                                        <h1 class="text-success">15</h1>
                                                        <h5 class="text-success">Jan</h5>
                                                    </div>
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-edit-box-line"></i></a>
                                                        <a class="badge" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </div>
                                                <h4 class="my-2">Exploring Automatic Timezone Detection</h4>   
                                                <p class="mb-4 card-description">An internal team meeting to brief on a feature where the meeting will be seen in viewer’s time zone with automatic timezone detection in Calendify. </p>
                                                <p class="mb-2 text-success"><i class="las la-clock mr-3"></i>10 Pm - 10:30 Pm</p>
                                                <p class="mb-2 text-success"><i class="las la-map-marker mr-3"></i>1 Circle Street Leominster, Ma 01453</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="schedule3" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card card-block card-stretch card-height">
                                            <div class="card-body rounded event-detail event-detail1">
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div>
                                                        <h1 class="text-info">03</h1>
                                                        <h5 class="text-info">Dec</h5>
                                                    </div>
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-edit-box-line"></i></a>
                                                        <a class="badge" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </div>
                                                <h4 class="my-2">Webtech-Developer Horror Stories</h4>   
                                                <p class="mb-4 card-description">Lorem Ipsum Dolor Sit Amet, Consecetetur Adip Iscing Elit. Pharetra Luctus Ultricies Velit Ut. Id Tincidunt Mattis Sed Duis.</p>
                                                <p class="mb-2 text-info"><i class="las la-clock mr-3"></i>08 Pm - 09 Pm</p>
                                                <p class="mb-2 text-info"><i class="las la-map-marker mr-3"></i>1 Circle Street Leominster, Ma 01453</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card card-block card-stretch card-height">
                                            <div class="card-body rounded event-detail event-detail2 active">
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div>
                                                        <h1 class="text-danger">16</h1>
                                                        <h5 class="text-danger">Dec</h5>
                                                    </div>
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-edit-box-line"></i></a>
                                                        <a class="badge" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </div>
                                                <h4 class="my-2">Meetup-Meeing With Team of Designer</h4>   
                                                <p class="mb-4 card-description">Lorem Ipsum Dolor Sit Amet, Consecetetur Adip Iscing Elit. Pharetra Luctus Ultricies Velit Ut. Id Tincidunt Mattis Sed Duis.</p>
                                                <p class="mb-2 text-danger"><i class="las la-clock mr-3"></i>09:45 Pm - 10 Pm</p>
                                                <p class="mb-2 text-danger"><i class="las la-map-marker mr-3"></i>1 Circle Street Leominster, Ma 01453</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card card-block card-stretch card-height">
                                            <div class="card-body rounded event-detail event-detail3">
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div>
                                                        <h1 class="text-success">27</h1>
                                                        <h5 class="text-success">Dec</h5>
                                                    </div>
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-edit-box-line"></i></a>
                                                        <a class="badge" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </div>
                                                <h4 class="my-2">Project Plan-Do Anaylsis Of Project</h4>   
                                                <p class="mb-4 card-description">Lorem Ipsum Dolor Sit Amet, Consecetetur Adip Iscing Elit. Pharetra Luctus Ultricies Velit Ut. Id Tincidunt Mattis Sed Duis.</p>
                                                <p class="mb-2 text-success"><i class="las la-clock mr-3"></i>10 Pm - 10:30 Pm</p>
                                                <p class="mb-2 text-success"><i class="las la-map-marker mr-3"></i>1 Circle Street Leominster, Ma 01453</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="schedule4" data-toggle="daterange" class="tab-pane fade">                                
                                <div class="card card-block card-stretch mb-4">
                                    <div class="card-body mb-5 border-bottom">
                                        <p class="mb-0">18 Dec – 24 Dec 2020</p>
                                    </div> 
                                    <div class="card-body text-center">
                                        <div class="d-inline-block m-auto date-event">
                                            <div class="icon iq-icon-box-2 m-auto rounded border">
                                                <i class="las la-calendar"></i>
                                            </div>
                                            <p class="mt-4">No Event In This Range</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade create-workform" id="create-event" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-3">Create a Workflow</h4>
                        <div class="mb-3">
                            <h5>When this happens</h5>
                            <div class="content">
                                <div class="form-group mb-0">
                                    <select name="type" class="selectpicker form-control" data-style="py-0">
                                        <option>Select..</option>
                                        <option>New event is scheduled</option>
                                        <option>Before event starts</option>
                                        <option>Event starts</option>
                                        <option>Event ends</option>
                                        <option>Event is canceled</option>
                                    </select>
                                </div>
                            </div>
                        </div> 
                        <div class="mb-3">
                            <h5 class="mb-3">Do this</h5>                             
                            <div class="form-group  mb-0">
                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Select..</option>
                                    <option>Send email to invitee</option>
                                    <option>Send email to host</option>
                                    <option>Send text to invitee</option>
                                    <option>Send text to host</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="popup text-left" id="popup">
                <h4 class="mb-3">Add Action</h4>
                <div class="content create-workform">
                    <div class="form-group">
                      <h6 class="form-label mb-3">Copy Your Link</h6>
                      <div class="input-group">
                        <input type="text" class="form-control" readonly value="calendly.com/rickoshea1234">
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2"><i class="las la-link"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <h6 class="form-label mb-3">Email Your Link</h6>
                      <div class="input-group">
                        <input type="text" class="form-control" readonly value="calendly.com/rickoshea1234">
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon3"><i class="las la-envelope"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <h6 class="form-label mb-3">Add to Your Website</h6>
                      <div class="input-group">
                        <input type="text" class="form-control" readonly value="calendly.com/rickoshea1234">
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon4"><i class="las la-code"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                            <button type="submit" data-dismiss="modal" class="btn btn-primary mr-4">Cancel</button>
                            <button type="submit" data-dismiss="modal" class="btn btn-outline-primary">Save</button>
                        </div>
                    </div>  
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    Copyright 2020 <a href="#">Calendify</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>
    
    
    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>  </body>
</html>