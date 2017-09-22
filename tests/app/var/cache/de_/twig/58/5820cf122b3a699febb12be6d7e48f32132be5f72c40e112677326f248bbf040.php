<?php

/* node_modules/core-js/library/modules/_fails-is-regexp.js */
class __TwigTemplate_17b6456b613df7617922c5756a75b8af063fb13e51e6ba98344cf556f0c5c13a extends Twig_Template
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
        $__internal_6654487eca7111cbd370112bcc96d7c079bfdb0d2540b3f7fb9ed4329a79f7fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6654487eca7111cbd370112bcc96d7c079bfdb0d2540b3f7fb9ed4329a79f7fd->enter($__internal_6654487eca7111cbd370112bcc96d7c079bfdb0d2540b3f7fb9ed4329a79f7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_fails-is-regexp.js"));

        // line 1
        echo "var MATCH = require('./_wks')('match');
module.exports = function (KEY) {
  var re = /./;
  try {
    '/./'[KEY](re);
  } catch (e) {
    try {
      re[MATCH] = false;
      return !'/./'[KEY](re);
    } catch (f) { /* empty */ }
  } return true;
};
";
        
        $__internal_6654487eca7111cbd370112bcc96d7c079bfdb0d2540b3f7fb9ed4329a79f7fd->leave($__internal_6654487eca7111cbd370112bcc96d7c079bfdb0d2540b3f7fb9ed4329a79f7fd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_fails-is-regexp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var MATCH = require('./_wks')('match');
module.exports = function (KEY) {
  var re = /./;
  try {
    '/./'[KEY](re);
  } catch (e) {
    try {
      re[MATCH] = false;
      return !'/./'[KEY](re);
    } catch (f) { /* empty */ }
  } return true;
};
", "node_modules/core-js/library/modules/_fails-is-regexp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_fails-is-regexp.js");
    }
}
