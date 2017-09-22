<?php

/* node_modules/es-to-primitive/package.json */
class __TwigTemplate_be27baa7617320a11c9378954ecd96a562769b58b2f96fba345fd8453d4573b2 extends Twig_Template
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
        $__internal_67501e674eea1b9549bee8bf62e21b1729eb703360cc4d7dcf6b6cfe69db67f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67501e674eea1b9549bee8bf62e21b1729eb703360cc4d7dcf6b6cfe69db67f1->enter($__internal_67501e674eea1b9549bee8bf62e21b1729eb703360cc4d7dcf6b6cfe69db67f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-to-primitive/package.json"));

        // line 1
        echo "{
\t\"name\": \"es-to-primitive\",
\t\"version\": \"1.1.1\",
\t\"author\": \"Jordan Harband\",
\t\"description\": \"ECMAScript “ToPrimitive” algorithm. Provides ES5 and ES6 versions.\",
\t\"license\": \"MIT\",
\t\"main\": \"index.js\",
\t\"scripts\": {
\t\t\"test\": \"npm run lint && npm run tests-only && npm run security\",
\t\t\"tests-only\": \"node --es-staging test\",
\t\t\"coverage\": \"covert test/*.js\",
\t\t\"coverage-quiet\": \"covert test/*.js --quiet\",
\t\t\"lint\": \"npm run jscs && npm run eslint\",
\t\t\"jscs\": \"jscs test/*.js *.js\",
\t\t\"eslint\": \"eslint test/*.js *.js\",
\t\t\"security\": \"nsp check\"
\t},
\t\"repository\": {
\t\t\"type\": \"git\",
\t\t\"url\": \"git://github.com/ljharb/es-to-primitive.git\"
\t},
\t\"keywords\": [
\t\t\"primitive\",
\t\t\"abstract\",
\t\t\"ecmascript\",
\t\t\"es5\",
\t\t\"es6\",
\t\t\"toPrimitive\",
\t\t\"coerce\",
\t\t\"type\",
\t\t\"object\"
\t],
\t\"dependencies\": {
\t\t\"is-callable\": \"^1.1.1\",
\t\t\"is-date-object\": \"^1.0.1\",
\t\t\"is-symbol\": \"^1.0.1\"
\t},
\t\"devDependencies\": {
\t\t\"tape\": \"^4.4.0\",
\t\t\"covert\": \"^1.1.0\",
\t\t\"object-is\": \"^1.0.1\",
\t\t\"foreach\": \"^2.0.5\",
\t\t\"jscs\": \"^2.7.0\",
\t\t\"nsp\": \"^2.2.0\",
\t\t\"eslint\": \"^1.10.3\",
\t\t\"@ljharb/eslint-config\": \"^1.6.1\",
\t\t\"replace\": \"^0.3.0\",
\t\t\"semver\": \"^5.1.0\"
\t},
\t\"testling\": {
\t\t\"files\": \"test\",
\t\t\"browsers\": [
\t\t\t\"iexplore/6.0..latest\",
\t\t\t\"firefox/3.0..6.0\",
\t\t\t\"firefox/15.0..latest\",
\t\t\t\"firefox/nightly\",
\t\t\t\"chrome/4.0..10.0\",
\t\t\t\"chrome/20.0..latest\",
\t\t\t\"chrome/canary\",
\t\t\t\"opera/10.0..latest\",
\t\t\t\"opera/next\",
\t\t\t\"safari/4.0..latest\",
\t\t\t\"ipad/6.0..latest\",
\t\t\t\"iphone/6.0..latest\",
\t\t\t\"android-browser/4.2\"
\t\t]
\t},
\t\"engines\": {
\t\t\"node\": \">= 0.4\"
\t}
}
";
        
        $__internal_67501e674eea1b9549bee8bf62e21b1729eb703360cc4d7dcf6b6cfe69db67f1->leave($__internal_67501e674eea1b9549bee8bf62e21b1729eb703360cc4d7dcf6b6cfe69db67f1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-to-primitive/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"name\": \"es-to-primitive\",
\t\"version\": \"1.1.1\",
\t\"author\": \"Jordan Harband\",
\t\"description\": \"ECMAScript “ToPrimitive” algorithm. Provides ES5 and ES6 versions.\",
\t\"license\": \"MIT\",
\t\"main\": \"index.js\",
\t\"scripts\": {
\t\t\"test\": \"npm run lint && npm run tests-only && npm run security\",
\t\t\"tests-only\": \"node --es-staging test\",
\t\t\"coverage\": \"covert test/*.js\",
\t\t\"coverage-quiet\": \"covert test/*.js --quiet\",
\t\t\"lint\": \"npm run jscs && npm run eslint\",
\t\t\"jscs\": \"jscs test/*.js *.js\",
\t\t\"eslint\": \"eslint test/*.js *.js\",
\t\t\"security\": \"nsp check\"
\t},
\t\"repository\": {
\t\t\"type\": \"git\",
\t\t\"url\": \"git://github.com/ljharb/es-to-primitive.git\"
\t},
\t\"keywords\": [
\t\t\"primitive\",
\t\t\"abstract\",
\t\t\"ecmascript\",
\t\t\"es5\",
\t\t\"es6\",
\t\t\"toPrimitive\",
\t\t\"coerce\",
\t\t\"type\",
\t\t\"object\"
\t],
\t\"dependencies\": {
\t\t\"is-callable\": \"^1.1.1\",
\t\t\"is-date-object\": \"^1.0.1\",
\t\t\"is-symbol\": \"^1.0.1\"
\t},
\t\"devDependencies\": {
\t\t\"tape\": \"^4.4.0\",
\t\t\"covert\": \"^1.1.0\",
\t\t\"object-is\": \"^1.0.1\",
\t\t\"foreach\": \"^2.0.5\",
\t\t\"jscs\": \"^2.7.0\",
\t\t\"nsp\": \"^2.2.0\",
\t\t\"eslint\": \"^1.10.3\",
\t\t\"@ljharb/eslint-config\": \"^1.6.1\",
\t\t\"replace\": \"^0.3.0\",
\t\t\"semver\": \"^5.1.0\"
\t},
\t\"testling\": {
\t\t\"files\": \"test\",
\t\t\"browsers\": [
\t\t\t\"iexplore/6.0..latest\",
\t\t\t\"firefox/3.0..6.0\",
\t\t\t\"firefox/15.0..latest\",
\t\t\t\"firefox/nightly\",
\t\t\t\"chrome/4.0..10.0\",
\t\t\t\"chrome/20.0..latest\",
\t\t\t\"chrome/canary\",
\t\t\t\"opera/10.0..latest\",
\t\t\t\"opera/next\",
\t\t\t\"safari/4.0..latest\",
\t\t\t\"ipad/6.0..latest\",
\t\t\t\"iphone/6.0..latest\",
\t\t\t\"android-browser/4.2\"
\t\t]
\t},
\t\"engines\": {
\t\t\"node\": \">= 0.4\"
\t}
}
", "node_modules/es-to-primitive/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-to-primitive/package.json");
    }
}
