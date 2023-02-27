<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'pubmysqlstage.edc.org';
$CFG->dbname    = 'moodle_idd_sandbox';
$CFG->dbuser    = 'iddmoodle';
$CFG->dbpass    = 'Rkonv2.h9ov24rF&lhs';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8_general_ci',
);

$CFG->wwwroot   = 'https://idd-moodle-sandbox.edc.org';
$CFG->dataroot  = '/home/www/stage/idd-moodle-sandbox.edc.org/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
