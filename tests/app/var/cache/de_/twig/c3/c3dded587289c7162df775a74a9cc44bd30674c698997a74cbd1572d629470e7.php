<?php

/* node_modules/core-js/fn/typed/uint32-array.js */
class __TwigTemplate_b72fcc046ce02d89ecbdc0eb8a05646f7b3ea5bb176042599b65170d2582bdf4 extends Twig_Template
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
        $__internal_c41bf8f280769a4a89fc19ce37e037defcf5896f177e05f08d66fc24056a5a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c41bf8f280769a4a89fc19ce37e037defcf5896f177e05f08d66fc24056a5a67->enter($__internal_c41bf8f280769a4a89fc19ce37e037defcf5896f177e05f08d66fc24056a5a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/typed/uint32-array.js"));

        // line 1
        echo "require('../../modules/es6.typed.uint32-array');
module.exports = require('../../modules/_core').Uint32Array;
";
        
        $__internal_c41bf8f280769a4a89fc19ce37e037defcf5896f177e05f08d66fc24056a5a67->leave($__internal_c41bf8f280769a4a89fc19ce37e037defcf5896f177e05f08d66fc24056a5a67_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/typed/uint32-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.typed.uint32-array');
module.exports = require('../../modules/_core').Uint32Array;
", "node_modules/core-js/fn/typed/uint32-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/typed/uint32-array.js");
    }
}
