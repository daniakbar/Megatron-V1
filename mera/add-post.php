                <?php include'header.php' ?>
                <!-- Sidebar -->
                <?php include'sidebar.php' ?>
                <!-- notifikasi update  -->
                <script type="text/javascript">
                    window.onload = function()
                    {
                      CKEDITOR.replace( 'editor1' );
                    };
                    //add select
                    function selectIngredient(select)
                      {
                        var option = select.options[select.selectedIndex];
                        var div = select.parentNode.getElementsByTagName('div')[0];

                        var choices = div.getElementsByTagName('input');
                        for (var i = 0; i < choices.length; i++)
                          if (choices[i].value == option.value)
                            return;

                        var span = document.createElement('span');
                        var input = document.createElement('input');
                        var text = document.createTextNode(option.firstChild.data);

                        input.type = 'hidden';
                        input.name = 'ingredients[]';
                        input.value = option.value;

                        span.appendChild(input);
                        span.appendChild(text);
                        span.setAttribute('onclick', 'this.parentNode.removeChild(this);');
                        span.setAttribute('class', 'uk-margin-top uk-icon-remove uk-button-primary uk-margin-right');
                        input.setAttribute('class', 'uk-icon-at');

                        div.appendChild(span);
                      }


                  </script>
                  

                <!-- notifikasi update -->

                <!-- Menu Content -->
                <div class="uk-width-medium-1-1 uk-width-large-8-10 uk-width-small-1-1 shadow uk-margin-top">
                  <!-- ========================================================================  -->
                  <div class="uk-block-border uk-block-default">
                    <div class="uk-container">
                        <!-- block left -->
                        <div class="uk-width-1-2 uk-margin-top">
                          <h2 class="uk-display-inline uk-margin-right">Add New Post</h2>
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

                  <!-- container -->
                  <div class="uk-overflow-container">
                  <div class="uk-grid">
                    <!-- ========================================POST======================================= -->
                     <div class=" uk-width-7-10 uk-margin-top uk-margin-bottom">
                         <form method="post" class="uk-form">
                           <fieldset data-uk-margin>
                             <!-- Title -->
                             <input type="text" placeholder="Title" class="uk-width-1-1 uk-margin-bottom"></input>
                             <!-- Title -->
                             <a href="#media" class="uk-button uk-margin-bottom" data-uk-modal><i class="uk-icon-image uk-margin-small-right"></i>Add Media</a>

                              <!-- top media -->
                              <div class="uk-margin-top">
                                <!-- This is the modal -->
                                <div id="media" class="uk-modal top-menu-position">
                                    <div class="uk-modal-dialog uk-modal-dialog-large">
                                        <a class="uk-modal-close uk-close"></a>
                                        
                                        <!-- Media body -->
                                        <div class="uk-grid">

                                            <div class="uk-width-2-10">
                                              <!-- header -->
                                              <div class=" uk-modal-header">
                                                  <!-- This is the nav containing the toggling elements -->
                                                  <ul  class="uk-thumbnav uk-tab-left" data-uk-switcher="{connect:'#insert-media, #create-gallery'}">
                                                      <li class="uk-active"><i class="uk-icon-image uk-display-inline"></i><a class="uk-display-inline uk-margin-left" href="#insert-media">Insert Media</a></li>
                                                      <li><i class="uk-icon-photo uk-display-inline" ></i><a class="uk-display-inline uk-margin-left" href="#create-gallery">Create Gallery</a></li>
                                                      
                                                      <li><i class="uk-icon-link uk-display-inline"></i><a class="uk-display-inline uk-margin-left" href="#create-gallery">Insert from url</a></li>

                                                  </ul>
                                              </div>
                                              <!-- header -->
                                            </div>

                                            <div class="uk-width-8-10">
                                              <!-- These are the containers of the content items -->
                                              <ul id="insert-media" class="uk-switcher">
                                                  <!--  -->
                                                  <li>
                                                      <!-- header -->
                                                      <h1 class="uk-article-lead">Insert Media</h1>
                                                      <!-- header -->
                                                      <!-- tab menu -->
                                                      <ul class="uk-tab" data-uk-switcher="{connect:'#upload-media, #media-gallery'}">
                                                          <li class="uk-active"><a href="">Upload Media</a></li>
                                                          <li><a href="">Media Gallery</a></li>
                                                      </ul>
                                                      <!-- tab menu -->
                                                      <!-- upload media & gallery-->
                                                      <ul id="upload-media" class="uk-switcher">
                                                        <!-- content upload media -->
                                                        <li class="uk-margin-top uk-margin-bottom uk-text-center">
                                                            <div id="upload-drop" class="uk-placeholder uk-margin-large-top">
                                                                <i class="uk-icon-cloud-upload uk-icon-medium uk-text-muted uk-margin-small-right"></i> Attach binaries by dropping them here or <a class="uk-form-file">selecting one<input id="upload-select" type="file"></a>.
                                                            </div>

                                                            <div id="progressbar" class="uk-progress uk-hidden">
                                                                <div class="uk-progress-bar" style="width: 0%;">...</div>
                                                            </div>
                                                        </li>
                                                        <!-- content upload media & gallery -->
                                                        <!-- content media gallery -->
                                                        <li id="media-gallery" class="uk-margin-top">
                                                            
                                                            <!-- top button -->
                                                             <div class="uk-width-1-1 uk-margin-bottom">
                                                                 
                                                                  <!-- dropdown -->
                                                                  <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                                                                    <a href="#" class="uk-button">All Media Item <i class="uk-icon-caret-down uk-margin-left"></i></a>
                                                                    <div class="uk-dropdown">
                                                                      <ul class="uk-nav uk-nav-dropdown">
                                                                        <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>Uploaded to this post</a></li>
                                                                        <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>Images</a></li>
                                                                        <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>Audio</a></li>
                                                                        <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>Video</a></li>
                                                                        <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>Unattached</a></li>
                                                                      </ul>
                                                                    </div>
                                                                  </div>
                                                                  <!-- dropdown -->
                                                                  <!-- dropdown -->
                                                                  <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                                                                    <a href="#" class="uk-button">All Date <i class="uk-icon-caret-down uk-margin-left"></i></a>
                                                                    <div class="uk-dropdown">
                                                                      <ul class="uk-nav uk-nav-dropdown">
                                                                        <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>May 2016</a></li>
                                                                        <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>February 2016</a></li>
                                                                        <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>January 2016</a></li>
                                                                      </ul>
                                                                    </div>
                                                                  </div>
                                                                  <!-- dropdown -->
                                                                   <!-- Search -->
                                                                  <div class="uk-navbar-flip">
                                                                    <form class="uk-search uk-float-right uk-margin-large-left" data-uk-search>
                                                                      <i class="uk-icon-search uk-display-inline"></i>
                                                                      <input class="uk-search-field uk-border-rounded" type="search" placeholder="search..." name="search"></input>
                                                                    </form>
                                                                  </div>
                                                                  <!-- Search -->
                                                               
                                                              </div>
                                                              <!-- top button -->
                                                       
                                                            <div class="uk-grid">
                                                                <!-- media image -->
                                                                <div class="uk-width-7-10">
                                                                    <!-- image width -->
                                                                    <div class="uk-scrollable-text uk-grid uk-grid-small uk-grid-width-1-5 top-menu-position">
                                                                
                                                                        <div>
                                                                            <img data-id="1" src="img/media/placeholder_800x600_1.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="2" src="img/media/placeholder_800x600_2.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>


                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                    </div>
                                                                    <!-- image width -->
                                                                </div>
                                                                <!-- media image -->
                                                                <!-- ============ -->
                                                                <!-- imgae detail right -->
                                                                <div class="uk-width-3-10">
                                                                  <div class="uk-scrollable-text uk-margin-right">
                                                                    <h3 class="uk-article-lead">Attachment Detail</h3>

                                                                    <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                    <!-- judul attachment -->
                                                                    <p class="uk-article-meta uk-margin-remove">Gambar-ini-.svg</p>
                                                                    <p class="uk-article-meta uk-margin-remove">March 18, 2016</p>
                                                                    <p class="uk-article-meta uk-margin-remove">100kb</p>
                                                                    <p class="uk-article-meta uk-margin-remove">2000 x 1000</p>
                                                                    <div>
                                                                      <a class="uk-article-meta uk-button-link uk-button-primary" href="#" class="uk-button-link">Edit Image</a>
                                                                    </div>
                                                                    <div>
                                                                      <a class="uk-article-meta uk-button-link uk-button-danger" href="#">Delete Permanently</a>
                                                                    </div>
                                                                    <div class="uk-grid-divider"></div>
                                                                    <!-- judul attachment -->
                                                                    <form class="uk-form">
                                                                        <!--  -->
                                                                        <div class="uk-form-row">
                                                                            <label class="uk-form-label" for="form-h-it">Url</label>
                                                                            <div class="uk-form-controls">
                                                                                <input type="text" id="form-h-it" placeholder="Text input" disabled="">
                                                                            </div>
                                                                        </div>
                                                                        <!--  -->
                                                                        <!--  -->
                                                                        <div class="uk-form-row">
                                                                            <label class="uk-form-label" for="form-h-it">Title</label>
                                                                            <div class="uk-form-controls">
                                                                                <input type="text" id="form-h-it" placeholder="Text input">
                                                                            </div>
                                                                        </div>
                                                                        <!--  -->
                                                                        <!--  -->
                                                                        <div class="uk-form-row">
                                                                            <label class="uk-form-label" for="form-h-it">Caption</label>
                                                                            <div class="uk-form-controls">
                                                                                <textarea></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <!--  -->
                                                                  </div>
                                                                </div>
                                                                <!-- image detail right -->
                                                            </div>
                                                            

                                                        </li>
                                                        <!-- content media gallery -->
                                                      </ul>
                                                      <!-- upload media -->
                                                  </li>

                                                  <!-- Create Gallery -->
                                                    <li id="create-gallery">
                                                      <!-- header -->
                                                      <h1 class="uk-article-lead">Insert Gallery</h1>
                                                      <!-- header -->
                                                      <!-- tab menu -->
                                                      <ul class="uk-tab" data-uk-switcher="{connect:'#upload-gallery, #media-gallery'}">
                                                          <li class="uk-active"><a href="">Upload Media</a></li>
                                                          <li><a href="">Media Gallery</a></li>
                                                      </ul>
                                                      <!-- tab menu -->
                                                      <!-- upload media & gallery-->
                                                      <ul id="upload-gallery" class="uk-switcher">
                                                        <!-- content upload media -->
                                                        <li class="uk-margin-top uk-margin-bottom uk-text-center">
                                                            <div id="upload-drop" class="uk-placeholder uk-margin-large-top">
                                                                <i class="uk-icon-cloud-upload uk-icon-medium uk-text-muted uk-margin-small-right"></i> Attach binaries by dropping them here or <a class="uk-form-file">selecting one<input id="upload-select" type="file"></a>.
                                                            </div>

                                                            <div id="progressbar" class="uk-progress uk-hidden">
                                                                <div class="uk-progress-bar" style="width: 0%;">...</div>
                                                            </div>
                                                        </li>
                                                        <!-- content upload media & gallery -->
                                                        <!-- content media gallery -->
                                                        <li id="media-gallery" class="uk-margin-top">
                                                            
                                                            <!-- top button -->
                                                             <div class="uk-width-1-1 uk-margin-bottom">
                                                                 
                                                                  <!-- dropdown -->
                                                                  <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                                                                    <a href="#" class="uk-button">All Media Item <i class="uk-icon-caret-down uk-margin-left"></i></a>
                                                                    <div class="uk-dropdown">
                                                                      <ul class="uk-nav uk-nav-dropdown">
                                                                        <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>Uploaded to this post</a></li>
                                                                        <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>Images</a></li>
                                                                        <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>Audio</a></li>
                                                                        <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>Video</a></li>
                                                                        <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>Unattached</a></li>
                                                                      </ul>
                                                                    </div>
                                                                  </div>
                                                                  <!-- dropdown -->
                                                                  <!-- dropdown -->
                                                                  <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                                                                    <a href="#" class="uk-button">All Date <i class="uk-icon-caret-down uk-margin-left"></i></a>
                                                                    <div class="uk-dropdown">
                                                                      <ul class="uk-nav uk-nav-dropdown">
                                                                        <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>May 2016</a></li>
                                                                        <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>February 2016</a></li>
                                                                        <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>January 2016</a></li>
                                                                      </ul>
                                                                    </div>
                                                                  </div>
                                                                  <!-- dropdown -->
                                                                   <!-- Search -->
                                                                  <div class="uk-navbar-flip">
                                                                    <form class="uk-search uk-float-right uk-margin-large-left" data-uk-search>
                                                                      <i class="uk-icon-search uk-display-inline"></i>
                                                                      <input class="uk-search-field uk-border-rounded" type="search" placeholder="search..." name="search"></input>
                                                                    </form>
                                                                  </div>
                                                                  <!-- Search -->
                                                               
                                                              </div>
                                                              <!-- top button -->
                                                       
                                                            <div class="uk-grid">
                                                                <!-- media image -->
                                                                <div class="uk-width-7-10">
                                                                    <!-- image width -->
                                                                    <div class="uk-scrollable-text uk-grid uk-grid-small uk-grid-width-1-5 top-menu-position">
                                                                
                                                                        <div>
                                                                            <img class="gallery" data-id="1" src="img/media/placeholder_800x600_1.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img class="gallery" data-id="2" src="img/media/placeholder_800x600_2.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>


                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                        <div>
                                                                            <img data-id="3" src="img/media/placeholder_800x600_3.jpg" width="800" height="600" alt="">
                                                                            <input type="hidden" name="images[ ]" />
                                                                        </div>

                                                                    </div>
                                                                    <!-- image width -->
                                                                </div>
                                                                <!-- media image -->
                                                                <!-- ============ -->
                                                                <!-- imgae detail right -->
                                                                <div class="uk-width-3-10">
                                                                  <div class="uk-scrollable-text uk-margin-right">
                                                                    <h3 class="uk-article-lead">Attachment Detail</h3>

                                                                    <img data-id="3" src="img/media/placeholder_800x600_4.jpg" width="800" height="600" alt="">
                                                                    <!-- judul attachment -->
                                                                    <p class="uk-article-meta uk-margin-remove">Gambar-ini-.svg</p>
                                                                    <p class="uk-article-meta uk-margin-remove">March 18, 2016</p>
                                                                    <p class="uk-article-meta uk-margin-remove">100kb</p>
                                                                    <p class="uk-article-meta uk-margin-remove">2000 x 1000</p>
                                                                    <div>
                                                                      <a class="uk-article-meta uk-button-link uk-button-primary" href="#" class="uk-button-link">Edit Image</a>
                                                                    </div>
                                                                    <div>
                                                                      <a class="uk-article-meta uk-button-link uk-button-danger" href="#">Delete Permanently</a>
                                                                    </div>
                                                                    <div class="uk-grid-divider"></div>
                                                                    <!-- judul attachment -->
                                                                    <form class="uk-form">
                                                                        <!--  -->
                                                                        <div class="uk-form-row">
                                                                            <label class="uk-form-label" for="form-h-it">Url</label>
                                                                            <div class="uk-form-controls">
                                                                                <input type="text" id="form-h-it" placeholder="Text input" disabled="">
                                                                            </div>
                                                                        </div>
                                                                        <!--  -->
                                                                        <!--  -->
                                                                        <div class="uk-form-row">
                                                                            <label class="uk-form-label" for="form-h-it">Title</label>
                                                                            <div class="uk-form-controls">
                                                                                <input type="text" id="form-h-it" placeholder="Text input">
                                                                            </div>
                                                                        </div>
                                                                        <!--  -->
                                                                        <!--  -->
                                                                        <div class="uk-form-row">
                                                                            <label class="uk-form-label" for="form-h-it">Caption</label>
                                                                            <div class="uk-form-controls">
                                                                                <textarea></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <!--  -->
                                                                  </div>
                                                                </div>
                                                                <!-- image detail right -->
                                                            </div>
                                                            

                                                        </li>
                                                        <!-- content media gallery -->
                                                      </ul>
                                                      <!-- upload media -->
                                                  </li>
                                              
                                                  <!-- Create Gallery -->

                                                
                                                  <!-- Insert from url -->
                                                  <li>
                                                    <h1 class="uk-article-lead">Insert from url</h1>
                                                    <form class="uk-form uk-form-horizontal">
                                                        <div class="uk-form-row">
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                              <input type="text" placeholder="http://" class=" uk-width-1-1 uk-form-large uk-form-success"></input>
                                                            </div>
                                                        </div>

                                                        <!--  -->
                                                        <div class="uk-form-row">
                                                            <label class="uk-form-label">Link Text</label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                              <input type="text" placeholder="" class=" uk-width-1-2"></input>
                                                            </div>
                                                        </div>
                                                    </form>
                                                  </li>
                                                  <!-- Insert from url -->
                                              </ul>
                                              <!-- These are the containers of the content items -->
                                            </div>

                                        </div>
                                        <!-- Media body -->
                                        <!-- footer -->
                                        <div class="uk-modal-footer uk-text-right">
                                            <p id="mm-selected"></p>
                                            <button type="submit" class="uk-button uk-button-primary">Insert into post</button>
                                        </div>
                                        <!-- footer -->
                                    </div>
                                </div>
                                <!-- modal Media -->
                              </div>
                              <!-- top-media -->

                             <!-- textarea -->
                             <textarea id="editor1" name="editor1" class="uk-width-1-1">&lt;p&gt;Isi Konten.&lt;/p&gt;</textarea>
                             <!-- textarea -->
                           </fieldset>
                         </form>
                     </div>
                     <!-- =======================================POST==================================== -->
                     <!-- ========================================POST DETAIL======================================= -->
                      <div class=" uk-width-3-10 uk-margin-top uk-margin-bottom">
                        <!-- sidebar right -->
                        <div class=" uk-width-1-1 uk-block-border uk-block-default">
                            <div class="uk-container">
                              <h1 class="uk-panel-title uk-margin-top">Publish</h1>
                          </div>
                        </div>
                        <!-- sidebar right -->
                        <div class=" uk-width-1-1 uk-block-border uk-block-default">
                            <div class="uk-container uk-margin-top uk-margin-bottom">
                              <a href="#" class="uk-button">Save Draft</a>
                              <a href="#" class="uk-button uk-navbar-flip">Preview</a>
                              <div class="uk-margin-top">
                                <i class="uk-icon-key uk-margin"></i>
                                Status: <b>Draft</b>
                                <a href="#" class="uk-button-link"> Edit</a>
                              </div>
                          </div>
                        </div>
                        <!-- sidebar right -->
                        <div class=" uk-width-1-1 uk-block-border uk-block-default">
                            <div class="uk-container uk-margin-top uk-margin-bottom">
                              <a href="#" class="uk-button uk-button-link uk-button-danger">Move to Trash</a>
                              <a href="#" class="uk-button uk-navbar-flip uk-button-primary">Publish</a>
                          </div>
                        </div>
                        <!-- sidebar right -->
                        <!-- sidebar right 2 -->
                        <!-- sidebar right -->
                        <div class=" uk-width-1-1 uk-block-border uk-block-default uk-margin-top">
                            <div class="uk-container">
                              <h1 class="uk-panel-title uk-margin-top">Category</h1>
                          </div>
                        </div>
                        <!-- sidebar right -->
                        <div class=" uk-width-1-1 uk-block-border uk-block-default">
                            <div class="uk-container uk-margin-top uk-margin-bottom">

                               <select onchange="selectIngredient(this);" class="uk-width-1-1">
                                <option value="Berita">Berita</option>
                                <option value="Baru">Baru</option>
                                <option value="Teknologi">Teknologi</option>
                               </select>

                               <div>
                                 <span class="uk-margin-top uk-icon-remove uk-margin-right uk-button-primary" onclick="this.parentNode.removeChild(this);">
                                   <input type="hidden" name="ingredients[]" value="test aktif" />test aktif
                                </span>
                              </div>

                              <div class="uk-margin-top">
                                <i class="uk-icon-plus uk-margin"></i>
                                <a href="#modal-category" data-uk-modal> Add New Category</a>
                                <div id="modal-category" class="uk-modal top-menu-position">
                                     <div class="uk-modal-dialog">
                                         <button type="button" class="uk-modal-close uk-close"></button>
                                         <div class="uk-modal-header">
                                             <h2>New Category</h2>
                                         </div>
                                            <input type="text" class="uk-width-1-1" autofocus=""></input>
                                         <div class="uk-modal-footer uk-text-right">
                                             <button type="button" class="uk-button uk-button-primary">Save</button>
                                         </div>
                                     </div>
                                 </div>

                              </div>

                          </div>
                        </div>
                        <!-- sidebar right -->

                        <!-- sidebar right -->
                        <div class=" uk-width-1-1 uk-block-border uk-block-default uk-margin-top">
                            <div class="uk-container">
                              <h1 class="uk-panel-title uk-margin-top">Tags</h1>
                          </div>
                        </div>
                        <!-- sidebar right -->
                        <div class=" uk-width-1-1 uk-block-border uk-block-default">
                            <div class="uk-container uk-margin-top uk-margin-bottom">

                               <select onchange="selectIngredient(this);" class="uk-width-1-1">
                                <option value="Berita">Berita</option>
                                <option value="Baru">Baru</option>
                                <option value="Teknologi">Teknologi</option>
                               </select>

                               <div>
                                 <span class="uk-margin-top uk-icon-remove uk-margin-right uk-button-primary" onclick="this.parentNode.removeChild(this);">
                                   <input type="hidden" name="ingredients[]" value="test aktif" />test aktif
                                </span>
                              </div>
                              <!-- modals -->
                              <div class="uk-margin-top">
                                <i class="uk-icon-plus uk-margin"></i>
                                <a href="#modal-tags" class="uk-button-link" data-uk-modal> Add New Tags</a>
                                <div id="modal-tags" class="uk-modal top-menu-position">
                                     <div class="uk-modal-dialog">
                                         <button type="button" class="uk-modal-close uk-close"></button>
                                         <div class="uk-modal-header">
                                             <h2>New Tags</h2>
                                         </div>
                                            <input type="text" class="uk-width-1-1" autofocus=""></input>
                                         <div class="uk-modal-footer uk-text-right">
                                             <button type="button" class="uk-button uk-button-primary">Save</button>
                                         </div>
                                     </div>
                                </div>
                              </div>
                              <!-- modals -->
                          </div>
                        </div>
                        <!-- sidebar right -->
                      </div>
                      <!-- =======================================POST==================================== -->
                  </div>
                  </div>
                  <!-- container -->
        </div>
      </div>
      <!-- Container -->
      <?php include'footer.php' ?>