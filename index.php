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
            	<h1><a href="index.php">Dashboard</a></h1>
            </div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="w1" align="left" valign="top">
                    <div class="list-box">
                        <div class="box">
                            <span>Potential Impact Index</span>
                           	 	<a href="#" class="helpsmall tip_trigger">&nbsp;<span class="tip">Help</span></a>
                            <h1>11M</h1>
                        </div>
                        <div class="box">
                            <span>Total Mention</span>
                           	 	<a href="#" class="helpsmall tip_trigger">&nbsp;<span class="tip">Help</span></a>
                            <h1>37K</h1>
                        </div>
                        <div class="box">
                            <span>Potential Impressions</span>
                           	 	<a href="#" class="helpsmall tip_trigger">&nbsp;<span class="tip">Help</span></a>
                            <h1>195M+</h1>
                        </div>
                    </div>
                    <div class="big-title">
                        <h1><span class="black">20,795</span>  People in conversation over 14 days</h1>
                    </div>
                    <?php include("favorite-word.php"); ?>
                    <?php include("key-opinion.php"); ?>
                </td><!-- .w1-->
                <td class="w2" align="left" valign="top">
                	<?php include("tab-network.php"); ?>
                </td><!-- .w2-->
              </tr>
            </table>
        </div><!-- #container -->
    </div><!-- #main-container -->
    <?php include("footer.php"); ?>
</div><!-- #body -->
</body>
</html>