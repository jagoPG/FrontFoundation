<?php

/* node_modules/es6-iterator/string.js */
class __TwigTemplate_bee06c71000c77fec9f086025ce3b352eef8b2ded81f2bdc4e1c4cb9677021bd extends Twig_Template
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
        $__internal_9c6fe8421cb660466ec45a9b1fe3a11a8cd0dbc2787562610ddcfb27992eae3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6fe8421cb660466ec45a9b1fe3a11a8cd0dbc2787562610ddcfb27992eae3b->enter($__internal_9c6fe8421cb660466ec45a9b1fe3a11a8cd0dbc2787562610ddcfb27992eae3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-iterator/string.js"));

        // line 1
        echo "// Thanks @mathiasbynens
// http://mathiasbynens.be/notes/javascript-unicode#iterating-over-symbols

'use strict';

var setPrototypeOf = require('es5-ext/object/set-prototype-of')
  , d              = require('d')
  , Iterator       = require('./')

  , defineProperty = Object.defineProperty
  , StringIterator;

StringIterator = module.exports = function (str) {
\tif (!(this instanceof StringIterator)) return new StringIterator(str);
\tstr = String(str);
\tIterator.call(this, str);
\tdefineProperty(this, '__length__', d('', str.length));

};
if (setPrototypeOf) setPrototypeOf(StringIterator, Iterator);

StringIterator.prototype = Object.create(Iterator.prototype, {
\tconstructor: d(StringIterator),
\t_next: d(function () {
\t\tif (!this.__list__) return;
\t\tif (this.__nextIndex__ < this.__length__) return this.__nextIndex__++;
\t\tthis._unBind();
\t}),
\t_resolve: d(function (i) {
\t\tvar char = this.__list__[i], code;
\t\tif (this.__nextIndex__ === this.__length__) return char;
\t\tcode = char.charCodeAt(0);
\t\tif ((code >= 0xD800) && (code <= 0xDBFF)) return char + this.__list__[this.__nextIndex__++];
\t\treturn char;
\t}),
\ttoString: d(function () { return '[object String Iterator]'; })
});
";
        
        $__internal_9c6fe8421cb660466ec45a9b1fe3a11a8cd0dbc2787562610ddcfb27992eae3b->leave($__internal_9c6fe8421cb660466ec45a9b1fe3a11a8cd0dbc2787562610ddcfb27992eae3b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-iterator/string.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Thanks @mathiasbynens
// http://mathiasbynens.be/notes/javascript-unicode#iterating-over-symbols

'use strict';

var setPrototypeOf = require('es5-ext/object/set-prototype-of')
  , d              = require('d')
  , Iterator       = require('./')

  , defineProperty = Object.defineProperty
  , StringIterator;

StringIterator = module.exports = function (str) {
\tif (!(this instanceof StringIterator)) return new StringIterator(str);
\tstr = String(str);
\tIterator.call(this, str);
\tdefineProperty(this, '__length__', d('', str.length));

};
if (setPrototypeOf) setPrototypeOf(StringIterator, Iterator);

StringIterator.prototype = Object.create(Iterator.prototype, {
\tconstructor: d(StringIterator),
\t_next: d(function () {
\t\tif (!this.__list__) return;
\t\tif (this.__nextIndex__ < this.__length__) return this.__nextIndex__++;
\t\tthis._unBind();
\t}),
\t_resolve: d(function (i) {
\t\tvar char = this.__list__[i], code;
\t\tif (this.__nextIndex__ === this.__length__) return char;
\t\tcode = char.charCodeAt(0);
\t\tif ((code >= 0xD800) && (code <= 0xDBFF)) return char + this.__list__[this.__nextIndex__++];
\t\treturn char;
\t}),
\ttoString: d(function () { return '[object String Iterator]'; })
});
", "node_modules/es6-iterator/string.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-iterator/string.js");
    }
}
