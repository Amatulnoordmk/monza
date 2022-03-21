<!-- Sidebar -->
<div class="main-sidebar">
	<aside id="sidebar-wrapper">
		<div class="sidebar-brand">
			<a href="#">Monza<br></a>
		</div>
		<div class="sidebar-brand sidebar-brand-sm">
			<a href="#">M</a>
		</div>
		<ul class="sidebar-menu">
			<li class="menu-header">Dashboard</li>
			<li class="<?php if(current_url() == base_url('admin/dashboard')){?>active<?php } ?>"><a class="nav-link"
					href="<?=base_url();?>admin/dashboard"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
			</li>
			<li class="<?php if(current_url() == base_url('admin/data')){?>active<?php } ?>"><a class="nav-link"
					href="<?=base_url();?>admin/data"><i class="fas fa-users"></i> <span>Data User</span></a></li>
			<li
				class="<?php if(current_url() == base_url('admin/loker')){?>active<?php } elseif(current_url() == base_url('admin/bidang-pekerjaan')){?>active<?php }?>">
				<a class="nav-link has-dropdown" data-toggle="dropdown" href="#">
					<i class="fas fa-briefcase"></i> <span>Barang</span>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a class="nav-link <?php if(current_url() == base_url('admin/gratis')){?>active<?php } ?>"
							href="<?=base_url();?>admin/gratis">Barang Gratis</a>
					</li>
					<li>
						<a class="nav-link <?php if(current_url() == base_url('admin/murah')){?>active<?php } ?>"
							href="<?=base_url();?>admin/murah">Barang murah</a>
					</li>
				</ul>
			</li>
			<li
				class="<?php if(current_url() == base_url('admin/event') || current_url() == base_url('admin/surveiDetail/(:any)') ){?>active<?php } ?>">
				<a class="nav-link" href="<?=base_url();?>admin/event"><i class="fas fa-tasks"></i>
					<span>Event Donasi</span></a>
			</li>
			<li class="<?php if(current_url() == base_url('admin/slider')){?>active<?php } ?>"><a class="nav-link"
					href="<?=base_url();?>admin/slider"><i class="fas fa-image"></i> <span>Slider</span></a>
			</li>
			<li class="<?php if(current_url() == base_url('pesan')){?>active<?php } ?>"><a class="nav-link"
					href="<?=base_url();?>pesan"><i class="fas fa-envelope"></i> <span>Pesan</span></a>
			</li>
		</ul>

	</aside>
</div>
