<?php

/* node_modules/isstream/package.json */
class __TwigTemplate_a1224c4efbc42936ea69b867d373dddd150bca7c88983b30c4ab15ceddc59931 extends Twig_Template
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
        $__internal_510a320e83418e3fae6372f87927d5819cf7e7542b378edbbf9f5f7077f9e987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510a320e83418e3fae6372f87927d5819cf7e7542b378edbbf9f5f7077f9e987->enter($__internal_510a320e83418e3fae6372f87927d5819cf7e7542b378edbbf9f5f7077f9e987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/isstream/package.json"));

        // line 1
        echo "{
  \"name\": \"isstream\",
  \"version\": \"0.1.2\",
  \"description\": \"Determine if an object is a Stream\",
  \"main\": \"isstream.js\",
  \"scripts\": {
    \"test\": \"tar --xform 's/^package/readable-stream-1.0/' -zxf readable-stream-1.0.*.tgz && tar --xform 's/^package/readable-stream-1.1/' -zxf readable-stream-1.1.*.tgz && node test.js; rm -rf readable-stream-1.?/\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/rvagg/isstream.git\"
  },
  \"keywords\": [
    \"stream\",
    \"type\",
    \"streams\",
    \"readable-stream\",
    \"hippo\"
  ],
  \"devDependencies\": {
    \"tape\": \"~2.12.3\",
    \"core-util-is\": \"~1.0.0\",
    \"isarray\": \"0.0.1\",
    \"string_decoder\": \"~0.10.x\",
    \"inherits\": \"~2.0.1\"
  },
  \"author\": \"Rod Vagg <rod@vagg.org>\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/rvagg/isstream/issues\"
  },
  \"homepage\": \"https://github.com/rvagg/isstream\"
}
";
        
        $__internal_510a320e83418e3fae6372f87927d5819cf7e7542b378edbbf9f5f7077f9e987->leave($__internal_510a320e83418e3fae6372f87927d5819cf7e7542b378edbbf9f5f7077f9e987_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/isstream/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"isstream\",
  \"version\": \"0.1.2\",
  \"description\": \"Determine if an object is a Stream\",
  \"main\": \"isstream.js\",
  \"scripts\": {
    \"test\": \"tar --xform 's/^package/readable-stream-1.0/' -zxf readable-stream-1.0.*.tgz && tar --xform 's/^package/readable-stream-1.1/' -zxf readable-stream-1.1.*.tgz && node test.js; rm -rf readable-stream-1.?/\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/rvagg/isstream.git\"
  },
  \"keywords\": [
    \"stream\",
    \"type\",
    \"streams\",
    \"readable-stream\",
    \"hippo\"
  ],
  \"devDependencies\": {
    \"tape\": \"~2.12.3\",
    \"core-util-is\": \"~1.0.0\",
    \"isarray\": \"0.0.1\",
    \"string_decoder\": \"~0.10.x\",
    \"inherits\": \"~2.0.1\"
  },
  \"author\": \"Rod Vagg <rod@vagg.org>\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/rvagg/isstream/issues\"
  },
  \"homepage\": \"https://github.com/rvagg/isstream\"
}
", "node_modules/isstream/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/isstream/package.json");
    }
}
