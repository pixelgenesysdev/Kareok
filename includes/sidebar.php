<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>

<aside id="sidebar" class="sidebar col-md-2">
  <div class="logo">
    <img src="<?php echo SITE_URL; ?>assets/images/logo.png" style="cursor:pointer;" alt="League Live Karaoke" onclick="window.location.href='<?php echo SITE_URL; ?>pages/'" />
  </div>




  <nav class="menu">

    <a id="nav-btn" class="btn-sidebar side-menu" onclick="DisplayContent('Dashboard');">
      <img src="<?php echo SITE_URL; ?>assets/images/sidebar-icons/home.svg" alt="Dashboard" /><span>Dashboard</span>
    </a>
    <a id="nav-btn" class="btn-sidebar side-menu" onclick="DisplayContent('Discover');"> 
      <img src="<?php echo SITE_URL; ?>assets/images/sidebar-icons/home.svg" alt="Discover" /><span>Discover</span>
    </a>
    <a id="nav-btn" class="btn-sidebar side-menu" onclick="DisplayContent('League');">
       <img src="<?php echo SITE_URL; ?>assets/images/sidebar-icons/home.svg" alt="League" /><span>League</span>
    </a>
    <a id="nav-btn" class="btn-sidebar side-menu" onclick="DisplayContent('TeamBlack');">
       <img src="<?php echo SITE_URL; ?>assets/images/sidebar-icons/home.svg" alt="TeamBlack" /><span>TeamBlack</span>
    </a>
    <a id="nav-btn" class="btn-sidebar side-menu" onclick="DisplayContent('LeaderBoard');">
      <img src="<?php echo SITE_URL; ?>assets/images/sidebar-icons/home.svg" alt="LeaderBoard" /><span>LeaderBoard</span>
    </a>
    <a id="nav-btn" class="btn-sidebar side-menu" onclick="DisplayContent('VoteNow');">
      <img src="<?php echo SITE_URL; ?>assets/images/sidebar-icons/home.svg" alt="VoteNow" /><span>VoteNow</span>
    </a>
   
  </nav>

  <div class="section-title">MY CHANNEL</div>

  <nav class="menu">
    <a id="nav-btn" class="btn-sidebar side-menu" onclick="DisplayContent('History');">
      <img src="<?php echo SITE_URL; ?>assets/images/sidebar-icons/home.svg" alt="History" /><span>History</span>
    </a>
    <a id="nav-btn" class="btn-sidebar side-menu" onclick="DisplayContent('YourVideos');"> 
      <img src="<?php echo SITE_URL; ?>assets/images/sidebar-icons/home.svg" alt="YourVideos" /><span>YourVideos</span>
    </a>
    <a id="nav-btn" class="btn-sidebar side-menu" onclick="DisplayContent('WatchLater');">
       <img src="<?php echo SITE_URL; ?>assets/images/sidebar-icons/home.svg" alt="WatchLater" /><span>WatchLater</span>
    </a>
    <a id="nav-btn" class="btn-sidebar side-menu" onclick="DisplayContent('Downloads');">
       <img src="<?php echo SITE_URL; ?>assets/images/sidebar-icons/home.svg" alt="Downloads" /><span>Downloads</span>
    </a>


  </nav>
</aside>
