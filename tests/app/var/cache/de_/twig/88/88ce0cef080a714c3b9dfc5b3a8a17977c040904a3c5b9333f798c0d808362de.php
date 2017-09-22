<?php

/* node_modules/es5-ext/test/math/asinh/is-implemented.js */
class __TwigTemplate_87801d029188a0ede1e238114d3bcebc56977296814a309ba891935c7dca961b extends Twig_Template
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
        $__internal_926da3b85d278a90fba7a049ad69ad60f0c83f8bebdbfdc3a2d668d93d4622f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926da3b85d278a90fba7a049ad69ad60f0c83f8bebdbfdc3a2d668d93d4622f5->enter($__internal_926da3b85d278a90fba7a049ad69ad60f0c83f8bebdbfdc3a2d668d93d4622f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/asinh/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_926da3b85d278a90fba7a049ad69ad60f0c83f8bebdbfdc3a2d668d93d4622f5->leave($__internal_926da3b85d278a90fba7a049ad69ad60f0c83f8bebdbfdc3a2d668d93d4622f5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/asinh/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
", "node_modules/es5-ext/test/math/asinh/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/asinh/is-implemented.js");
    }
}
