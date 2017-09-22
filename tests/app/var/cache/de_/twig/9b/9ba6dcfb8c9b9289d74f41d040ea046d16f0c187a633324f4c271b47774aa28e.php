<?php

/* node_modules/core-js/library/es6/weak-map.js */
class __TwigTemplate_5cb8ea1b2a070ed0fadccdf974e73f384028947bf38b52ef4e52c18250e2fa9d extends Twig_Template
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
        $__internal_52deb3a8dc1a540786c9ccf5cc57c0c312f8fca4b2190197b40668832da13231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52deb3a8dc1a540786c9ccf5cc57c0c312f8fca4b2190197b40668832da13231->enter($__internal_52deb3a8dc1a540786c9ccf5cc57c0c312f8fca4b2190197b40668832da13231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/es6/weak-map.js"));

        // line 1
        echo "require('../modules/es6.object.to-string');
require('../modules/es6.array.iterator');
require('../modules/es6.weak-map');
module.exports = require('../modules/_core').WeakMap;
";
        
        $__internal_52deb3a8dc1a540786c9ccf5cc57c0c312f8fca4b2190197b40668832da13231->leave($__internal_52deb3a8dc1a540786c9ccf5cc57c0c312f8fca4b2190197b40668832da13231_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/es6/weak-map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.object.to-string');
require('../modules/es6.array.iterator');
require('../modules/es6.weak-map');
module.exports = require('../modules/_core').WeakMap;
", "node_modules/core-js/library/es6/weak-map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/es6/weak-map.js");
    }
}
