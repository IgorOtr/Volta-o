<?php
@session_start();

class Comment {

    public function GetPending() 
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

    public function GetAllComments() 
    {
        require 'src/db/connect.php';    

        $sql = "SELECT * FROM comments WHERE comment_status != :_status ORDER BY id DESC";

        $select = $conn->prepare($sql);
        $select->bindValue(':_status','Pendente');

        $success = $select->execute();

            if ($success) {

                $data = $select->fetchAll();

                return $data;
            }
    }

    public function GetCommentsByNoticeId($id_notice)
    {
        
        require 'Admin/src/db/connect.php';

        $sql = "SELECT * FROM comments WHERE comment_status = :_status AND id_notice = :_id";

        $select = $conn->prepare($sql);
        $select->bindValue(':_status', "Aprovado");
        $select->bindValue(':_id', $id_notice);

        $success = $select->execute();

            if ($success) {

                $data = $select->fetchAll();

                return $data;
            }  
    }

    public function FormatCommentStatus($status)
    {
        switch ($status) {

            case 'Aprovado':

                return "<i data-bs-toggle='tooltip' data-bs-placement='top' data-bs-title='Aprovado' style='font-size: 24px; color: #14a44d !important;' class='bx bx-check-circle' ></i>";

                break;

            case 'Reprovado':

                return "<i data-bs-toggle='tooltip' data-bs-placement='top' data-bs-title='Reprovado' style='font-size: 24px; color: #dc4c64 !important;' class='bx bx-block' ></i>";

                break;
            
            default:
                # code...
                break;
        }
    }

    public function AddComment($notice, $name, $email, $site, $comment, $status) 
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

    public function UpdateCommentStatus($id, $status)
    {
        require '../db/connect.php';

        $sql = "UPDATE comments SET comment_status = :_newStatus WHERE id = :_id";

        $update = $conn->prepare($sql);
        $update->bindValue(':_newStatus', $status);
        $update->bindValue(':_id', $id);
        
            if ($update->execute()) {

                $_SESSION['notice_added'] = '
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                Este comentário foi <strong>'.$status.'</strong>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>';
        
                header('location:'.SITE_URL.'Admin/comments.php');
            }
    }
}