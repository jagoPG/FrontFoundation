<?php

/* node_modules/cliui/package.json */
class __TwigTemplate_cc7a9767723fe206a339919321fcbd9679e28def47f5d83faced88dc2ccc55a3 extends Twig_Template
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
        $__internal_fd083b50c6774a3377641516923c05db6cd713c9ef77e6c2bd3d8642f26ad7d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd083b50c6774a3377641516923c05db6cd713c9ef77e6c2bd3d8642f26ad7d7->enter($__internal_fd083b50c6774a3377641516923c05db6cd713c9ef77e6c2bd3d8642f26ad7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/cliui/package.json"));

        // line 1
        echo "{
  \"name\": \"cliui\",
  \"version\": \"3.2.0\",
  \"description\": \"easily create complex multi-column command-line-interfaces\",
  \"main\": \"index.js\",
  \"scripts\": {
    \"pretest\": \"standard\",
    \"test\": \"nyc mocha\",
    \"coverage\": \"nyc --reporter=text-lcov mocha | coveralls\",
    \"version\": \"standard-version\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"http://github.com/yargs/cliui.git\"
  },
  \"config\": {
    \"blanket\": {
      \"pattern\": [
        \"index.js\"
      ],
      \"data-cover-never\": [
        \"node_modules\",
        \"test\"
      ],
      \"output-reporter\": \"spec\"
    }
  },
  \"standard\": {
    \"ignore\": [
      \"**/example/**\"
    ],
    \"globals\": [
      \"it\"
    ]
  },
  \"keywords\": [
    \"cli\",
    \"command-line\",
    \"layout\",
    \"design\",
    \"console\",
    \"wrap\",
    \"table\"
  ],
  \"author\": \"Ben Coe <ben@npmjs.com>\",
  \"license\": \"ISC\",
  \"dependencies\": {
    \"string-width\": \"^1.0.1\",
    \"strip-ansi\": \"^3.0.1\",
    \"wrap-ansi\": \"^2.0.0\"
  },
  \"devDependencies\": {
    \"chai\": \"^3.5.0\",
    \"chalk\": \"^1.1.2\",
    \"coveralls\": \"^2.11.8\",
    \"mocha\": \"^2.4.5\",
    \"nyc\": \"^6.4.0\",
    \"standard\": \"^6.0.8\",
    \"standard-version\": \"^2.1.2\"
  },
  \"files\": [
    \"index.js\"
  ]
}";
        
        $__internal_fd083b50c6774a3377641516923c05db6cd713c9ef77e6c2bd3d8642f26ad7d7->leave($__internal_fd083b50c6774a3377641516923c05db6cd713c9ef77e6c2bd3d8642f26ad7d7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/cliui/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"cliui\",
  \"version\": \"3.2.0\",
  \"description\": \"easily create complex multi-column command-line-interfaces\",
  \"main\": \"index.js\",
  \"scripts\": {
    \"pretest\": \"standard\",
    \"test\": \"nyc mocha\",
    \"coverage\": \"nyc --reporter=text-lcov mocha | coveralls\",
    \"version\": \"standard-version\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"http://github.com/yargs/cliui.git\"
  },
  \"config\": {
    \"blanket\": {
      \"pattern\": [
        \"index.js\"
      ],
      \"data-cover-never\": [
        \"node_modules\",
        \"test\"
      ],
      \"output-reporter\": \"spec\"
    }
  },
  \"standard\": {
    \"ignore\": [
      \"**/example/**\"
    ],
    \"globals\": [
      \"it\"
    ]
  },
  \"keywords\": [
    \"cli\",
    \"command-line\",
    \"layout\",
    \"design\",
    \"console\",
    \"wrap\",
    \"table\"
  ],
  \"author\": \"Ben Coe <ben@npmjs.com>\",
  \"license\": \"ISC\",
  \"dependencies\": {
    \"string-width\": \"^1.0.1\",
    \"strip-ansi\": \"^3.0.1\",
    \"wrap-ansi\": \"^2.0.0\"
  },
  \"devDependencies\": {
    \"chai\": \"^3.5.0\",
    \"chalk\": \"^1.1.2\",
    \"coveralls\": \"^2.11.8\",
    \"mocha\": \"^2.4.5\",
    \"nyc\": \"^6.4.0\",
    \"standard\": \"^6.0.8\",
    \"standard-version\": \"^2.1.2\"
  },
  \"files\": [
    \"index.js\"
  ]
}", "node_modules/cliui/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/cliui/package.json");
    }
}
