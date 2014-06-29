<nav class="subnav">
<ul class="nav-pills categorymenu container">
<li> <a <?php if(isset($page)){ if ($page == lang('home')){echo "class=\"active\""; }}?>  href="<?=base_url()?>"><i class="icon-home icon-white font18"></i> <span> Home</span></a>
   
</li>
<li><a <?php if(isset($page)){ if ($page == lang('themes')){echo "class=\"active\""; } }?> >Themes</a>
    <div>
        <ul>
            <li><a href="<?=base_url()?>themes/browse/all">All Files</a> </li>
            <li><a href="<?=base_url()?>themes/browse/popular">Popular Themes</a> </li>
            <li><a href="<?=base_url()?>themes/browse/latest">Newest Themes</a> </li>
            <li><a href="<?=base_url()?>themes/browse/featured">Featured Themes</a> </li>
            <li><a href="<?=base_url()?>themes/browse/bootstrap3">Version 3.x.x</a> </li>
            <li><a href="<?=base_url()?>themes/browse/bootstrap2">Version 2.x.x</a> </li>
        </ul>
        <ul>
            <li><img style="display:block" src="<?=base_url().RES_DIR?>/img/responsive-designs.png" alt="Responsive Bootstrap Themes" title="Bootstrap Templates" > </li>
        </ul>
    </div>
</li>
<li><a <?php if(isset($page)){if ($page == lang('categories')){echo "class=\"active\""; } }?>>Categories</a>
    <div>
        <ul>
            <li><a href="<?=base_url()?>category/browse/admin">Admin Dashboards</a> </li>
            <li><a href="<?=base_url()?>category/browse/e-commerce">E-Commerce</a> </li>
            <li><a href="<?=base_url()?>category/browse/business">Business/Corporate</a> </li>
            <li><a href="<?=base_url()?>category/browse/portfolio">Portfolio/Resume</a> </li>
            <li><a href="<?=base_url()?>category/browse/magazines">Magazines</a> </li>
            <li><a href="<?=base_url()?>category/browse/landing-pages">Landing Page</a> </li>
            <li><a href="<?=base_url()?>category/browse/photography">Photography</a> </li>
        </ul>
        <ul>
            <li><img style="display:block" src="<?=base_url().RES_DIR?>/img/designers.png" alt="Built by Bootstrap Designers" title="Theme Categories" > </li>
        </ul>
    </div>
</li>
<li><a <?php if ($this->uri->segment(3) == 'how-it-works' OR $this->uri->segment(3) == 'payment-rates' OR $this->uri->segment(3) == 'affiliates-program' OR $this->uri->segment(3) == 'sell'){ echo "class=\"active\""; }?> href="<?=base_url()?>pages/browse/how-it-works">How it Works</a>
</li>

<li>
<a <?php if ($this->uri->segment(3) == 'sell-themes'){echo "class=\"active\""; }?> href="<?=base_url()?>pages/browse/sell-themes">Start Selling</a>

</li>

<li>
<a <?php if ($this->uri->segment(2) == 'faqs'){echo "class=\"active\""; }?>>Help</a>
<div>
<ul>
    <li><a href="<?=base_url()?>pages/faqs">FAQs</a> </li>
    <li><a href="http://support.thememisty.com" target="_blank">Knowledgebase </a> </li>
    </ul>
 </div>   
    </li>

 
</ul>
</nav>