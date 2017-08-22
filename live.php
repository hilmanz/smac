<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("meta.php"); ?>
</head>

<body>
<div id="body">
	<?php include("header.php"); ?>
	<div id="main-container">
    	<?php include("sidebar.php"); ?>
        <div id="container">
    		<?php include("top-info.php"); ?>
            <div class="title-bar">
            	<h1><a href="#">Live Track</a></h1> <span class="offline">OFFLINE</span><!-- <span class="online">ONLINE</span> -->
            </div>
            <div id="live-track">
            	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td valign="top" align="left" class="wfull">
                    	<div class="map">
                        	<img src="content/map.jpg" />
                        </div>
                        <div class="content">
                        	<img src="content/table3.jpg" />
                        </div>
                    </td>
                    <td valign="top" align="left" class="w300">
                    	<div class="box-info">
                        	<div class="box green-box">
                            	<h3>People Talking</h3>
                                <h1>21,000</h1>
                            </div>
                        	<div class="box orange-box">
                            	<h3>Total Mentions</h3>
                                <h1>37,000</h1>
                            </div>
                        	<div class="box green-box">
                            	<h3>Potential Reach</h3>
                                <h1>195M</h1>
                            </div>
                        </div>
                    	<?php include("favorite-word.php"); ?>
                    </td>
                  </tr>
                </table>
            </div><!-- #key-opinion -->
        </div><!-- #container -->
    </div><!-- #main-container -->
    <?php include("footer.php"); ?>
</div><!-- #body -->
</body>
</html>