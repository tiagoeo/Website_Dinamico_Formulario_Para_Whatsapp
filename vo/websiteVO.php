<?php
    date_default_timezone_set('America/Sao_Paulo'); 

    require_once(__DIR__.'/../dao/websiteDAO.php');

    class websiteVO{
        function dadosWebsiteVO(){
            try{
                $novoWebsiteDAO = new websiteDAO;
                
                $retornoNovoWebsiteDAO = $novoWebsiteDAO->dadosWebsiteDAO();

                if ($retornoNovoWebsiteDAO != false){
                    return $retornoNovoWebsiteDAO;
                }else{
                    return false;
                }
            }catch(Exception  $e){
                return $e->getMessage();
            }
        }

        function dadosPaginaVO(){
            try{
                $novoPaginaDAO = new websiteDAO;
                
                $retornoNovoPaginaDAO = $novoPaginaDAO->dadosPaginaDAO();

                if ($retornoNovoPaginaDAO != false){
                    return $retornoNovoPaginaDAO;
                }else{
                    return false;
                }
            }catch(Exception  $e){
                return $e->getMessage();
            }
        }
    }
?>