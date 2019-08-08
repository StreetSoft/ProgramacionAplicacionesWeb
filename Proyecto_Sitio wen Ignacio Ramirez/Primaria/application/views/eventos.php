
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
                        <h3>Ve los eventos de la escuela</h3>
                    </div>
                </div>
            </div>

            <table class="table">
            <?php foreach ($eventos as $a){?>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">fecha</th>
      <th scope="col">lugar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $a->idEvento;?></th>
      <td><?php echo $a->nombreE;?></td>
      <td><?php echo $a->fechaE;?></td>
      <td><?php echo $a->lugar;?></td>
    </tr>
  </tbody>
</table>
<?php } ?>
<a href="<?php echo base_url();?>index.php/Ficha/Eventos" class="btn academy-btn btn-sm mt-15">imprimir pdf</a>

	<!--<form action="<?php echo base_url();?>index.php/Ficha/Eventos" method="POST">
		<input type="text" name="txtEPDF"><br>
		<input type="submit" name="btnDownload">
	</form>-->



			</section>