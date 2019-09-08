<?php
session_start();
if(!isset($_SESSION['login_hash']))
{
	echo "<script>window.location='index.php'</script>";
}
include("_db.php");
include 'headers.php';
include 'menu.php';
?>

  <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
								<?php
				$v_cat = (isset($_REQUEST['cat'])&& $_REQUEST['cat'] !=NULL)?$_REQUEST['cat']:'';
				$v_page = (isset($_REQUEST['page'])&& $_REQUEST['page'] !=NULL)?$_REQUEST['page']:'';
				if(file_exists("pages/".$v_cat."/".$v_page.".php"))
				{
					include("pages/".$v_cat."/".$v_page.".php");
				}else{
					include("pages/web/homepage.php");
				}
				
				
				?>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php
include 'footers.php';
?>