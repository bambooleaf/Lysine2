<?php

namespace Lysine\Service\DB\Adapter;

if (!extension_loaded('pdo_sqlite')) {
    throw new \RuntimeException('Require pdo_sqlite extension!');
}

class sqlite extends \Lysine\Service\DB\Adapter
{
    protected $identifier_symbol = '`';

    public function lastId($table = null, $column = null)
    {
        return $this->execute('SELECT last_insert_rowid()')->getCol();
    }
}
