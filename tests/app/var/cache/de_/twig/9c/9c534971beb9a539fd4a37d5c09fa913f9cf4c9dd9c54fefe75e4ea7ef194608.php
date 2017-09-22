<?php

/* node_modules/core-js/library/modules/es6.string.sup.js */
class __TwigTemplate_2188182dbb038143e47684af58318c441478ebc1fcb44b2274e84ce9fc1b8d7d extends Twig_Template
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
        $__internal_7baf91328dbcd432b0f09996ab0cda4f4f414300cc6829c8d18904c1c68930c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7baf91328dbcd432b0f09996ab0cda4f4f414300cc6829c8d18904c1c68930c1->enter($__internal_7baf91328dbcd432b0f09996ab0cda4f4f414300cc6829c8d18904c1c68930c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.string.sup.js"));

        // line 1
        echo "'use strict';
// B.2.3.14 String.prototype.sup()
require('./_string-html')('sup', function (createHTML) {
  return function sup() {
    return createHTML(this, 'sup', '', '');
  };
});
";
        
        $__internal_7baf91328dbcd432b0f09996ab0cda4f4f414300cc6829c8d18904c1c68930c1->leave($__internal_7baf91328dbcd432b0f09996ab0cda4f4f414300cc6829c8d18904c1c68930c1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.string.sup.js";
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
", "node_modules/core-js/library/modules/es6.string.sup.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.string.sup.js");
    }
}
