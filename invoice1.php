

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Editable Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body>

	<div id="page-wrap">

		<textarea id="header">INVOICE</textarea>
		
		<div id="identity">
		
            <textarea id="address">truba group of company

mobile no. : 7697889389,7582069445</textarea>

            <div id="logo">

              <div id="logoctr">
                <a href="javascript;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-.logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" ></br>
                
              </div>
              <img id="image" src="images/logo.png" alt="logo" />
              <img src='INVENTORY.jpeg' height='10%' width='10%'>

            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

         <textarea id="customer-title">YASH SAHU S/O RAJENDRA KUMAR SAHU</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea>000123</textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date">may 4</textarea>
                    </td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">$875.00</div></td>
                </tr>
            </table>
		</div>
<?php

$link = mysqli_connect("localhost", "root", "", "phpsamples");

 
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM products";


if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){


        echo "<table >";
            echo "<tr>";
                echo "<th>  product id  </th>";
                echo "<th>  product name  </th>";
                echo "<th>  product price  </th>";
                echo "<th>  product quantity  </th>";
                echo "<th>  Total Price  </th>";
            echo "</tr>";


        while($row = mysqli_fetch_array($result)){

		  echo "<tr class='item-row'>
		      
		      <td class='item-name'>
		      <textarea>
		      ".$row['id']."
		      </textarea></td>

		      <td class='description'><textarea>".

		      $row['pname'].



		      "</textarea></td>
		      <td><textarea class='cost'>".

		      $row['pprice']."
		      </textarea></td>
		      
		      <td><textarea class='qty'>
		      ".
		      $row['pqty']
		      ."



		      </textarea></td>
		      <td><span class='price'>".
		      ($row['pprice']*$row['pqty'])
		      ."
		      </span></td>
		  </tr>
		  ";
		}
	}
}
?>
		  
		 