<?php

/* node_modules/lodash/fp/curryRightN.js */
class __TwigTemplate_eaa34dbed966bab8013d787a574347d4e9c48dbea2b228b14ac73b1fa4237556 extends Twig_Template
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
        $__internal_13b1ce100f353e983cb70a08e3121ecfe9a7f87a98dd4d1187de8de98aa7e7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b1ce100f353e983cb70a08e3121ecfe9a7f87a98dd4d1187de8de98aa7e7e7->enter($__internal_13b1ce100f353e983cb70a08e3121ecfe9a7f87a98dd4d1187de8de98aa7e7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/curryRightN.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('curryRightN', require('../curryRight'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_13b1ce100f353e983cb70a08e3121ecfe9a7f87a98dd4d1187de8de98aa7e7e7->leave($__internal_13b1ce100f353e983cb70a08e3121ecfe9a7f87a98dd4d1187de8de98aa7e7e7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/curryRightN.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('curryRightN', require('../curryRight'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/curryRightN.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/curryRightN.js");
    }
}
