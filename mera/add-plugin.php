                <?php include'header.php' ?>
                <!-- Sidebar -->
                <?php include'sidebar.php' ?>
                <!-- Sidebar -->
                <!-- upload script  -->
                <script>

                    $(function(){

                        var progressbar = $("#progressbar"),
                            bar         = progressbar.find('.uk-progress-bar'),
                            settings    = {

                            action: '/', // upload url

                            allow : '*.(jpg|jpeg|gif|png)', // allow only images

                            loadstart: function() {
                                bar.css("width", "0%").text("0%");
                                progressbar.removeClass("uk-hidden");
                            },

                            progress: function(percent) {
                                percent = Math.ceil(percent);
                                bar.css("width", percent+"%").text(percent+"%");
                            },

                            allcomplete: function(response) {

                                bar.css("width", "100%").text("100%");

                                setTimeout(function(){
                                    progressbar.addClass("uk-hidden");
                                }, 250);

                                alert("Upload Completed")
                            }
                        };

                        var select = UIkit.uploadSelect($("#upload-select"), settings),
                            drop   = UIkit.uploadDrop($("#upload-drop"), settings);
                    });

                </script>
                <!-- upload script -->

                <!-- Menu Content -->
                <div class="uk-width-medium-1-1 uk-width-large-8-10 uk-width-small-1-1 shadow uk-margin-top">
                  <!-- ========================================================================  -->
                  <div class="uk-block-border uk-block-default">
                    <div class="uk-container">
                        <!-- block left -->
                        <div class="uk-width-1-2 uk-margin-top">
                          <h2 class="uk-display-inline uk-margin-right">Add Plugin</h2>
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
                                            <th>Plugin</th>
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
                                              <a href="#">Active</a>
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