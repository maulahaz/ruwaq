<!-- Main Top Menu -->
<ul>                                          
   <!-- <li><a href="<?//base_url('artikel'); ?>">Artikel</a></li>
   <li><a href="<?//base_url('warung/list'); ?>">Warung kita</a></li>
   <li><a href="<?//base_url('barengan'); ?>">Barengan Yuuk</a></li> -->
   <li><a href="<?= base_url('aboutus'); ?>">Tentang kita</a></li>
   <li><a href="<?= base_url('contactus'); ?>">Kontak</a></li>
    <?php if(loggedin_tf()): ?>
     <li><a href="<?= base_url('login/logout'); ?>">Logout</a></li>      
    <?php else: ?>
     <li><a href="<?= base_url('login'); ?>">Login</a></li>      
    <?php endif; ?>

</ul>
<!-- Social -->
<div class="header-social">
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="<?= base_url('belanja/list'); ?>"><i class="fa fa-shopping-cart"></i>
    	<?php  
    		$belanja = $this->cart->contents();
    		echo count($belanja);
    	?>
    </a>
</div>