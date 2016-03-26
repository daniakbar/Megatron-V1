                <?php include'header.php' ?>
                <!-- Sidebar -->
                <?php include'sidebar.php' ?>
                <!-- Sidebar -->

                <!-- Menu Content -->
                <div class="uk-width-medium-1-1 uk-width-large-8-10 uk-width-small-1-1 shadow uk-margin-top">
                  <!-- ========================================================================  -->
                  <div class="uk-block-border uk-block-default">
                    <div class="uk-container">
                        <!-- block left -->
                        <div class="uk-width-1-2 uk-margin-top">
                          <h2 class="uk-display-inline uk-margin-right">Menu Manager</h2>
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
                  <!-- content Left (Menu)-->
                        <div class="uk-width-1-1 uk-block-border uk-block-muted uk-margin-top">
                          <div class="uk-container">
                            <div class=" uk-overlay uk-overlay-hover uk-margin-small-top uk-margin-small-bottom">
                               <h5 class="uk-display-inline">Select menu to edit : </h5>
                               <select class="uk-form uk-display-inline">
                                  <option>Main Menu</option>
                                  <option>Main Landing Page</option>
                               </select>
                               <button class="uk-button uk-display-inline uk-button-primary uk-margin-small-left uk-margin-small-right">Select</button>
                               or
                               <a class="uk-margin-small-left" href="#">Create New Menu</a>             
                            </div>
                          </div>    
                        </div>
                                  <!-- content Left-->
                        <!-- ==================theme=============== -->
                        <div class="uk-margin-top">
                              <div class="uk-grid">

                                  <!-- content Left (Menu)-->
                                  <div class="uk-width-3-10">
                                      
                                    <div class="uk-accordion uk-block-default" data-uk-accordion>

                                          <h3 class="uk-accordion-title ">Pages<i class="uk-icon-angle-down uk-navbar-flip"></i></h3>
                                          
                                          <!-- Pages Tab -->
                                          <div class="uk-accordion-content">
                                            <!-- tab button -->
                                            <div class="uk-tab uk-width-1-1" data-uk-switcher="{connect:'#recent-use, #view-all, #search'}" data-uk-grid-margin>
                                                <li class="uk-active uk-text-small"><a href="#">Recent Use</a></li>
                                                <li class="uk-text-small"><a href="#">View All</a></li>
                                                <li class="uk-text-small"><a href="#">Search</a></li>
                                            </div>
                                            <!-- tab button -->

                                                <!-- tab content page -->

                                                 <ul id="recent-use" class="uk-switcher uk-margin-left ">
                                                    <!-- recent use tab -->
                                                    <li >
                                                      <form class="uk-form uk-width-1-1 uk-margin-top" data-uk-margin>

                                                          <fieldset>
                                                              <div class="uk-form-row">
                                                                  <input class="uk-display-inline" type="checkbox" value="1">
                                                                  <label class="uk-display-inline">Home</label>
                                                              </div>
                                                              
                                                              <div class="uk-form-row uk-float-right">
                                                                  <button type="submit">Add New</button>
                                                              </div>
                                                          </fieldset>

                                                      </form>
                                                    </li>
                                                    <!-- recent use tab -->
                                                    <!-- view all tab -->
                                                    <li id="view-all">
                                                        <form class="uk-form uk-width-1-1 uk-margin-top" data-uk-margin>

                                                            <fieldset>
                                                                <div class="uk-form-row">
                                                                    <input class="uk-display-inline" type="checkbox" value="1">
                                                                    <label class="uk-display-inline">Home</label>
                                                                </div>

                                                                <div class="uk-form-row">
                                                                    <input class="uk-display-inline" type="checkbox" value="1">
                                                                    <label class="uk-display-inline">About</label>
                                                                </div>
                                                                
                                                                <div class="uk-form-row uk-float-right">
                                                                    <button type="submit">Add New</button>
                                                                </div>
                                                            </fieldset>

                                                        </form>
                                                    </li>
                                                    <!-- view all tab -->
                                                    <!-- search tab -->
                                                    <li id="search">
                                                        <form class="uk-form uk-width-1-1 uk-margin-top" data-uk-margin data-uk-search>
                                                            <i class="uk-icon-search uk-display-inline"></i>
                                                            <input class="uk-search-field" type="search" placeholder="search..." >
                                                        </form>

                                                    </li>
                                                    <!-- search tab -->
                                                 </ul>

                                          </div>
                                          <!-- Pages Tab -->

                                          <h3 class="uk-accordion-title">Post<i class="uk-icon-angle-down uk-navbar-flip"></i></h3>

                                          <!-- Post Tab -->
                                          <div class="uk-accordion-content">
                                            <!-- tab button -->
                                            <div class="uk-tab uk-width-1-1" data-uk-switcher="{connect:'#post-recent-use, #post-view-all, #post-search'}" data-uk-grid-margin>
                                                <li class="uk-active uk-text-small"><a href="#">Recent Use</a></li>
                                                <li class="uk-text-small"><a href="#">View All</a></li>
                                                <li class="uk-text-small"><a href="#">Search</a></li>
                                            </div>
                                            <!-- tab button -->

                                                <!-- tab content page -->

                                                 <ul id="post-recent-use" class="uk-switcher uk-margin-left ">
                                                    <!-- recent use tab -->
                                                    <li >
                                                      <form class="uk-form uk-width-1-1 uk-margin-top" data-uk-margin>

                                                          <fieldset>
                                                              <div class="uk-form-row">
                                                                  <input class="uk-display-inline" type="checkbox" value="1">
                                                                  <label class="uk-display-inline">Post 1</label>
                                                              </div>
                                                              
                                                              <div class="uk-form-row uk-float-right">
                                                                  <button type="submit">Add New</button>
                                                              </div>
                                                          </fieldset>

                                                      </form>
                                                    </li>
                                                    <!-- recent use tab -->
                                                    <!-- view all tab -->
                                                    <li id="post-view-all">
                                                        <form class="uk-form uk-width-1-1 uk-margin-top" data-uk-margin>

                                                            <fieldset>
                                                                <div class="uk-form-row">
                                                                    <input class="uk-display-inline" type="checkbox" value="1">
                                                                    <label class="uk-display-inline">Post 1</label>
                                                                </div>

                                                                <div class="uk-form-row">
                                                                    <input class="uk-display-inline" type="checkbox" value="1">
                                                                    <label class="uk-display-inline">Post 2</label>
                                                                </div>
                                                                
                                                                <div class="uk-form-row uk-float-right">
                                                                    <button type="submit">Add New</button>
                                                                </div>
                                                            </fieldset>

                                                        </form>
                                                    </li>
                                                    <!-- view all tab -->
                                                    <!-- search tab -->
                                                    <li id="post-search">
                                                        <form class="uk-form uk-width-1-1 uk-margin-top" data-uk-margin data-uk-search>
                                                            <i class="uk-icon-search uk-display-inline"></i>
                                                            <input class="uk-search-field" type="search" placeholder="search..." >
                                                        </form>

                                                    </li>
                                                    <!-- search tab -->
                                                 </ul>

                                          </div>
                                          <!-- Post Tab -->

                                          <h3 class="uk-accordion-title">Custome Links<i class="uk-icon-angle-down uk-navbar-flip"></i></h3>
                                          <!-- Custome Tab -->
                                          <div class="uk-accordion-content">
                                              <form class="uk-form uk-width-1-1 uk-margin-top" data-uk-margin>

                                                <fieldset class="uk-margin-left">

                                                  <div class="uk-form-row">

                                                      <label class="">Url : </label>
                                                      <div class="uk-form-controls">
                                                        <input class="" type="text" value="http://">
                                                      </div>
                                                  </div>

                                                  <div class="uk-form-row">
                                                      <label class="">Name : </label>
                                                      <div class="uk-form-controls">
                                                        <input class="uk-display-inline" type="text" placeholder="Menu Name">
                                                      </div>
                                                  </div>
                                                                  
                                                  <div class="uk-form-row uk-float-right uk-margin-right uk-margin-bottom">
                                                     <button type="submit">Add New</button>
                                                  </div>

                                                 </fieldset>

                                              </form>
                                          </div>
                                          <!-- custome Tab -->


                                          <h3 class="uk-accordion-title">Categories<i class="uk-icon-angle-down uk-navbar-flip"></i></h3>

                                          <!-- Category Tab -->
                                          <div class="uk-accordion-content">
                                            <!-- tab button -->
                                            <div class="uk-tab uk-width-1-1" data-uk-switcher="{connect:'#recent-use, #view-all, #search'}" data-uk-grid-margin>
                                                <li class="uk-active uk-text-small"><a href="#">Recent Use</a></li>
                                                <li class="uk-text-small"><a href="#">View All</a></li>
                                                <li class="uk-text-small"><a href="#">Search</a></li>
                                            </div>
                                            <!-- tab button -->

                                                <!-- tab content page -->

                                                 <ul id="recent-use" class="uk-switcher uk-margin-left ">
                                                    <!-- recent use tab -->
                                                    <li >
                                                      <form class="uk-form uk-width-1-1 uk-margin-top" data-uk-margin>

                                                          <fieldset>
                                                              <div class="uk-form-row">
                                                                  <input class="uk-display-inline" type="checkbox" value="1">
                                                                  <label class="uk-display-inline">News</label>
                                                              </div>
                                                              
                                                              <div class="uk-form-row uk-float-right">
                                                                  <button type="submit">Add New</button>
                                                              </div>
                                                          </fieldset>

                                                      </form>
                                                    </li>
                                                    <!-- recent use tab -->
                                                    <!-- view all tab -->
                                                    <li id="view-all">
                                                        <form class="uk-form uk-width-1-1 uk-margin-top" data-uk-margin>

                                                            <fieldset>
                                                                <div class="uk-form-row">
                                                                    <input class="uk-display-inline" type="checkbox" value="1">
                                                                    <label class="uk-display-inline">News</label>
                                                                </div>

                                                                <div class="uk-form-row">
                                                                    <input class="uk-display-inline" type="checkbox" value="1">
                                                                    <label class="uk-display-inline">Computer</label>
                                                                </div>
                                                                
                                                                <div class="uk-form-row uk-float-right">
                                                                    <button type="submit">Add New</button>
                                                                </div>
                                                            </fieldset>

                                                        </form>
                                                    </li>
                                                    <!-- view all tab -->
                                                    <!-- search tab -->
                                                    <li id="search">
                                                        <form class="uk-form uk-width-1-1 uk-margin-top" data-uk-margin data-uk-search>
                                                            <i class="uk-icon-search uk-display-inline"></i>
                                                            <input class="uk-search-field" type="search" placeholder="search..." >
                                                        </form>

                                                    </li>
                                                    <!-- search tab -->
                                                 </ul>

                                          </div>
                                          <!-- Category Tab -->

                                      </div> 

                                  </div>
                                  <!-- content Left-->

                                  <!-- content Right (Menu)-->
                                  <div class="uk-width-7-10">
                                      <div class="uk-block-border uk-block-default">
                                        <div class="uk-panel-teaser">
                                          
                                          <!-- title Menu -->
                                          <div class="uk-panel uk-panel-box uk-block-muted">
                                              <div class="uk-panel-title uk-display-inline">
                                                <i class="uk-icon-trophy uk-margin-small-right"></i>Menu Name
                                                <input class="uk-form" type="text"></input>
                                              </div>                                    
                                          </div>
                                          <!-- title Menu -->

                                        </div>
                                        <!-- =============================================================== -->
                                        <!-- content menu -->
                                        <div class="uk-container">

                                           <h4 class="">Menu Structure</h4>
                                            <!-- Menu Manager -->
                                            <ul class="uk-nestable uk-width-1-2" data-uk-nestable="{handleClass:'uk-nestable-handle'}">

                                                <li class="uk-nestable-item">
                                                    <div class="uk-nestable-panel">
                                                        <a href="#modal-menu-home" class="uk-display-inline uk-float-right uk-text-small uk-margin-right uk-icon-edit" data-uk-modal> Edit</a>
                                                        <i class="uk-nestable-handle uk-icon uk-icon-bars uk-margin-small-right"></i>
                                                        Home
                                                    </div>

                                                </li>
                                               
                                                <li class="uk-nestable-item">
                                                    <div class="uk-nestable-panel">
                                                        <a href="#modal-menu-home" class="uk-display-inline uk-float-right uk-text-small uk-margin-right uk-icon-edit" data-uk-modal> Edit</a>
                                                        <i class="uk-nestable-handle uk-icon uk-icon-bars uk-margin-small-right"></i>
                                                        About
                                                    </div>
                                                </li>
                                                <li class="uk-nestable-item">
                                                    <div class="uk-nestable-panel">
                                                        <a href="#modal-menu-home" class="uk-display-inline uk-float-right uk-text-small uk-margin-right uk-icon-edit" data-uk-modal> Edit</a>
                                                        <i class="uk-nestable-handle uk-icon uk-icon-bars uk-margin-small-right"></i>
                                                        Gallery
                                                    </div>
                                                </li>
                                                <li class="uk-nestable-item">
                                                    <div class="uk-nestable-panel">
                                                        <a href="#modal-menu-home" class="uk-display-inline uk-float-right uk-text-small uk-margin-right uk-icon-edit" data-uk-modal> Edit</a>
                                                        <i class="uk-nestable-handle uk-icon uk-icon-bars uk-margin-small-right"></i>
                                                        Contact Us
                                                    </div>
                                                </li>
                                            </ul>

                                            <!-- MENU EDIT Looping DETAIL -->
                                             <!-- modal edit menu -->
                                                <!-- modals -->
                                                <div class="uk-margin-top">
                                                  <div id="modal-menu-home" class="uk-modal top-menu-position">
                                                       <div class="uk-modal-dialog">
                                                           <button type="button" class="uk-modal-close uk-close"></button>
                                                           <div class="uk-modal-header">
                                                               <h2>Edit Home Button</h2>
                                                           </div>

                                                              <div class="uk-form-row">
                                                                <label>Url</label>
                                                                <input type="text" class="uk-width-1-1" autofocus="" placeholder="http://local.com"></input>
                                                              </div>

                                                              <div class="uk-form-row">
                                                                <label>Url Label</label>
                                                                <div class="uk-form-controls">
                                                                  <input type="text" class="uk-width-1-1" autofocus="" placeholder="Home"></input>
                                                                </div>
                                                              </div>

                                                              <div class="uk-form-row">
                                                                <label>Icon (Font Awesome)</label>
                                                                <div class="uk-form-controls">
                                                                  <input type="text" class="uk-width-1-1" autofocus="" placeholder="Icon"></input>
                                                                </div>
                                                              </div>

                                                           <div class="uk-modal-footer uk-text-right">
                                                               <button type="button" class="uk-button uk-button-danger">Remove</button>
                                                               <button type="button" class="uk-button uk-button-primary">Save</button>
                                                           </div>
                                                       </div>
                                                  </div>
                                                </div>
                                                <!-- modals -->
                                                <!-- modal edit menu -->
                                            <!-- MENU EDIT DETAIL -->

                                            
                                            <!-- Menu Manager -->
                                            <div class="uk-grid-divider"></div>

                                            <!-- Menu Setting -->
                                            <h4 class="">Menu Setting</h4>

                                            <input type="checkbox"></input>
                                            <label> Main Menu</label>
                                            <!-- Menu Setting -->


                                           

                                          </div>
                                          <!-- Content Menu -->
                                          <!-- ================================================================= -->
                                           <!-- footer Menu -->
                                            <div class="uk-panel uk-panel-box uk-block-muted">
                                                <button>
                                                  <i class="uk-icon-trash uk-margin-small-right uk-text-danger"></i>Delete Menu
                                                </button>

                                                <button class="uk-navbar-flip">
                                                  <i class="uk-icon-save uk-margin-small-right uk-text-primary"></i>Save Menu
                                                </button>                                  
                                            </div>
                                            <!-- footer Menu -->
                                      </div>  
                                  </div>
                                  <!-- content Right (Menu)-->



                              </div>
                        </div>
                        <!-- =================theme================ -->

                   </div>

                </div>
                <!-- Menu Content  -->


            </div>
            <!-- Main -->

        </div>
        <!-- Container -->
        <?php include'footer.php' ?>