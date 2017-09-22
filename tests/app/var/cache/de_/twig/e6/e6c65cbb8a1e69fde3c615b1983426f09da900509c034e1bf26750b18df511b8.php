<?php

/* node_modules/fsevents/node_modules/wide-align/README.md */
class __TwigTemplate_ab659705e5a230447e3983c6967bf40320b378ea3021bf0fc4a6563344ce3ec5 extends Twig_Template
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
        $__internal_b76f98b2b80ef5c18eb08f47727c1706a172074ddddd587eff1c73de0dc1ceec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76f98b2b80ef5c18eb08f47727c1706a172074ddddd587eff1c73de0dc1ceec->enter($__internal_b76f98b2b80ef5c18eb08f47727c1706a172074ddddd587eff1c73de0dc1ceec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/wide-align/README.md"));

        // line 1
        echo "wide-align
----------

A wide-character aware text alignment function for use in terminals / on the
console.

### Usage

```
var align = require('wide-align')

// Note that if you view this on a unicode console, all of the slashes are
// aligned. This is because on a console, all narrow characters are
// an en wide and all wide characters are an em. In browsers, this isn't
// held to and wide characters like \"古\" can be less than two narrow
// characters even with a fixed width font.

console.log(align.center('abc', 10))     // '   abc    '
console.log(align.center('古古古', 10))  // '  古古古  '
console.log(align.left('abc', 10))       // 'abc       '
console.log(align.left('古古古', 10))    // '古古古    '
console.log(align.right('abc', 10))      // '       abc'
console.log(align.right('古古古', 10))   // '    古古古'
```

### Functions

#### `align.center(str, length)` → `str`

Returns *str* with spaces added to both sides such that that it is *length*
chars long and centered in the spaces.

#### `align.left(str, length)` → `str`

Returns *str* with spaces to the right such that it is *length* chars long.

### `align.right(str, length)` → `str`

Returns *str* with spaces to the left such that it is *length* chars long.

### Origins

These functions were originally taken from 
[cliui](https://npmjs.com/package/cliui). Changes include switching to the
MUCH faster pad generation function from
[lodash](https://npmjs.com/package/lodash), making center alignment pad
both sides and adding left alignment.
";
        
        $__internal_b76f98b2b80ef5c18eb08f47727c1706a172074ddddd587eff1c73de0dc1ceec->leave($__internal_b76f98b2b80ef5c18eb08f47727c1706a172074ddddd587eff1c73de0dc1ceec_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/wide-align/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("wide-align
----------

A wide-character aware text alignment function for use in terminals / on the
console.

### Usage

```
var align = require('wide-align')

// Note that if you view this on a unicode console, all of the slashes are
// aligned. This is because on a console, all narrow characters are
// an en wide and all wide characters are an em. In browsers, this isn't
// held to and wide characters like \"古\" can be less than two narrow
// characters even with a fixed width font.

console.log(align.center('abc', 10))     // '   abc    '
console.log(align.center('古古古', 10))  // '  古古古  '
console.log(align.left('abc', 10))       // 'abc       '
console.log(align.left('古古古', 10))    // '古古古    '
console.log(align.right('abc', 10))      // '       abc'
console.log(align.right('古古古', 10))   // '    古古古'
```

### Functions

#### `align.center(str, length)` → `str`

Returns *str* with spaces added to both sides such that that it is *length*
chars long and centered in the spaces.

#### `align.left(str, length)` → `str`

Returns *str* with spaces to the right such that it is *length* chars long.

### `align.right(str, length)` → `str`

Returns *str* with spaces to the left such that it is *length* chars long.

### Origins

These functions were originally taken from 
[cliui](https://npmjs.com/package/cliui). Changes include switching to the
MUCH faster pad generation function from
[lodash](https://npmjs.com/package/lodash), making center alignment pad
both sides and adding left alignment.
", "node_modules/fsevents/node_modules/wide-align/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/wide-align/README.md");
    }
}
