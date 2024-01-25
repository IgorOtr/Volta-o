<?php
@session_start();

class Matches{

    //========== PRÓXIMAS PARTIDAS ==========//

    public function getTheNextMatch()
    {
        require 'Admin/src/db/connect.php';

        $sql = "SELECT * FROM next_matches ORDER BY id DESC LIMIT 1";

        $select = $conn->prepare($sql); 
        $success = $select->execute();

            if ($success) {
                $data = $select->fetchAll();
                return $data;
            }
    }

    public function addNextMatch($name, $img, $date, $time, $local, $boss, $created_at)
    {
        require '../db/connect.php';

        $sql = "INSERT INTO next_matches (adversary, adversary_img, match_date, match_time, match_local, match_boss, created_at) VALUES (:_name, :_img, :_date, :_time, :_local, :_match_boss, :_created_at)";

        $insert = $conn->prepare($sql);

        $insert->bindValue(':_name', $name);
        $insert->bindValue(':_img', $img);
        $insert->bindValue(':_date', $date);
        $insert->bindValue(':_time', $time);
        $insert->bindValue(':_local', $local);
        $insert->bindValue(':_match_boss', $boss);
        $insert->bindValue(':_created_at', $created_at);

        $success = $insert->execute();

        if ($success) {

            $_SESSION['notice_added'] = '
            <div class="row">
                <div class="col">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        O próximo jogo foi anunciado <strong>com sucesso!</strong>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>';

            header('location:'.SITE_URL.'Admin/matches.php?act=next');
        }
    }

    public function uploadImagetoFolder(array $img)
    {
        if (!empty($img)) {
    
            $arquivo_tmp = $img['tmp_name'];
    
            $extensao = pathinfo ($img['name'], PATHINFO_EXTENSION);

            $extensao = strtolower($extensao);
        
            if ( strstr ('.jpg;.jpeg;.png', $extensao)) {
    
                $newName = 'team_'.uniqid(time()) . '.' . $extensao;
    
                // Concatena a pasta com o nome
                $destino = '../../public/img/times/'.$newName;
        
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




    //========== PARTIDAS ANTERIORES ==========//

    public function getTheLastMatch()
    {
        require 'Admin/src/db/connect.php';

        $sql = "SELECT * FROM last_matches ORDER BY id DESC LIMIT 1";

        $select = $conn->prepare($sql); 
        $success = $select->execute();

            if ($success) {
                $data = $select->fetchAll();
                return $data;
            }
    }

    public function addlastMatch($name, $score_vr, $score_adversary, $img, $date, $time, $local, $created_at)
    {
        require '../db/connect.php';

        $sql = "INSERT INTO last_matches 
        (adversary, 
        score_vr, 
        score_adversary, 
        adversary_img, 
        match_date, 
        match_time, 
        match_local, 
        created_at) 
        VALUES 
        (:_name, 
        :score_vr, 
        :score_adversary, 
        :_img, 
        :_date, 
        :_time, 
        :_local, 
        :_created_at)";

        $insert = $conn->prepare($sql);

        $insert->bindValue(':_name', $name);
        $insert->bindValue(':score_vr', $score_vr);
        $insert->bindValue(':score_adversary', $score_adversary);
        $insert->bindValue(':_img', $img);
        $insert->bindValue(':_date', $date);
        $insert->bindValue(':_time', $time);
        $insert->bindValue(':_local', $local);
        $insert->bindValue(':_created_at', $created_at);

        $success = $insert->execute();

        if ($success) {

            $_SESSION['notice_added'] = '
            <div class="row">
                <div class="col">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        O placar do jogo anterior foi informado <strong>com sucesso!</strong>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>';

            header('location:'.SITE_URL.'Admin/matches.php?act=last');
        }
    }
}