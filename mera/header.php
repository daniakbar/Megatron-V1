<!DOCTYPE html>
<html lang="en-gb" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Administrator</title>
        <link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="css/style.css"></link>
        <!-- <link rel="stylesheet" href="css/mm-style-2.css"></link> -->
        <link rel="stylesheet" href="css/components/nestable.css"></link>
        <link rel="stylesheet" href="css/components/accordion.css"></link>
        <link rel="stylesheet" href="css/components/search.min.css"></link>
        <link rel="stylesheet" href="css/components/form-select.almost-flat.min.css"></link>
    </head>

    <body style="background-color: #E2E2EE">
    	<!-- off canvas -->
    	<div id="menu" class="uk-offcanvas">
    	    <div class="uk-offcanvas-bar">
    	    	<ul class="uk-nav uk-nav-offcanvas" data-uk-nav="">
              <li class="uk-article-divider"></li>
              <li class="uk-nav-header">OVERVIEW</li>

              <li class="uk-active">
                  <a href="dashboard.php">
                      <i class="uk-icon-dashboard uk-margin-right"></i>Beranda
                  </a>
              </li>

              <li class="uk-article-divider"></li>
              <li class="uk-nav-header">POST</li>

              <li class="uk-parent">
                  <a href="#"><i class="uk-icon-file uk-margin-right"></i>Post</a>
                  <ul class="uk-nav-sub">
                      <li><a href="post.php" class="uk-padding-right">Post</a></li>
                      <li><a href="add-post.php" class="uk-padding-right">Tambah Baru</a></li>
                  </ul>
              </li>


              <li class="uk-parent">
                  <a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>Kategori</a>
                  <ul class="uk-nav-sub">
                      <li><a href="category.php" class="uk-padding-right">Kategori</a></li>
                  </ul>
              </li>


              <li class="uk-parent">
                  <a href="#"><i class="uk-icon-bookmark-o uk-margin-right"></i>Tag</a>
                  <ul class="uk-nav-sub">
                      <li><a href="taq.php" class="uk-padding-right">Tag</a></li>
                  </ul>
              </li>

              <li class="uk-article-divider"></li>
              <li class="uk-nav-header">HALAMAN</li>

              <li class="uk-parent">
                  <a href="#"><i class="uk-icon-folder-o uk-margin-right"></i>Halaman</a>
                  <ul class="uk-nav-sub">
                      <li><a href="page.php" class="uk-padding-right">Halaman</a></li>
                      <li><a href="add-page.php" class="uk-padding-right">Tambah Baru</a></li>
                  </ul>
              </li>

              <li class="uk-article-divider"></li>
              <li class="uk-nav-header">MEDIA</li>

              <li class="uk-parent">
                  <a href="#"><i class="uk-icon-image uk-margin-right"></i>Media</a>
                  <ul class="uk-nav-sub">
                      <li><a href="media.php" class="uk-padding-right">Media</a></li>
                      <li><a href="add-media.php" class="uk-padding-right">Tambah Baru</a></li>
                  </ul>
              </li>

              <li class="uk-article-divider"></li>

              <li><a href="setting.php"><i class="uk-icon-gear uk-margin-right"></i>Pengaturan</a></li>

              <li class="uk-parent">
                  <a href="theme.php"><i class="uk-icon-desktop uk-margin-right"></i>Tema
                      <div class="uk-badge uk-badge-success">Baru</div>
                  </a>
              </li>

              <li><a href="menu-manager.php"><i class="uk-icon-sitemap uk-margin-right"></i>Menu Manager</a></li>

              <li class="uk-article-divider"></li>

              <li class="uk-parent">
                  <a href="#"><i class="uk-icon-diamond uk-margin-right"></i>Plugin</a>
                  <ul class="uk-nav-sub">
                      <li><a href="plugin.php" class="uk-padding-right">Plugin</a></li>
                      <li><a href="add-plugin.php" class="uk-padding-right">Tambah Baru</a></li>
                  </ul>
              </li>

              <li class="uk-article-divider"></li>

              <li class="uk-parent">
                  <a href="#"><i class="uk-icon-users uk-margin-right"></i>User</a>
                   <ul class="uk-nav-sub">
                      <li><a href="user.php" class="uk-padding-right">Users</a></li>
                      <li><a href="add-user.php" class="uk-padding-right">Tambah Baru</a></li>
                  </ul>
              </li>
    	    	</ul>
    	    </div>
    	</div>
        <!-- off canvas -->

        <!-- Top Navigation -->
        <div class="uk-container-center" style="position: relative; z-index: 99999;">
        <!-- header color -->
            <nav class="uk-navbar bg-blue" data-uk-sticky>
                <ul class="uk-navbar-nav uk-contrast uk-margin-top uk-margin-bottom" data-uk-nav>

                    <a href="#menu" class="uk-navbar-toggle uk-visible-hover uk-hidden-large uk-contrast" data-uk-offcanvas></a>

                    <h3 class="uk-navbar-nav uk-navbar-brand">
                        <a href="#"><i class="uk-icon-legal"></i> Megatron
                        <small class="uk-margin-left uk-hidden-small"><a href="#" target="_blank">Lihat Website</a></small>
                    </h3>

                    <a href="#" class="uk-navbar-content uk-contrast uk-hidden-small"><i class="uk-icon-recycle"></i>
                        Update <span class="uk-badge uk-badge-warning"> 1</span>
                    </a>
                    <a href="add-post.php" class="uk-navbar-content uk-contrast uk-hidden-small"><i class="uk-icon-plus"></i> Post</a>

                </ul>
                    <div class="uk-navbar-nav uk-navbar-flip uk-margin-top uk-margin-botto">
                        <li class="uk-parent" data-uk-dropdown>

                            <a href="" class="uk-navbar-nav color-white">
                                <i class="uk-icon-user uk-contrast"></i>
                                <i class="uk-icon-caret-down uk-contrast"></i>
                            </a>

                            <div class="uk-dropdown uk-dropdown-navbar">
                                <ul class="uk-nav uk-nav-navbar">
                                    <li>
                                        <div class="uk-width-1-1 uk-margin-left"><i class="uk-icon-user uk-margin-small-right"></i>Howday, Admin</div>
                                    </li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#"><i class="uk-icon-picture-o uk-margin-small-right"></i>Profile</a></li>
                                    <li><a href="#"><i class="uk-icon-gears uk-margin-small-right"></i>Pengaturan</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#"><i class="uk-icon-lock uk-margin-small-right"></i>Logout</a></li>
                                </ul>
                            </div>

                        </li>
                    </div>
            </nav>
        </div>
        <!-- Top Navigation -->

