<?php

namespace WebMerge\Responses;

class JSONData extends \WebMerge\Responses\Data {

    /**
     * Return response contents as an array.
     *
     * @return array
     *   An array of the response contents.
     */
    public function asArray()
    {
        return $this->contents ? json_decode($this->contents, true) : [];
    }
}
