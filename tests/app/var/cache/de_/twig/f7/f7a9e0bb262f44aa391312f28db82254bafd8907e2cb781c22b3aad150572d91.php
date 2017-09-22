<?php

/* node_modules/fsevents/node_modules/util-deprecate/node.js */
class __TwigTemplate_2b0cd98e42ad92e35648745e9960aab99273cf27925a1977f47a8305478cfd0d extends Twig_Template
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
        $__internal_3f3df4230ff14a4f500eae8066d13c083820cce2b1f01fa59024943fa93782a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3df4230ff14a4f500eae8066d13c083820cce2b1f01fa59024943fa93782a9->enter($__internal_3f3df4230ff14a4f500eae8066d13c083820cce2b1f01fa59024943fa93782a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/util-deprecate/node.js"));

        // line 1
        echo "
/**
 * For Node.js, simply re-export the core `util.deprecate` function.
 */

module.exports = require('util').deprecate;
";
        
        $__internal_3f3df4230ff14a4f500eae8066d13c083820cce2b1f01fa59024943fa93782a9->leave($__internal_3f3df4230ff14a4f500eae8066d13c083820cce2b1f01fa59024943fa93782a9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/util-deprecate/node.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
/**
 * For Node.js, simply re-export the core `util.deprecate` function.
 */

module.exports = require('util').deprecate;
", "node_modules/fsevents/node_modules/util-deprecate/node.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/util-deprecate/node.js");
    }
}
