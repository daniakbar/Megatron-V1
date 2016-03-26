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
                          <h2 class="uk-display-inline uk-margin-right">Add New Page</h2>
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
                             <a href="#" class="uk-button uk-margin-bottom"><i class="uk-icon-image uk-margin-small-right"></i>Add Media</a>
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
                              <h1 class="uk-panel-title uk-margin-top ">Publish</h1>
                          </div>
                        </div>
                        <!-- sidebar right -->
                        <div class=" uk-width-1-1 uk-block-border uk-block-default">
                            <div class="uk-container uk-margin-top uk-margin-bottom">
                              <a href="#" class="uk-button uk-button-success">Save Draft</a>
                              <a href="#" class="uk-button uk-button-danger uk-navbar-flip">Preview</a>
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
                              <h1 class="uk-panel-title uk-margin-top ">Category</h1>
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
                              <h1 class="uk-panel-title uk-margin-top ">Tags</h1>
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