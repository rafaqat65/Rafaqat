<?php 
//including soap library
require_once('nusoap/lib/nusoap.php');
//Instantiating Soap Server



function getStockQuote($category)
{  
	   $link = mysql_connect('localhost', 'root', '');
	   mysql_select_db('test',$link);
	   $query = 'SELECT * FROM stockprices WHERE stock_symbol="'.$category.'"'; 
	   $rs = mysql_query($query);
	   $row = mysql_fetch_assoc($rs);
		if(count($row))
		{
		  return $row['stock_price'];	
		}
	return false;
}

$server = new soap_server();
$server->configureWSDL('stockserver', 'urn:stockquote');


$server->register("getStockQuote",
array('symbol' => 'xsd:string'),
array('return' => 'xsd:decimal'),
'urn:stockquote',
'urn:stockquote#getStockQuote');

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA)? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);



 
	
	/*function getProd($category) {
	   
	   $link = mysql_connect('localhost', 'root', '');
	   mysql_select_db('test',$link);
	   $query = 'SELECT * FROM stockprices WHERE stock_symbol="'.$category.'"'; 
	   $rs = mysql_query($query);
	   $row = mysql_fetch_assoc($rs);
	   return $row['stock_price'];
	    if ($category == "books") {
	        return join(",", array(
            "The WordPress Anthology",
            "PHP Master: Write Cutting Edge Code",
            "Build Your Own Website the Right Way"));
    }
    else {
	            return "No products listed under that category";
	    }
	}
	
	$server = new soap_server();
	$server->register("getProd");
	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA)? $HTTP_RAW_POST_DATA : '';
	$server->service($HTTP_RAW_POST_DATA);
 */
?>