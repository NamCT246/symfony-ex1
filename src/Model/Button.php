<?php

namespace App\Model;

class Button
{
    /**
    * @var String
    */
    private $text;

    /**
     * Get the value of text
     *
     * @return  String
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of text
     *
     * @param  String  $text
     *
     * @return  self
     */
    public function setText(String $text)
    {
        $this->text = $text;

        return $this;
    }
}
