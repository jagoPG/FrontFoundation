<?php

/* node_modules/elliptic/package.json */
class __TwigTemplate_3e96d2f9ad28d95ef81cb4fab7bb1e4d37e0d01b291a3dfc5c76febd1d22f47a extends Twig_Template
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
        $__internal_a884edb1378b45a38d030140a251b8ccc410456752a3db88586d00d0f0bf0103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a884edb1378b45a38d030140a251b8ccc410456752a3db88586d00d0f0bf0103->enter($__internal_a884edb1378b45a38d030140a251b8ccc410456752a3db88586d00d0f0bf0103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/elliptic/package.json"));

        // line 1
        echo "{
  \"name\": \"elliptic\",
  \"version\": \"6.4.0\",
  \"description\": \"EC cryptography\",
  \"main\": \"lib/elliptic.js\",
  \"files\": [
    \"lib\"
  ],
  \"scripts\": {
    \"jscs\": \"jscs benchmarks/*.js lib/*.js lib/**/*.js lib/**/**/*.js test/index.js\",
    \"jshint\": \"jscs benchmarks/*.js lib/*.js lib/**/*.js lib/**/**/*.js test/index.js\",
    \"lint\": \"npm run jscs && npm run jshint\",
    \"unit\": \"istanbul test _mocha --reporter=spec test/index.js\",
    \"test\": \"npm run lint && npm run unit\",
    \"version\": \"grunt dist && git add dist/\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git@github.com:indutny/elliptic\"
  },
  \"keywords\": [
    \"EC\",
    \"Elliptic\",
    \"curve\",
    \"Cryptography\"
  ],
  \"author\": \"Fedor Indutny <fedor@indutny.com>\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/indutny/elliptic/issues\"
  },
  \"homepage\": \"https://github.com/indutny/elliptic\",
  \"devDependencies\": {
    \"brfs\": \"^1.4.3\",
    \"coveralls\": \"^2.11.3\",
    \"grunt\": \"^0.4.5\",
    \"grunt-browserify\": \"^5.0.0\",
    \"grunt-cli\": \"^1.2.0\",
    \"grunt-contrib-connect\": \"^1.0.0\",
    \"grunt-contrib-copy\": \"^1.0.0\",
    \"grunt-contrib-uglify\": \"^1.0.1\",
    \"grunt-mocha-istanbul\": \"^3.0.1\",
    \"grunt-saucelabs\": \"^8.6.2\",
    \"istanbul\": \"^0.4.2\",
    \"jscs\": \"^2.9.0\",
    \"jshint\": \"^2.6.0\",
    \"mocha\": \"^2.1.0\"
  },
  \"dependencies\": {
    \"bn.js\": \"^4.4.0\",
    \"brorand\": \"^1.0.1\",
    \"hash.js\": \"^1.0.0\",
    \"hmac-drbg\": \"^1.0.0\",
    \"inherits\": \"^2.0.1\",
    \"minimalistic-assert\": \"^1.0.0\",
    \"minimalistic-crypto-utils\": \"^1.0.0\"
  }
}
";
        
        $__internal_a884edb1378b45a38d030140a251b8ccc410456752a3db88586d00d0f0bf0103->leave($__internal_a884edb1378b45a38d030140a251b8ccc410456752a3db88586d00d0f0bf0103_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/elliptic/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"elliptic\",
  \"version\": \"6.4.0\",
  \"description\": \"EC cryptography\",
  \"main\": \"lib/elliptic.js\",
  \"files\": [
    \"lib\"
  ],
  \"scripts\": {
    \"jscs\": \"jscs benchmarks/*.js lib/*.js lib/**/*.js lib/**/**/*.js test/index.js\",
    \"jshint\": \"jscs benchmarks/*.js lib/*.js lib/**/*.js lib/**/**/*.js test/index.js\",
    \"lint\": \"npm run jscs && npm run jshint\",
    \"unit\": \"istanbul test _mocha --reporter=spec test/index.js\",
    \"test\": \"npm run lint && npm run unit\",
    \"version\": \"grunt dist && git add dist/\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git@github.com:indutny/elliptic\"
  },
  \"keywords\": [
    \"EC\",
    \"Elliptic\",
    \"curve\",
    \"Cryptography\"
  ],
  \"author\": \"Fedor Indutny <fedor@indutny.com>\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/indutny/elliptic/issues\"
  },
  \"homepage\": \"https://github.com/indutny/elliptic\",
  \"devDependencies\": {
    \"brfs\": \"^1.4.3\",
    \"coveralls\": \"^2.11.3\",
    \"grunt\": \"^0.4.5\",
    \"grunt-browserify\": \"^5.0.0\",
    \"grunt-cli\": \"^1.2.0\",
    \"grunt-contrib-connect\": \"^1.0.0\",
    \"grunt-contrib-copy\": \"^1.0.0\",
    \"grunt-contrib-uglify\": \"^1.0.1\",
    \"grunt-mocha-istanbul\": \"^3.0.1\",
    \"grunt-saucelabs\": \"^8.6.2\",
    \"istanbul\": \"^0.4.2\",
    \"jscs\": \"^2.9.0\",
    \"jshint\": \"^2.6.0\",
    \"mocha\": \"^2.1.0\"
  },
  \"dependencies\": {
    \"bn.js\": \"^4.4.0\",
    \"brorand\": \"^1.0.1\",
    \"hash.js\": \"^1.0.0\",
    \"hmac-drbg\": \"^1.0.0\",
    \"inherits\": \"^2.0.1\",
    \"minimalistic-assert\": \"^1.0.0\",
    \"minimalistic-crypto-utils\": \"^1.0.0\"
  }
}
", "node_modules/elliptic/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/elliptic/package.json");
    }
}
