<?php

/* node_modules/fsevents/node_modules/json-schema/draft-02/json-ref */
class __TwigTemplate_5bf74390b969abcf94d4ac9cb6081686b567e9af3935815231a8924459e9e129 extends Twig_Template
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
        $__internal_89477b1f69a333dfa7aa2f9d0bb91e1ee98ccac180f400b05727a0c82c03092f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89477b1f69a333dfa7aa2f9d0bb91e1ee98ccac180f400b05727a0c82c03092f->enter($__internal_89477b1f69a333dfa7aa2f9d0bb91e1ee98ccac180f400b05727a0c82c03092f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/draft-02/json-ref"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-02/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-02/json-ref#\",
\t
\t\"items\" : {\"\$ref\" : \"#\"},
\t\"additionalProperties\" : {\"\$ref\" : \"#\"},
\t
\t\"links\" : [
\t\t{
\t\t\t\"href\" : \"{\$ref}\",
\t\t\t\"rel\" : \"full\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{\$schema}\",
\t\t\t\"rel\" : \"describedby\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{id}\",
\t\t\t\"rel\" : \"self\"
\t\t}
\t],
\t
\t\"fragmentResolution\" : \"dot-delimited\"
}";
        
        $__internal_89477b1f69a333dfa7aa2f9d0bb91e1ee98ccac180f400b05727a0c82c03092f->leave($__internal_89477b1f69a333dfa7aa2f9d0bb91e1ee98ccac180f400b05727a0c82c03092f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/draft-02/json-ref";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-02/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-02/json-ref#\",
\t
\t\"items\" : {\"\$ref\" : \"#\"},
\t\"additionalProperties\" : {\"\$ref\" : \"#\"},
\t
\t\"links\" : [
\t\t{
\t\t\t\"href\" : \"{\$ref}\",
\t\t\t\"rel\" : \"full\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{\$schema}\",
\t\t\t\"rel\" : \"describedby\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{id}\",
\t\t\t\"rel\" : \"self\"
\t\t}
\t],
\t
\t\"fragmentResolution\" : \"dot-delimited\"
}", "node_modules/fsevents/node_modules/json-schema/draft-02/json-ref", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/draft-02/json-ref");
    }
}
