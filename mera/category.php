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
                          <h2 class="uk-display-inline uk-margin-right">Category</h2>
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

                  
                  <!-- =============================================================================== -->
                   <div class="uk-block uk-block-border uk-block-default uk-margin-top uk-margin-bottom">

                         <!-- top button -->
                         <div class="uk-width-1-1 uk-margin-top">
                            <!-- Search -->
                            <form class="uk-search uk-navbar-flip" data-uk-search>
                              <input class="uk-search-field" type="search" name="search" placeholder="search..."></input>
                              <button class="uk-button" type="button" name="search" ><i class="uk-icon-arrow-right"></i></button>
                            </form>
                            <!-- Search -->
                            <form class="uk-margin-left">
                              <input type="text" placeholder="Name Category"></input>
                              <button type="submit" class="uk-button uk-button-primary">Add New</button>
                            </form>
                          </div>
                          <!-- top button -->
                            <div class="uk-overflow-container uk-margin-top">
                                <table class="uk-table uk-table-hover uk-table-striped uk-table-condensed">
                                    <thead>
                                        <tr>
                                            <th>
                                              <input type="checkbox"></input>
                                            </th>
                                            <th>Name Category</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                              <input type="checkbox"></input>
                                            </td>
                                            <td class="uk-width-1-2">
                                              <ul class="uk-subnav">
                                                <li data-uk-dropdown>
                                                    <a href="">Footbal</a>

                                                    <!-- This is the dropdown -->
                                                    <div class="uk-dropdown uk-dropdown-small">
                                                        <ul class="uk-breadcrumb">
                                                            <li class="uk-display-inline"><a href="#modal-edit" data-uk-modal="">Edit</a></li>
                                                            <li class="uk-display-inline"><a href="">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- modal edit -->
                                                    <!-- modals -->
                                                    <div class="uk-margin-top">
                                                      <div id="modal-edit" class="uk-modal top-menu-position">
                                                         <div class="uk-modal-dialog">
                                                           <button type="button" class="uk-modal-close uk-close"></button>
                                                              <div class="uk-modal-header">
                                                                <h2>Edit Category</h2>
                                                              </div>
                                                              <input type="text" class="uk-width-1-1" autofocus=""></input>
                                                                  <div class="uk-modal-footer uk-text-right">
                                                            <button type="button" class="uk-button uk-button-primary uk-modal-close">Save</button>
                                                         </div>
                                                      </div>
                                                    </div>
                                                    <!-- modals -->
                                                </li>
                                              </ul>
                                            </td>
                                            <td class="uk-width-1-2">Published<p>1 hour ago</p></td>

                                        </tr>

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
        <?php include'footer.php'?>