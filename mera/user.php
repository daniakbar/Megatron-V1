                <?php include'header.php' ?>
                <!-- Sidebar -->
                <?php include'sidebar.php' ?>
                <!-- Sidebar -->
                <!-- notifikasi update  -->

                <!-- notifikasi update -->

                <!-- Menu Content -->
                <div class="uk-width-medium-1-1 uk-width-large-8-10 uk-width-small-1-1 shadow uk-margin-top">
                  <!-- ========================================================================  -->
                  <div class="uk-block-border uk-block-default">
                    <div class="uk-container">
                        <!-- block left -->
                        <div class="uk-width-1-2 uk-margin-top">
                          <h2 class="uk-display-inline uk-margin-right">User</h2>
                          <a href="add-user.php" class="uk-button uk-button-link uk-display-inline">Add New</a>
                        </div>

                        <!-- block left -->
                        <!-- block right -->
                        <div class="uk-width-10-10">
                          <!-- Breadcrumb -->
                          <ul class="uk-breadcrumb uk-navbar-flip ">
                              <li><a href="">All (1)</a></li>
                              <li class="uk-active"><a href="">Published (0)</a></li>
                          </ul>
                          <!-- Breadcrumb -->
                        </div>
                        <!-- block right -->
                    </div>
                  </div>
                  <!-- ==============================================================================  -->
                  <!-- =============================================================================== -->
                   <div class="uk-block uk-block-border uk-block-default uk-margin-top uk-margin-bottom">

                         <!-- top button -->
                         <div class="uk-width-1-1 uk-margin-top">
                            <!-- Search -->
                            <form class="uk-search uk-navbar-flip" data-uk-search>
                              <input class="uk-search-field" type="search" name="search" placeholder="search..."></input>
                              <button class="uk-button" type="button" name="search"><i class="uk-icon-arrow-right"></i></button>
                            </form>
                            <!-- Search -->
                            <!-- dropdown -->
                            <div class="uk-button-dropdown" data-uk-dropdown>
                              <a href="#" class="uk-button">Bulk Action <i class="uk-icon-caret-down uk-margin-left"></i></a>
                              <div class="uk-dropdown">
                                <ul class="uk-nav uk-nav-dropdown">
                                  <li><a href="#"><i class="uk-icon-edit uk-margin-right"></i>Delete</a></li>
                                  <li><a href="#"><i class="uk-icon-trash uk-margin-right"></i>Nonaktif</a></li>
                                </ul>
                              </div>
                            </div>
                            <!-- dropdown -->
                            <!-- btn apply  -->
                            <a href="#" class="uk-button uk-button-primary">Apply</a>
                            <!-- btn apply -->
                            
                            <!-- dropdown -->
                            <div class="uk-button-dropdown" data-uk-dropdown>
                              <a href="#" class="uk-button">Changer Role to...<i class="uk-icon-caret-down uk-margin-left"></i></a>
                              <div class="uk-dropdown">
                                <ul class="uk-nav uk-nav-dropdown">
                                  <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>Administrator</a></li>
                                  <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>Editor</a></li>
                                  <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>Subscriber</a></li>
                                  <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>Contributor</a></li>
                                  <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>Author</a></li>
                                </ul>
                              </div>
                            </div>
                            <!-- dropdown -->
                            <!-- btn apply  -->
                            <a href="#" class="uk-button uk-button-primary">Change</a>
                            <!-- btn apply -->
                          </div>
                          <!-- top button -->
                            <div class="uk-overflow-container uk-margin-top">
                                <table class="uk-table uk-table-hover uk-table-striped uk-table-condensed">
                                    <thead>
                                        <tr>
                                            <th>
                                              <input type="checkbox"></input>
                                            </th>
                                            <th>Username</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Posts</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                              <input type="checkbox"></input>
                                            </td>
                                            <td class="uk-width-2-10">
                                              <ul class="uk-subnav">
                                                <li data-uk-dropdown>
                                                    <div class="uk-float-left">
                                                      <img src="img/avatar.svg" alt="user">
                                                    </div>
                                                    <div class="uk-float-left uk-margin-left">
                                                      <a href="add-user.php">Admin</a>
                                                      <!-- This is the dropdown -->
                                                      <div class="">
                                                          <ul class="uk-breadcrumb">
                                                              <li class="uk-display-inline"><a href="add-user.php"><i class="uk-icon-edit"></i></a></li>
                                                              <li class="uk-display-inline"><a href=""><i class="uk-icon-trash"></i></a></li>
                                                          </ul>
                                                      </div>
                                                    </div>
                                                    
                                                </li>
                                              </ul>
                                            </td>
                                            <td class="uk-width-2-10">
                                              <a href="#">Google</a>
                                            </td>
                                            <td class="uk-width-2-10"><a href="mailto:admin@gmail.com?Subject=Hello%20again" target="_top">admin@gmail.com</a></td>
                                            <td class="uk-width-2-10">Administrator</td>
                                            <td class="uk-width-1-10"><a href="#">10</a></td>

                                        </tr>
                                        <!--  -->

                                    </tbody>
                                </table>
                            </div>
                          <!-- tabel  -->
                          <!-- pagination -->
                          <ul class="uk-pagination uk-pagination-right">
                              <li><a href=""><i class="uk-icon-chevron-left"></i></a></li>
                              <li class="uk-active"><span>1</span></li>
                              <li class="uk-disabled"><span>2</span></li>
                              <li><a href="#"><i class="uk-icon-chevron-right"></i></a></li>
                          </ul>
                          <!-- pagination -->
                        </div>
                   </div>

                </div>
                <!-- Menu Content  -->

            </div>
            <!-- Main -->

        </div>
        <!-- Container -->
        <?php include'footer.php' ?>