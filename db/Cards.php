<?php
class Cards extends Connection {

        private static $instance;
        public static function newInstance() {
            if(!self::$instance instanceof self) {
                self::$instance = new self;
            }
            return self::$instance;
        }

        //public function __construct() {}

		public function cardTable(){
			return 'portal_sites';
		}
		public function getAll(){
	  		$sql = "SELECT * FROM ".$this->cardTable();
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

        public function getCardByID($id){
            $sql = "SELECT * FROM ".$this->cardTable()." WHERE id =".$id;
            $result = parent::query($sql);
            $row = $result->fetch_array();
            return $row;
        }
	  	
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