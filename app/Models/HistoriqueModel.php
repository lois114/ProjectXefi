<?php

namespace App\Models;

use CodeIgniter\Model;
class HistoriqueModel extends Model {
    protected $table = 'Historique' ;
    protected $primaryKey = ''; 
    protected $useAutoIncrement = true ; 
    
    protected $returnType = 'array' ; 
    protected $useSoftDeletes = false ; 

    protected $allowedFields = ['HNom','HPrenom','HDate','HAdresse','HTel','HMail','HMotdepasse','HDescription','HSignature','DateHisto','HNote','HDescMach'];

    protected $useTimestamps = false ; 
   
    protected $skipValidation = true;


   
     
        public function Get_All_Histo()
        {
         $query = $this->db->query('select * from Historique order by HDate asc');
         $result = $query->getResult();
      
        return $result;
        }

        public function Delete_All_Histo(){
            $query = $this->db->query('delete from Historique');
           
         
           return $query;
        }
}
?>