
 <div class="breadcumb-area bg-img" style="background-image: url(<?=base_url();?>/assets/img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Ficha</h2>
        </div>
    </div>
	<section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>Descarga aqui tu ficha</h3>
                    </div>
                </div>
            </div>

            <form action="<?php echo base_url();?>index.php/Ficha/descargar" method="POST" >
  <div class="form-group">
    <label for="exampleInputEmail1">Curp</label>
    <input type="text" class="form-control" name="curp"  id="curp" aria-describedby="emailHelp" placeholder="introduce un curp" minlength="15" maxlength="20" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control"  name="correo" id="correo" placeholder="Introduce un email"  minlength="15" required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Grado</label>
    <input type="numeber" class="form-control" name="grado" id="grado" placeholder="Introce el grado" maxlength="1" required>
  </div>

  <input type="submit" name="btnDownload">
</form>
  
		<!--<form action="<?php echo base_url();?>index.php/Ficha/descargar" method="POST">
		<input type="text" name="curp"><br>
        <input type="email" name="correo"><br>
        <input type="text" name="grado"><br>

		<input type="submit" name="btnDownload">
	</form>-->

			</section>

	
