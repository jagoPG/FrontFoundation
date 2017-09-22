<?php

/* node_modules/parsleyjs/dist/i18n/zh_cn.extra.js */
class __TwigTemplate_21ac1c9c0e8e3a4a6d01b44fd1a7bbd4e09efe0def5b1ef4efbc502cce5cb46b extends Twig_Template
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
        $__internal_e39cf54b482c868a2ddc4a0292c8730f755be4b571059a7657ef9178c84c6508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39cf54b482c868a2ddc4a0292c8730f755be4b571059a7657ef9178c84c6508->enter($__internal_e39cf54b482c868a2ddc4a0292c8730f755be4b571059a7657ef9178c84c6508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/zh_cn.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('zh-cn', {
  dateiso: \"请输入正确格式的日期 (YYYY-MM-DD).\"
});
";
        
        $__internal_e39cf54b482c868a2ddc4a0292c8730f755be4b571059a7657ef9178c84c6508->leave($__internal_e39cf54b482c868a2ddc4a0292c8730f755be4b571059a7657ef9178c84c6508_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/zh_cn.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('zh-cn', {
  dateiso: \"请输入正确格式的日期 (YYYY-MM-DD).\"
});
", "node_modules/parsleyjs/dist/i18n/zh_cn.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/zh_cn.extra.js");
    }
}
