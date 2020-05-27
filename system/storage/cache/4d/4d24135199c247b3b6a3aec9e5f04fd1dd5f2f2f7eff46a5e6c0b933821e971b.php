<?php

/* common/header.twig */
class __TwigTemplate_b2105db45e543faee3bf1a58a06276fcd7498369b8eac3d675ce29ca82405642 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<!--HEADER-->
<meta charset=\"UTF-8\" />
<title>";
        // line 6
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 7
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<link href=\"view/javascript/bootstrap/css/bootstrap.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"view/javascript/bootstrap/js/bootstrap.js\" type=\"text/javascript\"></script>
<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" />
</head>
<body>";
    }

    public function getTemplateName()
    {
        return "common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/* <!--HEADER-->*/
/* <meta charset="UTF-8" />*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* <script type="text/javascript" src="view/javascript/jquery/jquery-2.1.1.min.js"></script>*/
/* <link href="view/javascript/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />*/
/* <script src="view/javascript/bootstrap/js/bootstrap.js" type="text/javascript"></script>*/
/* <link href="view/javascript/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />*/
/* <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />*/
/* <link rel="stylesheet" type="text/css" href="view/stylesheet/stylesheet.css" />*/
/* </head>*/
/* <body>*/
