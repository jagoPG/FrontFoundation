<?php

/* node_modules/core-js/modules/es6.string.sup.js */
class __TwigTemplate_920d216d783da2dde73828d608f004a43ba7672adb1552b5a7df56c9a915c8be extends Twig_Template
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
        $__internal_4855f845a45d787c73f2cf7d417f11b38cc2fcde57e983ecb5a67bbf8b5edf13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4855f845a45d787c73f2cf7d417f11b38cc2fcde57e983ecb5a67bbf8b5edf13->enter($__internal_4855f845a45d787c73f2cf7d417f11b38cc2fcde57e983ecb5a67bbf8b5edf13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.sup.js"));

        // line 1
        echo "'use strict';
// B.2.3.14 String.prototype.sup()
require('./_string-html')('sup', function (createHTML) {
  return function sup() {
    return createHTML(this, 'sup', '', '');
  };
});
";
        
        $__internal_4855f845a45d787c73f2cf7d417f11b38cc2fcde57e983ecb5a67bbf8b5edf13->leave($__internal_4855f845a45d787c73f2cf7d417f11b38cc2fcde57e983ecb5a67bbf8b5edf13_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.sup.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// B.2.3.14 String.prototype.sup()
require('./_string-html')('sup', function (createHTML) {
  return function sup() {
    return createHTML(this, 'sup', '', '');
  };
});
", "node_modules/core-js/modules/es6.string.sup.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.sup.js");
    }
}
