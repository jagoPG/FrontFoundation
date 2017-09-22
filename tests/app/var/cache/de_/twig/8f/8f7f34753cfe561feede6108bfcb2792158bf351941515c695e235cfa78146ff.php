<?php

/* node_modules/es5-ext/math/atanh/is-implemented.js */
class __TwigTemplate_0d4fabeb897696658ecd71c009b3e7aa563103926e16bc2a3b76aaa316b44e14 extends Twig_Template
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
        $__internal_ddbcf52da55b7535735d00face53f0b41b0aad61977c4f673a4da82d237f6a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbcf52da55b7535735d00face53f0b41b0aad61977c4f673a4da82d237f6a77->enter($__internal_ddbcf52da55b7535735d00face53f0b41b0aad61977c4f673a4da82d237f6a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/atanh/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar atanh = Math.atanh;
\tif (typeof atanh !== \"function\") return false;
\treturn Math.round(atanh(0.5) * 1e15) === 549306144334055;
};
";
        
        $__internal_ddbcf52da55b7535735d00face53f0b41b0aad61977c4f673a4da82d237f6a77->leave($__internal_ddbcf52da55b7535735d00face53f0b41b0aad61977c4f673a4da82d237f6a77_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/atanh/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar atanh = Math.atanh;
\tif (typeof atanh !== \"function\") return false;
\treturn Math.round(atanh(0.5) * 1e15) === 549306144334055;
};
", "node_modules/es5-ext/math/atanh/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/atanh/is-implemented.js");
    }
}
