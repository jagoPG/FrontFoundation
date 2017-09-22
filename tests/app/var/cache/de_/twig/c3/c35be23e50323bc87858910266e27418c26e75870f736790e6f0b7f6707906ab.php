<?php

/* node_modules/lodash/fp/update.js */
class __TwigTemplate_72e170e650d3ad5522a1ce92e6befb5f6001f8337aa8e975f977988db27dbe88 extends Twig_Template
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
        $__internal_0d24ebc70a49a6d690ce6df2276296e241e4a532325228bafd90ca89cd296ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d24ebc70a49a6d690ce6df2276296e241e4a532325228bafd90ca89cd296ea9->enter($__internal_0d24ebc70a49a6d690ce6df2276296e241e4a532325228bafd90ca89cd296ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/update.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('update', require('../update'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_0d24ebc70a49a6d690ce6df2276296e241e4a532325228bafd90ca89cd296ea9->leave($__internal_0d24ebc70a49a6d690ce6df2276296e241e4a532325228bafd90ca89cd296ea9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/update.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('update', require('../update'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/update.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/update.js");
    }
}
