<?php

/* node_modules/core-js/modules/es6.string.trim.js */
class __TwigTemplate_915ef0c2f9ecd0bacb0eaf7d7b40c577fb72717c030f2b07629e4333c165080a extends Twig_Template
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
        $__internal_bcf4259911542c7169256e9f431101fc2f8a700ac2eb04ef5c4f60ef2b0950ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf4259911542c7169256e9f431101fc2f8a700ac2eb04ef5c4f60ef2b0950ee->enter($__internal_bcf4259911542c7169256e9f431101fc2f8a700ac2eb04ef5c4f60ef2b0950ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.trim.js"));

        // line 1
        echo "'use strict';
// 21.1.3.25 String.prototype.trim()
require('./_string-trim')('trim', function (\$trim) {
  return function trim() {
    return \$trim(this, 3);
  };
});
";
        
        $__internal_bcf4259911542c7169256e9f431101fc2f8a700ac2eb04ef5c4f60ef2b0950ee->leave($__internal_bcf4259911542c7169256e9f431101fc2f8a700ac2eb04ef5c4f60ef2b0950ee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.trim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// 21.1.3.25 String.prototype.trim()
require('./_string-trim')('trim', function (\$trim) {
  return function trim() {
    return \$trim(this, 3);
  };
});
", "node_modules/core-js/modules/es6.string.trim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.trim.js");
    }
}
