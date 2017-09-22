<?php

/* node_modules/core-js/library/modules/es6.string.code-point-at.js */
class __TwigTemplate_3a6e95e9101063e20d80d9143c96f8806f8070940f29151e6d284049f49b9bec extends Twig_Template
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
        $__internal_71fe07a21096f49d352dae44c32ad30744df742f082d1500aeaa0b39cfddf8bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71fe07a21096f49d352dae44c32ad30744df742f082d1500aeaa0b39cfddf8bb->enter($__internal_71fe07a21096f49d352dae44c32ad30744df742f082d1500aeaa0b39cfddf8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.string.code-point-at.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var \$at = require('./_string-at')(false);
\$export(\$export.P, 'String', {
  // 21.1.3.3 String.prototype.codePointAt(pos)
  codePointAt: function codePointAt(pos) {
    return \$at(this, pos);
  }
});
";
        
        $__internal_71fe07a21096f49d352dae44c32ad30744df742f082d1500aeaa0b39cfddf8bb->leave($__internal_71fe07a21096f49d352dae44c32ad30744df742f082d1500aeaa0b39cfddf8bb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.string.code-point-at.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$export = require('./_export');
var \$at = require('./_string-at')(false);
\$export(\$export.P, 'String', {
  // 21.1.3.3 String.prototype.codePointAt(pos)
  codePointAt: function codePointAt(pos) {
    return \$at(this, pos);
  }
});
", "node_modules/core-js/library/modules/es6.string.code-point-at.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.string.code-point-at.js");
    }
}
