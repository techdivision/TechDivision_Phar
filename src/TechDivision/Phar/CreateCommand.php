<?php

/**
 * TechDivision\Phar\CreateCommand
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
 * Command implementation that creates a new PHAR archive.
 *
 * @category  Library
 * @package   TechDivision_Phar
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_Context
 */
class CreateCommand implements Command
{
    
    /**
     * Defines the command line argument to inkoke these command.
     * 
     * @var string
     */
    const COMMAND = 'create';
    
    /**
     * Initializes the command with the receiver instance.
     * 
     * @param \TechDivision\Phar\Receiver $receiver The command receiver
     * 
     * @return void
     */
    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }
    
    /**
     * Configures the command instance to create a new PHAR archive.
     * 
     * @return void
     */
    public function configure()
    {
        // configure receiver here
    }
    
    /**
     * Executes the command instance and creates a new PHAR archive.
     * 
     * @return void
     */
    public function execute()
    {
        $this->receiver->excecute();
    }
}
