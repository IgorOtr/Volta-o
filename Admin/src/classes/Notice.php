<?php
@session_start();

class Notice{

    public function getAllNotices()
    {
        require 'src/db/connect.php';

        $sql = "SELECT * FROM notices";
        $select = $conn->prepare($sql);
        
            if ($select->execute()) {

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
    
                $newName = 'notice_'.uniqid(time()) . '.' . $extensao;
    
                // Concatena a pasta com o nome
                $destino = '../../public/img/notices/'.$newName;
        
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


    public function insertNotice($title, $content, $img, $category, $status, $created_at, $updated_at)
    {
        require '../db/connect.php';

        $sql = "INSERT INTO notices 
        (notice_title, 
        notice_content,
        notice_image, 
        notice_category,
        notice_status,
        created_at,
        updated_at)
        VALUES
        (:_title,
        :_content,
        :_image,
        :_category,
        :_status,
        :created_at,
        :updated_at)";

        $insert = $conn->prepare($sql);
        $insert->bindValue(':_title', $title);
        $insert->bindValue(':_content', $content);
        $insert->bindValue(':_image', $img);
        $insert->bindValue(':_category', $category);
        $insert->bindValue(':_status', $status);
        $insert->bindValue(':created_at', $created_at);
        $insert->bindValue(':updated_at', $updated_at);

            $success = $insert->execute();

            if ($success) {

                $_SESSION['notice_added'] = '
                <div class="row">
                    <div class="col">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            A notícia foi publicada <strong>com sucesso!</strong>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>';

                header('location:'.SITE_URL.'Admin/add-notice.php');
            }
    }

}