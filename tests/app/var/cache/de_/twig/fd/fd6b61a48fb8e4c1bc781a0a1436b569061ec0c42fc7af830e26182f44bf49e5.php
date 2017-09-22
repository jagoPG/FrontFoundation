<?php

/* node_modules/json-schema/draft-03/json-ref */
class __TwigTemplate_065f84ec615b8ef1493cc5e8081975e703677cc5119d1ea59774bd89bd4f607a extends Twig_Template
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
        $__internal_13108633011ade14b217033633c5cf3369e0e7de13b014f0eabd654c6e6ce4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13108633011ade14b217033633c5cf3369e0e7de13b014f0eabd654c6e6ce4d2->enter($__internal_13108633011ade14b217033633c5cf3369e0e7de13b014f0eabd654c6e6ce4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema/draft-03/json-ref"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-03/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-03/json-ref#\",
\t
\t\"additionalItems\" : {\"\$ref\" : \"#\"},
\t\"additionalProperties\" : {\"\$ref\" : \"#\"},
\t
\t\"links\" : [
\t\t{
\t\t\t\"href\" : \"{id}\",
\t\t\t\"rel\" : \"self\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{\$ref}\",
\t\t\t\"rel\" : \"full\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{\$schema}\",
\t\t\t\"rel\" : \"describedby\"
\t\t}
\t],
\t
\t\"fragmentResolution\" : \"dot-delimited\"
}";
        
        $__internal_13108633011ade14b217033633c5cf3369e0e7de13b014f0eabd654c6e6ce4d2->leave($__internal_13108633011ade14b217033633c5cf3369e0e7de13b014f0eabd654c6e6ce4d2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema/draft-03/json-ref";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-03/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-03/json-ref#\",
\t
\t\"additionalItems\" : {\"\$ref\" : \"#\"},
\t\"additionalProperties\" : {\"\$ref\" : \"#\"},
\t
\t\"links\" : [
\t\t{
\t\t\t\"href\" : \"{id}\",
\t\t\t\"rel\" : \"self\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{\$ref}\",
\t\t\t\"rel\" : \"full\"
\t\t},
\t\t
\t\t{
\t\t\t\"href\" : \"{\$schema}\",
\t\t\t\"rel\" : \"describedby\"
\t\t}
\t],
\t
\t\"fragmentResolution\" : \"dot-delimited\"
}", "node_modules/json-schema/draft-03/json-ref", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema/draft-03/json-ref");
    }
}
