<?php

/* node_modules/es5-ext/array/#/splice/is-implemented.js */
class __TwigTemplate_69ac6af9503b91c3818a807e7caa9adedf55d97b288bc245de5569e9585d1a43 extends Twig_Template
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
        $__internal_b53aafd9030999b064d46c24a5283c306fec3993f3af4dba481e2bb91f460771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53aafd9030999b064d46c24a5283c306fec3993f3af4dba481e2bb91f460771->enter($__internal_b53aafd9030999b064d46c24a5283c306fec3993f3af4dba481e2bb91f460771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/splice/is-implemented.js"));

        // line 1
        echo "\"use strict\";

var SubArray = require(\"../../_sub-array-dummy-safe\");

module.exports = function () {
\treturn (new SubArray()).splice(0) instanceof SubArray;
};
";
        
        $__internal_b53aafd9030999b064d46c24a5283c306fec3993f3af4dba481e2bb91f460771->leave($__internal_b53aafd9030999b064d46c24a5283c306fec3993f3af4dba481e2bb91f460771_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/splice/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var SubArray = require(\"../../_sub-array-dummy-safe\");

module.exports = function () {
\treturn (new SubArray()).splice(0) instanceof SubArray;
};
", "node_modules/es5-ext/array/#/splice/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/splice/is-implemented.js");
    }
}
