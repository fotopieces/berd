<nav class="sidebar sidebar-offcanvas" id="sidebar">

	<ul class="nav" style="padding-top: 0px;">
		<li class="nav-item nav-category">
			<span class="nav-link" style="font-size: 20px; color: white;"><b>หมวดเบอร์โทร</b></span>
		</li>
		<li class="nav-item menu-items"><a class="nav-link" href="index.php">
				<span class="menu-icon"> <img src="img/a.png" width="30px">
				</span> <span class="menu-title">เบอร์ Ais</span>
			</a>
		</li>
		<li class="nav-item menu-items">
			<a class="nav-link" href="pages/tables/basic-table.html">
				<span class="menu-icon"> <img src="img/t.png" width="30px"></span>
				<span class="menu-title">เบอร์ True</span>
			</a>
		</li>
		<li class="nav-item menu-items">
			<a class="nav-link" href="pages/tables/basic-table.html">
				<span class="menu-icon"> <img src="img/dt.png" width="30px"></span>
				<span class="menu-title">เบอร์ Dtac</span>
			</a>
		</li>
		<?php
		$sql = "SELECT * FROM group_number";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
		?>
				<li class="nav-item menu-items">
					<a class="nav-link" href="pages/tables/basic-table.html">
						<span class="menu-icon"> <img src="img/dt.png" width="30px"></span>
						<span class="menu-title">เบอร์ Dtac</span>
					</a>
				</li>
		<?php
			}
		}
		?>
		<li class="nav-item nav-category"><span class="nav-link" style="font-size: 20px; color: white;"><b>หมวดเบอร์ตามราคา</b></span>
		</li>
		<li class="nav-item menu-items"><a class="nav-link" href="indexs.html">
				<span class="menu-icon"> <i class="mdi mdi-speedometer"></i>
				</span> <span class="menu-title">ต่ำกว่า 1,000
					บาท</span>
			</a>
		</li>
		<li class="nav-item menu-items"><a class="nav-link" href="indexs.html">
				<span class="menu-icon"> <i class="mdi mdi-speedometer"></i>
				</span> <span class="menu-title">1,000-2,999 บาท</span>
			</a>
		</li>
		<li class="nav-item menu-items"><a class="nav-link" href="indexs.html">
				<span class="menu-icon"> <i class="mdi mdi-speedometer"></i>
				</span> <span class="menu-title">3,000-4,999 บาท</span>
			</a>
		</li>
		<li class="nav-item menu-items"><a class="nav-link" href="indexs.html">
				<span class="menu-icon"> <i class="mdi mdi-speedometer"></i>
				</span> <span class="menu-title">5,000-9,999 บาท</span>
			</a>
		</li>
		<li class="nav-item menu-items"><a class="nav-link" href="indexs.html">
				<span class="menu-icon"> <i class="mdi mdi-speedometer"></i>
				</span> <span class="menu-title">10,000-20,000 บาท</span>
			</a>
		</li>
		<li class="nav-item menu-items"><a class="nav-link" href="indexs.html">
				<span class="menu-icon"> <i class="mdi mdi-speedometer"></i>
				</span> <span class="menu-title">20,000-30,000 บาท</span>
			</a>
		</li>
		<li class="nav-item menu-items"><a class="nav-link" href="indexs.html">
				<span class="menu-icon"> <i class="mdi mdi-speedometer"></i>
				</span> <span class="menu-title">30,000 บาท ขึ้นไป</span>
			</a>
		</li>
		<li class="nav-item nav-category">
			<span class="nav-link" style="font-size: 20px; color: white;"><b>บทความ</b></span>
		</li>
		<li class="nav-item menu-items"><a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic"> <span class="menu-icon"> <i class="mdi mdi-laptop"></i>
				</span> <span class="menu-title">บทความ</span> <i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="ui-basic">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"><a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
					<li class="nav-item"><a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
					<li class="nav-item"><a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
				</ul>
			</div>
		</li>
		<li class="nav-item menu-items"><a class="nav-link" href="pages/forms/basic_elements.html"> <span class="menu-icon"> <i class="mdi mdi-playlist-play"></i>
				</span> <span class="menu-title">Form Elements</span>
			</a></li>
		<li class="nav-item menu-items"><a class="nav-link" href="pages/tables/basic-table.html"> <span class="menu-icon"> <i class="mdi mdi-table-large"></i>
				</span> <span class="menu-title">Tables</span>
			</a></li>
		<li class="nav-item menu-items"><a class="nav-link" href="pages/charts/chartjs.html"> <span class="menu-icon"> <i class="mdi mdi-chart-bar"></i>
				</span> <span class="menu-title">Charts</span>
			</a></li>
		<li class="nav-item menu-items"><a class="nav-link" href="pages/icons/mdi.html"> <span class="menu-icon"> <i class="mdi mdi-contacts"></i>
				</span> <span class="menu-title">Icons</span>
			</a></li>
		<li class="nav-item menu-items"><a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth"> <span class="menu-icon"> <i class="mdi mdi-security"></i>
				</span> <span class="menu-title">User Pages</span> <i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="auth">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"><a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
					<li class="nav-item"><a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
					<li class="nav-item"><a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
					<li class="nav-item"><a class="nav-link" href="pages/samples/login.html"> Login </a></li>
					<li class="nav-item"><a class="nav-link" href="pages/samples/register.html"> Register </a></li>
				</ul>
			</div>
		</li>
		<li class="nav-item menu-items"><a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
				<span class="menu-icon"> <i class="mdi mdi-file-document-box"></i>
				</span> <span class="menu-title">Documentation</span>
			</a></li>
	</ul>
</nav>