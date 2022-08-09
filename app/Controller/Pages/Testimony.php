<?php

namespace App\Controller\Pages;

use \App\Model\Entity\Testimony as EntityTestimony;
use \App\Utils\View;

class Testimony extends Page
{
    /**
     * Método responsável por obter a renderização dos itens de depoimentos para a página
     *
     * @return string
     */
    private static function getTestimonyItems()
    {
        //DEPOIMENTOS
        $itens = '';

        //RESULTADOS DA PÁGINA
        $results = EntityTestimony::getTestimonies(null, 'id DESC');

        //RENDERIZA O ITEM
        while ($obTestimony = $results->fetchObject(EntityTestimony::class)) {
            $itens .= View::render('pages/testimony/item', [
                'nome' => $obTestimony->nome,
                'mensagem' => $obTestimony->mensagem,
                'data' => date('d/m/Y H:i:s', strtotime($obTestimony->data)),
            ]);
        }

        //RETORNA OS DEPOIMENTOS
        return $itens;
    }

    /**
     * Método responsável por retornar o conteúdo (view) de depoimentos
     *
     * @return string
     */
    public static function getTestimonies()
    {

        // VIEW DE DEPOIMENTOS
        $content = View::render('pages/testimonies', [
            'itens' => self::getTestimonyItems(),
        ]);

        // RETORNA A VIEW DA PÁGINA
        return parent::getPage('DEPOIMENTOS > WDEV', $content);
    }

    /**
     * Método responsável por cadastrar um depoimento
     *
     * @param Request $request
     * @return string
     */
    public static function insertTestimony($request)
    {
        //DADOS DO POST
        $postVars = $request->getPostVars();

        //NOVA INSTÂNCIA DO DEPOIMENTO
        $obTestimony = new EntityTestimony;
        $obTestimony->nome = $postVars['nome'];
        $obTestimony->mensagem = $postVars['mensagem'];
        $obTestimony->cadastrar();

        return self::getTestimonies();
    }
}
