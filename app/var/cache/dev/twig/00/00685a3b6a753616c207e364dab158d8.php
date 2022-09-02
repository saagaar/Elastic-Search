<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/image/upload-manual.html.twig */
class __TwigTemplate_0ab1cf80e687db63e6ac401b3cb7e77b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/image/upload-manual.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/image/upload-manual.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/image/upload-manual.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Manual Upload !";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
body
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:100%;
 font-family: \"Myriad Pro\",\"Helvetica Neue\",Helvetica,Arial,Sans-Serif;
 background-color:#34495E;
}
#wrapper
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:995px;
 min-height:200px;
}
#wrapper h1
{
 margin-top:50px;
 font-size:45px;
 color:#FDF2E9;
}
#wrapper h1 p
{
 font-size:18px;
}
#text_div input[type=\"text\"]
{
 width:300px;
 height:35px;
 padding:10px;
 border:1px solid #a5ccba;  
}
#text_div input[type=\"submit\"]
{
 width:100px;
 height:35px;
 margin-top:5px;
 background:none;
 border:1px solid #d5e7e7;
 color:grey;
 font-weight:bold;
}
#text_div img
{
 width:200px;
}
</style>

<div class=\"pricing-header p-3 pb-md-4 mx-auto text-center\">
      <h1 class=\"display-5 fw-normal\">Direct Image Upload </h1>
      <p class=\"fs-5 text-muted\">Upload image to make it available to the users. </p>
    </div>
 <div class=\"col-12\">
        <div class=\"card mb-4 rounded-3 shadow-sm\">
          <div class=\"card-header py-3\">
             <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
\t\t\t\t  <li class=\"nav-item\" role=\"presentation\">
\t\t\t\t    <a class=\"nav-link \" id=\"home-tab\"  href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("image_upload_url");
        echo "\">Upload By URL</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\" role=\"presentation\">
\t\t\t\t    <a class=\"nav-link active\" href=\"#\" >Upload File</a>
\t\t\t\t  </li>
\t\t\t\t 
\t\t\t\t</ul>
          </div>
         <div class=\"card-body\">
            <div class=\"tab-content\" id=\"myTabContent\">
\t\t\t\t\t  <div class=\"tab-pane fade show active\" id=\"home-tab-pane\" role=\"tabpanel\" aria-labelledby=\"home-tab\" tabindex=\"0\">

\t\t\t\t\t  \t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t  <symbol id=\"check-circle-fill\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t    <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\"/>
\t\t\t\t\t\t  </symbol>
\t\t\t\t\t\t  <symbol id=\"info-fill\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t    <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\"/>
\t\t\t\t\t\t  </symbol>
\t\t\t\t\t\t  <symbol id=\"exclamation-triangle-fill\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t    <path d=\"M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
\t\t\t\t\t\t  </symbol>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["uploadImage"]) || array_key_exists("uploadImage", $context) ? $context["uploadImage"] : (function () { throw new RuntimeError('Variable "uploadImage" does not exist.', 89, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t  \t\t<div id=\"wrapper col-md-12\">
\t\t\t\t\t  \t\t\t<div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\">
\t\t\t\t\t\t\t\t   <div>
\t\t\t\t\t\t\t\t  \t<strong>Info!</strong> Please use full Absolute image URL to import. (Remove Query Strings if any )
\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t \t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row mt-2\">
\t\t\t\t\t\t\t\t\t  <div class=\"col-sm-12 col-md-6 col-lg-6 mx-auto checkImageURL\">
\t\t\t\t\t\t\t\t\t\t  \t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t  \t <div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t \t  \t";
        // line 103
        echo "\t\t\t\t\t\t\t\t\t\t\t \t  \t";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["uploadImage"]) || array_key_exists("uploadImage", $context) ? $context["uploadImage"] : (function () { throw new RuntimeError('Variable "uploadImage" does not exist.', 103, $this->source); })()), "image_url", [], "any", false, false, false, 103), 'row', ["id" => "image_url"]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t \t</div>
