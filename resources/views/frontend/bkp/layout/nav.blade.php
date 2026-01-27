<?php  $url =Request::url(); $split =array();$split = explode("/",$url); $cnt =count($split); if($cnt>=4){$page =$split[3];} else {$page ='';}?>

<li><a class="@if($page=='home')active @endif" href="/home" id="navmenubar"> Home </a></li>
<li><a class="@if($page=='about')active @endif" href="/about" id="navmenubar"> About Us </a></li>
<li><a class="@if($page=='services')active @endif" href="/services" id="navmenubar"> Services </a></li>
<li><a class="@if($page=='work')active @endif" href="/work" id="navmenubar"> Work  </a></li>
<li><a class="@if($page=='clients')active @endif" href="/clients" id="navmenubar"> Clients  </a></li>
<li><a class="@if($page=='career')active @endif" href="/career" id="navmenubar"> Career </a></li>				
<li><a class="@if($page=='contact-us')active @endif" href="/contact-us" id="navmenubar"> Contact </a></li>