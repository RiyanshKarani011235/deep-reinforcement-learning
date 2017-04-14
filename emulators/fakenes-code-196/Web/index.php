<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>FakeNES GT - Home Page</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<link href="images/favicon.png" rel="icon" type="image/png" />
		<link href="scripts/styles.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" language="javascript">
			function showRoadmap() {
				document.getElementById("showRoadmapPane").style.display = "none";
				document.getElementById("hideRoadmapPane").style.display = "block";
				document.getElementById("roadmapPane").style.display = "block";
		}
			function hideRoadmap() {
				document.getElementById("showRoadmapPane").style.display = "block";
				document.getElementById("hideRoadmapPane").style.display = "none";
				document.getElementById("roadmapPane").style.display = "none";
		}
		</script>
	</head>
	<body id="altbody">
		<div class="page">
			<div id="wrapper-header">
				<div id="header">&nbsp;</div>
			</div>
			<div id="wrapper-menu">
				<div id="menu">
					<ul>
						<li><a title="Click here to bring up a list of available downloads" href="http://sourceforge.net/projects/fakenes/files">Download</a></li>
						<li><a title="Click here to visit the community forum" href="http://sourceforge.net/apps/phpbb/fakenes/">Community</a></li>
						<li><a title="Click here to report a bug" href="http://sourceforge.net/tracker/?atid=426331&group_id=39844&func=browse">Report Bugs</a></li>
						<li><a title="Click here to submit a support request" href="http://sourceforge.net/tracker/?func=browse&group_id=39844&atid=426332">Get Support</a></li>
						<li><a title="Click here to submit feedback, or write a review" href="http://sourceforge.net/projects/fakenes/reviews/">Submit Feedback</a></li>
						<li><a title="Click here to talk to the developers via IRC" href="irc://irc.freenode.net/fakenes">Talk to Us</a></li>
						<li><a title="Click here to donate to the project" href="http://sourceforge.net/donate/index.php?group_id=39844">Donate</a></li>
					</ul>
				</div>
			</div>
			<div class="submenu">
				<a href="#about">About the project</a> &bull;
				<a href="#rss_feeds">RSS feeds</a> &bull;
				<a href="#development">Development</a> &bull;
				<a href="#support">Contact & support</a>
			</div>
			<div id="content">
				<div class="adTop">
					<div class="ad">
						<script type="text/javascript"><!--
						google_ad_client = "ca-pub-6989031378325404";
						/* FakeNES */
						google_ad_slot = "6938055026";
						google_ad_width = 468;
						google_ad_height = 60;
						//-->
						</script>
						<script type="text/javascript"
						src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
						</script>
					</div>
					<div><small>Please visit our sponsor to help support this project.</small></div>
				</div>
				<div>
					<a name="about"></a>
					<div><h2>About</h2></div>
					<div>
						<p>FakeNES is a highly portable, Open Source <a href="http://en.wikipedia.org/wiki/Nintendo_Entertainment_System">NES</a> and <a href="http://en.wikipedia.org/wiki/Famicom#Regional_differences">Famicom</a> emulator.</p>
						<p>It runs on all modern operating systems (such as Windows, Linux, and Mac) and has an actively maintained DOS port for enthusiasts. Support for phones and other mobile platforms is under development.</p>
						<p>Originally created in 2001 by a rag-tag team of developers from projects such as <a href="http://www.zsnes.com">ZSNES</a>, after ten years of sporadic development it has been forked by Digital Carat Group and almost completely rewritten. It has also been renamed to FakeNES GT, meaning "Good Times", to distinguish it from the original project.</p>
					</div>
					<div class="centered"><a href="http://onlamp.com/pub/a/onlamp/2005/09/15/what-is-opensource.html">What is Open Source?</a></div>
					<div>&nbsp;</div>
					<div class="centered">
						<div><img class="screenshot" src="images/screenshot.png" alt="Screenshot" /></div>
						<div><small>An early version of FakeNES GT running Snow Bros.</small></div>
					</div>
				</div>
				<div>
					<a name="rss_feeds"></a>
					<div><h2>RSS Feeds</h2></div>
					<div>
						<ul>
							<li><a href="http://sourceforge.net/api/file/index/project-id/39844/mtime/desc/limit/20/rss" title="Subscribe"><img src="images/rss.gif" /> File releases and downloads</a></li>
							<li><a href="http://sourceforge.net/projects/fakenes/reviews_feed.rss" title="Subscribe"><img src="images/rss.gif" /> Community feedback and reviews</a></li>
							<li><a href="http://cia.vc/stats/project/fakenes-gt/.rss" title="Subscribe"><img src="images/rss.gif" /> Subversion repository</a></li>
						</ul>
					</div>
				</div>
				<div>
					</div>
					<a name="development"></a>
					<div><h2>Development</div>
					<div>
						<ul>
							<li><a href="http://sourceforge.net/scm/?type=svn&group_id=39844">How to access the SVN repository</a></li>
							<li><a href="http://fakenes.svn.sourceforge.net">Browse the SVN repository</a></li>
							<li><a href="http://cia.vc/stats/project/fakenes-gt">See a detailed list of recent commits, with live feeds (CIA)</a></li>
							<li><a href="http://www.sourceforge.net/projects/fakenes">Access additional resources at SourceForge</a></li>
						</ul>
					</div>
					<div>Legacy content can be found in the abandoned <a href="http://fakenes.cvs.sourceforge.net">CVS repository</a> and <a href="http://cia.vc/stats/project/fakenes">CIA.vc page</a>.</div>
					<div>
					<div id="showRoadmapPane"><h3>Roadmap (<a href="javascript:showRoadmap()">Show</a>)</h3></div>
					<div id="hideRoadmapPane" style="display: none"><h3>Roadmap (<a href="javascript:hideRoadmap()">Hide</a>)</h3></div>
					<div>
					<pre class="roadmap" id="roadmapPane">
