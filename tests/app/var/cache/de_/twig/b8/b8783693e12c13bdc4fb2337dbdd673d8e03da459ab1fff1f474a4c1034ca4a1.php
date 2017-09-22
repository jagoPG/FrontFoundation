<?php

/* node_modules/es6-set/ext/get-last.js */
class __TwigTemplate_ff738f7688570397c724c58a8bc7c48fb4475c631a2becac2ec58fd283b90137 extends Twig_Template
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
        $__internal_3848575c32c678fd8147c09be97eb182d4a49ab358016ae128997654f7b37077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3848575c32c678fd8147c09be97eb182d4a49ab358016ae128997654f7b37077->enter($__internal_3848575c32c678fd8147c09be97eb182d4a49ab358016ae128997654f7b37077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/ext/get-last.js"));

        // line 1
        echo "'use strict';

module.exports = function () {
\tvar value, iterator = this.values(), item;
\twhile (true) {
\t\titem = iterator.next();
\t\tif (item.done) break;
\t\tvalue = item.value;
\t}
\treturn value;
};
";
        
        $__internal_3848575c32c678fd8147c09be97eb182d4a49ab358016ae128997654f7b37077->leave($__internal_3848575c32c678fd8147c09be97eb182d4a49ab358016ae128997654f7b37077_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/ext/get-last.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function () {
\tvar value, iterator = this.values(), item;
\twhile (true) {
\t\titem = iterator.next();
\t\tif (item.done) break;
\t\tvalue = item.value;
\t}
\treturn value;
};
", "node_modules/es6-set/ext/get-last.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/ext/get-last.js");
    }
}
