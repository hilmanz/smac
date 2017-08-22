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
            	<h1><a href="#">Keyword Analysis</a></h1>
            </div>
            <div id="sentiment">
            	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="w200" valign="top" align="left">
                        <ul class="tabs">
                            <li><a href="#tab-mentions" class="tab-mentions">Mentions</a></li>
                            <li><a href="#tab-retweets" class="tab-retweets">Retweets</a></li>
                        </ul>
                    </td>
                    <td class="wfull" valign="top" align="left">
                    	<div class="tab_container">
                            <div id="tab-mentions" class="tab_content">
                               <img src="content/chart3.jpg" />
                            </div>
                            <div id="tab-retweets" class="tab_content">
                            </div>
                        </div>
                        <div class="content">
                        	<h1>Breakdown by your keyword</h1>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="zebra">
                                <tr>
                                    <th>Keyword</th>
                                    <th>Potential Impact Score</th>
                                    <th>Word Cloud</th>
                                </tr>
                              <tr>
                                <td>#soulantion</td>
                                <td>10,876</td>
                                <td>&lt;wordcloud&gt;</td>
                              </tr>
                              <tr>
                                <td>#soulantion</td>
                                <td>10,876</td>
                                <td>&lt;wordcloud&gt;</td>
                              </tr>
                              <tr>
                                <td>#soulantion</td>
                                <td>10,876</td>
                                <td>&lt;wordcloud&gt;</td>
                              </tr>
                              <tr>
                                <td>#soulantion</td>
                                <td>10,876</td>
                                <td>&lt;wordcloud&gt;</td>
                              </tr>
                            </table>
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