<?php

/* node_modules/fsevents/node_modules/uuid/index.js */
class __TwigTemplate_d81dee6f11d1e428adf04a63640bf7e5a5cd4c49663dc4ed549fcd2ebce655f9 extends Twig_Template
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
        $__internal_575d18968a7489980866f13c9afb708d3745c3111fd04281a692892db3b14192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575d18968a7489980866f13c9afb708d3745c3111fd04281a692892db3b14192->enter($__internal_575d18968a7489980866f13c9afb708d3745c3111fd04281a692892db3b14192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/uuid/index.js"));

        // line 1
        echo "var v1 = require('./v1');
var v4 = require('./v4');

var uuid = v4;
uuid.v1 = v1;
uuid.v4 = v4;

module.exports = uuid;
";
        
        $__internal_575d18968a7489980866f13c9afb708d3745c3111fd04281a692892db3b14192->leave($__internal_575d18968a7489980866f13c9afb708d3745c3111fd04281a692892db3b14192_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/uuid/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var v1 = require('./v1');
var v4 = require('./v4');

var uuid = v4;
uuid.v1 = v1;
uuid.v4 = v4;

module.exports = uuid;
", "node_modules/fsevents/node_modules/uuid/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/uuid/index.js");
    }
}
