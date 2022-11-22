<?php

use Caligrafy\Controller;

class ProjectController extends Controller {

    // reads all projects
    public function index()
    {
        $this->associate('Project', 'projects');
        return api(array('projects' => $this->all()));

    }


    // add a project
    public function add()
    {
        $this->associate('Project', 'projects');
        $parameters = $this->request->parameters;

        $project = new Project();
        $project->title = isset($parameters['title'])? $parameters['title'] :  '';
        $project->description = isset($parameters['description'])? $parameters['description'] :  '';

        return api($this->save($project));

    }

    // find a specific project
    public function read_project()
    {
        $this->associate('Project', 'projects');
        return api($this->find()?? null);

    }

    // Edit a project
    public function update()
    {
        $this->associate('Project', 'projects');
        $parameters = $this->request->parameters;

        $project = $this->find()?? null;

        if (!$project) {
            return api("Project not found");
        }

        $project->title = isset($parameters['title'])? $parameters['title'] :  $project->title;
        $project->description = isset($parameters['description'])? $parameters['description'] :  $project->description;

        return api($this->save($project));

    }

    // Delete a project

    public function remove()
    {
        $this->associate('Project', 'projects');
        return api($this->delete());

    }






}