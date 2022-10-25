<!DOCTYPE html>
<html>
<head>
	<title>HTML5 Quiz</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
	<div class="container">
		<header>
			<div class="pull-left">Exam Name Goes Here</div>
			<div class="pull-right"></div>
		</header>
<div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="#tab1">Information Tech</a></li>
        <li><a href="#tab2">Aptitude Test</a></li>
        <li><a href="#tab3">English</a></li>
        <li><a href="#tab4">Mathematics</a></li>
    </ul>

<div class="tab-content">
    <div id="tab1" class="tab active">
		<main>
			<form class="questionForm" id="q1" data-question="1">
				<h3>1. Which tag should be used to represent the "header" of a document?</h3>
				<ul>
					<li><input name="q1" type="radio" value="a" />&lt;head&gt;</li>
					<li><input name="q1" type="radio" value="b" />&lt;header&gt;</li>
					<li><input name="q1" type="radio" value="c" />&lt;heading&gt;</li>
					<li><input name="q1" type="radio" value="d" />&lt;main&gt;</li>
				</ul>
				<button id="previous">Previous</button><button id="submit">Next</button>
			</form>
			
			<form class="questionForm" id="q2" data-question="2">
				<h3>2.Which of the following is NOT a new feature of HTML5? </h3>
				<ul>
					<li><input name="q2" type="radio" value="a" />New Media Elements</li>
					<li><input name="q2" type="radio" value="b" />Form Types</li>
					<li><input name="q2" type="radio" value="c" />Local Storage</li>
					<li><input name="q2" type="radio" value="d" />Cookies</li>
				</ul>
				<button id="previous">Previous</button><button id="submit">Next</button>
			</form>
			
			<form class="questionForm" id="q3" data-question="3">
				<h3>3. Which element is the most appropriate to wrap around each blog post on a page?</h3>
				<ul>
					<li><input name="q3" type="radio" value="a" />&lt;section&gt;</li>
					<li><input name="q3" type="radio" value="b" />&lt;post&gt;</li>
					<li><input name="q3" type="radio" value="c" />&lt;article&gt;</li>
					<li><input name="q3" type="radio" value="d" />&lt;main&gt;</li>
				</ul>
				<button id="previous">Previous</button><button id="submit">Next</button>
			</form>
			
			<form class="questionForm" id="q4" data-question="4">
				<h3>4. Which HTML5 tag is used for sidebar content?</h3>
				<ul>
					<li><input name="q4" type="radio" value="a" />&lt;aside&gt;</li>
					<li><input name="q4" type="radio" value="b" />&lt;sidebar&gt;</li>
					<li><input name="q4" type="radio" value="c" />&lt;sub&gt;</li>
					<li><input name="q4" type="radio" value="d" />&lt;side&gt;</li>
				</ul>
				<button id="previous">Previous</button><button id="submit">Next</button>
			</form>
			
			<form class="questionForm" id="q5" data-question="5">
				<h3>5. Using canvas, which is used to color in a rectangle?</h3>
				<ul>
					<li><input name="q5" type="radio" value="a" />strokeStyle</li>
					<li><input name="q5" type="radio" value="b" />fillRect</li>
					<li><input name="q5" type="radio" value="c" />strokeFill</li>
					<li><input name="q5" type="radio" value="d" />rectFill</li>
				</ul>
				<button id="previous">Previous</button><button id="submit">Next</button>
			</form>
			
			<div id="results"></div>
			<br>
		</main>
		</div>
		<div id="tab2" class="tab">
        <p>Tab #2 content goes here!</p>
        <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
    </div>
 
    <div id="tab3" class="tab">
        <p>Tab #3 content goes here!</p>
        <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum ri.</p>
    </div>
 
    <div id="tab4" class="tab">
        <p>Tab #4 content goes here!</p>
        <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
    </div>
</div>
		<footer>
			<div class="pull-left">Total: 5 Questions</div>
			<div class="pull-right">Time: 2:23</div>
		</footer>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/quiz.js"></script>
</body>
</html>