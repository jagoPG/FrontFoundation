<?php

/* node_modules/parsleyjs/src/i18n/zh_cn.extra.js */
class __TwigTemplate_5f125347232224a2034c487d1f9584d14c194fbe739a36680c8bdc27524414e0 extends Twig_Template
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
        $__internal_e8e572d770ef45bcb5b2c8606a64c9e6889fa8fee7335141f6d2a9564fecf85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e572d770ef45bcb5b2c8606a64c9e6889fa8fee7335141f6d2a9564fecf85a->enter($__internal_e8e572d770ef45bcb5b2c8606a64c9e6889fa8fee7335141f6d2a9564fecf85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/zh_cn.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('zh-cn', {
  dateiso: \"请输入正确格式的日期 (YYYY-MM-DD).\"
});
";
        
        $__internal_e8e572d770ef45bcb5b2c8606a64c9e6889fa8fee7335141f6d2a9564fecf85a->leave($__internal_e8e572d770ef45bcb5b2c8606a64c9e6889fa8fee7335141f6d2a9564fecf85a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/zh_cn.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('zh-cn', {
  dateiso: \"请输入正确格式的日期 (YYYY-MM-DD).\"
});
", "node_modules/parsleyjs/src/i18n/zh_cn.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/zh_cn.extra.js");
    }
}
