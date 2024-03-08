<?php
include 'C:\xampp\htdocs\projet web\sem5\atelier 5\config.php';
class EmployeC
{
    public function showemploye($Employe) 
    {
        echo '<table border=1 width="100%">
            <tr align="center">
                <td>Last Name </td>
                <td>First Name </td>
                <td>Phone </td>
                <td>Email </td>
                <td>Date of birth </td>
            </tr>
            <tr>
                <td>'.$employe->getLastName().' </td>
                <td>'.$employe->getFirstName().' </td>
                <td>'.$employe->getPhone().' </td>
                <td>'.$employe->getEmail().' </td>
                <td>'.$employe->getdOB().' </td>
            </tr>
        </table>';
        /*echo "nom:".$Employe->getLastName="";
        echo "prenom:".$Employe->getFirstName="";
        echo "password:".$Employe->getPassword="";
        echo "phone:".$Employe->getPhone="";
        echo "email:".$Employe->getEmail="";
        echo "Date of birth:".$Employe->getDOB="";*/

    }
    public function listEmployes()
    {
        $sql = "SELECT * FROM employe";
        $db = config::getConnexion();
        try {
                $liste=$db->query($sql);
                return $liste;
            }
        catch (Exception $e)
        {
            die('Error:' . $e->getMessage());
        }
    }


    public function supprimer($id)
        {
            $sql ="DELETE FROM employe WHERE id = :id"; 
            $pdo =config::getConnexion ();
        
            $query =$pdo ->prepare($sql);
            $query ->bindValue (':id',$id);
        
            try{
                $query ->execute();
            }catch (PDOException $e)
            {
                $e ->getMessage();
            }
        }
        public function modifier($id,$employe)
        {
            $sql ="UPDATE employe SET  WHERE id =:id"; 
            $pdo =config::getConnexion ();
        
            $query =$pdo ->prepare($sql);
            $query ->bindValue (':id',$id);
        
            try{
                $query ->execute();
            }catch (PDOException $e)
            {
                $e ->getMessage();
            }
        
        }
        public function ajouter($employe)
        {
            $pdo =config::getConnxion ();
            try{
                $query =$pdo->prepare(
            
                    "INSERT INTO employe (first_name,last_name,password,phone,email,date)
                    VALUES (:first_name,:last_name,:password,:phone,:email,:date)"
            
                );    
            
                $query ->execute([
                    'first_name'=>$employe->getFirstName(),
                    'last_name'=>$employe->getLastName(),
                    'last_name'=>$employe->getPassword(),
                    'phone'=>$employe->getPhone(),
                    'email'=>$employe->getEmail(),
                    'date'=>$employe->getDOB(),
                ]);
            
            } catch (PDOException $e)
            {
             $e ->getMessage();
            }
             }
    
    
}






?>
