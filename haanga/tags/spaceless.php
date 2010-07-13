<?php

/**
 *  Spaceless custom tag
 *
 *  @author crodas
 */
class Spaceless_Tag
{
    /* This tag is a block */
    public $is_block  = TRUE;

    /**
     *  main()
     *
     *  This function contains the definition of spaceless
     *  tag, it is important not to refence to $this since it
     *  will copied and paste in the generated PHP code from the 
     *  template as a function.
     *
     *  It is also important to put the start and the end of the 
     *  function in new lines.
     *
     */
    static function main($html)
    {
        $regex = array(
            '/>[ \t\r\n]+</sU',
            '/^[ \t\r\n]+</sU',
            '/>[ \t\r\n]+$/sU',
        );
        $replaces = array('><', '<', '>');
        $html     = preg_replace($regex, $replaces, $html);
        return $html;
    }

}