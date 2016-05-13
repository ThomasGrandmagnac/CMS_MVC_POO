<?php
namespace Model;

    /**
     * Class PageRepository
     * @author 
     * @package model
     */
/**
 * Class PageRepository
 * @package model
 */
class PageRepository
{
    /**
     * @var \PDO
     */
    private $PDO;

    /**
     * PageRepository constructor.
     * @param \PDO $PDO
     */
    public function __construct(\PDO $PDO)
    {
        $this->PDO = $PDO;
    }

    /**
     * @param null $id
     * @return array
     */
    public function lister($id = null)
    {
        return [];
    }

    /**
     * @param array $data
     * @return bool
     */
    public function modifier(array $data)
    {
        return true;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function supprimer(int $id)
    {
        return true;
    }

    /**
     * @param array $data
     * @return int
     */
    public function inserer(array $data)
    {
        return 1;
    }

    /**
     * @param $slug
     * @return \stdClass\bool
     */
    public function getBySlug($slug)
    {
        $sql ="SELECT 
                    `id`, 
                    `slug`,
                     `h1`,
                    `body`, 
                    `title`,
                     `img`,
                     `span_text`,
                     `span_class`
                FROM 
                    `teletubbies` 
                WHERE 
                    `slug` = :slug
                ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':slug',$slug,\PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchObject();
    }
}