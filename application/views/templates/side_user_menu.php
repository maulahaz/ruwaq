<style>
    a{
    color: blue;
  }
  a:hover{
    color: blue;
    text-decoration: underline;
  }
  .list-group-item.active{
    background-color: #fff;
    border-color: #007bff;
    font-weight:  bold;
  }
</style>

<div class="card mb-3" style="width: 18rem;">
  <div class="card-header">
    User Menu
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item mylink <?= isPageActive('dashboard','active') ?>"><a href="<?=base_url('halamanku/dashboard') ?>">Dashboard</a></li>
    <li class="list-group-item mylink <?= isPageActive('profile','active') ?>"><a href="<?=base_url('halamanku/profile') ?>">Profile</a></li>
    <li class="list-group-item mylink <?= isPageActive12('warung','active') ?>"><a href="<?=base_url('halamanku/warung') ?>">Warung</a></li>
    <li class="list-group-item mylink <?= isPageActive('inbox','active') ?>"><a href="<?=base_url('halamanku/inbox') ?>">Inbox</a></li>
    <li class="list-group-item mylink <?= isPageActive12('artikel','active') ?>"><a href="<?=base_url('halamanku/artikel') ?>">My Articles</a></li>
    <li class="list-group-item mylink <?= isPageActive12('order','active') ?>"><a href="<?=base_url('halamanku/order') ?>">My Orders</a></li>
    <li class="list-group-item mylink <?= isPageActive('kas','active') ?>"><a href="<?=base_url('halamanku/kas') ?>">Uang Kas</a></li>
  </ul>
</div>