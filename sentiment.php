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
            	<h1><a href="#">Sentiment</a></h1>
            </div>
            <div id="sentiment">
            	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="w200" valign="top" align="left">
                        <ul class="tabs">
                            <li><a href="#potential-impact" class="potential-impact">Potential Impact Score<br /><span class="f48">11M</span></a></li>
                            <li><a href="#graph-sentiment" class="graph-sentiment">Graph Sentiment Over Time</a></li>
                        </ul>
                    </td>
                    <td class="wfull" valign="top" align="left">
                    	<div class="tab_container">
                            <div id="potential-impact" class="tab_content">
                               <img src="content/table.jpg" style="border:solid 1px #ccc;" />
                            </div>
                            <div id="graph-sentiment" class="tab_content">
                               <img src="content/chart3.jpg" />
                               <img src="content/table2.jpg" style="border-top:solid 1px #ccc; margin:30px 0 0 0;" />
                            </div>
                        </div>
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