
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
<title>Polaroid Photo Viewer with jQuery and CSS3</title>
<link rel="stylesheet" type="text/css" href="0032_style.css"/>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="0032_script.js"></script>
</head>
<body>


<?php


						$dir = "./portfolio/tworld";

						// 알고 있는 디렉토리를 열어서, 내용을 읽어들이는 작업입니다.
						if (is_dir($dir)) {
							if ($dh = opendir($dir)) {
								while (($file = readdir($dh)) !== false) 
    							{
//									echo "filename: $file : filetype: " . filetype($dir . $file) . "\n";
                                   

  						if(strlen($file) > 4)
						{
?>
                      
						<li>
								 
							 
							     <div class="polaroid">
								<img src="./portfolio/tworld/<? echo $file ?>"  />
								<p><? echo str_replace(".jpg","",$file) ?></p>
								</div>
							</li>
<?	                      }

									}
							}
						}
?>



 
</body>
</html>