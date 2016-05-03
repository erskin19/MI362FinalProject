<?php
class ProjectView
{
    private $projects;

    /**
     * Constructor
     * @param $site The Site object
     */
    public function __construct(Site $site) {
        $this->projects = new Projects($site);
    }

    /**
     * @return $html the html for projects
     */
    public function displayProjects()
    {
        $projectList = $this->projects->getAll();
        $projectList[0]->getId();
        $html = "";
        for ($i = 0; $i < count($projectList); $i++){
//            $html .= '<div class="col-3 col-t-4 col-m-12"><a class="project" id="'. $projectList[0]->getId()
//                .'" href="#popup"><img src="img/'.$projectList[$i]->getCover()
//                .'" alt="'.$projectList[$i]->getTitle().'" /></a></div>';
        }
        return $html;
    }
}