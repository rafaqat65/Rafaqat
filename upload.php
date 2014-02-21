<?php
// Check if a file has been uploaded
//echo '<pre>';print_r($_FILES);exit;
if(isset($_FILES['uploaded_file'])) {
    // Make sure the file was sent without errors
    if($_FILES['uploaded_file']['error'] == 0) {
        // Connect to the database
		$link = mysql_pconnect('localhost', 'root', '');
		if (!$link) {
		die('Could not connect: ' . mysql_error());
		}
		echo 'Connected successfully';
		 mysql_select_db('videoup', $link) or die('Could not select database.');
        $name = $_FILES['uploaded_file']['name'];
        $mime = $_FILES['uploaded_file']['type'];
        $data = file_get_contents($_FILES['uploaded_file']['tmp_name']);
        $size = intval($_FILES['uploaded_file']['size']);
 
        // Create the SQL query
       $query = "
            INSERT INTO `file` (
                `name`, `mime`, `size`, `data`, `created`
            )
            VALUES (
                '{$name}', '{$mime}', {$size}, '{$data}', NOW()
            )";
 
        // Execute the query
        $result = mysql_query($query) or die(mysql_error());
 
        // Check if it was successfull
        if($result) {
            echo 'Success! Your file was successfully added!';
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$dbLink->error}</pre>";
        }
    }
    else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['uploaded_file']['error']);
    }
 
    // Close the mysql connection
    
}
else {
    echo 'Error! A file was not sent!';
}
 
// Echo a link back to the main page
echo '<p>Click <a href="index.html">here</a> to go back</p>';
?>