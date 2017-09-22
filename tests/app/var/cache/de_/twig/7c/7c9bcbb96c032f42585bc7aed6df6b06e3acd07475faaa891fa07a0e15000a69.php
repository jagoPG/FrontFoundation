<?php

/* node_modules/core-js/library/es6/date.js */
class __TwigTemplate_924c1c9feee95489365e444a26139410bceaa9af9d186063a3a1aa3f3f7f917a extends Twig_Template
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
        $__internal_2c676f612f72e59fa8d0adf1e41e343d18314934e671f361d004e89818e35e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c676f612f72e59fa8d0adf1e41e343d18314934e671f361d004e89818e35e0b->enter($__internal_2c676f612f72e59fa8d0adf1e41e343d18314934e671f361d004e89818e35e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/es6/date.js"));

        // line 1
        echo "require('../modules/es6.date.now');
require('../modules/es6.date.to-json');
require('../modules/es6.date.to-iso-string');
require('../modules/es6.date.to-string');
require('../modules/es6.date.to-primitive');
module.exports = Date;
";
        
        $__internal_2c676f612f72e59fa8d0adf1e41e343d18314934e671f361d004e89818e35e0b->leave($__internal_2c676f612f72e59fa8d0adf1e41e343d18314934e671f361d004e89818e35e0b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/es6/date.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.date.now');
require('../modules/es6.date.to-json');
require('../modules/es6.date.to-iso-string');
require('../modules/es6.date.to-string');
require('../modules/es6.date.to-primitive');
module.exports = Date;
", "node_modules/core-js/library/es6/date.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/es6/date.js");
    }
}
