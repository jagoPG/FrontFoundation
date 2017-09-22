<?php

/* node_modules/es5-ext/test/array/#/_compare-by-length.js */
class __TwigTemplate_2ce4f5f9a776fbedc71cfcdec6e7cc238afc528cf194fac8baaae7726b319ac3 extends Twig_Template
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
        $__internal_f05d8f9657d0fe839ce578dc5e0080062d8289113d2f26b3e906706029405315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05d8f9657d0fe839ce578dc5e0080062d8289113d2f26b3e906706029405315->enter($__internal_f05d8f9657d0fe839ce578dc5e0080062d8289113d2f26b3e906706029405315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/_compare-by-length.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar arr = [4, 5, 6], obj1 = { length: 8 }, obj2 = {}, obj3 = { length: 1 };

\ta.deep([arr, obj1, obj2, obj3].sort(t), [obj2, obj3, arr, obj1]);
};
";
        
        $__internal_f05d8f9657d0fe839ce578dc5e0080062d8289113d2f26b3e906706029405315->leave($__internal_f05d8f9657d0fe839ce578dc5e0080062d8289113d2f26b3e906706029405315_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/_compare-by-length.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar arr = [4, 5, 6], obj1 = { length: 8 }, obj2 = {}, obj3 = { length: 1 };

\ta.deep([arr, obj1, obj2, obj3].sort(t), [obj2, obj3, arr, obj1]);
};
", "node_modules/es5-ext/test/array/#/_compare-by-length.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/_compare-by-length.js");
    }
}
