<?php

namespace YllyClicAndPay\Model\Request;

class Tech
{
    /**
     * @var string
     */
    private $browserUserAgent;

    /**
     * @var string
     */
    private $browserAccept;

    /**
     * @return string
     */
    public function getBrowserUserAgent()
    {
        return $this->browserUserAgent;
    }

    /**
     * @param string $browserUserAgent
     */
    public function setBrowserUserAgent($browserUserAgent)
    {
        $this->browserUserAgent = $browserUserAgent;
    }

    /**
     * @return string
     */
    public function getBrowserAccept()
    {
        return $this->browserAccept;
    }

    /**
     * @param string $browserAccept
     */
    public function setBrowserAccept($browserAccept)
    {
        $this->browserAccept = $browserAccept;
    }
}