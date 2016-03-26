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
                          <h2 class="uk-display-inline uk-margin-right">Plugin</h2>
                          <a href="add-post.php" class="uk-button uk-button-link uk-display-inline">Add New</a>
                        </div>

                        <!-- block left -->
                        <!-- block right -->
                        <div class="uk-width-10-10">
                          <!-- Breadcrumb -->
                          <ul class="uk-breadcrumb uk-navbar-flip ">
                             <!--  <li><a href="">All (1)</a></li>
                              <li class="uk-active"><a href="">Published (0)</a></li> -->
                          </ul>
                          <!-- Breadcrumb -->
                        </div>
                        <!-- block right -->
                    </div>
                  </div>
                  <!-- ==============================================================================  -->
                  <!-- =============================================================================== -->
                   <div class="uk-block uk-block-border uk-block-default uk-margin-top uk-margin-bottom">
                          <div class="uk-width-10-10">
                          <!-- Breadcrumb -->
                          <ul class="uk-breadcrumb uk-margin-left uk-margin-top">
                              <li><a href="">All (2)</a></li>
                              <li class="uk-active"><a href="">Active (1)</a></li>
                              <li class="uk-active"><a href="">Inactive (1)</a></li>
                              <li class="uk-active"><a href="">Update Available (1)</a></li>
                          </ul>
                          <!-- Breadcrumb -->
                        </div>
                         <!-- top button -->
                         <div class="uk-width-1-1">
                            <!-- Search -->
                            <form class="uk-search uk-navbar-flip" data-uk-search>
                              <input class="uk-search-field uk-border-rounded" type="search" placeholder="search..." name="search"></input>
                              <button class="uk-button" type="button" name="search"><i class="uk-icon-arrow-right"></i></button>
                            </form>
                            <!-- Search -->
                            <!-- dropdown -->
                            <div class="uk-button-dropdown" data-uk-dropdown>
                              <a href="#" class="uk-button">Bulk Action <i class="uk-icon-caret-down uk-margin-left"></i></a>
                              <div class="uk-dropdown">
                                <ul class="uk-nav uk-nav-dropdown">
                                  <li><a href="#"><i class="uk-icon-edit uk-margin-right"></i>Activate</a></li>
                                  <li><a href="#"><i class="uk-icon-xing-square uk-margin-right"></i>Deactivate</a></li>
                                  <li><a href="#"><i class="uk-icon-refresh uk-margin-right"></i>Update</a></li>
                                  <li><a href="#"><i class="uk-icon-trash uk-margin-right"></i>Delete</a></li>
                                </ul>
                              </div>
                            </div>
                            <!-- dropdown -->
                            <!-- btn apply  -->
                            <a href="#" class="uk-button uk-button-primary">Apply</a>
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
                                            <th>Plugin</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- loop -->
                                        <tr>
                                            <td>
                                              <input type="checkbox"></input>
                                            </td>
                                            <td class="uk-width-2-10">
                                              <ul class="uk-subnav">
                                                <li data-uk-dropdown>
                                                    <a href="" class="uk-article-lead">Akismet</a>
                                                    <!-- This is the dropdown -->
                                                    <div class="uk-width-1-1">
                                                        <ul class="uk-breadcrumb">
                                                            <li class="uk-display-inline"><a href="">Active</a></li>
                                                            <li class="uk-display-inline"><a href="">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- plugin button -->
                                                </li>
                                                    
                                              </ul>
                                            </td>
                                            <td class="uk-width-8-10">
                                              <p class="uk-article-meta">Used by millions, Akismet is quite possibly the best way in the world to protect your blog from spam. It keeps your site protected even while you sleep. To get started: 1) Click the "Activate" link to the left of this description, 2) Sign up for an Akismet plan to get an API key, and 3) Go to your Akismet configuration page, and save your API key.</p>
                                              <!-- This is the dropdown -->
                                                    <div class="uk-width-1-1">
                                                        <ul class="uk-breadcrumb">
                                                            <li class="uk-display-inline">Version 1.3</li>
                                                            <li class="uk-display-inline">By <a href="">Dani A.</a></li>
                                                            <li class="uk-display-inline">
                                                              <a href="#modal-plugin-aksimet" data-uk-modal> View Detail </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                              <!-- plugin button -->

                                              <!-- update plugin notif -->
                                            <div class="uk-width-1-1">
                                              
                                              <div class="uk-alert uk-alert-warning"><i class="uk-icon-refresh"></i>
                                                here is a new version of Akismet available. 

                                                <a href="#modal-plugin-aksimet" data-uk-modal>View version 3.1.8 details</a> 
                                                or 
                                                <a>update now.</a>
                                              </div>

                                            </div>
                                            <!-- update plugin notif -->

                                            </td>


                                        </tr>
                                        <!-- loop -->

                                        <!-- plugin detail -->
                                        <div class="uk-margin-top">
                                          
                                          <div id="modal-plugin-aksimet" class="uk-modal top-menu-position">
                                               <div class="uk-modal-dialog">
                                                   <button type="button" class="uk-modal-close uk-close"></button>
                                                   <div class="uk-modal-header">
                                                       <h2>Aksimet</h2>
                                                       <div class="uk-panel uk-panel-box">
                                                          <div class="uk-panel-teaser">
                                                              <img src="img/placeholder_800x280.svg" alt="">
                                                          </div>
                                                              <!-- tab plugin -->
                                                              <ul class="uk-tab" data-uk-switcher="{connect:'#description, #installation, #changelog, #review'}" data-uk-grid-margin data-uk-tab>
                                                                  <li class="uk-active"><a href="">Description</a></li>
                                                                  <li><a href="">Installation</a></li>
                                                                  <li><a href="">Changelog</a></li>
                                                                  <li><a href="">Review</a></li>
                                                              </ul>
                                                              <!-- tab plugin --> 

                                                              <!-- tab plugin modal -->

                                                             <ul id="description" class="uk-switcher uk-margin-left ">
                                                                <!-- recent use tab -->
                                                                <li class="uk-margin-top">
                                                                  <p>Description Here</p>
                                                                </li>

                                                                <li id="installation" class="uk-margin-top">
                                                                  <p>Installation here</p>
                                                                </li>

                                                                <li id="changelog" class="uk-margin-top">
                                                                  <p>Changelog here</p>
                                                                </li>

                                                                <li id="review" class="uk-margin-top">
                                                                  <p>Review here</p>
                                                                </li>
                                                             </ul>
                                                             <!-- tab plugin modal -->  
                                                        </div>
                                                    </div>
                                                    <div class="uk-modal-footer uk-text-right">
                                                        <button type="button" class="uk-button uk-button-primary">Install Update</button>
                                                    </div>
                                               </div>
                                           </div>

                                        </div>
                                        <!-- plugin detail -->

                                        <!-- loop -->
                                        <tr>
                                            <td>
                                              <input type="checkbox"></input>
                                            </td>
                                            <td class="uk-width-2-10">
                                              <ul class="uk-subnav">
                                                <li data-uk-dropdown>
                                                    <a href="" class="uk-article-lead">Contact Form</a>
                                                    <!-- This is the dropdown -->
                                                    <div class="uk-width-1-1">
                                                        <ul class="uk-breadcrumb">
                                                            <li class="uk-display-inline"><a href="">Deactive</a></li>
                                                            <li class="uk-display-inline"><a href="">Setting</a></li>
                                                            <li class="uk-display-inline"><a href="">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- plugin button -->
                                                </li>
                                                    
                                              </ul>
                                            </td>
                                            <td class="uk-width-8-10">
                                              <p class="uk-article-meta">Used by millions, Akismet is quite possibly the best way in the world to protect your blog from spam. It keeps your site protected even while you sleep. To get started: 1) Click the "Activate" link to the left of this description, 2) Sign up for an Akismet plan to get an API key, and 3) Go to your Akismet configuration page, and save your API key.</p>
                                              <!-- This is the dropdown -->
                                                    <div class="uk-width-1-1">
                                                        <ul class="uk-breadcrumb">
                                                            <li class="uk-display-inline">Version 1.3</li>
                                                            <li class="uk-display-inline">By <a href="">Contact Form</a></li>
                                                            <li class="uk-display-inline">
                                                              <a href="#modal-plugin-contact-form" data-uk-modal> View Detail </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                              <!-- plugin button -->

                                            </td>


                                        </tr>
                                        <!-- loop -->

                                        <!-- plugin detail -->
                                        <div class="uk-margin-top">
                                          
                                          <div id="modal-plugin-contact-form" class="uk-modal top-menu-position">
                                               <div class="uk-modal-dialog">
                                                   <button type="button" class="uk-modal-close uk-close"></button>
                                                   <div class="uk-modal-header">
                                                       <h2>Contact Form</h2>
                                                       <div class="uk-panel uk-panel-box">
                                                          <div class="uk-panel-teaser">
                                                              <img src="img/placeholder_800x280.svg" alt="">
                                                          </div>
                                                              <!-- tab plugin -->
                                                              <ul class="uk-tab" data-uk-switcher="{connect:'#description, #installation, #changelog, #review'}" data-uk-grid-margin data-uk-tab>
                                                                  <li class="uk-active"><a href="">Description</a></li>
                                                                  <li><a href="">Installation</a></li>
                                                                  <li><a href="">Changelog</a></li>
                                                                  <li><a href="">Review</a></li>
                                                              </ul>
                                                              <!-- tab plugin --> 

                                                              <!-- tab plugin modal -->

                                                             <ul id="description" class="uk-switcher uk-margin-left ">
                                                                <!-- recent use tab -->
                                                                <li class="uk-margin-top">
                                                                  <p>Description Here</p>
                                                                </li>

                                                                <li id="installation" class="uk-margin-top">
                                                                  <p>Installation here</p>
                                                                </li>

                                                                <li id="changelog" class="uk-margin-top">
                                                                  <p>Changelog here</p>
                                                                </li>

                                                                <li id="review" class="uk-margin-top">
                                                                  <p>Review here</p>
                                                                </li>
                                                             </ul>
                                                             <!-- tab plugin modal -->  
                                                        </div>
                                                    </div>
                                                    <div class="uk-modal-footer uk-text-right">
                                                        <button type="button" class="uk-button uk-button-primary" disabled="">Last Update Installed</button>
                                                    </div>
                                               </div>
                                           </div>

                                        </div>
                                        <!-- plugin detail -->

                                       

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