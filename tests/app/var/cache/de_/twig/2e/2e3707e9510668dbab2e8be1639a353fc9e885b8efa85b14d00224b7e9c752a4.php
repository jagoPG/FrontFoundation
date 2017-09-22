<?php

/* node_modules/lodash/fp/math.js */
class __TwigTemplate_3d04ef6abc1caa2398fb366b50bff2fcbeef71404a51ed46c3c4293edd027e98 extends Twig_Template
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
        $__internal_d49bbe3d2a17dfb9e9967d481f2f2f176804259ae17e5354dd8621178a005cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49bbe3d2a17dfb9e9967d481f2f2f176804259ae17e5354dd8621178a005cf9->enter($__internal_d49bbe3d2a17dfb9e9967d481f2f2f176804259ae17e5354dd8621178a005cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/math.js"));

        // line 1
        echo "var convert = require('./convert');
module.exports = convert(require('../math'));
";
        
        $__internal_d49bbe3d2a17dfb9e9967d481f2f2f176804259ae17e5354dd8621178a005cf9->leave($__internal_d49bbe3d2a17dfb9e9967d481f2f2f176804259ae17e5354dd8621178a005cf9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/math.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert');
module.exports = convert(require('../math'));
", "node_modules/lodash/fp/math.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/math.js");
    }
}
