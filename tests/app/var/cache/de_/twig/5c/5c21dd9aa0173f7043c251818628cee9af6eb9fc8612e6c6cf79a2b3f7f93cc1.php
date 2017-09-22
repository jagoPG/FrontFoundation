<?php

/* node_modules/fsevents/node_modules/rc/node_modules/minimist/example/parse.js */
class __TwigTemplate_851ed12d7185975b584cc697068b5ebcd9dba5e7ef8f0e9009c891635b133cc4 extends Twig_Template
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
        $__internal_4202c6551ea50429da2fd4fc93760326ef6c210afb41367f17df9038131c1705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4202c6551ea50429da2fd4fc93760326ef6c210afb41367f17df9038131c1705->enter($__internal_4202c6551ea50429da2fd4fc93760326ef6c210afb41367f17df9038131c1705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/rc/node_modules/minimist/example/parse.js"));

        // line 1
        echo "var argv = require('../')(process.argv.slice(2));
console.dir(argv);
";
        
        $__internal_4202c6551ea50429da2fd4fc93760326ef6c210afb41367f17df9038131c1705->leave($__internal_4202c6551ea50429da2fd4fc93760326ef6c210afb41367f17df9038131c1705_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/rc/node_modules/minimist/example/parse.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var argv = require('../')(process.argv.slice(2));
console.dir(argv);
", "node_modules/fsevents/node_modules/rc/node_modules/minimist/example/parse.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/rc/node_modules/minimist/example/parse.js");
    }
}
