<?php

use Caligrafy\Model;

class Project extends Model {

    public $id;
    public $title;
    public $description;
    public $created_at;
    public $modified_at;

    public function __construct()
    {
        $this->associate('projects');
        $this->users();

    }

    public function users()
    {
        return $this->belongsToMany('User','users');
    }


}