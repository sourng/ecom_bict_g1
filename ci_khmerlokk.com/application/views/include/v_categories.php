 <div class="side-menu animate-dropdown outer-bottom-xs">
                        <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
                        <nav class="yamm megamenu-horizontal">
                            <ul class="nav">
                                 <?php foreach ($cats as $row) { ?>
                                   <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                       <?php echo $row['cat_icon'].$row['cat_name']; ?>
                                   </a>
                                    
                                    
                                </li>
                                <?php } ?>
                            </ul>
                            <!-- /.nav -->
                        </nav>
                        <!-- /.megamenu-horizontal -->
                    </div>