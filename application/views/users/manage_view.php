<?php $this->load->view('template/header_view.php'); ?>

<section id="page-header" class="clearfix">    
<!-- responsive FlexSlider image slideshow -->
<div class="wrapper">
	<h1>Zarządzanie użytkownikami</h1>
    </div>

</section>


<!-- main content area -->   
<div class="wrapper" id="main"> 
    
<!-- content area -->    
	<section id="content" class="wide-content">
		<a href="<?php echo base_url(); ?>users/manage/edit/0">Nowy</a>
		<table>
			<tr><th>#</th><th>Login</th><th>Level</th><th>Akcje</th></tr>
			<?php $i = 1; ?>
			<?php foreach ($users as $user) { ?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td><b><?php echo $user['login']; ?><b></td>
					<td>
						<?php if($user['level']==1) { echo 'Magazynier'; } ?>
						<?php if($user['level']==2) { echo 'Administrator'; } ?>
					</td>
					<td>
						<a href="<?php echo base_url(); ?>users/manage/del/<?php echo $user['id']; ?>">Kasuj</a>
						<a href="<?php echo base_url(); ?>users/manage/edit/<?php echo $user['id']; ?>">Edytuj</a>
					</td>
				</tr>
			<?php } ?>			
		</table>
</section><!-- #end content area -->
         
</div><!-- #end div #main .wrapper -->

 <?php $this->load->view('template/footer_view.php'); ?>