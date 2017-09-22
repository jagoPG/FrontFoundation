<?php

/* node_modules/es6-weak-map/index.js */
class __TwigTemplate_856590f50f2a8d9ed2cde95be1d6b9adbab6e3d789da2ef8e27b853c58528f71 extends Twig_Template
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
        $__internal_d08de61d1367e6e4545ace14a4e9d34aae7a138e41aecb43e17ead14bae3ab00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08de61d1367e6e4545ace14a4e9d34aae7a138e41aecb43e17ead14bae3ab00->enter($__internal_d08de61d1367e6e4545ace14a4e9d34aae7a138e41aecb43e17ead14bae3ab00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-weak-map/index.js"));

        // line 1
        echo "'use strict';

module.exports = require('./is-implemented')() ? WeakMap : require('./polyfill');
";
        
        $__internal_d08de61d1367e6e4545ace14a4e9d34aae7a138e41aecb43e17ead14bae3ab00->leave($__internal_d08de61d1367e6e4545ace14a4e9d34aae7a138e41aecb43e17ead14bae3ab00_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-weak-map/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = require('./is-implemented')() ? WeakMap : require('./polyfill');
", "node_modules/es6-weak-map/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-weak-map/index.js");
    }
}
