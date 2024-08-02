<!-- <nav class="navbar navbar-dark bg-dark bg-gradient navbar-expand-lg navbar-expand-md my-3">
	<div class="container-fluid">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
			<ul class="nav navbar-nav menus">		
				<li class="nav-item"><a class="nav-link" href="index.php" id="index_menu">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="customer.php" id="customer_menu">Customer</a></li>
				<li class="nav-item"><a class="nav-link" href="category.php" id="category_menu">Category</a></li>
				<li class="nav-item"><a class="nav-link" href="brand.php" id="brand_menu">Brand</a></li>
				<li class="nav-item"><a class="nav-link" href="supplier.php" id="supplier_menu">Supplier</a></li>
				<li class="nav-item"><a class="nav-link" href="product.php" id="product_menu">Product</a></li>
				<li class="nav-item"><a class="nav-link" href="purchase.php" id="purchase_menu">Purchase</a></li>
				<li class="nav-item"><a class="nav-link" href="order.php" id="order_menu">Orders</a></li>			
			</ul>
		</div>
		<ul class="nav navbar-nav">
			<li class="position-relative">
				<a class="badge bg-light border px-3 text-dark rounded-pill" href="action.php?action=logout" style="text-decoration: none;">
					Logout
				</a>
			</li>
		</ul>


	</div>
</nav> -->
<!-- 
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta1/css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
        
        .sidebar-wrapper {
            height: 750px;
            position: fixed;
            top: 0;
            left: 0;
            width: 150px;
            background-color: black;
            margin-top: 45px;
        }
        .sidebar-link {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #ffffff;
            display: block;
        }
        .sidebar-link:hover {
            background-color: white;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
            flex-grow: 1;
        }
    </style>
</head>
<body>

<div class="sidebar-wrapper">
    <a class="sidebar-link" href="index.php" id="index_menu">Home</a>
    <a class="sidebar-link" href="customer.php" id="customer_menu">Customer</a>
    <a class="sidebar-link" href="category.php" id="category_menu">Category</a>
    <a class="sidebar-link" href="brand.php" id="brand_menu">Brand</a>
    <a class="sidebar-link" href="supplier.php" id="supplier_menu">Supplier</a>
    <a class="sidebar-link" href="product.php" id="product_menu">Product</a>
    <a class="sidebar-link" href="purchase.php" id="purchase_menu">Purchase</a>
    <a class="sidebar-link" href="order.php" id="order_menu">Orders</a>
    <a class="sidebar-link" href="action.php?action=logout" style="text-decoration: none;">Logout</a>
</div>

</body>
