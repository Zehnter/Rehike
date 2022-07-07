<?php
namespace Rehike\Model\Rehike\Debugger;

/**
 * Implements the $yt walker tab.
 * 
 * @author Taniko Yamamoto <kirasicecreamm@gmail.com>
 * @author The Rehike Developers
 */
class MYtWalker extends MTabContent
{
    public function __construct() {}

    public function addYt($yt)
    {
        $this->addCode(
            json_encode($yt, JSON_PRETTY_PRINT)
        );
    }
}