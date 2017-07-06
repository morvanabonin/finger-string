<?php

namespace FingerString\Repositories;


/**
 * UserRepository
 */
class UserRepository
{
    /**
     * @var \PDO
     */
    private $db;

    /**
     * UserRepository constructor.
     * @param \PDO $db
     */
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    private function getUser($username, $password)
    {
        $consulta = $this->db->prepare("SELECT *
                                        FROM user
                                        WHERE deleted = 0
                                        AND username = :username
                                        AND password = :password");
        $password = md5($password);
        $consulta->bindParam("username",$username);
        $consulta->bindParam("password",$password);
        $consulta->execute();

        return $consulta->fetch(\PDO::FETCH_ASSOC);
    }
}