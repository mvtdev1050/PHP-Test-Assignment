<?php

namespace App\Services;

use App\Traits\SymphonyClient;

class AuthorService
{
    use SymphonyClient;

    /**
     * get authors via api call
     */
    public function getAuthors()
    {
        return $this->get($this->url('authors'));
    }

    /**
     * get author by id via api call
     * 
     * @param int $id
     */
    public function getAuthorDetails($id)
    {
        return $this->get($this->url("authors/$id"));
    }

    /**
     * delete author by id via api call
     * 
     * @param int $id
     */
    public function deleteAuthor($id)
    {
        return $this->delete($this->url("authors/$id"));
    }
}
