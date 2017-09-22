<?php

/* node_modules/es5-ext/math/asinh/is-implemented.js */
class __TwigTemplate_2b50919e56c9cea01402aa563bb3973a8242eb46cd9e4577db5524e06df55efa extends Twig_Template
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
        $__internal_6d9297519cc83ea6a62a24217fae19fdae4e9a299b3e9d9c8537ab85850d09e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9297519cc83ea6a62a24217fae19fdae4e9a299b3e9d9c8537ab85850d09e1->enter($__internal_6d9297519cc83ea6a62a24217fae19fdae4e9a299b3e9d9c8537ab85850d09e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/asinh/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar asinh = Math.asinh;
\tif (typeof asinh !== \"function\") return false;
\treturn asinh(2) === 1.4436354751788103;
};
";
        
        $__internal_6d9297519cc83ea6a62a24217fae19fdae4e9a299b3e9d9c8537ab85850d09e1->leave($__internal_6d9297519cc83ea6a62a24217fae19fdae4e9a299b3e9d9c8537ab85850d09e1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/asinh/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar asinh = Math.asinh;
\tif (typeof asinh !== \"function\") return false;
\treturn asinh(2) === 1.4436354751788103;
};
", "node_modules/es5-ext/math/asinh/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/asinh/is-implemented.js");
    }
}
