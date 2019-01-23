<!DOCTYPE HTML>
<html>
 @include('partials.head-admin')
<body>
<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
			
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="admin" class="active"><i class="lnr lnr-home"></i> <span>Pregled</span></a></li>
						<li><a href="admin-members" class=""><i class="lnr lnr-code"></i> <span>Članovi</span></a></li>
						<li><a href="admin-posts" class=""><i class="lnr lnr-chart-bars"></i> <span>Obavijesti</span></a></li>
						<li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Kontakt podaci</span></a></li>
						<li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Galerija</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
						<div class="modal fade" id="myModal">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
										</div>
										<div class="modal-body">
		
										</div>
										<div class="modal-footer">
											<button type="button" id="btnCloseModal" class="btn btn-default" data-dismiss="modal">Zatvori</button>
										</div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
                    @yield('content')
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
</div>


<!-- Javascript -->
<!--<script src="{{URL:: asset('public/admin')}}/js/jquery.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{URL:: asset('public/admin')}}/js/bootstrap.min.js"></script>
<script src="{{URL:: asset('public/admin')}}/js/jquery.slimscroll.min.js"></script>
<script src="{{URL:: asset('public/admin')}}/js/klorofil-common.js"></script>
@yield('scripts')
</body>
