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
                          <h2 class="uk-display-inline uk-margin-right">Add Media</h2>
                          <a href="add-media.php" class="uk-button uk-button-link uk-display-inline">Add New</a>
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
                                  <li><a href="#"><i class="uk-icon-trash uk-margin-right"></i>Delete Permanently</a></li>
                                </ul>
                              </div>
                            </div>
                            <!-- dropdown -->
                            <!-- btn apply  -->
                            <a href="#" class="uk-button uk-button-primary">Apply</a>
                            <!-- btn apply -->
                            <!-- dropdown -->
                            <div class="uk-button-dropdown" data-uk-dropdown>
                              <a href="#" class="uk-button">All Media<i class="uk-icon-caret-down uk-margin-left"></i></a>
                              <div class="uk-dropdown">
                                <ul class="uk-nav uk-nav-dropdown">
                                  <li><a href="#"><i class="uk-icon-folder uk-margin-right"></i>Image</a></li>
                                  <li><a href="#"><i class="uk-icon-folder uk-margin-right"></i>Video</a></li>
                                </ul>
                              </div>
                            </div>
                            <!-- dropdown -->
                            <!-- dropdown -->
                            <div class="uk-button-dropdown" data-uk-dropdown>
                              <a href="#" class="uk-button">Semua Tanggal<i class="uk-icon-caret-down uk-margin-left"></i></a>
                              <div class="uk-dropdown">
                                <ul class="uk-nav uk-nav-dropdown">
                                  <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>Januari</a></li>
                                  <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>Februari</a></li>
                                </ul>
                              </div>
                            </div>
                            <!-- dropdown -->
                            <!-- btn apply  -->
                            <a href="#" class="uk-button uk-button-primary">Filter</a>
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
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Uploaded to</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                              <input type="checkbox"></input>
                                            </td>
                                            <td class="uk-width-5-10">
                                              <ul class="uk-subnav">
                                                <li data-uk-dropdown="">
                                                    <img class="uk-width-3-10 uk-margin-top-remove" src="img/placeholder_200x200.svg">
                                                    <!-- This is the dropdown -->
                                                    <div class=" uk-width-5-10 uk-margin-small-top uk-margin-small-left">
                                                        <small class="uk-panel-title">Title Media</small>
                                                        <ul class="uk-breadcrumb uk-margin-top-remove">
                                                            <li class="uk-display-inline"><a href=""><i class="uk-icon-edit uk-margin-small-right"></i></a></li>
                                                            <li class="uk-display-inline"><a href=""><i class="uk-icon-trash uk-margin-small-right"></i></a></li>
                                                            <li class="uk-display-inline"><a href=""><i class="uk-icon-eye uk-margin-small-right"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                              </ul>
                                            </td>
                                            <td class="uk-width-1-10">
                                              <a href="#">Google</a>
                                            </td>
                                            <td class="uk-width-2-10">Berita</td>
                                            <td class="uk-width-2-10">Published<p>1 hour ago</p></td>

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
        <?php include'footer.php' ?>