<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * SQL Parser Matching Data
 *
 * Copyright 2002 Robin Johnson <robbat2@users.sourceforge.net>
 * http://www.orbis-terrarum.net/?l=people.robbat2
 *
 * This data is used by the SQL Parser to recognize keywords
 *
 * It has been extracted from the lex.h file in the MySQL BK tree
 * (around 4.0.2) as well as the MySQL documentation.
 *
 * It's easier to use only uppercase for proper sorting. In case of
 * doubt, use the test case to verify.
 *
 * @package PhpMyAdmin
 */
if (! defined('PHPMYADMIN')) {
    exit;
}

if (! isset($GLOBALS['sql_delimiter'])) {
    $GLOBALS['sql_delimiter'] = ';';
}

/**
 * @global array MySQL function names
 */
$PMA_SQPdata_function_name = array(
    'ABS',
    'ACOS',
    'ADDDATE',
    'ADDTIME',
    'AES_DECRYPT',
    'AES_ENCRYPT',
    'AREA',                     // polygon-property-functions.html
    'ASBINARY',
    'ASCII',
    'ASIN',
    'ASTEXT',
    'ATAN',
    'ATAN2',
    'AVG',
    'BDMPOLYFROMTEXT',
    'BDMPOLYFROMWKB',
    'BDPOLYFROMTEXT',
    'BDPOLYFROMWKB',
    'BENCHMARK',
    'BIN',
    'BIT_AND',
    'BIT_COUNT',
    'BIT_LENGTH',
    'BIT_OR',
    'BIT_XOR',                  // group-by-functions.html
    'BOUNDARY',                 // general-geometry-property-functions.html
    'BUFFER',
    'CAST',
    'CEIL',
    'CEILING',
    'CENTROID',                 // multipolygon-property-functions.html
    'CHAR',                     // string-functions.html
    'CHARACTER_LENGTH',
    'CHARSET',                  // information-functions.html
    'CHAR_LENGTH',
    'COALESCE',
    'COERCIBILITY',             // information-functions.html
    'COLLATION',                // information-functions.html
    'COMPRESS',                 // string-functions.html
    'CONCAT',
    'CONCAT_WS',
    'CONNECTION_ID',
    'CONTAINS',
    'CONV',
    'CONVERT',
    'CONVERT_TZ',
    'CONVEXHULL',
    'COS',
    'COT',
    'COUNT',
    'CRC32',                    // mathematical-functions.html
    'CROSSES',
    'CURDATE',
    'CURRENT_DATE',
    'CURRENT_TIME',
    'CURRENT_TIMESTAMP',
    'CURRENT_USER',
    'CURTIME',
    'DATABASE',
    'DATE',                     // date-and-time-functions.html
    'DATEDIFF',                 // date-and-time-functions.html
    'DATE_ADD',
    'DATE_DIFF',
    'DATE_FORMAT',
    'DATE_SUB',
    'DAY',
    'DAYNAME',
    'DAYOFMONTH',
    'DAYOFWEEK',
    'DAYOFYEAR',
    'DECODE',
    'DEFAULT',                  // miscellaneous-functions.html
    'DEGREES',
    'DES_DECRYPT',
    'DES_ENCRYPT',
    'DIFFERENCE',
    'DIMENSION',                // general-geometry-property-functions.html
    'DISJOINT',
    'DISTANCE',
    'ELT',
    'ENCODE',
    'ENCRYPT',
    'ENDPOINT',                 // linestring-property-functions.html
    'ENVELOPE',                 // general-geometry-property-functions.html
    'EQUALS',
    'EXP',
    'EXPORT_SET',
    'EXTERIORRING',             // polygon-property-functions.html
    'EXTRACT',
    'EXTRACTVALUE',             // xml-functions.html
    'FIELD',
    'FIND_IN_SET',
    'FLOOR',
    'FORMAT',
    'FOUND_ROWS',
    'FROM_DAYS',
    'FROM_UNIXTIME',
    'GEOMCOLLFROMTEXT',
    'GEOMCOLLFROMWKB',
    'GEOMETRYCOLLECTION',
    'GEOMETRYCOLLECTIONFROMTEXT',
    'GEOMETRYCOLLECTIONFROMWKB',
    'GEOMETRYFROMTEXT',
    'GEOMETRYFROMWKB',
    'GEOMETRYN',                // geometrycollection-property-functions.html
    'GEOMETRYTYPE',             // general-geometry-property-functions.html
    'GEOMFROMTEXT',
    'GEOMFROMWKB',
    'GET_FORMAT',
    'GET_LOCK',
    'GLENGTH',                  // linestring-property-functions.html
    'GREATEST',
    'GROUP_CONCAT',
    'GROUP_UNIQUE_USERS',
    'HEX',
    'HOUR',
    'IF',                       //control-flow-functions.html
    'IFNULL',
    'INET_ATON',
    'INET_NTOA',
    'INSERT',                   // string-functions.html
    'INSTR',
    'INTERIORRINGN',            // polygon-property-functions.html
    'INTERSECTION',
    'INTERSECTS',
    'INTERVAL',
    'ISCLOSED',                 // multilinestring-property-functions.html
    'ISEMPTY',                  // general-geometry-property-functions.html
    'ISNULL',
    'ISRING',                   // linestring-property-functions.html
    'ISSIMPLE',                 // general-geometry-property-functions.html
    'IS_FREE_LOCK',
    'IS_USED_LOCK',             // miscellaneous-functions.html
    'LAST_DAY',
    'LAST_INSERT_ID',
    'LCASE',
    'LEAST',
    'LEFT',
    'LENGTH',
    'LINEFROMTEXT',
    'LINEFROMWKB',
    'LINESTRING',
    'LINESTRINGFROMTEXT',
    'LINESTRINGFROMWKB',
    'LN',
    'LOAD_FILE',
    'LOCALTIME',
    'LOCALTIMESTAMP',
    'LOCATE',
    'LOG',
    'LOG10',
    'LOG2',
    'LOWER',
    'LPAD',
    'LTRIM',
    'MAKEDATE',
    'MAKETIME',
    'MAKE_SET',
    'MASTER_POS_WAIT',
    'MAX',
    'MBRCONTAINS',
    'MBRDISJOINT',
    'MBREQUAL',
    'MBRINTERSECTS',
    'MBROVERLAPS',
    'MBRTOUCHES',
    'MBRWITHIN',
    'MD5',
    'MICROSECOND',
    'MID',
    'MIN',
    'MINUTE',
    'MLINEFROMTEXT',
    'MLINEFROMWKB',
    'MOD',
    'MONTH',
    'MONTHNAME',
    'MPOINTFROMTEXT',
    'MPOINTFROMWKB',
    'MPOLYFROMTEXT',
    'MPOLYFROMWKB',
    'MULTILINESTRING',
    'MULTILINESTRINGFROMTEXT',
    'MULTILINESTRINGFROMWKB',
    'MULTIPOINT',
    'MULTIPOINTFROMTEXT',
    'MULTIPOINTFROMWKB',
    'MULTIPOLYGON',
    'MULTIPOLYGONFROMTEXT',
    'MULTIPOLYGONFROMWKB',
    'NAME_CONST',               // NAME_CONST()
    'NOW',
    'NULLIF',
    'NUMGEOMETRIES',            // geometrycollection-property-functions.html
    'NUMINTERIORRINGS',         // polygon-property-functions.html
    'NUMPOINTS',                // linestring-property-functions.html
    'OCT',
    'OCTET_LENGTH',
    'OLD_PASSWORD',
    'ORD',
    'OVERLAPS',
    'PASSWORD',
    'PERIOD_ADD',
    'PERIOD_DIFF',
    'PI',
    'POINT',
    'POINTFROMTEXT',
    'POINTFROMWKB',
    'POINTN',                   // inestring-property-functions.html
    'POINTONSURFACE',           // multipolygon-property-functions.html
    'POLYFROMTEXT',
    'POLYFROMWKB',
    'POLYGON',
    'POLYGONFROMTEXT',
    'POLYGONFROMWKB',
    'POSITION',
    'POW',
    'POWER',
    'QUARTER',
    'QUOTE',
    'RADIANS',
    'RAND',
    'RELATED',
    'RELEASE_LOCK',
    'REPEAT',
    'REPLACE',                  // string-functions.html
    'REVERSE',
    'RIGHT',
    'ROUND',
    'ROW_COUNT',                // information-functions.html
    'RPAD',
    'RTRIM',
    'SCHEMA',                   // information-functions.html
    'SECOND',
    'SEC_TO_TIME',
    'SESSION_USER',
    'SHA',
    'SHA1',
    'SIGN',
    'SIN',
    'SLEEP',                    // miscellaneous-functions.html
    'SOUNDEX',
    'SPACE',
    'SQRT',
    'SRID',                     // general-geometry-property-functions.html
    'STARTPOINT',               // linestring-property-functions.html
    'STD',
    'STDDEV',
    'STDDEV_POP',               // group-by-functions.html
    'STDDEV_SAMP',              // group-by-functions.html
    'STRCMP',
    'STR_TO_DATE',
    'SUBDATE',
    'SUBSTR',
    'SUBSTRING',
    'SUBSTRING_INDEX',
    'SUBTIME',
    'SUM',
    'SYMDIFFERENCE',
    'SYSDATE',
    'SYSTEM_USER',
    'TAN',
    'TIME',
    'TIMEDIFF',
    'TIMESTAMP',
    'TIMESTAMPADD',
    'TIMESTAMPDIFF',
    'TIME_FORMAT',
    'TIME_TO_SEC',
    'TOUCHES',
    'TO_DAYS',
    'TRIM',
    'TRUNCATE',                 // mathematical-functions.html
    'UCASE',
    'UNCOMPRESS',               // string-functions.html
    'UNCOMPRESSED_LENGTH',      // string-functions.html
    'UNHEX',                    // string-functions.html
    'UNIQUE_USERS',
    'UNIX_TIMESTAMP',
    'UPDATEXML',                // xml-functions.html
    'UPPER',
    'USER',
    'UTC_DATE',
    'UTC_TIME',
    'UTC_TIMESTAMP',
    'UUID',                     // miscellaneous-functions.html
    'VARIANCE',                 // group-by-functions.html
    'VAR_POP',                  // group-by-functions.html
    'VAR_SAMP',                 // group-by-functions.html
    'VERSION',
    'WEEK',
    'WEEKDAY',
    'WEEKOFYEAR',
    'WITHIN',
    'X',                        // point-property-functions.html
    'Y',                        // point-property-functions.html
    'YEAR',
    'YEARWEEK'
);

