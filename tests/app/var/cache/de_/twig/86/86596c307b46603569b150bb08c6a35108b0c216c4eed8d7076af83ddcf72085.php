<?php

/* node_modules/lodash/fp/sortedLastIndexOf.js */
class __TwigTemplate_d49badc5b0170c7ab5acede32c41b8eaa4deb7269ee334ec0339fc1b11e0421b extends Twig_Template
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
        $__internal_5e236385e8e865a7396ae39b6331d906c5ccc561e134e3f180739056de4c83cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e236385e8e865a7396ae39b6331d906c5ccc561e134e3f180739056de4c83cf->enter($__internal_5e236385e8e865a7396ae39b6331d906c5ccc561e134e3f180739056de4c83cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/sortedLastIndexOf.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('sortedLastIndexOf', require('../sortedLastIndexOf'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_5e236385e8e865a7396ae39b6331d906c5ccc561e134e3f180739056de4c83cf->leave($__internal_5e236385e8e865a7396ae39b6331d906c5ccc561e134e3f180739056de4c83cf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/sortedLastIndexOf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('sortedLastIndexOf', require('../sortedLastIndexOf'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/sortedLastIndexOf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/sortedLastIndexOf.js");
    }
}
