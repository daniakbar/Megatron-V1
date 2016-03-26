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
                          <h2 class="uk-display-inline uk-margin-right">POST</h2>
                          <a href="add-post.php" class="uk-button uk-button-link uk-display-inline">Add New</a>
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
                                  <li><a href="#"><i class="uk-icon-edit uk-margin-right"></i>Edit</a></li>
                                  <li><a href="#"><i class="uk-icon-trash uk-margin-right"></i>nonaktif</a></li>
                                </ul>
                              </div>
                            </div>
                            <!-- dropdown -->
                            <!-- btn apply  -->
                            <a href="#" class="uk-button uk-button-primary">Apply</a>
                            <!-- btn apply -->
                            <!-- dropdown -->
                            <div class="uk-button-dropdown" data-uk-dropdown>
                              <a href="#" class="uk-button">Semua Tanggal<i class="uk-icon-caret-down uk-margin-left"></i></a>
                              <div class="uk-dropdown">
                                <ul class="uk-nav uk-nav-dropdown">
                                  <li><a href="#"><i class="uk-icon-folder uk-margin-right"></i>February 2016</a></li>
                                  <li><a href="#"><i class="uk-icon-folder uk-margin-right"></i>Desember 2015</a></li>
                                </ul>
                              </div>
                            </div>
                            <!-- dropdown -->
                            <!-- dropdown -->
                            <div class="uk-button-dropdown" data-uk-dropdown>
                              <a href="#" class="uk-button">Semua Kategori<i class="uk-icon-caret-down uk-margin-left"></i></a>
                              <div class="uk-dropdown">
                                <ul class="uk-nav uk-nav-dropdown">
                                  <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>Sepak Bola</a></li>
                                  <li><a href="#"><i class="uk-icon-bookmark uk-margin-right"></i>Olahraga</a></li>
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
                                            <th>Categories</th>
                                            <th>Tags</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                              <input type="checkbox"></input>
                                            </td>
                                            <td class="uk-width-3-10">
                                              <ul class="uk-subnav">
                                                <li data-uk-dropdown>
                                                    <a href="">Hello World kjashkjdfs jahksdjnfk kjakjsdkfj kjakjsdhfkjd kjaksdfk kjasdkjhfkjasd fkjahsdkjf kjahsdkjfa sdkjbkj</a>

                                                    <!-- This is the dropdown -->
                                                    <div class="uk-dropdown uk-dropdown-small">
                                                        <ul class="uk-breadcrumb">
                                                            <li class="uk-display-inline"><a href="">Edit</a></li>
                                                            <li class="uk-display-inline"><a href="">Quick Edit</a></li>
                                                            <li class="uk-display-inline"><a href="">Trash</a></li>
                                                            <li class="uk-display-inline"><a href="">View</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                              </ul>
                                            </td>
                                            <td class="uk-width-3-10">
                                              <a href="#">Google</a>
                                            </td>
                                            <td class="uk-width-1-10">Berita</td>
                                            <td class="uk-width-1-10">News</td>
                                            <td class="uk-width-1-10">Published<p>1 hour ago</p></td>

                                        </tr>
                                        <!--  -->
                                        <tr>
                                            <td>
                                              <input type="checkbox"></input>
                                            </td>
                                            <td class="uk-width-3-10">
                                              <ul class="uk-subnav">
                                                <li data-uk-dropdown>
                                                    <a href="">Hello World</a>

                                                    <!-- This is the dropdown -->
                                                    <div class="uk-dropdown uk-dropdown-small">
                                                        <ul class="uk-breadcrumb">
                                                            <li class="uk-display-inline"><a href="">Edit</a></li>
                                                            <li class="uk-display-inline"><a href="">Quick Edit</a></li>
                                                            <li class="uk-display-inline"><a href="">Trash</a></li>
                                                            <li class="uk-display-inline"><a href="">View</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                              </ul>
                                            </td>
                                            <td class="uk-width-3-10">
                                              <a href="#">Yahoo</a>
                                            </td>
                                            <td class="uk-width-1-10">Berita</td>
                                            <td class="uk-width-1-10">News</td>
                                            <td class="uk-width-1-10">Published<p>1 hour ago</p></td>

                                        </tr>
                                        <!--  -->
                                        <tr>
                                            <td>
                                              <input type="checkbox"></input>
                                            </td>
                                            <td class="uk-width-3-10">
                                              <ul class="uk-subnav">
                                                <li data-uk-dropdown>
                                                    <a href="">Hello World</a>

                                                    <!-- This is the dropdown -->
                                                    <div class="uk-dropdown uk-dropdown-small">
                                                        <ul class="uk-breadcrumb">
                                                            <li class="uk-display-inline"><a href="">Edit</a></li>
                                                            <li class="uk-display-inline"><a href="">Quick Edit</a></li>
                                                            <li class="uk-display-inline"><a href="">Trash</a></li>
                                                            <li class="uk-display-inline"><a href="">View</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                              </ul>
                                            </td>
                                            <td class="uk-width-3-10">
                                              <a href="#">Google</a>
                                            </td>
                                            <td class="uk-width-1-10">Berita</td>
                                            <td class="uk-width-1-10">News</td>
                                            <td class="uk-width-1-10">Published<p>1 hour ago</p></td>

                                        </tr>
                                        <!--  -->
                                        <tr>
                                            <td>
                                              <input type="checkbox"></input>
                                            </td>
                                            <td class="uk-width-3-10">
                                              <ul class="uk-subnav">
                                                <li data-uk-dropdown>
                                                    <a href="">Hello World</a>

                                                    <!-- This is the dropdown -->
                                                    <div class="uk-dropdown uk-dropdown-small">
                                                        <ul class="uk-breadcrumb">
                                                            <li class="uk-display-inline"><a href="">Edit</a></li>
                                                            <li class="uk-display-inline"><a href="">Quick Edit</a></li>
                                                            <li class="uk-display-inline"><a href="">Trash</a></li>
                                                            <li class="uk-display-inline"><a href="">View</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                              </ul>
                                            </td>
                                            <td class="uk-width-3-10">
                                              <a href="#">Facebook</a>
                                            </td>
                                            <td class="uk-width-1-10">Berita</td>
                                            <td class="uk-width-1-10">News</td>
                                            <td class="uk-width-1-10">Published<p>1 hour ago</p></td>

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