/**
 * @global array MySQL attributes
 */
$PMA_SQPdata_column_attrib = array(
    'ARCHIVE',          // Engine
    'ASCII',
    'AUTO_INCREMENT',
    'BDB',              // Engine
    'BERKELEYDB',       // Engine alias BDB
    'BINARY',
    'BLACKHOLE',        // Engine
    'CSV',              // Engine
    'DEFAULT',
    'EXAMPLE',          // Engine
    'FEDERATED',        // Engine
    'HEAP',             // Engine
    'INNOBASE',         // Engine alias InnoDB
    'INNODB',           // Engine InnoDB
    'ISAM',             // Engine
    'MARIA',            // Engine
    'MEMORY',           // Engine alias HEAP, but preferred
    'MERGE',            // Engine
    'MRG_ISAM',         // Engine
    'MRG_MYISAM',       // Engine alias MERGE
    'MYISAM',           // Engine MyISAM
    'NATIONAL',
    'NDB',              // Engine alias NDBCLUSTER
    'NDBCLUSTER',       // Engine
    'PRECISION',
    'UNDEFINED',
    'UNICODE',
    'UNSIGNED',
    'VARYING',
    'ZEROFILL'
);

/**
 * words that are reserved by MySQL and may not be used as identifiers without
 * quotes
 *
 * @see http://dev.mysql.com/doc/refman/5.5/en/reserved-words.html
 *
 * @global array MySQL reserved words
 */
