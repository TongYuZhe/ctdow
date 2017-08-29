<?php
    class page{
    	public function strstrs($str){
			$str = explode(',',$str); 
			foreach($str AS $strp){
				"\$".$strp." = strstr(\$current_url,'$strp')";
			}
		}
    }
?>