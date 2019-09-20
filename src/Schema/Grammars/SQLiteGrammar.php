<?php

namespace Dyrynda\Database\Schema\Grammars;

use Illuminate\Support\Fluent;
use Illuminate\Database\Schema\Grammars\SQLiteGrammar as BaseSQLiteGrammar;

class SQLiteGrammar extends BaseSQLiteGrammar
{
    /**
     * Create the column definition for a UUID type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     *
     * @return string
     */
    protected function typeEfficientUuid(Fluent $column)
    {
        return sprintf('binary(%d)', $column->length ?? 16);
    }
}