$PMA_SQPdata_reserved_word = array(
    'ACCESSIBLE',       // 5.1
    'ACTION',
    'ADD',
    'AFTER',
    'AGAINST',
    'AGGREGATE',
    'ALGORITHM',
    'ALL',
    'ALTER',
    'ANALYSE',
    'ANALYZE',
    'AND',
    'AS',
    'ASC',
    'AUTOCOMMIT',
    'AUTO_INCREMENT',
    'AVG_ROW_LENGTH',
    'BACKUP',
    'BEFORE',
    'BEGIN',
    'BETWEEN',
    'BINLOG',
    'BOTH',
    'BY',
    'CALL',
    'CASCADE',
    'CASE',
    'CHANGE',
    'CHANGED',
    'CHARSET',
    'CHECK',
    'CHECKSUM',
    'COLLATE',
    'COLLATION',
    'COLUMN',
    'COLUMNS',
    'COMMENT',
    'COMMIT',
    'COMMITTED',
    'COMPRESSED',
    'CONCURRENT',
    'CONSTRAINT',
    'CONTAINS',
    'CONVERT',
    'CREATE',
    'CROSS',
    'CURRENT_TIMESTAMP',
    'DATABASE',
    'DATABASES',
    'DAY',
    'DAY_HOUR',
    'DAY_MINUTE',
    'DAY_SECOND',
    'DECLARE',
    'DEFINER',
    'DELAYED',
    'DELAY_KEY_WRITE',
    'DELETE',
    'DESC',
    'DESCRIBE',
    'DETERMINISTIC',
    'DISTINCT',
    'DISTINCTROW',
    'DIV',
    'DO',
    'DROP',
    'DUMPFILE',
    'DUPLICATE',
    'DYNAMIC',
    'EACH',
    'ELSE',
    'ELSEIF',
    'ENCLOSED',
    'END',
    'ENGINE',
    'ENGINES',
    'ESCAPE',
    'ESCAPED',
    'EVENTS',
    'EXECUTE',
    'EXISTS',
    'EXIT',
    'EXPLAIN',
    'EXTENDED',
    'FALSE',
    'FAST',
    'FIELDS',
    'FILE',
    'FIRST',
    'FIXED',
    'FLUSH',
    'FOR',
    'FORCE',
    'FOREIGN',
    'FROM',
    'FULL',
    'FULLTEXT',
    'FUNCTION',
    'GEMINI',
    'GEMINI_SPIN_RETRIES',
    'GENERAL',
    'GLOBAL',
    'GRANT',
    'GRANTS',
    'GROUP',
    'HAVING',
    'HEAP',
    'HIGH_PRIORITY',
    'HOSTS',
    'HOUR',
    'HOUR_MINUTE',
    'HOUR_SECOND',
    'IDENTIFIED',
    'IF',
    'IGNORE',
    'IGNORE_SERVER_IDS',
    'IN',
    'INDEX',
    'INDEXES',
    'INFILE',
    'INNER',
    'INOUT',
    'INSERT',
    'INSERT_ID',
    'INSERT_METHOD',
    'INTERVAL',
    'INTO',
    'INVOKER',
    'IS',
    'ISOLATION',
    'JOIN',
    'KEY',
    'KEYS',
    'KILL',
    'LAST_INSERT_ID',
    'LEADING',
    'LEFT',
    'LIKE',
    'LIMIT',
    'LINEAR',               // 5.1
    'LINES',
    'LOAD',
    'LOCAL',
    'LOCK',
    'LOCKS',
    'LOGS',
    'LOW_PRIORITY',
    'MARIA',                // 5.1 ?
    'MASTER_CONNECT_RETRY',
    'MASTER_HEARTBEAT_PERIOD',
    'MASTER_HOST',
    'MASTER_LOG_FILE',
    'MASTER_LOG_POS',
    'MASTER_PASSWORD',
    'MASTER_PORT',
    'MASTER_USER',
    'MATCH',
    'MAXVALUE',
    'MAX_CONNECTIONS_PER_HOUR',
    'MAX_QUERIES_PER_HOUR',
    'MAX_ROWS',
    'MAX_UPDATES_PER_HOUR',
    'MAX_USER_CONNECTIONS',
    'MEDIUM',
    'MERGE',
    'MINUTE',
    'MINUTE_SECOND',
    'MIN_ROWS',
    'MODE',
    'MODIFIES',
    'MODIFY',
    'MONTH',
    'MRG_MYISAM',
    'MYISAM',
    'NAMES',
    'NATURAL',
    // 'NO' is not allowed in SQL-99 but is allowed in MySQL
    //'NO',
    'NOT',
    'NULL',
    'OFFSET',
    'ON',
    'OPEN',
    'OPTIMIZE',
    'OPTION',
    'OPTIONALLY',
    'OR',
    'ORDER',
    'OUT',
    'OUTER',
    'OUTFILE',
    'PACK_KEYS',
    'PAGE',                 // 5.1-maria ?
    'PAGE_CHECKSUM',        // 5.1
    'PARTIAL',
    'PARTITION',            // 5.1
    'PARTITIONS',           // 5.1
    'PASSWORD',
    'PRIMARY',
    'PRIVILEGES',
    'PROCEDURE',
    'PROCESS',
    'PROCESSLIST',
    'PURGE',
    'QUICK',
    'RAID0',
    'RAID_CHUNKS',
    'RAID_CHUNKSIZE',
    'RAID_TYPE',
    'RANGE',                // 5.1
    'READ',
    'READS',
    'READ_ONLY',            // 5.1
    'READ_WRITE',           // 5.1
    'REFERENCES',
    'REGEXP',
    'RELOAD',
    'RENAME',
    'REPAIR',
    'REPEATABLE',
    'REPLACE',
    'REPLICATION',
    'RESET',
    'RESIGNAL',
    'RESTORE',
    'RESTRICT',
    'RETURN',
    'RETURNS',
    'REVOKE',
    'RIGHT',
    'RLIKE',
    'ROLLBACK',
    'ROW',
    'ROWS',
    'ROW_FORMAT',
    'SECOND',
    'SECURITY',
    'SELECT',
    'SEPARATOR',
    'SERIALIZABLE',
    'SESSION',
    'SHARE',
    'SHOW',
    'SHUTDOWN',
    'SIGNAL',
    'SLAVE',
    'SLOW',
    'SONAME',
    'SOUNDS',                   // string-functions.html
    'SQL',
    'SQL_AUTO_IS_NULL',
    'SQL_BIG_RESULT',
    'SQL_BIG_SELECTS',
    'SQL_BIG_TABLES',
    'SQL_BUFFER_RESULT',
    'SQL_CACHE',
    'SQL_CALC_FOUND_ROWS',
    'SQL_LOG_BIN',
    'SQL_LOG_OFF',
    'SQL_LOG_UPDATE',
    'SQL_LOW_PRIORITY_UPDATES',
    'SQL_MAX_JOIN_SIZE',
    'SQL_NO_CACHE',
    'SQL_QUOTE_SHOW_CREATE',
    'SQL_SAFE_UPDATES',
    'SQL_SELECT_LIMIT',
    'SQL_SLAVE_SKIP_COUNTER',
    'SQL_SMALL_RESULT',
    'SQL_WARNINGS',
    'START',
    'STARTING',
    'STATUS',
    'STOP',
    'STORAGE',
    'STRAIGHT_JOIN',
    'STRING',
    'STRIPED',
    'SUPER',
    'TABLE',
    'TABLES',
    'TEMPORARY',
    'TERMINATED',
    'THEN',
    'TO',
    'TRAILING',
    'TRANSACTIONAL',    // 5.1 ?
    'TRIGGER',
    'TRUE',
    'TRUNCATE',
    'TYPE',
    'TYPES',
    'UNCOMMITTED',
    'UNION',
    'UNIQUE',
    'UNLOCK',
    'UPDATE',
    'USAGE',
    'USE',
    'USING',
    'VALUES',
    'VARIABLES',
    'VIEW',
    'WHEN',
    'WHERE',
    'WITH',
    'WORK',
    'WRITE',
    'XOR',
    'YEAR_MONTH'
);

