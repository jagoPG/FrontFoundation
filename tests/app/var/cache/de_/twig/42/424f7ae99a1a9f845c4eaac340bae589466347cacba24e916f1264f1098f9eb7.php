<?php

/* node_modules/asynckit/package.json */
class __TwigTemplate_01f1838c8db34a3708237ccee4489825ac25a4e4d964f9fa82a9648abc14b573 extends Twig_Template
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
        $__internal_9514b483321babf39f5f3865b7db4f6d199b2de577756dedd359a0af7415bbe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9514b483321babf39f5f3865b7db4f6d199b2de577756dedd359a0af7415bbe4->enter($__internal_9514b483321babf39f5f3865b7db4f6d199b2de577756dedd359a0af7415bbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asynckit/package.json"));

        // line 1
        echo "{
  \"name\": \"asynckit\",
  \"version\": \"0.4.0\",
  \"description\": \"Minimal async jobs utility library, with streams support\",
  \"main\": \"index.js\",
  \"scripts\": {
    \"clean\": \"rimraf coverage\",
    \"lint\": \"eslint *.js lib/*.js test/*.js\",
    \"test\": \"istanbul cover --reporter=json tape -- 'test/test-*.js' | tap-spec\",
    \"win-test\": \"tape test/test-*.js\",
    \"browser\": \"browserify -t browserify-istanbul test/lib/browserify_adjustment.js test/test-*.js | obake --coverage | tap-spec\",
    \"report\": \"istanbul report\",
    \"size\": \"browserify index.js | size-table asynckit\",
    \"debug\": \"tape test/test-*.js\"
  },
  \"pre-commit\": [
    \"clean\",
    \"lint\",
    \"test\",
    \"browser\",
    \"report\",
    \"size\"
  ],
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git+https://github.com/alexindigo/asynckit.git\"
  },
  \"keywords\": [
    \"async\",
    \"jobs\",
    \"parallel\",
    \"serial\",
    \"iterator\",
    \"array\",
    \"object\",
    \"stream\",
    \"destroy\",
    \"terminate\",
    \"abort\"
  ],
  \"author\": \"Alex Indigo <iam@alexindigo.com>\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/alexindigo/asynckit/issues\"
  },
  \"homepage\": \"https://github.com/alexindigo/asynckit#readme\",
  \"devDependencies\": {
    \"browserify\": \"^13.0.0\",
    \"browserify-istanbul\": \"^2.0.0\",
    \"coveralls\": \"^2.11.9\",
    \"eslint\": \"^2.9.0\",
    \"istanbul\": \"^0.4.3\",
    \"obake\": \"^0.1.2\",
    \"phantomjs-prebuilt\": \"^2.1.7\",
    \"pre-commit\": \"^1.1.3\",
    \"reamde\": \"^1.1.0\",
    \"rimraf\": \"^2.5.2\",
    \"size-table\": \"^0.2.0\",
    \"tap-spec\": \"^4.1.1\",
    \"tape\": \"^4.5.1\"
  },
  \"dependencies\": {}
}
";
        
        $__internal_9514b483321babf39f5f3865b7db4f6d199b2de577756dedd359a0af7415bbe4->leave($__internal_9514b483321babf39f5f3865b7db4f6d199b2de577756dedd359a0af7415bbe4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asynckit/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"asynckit\",
  \"version\": \"0.4.0\",
  \"description\": \"Minimal async jobs utility library, with streams support\",
  \"main\": \"index.js\",
  \"scripts\": {
    \"clean\": \"rimraf coverage\",
    \"lint\": \"eslint *.js lib/*.js test/*.js\",
    \"test\": \"istanbul cover --reporter=json tape -- 'test/test-*.js' | tap-spec\",
    \"win-test\": \"tape test/test-*.js\",
    \"browser\": \"browserify -t browserify-istanbul test/lib/browserify_adjustment.js test/test-*.js | obake --coverage | tap-spec\",
    \"report\": \"istanbul report\",
    \"size\": \"browserify index.js | size-table asynckit\",
    \"debug\": \"tape test/test-*.js\"
  },
  \"pre-commit\": [
    \"clean\",
    \"lint\",
    \"test\",
    \"browser\",
    \"report\",
    \"size\"
  ],
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git+https://github.com/alexindigo/asynckit.git\"
  },
  \"keywords\": [
    \"async\",
    \"jobs\",
    \"parallel\",
    \"serial\",
    \"iterator\",
    \"array\",
    \"object\",
    \"stream\",
    \"destroy\",
    \"terminate\",
    \"abort\"
  ],
  \"author\": \"Alex Indigo <iam@alexindigo.com>\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/alexindigo/asynckit/issues\"
  },
  \"homepage\": \"https://github.com/alexindigo/asynckit#readme\",
  \"devDependencies\": {
    \"browserify\": \"^13.0.0\",
    \"browserify-istanbul\": \"^2.0.0\",
    \"coveralls\": \"^2.11.9\",
    \"eslint\": \"^2.9.0\",
    \"istanbul\": \"^0.4.3\",
    \"obake\": \"^0.1.2\",
    \"phantomjs-prebuilt\": \"^2.1.7\",
    \"pre-commit\": \"^1.1.3\",
    \"reamde\": \"^1.1.0\",
    \"rimraf\": \"^2.5.2\",
    \"size-table\": \"^0.2.0\",
    \"tap-spec\": \"^4.1.1\",
    \"tape\": \"^4.5.1\"
  },
  \"dependencies\": {}
}
", "node_modules/asynckit/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asynckit/package.json");
    }
}
