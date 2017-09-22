<?php

/* node_modules/escope/bower.json */
class __TwigTemplate_5e9c801bdf59472736daa59a08c1f65061968825e4432f05c16838508eaf1ffa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eef6bd3593411693c70b2554dbbe2e61845fdc369b7ec67139d24c921f5dbfbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef6bd3593411693c70b2554dbbe2e61845fdc369b7ec67139d24c921f5dbfbf->enter($__internal_eef6bd3593411693c70b2554dbbe2e61845fdc369b7ec67139d24c921f5dbfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/escope/bower.json"));

        // line 1
        echo "{
  \"name\": \"escope\",
  \"version\": \"2.0.2-dev\",
  \"main\": \"escope.js\",
  \"dependencies\": {
    \"estraverse\": \">= 0.0.2\"
  },
  \"ignore\": [
    \"**/.*\",
    \"node_modules\",
    \"components\"
  ]
}
";
        
        $__internal_eef6bd3593411693c70b2554dbbe2e61845fdc369b7ec67139d24c921f5dbfbf->leave($__internal_eef6bd3593411693c70b2554dbbe2e61845fdc369b7ec67139d24c921f5dbfbf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/escope/bower.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"escope\",
  \"version\": \"2.0.2-dev\",
  \"main\": \"escope.js\",
  \"dependencies\": {
    \"estraverse\": \">= 0.0.2\"
  },
  \"ignore\": [
    \"**/.*\",
    \"node_modules\",
    \"components\"
  ]
}
", "node_modules/escope/bower.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/escope/bower.json");
    }
}
