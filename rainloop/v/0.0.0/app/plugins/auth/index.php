<?php

class AuthPlugin extends \RainLoop\Plugins\AbstractPlugin
{
    public function Init()
    {
        $this->addHook('filter.login-credentials', 'FilterLoginСredentials');
    }

    /**
     * @param string $sEmail
     * @param string $sLogin
     * @param string $sPassword
     *
     * @throws \RainLoop\Exceptions\ClientException
     */
    public function FilterLoginСredentials(&$sEmail, &$sLogin, &$sPassword)
    {

    }
}
