<?php

/* node_modules/parsleyjs/src/i18n/fi.js */
class __TwigTemplate_ee10fe7baadab619413d3414a344bd46765145cf283607b4d0934aa3fd8f6539 extends Twig_Template
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
        $__internal_84e9db40d1a66c28e8c6ad959cdc41109d4fe5da02f14f60e227ec2b3c71a2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e9db40d1a66c28e8c6ad959cdc41109d4fe5da02f14f60e227ec2b3c71a2bb->enter($__internal_84e9db40d1a66c28e8c6ad959cdc41109d4fe5da02f14f60e227ec2b3c71a2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/fi.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('fi', {
  defaultMessage: \"Sy&ouml;tetty arvo on virheellinen.\",
  type: {
    email:        \"S&auml;hk&ouml;postiosoite on virheellinen.\",
    url:          \"Url-osoite on virheellinen.\",
    number:       \"Sy&ouml;t&auml; numero.\",
    integer:      \"Sy&ouml;t&auml; kokonaisluku.\",
    digits:       \"Sy&ouml;t&auml; ainoastaan numeroita.\",
    alphanum:     \"Sy&ouml;t&auml; ainoastaan kirjaimia tai numeroita.\"
  },
  notblank:       \"T&auml;m&auml; kentt&auml;&auml; ei voi j&auml;tt&auml;&auml; tyhj&auml;ksi.\",
  required:       \"T&auml;m&auml; kentt&auml; on pakollinen.\",
  pattern:        \"Sy&ouml;tetty arvo on virheellinen.\",
  min:            \"Sy&ouml;t&auml; arvo joka on yht&auml; suuri tai suurempi kuin %s.\",
  max:            \"Sy&ouml;t&auml; arvo joka on pienempi tai yht&auml; suuri kuin %s.\",
  range:          \"Sy&ouml;t&auml; arvo v&auml;lilt&auml;: %s-%s.\",
  minlength:      \"Sy&ouml;tetyn arvon t&auml;ytyy olla v&auml;hint&auml;&auml;n %s merkki&auml; pitk&auml;.\",
  maxlength:      \"Sy&ouml;tetty arvo saa olla enint&auml;&auml;n %s merkki&auml; pitk&auml;.\",
  length:         \"Sy&ouml;tetyn arvon t&auml;ytyy olla v&auml;hint&auml;&auml;n %s ja enint&auml;&auml;n %s merkki&auml; pitk&auml;.\",
  mincheck:       \"Valitse v&auml;hint&auml;&auml;n %s vaihtoehtoa.\",
  maxcheck:       \"Valitse enint&auml;&auml;n %s vaihtoehtoa.\",
  check:          \"Valitse %s-%s vaihtoehtoa.\",
  equalto:        \"Salasanat eiv&auml;t t&auml;sm&auml;&auml;.\"
});

Parsley.setLocale('fi');
";
        
        $__internal_84e9db40d1a66c28e8c6ad959cdc41109d4fe5da02f14f60e227ec2b3c71a2bb->leave($__internal_84e9db40d1a66c28e8c6ad959cdc41109d4fe5da02f14f60e227ec2b3c71a2bb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/fi.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('fi', {
  defaultMessage: \"Sy&ouml;tetty arvo on virheellinen.\",
  type: {
    email:        \"S&auml;hk&ouml;postiosoite on virheellinen.\",
    url:          \"Url-osoite on virheellinen.\",
    number:       \"Sy&ouml;t&auml; numero.\",
    integer:      \"Sy&ouml;t&auml; kokonaisluku.\",
    digits:       \"Sy&ouml;t&auml; ainoastaan numeroita.\",
    alphanum:     \"Sy&ouml;t&auml; ainoastaan kirjaimia tai numeroita.\"
  },
  notblank:       \"T&auml;m&auml; kentt&auml;&auml; ei voi j&auml;tt&auml;&auml; tyhj&auml;ksi.\",
  required:       \"T&auml;m&auml; kentt&auml; on pakollinen.\",
  pattern:        \"Sy&ouml;tetty arvo on virheellinen.\",
  min:            \"Sy&ouml;t&auml; arvo joka on yht&auml; suuri tai suurempi kuin %s.\",
  max:            \"Sy&ouml;t&auml; arvo joka on pienempi tai yht&auml; suuri kuin %s.\",
  range:          \"Sy&ouml;t&auml; arvo v&auml;lilt&auml;: %s-%s.\",
  minlength:      \"Sy&ouml;tetyn arvon t&auml;ytyy olla v&auml;hint&auml;&auml;n %s merkki&auml; pitk&auml;.\",
  maxlength:      \"Sy&ouml;tetty arvo saa olla enint&auml;&auml;n %s merkki&auml; pitk&auml;.\",
  length:         \"Sy&ouml;tetyn arvon t&auml;ytyy olla v&auml;hint&auml;&auml;n %s ja enint&auml;&auml;n %s merkki&auml; pitk&auml;.\",
  mincheck:       \"Valitse v&auml;hint&auml;&auml;n %s vaihtoehtoa.\",
  maxcheck:       \"Valitse enint&auml;&auml;n %s vaihtoehtoa.\",
  check:          \"Valitse %s-%s vaihtoehtoa.\",
  equalto:        \"Salasanat eiv&auml;t t&auml;sm&auml;&auml;.\"
});

Parsley.setLocale('fi');
", "node_modules/parsleyjs/src/i18n/fi.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/fi.js");
    }
}