/**
 * words forbidden to be used as column or table name without quotes
 * as seen in http://dev.mysql.com/doc/refman/5.6/en/reserved-words.html
 *
 * @global array MySQL forbidden words
 */
$PMA_SQPdata_forbidden_word = array(
    'ACCESSIBLE',
    'ADD',
    'ALL',
    'ALTER',
    'ANALYZE',
    'AND',
    'AS',
    'ASC',
    'ASENSITIVE',
    'BEFORE',
    'BETWEEN',
    'BIGINT',
    'BINARY',
    'BLOB',
    'BOTH',
    'BY',
    'CALL',
    'CASCADE',
    'CASE',
    'CHANGE',
    'CHAR',
    'CHARACTER',
    'CHECK',
    'COLLATE',
    'COLUMN',
    'CONDITION',
    'CONSTRAINT',
    'CONTINUE',
    'CONVERT',
    'CREATE',
    'CROSS',
    'CURRENT_DATE',
    'CURRENT_TIME',
    'CURRENT_TIMESTAMP',
    'CURRENT_USER',
    'CURSOR',
    'DATABASE',
    'DATABASES',
    'DAY_HOUR',
    'DAY_MICROSECOND',
    'DAY_MINUTE',
    'DAY_SECOND',
    'DEC',
    'DECIMAL',
    'DECLARE',
    'DEFAULT',
    'DELAYED',
    'DELETE',
    'DESC',
    'DESCRIBE',
    'DETERMINISTIC',
    'DISTINCT',
    'DISTINCTROW',
    'DIV',
    'DOUBLE',
    'DROP',
    'DUAL',
    'EACH',
    'ELSE',
    'ELSEIF',
    'ENCLOSED',
    'ESCAPED',
    'EXISTS',
    'EXIT',
    'EXPLAIN',
    'FALSE',
    'FETCH',
    'FLOAT',
    'FLOAT4',
    'FLOAT8',
    'FOR',
    'FORCE',
    'FOREIGN',
    'FROM',
    'FULLTEXT',
    'GENERAL',
    'GET',
    'GRANT',
    'GROUP',
    'HAVING',
    'HIGH_PRIORITY',
    'HOUR_MICROSECOND',
    'HOUR_MINUTE',
    'HOUR_SECOND',
    'IF',
    'IGNORE',
    'IGNORE_SERVER_IDS',
    'IN',
    'INDEX',
    'INFILE',
    'INNER',
    'INOUT',
    'INSENSITIVE',
    'INSERT',
    'INT',
    'INT1',
    'INT2',
    'INT3',
    'INT4',
    'INT8',
    'INTEGER',
    'INTERVAL',
    'INTO',
    'IO_AFTER_GTIDS',
    'IO_BEFORE_GTIDS',
    'IS',
    'ITERATE',
    'JOIN',
    'KEY',
    'KEYS',
    'KILL',
    'LEADING',
    'LEAVE',
    'LEFT',
    'LIKE',
    'LIMIT',
    'LINEAR',
    'LINES',
    'LOAD',
    'LOCALTIME',
    'LOCALTIMESTAMP',
    'LOCK',
    'LONG',
    'LONGBLOB',
    'LONGTEXT',
    'LOOP',
    'LOW_PRIORITY',
    'MASTER_BIND',
    'MASTER_HEARTBEAT_PERIOD',
    'MASTER_SSL_VERIFY_SERVER_CERT',
    'MATCH',
    'MAXVALUE',
    'MEDIUMBLOB',
    'MEDIUMINT',
    'MEDIUMTEXT',
    'MIDDLEINT',
    'MINUTE_MICROSECOND',
    'MINUTE_SECOND',
    'MOD',
    'MODIFIES',
    'NATURAL',
    'NOT',
    'NO_WRITE_TO_BINLOG',
    'NULL',
    'NUMERIC',
    'ON',
    'ONE_SHOT',
    'OPTIMIZE',
    'OPTION',
    'OPTIONALLY',
    'OR',
    'ORDER',
    'OUT',
    'OUTER',
    'OUTFILE',
    'PARTITION',
    'PRECISION',
    'PRIMARY',
    'PROCEDURE',
    'PURGE',
    'RANGE',
    'READ',
    'READS',
    'READ_WRITE',
    'REAL',
    'REFERENCES',
    'REGEXP',
    'RELEASE',
    'RENAME',
    'REPEAT',
    'REPLACE',
    'REQUIRE',
    'RESIGNAL',
    'RESTRICT',
    'RETURN',
    'REVOKE',
    'RIGHT',
    'RLIKE',
    'SCHEMA',
    'SCHEMAS',
    'SECOND_MICROSECOND',
    'SELECT',
    'SENSITIVE',
    'SEPARATOR',
    'SET',
    'SHOW',
    'SIGNAL',
    'SLOW',
    'SMALLINT',
    'SPATIAL',
    'SPECIFIC',
    'SQL',
    'SQLEXCEPTION',
    'SQLSTATE',
    'SQLWARNING',
    'SQL_AFTER_GTIDS',
    'SQL_BEFORE_GTIDS',
    'SQL_BIG_RESULT',
    'SQL_CALC_FOUND_ROWS',
    'SQL_SMALL_RESULT',
    'SSL',
    'STARTING',
    'STRAIGHT_JOIN',
    'TABLE',
    'TERMINATED',
    'THEN',
    'TINYBLOB',
    'TINYINT',
    'TINYTEXT',
    'TO',
    'TRAILING',
    'TRIGGER',
    'TRUE',
    'UNDO',
    'UNION',
    'UNIQUE',
    'UNLOCK',
    'UNSIGNED',
    'UPDATE',
    'USAGE',
    'USE',
    'USING',
    'UTC_DATE',
    'UTC_TIME',
    'UTC_TIMESTAMP',
    'VALUES',
    'VARBINARY',
    'VARCHAR',
    'VARCHARACTER',
    'VARYING',
    'WHEN',
    'WHERE',
    'WHILE',
    'WITH',
    'WRITE',
    'XOR',
    'YEAR_MONTH',
    'ZEROFILL'
);

