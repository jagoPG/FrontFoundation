<?php

/* node_modules/define-properties/package.json */
class __TwigTemplate_501d5c73d6791253187115ea1733cc339b57b29b3594ff471d20600c65354e8d extends Twig_Template
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
        $__internal_d3d928163f6461f5cfb3d7f49fdd6c70f1c21c3b6d18472bd59a75e572887e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d928163f6461f5cfb3d7f49fdd6c70f1c21c3b6d18472bd59a75e572887e8a->enter($__internal_d3d928163f6461f5cfb3d7f49fdd6c70f1c21c3b6d18472bd59a75e572887e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/define-properties/package.json"));

        // line 1
        echo "{
\t\"name\": \"define-properties\",
\t\"version\": \"1.1.2\",
\t\"author\": \"Jordan Harband\",
\t\"description\": \"Define multiple non-enumerable properties at once. Uses `Object.defineProperty` when available; falls back to standard assignment in older engines.\",
\t\"license\": \"MIT\",
\t\"main\": \"index.js\",
\t\"scripts\": {
\t\t\"test\": \"npm run lint && node test/index.js && npm run security\",
\t\t\"coverage\": \"covert test/*.js\",
\t\t\"coverage-quiet\": \"covert test/*.js --quiet\",
\t\t\"lint\": \"npm run jscs && npm run eslint\",
\t\t\"jscs\": \"jscs test/*.js *.js\",
\t\t\"eslint\": \"eslint test/*.js *.js\",
\t\t\"eccheck\": \"editorconfig-tools check *.js **/*.js > /dev/null\",
\t\t\"security\": \"nsp package\"
\t},
\t\"repository\": {
\t\t\"type\": \"git\",
\t\t\"url\": \"git://github.com/ljharb/define-properties.git\"
\t},
\t\"keywords\": [
\t\t\"Object.defineProperty\",
\t\t\"Object.defineProperties\",
\t\t\"object\",
\t\t\"property descriptor\",
\t\t\"descriptor\",
\t\t\"define\",
\t\t\"ES5\"
\t],
\t\"dependencies\": {
\t\t\"foreach\": \"^2.0.5\",
\t\t\"object-keys\": \"^1.0.8\"
\t},
\t\"devDependencies\": {
\t\t\"tape\": \"^4.2.1\",
\t\t\"covert\": \"^1.1.0\",
\t\t\"jscs\": \"^2.3.1\",
\t\t\"editorconfig-tools\": \"^0.1.1\",
\t\t\"nsp\": \"^1.1.0\",
\t\t\"eslint\": \"^1.6.0\",
\t\t\"@ljharb/eslint-config\": \"^1.3.0\"
\t},
\t\"testling\": {
\t\t\"files\": \"test/index.js\",
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
        
        $__internal_d3d928163f6461f5cfb3d7f49fdd6c70f1c21c3b6d18472bd59a75e572887e8a->leave($__internal_d3d928163f6461f5cfb3d7f49fdd6c70f1c21c3b6d18472bd59a75e572887e8a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/define-properties/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"name\": \"define-properties\",
\t\"version\": \"1.1.2\",
\t\"author\": \"Jordan Harband\",
\t\"description\": \"Define multiple non-enumerable properties at once. Uses `Object.defineProperty` when available; falls back to standard assignment in older engines.\",
\t\"license\": \"MIT\",
\t\"main\": \"index.js\",
\t\"scripts\": {
\t\t\"test\": \"npm run lint && node test/index.js && npm run security\",
\t\t\"coverage\": \"covert test/*.js\",
\t\t\"coverage-quiet\": \"covert test/*.js --quiet\",
\t\t\"lint\": \"npm run jscs && npm run eslint\",
\t\t\"jscs\": \"jscs test/*.js *.js\",
\t\t\"eslint\": \"eslint test/*.js *.js\",
\t\t\"eccheck\": \"editorconfig-tools check *.js **/*.js > /dev/null\",
\t\t\"security\": \"nsp package\"
\t},
\t\"repository\": {
\t\t\"type\": \"git\",
\t\t\"url\": \"git://github.com/ljharb/define-properties.git\"
\t},
\t\"keywords\": [
\t\t\"Object.defineProperty\",
\t\t\"Object.defineProperties\",
\t\t\"object\",
\t\t\"property descriptor\",
\t\t\"descriptor\",
\t\t\"define\",
\t\t\"ES5\"
\t],
\t\"dependencies\": {
\t\t\"foreach\": \"^2.0.5\",
\t\t\"object-keys\": \"^1.0.8\"
\t},
\t\"devDependencies\": {
\t\t\"tape\": \"^4.2.1\",
\t\t\"covert\": \"^1.1.0\",
\t\t\"jscs\": \"^2.3.1\",
\t\t\"editorconfig-tools\": \"^0.1.1\",
\t\t\"nsp\": \"^1.1.0\",
\t\t\"eslint\": \"^1.6.0\",
\t\t\"@ljharb/eslint-config\": \"^1.3.0\"
\t},
\t\"testling\": {
\t\t\"files\": \"test/index.js\",
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

", "node_modules/define-properties/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/define-properties/package.json");
    }
}
