<?php

/* node_modules/fsevents/node_modules/mkdirp/examples/pow.js */
class __TwigTemplate_c658055904e35a311be473ffce025acb2448be3fe5a8080a71099483d84ff53d extends Twig_Template
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
        $__internal_341e34a4941abb7a2a1ed87c821c70df27f774e3d9898c5f32b88b97e4da6a75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341e34a4941abb7a2a1ed87c821c70df27f774e3d9898c5f32b88b97e4da6a75->enter($__internal_341e34a4941abb7a2a1ed87c821c70df27f774e3d9898c5f32b88b97e4da6a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/mkdirp/examples/pow.js"));

        // line 1
        echo "var mkdirp = require('mkdirp');

mkdirp('/tmp/foo/bar/baz', function (err) {
    if (err) console.error(err)
    else console.log('pow!')
});
";
        
        $__internal_341e34a4941abb7a2a1ed87c821c70df27f774e3d9898c5f32b88b97e4da6a75->leave($__internal_341e34a4941abb7a2a1ed87c821c70df27f774e3d9898c5f32b88b97e4da6a75_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/mkdirp/examples/pow.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var mkdirp = require('mkdirp');

mkdirp('/tmp/foo/bar/baz', function (err) {
    if (err) console.error(err)
    else console.log('pow!')
});
", "node_modules/fsevents/node_modules/mkdirp/examples/pow.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/mkdirp/examples/pow.js");
    }
}
