<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

//for the query builder
//use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;
use application\models\Entities\Facilities;


class M_User extends MY_Model{

	/*constructor*/
	function __construct() {
		//parent::__construct();

	}
 var $em;
	public function getAll() {
		try {
		$query = $this -> em -> createQuery('SELECT user.name FROM models\Entities\Users user');
		$users =  $query -> getResult();
		} catch(exception $ex) {
			echo $ex->getMessage();
		}
		var_dump($users);
		//$sql = "SELECT * FROM users";
		#$query = $this -> db -> query($sql);
		#$results = $query -> result_array();
		#return $results;
	}

	public function login($username, $password){
		$query = $this->em -> createQuery("Username = '" . $username . "' or Email_Address='" . $username . "' or Phone_Number='" . $username . "'");
		$user = $query -> fetchOne();
		if ($user) {

			$user2 = new Users();
			$user2 -> Password = $password;

			if ($user -> Password == $user2 -> Password) {
				return $user;
			} else {
				$test["attempt"] = "attempt";
				$test["user"] = $user;
				return $test;

			}
		} else {
			return false;
		}


	}

	public function getAccessLevels() {

		$sql="SELECT id,access,level FROM Access_Level ";
		$query=$this->db->query($sql);
		$results=$query->result_array();
		return $results;
		#$accesslevels = $levelquery -> getArrayResult();
		#var_dump($accesslevels);
		
		
	}
// getting the facility code and name
	
	
	
	public function getFacilityData() {
			$users="";
		try{
			$query=$this->em->createQuery('SELECT f.name FROM models\Entities\Facilities f');
		$users = $query->getArrayResult();
		
		}
			catch(exception $ex){
				
			}
			return $users;
			
			
		#$sql="SELECT facilitycode, name FROM Facilities";
		
		
		#$accesslevels = $facilityquery -> getResult();
		//$rsm = new ResultSetMappingBuilder($entityManager);
       // $rsm->addRootEntityFromClassMetadata('webadt\models\Entities\Users', 'u');
		
		/**$rsm = new ResultSetMapping();
		$rsm = new ResultSetMappingBuilder($em);
		$rsm->addRootEntityFromClassMetadata('model\Entities\Users', 'u');
		
        $rsm->addEntityResult('Facilities', 'f');
        $rsm->addFieldResult('f', 'facilitycode', 'facilitycode');
        $rsm->addFieldResult('f', 'name', 'name');
        $sql= $this->_em->createNativeQuery('SELECT facilitycode, name FROM Facilities', $rsm);
		$query=$this->db->query($sql);
		return $results=$query->result_array();**/
		#$users = $query->getResult();	
		
		
		//$sql = "SELECT facilitycode, name FROM Facilities";

		//$rsm = new ResultSetMappingBuilder($em);
		//$rsm->addRootEntityFromClassMetadata('model\Entities\Users', 'u');
		//$rsm->addJoinedEntityFromClassMetadata('MyProject\Address', 'a', 'u', 'address', array('id' => 'address_id'));
	}
	//public function getAll() {
		//$sql=" SELECT u.Name,u.Username, a.Level_Name as Access, u.Email_Address, u.Name as Creator, u.Phone_Number, u.Active as Active FROM Users u ";
		//$query=$this->db->query($sql);
		//return $results=$query->result_array();
		
	//}
	public function getSpecific($user_id) {
		$sql= "SELECT u.Name,u.Username, a.Level_Name as Access, u.Email_Address, u.Phone_Number, b.Name as Creator,u.Active as Active FROM Users u LEFT JOIN u.Access a, u.Creator b WHERE u.id='$user_id'";
		$query=$this->db->query($sql);
		return $results=$query->result_array();
	}
	/**public function getThem() {
		#$sql=" SELECT u.Name,u.Username, a.Level_Name as Access, u.Email_Address, u.Phone_Number, b.Name as Creator,u.Active as Active FROM Users u LEFT JOIN u.Access a, u.Creator b WHERE a.Level_Name !='"Pharmacist"'";
		
	}**/
	

}
