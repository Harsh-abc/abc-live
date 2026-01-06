<ul class="albumFilter text-center" id="">
	<?php  $url =Request::url(); $split =array();$split = explode("/",$url); $cnt =count($split); if($cnt>=4){$page =$split[3];} else {$page ='';}?>
	<li> <a class="@if($page=='works')active @endif" href="/works"> All <span>50</span> </a> </li>
	<li> <a class="@if($page=='uidesign-development')active @endif" href="/works/uidesign-development"> UI Design & Development <span>08</span> </a> </li>
	<li> <a class="@if($page=='interactive-solutions')active @endif" href="/works/interactive-solutions"> Interactive Solutions <span>60</span> </a>  </li>
	<li> <a class="@if($page=='branding')active @endif" href="/works/branding"> Branding <span>25</span> </a> </li>
	<li> <a class="@if($page=='app-development')active @endif" href="/works/app-development"> APP Development <span>30</span> </a> </li>
	<li> <a class="@if($page=='e-commerce')active @endif" href="/works/e-commerce"> E-Commerce <span>10</span> </a> </li>
	<li> <a class="@if($page=='digital-marketing')active @endif" href="/works/digital-marketing"> Digital Marketing <span>03</span> </a>  </li>
</ul>
 