<?php


class Connection
{
    public static function make($config)
    {


//----CONNECTING MANUALLY TO A DB --> ALWAYS TRy & CATCH---//
        try {
            return new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']


            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
//----CONNECTING MANUALLY TO A DB --> ALWAYS TRy & CATCH---//

    }
}


