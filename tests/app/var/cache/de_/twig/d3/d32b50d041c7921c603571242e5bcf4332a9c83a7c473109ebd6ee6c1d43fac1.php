<?php

/* node_modules/es5-ext/test/error/#/throw.js */
class __TwigTemplate_35cc5a138ff603ce27600157017dc1bea8c2e31f116bbb6c68eebc575e5b5be5 extends Twig_Template
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
        $__internal_dccda263e7ed6b67d41916402c083303e498de3977039dc97190dba10ddc97d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dccda263e7ed6b67d41916402c083303e498de3977039dc97190dba10ddc97d4->enter($__internal_dccda263e7ed6b67d41916402c083303e498de3977039dc97190dba10ddc97d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/error/#/throw.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar e = new Error();
\ttry {
\t\tt.call(e);
\t} catch (e2) {
\t\ta(e2, e);
\t}
};
";
        
        $__internal_dccda263e7ed6b67d41916402c083303e498de3977039dc97190dba10ddc97d4->leave($__internal_dccda263e7ed6b67d41916402c083303e498de3977039dc97190dba10ddc97d4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/error/#/throw.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar e = new Error();
\ttry {
\t\tt.call(e);
\t} catch (e2) {
\t\ta(e2, e);
\t}
};
", "node_modules/es5-ext/test/error/#/throw.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/error/#/throw.js");
    }
}
