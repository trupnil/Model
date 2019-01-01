<?php 
include 'db.php';
class Model extends db
{ 
 		protected static $table = "";
 		function select()
 		{
 			$sql =  "select  * from ".  static::$table;

 			$ex = $this->db->query($sql);

            while ($res = mysqli_fetch_object($ex))
            {
                $r[] = $res;
            }
            return $r;
 		}

 		
 		public function save(array $data)
	{
		$key = implode("`,`",array_keys($data));
		$val = implode("','",array_values($data));
		$sql = "INSERT INTO ". static::$table ." (`$key`) VALUES ('$val')";
		$ex = $this->db->query($sql);
	}
}




?>