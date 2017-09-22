<?php

/* node_modules/es5-ext/test/object/map-keys.js */
class __TwigTemplate_24deeed5544cf60ead22502c9bdbc49380b6a3dce4408864924a9434eed5d654 extends Twig_Template
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
        $__internal_6a7fb7ae04977ec82e6467db246fdb14040ee881c3984dcf23786929072aad74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a7fb7ae04977ec82e6467db246fdb14040ee881c3984dcf23786929072aad74->enter($__internal_6a7fb7ae04977ec82e6467db246fdb14040ee881c3984dcf23786929072aad74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/map-keys.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta.deep(t({ 1: 1, 2: 2, 3: 3 }, function (key, value) {
\t\treturn \"x\" + (key + value);
\t}), { x11: 1, x22: 2, x33: 3 });
};
";
        
        $__internal_6a7fb7ae04977ec82e6467db246fdb14040ee881c3984dcf23786929072aad74->leave($__internal_6a7fb7ae04977ec82e6467db246fdb14040ee881c3984dcf23786929072aad74_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/map-keys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta.deep(t({ 1: 1, 2: 2, 3: 3 }, function (key, value) {
\t\treturn \"x\" + (key + value);
\t}), { x11: 1, x22: 2, x33: 3 });
};
", "node_modules/es5-ext/test/object/map-keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/map-keys.js");
    }
}
