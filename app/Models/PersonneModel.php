<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonneModel extends Model {
    protected $table = 'FORMULAIRE' ;
    protected $primaryKey = 'id'; 
    protected $useAutoIncrement = true ; 
    
    protected $returnType = 'array' ; 
    protected $useSoftDeletes = false ; 

    protected $allowedFields = ['Nom','Prenom','Adresse','Tel','Mail','Motdepasse','Description','Date','Signature','Indicateur','Note','DescMach'];

    protected $useTimestamps = false ; 
   
    protected $skipValidation = true;



    public function Modif_Indicateur($id){

        $query = $this->db->query("Update Formulaire 
        set Indicateur = Indicateur + 1 
        where id = ?;", [$id]);
        
       
        }

        public function Modif_Indicateur_moins_1($id){

            $query = $this->db->query("Update Formulaire 
            set Indicateur = Indicateur - 1 
            where id = ?;", [$id]);
            
           
            }

public function Histo_all(){
    $query = $this->db->query("Select * from Historique");
    return $query->getResult();
}
            

//     public function Get_Personne($idPersonne){
//         $result = $this->db->query('SELECT * FROM Personne WHERE idPersonne = '.$idPersonne);
//         return $result->getResultArray();
//     }

//     // public function Get_All_Categorie($idPersonne){
//     //     $result = $this->db->query('SELECT * 
//     //     from Personne P 
//     //     left join Joueurs J on P.IdPersonne = J.IdPersonne
//     //     left join Entraineur E on E.IdPersonne = P.IdPersonne
//     //     left join Supporter S on S.IdPersonne = P.IdPersonne');

//     //     return $result->getResultArray();

//     // }

//     public function Get_Role_Personne($idPersonne){
//         $query = $this->db->query('SELECT 
//             P.IdPersonne,
//             J.IdJoueur,
//             E.IdEntraineur,
//             S.IdSupporter
//             FROM Personne P 
//             LEFT JOIN Joueurs J ON P.IdPersonne = J.IdPersonne
//             LEFT JOIN Entraineur E ON P.IdPersonne = E.IdPersonne
//             LEFT JOIN Supporter S ON P.IdPersonne = S.IdPersonne
//             WHERE P.IdPersonne = ?', [$idPersonne]);
    
//         $result = $query->getRow();
    
//         if (!empty($result)) {
//             if (!empty($result->IdJoueur)) {
            
//                 return 'Joueur';
//             } elseif (!empty($result->IdEntraineur)) {
               
//                 return 'Entraineur';
//             } elseif (!empty($result->IdSupporter)) {
               
//                 return 'Supporter';
//             }
//         }
    
       
//         return 'Non défini';
//     }
    
    
//    public function Evenemment_Par_IdPersonne($idP){

//    $query = $this->db->query("EXEC Evennements_Suivis_Par_PersonneId @IdP = ?", [$idP]);
   
//    $result = $query->getResult();

//    return $result;
   
//    }

//    public function Get_all_event()
//    {
//     $query = $this->db->query('select * from Evenemment');
//     $result = $query->getResult();
    
//    return $result;
//    }

}