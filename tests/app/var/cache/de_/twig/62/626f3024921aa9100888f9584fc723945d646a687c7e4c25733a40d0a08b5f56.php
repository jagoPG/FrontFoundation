<?php

/* node_modules/es5-ext/test/math/imul/implement.js */
class __TwigTemplate_24064a695daa80ab255eb759c53a88b32d0cade9f8c9560a1a480fefef0bb25f extends Twig_Template
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
        $__internal_6c3c492e26e066829b9161307f0eab34e4ac97abe0d1cd1e56321d6d011ad0be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3c492e26e066829b9161307f0eab34e4ac97abe0d1cd1e56321d6d011ad0be->enter($__internal_6c3c492e26e066829b9161307f0eab34e4ac97abe0d1cd1e56321d6d011ad0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/imul/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../math/imul/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_6c3c492e26e066829b9161307f0eab34e4ac97abe0d1cd1e56321d6d011ad0be->leave($__internal_6c3c492e26e066829b9161307f0eab34e4ac97abe0d1cd1e56321d6d011ad0be_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/imul/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../math/imul/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/math/imul/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/imul/implement.js");
    }
}
