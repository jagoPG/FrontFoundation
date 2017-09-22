<?php

/* node_modules/es5-ext/test/string/#/@@iterator/is-implemented.js */
class __TwigTemplate_fde74c1781f0ee9266e210e92b402b8504f4f36970ea45510ea64fb55b56f7e3 extends Twig_Template
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
        $__internal_00cd2417046fbfbef4ee439ef6f5dd03eef1c84b25c1303cea6c022537dae3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00cd2417046fbfbef4ee439ef6f5dd03eef1c84b25c1303cea6c022537dae3df->enter($__internal_00cd2417046fbfbef4ee439ef6f5dd03eef1c84b25c1303cea6c022537dae3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/@@iterator/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_00cd2417046fbfbef4ee439ef6f5dd03eef1c84b25c1303cea6c022537dae3df->leave($__internal_00cd2417046fbfbef4ee439ef6f5dd03eef1c84b25c1303cea6c022537dae3df_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/@@iterator/is-implemented.js";
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
", "node_modules/es5-ext/test/string/#/@@iterator/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/@@iterator/is-implemented.js");
    }
}
