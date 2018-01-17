<?php

class Cache {
    private $page;
    private $expiration;
    private $buffer;

    function __construct($page)
    {
        $this->page = $page;
        $this->expiration = time() - 5;
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @return mixed
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * @param mixed $expiration
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;
    }

    /**
     * @return mixed
     */
    public function getBuffer()
    {
        return $this->buffer;
    }

    /**
     * @param mixed $buffer
     */
    public function setBuffer($buffer)
    {
        $this->buffer = $buffer;
    }

    public function cacheView()
    {
        $cache = '../../cache/' . $this->page . '.php';
        if (file_exists($cache) && filemtime($cache) > $this->expiration){
            readfile($cache);
            die();
    }
        //else{
        //    fopen($cache, 'w');
        //}
    }

    public function startBuffer(){
        ob_start();
    }

    public function endBuffer(){
        $this->buffer = ob_get_contents();
        ob_end_clean();
        file_put_contents('../../cache/' . $this->page . '.php', $this->buffer );
        echo $this->buffer;
    }
}