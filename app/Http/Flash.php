<?php


namespace App\Http;


class Flash
{
    public function info($message,$level = "")
    {
        session()->flash('flash_message',$message);
        if ($level !== "")
            session()->flash('flash_message_level',$level);
    }
}
