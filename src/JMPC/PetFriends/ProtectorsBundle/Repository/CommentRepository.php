<?php
// src/JMPC/PetFriends/ProtectorsBundle/Repository/CommentRepository.php


/*****************************************************/
/*             Clase CommentRepository               */
/*      Contiene dos funciones necesarias para el    */
/*                 PostController                    */
/*                                                   */
/*****************************************************/

namespace JMPC\PetFriends\ProtectorsBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CommentRepository
 *
 * Esta clase fue generada por el ORM de Doctrine. Abajo añade
 * tu propia personalización a los métodos del repositorio.
 */
class CommentRepository extends EntityRepository
{
    
    //Devuelve todos los comentarios asociados a una entrada especifica
    public function getCommentsForPost($post_id, $aprobado = true)
    {
        $qb = $this->createQueryBuilder('c')
                   ->select('c')
                   ->where('c.contenido = :post_id')
                   ->addOrderBy('c.creado')
                   ->setParameter('post_id', $post_id);

        if (false === is_null($aprobado))
            $qb->andWhere('c.aprobado = :aprobado')
               ->setParameter('aprobado', $aprobado);

        return $qb->getQuery()
                  ->getResult();
    }
    
    //Devuelve los ultimos comentarios (maximo 10)
    //para mostrarlos en el lateral del sitio web
    public function getLatestComments($limit = 10)
    {
        $qb = $this->createQueryBuilder('c')
                    ->select('c')
                    ->addOrderBy('c.id', 'DESC');

        if (false === is_null($limit))
            $qb->setMaxResults($limit);

        return $qb->getQuery()
                  ->getResult();
    }
}
