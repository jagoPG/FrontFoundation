<?php

/* node_modules/lodash/_reEscape.js */
class __TwigTemplate_0b7f0cba7970cdfb87adce81eba8f0f151bf7d27f16f5302300c72eeb6898f06 extends Twig_Template
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
        $__internal_47d3c6a68268a342fb1dd28affa3eba9ddf6272a912775b9a3d2e57edcd2d802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d3c6a68268a342fb1dd28affa3eba9ddf6272a912775b9a3d2e57edcd2d802->enter($__internal_47d3c6a68268a342fb1dd28affa3eba9ddf6272a912775b9a3d2e57edcd2d802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_reEscape.js"));

        // line 1
        echo "/** Used to match template delimiters. */
var reEscape = /<%-([\\s\\S]+?)%>/g;

module.exports = reEscape;
";
        
        $__internal_47d3c6a68268a342fb1dd28affa3eba9ddf6272a912775b9a3d2e57edcd2d802->leave($__internal_47d3c6a68268a342fb1dd28affa3eba9ddf6272a912775b9a3d2e57edcd2d802_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_reEscape.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used to match template delimiters. */
var reEscape = /<%-([\\s\\S]+?)%>/g;

module.exports = reEscape;
", "node_modules/lodash/_reEscape.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_reEscape.js");
    }
}
