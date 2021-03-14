<style>
    .blue-divider{
        background: #EFF5F8;
        padding: 5px 0;
        margin-bottom: 10px;
    }
</style>

<nav>                                                
    <ul id="navigation">      
		<!-- Dashboard menu available only loggged in  -->
		<?php if(loggedin_tf()): ?>
        <li><a href="<?= base_url('halamanku'); ?>">Dashboard</a></li>
	    <?php endif ?>
        <li><a href="<?= base_url('artikels'); ?>">Artikels</a></li>
        <li><a href="<?= base_url('warung/list'); ?>">Warung</a></li>
        <li><a href="<?= base_url('barengan'); ?>">Barengan Yuuk</a></li>
        <li><a href="<?= base_url('taxi'); ?>">Taxi</a></li>
        <li><a href="<?= base_url('arabic'); ?>">Bahasa Arab</a></li>
        <!-- <li><a href="<?//base_url('zayed_water'); ?>">Order Zayed Water</a></li> -->
    </ul>
</nav>

<div class="blue-divider"></div>