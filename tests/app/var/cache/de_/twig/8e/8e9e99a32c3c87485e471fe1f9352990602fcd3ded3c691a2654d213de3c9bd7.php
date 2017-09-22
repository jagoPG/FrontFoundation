<?php

/* node_modules/lodash/fp/parseInt.js */
class __TwigTemplate_75a99edac1f48e4e71f365bfaa546fd54ab8fca7d4fd13e890073810d4dea7e4 extends Twig_Template
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
        $__internal_565412254cd9f49239e0b242dab07d6d377bb821b8b834a90df2c97ec433ce3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565412254cd9f49239e0b242dab07d6d377bb821b8b834a90df2c97ec433ce3d->enter($__internal_565412254cd9f49239e0b242dab07d6d377bb821b8b834a90df2c97ec433ce3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/parseInt.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('parseInt', require('../parseInt'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_565412254cd9f49239e0b242dab07d6d377bb821b8b834a90df2c97ec433ce3d->leave($__internal_565412254cd9f49239e0b242dab07d6d377bb821b8b834a90df2c97ec433ce3d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/parseInt.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('parseInt', require('../parseInt'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/parseInt.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/parseInt.js");
    }
}
