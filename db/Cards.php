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
	  	//
	  	public function insertCard($title, $description, $url, $image, $color, $facebook, $twitter, $instagaram, $youtube, $linkedin){

	  		$array_set = array(
                'title'      	=> $title,
                'description'  	=> $description,
                'url'  			=> $url,
                'image'  		=> $image,
                'color'  		=> $color,
                'facebook'  	=> $facebook,
                'twitter'  		=> $twitter,
                'instagaram' 	=> $instagaram,
                'youtube'  		=> $youtube,
                'linkedin'  	=> $linkedin
				
            );

            return parent::insert('portal_sites', $array_set);
	  	}

	  	public function deleteCard( $id )
        {
            return parent::delete( $this->cardTable(), 'id', $id) ;
        }

        public function updateCard( $id, $title, $description, $url, $image, $color, $facebook, $twitter, $instagaram, $youtube, $linkedin) {
        	$array_set = array(
                'title'      	=> $title,
                'description'  	=> $description,
                'url'  			=> $url,
                'image'  		=> $image,
                'color'  		=> $color,
                'facebook'  	=> $facebook,
                'twitter'  		=> $twitter,
                'instagaram' 	=> $instagaram,
                'youtube'  		=> $youtube,
                'linkedin'  	=> $linkedin
				
            );

			$where = array('id' => $id);
			return $this->update($this->cardTable(), $array_set, $where);
		  }
		
}