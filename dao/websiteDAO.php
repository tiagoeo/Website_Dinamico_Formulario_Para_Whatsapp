<?php

    class websiteDAO{
        private $host = 'localhost';
        private $user = 'root';
        private $password = 'root';
        private $banco = 'websitedinamicodb';
        private $pdo;
        
        private function conectar(){
            try{
                $this->pdo = new PDO('mysql:dbname='.$this->banco.'; charset=utf8; host='.$this->host, $this->user, $this->password);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return true;
            }catch(PDOException $e){
                $novoCriarBanco = $this->criarBancoSQL();
                if ($novoCriarBanco == true){
                    try{
                        $this->pdo = new PDO('mysql:dbname='.$this->banco.'; charset=utf8; host='.$this->host, $this->user, $this->password);
                        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        return true;
                    }catch(PDOException $e){
                        return false;
                    }
                }else{
                    return false;
                }   
            }
        }

        private function desconectar(){
            try{
                $this->pdo = null;

            }catch(PDOException $e){
                return false;
            }
        }

        private function criarBancoSQL(){
            try{
                $this->pdo = new PDO('mysql:charset=utf8; host='.$this->host, $this->user, $this->password);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $criarBanco = "CREATE SCHEMA IF NOT EXISTS `websitedinamicodb` DEFAULT CHARACTER SET utf8;
                                USE `websitedinamicodb`;                
                                CREATE TABLE IF NOT EXISTS `websitedinamicodb`.`website` (`idWebsite` INT NOT NULL AUTO_INCREMENT, `nome` VARCHAR(100) NULL, `telefone` VARCHAR(50) NULL, `manutencao` CHAR(1) NULL, PRIMARY KEY (`idWebsite`));
                                CREATE TABLE IF NOT EXISTS `websitedinamicodb`.`pagina` (`idPagina` INT NOT NULL AUTO_INCREMENT, `titulo` VARCHAR(50) NULL, `descricao` VARCHAR(600) NULL, PRIMARY KEY (`idPagina`));
                                INSERT INTO `websitedinamicodb`.`website`(`nome`,`telefone`,`manutencao`) VALUES ('Website Dinamico', 91999999999, 0);
                                INSERT INTO `websitedinamicodb`.`pagina`(`titulo`,`descricao`) VALUES ('Informação em destaque 1', 'Resumo da informação em destaque 1');
                                INSERT INTO `websitedinamicodb`.`pagina`(`titulo`,`descricao`) VALUES ('Informação em destaque 2', 'Resumo da informação em destaque 2');
                                INSERT INTO `websitedinamicodb`.`pagina`(`titulo`,`descricao`) VALUES ('Informação em destaque 3', 'Resumo da informação em destaque 3');";

                $criarBanco = $this->pdo->prepare($criarBanco);

                $criarBanco->execute();

                if ($criarBanco){
                    return true;
                }else{
                    return false;
                }

            }catch(PDOException $e){
                return $e->getMessage();
            }
        }

        function dadosWebsiteDAO(){
            try{              
                if ($this->conectar() == false){
                    return false;
                }

                $pesquisar = "SELECT website.nome, website.telefone, website.manutencao FROM website";
                
                $pesquisar = $this->pdo->prepare($pesquisar);

                $pesquisar->execute();

                $pesquisar = $pesquisar->fetch();

                if (isset($pesquisar) and $pesquisar != false){
                    return $pesquisar;
                }else{    
                    return false;
                }

                $this->desconectar();

            }catch(PDOException $e){
                return $e->getMessage();
            }
        }

        function dadosPaginaDAO(){
            try{              
                if ($this->conectar() == false){
                    return false;
                }

                $pesquisar = "SELECT pagina.idPagina, pagina.titulo, pagina.descricao FROM pagina ORDER BY idPagina ASC LIMIT 3;";
                
                $pesquisar = $this->pdo->prepare($pesquisar);

                $pesquisar->execute();

                $pesquisar = $pesquisar->fetchAll();

                if (isset($pesquisar) and $pesquisar != false){
                    return $pesquisar;
                }else{    
                    return false;
                }

                $this->desconectar();

            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
    }
?>
