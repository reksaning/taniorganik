


<nav class="navbar navbar-default navbar-static-top z-depth-1" role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand teal-text" href="modul.php?isi=admin-home">Admin SAT</a>
		</div>
		<!-- /.navbar-header -->

		<ul class="nav navbar-top-links navbar-right">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu dropdown-user">
                    <li><a>Halo, bro</a></li>
                    <li class="divider"></li>
					<li><a href="#"><i class="fa fa-gear fa-fw"></i> Akun</a>
					</li>
					<li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
					</li>
				</ul>
				<!-- /.dropdown-user -->
			</li>
			<!-- /.dropdown -->
		</ul>
		<!-- /.navbar-top-links -->

		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<ul class="nav" id="side-menu">
					<li class="sidebar-search">
						<div class="input-group custom-search-form">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default z-depth-0" type="button">
									<i class="fa fa-search"></i>
								</button>
							</span>
						</div>
						<!-- /input-group -->
					</li>
					<li>
                        <a href="modul.php?isi=admin-home"><i class="fa fa-home fa-fw"></i> Home</a>
                    </li> 
                    <li>
						<a href="modul.php?isi=ukm-tabel"><i class="fa fa-usd fa-fw"></i> Divisi/Budget</a>
					</li>                       
					<li>
						<a href="modul.php?isi=user-tabel"><i class="fa fa-user fa-fw"></i> User</a>
					</li> 
					<li>
						<a href="modul.php?isi=laporan-tabel"><i class="fa fa-shopping-cart fa-fw"></i> Laporan</a>
					</li>
                    <li>
                        <a href="modul.php?isi=kegiatan-tabel"><i class="fa fa-camera fa-fw"></i> Kegiatan</a>
                    </li>
                    <li>
                        <a href="modul.php?isi=pengurus"><i class="fa fa-group fa-fw"></i> Kepengurusan</a>
                    </li>
                    <div class="sidebar-search">
                        <form action="toggle.php" method="POST">
                            <div class="input-group">
                                <input id="mobToggle" name="toggle" type="checkbox" checked data-toggle="toggle" data-size="small" data-on="Mobile View On" data-off="Mobile View Off" data-width="150">
                            </div>
                        </form>
                        <div id="cek"></div>
                    </div>                        
				</ul>
			</div>
			<!-- /.sidebar-collapse -->
		</div>
		<!-- /.navbar-static-side -->
	</nav>