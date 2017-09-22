<?php

/* node_modules/json-schema/draft-03/examples/address */
class __TwigTemplate_bcbc4ea5fe207fb3109a6860e3e9e22d341e3008d084537035e83ad4304a4bd0 extends Twig_Template
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
        $__internal_ab4c0f2d5cdc6025739994eb2aa66ff56386d60031bcd9269c8d1ce697e0b391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4c0f2d5cdc6025739994eb2aa66ff56386d60031bcd9269c8d1ce697e0b391->enter($__internal_ab4c0f2d5cdc6025739994eb2aa66ff56386d60031bcd9269c8d1ce697e0b391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema/draft-03/examples/address"));

        // line 1
        echo "{
\t\"description\" : \"An Address following the convention of http://microformats.org/wiki/hcard\",
\t\"type\" : \"object\",
\t\"properties\" : {
\t\t\"post-office-box\" : { \"type\" : \"string\" },
\t\t\"extended-address\" : { \"type\" : \"string\" },
\t\t\"street-address\" : { \"type\":\"string\" },
\t\t\"locality\" : { \"type\" : \"string\", \"required\" : true },
\t\t\"region\" : { \"type\" : \"string\", \"required\" : true },
\t\t\"postal-code\" : { \"type\" : \"string\" },
\t\t\"country-name\" : { \"type\" : \"string\", \"required\" : true }
\t},
\t\"dependencies\" : {
\t\t\"post-office-box\" : \"street-address\",
\t\t\"extended-address\" : \"street-address\",
\t\t\"street-address\" : \"region\",
\t\t\"locality\" : \"region\",
\t\t\"region\" : \"country-name\"
\t}
}";
        
        $__internal_ab4c0f2d5cdc6025739994eb2aa66ff56386d60031bcd9269c8d1ce697e0b391->leave($__internal_ab4c0f2d5cdc6025739994eb2aa66ff56386d60031bcd9269c8d1ce697e0b391_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema/draft-03/examples/address";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"description\" : \"An Address following the convention of http://microformats.org/wiki/hcard\",
\t\"type\" : \"object\",
\t\"properties\" : {
\t\t\"post-office-box\" : { \"type\" : \"string\" },
\t\t\"extended-address\" : { \"type\" : \"string\" },
\t\t\"street-address\" : { \"type\":\"string\" },
\t\t\"locality\" : { \"type\" : \"string\", \"required\" : true },
\t\t\"region\" : { \"type\" : \"string\", \"required\" : true },
\t\t\"postal-code\" : { \"type\" : \"string\" },
\t\t\"country-name\" : { \"type\" : \"string\", \"required\" : true }
\t},
\t\"dependencies\" : {
\t\t\"post-office-box\" : \"street-address\",
\t\t\"extended-address\" : \"street-address\",
\t\t\"street-address\" : \"region\",
\t\t\"locality\" : \"region\",
\t\t\"region\" : \"country-name\"
\t}
}", "node_modules/json-schema/draft-03/examples/address", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema/draft-03/examples/address");
    }
}
