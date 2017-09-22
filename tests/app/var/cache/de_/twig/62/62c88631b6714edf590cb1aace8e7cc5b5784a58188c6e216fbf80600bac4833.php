<?php

/* node_modules/mkdirp/node_modules/minimist/example/parse.js */
class __TwigTemplate_191707d561cacc7a9192caa2798dd72b66cfcdc815c7f575767d00810fb47137 extends Twig_Template
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
        $__internal_c7b43572e4124ffe252451916bed06c9e9cd8da4f2114331e7771ecf290251a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b43572e4124ffe252451916bed06c9e9cd8da4f2114331e7771ecf290251a8->enter($__internal_c7b43572e4124ffe252451916bed06c9e9cd8da4f2114331e7771ecf290251a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/node_modules/minimist/example/parse.js"));

        // line 1
        echo "var argv = require('../')(process.argv.slice(2));
console.dir(argv);
";
        
        $__internal_c7b43572e4124ffe252451916bed06c9e9cd8da4f2114331e7771ecf290251a8->leave($__internal_c7b43572e4124ffe252451916bed06c9e9cd8da4f2114331e7771ecf290251a8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/node_modules/minimist/example/parse.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var argv = require('../')(process.argv.slice(2));
console.dir(argv);
", "node_modules/mkdirp/node_modules/minimist/example/parse.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/node_modules/minimist/example/parse.js");
    }
}
