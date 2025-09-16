<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>

<aside id="sidebar" class="sidebar col-md-2">
  <div class="logo">
    <img src="<?php echo SITE_URL; ?>assets/images/logo.png" alt="League Live Karaoke" />
  </div>

  <nav class="menu">
    <a href="<?php echo SITE_URL; ?>pages/dashboard.php" class="side-menu <?php echo ($currentPage == 'dashboard.php') ? 'active' : ''; ?>">
      <img src="<?php echo SITE_URL; ?>assets/images/sidebar-icons/home.svg" alt="Home" />
      <span>Home</span>
    </a>
    <a href="<?php echo SITE_URL; ?>pages/team_black.php" class="side-menu <?php echo ($currentPage == 'team_black.php') ? 'active' : ''; ?>">
      <img src="<?php echo SITE_URL; ?>assets/images/sidebar-icons/discover.svg" alt="Discover" />
      <span>Team Black</span>
    </a>
    <a href="<?php echo SITE_URL; ?>pages/vote_now.php" class="side-menu <?php echo ($currentPage == 'vote_now.php') ? 'active' : ''; ?>">
      <img src="<?php echo SITE_URL; ?>assets/images/sidebar-icons/community.svg" alt="vote_now" />
      <span>Vote Now</span>
    </a>
    <a href="<?php echo SITE_URL; ?>pages/Leagues.php" class="side-menu <?php echo ($currentPage == 'Leagues.php') ? 'active' : ''; ?>">
      <img src="<?php echo SITE_URL; ?>assets/images/sidebar-icons/leagues.svg" alt="Leagues" />
      <span>Leagues</span>
    </a>
  </nav>

  <div class="section-title">MY CHANNEL</div>

  <nav class="menu">
    <a href="<?php echo SITE_URL; ?>pages/leaderboard.php" class="side-menu <?php echo ($currentPage == 'leaderboard.php') ? 'active' : ''; ?>">
      <img src="<?php echo SITE_URL; ?>assets/images/sidebar-icons/library.svg" alt="Library" />
      <span>leaderboard</span>
    </a>
    <a href="<?php echo SITE_URL; ?>pages/history.php" class="side-menu <?php echo ($currentPage == 'history.php') ? 'active' : ''; ?>">
      <img src="<?php echo SITE_URL; ?>assets/images/sidebar-icons/history.svg" alt="History" />
      <span>History</span>
    </a>
    <a href="<?php echo SITE_URL; ?>pages/your-videos.php" class="side-menu <?php echo ($currentPage == 'your-videos.php') ? 'active' : ''; ?>">
      <img src="<?php echo SITE_URL; ?>assets/images/sidebar-icons/discover.svg" alt="Your Videos" />
      <span>Your Videos</span>
    </a>
    <a href="<?php echo SITE_URL; ?>pages/watch-later.php" class="side-menu <?php echo ($currentPage == 'watch-later.php') ? 'active' : ''; ?>">
      <img src="<?php echo SITE_URL; ?>assets/images/sidebar-icons/watchlater.svg" alt="Watch Later" />
      <span>Watch Later</span>
    </a>
    <a href="<?php echo SITE_URL; ?>pages/downloads.php" class="side-menu <?php echo ($currentPage == 'downloads.php') ? 'active' : ''; ?>">
      <img src="<?php echo SITE_URL; ?>assets/images/sidebar-icons/downloads.svg" alt="Downloads" />
      <span>Downloads</span>
    </a>
    <a href="<?php echo SITE_URL; ?>pages/dashboard.php" class="side-menu <?php echo ($currentPage == 'dashboard.php' && !isset($alreadyMarked)) ? 'active' : ''; ?>">
      <img src="<?php echo SITE_URL; ?>assets/images/sidebar-icons/showmore.svg" alt="Show More" />
      <span>Show More</span>
    </a>
  </nav>
</aside>
