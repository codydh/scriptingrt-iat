<?php
    
    echo '<html>
	<head>
    <title>scriptingRT demo</title>
	</head>
    <body>
	
	<h1>Subject ID: ' . $_GET["subjectid"] . '</h1>
    
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
    id="HelloWorldFlash" width="100%" height="100%"
    codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab">
	<param name="movie" value="sexualityiat.swf" />
	<param name="quality" value="high" />
	<param name="bgcolor" value="#000" />
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="flashVars" value="subjectid=' . $_GET["subjectid"] . '">
    
	<embed src="sexualityiat.swf" quality="high" bgcolor="#000"
    width="100%" height="100%" name="flashdmdx" align="middle"
    play="true"
    loop="false"
    quality="high"
    allowScriptAccess="sameDomain"
    flashVars="subjectid=' . $_GET["subjectid"] . '"
    type="application/x-shockwave-flash"
    pluginspage="http://www.adobe.com/go/getflashplayer">
	</embed>
    
    </object>
    
    </body>
    </html>';
    
?>