<?php

/* node_modules/mime-db/package.json */
class __TwigTemplate_b513a8703c3006a37eff7f313788b702703344603e43526f2eed7ef35fd230f0 extends Twig_Template
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
        $__internal_1eb729644bf7962f7150e375ffea0b9ffe74572394c3db1cf6ecf6ce86091f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb729644bf7962f7150e375ffea0b9ffe74572394c3db1cf6ecf6ce86091f81->enter($__internal_1eb729644bf7962f7150e375ffea0b9ffe74572394c3db1cf6ecf6ce86091f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mime-db/package.json"));

        // line 1
        echo "{
  \"name\": \"mime-db\",
  \"description\": \"Media Type Database\",
  \"version\": \"1.30.0\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
    \"Jonathan Ong <me@jongleberry.com> (http://jongleberry.com)\",
    \"Robert Kieffer <robert@broofa.com> (http://github.com/broofa)\"
  ],
  \"license\": \"MIT\",
  \"keywords\": [
    \"mime\",
    \"db\",
    \"type\",
    \"types\",
    \"database\",
    \"charset\",
    \"charsets\"
  ],
  \"repository\": \"jshttp/mime-db\",
  \"devDependencies\": {
    \"bluebird\": \"3.5.0\",
    \"co\": \"4.6.0\",
    \"cogent\": \"1.0.1\",
    \"csv-parse\": \"1.2.1\",
    \"eslint\": \"3.19.0\",
    \"eslint-config-standard\": \"10.2.1\",
    \"eslint-plugin-import\": \"2.7.0\",
    \"eslint-plugin-node\": \"5.1.1\",
    \"eslint-plugin-promise\": \"3.5.0\",
    \"eslint-plugin-standard\": \"3.0.1\",
    \"gnode\": \"0.1.2\",
    \"mocha\": \"1.21.5\",
    \"nyc\": \"11.1.0\",
    \"raw-body\": \"2.3.0\",
    \"stream-to-array\": \"2.3.0\"
  },
  \"files\": [
    \"HISTORY.md\",
    \"LICENSE\",
    \"README.md\",
    \"db.json\",
    \"index.js\"
  ],
  \"engines\": {
    \"node\": \">= 0.6\"
  },
  \"scripts\": {
    \"build\": \"node scripts/build\",
    \"fetch\": \"gnode scripts/fetch-apache && gnode scripts/fetch-iana && gnode scripts/fetch-nginx\",
    \"lint\": \"eslint .\",
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-cov\": \"nyc --reporter=html --reporter=text npm test\",
    \"test-travis\": \"nyc --reporter=text npm test\",
    \"update\": \"npm run fetch && npm run build\"
  }
}
";
        
        $__internal_1eb729644bf7962f7150e375ffea0b9ffe74572394c3db1cf6ecf6ce86091f81->leave($__internal_1eb729644bf7962f7150e375ffea0b9ffe74572394c3db1cf6ecf6ce86091f81_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mime-db/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"mime-db\",
  \"description\": \"Media Type Database\",
  \"version\": \"1.30.0\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
    \"Jonathan Ong <me@jongleberry.com> (http://jongleberry.com)\",
    \"Robert Kieffer <robert@broofa.com> (http://github.com/broofa)\"
  ],
  \"license\": \"MIT\",
  \"keywords\": [
    \"mime\",
    \"db\",
    \"type\",
    \"types\",
    \"database\",
    \"charset\",
    \"charsets\"
  ],
  \"repository\": \"jshttp/mime-db\",
  \"devDependencies\": {
    \"bluebird\": \"3.5.0\",
    \"co\": \"4.6.0\",
    \"cogent\": \"1.0.1\",
    \"csv-parse\": \"1.2.1\",
    \"eslint\": \"3.19.0\",
    \"eslint-config-standard\": \"10.2.1\",
    \"eslint-plugin-import\": \"2.7.0\",
    \"eslint-plugin-node\": \"5.1.1\",
    \"eslint-plugin-promise\": \"3.5.0\",
    \"eslint-plugin-standard\": \"3.0.1\",
    \"gnode\": \"0.1.2\",
    \"mocha\": \"1.21.5\",
    \"nyc\": \"11.1.0\",
    \"raw-body\": \"2.3.0\",
    \"stream-to-array\": \"2.3.0\"
  },
  \"files\": [
    \"HISTORY.md\",
    \"LICENSE\",
    \"README.md\",
    \"db.json\",
    \"index.js\"
  ],
  \"engines\": {
    \"node\": \">= 0.6\"
  },
  \"scripts\": {
    \"build\": \"node scripts/build\",
    \"fetch\": \"gnode scripts/fetch-apache && gnode scripts/fetch-iana && gnode scripts/fetch-nginx\",
    \"lint\": \"eslint .\",
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-cov\": \"nyc --reporter=html --reporter=text npm test\",
    \"test-travis\": \"nyc --reporter=text npm test\",
    \"update\": \"npm run fetch && npm run build\"
  }
}
", "node_modules/mime-db/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mime-db/package.json");
    }
}
