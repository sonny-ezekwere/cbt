var score = 0; //Set score to 0
var total = 5; //Total number of questions
var point = 2; //Points per correct answer
var highest = total * point;

//Initializer
function init(){
	//set correct answers
	sessionStorage.setItem('a1','b');
	sessionStorage.setItem('a2','d');
	sessionStorage.setItem('a3','c');
	sessionStorage.setItem('a4','a');
	sessionStorage.setItem('a5','b');
}

$(document).ready(function(){
	
	$('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = $(this).attr('href');
 
        // Show/Hide Tabs
        //$('.tabs ' + currentAttrValue).show().siblings().hide();
			$('.tabs ' + currentAttrValue).slideDown(400).siblings().slideUp(400);
        // Change/remove current tab to active
        $(this).parent('li').addClass('active').siblings().removeClass('active');
        //e.preventDefault();
		});
	//Hide all questions
	$('.questionForm').hide();
	
	//Show first question
	$('#q1').show();
	
	$('.questionForm #submit').click(function(){
		//Get data attributes
		current = $(this).parents('form:first').data('question');
		next = $(this).parents('form:first').data('question')+1;
		//Hide all questions
		$('.questionForm').hide();
		//Show next question
		$('#q'+next+'').fadeIn(300);
		process(''+current+'');
		return false;
	});
	
	$('.questionForm #previous').click(function(){
		//Get data attributes
		current = $(this).parents('form:first').data('question');
		previous = $(this).parents('form:first').data('question')-1;
		//Hide all questions
		$('.questionForm').hide();
		//Show next question
		if(previous<=0){
			previous=1;
		}
		$('#q'+previous+'').fadeIn(300);
		process(''+current+'');
		return false;
	});
	e.preventDefault();
	 
});

//Process the answers
function process(n){
	//Get input value
	var submitted = $('input[name=q'+n+']:checked').val();
	if(submitted == sessionStorage.getItem('a'+n+'')){
			score = score + point;
	}
	
		
	if(n == total){	
		$('#results').html('<h3>Your final score is: '+score+' out of '+highest+'</h3><a href="index.html">Take Quiz Again</a>');
		if(score == highest){
			$('#results').append('<p>You are an HTML5 master!');
		} else if(score == highest - point || score == highest - point - point){
			$('#results').append('<p>Good Job!');
		}
	}
	return false;
}

//Add event listener
window.addEventListener('load',init,false);