
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
                        <h3>Ve las calificaciones</h3>
                    </div>
                </div>
            </div>

            <table class="table">
            <?php foreach ($califiaciones as $a){?>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">califiacion</th>
      <th scope="col">profesor</th>
      <th scope="col">materias</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $a->id_Calificacion;?></th>
      <td><?php echo $a->calificacion;?></td>
      <td><?php echo $a->curp_Profesor;?></td>
      <td><?php echo $a->id_Materias;?></td>
    </tr>
  </tbody>
</table>
<?php } ?>

<a href="<?php echo base_url();?>index.php/Ficha/ Calificaciones" class="btn academy-btn btn-sm mt-15">imprimir pdf</a>
	<!--<form action="<?php echo base_url();?>index.php/Ficha/Calificaciones" method="POST">
		<input type="text" name="txtCPDF"><br>
		<input type="submit" name="btnDownload">
	</form>-->

    <a href="<?php echo base_url();?>index.php/cexcel/dExcel">Exportar Excel</a>

			</section>