/**
 * the MySQL column/data types
 *
 * @see http://dev.mysql.com/doc/refman/5.1/en/data-types.html
 * @see http://dev.mysql.com/doc/refman/5.1/en/mysql-spatial-datatypes.html
 *
 * @global array MySQL column types
 */
$PMA_SQPdata_column_type = array(
    'BIGINT',
    'BINARY',
    'BIT',
    'BLOB',
    'BOOL',
    'BOOLEAN',              // numeric-type-overview.html
    'CHAR',
    'CHARACTER',
    'DATE',
    'DATETIME',
    'DEC',
    'DECIMAL',
    'DOUBLE',
    'ENUM',
    'FLOAT',
    'FLOAT4',
    'FLOAT8',
    'GEOMETRY',             // spatial
    'GEOMETRYCOLLECTION',   // spatial
    'INT',
    'INT1',
    'INT2',
    'INT3',
    'INT4',
    'INT8',
    'INTEGER',
    'LINESTRING',           // spatial
    'LONG',
    'LONGBLOB',
    'LONGTEXT',
    'MEDIUMBLOB',
    'MEDIUMINT',
    'MEDIUMTEXT',
    'MIDDLEINT',
    'MULTILINESTRING',      // spatial
    'MULTIPOINT',           // spatial
    'MULTIPOLYGON',         // spatial
    'NCHAR',
    'NUMERIC',
    'POINT',                // spatial
    'POLYGON',              // spatial
    'REAL',
    'SERIAL',               // alias
    'SET',
    'SMALLINT',
    'TEXT',
    'TIME',
    'TIMESTAMP',
    'TINYBLOB',
    'TINYINT',
    'TINYTEXT',
    'VARBINARY',
    'VARCHAR',
    'YEAR'
);
