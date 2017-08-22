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
            <div class="title-bar padR15">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            	<tr>
                	<td align="left">
            			<h1><a href="#">New Campaign</a> <span class="grey">> Campaign Details</span></h1>
            		</td>
                    <td align="right">
                    	<span id="cStep1" class="question circle circleSize2 white dInBlock bgGreen">1</span>
                        <span id="cStep2" class="question circle circleSize2 white dInBlock bgDarkGrey">2</span>
                        <span id="cStep3" class="question circle circleSize2 white dInBlock bgDarkGrey">3</span>
                        <span id="cStep4" class="question circle circleSize2 white dInBlock bgDarkGrey">4</span>
                    </td>
                </tr>
            </table>
            </div>
            <div id="campaign" class="pad1015">
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="w200" style="width:180px;" valign="top" align="left">
                <form action="#" method="post">
                        <select size="1" id="language">
                            <option value="">Language</option>
                            <option value="">Select Campaign</option>
                            <option value="">Lorem Ipsum</option>
                            <option value="">Dolor Sit Amet</option>
                        </select>
                </form>
            </td>
                <td>
            <p>Please select your main and supporting keywords for this topic.<br />
Type in a keyword, then click the search icon to the find relevant supporting keyword for your topic.</p>
                </td>
              </tr>
            </table>
            
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="w200" style="width:280px;" valign="top" align="left">
                    	<h3>Main Keywords</h3>
                        <ul class="tabs">
                                <li><a href="#tab_keyword1" class="bg_grey"><span class="number">1</span><input id="keyword1" class="round5" type="text" name="keyword1" style="width:180px;" /><span class="cari" no="1"></span></a></li>
                                <li><a href="#tab_keyword2" class="bg_grey"><span class="number">2</span><input id="keyword2" class="round5" type="text" name="keyword2" style="width:180px;" /><span class="cari" no="2"></span></a></li>
                                <li><a href="#tab_keyword3" class="bg_grey"><span class="number">3</span><input id="keyword3" class="round5" type="text" name="keyword3" style="width:180px;" /><span class="cari" no="3"></span></a></li>
                                <li><a href="#tab_keyword4" class="bg_grey"><span class="number">4</span><input id="keyword4" class="round5" type="text" name="keyword4" style="width:180px;" /><span class="cari" no="4"></span></a></li>
                                <li><a href="#tab_keyword5" class="bg_grey"><span class="number">5</span><input id="keyword5" class="round5" type="text" name="keyword5" style="width:180px;" /><span class="cari" no="5"></span></a></li>
                        </ul>
                    </td>
                    <td class="wfull"  align="left">
                        <table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td>
                    			<h3>Supporting Keywords</h3>
                                <div class="tab_container bg_grey" style="min-height:350px;">
                                    <div id="tab_keyword1" class="tab_content">
                                            <div id="kwLoader" style="display:none;text-align:center;position:relative;">
                                                <img src='images/loader.gif' style="position:absolute;top:100px;left:130px;" />
                                            </div>
                                            <p>
                                            <select multiple id="relword1" name="keywords"  class="keywords round5"  style="padding:5px; height:300px; width:230px; border:solid 1px #ccc;display:block;"></select>
                                            </p>
                                    </div>
                                    <div id="tab_keyword2" class="tab_content">
                                            <div id="kwLoader" style="display:none;text-align:center;position:relative;">
                                                <img src='images/loader.gif' style="position:absolute;top:100px;left:130px;" />
                                            </div>
                                            <p>
                                            <select multiple id="relword2" name="keywords"  class="keywords round5"  style="padding:5px; height:300px; width:230px; border:solid 1px #ccc;display:block;"></select>
                                            </p>
                                    </div>
                                    <div id="tab_keyword3" class="tab_content">
                                            <div id="kwLoader" style="display:none;text-align:center;position:relative;">
                                                <img src='images/loader.gif' style="position:absolute;top:100px;left:130px;" />
                                            </div>
                                            <p>
                                            <select multiple id="relword3" name="keywords"  class="keywords round5"  style="padding:5px; height:300px; width:230px; border:solid 1px #ccc;display:block;"></select>
                                            </p>
                                    </div>
                                    <div id="tab_keyword4" class="tab_content">
                                            <div id="kwLoader" style="display:none;text-align:center;position:relative;">
                                                <img src='images/loader.gif' style="position:absolute;top:100px;left:130px;" />
                                            </div>
                                            <p>
                                            <select multiple id="relword4" name="keywords"  class="keywords round5"  style="padding:5px; height:300px; width:230px; border:solid 1px #ccc;display:block;"></select>
                                            </p>
                                    </div>
                                    <div id="tab_keyword5" class="tab_content">
                                            <div id="kwLoader" style="display:none;text-align:center;position:relative;">
                                                <img src='images/loader.gif' style="position:absolute;top:100px;left:130px;" />
                                            </div>
                                            <p>
                                            <select multiple id="relword5" name="keywords"  class="keywords round5"  style="padding:5px; height:300px; width:230px; border:solid 1px #ccc;display:block;"></select>
                                            </p>
                                    </div>
                                </div>
                            </td>
                            <td style="padding:30px;">
                                <p class="errCampaignKeyword" style="display:none;color: red;margin-top: 10px;">{$errCampaignKeyword}</p>
                                    <a href="#" id="add"></a><br>
                                    <a href="#" id="remove"></a>
                                <p>
                            </td>
                            <td>
                    			<h3>Selected Keywords</h3>
                             <div class="tab_containers" style="min-height:350px;">
                                <div class="tab-content" style="padding:0 10px">
                                	<p>
                                    <select multiple id="comword" name="keywords"  class="keywords round5"  style="padding:5px; height:320px; width:230px; border:solid 1px #ccc;display:block;"></select>
                                    </p>
                                    <span class="available-keyword">13/45 Availabe</span>
                                    <p class="errCampaignKeyword" style="display:none;color: red;margin-top: 10px;">{$errCampaignKeyword}</p>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </table>
                        <tr>
                        	<td>
                            </td>
                            <td>
                                 <input onclick="javascript:selectRelated2();" type="button" value="PROCESS KEYWORDS" style="float:left; margin:0 0 0 400px;"/>
                                 
                                 <textarea name="keywords" style="display:none;"></textarea>
                                 
                            </td>
                        </tr>
                    </td>
                  </tr>
           </table>
           	</div>
        </div><!-- #container -->
    </div><!-- #main-container -->
    <div id="footer">
        <div class="copy">
            <p>SMAC &bull; SOCIAL MEDIA ACTION CENTER &copy; 2011</p> 
        </div><!-- .copy -->
    </div><!-- #footer -->
</div><!-- #body -->
</body>
</html>