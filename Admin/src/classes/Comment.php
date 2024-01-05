<?php
@session_start();

class Comment {

    public function getPending() 
    {
        require 'src/db/connect.php';    

        $sql = "SELECT * FROM comments WHERE comment_status = :_status ORDER BY id DESC";

        $select = $conn->prepare($sql);
        $select->bindValue(':_status','Pendente');

        $success = $select->execute();

            if ($success) {

                $data = $select->fetchAll();

                return $data;
            }
    }

    public function addComment($notice, $name, $email, $site, $comment, $status) 
    {
        
        require '../db/connect.php';

        $sql = "INSERT INTO comments 
        (id_notice, user_name, user_email, user_site, user_comment, comment_status) 
        VALUES 
        (:_notice, :_name, :_email, :_site, :_comment, :_status)";

        $add = $conn->prepare($sql);

        $add->bindValue(':_notice', $notice);
        $add->bindValue(':_name', $name);
        $add->bindValue(':_email', $email);
        $add->bindValue(':_site', $site);
        $add->bindValue(':_comment', $comment);
        $add->bindValue(':_status', $status);

            if ($add->execute()) {

                $_SESSION['notice_added'] = '
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                O comentário foi adicionado <strong>com sucesso!</strong>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>';
        
                header('location:'.SITE_URL.'detalhes.php?id='.$notice);
            }
    }
}