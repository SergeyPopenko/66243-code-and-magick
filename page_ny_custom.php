<?php
/** 
  * The template for displaying all pages. 
  * 
  * This is the template that displays all pages by default. 
  * Please note that this is the WordPress construct of pages 
  * and that other 'pages' on your WordPress site will use a 
  * different template. 
  * 
  * @package butiko 
  * Template Name: Custom NY Page 
*/

$file_Ver = 0.2;
get_header();
$header_url = get_post_meta( get_the_ID(), 'butiko_page_header_image', true );
$page_title = get_post_meta( get_the_ID(), 'butiko_page_title', true );
$page_footer = get_post_meta( get_the_ID(), 'butiko_page_footer', true );
$page_description = get_post_meta( get_the_ID(), 'butiko_page_description', true );

if($header_url != "" ){    
	$header_type = "with-bg";
}
?>
<style type="text/css">
body,mark{color:#000}img,legend{border:0}*,body{margin:0}*,legend,td,th{padding:0}.n-y__header,.n-y__wrap,sub,sup{position:relative}.n-y__attr span,.n-y__header-cont{text-align:center;vertical-align:middle}html{font-family:sans-serif;-webkit-text-size-adjust:none;-moz-text-size-adjust:none;-ms-text-size-adjust:none}body{background:#fff;font-family:"PT Sans",sans-serif;font-weight:400}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,optgroup,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0;font-size:2em}mark{background:#ff0}small{font-size:80%}sub,sup{font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{-webkit-box-sizing:content-box;box-sizing:content-box;height:0;-moz-box-sizing:content-box}pre,textarea{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}.n-y__header-cont,.n-y__title{text-transform:capitalize;color:#fff}button,html input[type=button],input[type=reset],input[type=submit]{cursor:pointer;-webkit-appearance:button}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type=checkbox],input[type=radio]{-webkit-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{box-sizing:content-box;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;-webkit-appearance:textfield}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}fieldset{margin:0 2px;padding:.35em .625em .75em;border:1px solid silver}table{border-spacing:0;border-collapse:collapse}body,html{width:100%;min-height:100%}*{-webkit-box-sizing:border-box;box-sizing:border-box}.n-y__wrap,.site-content{padding:0 0 0 299px}.n-y__wrap{width:100%;margin:0 auto;font:24px/1 PT Sans,Arial,sans-serif;font-weight:500;color:#fff}.clearfix::after{display:table;clear:both;content:""}.n-y__header{min-height:200px;padding-bottom:31.666%;overflow:hidden;background:url(/sahola_n-y/img/n-y/header-bg.jpg) 50% 50% no-repeat;background-size:cover}.n-y__header-wrap{position:absolute;width:100%;height:100%;text-align:center}.n-y__header-wrap::before{display:inline-block;height:100%;vertical-align:middle;content:""}.n-y__header-cont{display:inline-block;width:72.464%;height:57.895%;min-width:250px;max-width:800px;min-height:130px;max-height:220px;padding:1.8% 15px;background:rgba(0,0,0,.5);font:24px/1 PT Sans,Arial,sans-serif;font-weight:500}.n-y__flex{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;height:100%;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-justify-content:space-around;-ms-flex-pack:distribute;justify-content:space-around}.n-y__title{margin:0;padding:0;font-size:36px;font-weight:500;line-height:1.2}.n-y__attr{margin:0;font-size:0;letter-spacing:0}.n-y__attr span{display:inline-block;width:50%;margin:0;padding:0 0 0 4.2%;font-size:16px;text-align:left}.n-y__attr span:first-child{padding:0 4.2% 0 0;text-align:right}.n-y__phone{margin:0;font:24px/1 PT Sans,Arial,sans-serif;font-weight:500;line-height:1.8;color:#fff}.n-y__section{background:#292929}.n-y__container{padding:70px 85px}.n-y__container p{font:16px/1 PT Sans,Arial,sans-serif;font-weight:500;line-height:1.8;color:#292929}@media (max-width:1124px){.n-y__header-cont{width:82.464%}}@media (max-width:1040px){.site-content{padding:0 0 0 299px}}@media (max-width:1024px){.n-y__wrap,.site-content{padding:0}.n-y__header-cont{width:72.464%}.n-y__attr span{font-size:14px}}@media (max-width:767px){.n-y__attr span,.n-y__attr span:first-child{padding:0;text-align:center}.n-y__title{font-size:24px}.n-y__attr span{width:100%;line-height:1.5}.n-y__phone{font-size:20px}.n-y__container{padding:40px 25px;font-size:14px}}@media (max-width:480px){.n-y__attr span{font-size:12px}.n-y__container{padding:30px 15px}}
</style>

    <div class="full-width">		
    	<div id="primary" class="content-area">		
    		<main id="main" class="site-main" role="main">
        	<div class="toper"></div>
    		  <header class="n-y__header">
            <div class="n-y__header-wrap">
              <div class="n-y__header-cont">
                <div class="n-y__flex">
                  <h1 class="n-y__title">Sahola New York</h1>
                  <p class="n-y__attr">
                    <span>356 Broadway, New York, NY, 10013</span>
                    <span>Mon-Fri: 9am-6pm | Sat: 9am-5pm</span>
                  </p>
                  <p class="n-y__phone">1-855-439-5250</p>  
                </div>
              </div>
            </div>
          </header>
          <section class="n-y__section">
            <div class="n-y__container">
            <p class="n-y__text">I was going to say something extremely rough to Lorem Ipsum, to its family, and I said to myself, "I can't do it. I just can't do it. It's inappropriate. It's not nice." Some people have an ability to write placeholder text... It's an art you're basically born with. You either have it or you don't. I think the only card she has is the Lorem card. You could see there was text coming out of her eyes, text coming out of her wherever. My placeholder text, I think, is going to end up being very good with women.</p>
            </div>
          </section>		
        </main>	
      </div>
    </div><?php		//wp_enqueue_script( 'jquery-validate-js', 'https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js', array('jquery'), $file_Ver, true );		//wp_enqueue_script( 'main-page-js', '/sahola_main/js/script.js', array('jquery'), $file_Ver, true );?><?php get_footer(); ?>