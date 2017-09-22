<?php

/* node_modules/json-schema/draft-01/schema */
class __TwigTemplate_a494c7ff39a146fe7d7558c29560ba8ce25b0a575081c720b16cc84e6a84d5f1 extends Twig_Template
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
        $__internal_0768847aa139b5211fd50c0e83baf17d5d098f2f2d0e409161f761448d0b1038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0768847aa139b5211fd50c0e83baf17d5d098f2f2d0e409161f761448d0b1038->enter($__internal_0768847aa139b5211fd50c0e83baf17d5d098f2f2d0e409161f761448d0b1038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema/draft-01/schema"));

        // line 1
        echo "{
\t\"\$schema\" : \"http://json-schema.org/draft-01/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-01/schema#\",
\t\"type\" : \"object\",
\t
\t\"properties\" : {
\t\t\"type\" : {
\t\t\t\"type\" : [\"string\", \"array\"],
\t\t\t\"items\" : {
\t\t\t\t\"type\" : [\"string\", {\"\$ref\" : \"#\"}]
\t\t\t},
\t\t\t\"optional\" : true,
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
\t\t\t\"minItems\" : 1
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
\t\t\"maxDecimal\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"optional\" : true,
\t\t\t\"minimum\" : 0
\t\t},
\t\t
\t\t\"disallow\" : {
\t\t\t\"type\" : [\"string\", \"array\"],
\t\t\t\"items\" : {\"type\" : \"string\"},
\t\t\t\"optional\" : true
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
        
        $__internal_0768847aa139b5211fd50c0e83baf17d5d098f2f2d0e409161f761448d0b1038->leave($__internal_0768847aa139b5211fd50c0e83baf17d5d098f2f2d0e409161f761448d0b1038_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema/draft-01/schema";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"\$schema\" : \"http://json-schema.org/draft-01/hyper-schema#\",
\t\"id\" : \"http://json-schema.org/draft-01/schema#\",
\t\"type\" : \"object\",
\t
\t\"properties\" : {
\t\t\"type\" : {
\t\t\t\"type\" : [\"string\", \"array\"],
\t\t\t\"items\" : {
\t\t\t\t\"type\" : [\"string\", {\"\$ref\" : \"#\"}]
\t\t\t},
\t\t\t\"optional\" : true,
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
\t\t\t\"minItems\" : 1
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
\t\t\"maxDecimal\" : {
\t\t\t\"type\" : \"integer\",
\t\t\t\"optional\" : true,
\t\t\t\"minimum\" : 0
\t\t},
\t\t
\t\t\"disallow\" : {
\t\t\t\"type\" : [\"string\", \"array\"],
\t\t\t\"items\" : {\"type\" : \"string\"},
\t\t\t\"optional\" : true
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
}", "node_modules/json-schema/draft-01/schema", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema/draft-01/schema");
    }
}
