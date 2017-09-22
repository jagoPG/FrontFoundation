<?php

/* node_modules/lodash/fp/differenceBy.js */
class __TwigTemplate_49dcd439544694ebda00c826c64d06ca4cf0e6cb68881e997f1e6391fc1ad8fc extends Twig_Template
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
        $__internal_bcc7c64fb580c689ae8d15fb05d010318e3bb4d8199217c2a1d5e14ac6324795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc7c64fb580c689ae8d15fb05d010318e3bb4d8199217c2a1d5e14ac6324795->enter($__internal_bcc7c64fb580c689ae8d15fb05d010318e3bb4d8199217c2a1d5e14ac6324795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/differenceBy.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('differenceBy', require('../differenceBy'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_bcc7c64fb580c689ae8d15fb05d010318e3bb4d8199217c2a1d5e14ac6324795->leave($__internal_bcc7c64fb580c689ae8d15fb05d010318e3bb4d8199217c2a1d5e14ac6324795_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/differenceBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('differenceBy', require('../differenceBy'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/differenceBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/differenceBy.js");
    }
}
