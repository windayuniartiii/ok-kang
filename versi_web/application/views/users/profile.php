
<br><br><br><br>
   <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-7">
      	<div class="card mb-3" style="max-width: 640px;">
		  <div class="row no-gutters">
		    <div class="col-md-4">
		      <img src="<?= base_url('assets/img/profile/') . $users['image']; ?>" class="card-img" alt="...">
		    </div>
		    <div class="col-md-8">
		      <div class="card-body">
		        <h5 class="card-title">My Profile</h5>
		        <p class="lead">Nama : 
		        <ul class="list-group">
  				<li class="list-group-item"><?= $users['nama']; ?></li></p>
  				<p class="lead">Email : 
		        <ul class="list-group">
  				<li class="list-group-item"><?= $users['email']; ?></li></p>
  				<p class="lead">Role User : 
		        <ul class="list-group">
  				<li class="list-group-item"><?= $user_role['role']; ?></li></p>

		      </div>
		    </div>
		  </div>
		</div>
	</div>
</div>
</div>