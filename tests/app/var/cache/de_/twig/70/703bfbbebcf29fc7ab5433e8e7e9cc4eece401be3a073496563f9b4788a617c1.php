<?php

/* node_modules/webpack/buildin/amd-options.js */
class __TwigTemplate_bc4e6601717e2cbff00300dadbb63fa524968c220aed09b87d5782b0cb173114 extends Twig_Template
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
        $__internal_1c7cb6ecfc420d36003ec89277eed00b0b79504491e00bf6d38eca85fd338fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c7cb6ecfc420d36003ec89277eed00b0b79504491e00bf6d38eca85fd338fd5->enter($__internal_1c7cb6ecfc420d36003ec89277eed00b0b79504491e00bf6d38eca85fd338fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/buildin/amd-options.js"));

        // line 1
        echo "/* globals __webpack_amd_options__ */
module.exports = __webpack_amd_options__;
";
        
        $__internal_1c7cb6ecfc420d36003ec89277eed00b0b79504491e00bf6d38eca85fd338fd5->leave($__internal_1c7cb6ecfc420d36003ec89277eed00b0b79504491e00bf6d38eca85fd338fd5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/buildin/amd-options.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* globals __webpack_amd_options__ */
module.exports = __webpack_amd_options__;
", "node_modules/webpack/buildin/amd-options.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/buildin/amd-options.js");
    }
}
