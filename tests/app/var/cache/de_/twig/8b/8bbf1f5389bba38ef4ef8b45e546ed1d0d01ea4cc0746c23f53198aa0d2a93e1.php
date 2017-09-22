<?php

/* node_modules/core-js/modules/es7.string.at.js */
class __TwigTemplate_77bf1890d7711761368657c36ccb22a2cfe7d7ca3157d125f30a2f297e7a32d3 extends Twig_Template
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
        $__internal_e4232a8b297f33dd1e1ab510b12110c0ac06642b222ee3a7d9d3eb67163710b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4232a8b297f33dd1e1ab510b12110c0ac06642b222ee3a7d9d3eb67163710b5->enter($__internal_e4232a8b297f33dd1e1ab510b12110c0ac06642b222ee3a7d9d3eb67163710b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.string.at.js"));

        // line 1
        echo "'use strict';
// https://github.com/mathiasbynens/String.prototype.at
var \$export = require('./_export');
var \$at = require('./_string-at')(true);

\$export(\$export.P, 'String', {
  at: function at(pos) {
    return \$at(this, pos);
  }
});
";
        
        $__internal_e4232a8b297f33dd1e1ab510b12110c0ac06642b222ee3a7d9d3eb67163710b5->leave($__internal_e4232a8b297f33dd1e1ab510b12110c0ac06642b222ee3a7d9d3eb67163710b5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.string.at.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// https://github.com/mathiasbynens/String.prototype.at
var \$export = require('./_export');
var \$at = require('./_string-at')(true);

\$export(\$export.P, 'String', {
  at: function at(pos) {
    return \$at(this, pos);
  }
});
", "node_modules/core-js/modules/es7.string.at.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.string.at.js");
    }
}
