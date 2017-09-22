<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/normalize.less */
class __TwigTemplate_e3800173aa6093aaddb2fcc5c5f58dbec5e03724ba5ea3d2c7fb253824760085 extends Twig_Template
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
        $__internal_2923b84ec7b4fddc3d416c813cd0562ca064183207c32e1b9e6cb8ae832a8ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2923b84ec7b4fddc3d416c813cd0562ca064183207c32e1b9e6cb8ae832a8ef6->enter($__internal_2923b84ec7b4fddc3d416c813cd0562ca064183207c32e1b9e6cb8ae832a8ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/normalize.less"));

        // line 1
        echo "/*! normalize.css v2.1.3 | MIT License | git.io/normalize */

// ==========================================================================
// HTML5 display definitions
// ==========================================================================

//
// Correct `block` display not defined in IE 8/9.
//

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section,
summary {
  display: block;
}

//
// Correct `inline-block` display not defined in IE 8/9.
//

audio,
canvas,
video {
  display: inline-block;
}

//
// Prevent modern browsers from displaying `audio` without controls.
// Remove excess height in iOS 5 devices.
//

audio:not([controls]) {
  display: none;
  height: 0;
}

//
// Address `[hidden]` styling not present in IE 8/9.
// Hide the `template` element in IE, Safari, and Firefox < 22.
//

[hidden],
template {
  display: none;
}

// ==========================================================================
// Base
// ==========================================================================

//
// 1. Set default font family to sans-serif.
// 2. Prevent iOS text size adjust after orientation change, without disabling
//    user zoom.
//

html {
  font-family: sans-serif; // 1
  -ms-text-size-adjust: 100%; // 2
  -webkit-text-size-adjust: 100%; // 2
}

//
// Remove default margin.
//

body {
  margin: 0;
}

// ==========================================================================
// Links
// ==========================================================================

//
// Remove the gray background color from active links in IE 10.
//

a {
  background: transparent;
}

//
// Address `outline` inconsistency between Chrome and other browsers.
//

a:focus {
  outline: thin dotted;
}

//
// Improve readability when focused and also mouse hovered in all browsers.
//

a:active,
a:hover {
  outline: 0;
}

// ==========================================================================
// Typography
// ==========================================================================

//
// Address variable `h1` font-size and margin within `section` and `article`
// contexts in Firefox 4+, Safari 5, and Chrome.
//

h1 {
  font-size: 2em;
  margin: 0.67em 0;
}

//
// Address styling not present in IE 8/9, Safari 5, and Chrome.
//

abbr[title] {
  border-bottom: 1px dotted;
}

//
// Address style set to `bolder` in Firefox 4+, Safari 5, and Chrome.
//

b,
strong {
  font-weight: bold;
}

//
// Address styling not present in Safari 5 and Chrome.
//

dfn {
  font-style: italic;
}

//
// Address differences between Firefox and other browsers.
//

hr {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
}

//
// Address styling not present in IE 8/9.
//

mark {
  background: #ff0;
  color: #000;
}

//
// Correct font family set oddly in Safari 5 and Chrome.
//

code,
kbd,
pre,
samp {
  font-family: monospace, serif;
  font-size: 1em;
}

//
// Improve readability of pre-formatted text in all browsers.
//

pre {
  white-space: pre-wrap;
}

//
// Set consistent quote types.
//

q {
  quotes: \"\\201C\" \"\\201D\" \"\\2018\" \"\\2019\";
}

//
// Address inconsistent and variable font size in all browsers.
//

small {
  font-size: 80%;
}

//
// Prevent `sub` and `sup` affecting `line-height` in all browsers.
//

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sup {
  top: -0.5em;
}

sub {
  bottom: -0.25em;
}

// ==========================================================================
// Embedded content
// ==========================================================================

//
// Remove border when inside `a` element in IE 8/9.
//

img {
  border: 0;
}

//
// Correct overflow displayed oddly in IE 9.
//

svg:not(:root) {
  overflow: hidden;
}

// ==========================================================================
// Figures
// ==========================================================================

//
// Address margin not present in IE 8/9 and Safari 5.
//

figure {
  margin: 0;
}

// ==========================================================================
// Forms
// ==========================================================================

//
// Define consistent border, margin, and padding.
//

fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}

//
// 1. Correct `color` not being inherited in IE 8/9.
// 2. Remove padding so people aren't caught out if they zero out fieldsets.
//

legend {
  border: 0; // 1
  padding: 0; // 2
}

//
// 1. Correct font family not being inherited in all browsers.
// 2. Correct font size not being inherited in all browsers.
// 3. Address margins set differently in Firefox 4+, Safari 5, and Chrome.
//

