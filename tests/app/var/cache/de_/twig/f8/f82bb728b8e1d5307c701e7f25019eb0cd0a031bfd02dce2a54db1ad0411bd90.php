<?php

/* node_modules/json-schema/draft-02/schema */
class __TwigTemplate_a4eca6d71b318fde8151c9b6b797289c73371984a8c67bc267af610759e879b6 extends Twig_Template
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
        $__internal_d9bc63030c0035f18ccbfb96273a1d5f2720ea7d396d7fccc0fdca466f0a2e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9bc63030c0035f18ccbfb96273a1d5f2720ea7d396d7fccc0fdca466f0a2e8c->enter($__internal_d9bc63030c0035f18ccbfb96273a1d5f2720ea7d396d7fccc0fdca466f0a2e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema/draft-02/schema"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-02/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-02/schema#\",
\t\"type\" : \"object\",
\t
\t\"properties\" : {
\t\t\"type\" : {
\t\t\t\"type\" : [\"string\", \"array\"],
\t\t\t\"items\" : {
\t\t\t\t\"type\" : [\"string\", {\"\$ref\" : \"#\"}]
\t\t\t},
\t\t\t\"optional\" : true,
\t\t\t\"uniqueItems\" : true,
\t\t\t\"default\" : \"any\"
\t\t},
\t\t
\t\t\"properties\" : {
\t\t\t\"type\" : \"object\",
\t\t\t\"additionalProperties\" : {\"\$ref\" : \"#\"},
\t\t\t\"optional\" : true,
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"items\" : {
\t\t\t\"type\" : [{\"\$ref\" : \"#\"}, \"array\"],
\t\t\t\"items\" : {\"\$ref\" : \"#\"},
\t\t\t\"optional\" : true,
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"optional\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"additionalProperties\" : {
\t\t\t\"type\" : [{\"\$ref\" : \"#\"}, \"boolean\"],
\t\t\t\"optional\" : true,
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"requires\" : {
\t\t\t\"type\" : [\"string\", {\"\$ref\" : \"#\"}],
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"minimum\" : {
\t\t\t\"type\" : \"number\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"maximum\" : {
\t\t\t\"type\" : \"number\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"minimumCanEqual\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"requires\" : \"minimum\",
\t\t\t\"default\" : true
\t\t},
\t\t
\t\t\"maximumCanEqual\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"requires\" : \"maximum\",
\t\t\t\"default\" : true
\t\t},
\t\t
\t\t\"minItems\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"optional\" : true,
\t\t\t\"minimum\" : 0,
\t\t\t\"default\" : 0
\t\t},
\t\t
\t\t\"maxItems\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"optional\" : true,
\t\t\t\"minimum\" : 0
\t\t},
\t\t
\t\t\"uniqueItems\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"pattern\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true,
\t\t\t\"format\" : \"regex\"
\t\t},
\t\t
\t\t\"minLength\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"optional\" : true,
\t\t\t\"minimum\" : 0,
\t\t\t\"default\" : 0
\t\t},
\t\t
\t\t\"maxLength\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"enum\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"optional\" : true,
\t\t\t\"minItems\" : 1,
\t\t\t\"uniqueItems\" : true
\t\t},
\t\t
\t\t\"title\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"description\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"format\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"contentEncoding\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"default\" : {
\t\t\t\"type\" : \"any\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"divisibleBy\" : {
\t\t\t\"type\" : \"number\",
\t\t\t\"minimum\" : 0,
\t\t\t\"minimumCanEqual\" : false,
\t\t\t\"optional\" : true,
\t\t\t\"default\" : 1
\t\t},
\t\t
\t\t\"disallow\" : {
\t\t\t\"type\" : [\"string\", \"array\"],
\t\t\t\"items\" : {\"type\" : \"string\"},
\t\t\t\"optional\" : true,
\t\t\t\"uniqueItems\" : true
\t\t},
\t\t
\t\t\"extends\" : {
\t\t\t\"type\" : [{\"\$ref\" : \"#\"}, \"array\"],
\t\t\t\"items\" : {\"\$ref\" : \"#\"},
\t\t\t\"optional\" : true,
\t\t\t\"default\" : {}
\t\t}
\t},
\t
\t\"optional\" : true,
\t\"default\" : {}
}";
        
        $__internal_d9bc63030c0035f18ccbfb96273a1d5f2720ea7d396d7fccc0fdca466f0a2e8c->leave($__internal_d9bc63030c0035f18ccbfb96273a1d5f2720ea7d396d7fccc0fdca466f0a2e8c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema/draft-02/schema";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-02/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-02/schema#\",
\t\"type\" : \"object\",
\t
\t\"properties\" : {
\t\t\"type\" : {
\t\t\t\"type\" : [\"string\", \"array\"],
\t\t\t\"items\" : {
\t\t\t\t\"type\" : [\"string\", {\"\$ref\" : \"#\"}]
\t\t\t},
\t\t\t\"optional\" : true,
\t\t\t\"uniqueItems\" : true,
\t\t\t\"default\" : \"any\"
\t\t},
\t\t
\t\t\"properties\" : {
\t\t\t\"type\" : \"object\",
\t\t\t\"additionalProperties\" : {\"\$ref\" : \"#\"},
\t\t\t\"optional\" : true,
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"items\" : {
\t\t\t\"type\" : [{\"\$ref\" : \"#\"}, \"array\"],
\t\t\t\"items\" : {\"\$ref\" : \"#\"},
\t\t\t\"optional\" : true,
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"optional\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"additionalProperties\" : {
\t\t\t\"type\" : [{\"\$ref\" : \"#\"}, \"boolean\"],
\t\t\t\"optional\" : true,
\t\t\t\"default\" : {}
\t\t},
\t\t
\t\t\"requires\" : {
\t\t\t\"type\" : [\"string\", {\"\$ref\" : \"#\"}],
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"minimum\" : {
\t\t\t\"type\" : \"number\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"maximum\" : {
\t\t\t\"type\" : \"number\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"minimumCanEqual\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"requires\" : \"minimum\",
\t\t\t\"default\" : true
\t\t},
\t\t
\t\t\"maximumCanEqual\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"requires\" : \"maximum\",
\t\t\t\"default\" : true
\t\t},
\t\t
\t\t\"minItems\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"optional\" : true,
\t\t\t\"minimum\" : 0,
\t\t\t\"default\" : 0
\t\t},
\t\t
\t\t\"maxItems\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"optional\" : true,
\t\t\t\"minimum\" : 0
\t\t},
\t\t
\t\t\"uniqueItems\" : {
\t\t\t\"type\" : \"boolean\",
\t\t\t\"optional\" : true,
\t\t\t\"default\" : false
\t\t},
\t\t
\t\t\"pattern\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true,
\t\t\t\"format\" : \"regex\"
\t\t},
\t\t
\t\t\"minLength\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"optional\" : true,
\t\t\t\"minimum\" : 0,
\t\t\t\"default\" : 0
\t\t},
\t\t
\t\t\"maxLength\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"enum\" : {
\t\t\t\"type\" : \"array\",
\t\t\t\"optional\" : true,
\t\t\t\"minItems\" : 1,
\t\t\t\"uniqueItems\" : true
\t\t},
\t\t
\t\t\"title\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"description\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"format\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"contentEncoding\" : {
\t\t\t\"type\" : \"string\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"default\" : {
\t\t\t\"type\" : \"any\",
\t\t\t\"optional\" : true
\t\t},
\t\t
\t\t\"divisibleBy\" : {
\t\t\t\"type\" : \"number\",
\t\t\t\"minimum\" : 0,
\t\t\t\"minimumCanEqual\" : false,
\t\t\t\"optional\" : true,
\t\t\t\"default\" : 1
\t\t},
\t\t
\t\t\"disallow\" : {
\t\t\t\"type\" : [\"string\", \"array\"],
\t\t\t\"items\" : {\"type\" : \"string\"},
\t\t\t\"optional\" : true,
\t\t\t\"uniqueItems\" : true
\t\t},
\t\t
\t\t\"extends\" : {
\t\t\t\"type\" : [{\"\$ref\" : \"#\"}, \"array\"],
\t\t\t\"items\" : {\"\$ref\" : \"#\"},
\t\t\t\"optional\" : true,
\t\t\t\"default\" : {}
\t\t}
\t},
\t
\t\"optional\" : true,
\t\"default\" : {}
}", "node_modules/json-schema/draft-02/schema", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema/draft-02/schema");
    }
}
