<?php

/* node_modules/lodash/fp/findLastIndexFrom.js */
class __TwigTemplate_24ddd81b4cd535c2656634134f620de76d7a475c7f2cb46f50c15686d2198109 extends Twig_Template
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
        $__internal_36ca3311c98c522826778cc8b9bc4a710d96e983671d856c0a490a506ab03354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ca3311c98c522826778cc8b9bc4a710d96e983671d856c0a490a506ab03354->enter($__internal_36ca3311c98c522826778cc8b9bc4a710d96e983671d856c0a490a506ab03354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/findLastIndexFrom.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('findLastIndexFrom', require('../findLastIndex'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_36ca3311c98c522826778cc8b9bc4a710d96e983671d856c0a490a506ab03354->leave($__internal_36ca3311c98c522826778cc8b9bc4a710d96e983671d856c0a490a506ab03354_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/findLastIndexFrom.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('findLastIndexFrom', require('../findLastIndex'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/findLastIndexFrom.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/findLastIndexFrom.js");
    }
}
