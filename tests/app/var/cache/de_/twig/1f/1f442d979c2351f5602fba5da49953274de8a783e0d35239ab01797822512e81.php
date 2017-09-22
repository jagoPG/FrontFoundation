<?php

/* node_modules/fsevents/node_modules/jsbn/README.md */
class __TwigTemplate_5c343dcd4f6e7187d4cd34c45053cf2c9ce2796cc59a6dea304d43da86236d56 extends Twig_Template
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
        $__internal_41bc482472e925055ec53aac58e908106cf05dfae24536ca4e3a8470221bfb80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41bc482472e925055ec53aac58e908106cf05dfae24536ca4e3a8470221bfb80->enter($__internal_41bc482472e925055ec53aac58e908106cf05dfae24536ca4e3a8470221bfb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/jsbn/README.md"));

        // line 1
        echo "# jsbn: javascript big number

[Tom Wu's Original Website](http://www-cs-students.stanford.edu/~tjw/jsbn/)

I felt compelled to put this on github and publish to npm. I haven't tested every other big integer library out there, but the few that I have tested in comparison to this one have not even come close in performance. I am aware of the `bi` module on npm, however it has been modified and I wanted to publish the original without modifications. This is jsbn and jsbn2 from Tom Wu's original website above, with the modular pattern applied to prevent global leaks and to allow for use with node.js on the server side.

## usage

    var BigInteger = require('jsbn');
    
    var a = new BigInteger('91823918239182398123');
    alert(a.bitLength()); // 67


## API

### bi.toString()

returns the base-10 number as a string

### bi.negate()

returns a new BigInteger equal to the negation of `bi`

### bi.abs

returns new BI of absolute value

### bi.compareTo



### bi.bitLength



### bi.mod



### bi.modPowInt



### bi.clone



### bi.intValue



### bi.byteValue



### bi.shortValue



### bi.signum



### bi.toByteArray



### bi.equals



### bi.min



### bi.max



### bi.and



### bi.or



### bi.xor



### bi.andNot



### bi.not



### bi.shiftLeft



### bi.shiftRight



### bi.getLowestSetBit



### bi.bitCount



### bi.testBit



### bi.setBit



### bi.clearBit



### bi.flipBit



### bi.add



### bi.subtract



### bi.multiply



### bi.divide



### bi.remainder



### bi.divideAndRemainder



### bi.modPow



### bi.modInverse



### bi.pow



### bi.gcd



### bi.isProbablePrime


";
        
        $__internal_41bc482472e925055ec53aac58e908106cf05dfae24536ca4e3a8470221bfb80->leave($__internal_41bc482472e925055ec53aac58e908106cf05dfae24536ca4e3a8470221bfb80_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/jsbn/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# jsbn: javascript big number

[Tom Wu's Original Website](http://www-cs-students.stanford.edu/~tjw/jsbn/)

I felt compelled to put this on github and publish to npm. I haven't tested every other big integer library out there, but the few that I have tested in comparison to this one have not even come close in performance. I am aware of the `bi` module on npm, however it has been modified and I wanted to publish the original without modifications. This is jsbn and jsbn2 from Tom Wu's original website above, with the modular pattern applied to prevent global leaks and to allow for use with node.js on the server side.

## usage

    var BigInteger = require('jsbn');
    
    var a = new BigInteger('91823918239182398123');
    alert(a.bitLength()); // 67


## API

### bi.toString()

returns the base-10 number as a string

### bi.negate()

returns a new BigInteger equal to the negation of `bi`

### bi.abs

returns new BI of absolute value

### bi.compareTo



### bi.bitLength



### bi.mod



### bi.modPowInt



### bi.clone



### bi.intValue



### bi.byteValue



### bi.shortValue



### bi.signum



### bi.toByteArray



### bi.equals



### bi.min



### bi.max



### bi.and



### bi.or



### bi.xor



### bi.andNot



### bi.not



### bi.shiftLeft



### bi.shiftRight



### bi.getLowestSetBit



### bi.bitCount



### bi.testBit



### bi.setBit



### bi.clearBit



### bi.flipBit



### bi.add



### bi.subtract



### bi.multiply



### bi.divide



### bi.remainder



### bi.divideAndRemainder



### bi.modPow



### bi.modInverse



### bi.pow



### bi.gcd



### bi.isProbablePrime


", "node_modules/fsevents/node_modules/jsbn/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/jsbn/README.md");
    }
}
