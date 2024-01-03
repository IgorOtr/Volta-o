<?php
@session_start();

class Elenco {

    public function selectMembers()
    {
        require 'src/db/connect.php';

        $sql = "SELECT * FROM elenco ORDER BY player_type ASC";

        $select = $conn->prepare($sql);

        if ($select->execute()) {

            $data = $select->fetchAll();

            return $data;
        }
    }

    public function formatPosition($type)
    {
        switch ($type) {

            case '1':

                return 'Goleiro';
                break;

            case '2':
                
                return 'Zagueiro';
                break;

            case '3':
                
                return 'Lateral';
                break;

            case '4':

                return 'Meio-Campista';
                break;

            case '5':

                return 'Atacante';
                break;

            case '6':
                
                return 'Técnico';
                break;

            case '7':
                
                return 'Preparador Físico';
                break;

            case '8':
               
                return 'Auxiliar de Preparador Físico';
                break;

            case '9':
                
                return 'Preparador de Goeliro';
                break;

            case '10':
                
                return 'Analista/Scout';
                break;
            
            default:
                # code...
                break;
        }
    }

    public function uploadImagetoFolder(array $img)
    {
        if (!empty($img)) {
    
            $arquivo_tmp = $img['tmp_name'];
    
            $extensao = pathinfo ($img['name'], PATHINFO_EXTENSION);

            $extensao = strtolower($extensao);
        
            if ( strstr ('.jpg;.jpeg;.png', $extensao)) {
    
                $newName = 'elenco_'.uniqid(time()) . '.' . $extensao;
    
                // Concatena a pasta com o nome
                $destino = '../../public/img/elenco/'.$newName;
        
                $move_uploaded_file = move_uploaded_file ( $arquivo_tmp, $destino );

                if ($move_uploaded_file) {
    
                    return [true, $newName];

                } else {

                    echo 'Erro ao salvar o arquivo. Aparentemente, você não tem permissão de escrita.<br />';
                    return false;
                }

            } else {

                echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.png"<br />';
                return false;
            } 

        } else {

            echo 'Você não enviou nenhum arquivo!';
            return false;
        }
    } 

    public function addNewMember($name, $img, $position, $type)
    {
        require '../db/connect.php';

        $sql = "INSERT INTO elenco (player_name, player_image, player_position, player_type) VALUES (:_name, :_img, :_position, :_type)";

        $insert = $conn->prepare($sql);
        $insert->bindValue(':_name', $name);
        $insert->bindValue(':_img', $img);
        $insert->bindValue(':_position',$position);
        $insert->bindValue(':_type', $type);

        $success = $insert->execute();

            if ($success) {
                
                $_SESSION['notice_added'] = '
                <div class="row">
                    <div class="col">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Novo membro adicionado <strong>com sucesso!</strong>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>';

                header('location:'.SITE_URL.'Admin/elenco.php');
            }
    }   
}