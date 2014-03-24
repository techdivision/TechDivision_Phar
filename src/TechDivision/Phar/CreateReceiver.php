<?php

/**
 * TechDivision\Phar\CreateReceiver
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category  Library
 * @package   TechDivision_Phar
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_Phar
 */

namespace TechDivision\Phar;

/**
 * Receiver implementation to create a new PHAR archive.
 *
 * @category  Library
 * @package   TechDivision_Phar
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_Context
 */
class CreateReceiver implements Receiver
{
    
    /**
     * The name of the PHAR archive.
     * 
     * @var string
     */
    protected $pharName;
    
    /**
     * The directory to create the PHAR archive from.
     * 
     * @var string
     */
    protected $directory;
    
    /**
     * The flags to create the PHAR archive with.
     * 
     * @var integer
     */
    protected $flags;
    
    /**
     * The PHAR archives alias.
     * 
     * @var string
     */
    protected $alias;
    
    /**
     * Initializes the instance with the data necessary to create a new PHAR archive.
     * 
     * @param striog  $pharName  The name of the PHAR archive
     * @param string  $directory The directory to create the PHAR archive from
     * @param integer $flags     The flags to create the PHAR archive with
     * @param string  $alias     The PHAR archives alias
     * 
     * @return void
     */
    public function __construct($pharName, $directory, $flags = null, $alias = null)
    {
        $this->pharName = $pharName;
        $this->directory = $directory;
        $this->flags = $flags;
        $this->alias = $alias;
    }
    
    /**
     * Exectues the receiver and creates a new PHAR archive based on the information
     * passed to the constructor.
     * 
     * @return void
     */
    public function execute()
    {
        try {
            $this->buildFromDirectory();
        } catch (\Exception $e) {
            error_log($e->__toString());
        }
    }
    
    /**
     * Creates a new PHAR archive based on the information passed to the constructor.
     * 
     * @return void
     */
    protected function buildFromDirectory()
    {
        $phar = new \Phar($this->pharName, $this->flags, $this->alias);
        $phar->buildFromDirectory($this->directory);
    }
}
