<nav class="sidebar sidebar-offcanvas" id="sidebar">

	<ul class="nav" style="padding-top: 0px;">
		<li class="nav-item nav-category">
			<span class="nav-link" style="font-size: 20px; color: white;"><b>หมวดเบอร์โทร</b></span>
		</li>
		<li class="nav-item menu-items"><a class="nav-link" href="javascript: window.location = 'index.php'">
				<span class="menu-icon"> <img src="img/h.png" width="30px">
				</span> <span class="menu-title">
					<font color='white'> หน้าแรก</font>
				</span>
			</a>
		</li>
		<li class="nav-item menu-items"><a class="nav-link" href="javascript: window.location = 'https://shopee.co.th/jumbosim?v=faa&smtt=0.0.5&fbclid=IwAR26xNsZ_iRzXF0IoP00j-Nq3BAkD0ZEjJs1P538meReAi0z3S1l2fImPEI'">
				<span class="menu-icon"> <img src="img/shop.png" width="30px">
				</span> <span class="menu-title">
					<font color='white'> ร้านของเราใน Shopee </font>
				</span>
			</a>
		</li>
		<li class="nav-item menu-items"><a class="nav-link" href="?net=AIS">
				<span class="menu-icon"> <img src="img/a.png" width="30px">
				</span> <span class="menu-title">
					<font color='white'> เบอร์ Ais</font>
				</span>
			</a>
		</li>
		<li class="nav-item menu-items">
			<a class="nav-link" href="?net=True">
				<span class="menu-icon"> <img src="img/t.png" width="30px"></span>
				<span class="menu-title">
					<font color='white'>เบอร์ True</font>
				</span>
			</a>
		</li>
		<li class="nav-item menu-items">
			<a class="nav-link" href="?net=Dtac">
				<span class="menu-icon"> <img src="img/dt.png" width="30px"></span>
				<span class="menu-title">
					<font color='white'>เบอร์ Dtac</font>
				</span>
			</a>
		</li>
		<?php
		$sql = "SELECT * FROM catalogsims order by id asc";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
		?>
				<li class="nav-item menu-items">
					<a class="nav-link" href="?cat=<?= $row["random"] ?>">
						<span class="menu-icon">
							<i class="mdi mdi-file-document-box"></i>
						</span>
						<span class="menu-title">
							<font color='white'><?= $row["name"] ?></font>
						</span>
					</a>
				</li>
		<?php
			}
		}
		?>
		<li class="nav-item nav-category"><span class="nav-link" style="font-size: 20px; color: white;"><b>หมวดเบอร์ตามราคา</b></span>
		</li>
		<li class="nav-item menu-items"><a class="nav-link" href="?price=1-1000">
				<span class="menu-icon"> <i class="mdi mdi-speedometer"></i>
				</span> <span class="menu-title">
					<font color='white'>ต่ำกว่า 1,000
						บาท</font>
				</span>
			</a>
		</li>
		<li class="nav-item menu-items"><a class="nav-link" href="?price=1000-2999">
				<span class="menu-icon"> <i class="mdi mdi-speedometer"></i>
				</span> <span class="menu-title">
					<font color='white'>1,000-2,999 บาท</font>
				</span>
			</a>
		</li>
		<li class="nav-item menu-items"><a class="nav-link" href="?price=3000-4999">
				<span class="menu-icon"> <i class="mdi mdi-speedometer"></i>
				</span> <span class="menu-title">
					<font color='white'>3,000-4,999 บาท</font>
				</span>
			</a>
		</li>
		<li class="nav-item menu-items"><a class="nav-link" href="?price=5000-9999">
				<span class="menu-icon"> <i class="mdi mdi-speedometer"></i>
				</span> <span class="menu-title">
					<font color='white'>5,000-9,999 บาท</font>
				</span>
			</a>
		</li>
		<li class="nav-item menu-items"><a class="nav-link" href="?price=10000-20000">
				<span class="menu-icon"> <i class="mdi mdi-speedometer"></i>
				</span> <span class="menu-title">
					<font color='white'>10,000-20,000 บาท</font>
				</span>
			</a>
		</li>
		<li class="nav-item menu-items"><a class="nav-link" href="?price=20000-30000">
				<span class="menu-icon"> <i class="mdi mdi-speedometer"></i>
				</span> <span class="menu-title">
					<font color='white'>20,000-30,000 บาท</font>
				</span>
			</a>
		</li>
		<li class="nav-item menu-items"><a class="nav-link" href="?price=30000-100000000">
				<span class="menu-icon"> <i class="mdi mdi-speedometer"></i>
				</span> <span class="menu-title">
					<font color='white'>30,000 บาท ขึ้นไป</font>
				</span>
			</a>
		</li>

	</ul>
</nav>