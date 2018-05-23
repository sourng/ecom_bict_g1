<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="<?php echo site_url('home') ?>">Home</a></li>
        <li><a href="<?php echo site_url('products') ?>">products</a></li>
        <?php 
             $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
             $url = end($url_array);
           
             if ($url=='health_beauty') {
                  echo "<li class='active'>health & beauty</li>";
               }else{
                  echo "<li class='active'>".$url."</li>";
               }
        ?>
      </ul>
    </div>
    <!-- /.breadcrumb-inner --> 
  </div>
  <!-- /.container --> 
</div>
<!-- /.breadcrumb -->