<?php

/* node_modules/es5-ext/object/is.js */
class __TwigTemplate_3c420a3fd610d70f8feab2a14548ccfcf655e8cb3d8d6fbfbee46e0f9a5c00d3 extends Twig_Template
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
        $__internal_ca4a507cc3e16c2f9062303d6949d5d2d2aaac123231dd6a3c2773b422d303c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca4a507cc3e16c2f9062303d6949d5d2d2aaac123231dd6a3c2773b422d303c5->enter($__internal_ca4a507cc3e16c2f9062303d6949d5d2d2aaac123231dd6a3c2773b422d303c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/is.js"));

        // line 1
        echo "// Implementation credits go to:
// http://wiki.ecmascript.org/doku.php?id=harmony:egal

\"use strict\";

var numIsNaN = require(\"../number/is-nan\");

module.exports = function (val1, val2) {
\treturn val1 === val2 ? val1 !== 0 || 1 / val1 === 1 / val2 : numIsNaN(val1) && numIsNaN(val2);
};
";
        
        $__internal_ca4a507cc3e16c2f9062303d6949d5d2d2aaac123231dd6a3c2773b422d303c5->leave($__internal_ca4a507cc3e16c2f9062303d6949d5d2d2aaac123231dd6a3c2773b422d303c5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/is.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Implementation credits go to:
// http://wiki.ecmascript.org/doku.php?id=harmony:egal

\"use strict\";

var numIsNaN = require(\"../number/is-nan\");

module.exports = function (val1, val2) {
\treturn val1 === val2 ? val1 !== 0 || 1 / val1 === 1 / val2 : numIsNaN(val1) && numIsNaN(val2);
};
", "node_modules/es5-ext/object/is.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/is.js");
    }
}