button,
input,
select,
textarea {
  font-family: inherit; // 1
  font-size: 100%; // 2
  margin: 0; // 3
}

//
// Address Firefox 4+ setting `line-height` on `input` using `!important` in
// the UA stylesheet.
//

button,
input {
  line-height: normal;
}

//
// Address inconsistent `text-transform` inheritance for `button` and `select`.
// All other form control elements do not inherit `text-transform` values.
// Correct `button` style inheritance in Chrome, Safari 5+, and IE 8+.
// Correct `select` style inheritance in Firefox 4+ and Opera.
//

button,
select {
  text-transform: none;
}

//
// 1. Avoid the WebKit bug in Android 4.0.* where (2) destroys native `audio`
//    and `video` controls.
// 2. Correct inability to style clickable `input` types in iOS.
// 3. Improve usability and consistency of cursor style between image-type
//    `input` and others.
//

button,
html input[type=\"button\"], // 1
input[type=\"reset\"],
input[type=\"submit\"] {
  -webkit-appearance: button; // 2
  cursor: pointer; // 3
}

//
// Re-set default cursor for disabled elements.
//

button[disabled],
html input[disabled] {
  cursor: default;
}

//
// 1. Address box sizing set to `content-box` in IE 8/9/10.
// 2. Remove excess padding in IE 8/9/10.
//

input[type=\"checkbox\"],
input[type=\"radio\"] {
  box-sizing: border-box; // 1
  padding: 0; // 2
}

//
// 1. Address `appearance` set to `searchfield` in Safari 5 and Chrome.
// 2. Address `box-sizing` set to `border-box` in Safari 5 and Chrome
//    (include `-moz` to future-proof).
//

input[type=\"search\"] {
  -webkit-appearance: textfield; // 1
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box; // 2
  box-sizing: content-box;
}

//
// Remove inner padding and search cancel button in Safari 5 and Chrome
// on OS X.
//

input[type=\"search\"]::-webkit-search-cancel-button,
input[type=\"search\"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

//
// Remove inner padding and border in Firefox 4+.
//

button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}

//
// 1. Remove default vertical scrollbar in IE 8/9.
// 2. Improve readability and alignment in all browsers.
//

textarea {
  overflow: auto; // 1
  vertical-align: top; // 2
}

// ==========================================================================
// Tables
// ==========================================================================

//
// Remove most spacing between table cells.
//

table {
  border-collapse: collapse;
  border-spacing: 0;
}
";
        
        $__internal_2923b84ec7b4fddc3d416c813cd0562ca064183207c32e1b9e6cb8ae832a8ef6->leave($__internal_2923b84ec7b4fddc3d416c813cd0562ca064183207c32e1b9e6cb8ae832a8ef6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/normalize.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*! normalize.css v2.1.3 | MIT License | git.io/normalize */

// ==========================================================================
// HTML5 display definitions
// ==========================================================================

//
// Correct `block` display not defined in IE 8/9.
//

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section,
summary {
  display: block;
}

//
// Correct `inline-block` display not defined in IE 8/9.
//

audio,
canvas,
video {
  display: inline-block;
}

//
// Prevent modern browsers from displaying `audio` without controls.
// Remove excess height in iOS 5 devices.
//

audio:not([controls]) {
  display: none;
  height: 0;
}

//
// Address `[hidden]` styling not present in IE 8/9.
// Hide the `template` element in IE, Safari, and Firefox < 22.
//

[hidden],
template {
  display: none;
}

// ==========================================================================
// Base
// ==========================================================================

//
// 1. Set default font family to sans-serif.
// 2. Prevent iOS text size adjust after orientation change, without disabling
//    user zoom.
//

html {
  font-family: sans-serif; // 1
  -ms-text-size-adjust: 100%; // 2
  -webkit-text-size-adjust: 100%; // 2
}

//
// Remove default margin.
//

body {
  margin: 0;
}

// ==========================================================================
// Links
// ==========================================================================

//
// Remove the gray background color from active links in IE 10.
//

a {
  background: transparent;
}

//
// Address `outline` inconsistency between Chrome and other browsers.
//

a:focus {
  outline: thin dotted;
}

//
// Improve readability when focused and also mouse hovered in all browsers.
//

a:active,
a:hover {
  outline: 0;
}

// ==========================================================================
// Typography
// ==========================================================================

//
// Address variable `h1` font-size and margin within `section` and `article`
// contexts in Firefox 4+, Safari 5, and Chrome.
//

h1 {
  font-size: 2em;
  margin: 0.67em 0;
}

//
// Address styling not present in IE 8/9, Safari 5, and Chrome.
//

abbr[title] {
  border-bottom: 1px dotted;
}

//
// Address style set to `bolder` in Firefox 4+, Safari 5, and Chrome.
//

b,
strong {
  font-weight: bold;
}

//
// Address styling not present in Safari 5 and Chrome.
//

dfn {
  font-style: italic;
}

//
// Address differences between Firefox and other browsers.
//

hr {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
}

//
// Address styling not present in IE 8/9.
//

mark {
  background: #ff0;
  color: #000;
}

//
// Correct font family set oddly in Safari 5 and Chrome.
//

code,
kbd,
pre,
samp {
  font-family: monospace, serif;
  font-size: 1em;
}

//
// Improve readability of pre-formatted text in all browsers.
//

pre {
  white-space: pre-wrap;
}

//
// Set consistent quote types.
//

q {
  quotes: \"\\201C\" \"\\201D\" \"\\2018\" \"\\2019\";
}

//
// Address inconsistent and variable font size in all browsers.
//

small {
  font-size: 80%;
}

//
// Prevent `sub` and `sup` affecting `line-height` in all browsers.
//

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sup {
  top: -0.5em;
}

sub {
  bottom: -0.25em;
}

// ==========================================================================
// Embedded content
// ==========================================================================

//
// Remove border when inside `a` element in IE 8/9.
//

img {
  border: 0;
}

//
// Correct overflow displayed oddly in IE 9.
//

svg:not(:root) {
  overflow: hidden;
}

// ==========================================================================
// Figures
// ==========================================================================

//
// Address margin not present in IE 8/9 and Safari 5.
//

figure {
  margin: 0;
}

// ==========================================================================
// Forms
// ==========================================================================

//
// Define consistent border, margin, and padding.
//

fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}

//
// 1. Correct `color` not being inherited in IE 8/9.
// 2. Remove padding so people aren't caught out if they zero out fieldsets.
//

legend {
  border: 0; // 1
  padding: 0; // 2
}

//
// 1. Correct font family not being inherited in all browsers.
// 2. Correct font size not being inherited in all browsers.
// 3. Address margins set differently in Firefox 4+, Safari 5, and Chrome.
//

button,
input,
select,
textarea {
  font-family: inherit; // 1
  font-size: 100%; // 2
  margin: 0; // 3
}

//
// Address Firefox 4+ setting `line-height` on `input` using `!important` in
// the UA stylesheet.
//

button,
input {
  line-height: normal;
}

//
// Address inconsistent `text-transform` inheritance for `button` and `select`.
// All other form control elements do not inherit `text-transform` values.
// Correct `button` style inheritance in Chrome, Safari 5+, and IE 8+.
// Correct `select` style inheritance in Firefox 4+ and Opera.
//

button,
select {
  text-transform: none;
}

//
// 1. Avoid the WebKit bug in Android 4.0.* where (2) destroys native `audio`
//    and `video` controls.
// 2. Correct inability to style clickable `input` types in iOS.
// 3. Improve usability and consistency of cursor style between image-type
//    `input` and others.
//

button,
html input[type=\"button\"], // 1
input[type=\"reset\"],
input[type=\"submit\"] {
  -webkit-appearance: button; // 2
  cursor: pointer; // 3
}

//
// Re-set default cursor for disabled elements.
//

button[disabled],
html input[disabled] {
  cursor: default;
}

//
// 1. Address box sizing set to `content-box` in IE 8/9/10.
// 2. Remove excess padding in IE 8/9/10.
//

input[type=\"checkbox\"],
input[type=\"radio\"] {
  box-sizing: border-box; // 1
  padding: 0; // 2
}

//
// 1. Address `appearance` set to `searchfield` in Safari 5 and Chrome.
// 2. Address `box-sizing` set to `border-box` in Safari 5 and Chrome
//    (include `-moz` to future-proof).
//

input[type=\"search\"] {
  -webkit-appearance: textfield; // 1
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box; // 2
  box-sizing: content-box;
}

//
// Remove inner padding and search cancel button in Safari 5 and Chrome
// on OS X.
//

input[type=\"search\"]::-webkit-search-cancel-button,
input[type=\"search\"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

//
// Remove inner padding and border in Firefox 4+.
//

button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}

//
// 1. Remove default vertical scrollbar in IE 8/9.
// 2. Improve readability and alignment in all browsers.
//

textarea {
  overflow: auto; // 1
  vertical-align: top; // 2
}

// ==========================================================================
// Tables
// ==========================================================================

//
// Remove most spacing between table cells.
//

table {
  border-collapse: collapse;
  border-spacing: 0;
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/normalize.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/normalize.less");
    }
}
