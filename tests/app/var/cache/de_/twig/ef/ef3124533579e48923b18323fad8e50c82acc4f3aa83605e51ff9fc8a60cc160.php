<?php

/* node_modules/core-js/library/modules/_uid.js */
class __TwigTemplate_863439070245d3d15da2a41f9217402bb077778ed023071d8484f540b960de8f extends Twig_Template
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
        $__internal_e8560fb2c61aece161cff18d2cf62e767fc2d7acea26b403cb15297ea0dd6457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8560fb2c61aece161cff18d2cf62e767fc2d7acea26b403cb15297ea0dd6457->enter($__internal_e8560fb2c61aece161cff18d2cf62e767fc2d7acea26b403cb15297ea0dd6457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_uid.js"));

        // line 1
        echo "var id = 0;
var px = Math.random();
module.exports = function (key) {
  return 'Symbol('.concat(key === undefined ? '' : key, ')_', (++id + px).toString(36));
};
";
        
        $__internal_e8560fb2c61aece161cff18d2cf62e767fc2d7acea26b403cb15297ea0dd6457->leave($__internal_e8560fb2c61aece161cff18d2cf62e767fc2d7acea26b403cb15297ea0dd6457_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_uid.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var id = 0;
var px = Math.random();
module.exports = function (key) {
  return 'Symbol('.concat(key === undefined ? '' : key, ')_', (++id + px).toString(36));
};
", "node_modules/core-js/library/modules/_uid.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_uid.js");
    }
}
