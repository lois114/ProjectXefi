<?php 
namespace App\Controllers;

  
use Dompdf\Dompdf;
use Dompdf\Options;


class SignupController extends BaseController
{
   
  
    public function store()
    {
       
            $userModel = model('PersonneModel');
            
  
            $data = [
                'Nom'     => $this->request->getVar('Nom'),
                'Prenom'     => $this->request->getVar('Prenom'),
                'Mail'     => $this->request->getVar('Mail'),
                'Adresse'     => $this->request->getVar('Adresse'),
                'Tel'     => $this->request->getVar('Tel'),
                'Motdepasse'     => $this->request->getVar('Motdepasse'),
                'Description'     => $this->request->getVar('Description'),
                'Signature' =>  $this->request->getVar('Signature'),
                'Date' => $this->request->getVar('Date'),
                'Note' => $this->request->getVar('Note'),
                'DescMach' => $this->request->getVar('DescMach')
              
            ];
            $data = esc($data);
            $userModel->save($data);    

          
        return redirect()->to(base_url('inscription') );
            
            
     
          
    }

    public function update_note($id){
        $PersonneModel = model('PersonneModel');
 
        $data = [
            'Note' => $this->request->getVar('Note'),
            ];
 
         $PersonneModel->update($id, $data);
        
 
        return redirect()->to(base_url('detail/'.$id) );
    }
    public function Affiche() {
        $PersonneModel = model('PersonneModel');
        $LesPersonnes = $PersonneModel->findAll();
       
    
        $data['LesPersonnes'] = $LesPersonnes;
    
        return view('template/header.php')
           
            . view('trello.php', $data)
            . view('template/footer.php');
    }
  
    public function update($id)
    {
        $PersonneModel = model('PersonneModel');
        $result = $PersonneModel->Modif_Indicateur($id);
      

        return redirect()->to(base_url('trello') );
    }

    public function update_moins_1($id)
    {
        $PersonneModel = model('PersonneModel');
        $result = $PersonneModel->Modif_Indicateur_moins_1($id);
        
      
        
        return redirect()->to(base_url('trello') );
    }

    public function historique(){

        $HistoModel = model('HistoriqueModel');

        $personneshisto = $HistoModel->Get_All_Histo();

        $data['personneshisto'] = $personneshisto;
      
        return view('template/header.php')
                    
        . view('historique.php', $data) 
        . view('template/footer.php');
    }

    public function detail($id)
            {
                $PersonneModel = model('PersonneModel');
            
                // Récupérer les informations de la personne spécifique
                $personne = $PersonneModel->find($id);
            
                // Vérifier si la personne existe
                if (!$personne) {
                    // Gérer le cas où la personne n'est pas trouvée, par exemple, rediriger vers une page d'erreur
                    return redirect()->to(base_url('erreur'));
                }
            
             
                // Charger la vue de profil avec les données
                $data['personne'] = $personne;
            
                return view('template/header.php')
                    
                    . view('detail.php', $data) // Utiliser une vue spécifique pour le profil
                    . view('template/footer.php');
            }

          
            public function delete($id)
            {
                $PersonneModel = model('PersonneModel');
                $PersonneModel->delete($id);
        
                return redirect()->to(base_url('trello') );
            }     

            public function delete_histo()
            {
           $HistoModel = model('HistoriqueModel');
           $HistoModel = $HistoModel->Delete_All_Histo();

           return redirect()->to(base_url('historique') );

            }


            public function generateFileToPDF ($id){
                $userModel = model('PersonneModel');
                $users = $userModel->find($id);

                
                $options = new Options();
                $options->set('isRemoteEnable',true);
                $options->set('chroot',realpath(''));

                $dompdf = new Dompdf($options);
               
                $imagePath = realpath('Signature/'.$users['Signature']);
             
                $Image = ' 
                <img src="data:image/png;base64,' .base64_encode(file_get_contents($imagePath)) . '">';
                
                $html = view('loadpdf',['users'=>$users]);
                $html .= $Image;
                $dompdf->loadHtml($html);

                $dompdf->render();
                $filename=$users['Nom'].'_'.date('d').'_'.date('m').'_'.date('y');
                $dompdf->stream($filename,['Attachment'=>false]);
                        }

    }
