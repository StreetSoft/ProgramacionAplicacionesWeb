
       <body>
    <?php foreach ($noticias1 as $a){?>

        <h1><?php echo $a->Titulo;?></h1>
        <p ><?php echo $a->contenido;?></p>
        <?php } ?>



        <form action="guardar" method="post"  enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label  for="titulo">Comentario:</label>
                        <input type="text" class="form-control" name="ContenidoC" id="ContenidoC" >
                      </div>
                    </div>
                    <br>
                    <a href="#" class="btn academy-btn btn-sm mt-15">Enviar</a>
        <br>



        <a href="<?=base_url();?>index.php/welcome/noti" class="btn academy-btn btn-sm mt-15">Volver noticias</a>
        <br>
