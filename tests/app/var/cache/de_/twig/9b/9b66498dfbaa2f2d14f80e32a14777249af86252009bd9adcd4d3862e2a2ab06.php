<?php

/* node_modules/core-js/library/modules/_core.js */
class __TwigTemplate_188a0d4532b1f263be3de9576a327ab97fe80a8d5343f5205f37ac0d56bd6663 extends Twig_Template
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
        $__internal_859cffe713204949e04866e1681350b044d74da74f184ca1138269ee2938a039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_859cffe713204949e04866e1681350b044d74da74f184ca1138269ee2938a039->enter($__internal_859cffe713204949e04866e1681350b044d74da74f184ca1138269ee2938a039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_core.js"));

        // line 1
        echo "var core = module.exports = { version: '2.5.1' };
if (typeof __e == 'number') __e = core; // eslint-disable-line no-undef
";
        
        $__internal_859cffe713204949e04866e1681350b044d74da74f184ca1138269ee2938a039->leave($__internal_859cffe713204949e04866e1681350b044d74da74f184ca1138269ee2938a039_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_core.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var core = module.exports = { version: '2.5.1' };
if (typeof __e == 'number') __e = core; // eslint-disable-line no-undef
", "node_modules/core-js/library/modules/_core.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_core.js");
    }
}
