                <?php include'header.php' ?>
                <!-- Sidebar -->
                <?php include'sidebar.php' ?>
                <!-- Sidebar -->

                <!-- Menu Content -->
                <div class="uk-width-medium-1-1  uk-width-large-8-10 uk-width-small-1-1 shadow uk-margin-top">
                  <!-- ========================================================================  -->
                  <div class="uk-block-border uk-block-default">
                    <div class="uk-container">
                        <!-- block left -->
                        <div class="uk-width-1-2 uk-margin-top ">
                          <h2 class="uk-display-inline uk-margin-right">Add Media</h2>
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
                  <!-- ======================================Upload==================================  -->
                  <div class="uk-block-border uk-margin-top uk-block-default">
                    <div class="uk-container">
                        <!-- block center media -->
                        <div id="upload-drop" class="uk-placeholder uk-block uk-block-default uk-text-center">
                            <!-- image preview -->
                            <div class="uk-block-muted">
                              
                            </div>
                            <!-- image preview -->
                            <i class="uk-icon-cloud-upload uk-icon-medium uk-text-muted uk-margin-small-right"></i> Dropping file here or 
                              <span>
                                <a class="uk-form-file uk-text-center">selecting one<input id="upload-select" type="file"></a>.
                              </span>
                            </div>

                        <div id="progressbar" class="uk-progress uk-hidden">
                            <div class="uk-progress-bar" style="width: 0%;">0%</div>
                        </div>
                        <!-- block center media -->
                    </div>
                  </div>
                  <!-- ==============================================================================  -->
                  <!-- =============================================================================== -->
                   <div class="uk-block uk-block-border uk-block-default uk-margin-top uk-margin-bottom">

                         
                          <!-- top button -->
                            <div class="uk-overflow-container">
                                <table class="uk-table uk-table-hover uk-table-striped uk-table-condensed">
                                    <thead>
                                        <tr>
                                            <th>Media</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="uk-width-1-2">
                                              <ul class="uk-subnav">
                                                <li>
                                                    <img style="height: 80px" src="img/placeholder_200x200.svg">
                                                </li>
                                              </ul>
                                            </td>
                                            <td class="uk-width-1-2">
                                              <a href="#">Edit</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                          <!-- tabel  -->
                         
                        </div>
                   </div>

                </div>
                <!-- Menu Content  -->

            </div>
            <!-- Main -->

        </div>
        <!-- Container -->
        <?php include'footer.php' ?>