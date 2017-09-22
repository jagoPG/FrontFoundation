<?php

/* node_modules/spdx-expression-parse/package.json */
class __TwigTemplate_8639f614b771a7613fa2549165c7dccf975261da0b1e14253b1d6e3f52cf3737 extends Twig_Template
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
        $__internal_21b1dec59c5aab7802d3ecc71ef8e0d33310500ad79e61b0cc8d360d62e59681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b1dec59c5aab7802d3ecc71ef8e0d33310500ad79e61b0cc8d360d62e59681->enter($__internal_21b1dec59c5aab7802d3ecc71ef8e0d33310500ad79e61b0cc8d360d62e59681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/spdx-expression-parse/package.json"));

        // line 1
        echo "{
  \"name\": \"spdx-expression-parse\",
  \"description\": \"parse SPDX license expressions\",
  \"version\": \"1.0.4\",
  \"author\": \"Kyle E. Mitchell <kyle@kemitchell.com> (http://kemitchell.com)\",
  \"files\": [
    \"AUTHORS\",
    \"index.js\",
    \"parser.js\"
  ],
  \"devDependencies\": {
    \"defence-cli\": \"^1.0.1\",
    \"jison\": \"^0.4.15\",
    \"replace-require-self\": \"^1.0.0\",
    \"spdx-exceptions\": \"^1.0.4\",
    \"spdx-license-ids\": \"^1.0.0\",
    \"standard\": \"^8.0.0\"
  },
  \"keywords\": [
    \"SPDX\",
    \"law\",
    \"legal\",
    \"license\",
    \"metadata\",
    \"package\",
    \"package.json\",
    \"standards\"
  ],
  \"license\": \"(MIT AND CC-BY-3.0)\",
  \"repository\": \"kemitchell/spdx-expression-parse.js\",
  \"scripts\": {
    \"lint\": \"standard\",
    \"prepublish\": \"node generate-parser.js > parser.js\",
    \"pretest\": \"npm run prepublish\",
    \"test\": \"defence -i javascript README.md | replace-require-self | node\"
  }
}
";
        
        $__internal_21b1dec59c5aab7802d3ecc71ef8e0d33310500ad79e61b0cc8d360d62e59681->leave($__internal_21b1dec59c5aab7802d3ecc71ef8e0d33310500ad79e61b0cc8d360d62e59681_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/spdx-expression-parse/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"spdx-expression-parse\",
  \"description\": \"parse SPDX license expressions\",
  \"version\": \"1.0.4\",
  \"author\": \"Kyle E. Mitchell <kyle@kemitchell.com> (http://kemitchell.com)\",
  \"files\": [
    \"AUTHORS\",
    \"index.js\",
    \"parser.js\"
  ],
  \"devDependencies\": {
    \"defence-cli\": \"^1.0.1\",
    \"jison\": \"^0.4.15\",
    \"replace-require-self\": \"^1.0.0\",
    \"spdx-exceptions\": \"^1.0.4\",
    \"spdx-license-ids\": \"^1.0.0\",
    \"standard\": \"^8.0.0\"
  },
  \"keywords\": [
    \"SPDX\",
    \"law\",
    \"legal\",
    \"license\",
    \"metadata\",
    \"package\",
    \"package.json\",
    \"standards\"
  ],
  \"license\": \"(MIT AND CC-BY-3.0)\",
  \"repository\": \"kemitchell/spdx-expression-parse.js\",
  \"scripts\": {
    \"lint\": \"standard\",
    \"prepublish\": \"node generate-parser.js > parser.js\",
    \"pretest\": \"npm run prepublish\",
    \"test\": \"defence -i javascript README.md | replace-require-self | node\"
  }
}
", "node_modules/spdx-expression-parse/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/spdx-expression-parse/package.json");
    }
}