\t\t\t\t\t\t\t\t\t\t\t \t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t  <div id=\"text_div\">
\t\t\t\t\t\t\t\t\t\t\t\t    \t<input type=\"submit\" name=\"get_image\" value=\"Preview\" id=\"submitImageUrl\">
\t\t\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row mt-2\">
\t\t\t\t\t\t\t\t\t  <div class=\"col-sm-12 col-md-6 col-lg-6 mx-auto\">
\t\t\t\t\t\t\t\t\t    <div class=\"d-flex flex-row justify-content-center \" id=\"imagePreviewParent\">
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row mt-2\">
\t\t\t\t\t\t\t\t\t  <div class=\"col-sm-12 col-md-6 col-lg-6 mx-auto\">
\t\t\t\t\t\t\t\t\t     \t<div class=\"form-group\">
\t\t\t\t\t\t\t                    <label for=\"tags\">Tags</label>
\t\t\t\t\t\t\t                   ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["uploadImage"]) || array_key_exists("uploadImage", $context) ? $context["uploadImage"] : (function () { throw new RuntimeError('Variable "uploadImage" does not exist.', 123, $this->source); })()), "tags", [], "any", false, false, false, 123), 'row');
        echo "
\t\t\t\t\t\t\t                  ";
        // line 126
        echo "\t\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t <div class=\"row mt-2\">
\t\t\t\t\t\t\t\t\t  <div class=\"col-sm-12 col-md-6 col-lg-6 mx-auto\">
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t     <div class=\"form-group\">
\t\t\t\t\t\t                  <label for=\"provider\">Provider </label>
\t\t\t\t\t\t               ";
        // line 137
        echo "\t\t\t\t\t\t                   ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["uploadImage"]) || array_key_exists("uploadImage", $context) ? $context["uploadImage"] : (function () { throw new RuntimeError('Variable "uploadImage" does not exist.', 137, $this->source); })()), "provider", [], "any", false, false, false, 137), 'row');
        echo "
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t <div class=\"row mt-2\">
\t\t\t\t\t\t\t\t\t  <div class=\"col-sm-12 col-md-4 col-lg-4 mx-auto\">
\t\t\t\t\t\t\t\t\t  \t<input type=\"submit\" class=\"  btn  btn-primary btn-xl bg-primary\" value=\"Save\">
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t   ";
        // line 148
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["uploadImage"]) || array_key_exists("uploadImage", $context) ? $context["uploadImage"] : (function () { throw new RuntimeError('Variable "uploadImage" does not exist.', 148, $this->source); })()), 'form_end');
        echo "
\t\t\t\t  </div>
\t\t\t\t</div>
      </div>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/image/upload-manual.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 148,  230 => 137,  220 => 126,  216 => 123,  192 => 103,  176 => 89,  150 => 66,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Manual Upload !{% endblock %}

{% block body %}
<style>
body
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:100%;
 font-family: \"Myriad Pro\",\"Helvetica Neue\",Helvetica,Arial,Sans-Serif;
 background-color:#34495E;
}
#wrapper
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:995px;
 min-height:200px;
}
#wrapper h1
{
 margin-top:50px;
 font-size:45px;
 color:#FDF2E9;
}
#wrapper h1 p
{
 font-size:18px;
}
#text_div input[type=\"text\"]
{
 width:300px;
 height:35px;
 padding:10px;
 border:1px solid #a5ccba;  
}
#text_div input[type=\"submit\"]
{
 width:100px;
 height:35px;
 margin-top:5px;
 background:none;
 border:1px solid #d5e7e7;
 color:grey;
 font-weight:bold;
}
#text_div img
{
 width:200px;
}
</style>

<div class=\"pricing-header p-3 pb-md-4 mx-auto text-center\">
      <h1 class=\"display-5 fw-normal\">Direct Image Upload </h1>
      <p class=\"fs-5 text-muted\">Upload image to make it available to the users. </p>
    </div>
 <div class=\"col-12\">
        <div class=\"card mb-4 rounded-3 shadow-sm\">
          <div class=\"card-header py-3\">
             <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
\t\t\t\t  <li class=\"nav-item\" role=\"presentation\">
\t\t\t\t    <a class=\"nav-link \" id=\"home-tab\"  href=\"{{path('image_upload_url')}}\">Upload By URL</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\" role=\"presentation\">
\t\t\t\t    <a class=\"nav-link active\" href=\"#\" >Upload File</a>
\t\t\t\t  </li>
\t\t\t\t 
\t\t\t\t</ul>
          </div>
         <div class=\"card-body\">
            <div class=\"tab-content\" id=\"myTabContent\">
