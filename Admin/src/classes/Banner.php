<?php
@session_start();

class Banner{

    public function getBanners()
    {
        require 'Admin/src/db/connect.php';

        $sql = "SELECT * FROM banners ORDER BY id DESC LIMIT 3";

        $select = $conn->prepare($sql);
        
        $success = $select->execute();

            if ($success) {

                $data = $select->fetchAll();

                return $data;
            }
    }

    public function uploadImagetoFolder(array $img)
    {
        if (!empty($img)) {
    
            $arquivo_tmp = $img['tmp_name'];
    
            $extensao = pathinfo ($img['name'], PATHINFO_EXTENSION);

            $extensao = strtolower($extensao);
        
            if ( strstr ('.jpg;.jpeg;.png', $extensao)) {
    
                $newName = 'banner_'.uniqid(time()) . '.' . $extensao;
    
                // Concatena a pasta com o nome
                $destino = '../../public/img/banners/'.$newName;
        
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

    public function addNewBanner($img, $link, $date)
    {
        require '../db/connect.php';

        $sql = "INSERT INTO banners (banner_image, banner_link, created_at) VALUES (:banner_image, :banner_link, :created_at)";

        $insert = $conn->prepare($sql);
        $insert->bindValue(':banner_image', $img);
        $insert->bindValue(':banner_link', $link);
        $insert->bindValue(':created_at', $date);

        $success = $insert->execute();

            if ($success) {
                
                if ($success) {

                    $_SESSION['notice_added'] = '
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                O banner foi adicionado <strong>com sucesso!</strong>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>';
        
                    header('location:'.SITE_URL.'Admin/banner.php');
                }
            }


    }
}