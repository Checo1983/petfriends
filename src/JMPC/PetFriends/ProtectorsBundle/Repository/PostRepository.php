<?php
// src/JMPC/PetFriends/ProtectorsBundle/Repository/PostRepository.php


/*****************************************************/
/*             Clase PostRepository                  */
/*      Contiene tres funciones necesarias para el   */
/*                 PostController                    */
/*                                                   */
/*****************************************************/

namespace JMPC\PetFriends\ProtectorsBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * NewsRepository
 *
 * Esta clase fue generada por el ORM de Doctrine. Abajo añade
 * tu propia personalización a los métodos del repositorio.
 */
class PostRepository extends EntityRepository
{
    //Devuelve las ultimas entradas creadas
    //para mostrarlar en el lateral
    public function getLatestPosts($limit = null)
    {
        $qb = $this->createQueryBuilder('b')
                   ->select('b, c')
                   ->leftJoin('b.comentarios', 'c')
                   ->addOrderBy('b.creado', 'DESC');

        if (false === is_null($limit))
            $qb->setMaxResults($limit);
        
        return $qb->getQuery()
                  ->getResult();
    }
    
    //Devuelve las etiquetas guardadas en la BBDD
    //para mostrarlas en el lateral
    public function getTags()
    {
        $postTags = $this->createQueryBuilder('b')
                         ->select('b.tags')
                         ->getQuery()
                         ->getResult();

        $tags = array();
        foreach ($postTags as $postTag)
        {
            $tags = array_merge(explode(",", $postTag['tags']), $tags);
        }

        foreach ($tags as &$tag)
        {
            $tag = trim($tag);
        }

        return $tags;
    }

    //Devuelve la cantidad de etiquetas iguales guardadas en la BBDD
    //para mostrarlas en el lateral
    //Segun el numero de coincidencias, aumenta su tamaño de letra al mostrarlas
    public function getTagWeights($tags)
    {
        $tagWeights = array();
        if (empty($tags))
            return $tagWeights;

        foreach ($tags as $tag)
        {
            $tagWeights[$tag] = (isset($tagWeights[$tag])) ? $tagWeights[$tag] + 1 : 1;
        }
        // Revuelve las etiquetas
        uksort($tagWeights, function() {
            return rand() > rand();
        });

        $max = max($tagWeights);

        // un peso máximo de 5
        $multiplier = ($max > 5) ? 5 / $max : 1;
        foreach ($tagWeights as &$tag)
        {
            $tag = ceil($tag * $multiplier);
        }

        return $tagWeights;
    }
}