\t\t\t\t\t  <div class=\"tab-pane fade show active\" id=\"home-tab-pane\" role=\"tabpanel\" aria-labelledby=\"home-tab\" tabindex=\"0\">

\t\t\t\t\t  \t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t  <symbol id=\"check-circle-fill\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t    <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\"/>
\t\t\t\t\t\t  </symbol>
\t\t\t\t\t\t  <symbol id=\"info-fill\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t    <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\"/>
\t\t\t\t\t\t  </symbol>
\t\t\t\t\t\t  <symbol id=\"exclamation-triangle-fill\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t    <path d=\"M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
\t\t\t\t\t\t  </symbol>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t {{ form_start(uploadImage) }}
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t  \t\t<div id=\"wrapper col-md-12\">
\t\t\t\t\t  \t\t\t<div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\">
\t\t\t\t\t\t\t\t   <div>
\t\t\t\t\t\t\t\t  \t<strong>Info!</strong> Please use full Absolute image URL to import. (Remove Query Strings if any )
\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t \t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row mt-2\">
\t\t\t\t\t\t\t\t\t  <div class=\"col-sm-12 col-md-6 col-lg-6 mx-auto checkImageURL\">
\t\t\t\t\t\t\t\t\t\t  \t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t  \t <div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t \t  \t{#<input type=\"text\" class=\"\" name=\"image_url\" placeholder=\"Enter Image URL\">#}
\t\t\t\t\t\t\t\t\t\t\t \t  \t{{ form_row(uploadImage.image_url,{'id':'image_url'}) }}
\t\t\t\t\t\t\t\t\t\t\t \t</div>
\t\t\t\t\t\t\t\t\t\t\t \t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t  <div id=\"text_div\">
\t\t\t\t\t\t\t\t\t\t\t\t    \t<input type=\"submit\" name=\"get_image\" value=\"Preview\" id=\"submitImageUrl\">
\t\t\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row mt-2\">
\t\t\t\t\t\t\t\t\t  <div class=\"col-sm-12 col-md-6 col-lg-6 mx-auto\">
\t\t\t\t\t\t\t\t\t    <div class=\"d-flex flex-row justify-content-center \" id=\"imagePreviewParent\">
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row mt-2\">
\t\t\t\t\t\t\t\t\t  <div class=\"col-sm-12 col-md-6 col-lg-6 mx-auto\">
\t\t\t\t\t\t\t\t\t     \t<div class=\"form-group\">
\t\t\t\t\t\t\t                    <label for=\"tags\">Tags</label>
\t\t\t\t\t\t\t                   {{ form_row(uploadImage.tags) }}
\t\t\t\t\t\t\t                  {#  <select multiple=\"multiple\" class=\" js-example-basic-multiple form-control\"  name=\"tags[]\" id=\"tags\">
\t\t\t\t\t\t                     \t</select> #}
\t\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t <div class=\"row mt-2\">
\t\t\t\t\t\t\t\t\t  <div class=\"col-sm-12 col-md-6 col-lg-6 mx-auto\">
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t     <div class=\"form-group\">
\t\t\t\t\t\t                  <label for=\"provider\">Provider </label>
\t\t\t\t\t\t               {#   <select class=\" select2-single-tags form-control\"  name=\"provider\" id=\"provider\">
\t\t\t\t\t\t                   </select>
\t\t\t\t\t\t                   #}
\t\t\t\t\t\t                   {{ form_row(uploadImage.provider) }}
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t <div class=\"row mt-2\">
\t\t\t\t\t\t\t\t\t  <div class=\"col-sm-12 col-md-4 col-lg-4 mx-auto\">
\t\t\t\t\t\t\t\t\t  \t<input type=\"submit\" class=\"  btn  btn-primary btn-xl bg-primary\" value=\"Save\">
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t   {{ form_end(uploadImage) }}
\t\t\t\t  </div>
\t\t\t\t</div>
      </div>



{% endblock %}
", "admin/image/upload-manual.html.twig", "/var/www/symfony/templates/admin/image/upload-manual.html.twig");
    }
}