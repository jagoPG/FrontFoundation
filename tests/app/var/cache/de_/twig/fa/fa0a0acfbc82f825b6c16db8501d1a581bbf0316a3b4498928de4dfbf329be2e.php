<?php

/* node_modules/lodash/fp/takeRight.js */
class __TwigTemplate_6c2927b4a2748f529ea4bcf70441bc56d64194881cb53e58b0bd08e6127eaa30 extends Twig_Template
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
        $__internal_16251b50c618a48d1ae4e13761e906f418b2aa770ef57cc743cda72107d86a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16251b50c618a48d1ae4e13761e906f418b2aa770ef57cc743cda72107d86a1e->enter($__internal_16251b50c618a48d1ae4e13761e906f418b2aa770ef57cc743cda72107d86a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/takeRight.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('takeRight', require('../takeRight'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_16251b50c618a48d1ae4e13761e906f418b2aa770ef57cc743cda72107d86a1e->leave($__internal_16251b50c618a48d1ae4e13761e906f418b2aa770ef57cc743cda72107d86a1e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/takeRight.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('takeRight', require('../takeRight'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/takeRight.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/takeRight.js");
    }
}
