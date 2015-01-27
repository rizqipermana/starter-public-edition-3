<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author Ivan Tcholakov <ivantcholakov@gmail.com>, 2013
 * @license The MIT License, http://opensource.org/licenses/MIT
 */

/**
 * How to recompile these LESS-sources:
 *
 * Make sure the destination folders and files are writable.
 * Open a terminal at the folder platform/www/ and write the following command:
 *
 * php cli.php less compile
 *
 * If you want to compile only chosen sources, then write a command like this:
 *
 * php cli.php less compile bootstrap-3 bootstrap-3-min
 */

$config['less_compile'] = array(

    array(
        'name' => 'test',
        'source' => FCPATH.'assets/less/test.less',
        'destination' => FCPATH.'assets/css/test.css',
        'compress' => false
    ),
    array(
        'name' => 'test-min',
        'source' => FCPATH.'assets/less/test.less',
        'destination' => FCPATH.'assets/css/test.min.css',
        'compress' => true
    ),

    array(
        'name' => 'bootstrap-3',
        'source' => FCPATH.'assets/less/lib/bootstrap-3/bootstrap.less',
        'destination' => FCPATH.'assets/css/lib/bootstrap-3/bootstrap.css',
        'compress' => false
    ),
    array(
        'name' => 'bootstrap-3-min',
        'source' => FCPATH.'assets/less/lib/bootstrap-3/bootstrap.less',
        'destination' => FCPATH.'assets/css/lib/bootstrap-3/bootstrap.min.css',
        'compress' => true
    ),

    array(
        'name' => 'bootstrap-3-theme',
        'source' => FCPATH.'assets/less/lib/bootstrap-3/theme.less',
        'destination' => FCPATH.'assets/css/lib/bootstrap-3/bootstrap-theme.css',
        'compress' => false
    ),
    array(
        'name' => 'bootstrap-3-theme-min',
        'source' => FCPATH.'assets/less/lib/bootstrap-3/theme.less',
        'destination' => FCPATH.'assets/css/lib/bootstrap-3/bootstrap-theme.min.css',
        'compress' => true
    ),

    array(
        'name' => 'font-awesome-4',
        'source' => FCPATH.'assets/less/lib/font-awesome-4/font-awesome.less',
        'destination' => FCPATH.'assets/css/lib/font-awesome-4/font-awesome.css',
        'compress' => false
    ),
    array(
        'name' => 'font-awesome-4-min',
        'source' => FCPATH.'assets/less/lib/font-awesome-4/font-awesome.less',
        'destination' => FCPATH.'assets/css/lib/font-awesome-4/font-awesome.min.css',
        'compress' => true
    ),

    array(
        'name' => 'bootstrap-chosen',
        'source' => FCPATH.'assets/less/lib/bootstrap-chosen/bootstrap-chosen.less',
        'destination' => FCPATH.'assets/css/lib/bootstrap-chosen/bootstrap-chosen.css',
        'compress' => false
    ),
    array(
        'name' => 'bootstrap-chosen-min',
        'source' => FCPATH.'assets/less/lib/bootstrap-chosen/bootstrap-chosen.less',
        'destination' => FCPATH.'assets/css/lib/bootstrap-chosen/bootstrap-chosen.min.css',
        'compress' => true
    ),

    array(
        'name' => 'yamm3',
        'source' => FCPATH.'assets/less/lib/yamm3/yamm.less',
        'destination' => FCPATH.'assets/css/lib/yamm3/yamm.css',
        'compress' => false
    ),
    array(
        'name' => 'yamm3-min',
        'source' => FCPATH.'assets/less/lib/yamm3/yamm.less',
        'destination' => FCPATH.'assets/css/lib/yamm3/yamm.min.css',
        'compress' => true
    ),

    array(
        'name' => 'jasny-bootstrap-3',
        'source' => FCPATH.'assets/less/lib/jasny-bootstrap-3/jasny-bootstrap-default.less',
        'destination' => FCPATH.'assets/css/lib/jasny-bootstrap-3/jasny-bootstrap.css',
        'compress' => false
    ),
    array(
        'name' => 'jasny-bootstrap-3-min',
        'source' => FCPATH.'assets/less/lib/jasny-bootstrap-3/jasny-bootstrap-default.less',
        'destination' => FCPATH.'assets/css/lib/jasny-bootstrap-3/jasny-bootstrap.min.css',
        'compress' => true
    ),

    array(
        'name' => 'bootstrap-social',
        'source' => FCPATH.'assets/less/lib/bootstrap-social/bootstrap-social-default.less',
        'destination' => FCPATH.'assets/css/lib/bootstrap-social/bootstrap-social.css',
        'compress' => false
    ),
    array(
        'name' => 'bootstrap-social-min',
        'source' => FCPATH.'assets/less/lib/bootstrap-social/bootstrap-social-default.less',
        'destination' => FCPATH.'assets/css/lib/bootstrap-social/bootstrap-social.min.css',
        'compress' => true
    ),

);
