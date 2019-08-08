
  <!-- ##### Breadcumb Area Start ##### -->
  <div class="breadcumb-area bg-img" style="background-image: url(<?=base_url();?>/assets/img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Noticias</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="academy-blog-posts">
                        <div class="row">

                            <!-- Single Blog Start -->
                            <div class="col-12">
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                <br>
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                    <?php foreach ($noticias as $a){?>
                                        <img src="<?=base_url();?>/assets/img/blog-img/1.jpg" alt="">
                                    </div>
                                    <!-- Post Title -->
                                    <a href="<?=base_url();?>index.php/Noticias/comen" class="post-title"><?php echo $a->Titulo;?></a>
                                    <br>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p>By <a href="#"><?php echo $a->Curp_usuario;?></a> | <a href="#"><?php echo $a->fechaN;?></a> | <a href="#">3 comments</a></p>
                                    </div>
                                    <!-- Post Excerpt -->
                                    <p><?php echo $a->contenido;?></p>
                                    <!-- Read More btn -->
                                    <a href="<?=base_url();?>index.php/Noticias/comen/<?php echo $a->id_Noticia;?>" class="btn academy-btn btn-sm mt-15">Read More</a>
                                    <br>
                                    <?php } ?>   
                                </div>
                            </div>

                            

                        </div>
                    </div>