<?php

namespace Puzzle;

interface Configuration
{
    const
        SEPARATOR = '/';
    
    /**
     * Read value from configuration. Return default value if not found.
     *
     * @param string $fqn
     * @param mixed $defaultValue
     *
     * @return mixed
     */
    public function read($fqn, $defaultValue = null);
    
    /**
     * Read value from configuration. Throw exception if not found.
     *
     * @param string $fqn
     *
     * @return mixed
     *
     * @throws \Puzzle\Configuration\Exceptions\NotFound
     */
    public function readRequired($fqn);
    
    /**
     * Check value existence.
     *
     * @param string $fqn
     *
     * @return boolean
     */
    public function exists($fqn);
}