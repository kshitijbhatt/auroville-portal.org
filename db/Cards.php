<?php
class Cards extends Connection {
		public function cardTable(){
			return 'portal_sites';
		}
		public function getAll(){
	  		$sql = "SELECT * FROM portal_sites";
			$result = parent::query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_array()){
					$data[] = $row;
				}
				return $data;
			} else {
			    echo "0 results";
			}
	  	}
	  	//$title, $description, $url, $image, $color, $facebook, $twitter, $instagram, $youtube, $linkedin
	  	public function insert(){
	  		$sql = "INSERT INTO portal_sites (title, description) VALUES ('John', 'Doe')";

	  		if (parent::query($sql) === TRUE) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql;
			}
	
	  	}
}