
<html>
<head>
<script src="js/video.js"></script> 
<link type="text/css" rel="stylesheet" href="css/video.js.css"> <!-- Video Player -->
 </head>
 <body>
<!--         <video height="173" width="230" id="video-target_1" class="video-js vjs-default-skin"  controls>
					<source src="videos/ceo_video1.mp4" type='video/mp4'>
                </video>

        </div>

        <script>var homePlayer=_V_("video-target_1");</script> -->
 
<OBJECT ID="MediaPlayer" WIDTH="192" HEIGHT="190" CLASSID="CLSID:22D6F312-B0F6-11D0-94AB-0080C74C7E95"
STANDBY="Loading Windows Media Player components..." TYPE="application/x-oleobject">
<PARAM NAME="FileName" VALUE="videos/Low5MB.wmv">
<PARAM name="autostart" VALUE="false">
<PARAM name="ShowControls" VALUE="true">
<param name="ShowStatusBar" value="false">
<PARAM name="ShowDisplay" VALUE="false">
<EMBED TYPE="application/x-mplayer2" SRC="videos/Low5MB.wmv" NAME="MediaPlayer"
WIDTH="192" HEIGHT="190" ShowControls="1" ShowStatusBar="0" ShowDisplay="0" autostart="0"> </EMBED>
</OBJECT>
 
 
 </body>

<!--<script src="js/jquery.min.js"></script>
<script src="fckeditor/fckeditor.js"></script>
<script src="js/script.js"></script>
<a href="#" onclick="abc()"> Load Editor </a>
<a href="http://localhost/test/index.php?user=2&format=xml"> Load Editor </a> -->
<script>
 var date = new Date();
 var d = date.getDate();
 var m = date.getMonth();
 var y = date.getFullYear();
 
 var person = new Object();
 person.f_name = 'Jawad';
 person.l_name= 'Hassan';
 
 
 /*
 alert(person.f_name);
 alert(person.l_name);
 
 var date = {'Year':2013,'Month': 09, 'Day':02};
 alert(date.Year+'-' +date.Month+'-'+date.Day);
 */
</script>

<?php

echo 'kklkfkddf
fhjdjfjdjf
fjjjfjf'; exit;
echo date('H:i:s d-m-Y',strtotime('2014-11-11 7:23:00')); exit;

echo call_user_func_array('strtotime', array(date('01-01-2013'))); exit;
echo date('d-m-Y', strtotime('2013-09-12')); exit;
	if(ctype_alnum(888))
	{
		echo 'Hello'; 
	}
$primes = array();
$isPrime = true;
for($k=1;$k<=100;$k++)
{
   for($i=2;$i<=(int)$k/2;$i++)
  {  //echo $k%$i;
    if(($k%$i)==0) {$isPrime=false; break;  }
  }

	 if($isPrime==true && $k>1) 
	 { 
	   array_push($primes,$k);
	 }
	 $isPrime= true;
	// print_r($primes);
}
echo '<pre>';
print_r($primes); exit;
	   
	   echo $_SERVER['DOCUMENT_ROOT']; exit;
	 
	    printf('%02d', 9);  // Formatting a single digit into 2 digits.
		echo (date('Y-m-d', strtotime(date('Y-m-d').' + 7 days')));
			if($insert_status == true)
			{
				/* 15-08-2013 Rafaqat Hussain */
				/* We have to send  an Email after Successfull Companyh Registration */
				$to_user_data = $user->getTableData("userInfo","","userInfo_id= '".$_SESSION['user_id']."'","*","","");
				$to_email = $to_user_data[0]['email_address']; 
				$to_name = $to_user_data[0]['first_name'].' '.$to_user_data[0]['last_name']; 
				$subject = 'Company Acount Success';
				ob_start();
				 include_once('../email_templates/emp-welcome.php');
				$email_content =  ob_get_contents();
				ob_end_clean();
				sendEmail($email_content,$subject,$to_email,$to_name);
				echo 11; //success
			}
		

?>


<?php

	ob_start();
	 echo 'hello';
	$email_content =  ob_get_contents(); 
	
	echo $email_content;  

$str = '';
print_r(explode(',',$str));

$content = 'gdsgdshdghd jfjhjhf  hdjshfjskj bchdjdj dhjdj';
echo implode(' ',array_slice(explode(' ',$content),2)); exit;
$pos=@strpos($content, ' ', 200);
echo substr($content,0,$pos ); 

exit;

function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a>$b) ? -1 : 1;
}
$arr = array(2,5,1,3,6,0);
usort($arr, 'cmp');

include_once('fckeditor/fckeditor.php');
include_once('php-timer.php');


$timer = new timer(1);

/*
$oFCKeditor = new FCKeditor('FCKeditor_1') ;

$oFCKeditor->BasePath = 'fckeditor/' ;
$oFCKeditor->Value = '<p>This is some <strong>sample text</strong>. You are using <a href="http://www.fckeditor.net/">FCKeditor</a>.</p>' ;
$oFCKeditor->Width = 300 ;
$oFCKeditor->Height = 300 ;
$oFCKeditor->Create() ;
*/
$link = mysql_connect('localhost', 'root', '');
mysql_select_db('test');


$sql = 'UPDATE content WHERE ';

	$query = "SELECT * FROM content";
	
	$query_time = $timer->get();
	
	for ($i=0; $i<=10000; $i++ )
	{
			$result = mysql_query($query,$link) or die('Errant query:  '.$query);
	}
	echo $processing_time = $timer->get();
	exit;


/* require the user as the parameter */
if(isset($_GET['user']) && intval($_GET['user'])) {

	/* soak in the passed variable or set our own */
	$number_of_posts = isset($_GET['num']) ? intval($_GET['num']) : 10; //10 is the default
	$format = strtolower($_GET['format']) == 'json' ? 'json' : 'xml'; //xml is the default
	$user_id = intval($_GET['user']); //no default

	/* connect to the db */
	//$link = mysql_connect('localhost','username','password') or die('Cannot connect to the DB');
	//mysql_select_db('db_name',$link) or die('Cannot select the DB');

	/* grab the posts from the db */
	//$query = "SELECT post_title, guid FROM wp_posts WHERE post_author = $user_id AND post_status = 'publish' ORDER BY ID DESC LIMIT $number_of_posts";
	
	$query = "SELECT * FROM content WHERE user_id = $user_id";
	
	$query_time = $timer->get();
	
	$result = mysql_query($query,$link) or die('Errant query:  '.$query);

	/* create one master array of the records */
	$posts = array();
	if(mysql_num_rows($result)) {
		while($post = mysql_fetch_assoc($result)) {
			$posts[] = array('post'=>$post);
		}
	}

	/* output in necessary format */
	if($format == 'json') {
		//header('Content-type: application/json');
		echo json_encode(array('posts'=>$posts));
	}
	else {
		//header('Content-type: text/xml');
		
		/*echo '<posts>';
		foreach($posts as $index => $post) {
			if(is_array($post)) {
				foreach($post as $key => $value) {
					echo '<',$key,'>';
					if(is_array($value)) {
						foreach($value as $tag => $val) {
							echo '<',$tag,'>',htmlentities($val),'</',$tag,'>';
						}
					}
					echo '</',$key,'>';
				}
			}
		}
		echo '</posts>';*/
	}
	header('Content-type: application/xml');
	echo '<post>';
		echo '<title>';
			echo 'hello jjkvkmk';
		echo '</title>';
	echo '</post>';
	
	
echo $processing_time = $timer->get();
	/* disconnect from the db */
	@mysql_close($link);
}
?>