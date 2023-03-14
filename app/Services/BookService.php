<?php

namespace App\Services;

use App\Traits\SymphonyClient;

class BookService
{
    use SymphonyClient;

    /**
     * get books via api call
     */
    public function getBooks()
    {
        return $this->get($this->url('books'));
    }

    /**
     * create book via api call
     * 
     * @param array $payload
     */
    public function createBook($payload)
    {
        $payload['isbn'] = '89897656454';
        $payload['format'] = 'format';
        $payload['number_of_pages'] = (int)$payload['number_of_pages'];
        $payload["release_date"] = "2023-03-13T05:16:11+00:00";

        return $this->post($this->url('books'), $payload);
    }


    /**
     * delete book by id via api call
     * 
     * @param int $id
     */
    public function deleteBook($id)
    {
        return $this->delete($this->url("books/$id"));
    }
}
