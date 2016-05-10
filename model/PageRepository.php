<?php

namespace Model;

class PageRepository
{
    private $pdo;
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function update()
    {
        $sql = "UPDATE `page` SET  WHERE 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }

    public function insert()
    {
        $sql ="INSERT INTO `page`() VALUES ()";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }

    public function delete()
    {
        $sql = "DELETE FROM `page` WHERE 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT `id`, `slug`, `h1`, `body`, `title`, `img`, `span_text`, `span_class` FROM `page` WHERE 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }
    public function selectAll()
    {
        $sql = "SELECT `id`, `slug`, `h1`, `body`, `title`, `img`, `span_text`, `span_class` FROM `page`";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }

}
