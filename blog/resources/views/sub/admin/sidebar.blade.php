<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
	<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
	<div class="page-sidebar navbar-collapse collapse">
		<!-- BEGIN SIDEBAR MENU -->
		<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
		<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
		<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
		<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
			<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
			<li class="sidebar-toggler-wrapper">
				<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				<div class="sidebar-toggler">
				</div>
				<!-- END SIDEBAR TOGGLER BUTTON -->
			</li>
			<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
			<li class="sidebar-search-wrapper">
				<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
				<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
				<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
				<form class="sidebar-search " action="extra_search.html" method="POST">
					<a href="javascript:;" class="remove">
					<i class="icon-close"></i>
					</a>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
						<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
						</span>
					</div>
				</form>
				<!-- END RESPONSIVE QUICK SEARCH FORM -->
			</li>
			<li class="start active open">
				<a href="javascript:;">
				<i class="icon-home"></i>
				<span class="title">Dashboard</span>
				<span class="selected"></span>
				<span class="arrow open"></span>
				</a>
				<ul class="sub-menu">
					<li class="active">
						<a href="index.html">
						<i class="icon-bar-chart"></i>
						Default Dashboard</a>
					</li>
					<li>
						<a href="index_2.html">
						<i class="icon-bulb"></i>
						New Dashboard #1</a>
					</li>
					<li>
						<a href="index_3.html">
						<i class="icon-graph"></i>
						New Dashboard #2</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="javascript:;">
				<i class="icon-basket"></i>
				<span class="title">eCommerce</span>
				<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="ecommerce_index.html">
						<i class="icon-home"></i>
						Dashboard</a>
					</li>
					<li>
						<a href="ecommerce_orders.html">
						<i class="icon-basket"></i>
						Orders</a>
					</li>
					<li>
						<a href="ecommerce_orders_view.html">
						<i class="icon-tag"></i>
						Order View</a>
					</li>
					<li>
						<a href="ecommerce_products.html">
						<i class="icon-handbag"></i>
						Products</a>
					</li>
					<li>
						<a href="ecommerce_products_edit.html">
						<i class="icon-pencil"></i>
						Product Edit</a>
					</li>
				</ul>
			</li>
			
		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
</div>
<!-- END SIDEBAR -->