<?php include("roadmap.txt"); ?>
					</pre>
					</div>
				</div>
				<div>
					<a name="support"></a>
					<div><h2>Support</h2></div>
					<div>
						<p>We recommend that you first pay a visit to the <a href="http://sourceforge.net/apps/phpbb/fakenes/">community forum</a>. Other users may be able to respond to your issue faster than a developer, although not always. However, keep in mind that no support offered on the forum is officially sponsored, even that which is given by the developers themselves.</p>
						<p>The best way to get support is to submit a <a href="http://sourceforge.net/tracker/?atid=426331&group_id=39844&func=browse">bug report</a> or <a href="http://sourceforge.net/tracker/?func=browse&group_id=39844&atid=426332">support request</a> on our trackers. Eventually a developer will take a look at your issue, depending on the severity. <i>Responding to and resolving tracker items can take a long time, so this is not the fastest way to get support, only the most reliable.</i></p>
						<p>As we realize the tracker system may be too slow or confusing to some, we also have an IRC channel.</p>
						<p><a href="http://en.wikipedia.org/wiki/Internet_Relay_Chat">Internet Relay Chat</a>, or IRC, is basically a world-wide network of chat rooms, accessed by a special program called an IRC client. There are many clients available, so which one you use is up to you. The most popular client is <a href="http://www.mirc.com/">mIRC</a>, but it is only available for Windows and <a href="https://addons.mozilla.org/en-US/firefox/addon/chatzilla/">ChatZilla</a> works on any platform.</p>
						<p>You can access our channel by first installing and starting your client of choice, then creating a new connection to <b>server irc.freenode.net</b> and <b>channel #fakenes</b>. Clicking <a href="irc://irc.freenode.net/fakenes">this link</a> will usually automatically launch your client and log on to our channel. Once logged in, you will be able to speak with us in real-time.</p>
						<p>Please note that developers may be AFK (<b>A</b>way <b>F</b>rom <b>K</b>eyboard) at any given time.</p>
					</div>
				</div>
				<div class="adBottom">
					<div class="ad">
						<script type="text/javascript"><!--
						google_ad_client = "ca-pub-6989031378325404";
						/* FakeNES */
						google_ad_slot = "6938055026";
						google_ad_width = 468;
						google_ad_height = 60;
						//-->
						</script>
						<script type="text/javascript"
						src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
						</script>
					</div>
					<div><small>Please visit our sponsor to help support this project.</small></div>
				</div>
			</div>
			<div id="footer">
				<div class="footerLeft">Copyright &copy; 2011-2012 Digital Carat Group</div>
				<div class="footerRight">original design by <a title="derby web design" href="http://www.tristarwebdesign.co.uk">tri-star web design</a></div>
				<div class="break">&nbsp;</div>
			</div>
		</div><!-- div.page -->
	</body>
</html>
