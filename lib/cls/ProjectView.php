<?php
class ProjectView
{
    private $projects;

    /**
     * Constructor
     * @param $site The Site object
     */
    public function __construct(Site $site) {
        $projects = new Projects($site);
    }

    /**
     * @return html for projects
     */
    public function displayProjects()
    {
        $projectList = $this->projects->getAll();
        $html = "";
        $html .= '<div class="col-3 col-t-4 col-m-12"><a class="project" id="'. $projectList[0]->getId()
            .'" href=""><img src="img/'.$projectList[0]->getCover()
            .'" alt="'.$projectList[0]->getTitle().'" /></a></div>';
        for ($i = 0; $i < count($projectList); $i++){
            $html .= '<div class="col-3 col-t-4 col-m-12"><a class="project" id="'. $projectList[$i]->getId()
                .'" href=""><img src="img/'.$projectList[$i]->getCover()
                .'" alt="'.$projectList[$i]->getTitle().'" /></a></div>';
        }
        return $html;
    }
}