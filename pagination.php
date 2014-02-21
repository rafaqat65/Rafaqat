<script src="js/jquery.min.js"></script>
<script  src="js/jquery.pajinate.js"></script>
<script  src="js/page.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#paging_container1').pajinate({
		items_per_page : 2
	});
});
</script>
<?php 
$link = mysql_connect('localhost', 'root', '');
mysql_select_db('test');
$query = "SELECT * FROM content";
$result = mysql_query($query,$link) or die('Errant query:  '.$query);
?>

<div id="paging_container1" class="container">
				<h2>Vanilla</h2>
				<div class="page_navigation"></div>
                 <ul class="content">
				<?php 
				while($row = mysql_fetch_assoc($result))
				{
				?>
					 <li><span><?php echo $row['title']; ?> </span>&nbsp;&nbsp;&nbsp;&nbsp; <span> <?php echo $row['content']; ?> </span> </li> 
                <?php 
				} //while($row = mysql_fetch_assoc($result)) ends here
				?>
              </ul>
 </div>
 
 
 <div id="content"></div>
	<input type="hidden" name="page_count" id="page_count" />
 
 		<script>
			$(document).ready(function(){
				$('li:odd, .content > *:odd').css('background-color','#FFD9BF');
			});
		</script>