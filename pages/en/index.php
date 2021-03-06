<!--
  jQuery library
-->
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

<!--
  jCarousel library
-->
<script type="text/javascript" src="js/jcarousel/lib/jquery.jcarousel.pack.js"></script>

<!--
  GitHub commits widget
-->
<script type="text/javascript" src="js/github-commits-widget/github.commits.widget-3.js"></script>

<!--
  Github commits widget stylesheet
-->

<link rel="stylesheet" type="text/css" href="js/github-commits-widget/style.css" />

<!--
  jCarousel core stylesheet
-->
<link rel="stylesheet" type="text/css" href="js/jcarousel/lib/jquery.jcarousel.css" />
<!--
  jCarousel skin stylesheet
-->
<link rel="stylesheet" type="text/css" href="js/jcarousel/skins/tango/skin.css" />

<script type="text/javascript" src="js/jcarousel/lib/thickbox/thickbox.js"></script>
<link rel="stylesheet" href="js/jcarousel/lib/thickbox/thickbox.css" type="text/css" media="screen" />

<script type="text/javascript">
<!--
$(document).ready(function() {
    $("#mycarousel").jcarousel({
      'visible': 1,
      'scroll': 1,
      'wrap': 'both'
    });
});
//-->
</script>

<!-- Contents -->

      <div id="whatistitle" style="margin-bottom: 10px";>
	<h1>Share, Chat, Browse. Anonymously. On the Free&nbsp;Network.</h1>
      </div>
      <div class="whatis">
	<p>
	  Share files, chat on forums, browse and publish, anonymously and without fear of blocking or censorship! Then connect to your friends for even better security!
	  <br/>
	  <a href="whatis.html">Learn more!</a>
	</p>
      </div>

      <div id="screenshots_container">
	<div id="screenshot_nojs">
	     <a href="image/screenshot/browse.png"><img src="image/screenshot/browse.png"
	     alt="Bookmarks" width="383" height="309" /></a>
	     <p style="text-align: center;"><a href="screenshots.html">More Freenet screenshots</a></p>
	</div>
	<div id="screenshot_js" style="display: none;">
           <ul id="mycarousel" class="jcarousel-skin-tango">
             <li><a href="image/screenshot/browse.png" class="thickbox"><img src="image/screenshot/browse.png" width="383" height="311" alt="Bookmarks" /></a></li>
             <li><a href="image/screenshot/sone.png" class="thickbox"><img src="image/screenshot/sone.png" width="383" height="298" alt="Sone" /></a></li>
             <li><a href="image/screenshot/fms.png" class="thickbox"><img src="image/screenshot/fms.png" width="383" height="298" alt="FMS forum" /></a></li>
           </ul>
	</div>
      </div>


      <div id="default" class="whatis" style="clear:left; margin-top: 10px; color: red;">
      	   <p>We were unable to detect your Operating System. Please turn on javascript, or go to the <a href="download.html">download page</a> to install Freenet.</p>
      </div>

      <div id="windows" class="sprites download">
   	<a href="jnlp/FreenetInstaller.exe">
   	   <span id="software">Freenet</span>
   	   <span id="action">Download</span>
   	   <span id="version">0.7.5 for Windows</span>
   	</a>
      </div>

      <div id="macos" class="sprites download">
        <a href="download.html#nojws">
   	   <span id="software">Freenet</span>
   	   <span id="action">Install</span>
   	   <span id="version">0.7.5 for Mac OS</span>
   	</a>
      </div>
	
	<div id="unix">
	     <div class="download sprites">
	     	  <a href="download.html#nojws">
	     	     <span id="software">Freenet</span>
	     	     <span id="action">Install</span>
	     	     <span id="version">0.7.5 for Linux/Unix</span>
	     	  </a>
	     </div>
	     <p style="clear: left;">
		If it doesn't work, please refer to the 
	     	<a href="download.html#unix">installation instructions</a>. You may want to try <a href="http://freesocial.draketo.de/">this guide</a> to setting up Freenet and related software for chat etc.
	     </p>
	</div>
	
	<p style="clear:left; padding-left: 20px; font-size: 12px;"><a href="download.html">Installation instructions and other systems installers.</a></p>

    <div style="clear: both; padding-top: 20px;">
    	<div id="donate_button">
	     <h4>Make a donation</h4>
	     <p>We don't charge anyone to download and use Freenet, we're a non-profit organization who rely on your donations to survive.</p>
	     <p>Our current balance is <b>$MONEYBALANCE</b>.</p>
<!--	     <p>Our current balance of <b>$MONEYBALANCE</b> will pay for this server and our one paid developer for around another <b>MONEYDAYS days</b>.</p> -->
	     <p><a href="donate.html">Donate!</a></p>
	</div>
  <div id="testimonials">
<!--todo: random testimonial, as soon as we have enough-->
	<h4>Testimonials</h4>
<blockquote>I’ve been running pure darknet with 7 peers for months and it works well (without WoT or bigger downloads). Once I had 15 darknet peers and did not see much of a difference compared to a 15-peer opennet node. — Ratchet</blockquote>
  </div>
  <div id="news">
	<h4>Latest news</h4>

    <p>
      Release notes are posted in the <a href="https://emu.freenetproject.org/pipermail/devl/">devl archive</a>.
    </p>
	<p>
		  (27th September 2014) <a href="news.html#downloads">Recent download problems</a></br>
		  (9th August 2014) <a href="news.html#build01465">Freenet 0.7.5 build 1465 released</a><br/>
		  (12th July 2014) <a href="news.html#build01464">Freenet 0.7.5 build 1464 released</a><br/>
		  (14th June 2014) <a href="news.html#build01463">Freenet 0.7.5 build 1463 released</a><br/>
		  (26th May 2014) <a href="news.html#build01462">Freenet 0.7.5 build 1462 released</a><br/>
          </p>
    <p>
	  <a href="news.html">Older news</a>
	</p>
      </div>


    </div>

    <div id="commits" style="clear: both;">
        <h4>Latest developer activity</h4>
        <div id="latest-commits"></div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('#latest-commits').githubInfoWidget(
                { users: ['freenet', 'freenet'],
                  repos: ['fred', 'plugin-WebOfTrust'],
                  branches: ['next', 'master'],
                  last: 5, limitMessageTo: 50 });
        });
    </script>

      <script type="text/javascript">
  			 hideDiv("windows");
			 hideDiv("macos");
			 hideDiv("unix");
			 hideDiv("screenshot_nojs");
			 showDiv("screenshot_js");
			 // Try to detect if Sun Java 1.6.0 or higher is installed
			 var Java = PluginDetect.isMinVersion('Java', '1,6,0');
			 
			 // Os detection
			 var OSName="";
			 if (navigator.appVersion.indexOf("Win")!=-1)
			    OSName="windows";
			 else if (navigator.appVersion.indexOf("Mac")!=-1)
			      OSName="macos";
			 else if (navigator.appVersion.indexOf("X11")!=-1)
			      OSName="unix";
			 else if (navigator.appVersion.indexOf("Linux")!=-1)
			      OSName="unix";
			 
  			 if(OSName == "windows") {
				showDiv("windows");
				hideDiv("default");
  		 	 } else if (OSName != "") {
			       	showDiv(OSName);
				hideDiv("default");
			 } else {
			   	showDiv("windows");
				showDiv("macos");
				showDiv("unix");
				showDiv("default");
			 }
      </script>
