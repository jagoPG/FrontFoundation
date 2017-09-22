<?php

/* node_modules/core-js/library/modules/web.immediate.js */
class __TwigTemplate_aee0340bf9b811a815a451e7464240085983299a6e2f2073bb049708d5f6c3f1 extends Twig_Template
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
        $__internal_95b2fdb215285d73e7c84aa1e0476409586a02b8d7cdd28083c508f97b120616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b2fdb215285d73e7c84aa1e0476409586a02b8d7cdd28083c508f97b120616->enter($__internal_95b2fdb215285d73e7c84aa1e0476409586a02b8d7cdd28083c508f97b120616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/web.immediate.js"));

        // line 1
        echo "var \$export = require('./_export');
var \$task = require('./_task');
\$export(\$export.G + \$export.B, {
  setImmediate: \$task.set,
  clearImmediate: \$task.clear
});
";
        
        $__internal_95b2fdb215285d73e7c84aa1e0476409586a02b8d7cdd28083c508f97b120616->leave($__internal_95b2fdb215285d73e7c84aa1e0476409586a02b8d7cdd28083c508f97b120616_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/web.immediate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$export = require('./_export');
var \$task = require('./_task');
\$export(\$export.G + \$export.B, {
  setImmediate: \$task.set,
  clearImmediate: \$task.clear
});
", "node_modules/core-js/library/modules/web.immediate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/web.immediate.js");
    }
}
