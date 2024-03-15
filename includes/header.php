
<?php if($_SESSION['id'])
{ ?><div class="brand clearfix">
		<a href="index.php" class="logo-box" style="width : 100%; height : 100%; padding : 1.5rem; display : inline;">
			<img src="img/main-logo.png" style="height : 4rem; object-fit : cover;" alt="">
		</a>
		<span class="menu-btn" style="margin-top: 1rem;"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="my-profile.php">My Account</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

<?php
} else { ?>
<div class="brand clearfix">
	<a href="index.php" class="logo-box" style="width : 100%; height : 100%; padding : .5rem; display : inline;">
		<img src="img/main-logo.png" style="height :4.35rem; object-fit : cover;" alt="">
	</a>
	<span class="menu-btn" ><i class="fa fa-bars"></i></span>
</div>
	<?php } ?>