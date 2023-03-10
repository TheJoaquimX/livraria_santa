<?php
    require('connection.php');
    function read(){
        $conn = getConnection();

        $sql = 'SELECT * FROM livro';
    
        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }

    function create(){
        $conn = getConnection();

        $sql = 'INSERT INTO livro (nome, preco, paginas, autor, quantidade) VALUES (?, ?, ?, ?, ?)';

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(1, $_POST['Nome']);
        $stmt->bindParam(2, $_POST['Preco']);
        $stmt->bindParam(3, $_POST['Paginas']);
        $stmt->bindParam(4, $_POST['Autor']);
        $stmt->bindParam(5, $_POST['Quantidade']);

        if($stmt->execute()){
            return('Salvo com sucesso!');
        }else{
            return('Erro ao salvar');
        }
    }

    function update($id){
        $conn = getConnection();

        $sql = "UPDATE livro SET
                nome = ?,
                preco = ?,
                paginas = ?,
                autor = ?,
                quantidade = ?
                WHERE id = ?";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(1, $_POST['Nome']);
        $stmt->bindParam(2, $_POST['Preco']);
        $stmt->bindParam(3, $_POST['Paginas']);
        $stmt->bindParam(4, $_POST['Autor']);
        $stmt->bindParam(5, $_POST['Quantidade']);
        $stmt->bindParam(6, $id);

        if($stmt->execute()){
            echo "<script> alert ('Usuário atualizado com sucesso!'); location.href='read.php' </script>";
        }else{
            $erro = true;
        }
    }

    function delete($id){
        $conn = getConnection();

        $sql = 'DELETE FROM livro WHERE id = ?';

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(1, $id);

        if($stmt->execute()){
            return 'Deletado com sucesso';
        }else{
            return 'Falha ao deletar';
        }
    }

    function selectWhere($id){
        $conn = getConnection();

        $sql = "SELECT * FROM livro WHERE id = ?";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(1, $id);

        $stmt->execute();
        $dados = $stmt->fetchAll();
        return $dados;
    }