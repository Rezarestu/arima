 <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
						        <?php
if($_SESSION['login_hash']=="Pemimpin")
	{
	?> 
                              <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Menu
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                     <ul>   
                                <li class="app-sidebar__heading">Forms</li>
                                <li>
                                    <a href="?cat=Pemimpin&page=forms-controls">
                                        <i class="metismenu-icon pe-7s-mouse">
                                        </i>Forms Project
                                    </a>
                                </li>
                                <li>
                                    <a href="?cat=Pemimpin&page=sales">
                                        <i class="metismenu-icon pe-7s-eyedropper">
                                        </i>Forms Input Sales
                                    </a>
                                </li>
                                <li>
                                    <a href="?cat=Pemimpin&page=table">
                                        <i class="metismenu-icon pe-7s-eyedropper">
                                        </i>Forms Hasil Inputan
                                    </a>
                                </li>
                                <li>
                                    <a href="?cat=Pemimpin&page=chgpwd">
                                        <i class="metismenu-icon pe-7s-eyedropper">
                                        </i>Forms User Info
                                    </a>
                                </li>
                            </ul>
							        <?php
}elseif($_SESSION['login_hash']=="Admin")
	{
	?> 
	                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Menu
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                     <ul>   
                                <li class="app-sidebar__heading">Forms</li>
                                <li>
                                    <a href="?cat=Admin&page=forms-controls">
                                        <i class="metismenu-icon pe-7s-mouse">
                                        </i>Forms Project
                                    </a>
                                </li>
                                <li>
                                    <a href="?cat=Admin&page=sales">
                                        <i class="metismenu-icon pe-7s-eyedropper">
                                        </i>Forms Input Sales
                                    </a>
                                </li>
                                <li>
                                    <a href="?cat=Admin&page=table">
                                        <i class="metismenu-icon pe-7s-eyedropper">
                                        </i>Forms Hasil Inputan
                                    </a>
                                </li>
                                <li>
                                    <a href="?cat=Admin&page=chgpwd">
                                        <i class="metismenu-icon pe-7s-eyedropper">
                                        </i>Forms User Info
                                    </a>
                                </li>
                            </ul>
	<?php
	}
	?>
                        </div>
                    </div>
                </div>    
