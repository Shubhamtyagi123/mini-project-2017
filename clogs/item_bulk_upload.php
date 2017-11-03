<?php

  $file = "demo_items.csv";
  $error_code = 0;

  $csv = array_map('str_getcsv', file($file));
  $col_size = sizeof($csv[0]);
  echo "col_num = ".$col_size.'<br>';
  $line_num = 1;
  $img_counter = 0;
  $num_counter = 0;
  $date_counter = 0;

  function is_date_valid($date) {
  		$dt = DateTime::createFromFormat("Y-m-d", $date);
		return $dt !== false && !array_sum($dt->getLastErrors());
  }
   
  array_walk($csv, function(&$a, &$error_code) use ($csv, $error_code) {

    	global $col_size, $date_counter;
    	global $line_num, $img_counter, $num_counter;

    	$is_dir = '^[a-zA-Z]:\\(((?![<>:"/\\|?*]).)+((?<![ .])\\)?)*$^';

    	if (sizeof($a) == $col_size){
	 		// if all the fields are present, check for individual fileds' correct-ness

      		$a = array_combine($csv[0], $a);

				// Name, !notEmpty
				// Main-Image, !notEmpty
				// Image-1,Image-2,Image-3, !optional
				// Starting-Price, !notEmpty
				// Max-Price, !defalut: 9999
				// Bid-Interval, !default: Rs 5
				// Auction-Start-Date, !notEmpty
				// Auction-Durration, !notEmppty (in days)
				// Description !notEmpty

      		if (!empty($a['Name']) && !empty($a['Main-Image']) && !empty($a['Starting-Price'])
      				&& !empty($a['Auction-Start-Date']) && !empty($a['Auction-Duration'])
      					&& !empty($a['Description'])){

      			// check if file exists 
      			if (!file_exists($a['Main-Image']))
      				$img_counter++;
      			
      			// default max-proce to 999
      			if (empty($a['Max-Price']))
      				$a['Max-Price']= 999;

      			// check if numeric input
      			if (!is_numeric($a['Starting-Price']) || !is_numeric($a['Max-Price']) 
      					|| !is_numeric($a['Bid-Interval']))
      				$num_counter++;
      			// check if date if valid.. :date(format):: YYYY-MM-DD
      			if (!is_date_valid($a['Auction-Start-Date']))
      				$date_counter++;
			}
			else {
      			echo "Error at line ".$line_num.". Seems like not all required fields and filled!<br>";
      			die();
			}

			if ($date_counter>1){
				echo "Error Found in Auction Start Date, at line ".$line_num;
				die();
			}

			if ($num_counter>1){
				echo "Error Found in filled fields, at line ".$line_num;
				die();
			}

			if ($img_counter>1){
				echo "Error Found in Image path, at line ".$line_num;
				die();
			}
    	}
      	else{
      		echo "Error at line ".$line_num."<br>";
      		die();
      	}

      	$line_num++;
      	
    });
    array_shift($csv); # remove column header


   
?>