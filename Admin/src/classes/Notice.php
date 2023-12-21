<?php
@session_start();

class Notice{

    public function getNoticeFromID(string $id) 
    {
        require 'src/db/connect.php';  
        
        $sql = "SELECT * FROM notices WHERE id = :id";

        $select = $conn->prepare($sql);
        $select->bindValue(':id', $id);

        $success = $select->execute();

            if ($success) {

                $data = $select->fetchAll();
                return $data;
            }
    }

    public function getDestaques()
    {
        require 'Admin/src/db/connect.php';

        $sql = "SELECT * FROM notices WHERE notice_category = :destaque";
        
        $select = $conn->prepare($sql);
        $select->bindValue(':destaque', 'Destaque');

        $success = $select->execute();

            if ($success) {

                $data = $select->fetchAll();
                return $data;
            }
    }

    public function getNoticesToFront()
    {
        require 'Admin/src/db/connect.php';

        $sql = "SELECT * FROM notices WHERE notice_status = :ativo";
        
        $select = $conn->prepare($sql);
        $select->bindValue(':ativo', 'Ativo');

        $success = $select->execute();

            if ($success) {

                $data = $select->fetchAll();
                return $data;
            }
    }

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

    public function changeStatus(string $id, string $statusSet)
    {
        require '../db/connect.php';

        $sql = "UPDATE notices SET notice_status = :notice_status WHERE id = :id";

        $update = $conn->prepare($sql);
        $update->bindValue(':notice_status', $statusSet);
        $update->bindValue(':id', $id);

        $success = $update->execute();

            if ($success) {

                $_SESSION['action_success'] = '
                <div class="row">
                    <div class="col">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Operação realizada <strong>com sucesso!</strong>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>';

                header('Location:'.SITE_URL.'Admin/noticias.php');
            }
    }

    public function deleteNotice(string $id)
    {
        require '../db/connect.php';

        $sql = "DELETE FROM notices WHERE id = :id";

        $delete = $conn->prepare($sql);
        $delete->bindValue(':id', $id);
        
        $success = $delete->execute();

            if ($success) {

                $_SESSION['action_success'] = '
                <div class="row">
                    <div class="col">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Notícia removida <strong>com sucesso!</strong>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>';

                header('Location:'.SITE_URL.'Admin/noticias.php');
            }

    }

    public function alterNotice($id, $title, $content, $category, $updated_at)
    {   
        require '../db/connect.php';

                $sql = "UPDATE notices SET notice_title = :title, notice_content = :content, notice_category = :category, updated_at = :updated_at WHERE id = :id";

                $update = $conn->prepare($sql);
                $update->bindValue(':title', $title);
                $update->bindValue(':content', $content);
                $update->bindValue(':category', $category);
                $update->bindValue(':updated_at', $updated_at);
                $update->bindValue(':id', $id);

                $success = $update->execute();

                    if ($success) {

                        $_SESSION['action_success'] = '
                        <div class="row">
                            <div class="col">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Notícia alterada <strong>com sucesso!</strong>.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>';

                        header('Location:'.SITE_URL.'Admin/noticias.php');
                    } 
    }   

    public function alterNoticeWithImage($id, $title, $content, $image, $category, $updated_at)
    {   
        require '../db/connect.php';

                $sql = "UPDATE notices SET 
                notice_title = :title, 
                notice_content = :content, 
                notice_image = :image_, 
                notice_category = :category, 
                updated_at = :updated_at 
                WHERE id = :id";

                $update = $conn->prepare($sql);
                $update->bindValue(':title', $title);
                $update->bindValue(':content', $content);
                $update->bindValue(':image_', $image);
                $update->bindValue(':category', $category);
                $update->bindValue(':updated_at', $updated_at);
                $update->bindValue(':id', $id);
                
                $success = $update->execute();

                    if ($success) {

                        $_SESSION['action_success'] = '
                        <div class="row">
                            <div class="col">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Notícia alterada <strong>com sucesso!</strong>.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>';

                        header('Location:'.SITE_URL.'Admin/noticias.php');
                    }
    }   

}