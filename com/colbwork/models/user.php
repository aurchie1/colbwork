<?php
namespace com\colbwork\models;

class user extends ModelAbstract
{
	protected $id;
	protected $userId;
	protected $accessLevel;
	protected $salt;
	protected $hash;
	protected $authString;
	protected $firstName;
	protected $lastName;
	protected $address;
	protected $city;
	protected $state;
	protected $email;
	protected $workPhone;
	protected $cellPhone;
	protected $facebook;
	protected $twitter;
	
	
 	public function setauthString($salt, $hash)
 	{
 		
 		$this->authString = $salt . $hash;
		
 	}
		
	public function __toString()
	//prints non-secured data (i.e no password stuff)
	
	{
		echo "User Data for " . $this->firstName . " " . $this->lastName . " Signing in as :   " . $this->userId . " <br/>";
				echo '<table border="1">';
				
				echo '<tr>
					<td>Attribute</td>
					<td>Value</td>
				</tr>';
				
				echo '<tr>
					<td>ID</td>
					<td>' . $this->id . '</td>
				</tr>';
				
				echo '<tr>
						<td>User ID</td>
						<td>' . $this->userId . '</td>
					</tr>';
				
				echo '<tr>
						<td>Access Level</td>
						<td>' . $this->accessLevel . '</td>
					</tr>';
				
				echo '<tr>
						<td>First Name</td>
						<td>' . $this->firstName . '</td>
					</tr>';
								
				echo '<tr>
						<td>Last Name</td>
						<td>' . $this->lastName . '</td>
					</tr>';
				
				echo '<tr>
						<td>Address</td>
						<td>' . $this->address . '</td>
					</tr>';
				
				echo '<tr>
						<td>City</td>
						<td>' . $this->city . '</td>
					</tr>';
				
				echo '<tr>
						<td>State</td>
						<td>' . $this->state . '</td>
					</tr>';
				
				echo '<tr>
						<td>E-mail</td>
						<td>' . $this->email . '</td>
					</tr>';
				
				echo '<tr>
						<td>Work Phone</td>
						<td>' . $this->workPhone . '</td>
					</tr>';
				
				echo '<tr>
						<td>Cell Phone</td>
						<td>' . $this->cellPhone . '</td>
					</tr>';
				
				echo '<tr>
						<td>Facebook</td>
						<td>' . $this->facebook . '</td>
					</tr>';
				
				echo '<tr>
						<td>Twitter</td>
						<td>' . $this->twitter . '</td>
					</tr>';
				
				// remove te below code to secure the print out
				echo '<tr>
						<td>Salt</td>
						<td>' . $this->salt . '</td>
					</tr>';
				
				echo '<tr>
						<td>Hash</td>
						<td>' . $this->hash . '</td>
					</tr>';
				
				echo '<tr>
						<td>Auth String</td>
						<td>' . $this->authString . '</td>
					</tr>';
				//to here
				echo '</table>';
	return " ";
	}
	
	
}
?>