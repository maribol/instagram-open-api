<?php

/**
 * Copyright (c) 2014 Samuel Todosiciuc.
 * All rights reserved.
 *
 * @package     Instagram Open API
 * @author      Samuel Todosiciuc <samuel.todosiciuc@gmail.com>
 * @copyright   2014 Samuel Todosiciuc.
 * @link        https://github.com/maribol/
 */
class Instagram
{

  private $_api_url;

  function __construct()
  {
    $this->_api_url = 'http://api.codebuzz.ro/instagram/';
  }

  public function get($username)
  {

    $json = json_decode($this->fetch($username));
    return $json;
  }

  public function fetch($user)
  {
    $ch = curl_init();

    $query = array(
        'user' => $user
    );

    curl_setopt($ch, CURLOPT_URL, $this->_api_url . '?' . http_build_query($query));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $json = curl_exec($ch);
    curl_close($ch);
    return $json;
  }

}
