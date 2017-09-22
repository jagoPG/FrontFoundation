<?php

/* node_modules/regenerator-transform/lib/index.js */
class __TwigTemplate_92a5868b2dc977d415fb06c24553e420503d3e236c134bba24a7f0ccada83c57 extends Twig_Template
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
        $__internal_9ca3da94c3db1aa9b43d9606712b6421252c5d4b9e5a190000c4eb8e40694ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca3da94c3db1aa9b43d9606712b6421252c5d4b9e5a190000c4eb8e40694ffa->enter($__internal_9ca3da94c3db1aa9b43d9606712b6421252c5d4b9e5a190000c4eb8e40694ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/regenerator-transform/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function (context) {
  var plugin = {
    visitor: require(\"./visit\").visitor
  };

  // Some presets manually call child presets, but fail to pass along the
  // context object. Out of an abundance of caution, we verify that it
  // exists first to avoid causing unnecessary breaking changes.
  var version = context && context.version;

  // The \"name\" property is not allowed in older versions of Babel (6.x)
  // and will cause the plugin validator to throw an exception.
  if (version && parseInt(version, 10) >= 7) {
    plugin.name = \"regenerator-transform\";
  }

  return plugin;
};";
        
        $__internal_9ca3da94c3db1aa9b43d9606712b6421252c5d4b9e5a190000c4eb8e40694ffa->leave($__internal_9ca3da94c3db1aa9b43d9606712b6421252c5d4b9e5a190000c4eb8e40694ffa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/regenerator-transform/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

exports.default = function (context) {
  var plugin = {
    visitor: require(\"./visit\").visitor
  };

  // Some presets manually call child presets, but fail to pass along the
  // context object. Out of an abundance of caution, we verify that it
  // exists first to avoid causing unnecessary breaking changes.
  var version = context && context.version;

  // The \"name\" property is not allowed in older versions of Babel (6.x)
  // and will cause the plugin validator to throw an exception.
  if (version && parseInt(version, 10) >= 7) {
    plugin.name = \"regenerator-transform\";
  }

  return plugin;
};", "node_modules/regenerator-transform/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/regenerator-transform/lib/index.js");
    }
}
