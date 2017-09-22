<?php

/* node_modules/json-schema/draft-04/links */
class __TwigTemplate_daba7006ea56a8b0cf5fd1c40906a2125725ba453341098b59fe85910f1a2153 extends Twig_Template
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
        $__internal_df5790938a8c575cd978b1fdb832429a6a7249f89d2d3e58d36b6d797ec90b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5790938a8c575cd978b1fdb832429a6a7249f89d2d3e58d36b6d797ec90b76->enter($__internal_df5790938a8c575cd978b1fdb832429a6a7249f89d2d3e58d36b6d797ec90b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema/draft-04/links"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-04/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-04/links#\",
\t\"type\" : \"object\",
\t
\t\"properties\" : {
\t\t\"rel\" : {
\t\t\t\"type\" : \"string\"
\t\t},

\t\t\"href\" : {
\t\t\t\"type\" : \"string\"
\t\t},

\t\t\"template\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"targetSchema\" : {\"\$ref\" : \"http://json-schema.org/draft-04/hyper-schema#\"},
\t\t
\t\t\"method\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"default\" : \"GET\"
\t\t},
\t\t
\t\t\"enctype\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"properties\" : {
\t\t\t\"type\" : \"object\",
\t\t\t\"additionalProperties\" : {\"\$ref\" : \"http://json-schema.org/draft-04/hyper-schema#\"}
\t\t}
\t},
\t
\t\"required\" : [\"rel\", \"href\"],
\t
\t\"dependencies\" : {
\t\t\"enctype\" : \"method\"
\t}
}";
        
        $__internal_df5790938a8c575cd978b1fdb832429a6a7249f89d2d3e58d36b6d797ec90b76->leave($__internal_df5790938a8c575cd978b1fdb832429a6a7249f89d2d3e58d36b6d797ec90b76_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema/draft-04/links";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-04/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-04/links#\",
\t\"type\" : \"object\",
\t
\t\"properties\" : {
\t\t\"rel\" : {
\t\t\t\"type\" : \"string\"
\t\t},

\t\t\"href\" : {
\t\t\t\"type\" : \"string\"
\t\t},

\t\t\"template\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"targetSchema\" : {\"\$ref\" : \"http://json-schema.org/draft-04/hyper-schema#\"},
\t\t
\t\t\"method\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"default\" : \"GET\"
\t\t},
\t\t
\t\t\"enctype\" : {
\t\t\t\"type\" : \"string\"
\t\t},
\t\t
\t\t\"properties\" : {
\t\t\t\"type\" : \"object\",
\t\t\t\"additionalProperties\" : {\"\$ref\" : \"http://json-schema.org/draft-04/hyper-schema#\"}
\t\t}
\t},
\t
\t\"required\" : [\"rel\", \"href\"],
\t
\t\"dependencies\" : {
\t\t\"enctype\" : \"method\"
\t}
}", "node_modules/json-schema/draft-04/links", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema/draft-04/links");
    }
}
