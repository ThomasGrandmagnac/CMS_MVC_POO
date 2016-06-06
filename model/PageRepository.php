<?php
namespace Model;

    /**
     * Class PageRepository
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
     * @param array $data
     * @return bool
     */
    public function modifier(array $data, $id)
    {
        $sql = "UPDATE
                    `page`
                SET
                    `slug` = :slug,
                    `h1` = :h1,
                    `title` = :title,
                    `body` = :body,
                    `img` = :img,
                    `span_text` = :span_text,
                    `span_class` = :span_class
                WHERE
                    `id` = :id
                ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':id',$id, \PDO::PARAM_INT);
        $stmt->bindParam(':slug', $data['slug'], \PDO::PARAM_STR);
        $stmt->bindParam(':h1', $data['h1'], \PDO::PARAM_STR);
        $stmt->bindParam(':title', $data['title'], \PDO::PARAM_STR);
        $stmt->bindParam(':body', $data['body'], \PDO::PARAM_STR);
        $stmt->bindParam(':img', $data['img'], \PDO::PARAM_STR);
        $stmt->bindParam(':span_text', $data['span_text'], \PDO::PARAM_STR);
        $stmt->bindParam(':span_class', $data['span_class'], \PDO::PARAM_STR);
        $stmt->execute();
        return true;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function supprimer($id)
    {
        $sql = "DELETE 
                FROM 
                    `page`
                WHERE 
                    `id` = :id
               ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':id',$id,\PDO::PARAM_INT);
        $stmt->execute();
        return 1;
    }

    /**
     * @param array $data
     * @return int
     */
    public function inserer(array $data)
    {
        $sql = "INSERT INTO 
                    `page`
                        (
                         `slug`, 
                         `h1`, 
                         `body`, 
                         `title`, 
                         `img`, 
                         `span_text`, 
                         `span_class`
                         ) 
                 VALUES 
                     (
                     :slug, 
                     :h1,
                     :body,
                     :title,
                     :img,
                     :span_text, 
                     :span_class
                     ) 
               ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':slug',$data['slug'],\PDO::PARAM_STR);
        $stmt->bindParam(':h1',$data['h1'],\PDO::PARAM_STR);
        $stmt->bindParam(':body',$data['body'],\PDO::PARAM_STR);
        $stmt->bindParam(':title',$data['title'],\PDO::PARAM_STR);
        $stmt->bindParam(':img',$data['img'],\PDO::PARAM_STR);
        $stmt->bindParam(':span_text',$data['span_text'],\PDO::PARAM_STR);
        $stmt->bindParam(':span_class',$data['span_class'],\PDO::PARAM_STR);
        $stmt->execute();
        return 1;
    }

    /**
     * @param $slug
     * @return stdClass|bool
     */
    public function getBySlug($slug)
    {
        $sql ="SELECT 
                    `title`, 
                    `h1`,
                    `img`,
                    `body`,
                    `span_text`,
                    `span_class`
                FROM 
                    `page` 
                WHERE 
                    `slug` = :slug
                ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':slug',$slug,\PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchObject();
    }

    public function getById($id)
    {
        $sql = "SELECT
                    `id`,
                    `title`, 
                    `h1`,
                    `img`,
                    `body`,
                    `span_text`,
                    `span_class`,
                    `slug`
                FROM
                    `page`
                WHERE
                    `id` = :id
                ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':id',$id,\PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchObject();
    }

    public function findAll()
    {
        $sql = "SELECT 
                    `id`,
                    `slug`, 
                    `title` 
                FROM 
                    `page`
                ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }
}
