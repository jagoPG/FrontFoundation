<?php

/* node_modules/setimmediate/package.json */
class __TwigTemplate_bc6402c2c26ee544aa67c8fb18f4d64606f3a71aca0cb3c69c1d949dbec462b3 extends Twig_Template
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
        $__internal_a9bbf768f86b0f6223277e35317989cfbfdb923e7bb9411e6799c2f096529e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9bbf768f86b0f6223277e35317989cfbfdb923e7bb9411e6799c2f096529e92->enter($__internal_a9bbf768f86b0f6223277e35317989cfbfdb923e7bb9411e6799c2f096529e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/setimmediate/package.json"));

        // line 1
        echo "{
    \"name\": \"setimmediate\",
    \"description\": \"A shim for the setImmediate efficient script yielding API\",
    \"version\": \"1.0.5\",
    \"author\": \"YuzuJS\",
    \"contributors\": [
        \"Domenic Denicola <d@domenic.me> (https://domenic.me)\",
        \"Donavon West <github@donavon.com> (http://donavon.com)\",
        \"Yaffle\"
    ],
    \"license\": \"MIT\",
    \"repository\": \"YuzuJS/setImmediate\",
    \"main\": \"setImmediate.js\",
    \"files\": [
        \"setImmediate.js\"
    ],
    \"scripts\": {
        \"lint\": \"jshint setImmediate.js\",
        \"test\": \"mocha test/tests.js\",
        \"test-browser\": \"opener http://localhost:9008/__zuul && zuul test/tests.js --ui mocha-bdd --local 9008\",
        \"test-browser-only\": \"opener http://localhost:9007/test/browserOnly/index.html && http-server . -p 9007\"
    },
    \"devDependencies\": {
        \"jshint\": \"^2.5.0\",
        \"mocha\": \"~1.18.2\",
        \"http-server\": \"~0.6.1\",
        \"opener\": \"^1.3\",
        \"zuul\": \"^1.6.4\"
    }
}
";
        
        $__internal_a9bbf768f86b0f6223277e35317989cfbfdb923e7bb9411e6799c2f096529e92->leave($__internal_a9bbf768f86b0f6223277e35317989cfbfdb923e7bb9411e6799c2f096529e92_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/setimmediate/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
    \"name\": \"setimmediate\",
    \"description\": \"A shim for the setImmediate efficient script yielding API\",
    \"version\": \"1.0.5\",
    \"author\": \"YuzuJS\",
    \"contributors\": [
        \"Domenic Denicola <d@domenic.me> (https://domenic.me)\",
        \"Donavon West <github@donavon.com> (http://donavon.com)\",
        \"Yaffle\"
    ],
    \"license\": \"MIT\",
    \"repository\": \"YuzuJS/setImmediate\",
    \"main\": \"setImmediate.js\",
    \"files\": [
        \"setImmediate.js\"
    ],
    \"scripts\": {
        \"lint\": \"jshint setImmediate.js\",
        \"test\": \"mocha test/tests.js\",
        \"test-browser\": \"opener http://localhost:9008/__zuul && zuul test/tests.js --ui mocha-bdd --local 9008\",
        \"test-browser-only\": \"opener http://localhost:9007/test/browserOnly/index.html && http-server . -p 9007\"
    },
    \"devDependencies\": {
        \"jshint\": \"^2.5.0\",
        \"mocha\": \"~1.18.2\",
        \"http-server\": \"~0.6.1\",
        \"opener\": \"^1.3\",
        \"zuul\": \"^1.6.4\"
    }
}
", "node_modules/setimmediate/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/setimmediate/package.json");
    }
}
