<?php

/* node_modules/core-js/library/es7/string.js */
class __TwigTemplate_da59a6127258a66b382e36bcb55fe9eec6bd021227ea9badd15d078e59175ea4 extends Twig_Template
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
        $__internal_2d7d0401ab08de974b9fc288d47ed8784642ebd837d39215970bb3e50a040efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7d0401ab08de974b9fc288d47ed8784642ebd837d39215970bb3e50a040efe->enter($__internal_2d7d0401ab08de974b9fc288d47ed8784642ebd837d39215970bb3e50a040efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/es7/string.js"));

        // line 1
        echo "require('../modules/es7.string.at');
require('../modules/es7.string.pad-start');
require('../modules/es7.string.pad-end');
require('../modules/es7.string.trim-left');
require('../modules/es7.string.trim-right');
require('../modules/es7.string.match-all');
module.exports = require('../modules/_core').String;
";
        
        $__internal_2d7d0401ab08de974b9fc288d47ed8784642ebd837d39215970bb3e50a040efe->leave($__internal_2d7d0401ab08de974b9fc288d47ed8784642ebd837d39215970bb3e50a040efe_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/es7/string.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.string.at');
require('../modules/es7.string.pad-start');
require('../modules/es7.string.pad-end');
require('../modules/es7.string.trim-left');
require('../modules/es7.string.trim-right');
require('../modules/es7.string.match-all');
module.exports = require('../modules/_core').String;
", "node_modules/core-js/library/es7/string.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/es7/string.js");
    }
}
