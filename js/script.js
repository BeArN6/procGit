$(document).ready(function(){
	//Registration modal
	var modalWidth = $('.reg-modal-form').width();
	var modalFormMargin = modalWidth/2;
		$(".reg-modal-form").css({'margin-left':-modalFormMargin});

		$('.modal-reg').click(function(event){
			event.preventDefault();
			$(".overlay").fadeIn(600,function(){
				$('.reg-modal-form')
					.css('display', 'block')
					.animate({opacity: 1,top: "20%"},200)
			});
		});
		$('.modal-close,.overlay').click(function(){
			$(".reg-modal-form").animate({opacity: 1, top:"10%"}, 200,
				function(){
					$(this).css('display', 'none'); 
					$('.overlay').fadeOut(400);
				}
			);
	});
	//Login modal
	var modalWidth = $('.enter-modal-form').width();
	var modalFormMargin = modalWidth/2;
		$(".enter-modal-form").css({'margin-left':-modalFormMargin});

		$('.modal-login').click(function(event){
			event.preventDefault();
			$(".overlay").fadeIn(600,function(){
				$('.enter-modal-form')
					.css('display', 'block')
					.animate({opacity: 1,top: "20%"},200)
			});
		});
		$('.modal-close,.overlay').click(function(){
			$(".enter-modal-form").animate({opacity: 1, top:"10%"}, 200,
				function(){
					$(this).css('display', 'none'); 
					$('.overlay').fadeOut(400);
				}
			);
	});
	// Show and hide goal
	$(".new_goal_cont .show-goal").click(function(){
		$(this).css({
			"display": "none"
		});
		$(".new_goal_cont .hide-goal").css({
			"display": "block"
		});
	});
	$(".new_goal_cont .hide-goal").click(function(){
		$(this).css({
			"display": "none"
		});
		$(".new_goal_cont .show-goal").css({
			"display": "block"
		});
	});
	$(".new_subgoal_cont .show-goal").click(function(){
		$(this).css({
			"display": "none"
		});
		$(".new_subgoal_cont .hide-goal").css({
			"display": "block"
		});
	});
	$(".new_subgoal_cont .hide-goal").click(function(){
		$(this).css({
			"display": "none"
		});
		$(".new_subgoal_cont .show-goal").css({
			"display": "block"
		});
	});
	//Toggle list of goals
	$(".goal_1 .goal-name").on("click", function(){
		$(".goal_1 .subgoal-name").toggle(400);
	});
	$(".goal_2 .goal-name").on("click", function(){
		$(".goal_2 .subgoal-name").toggle(400);
	});
	//User nav
	$(".user-logo").click(function(){
		$(".user-nav").slideToggle(400);
	});
	//Fadeout span
	setTimeout(function(){$('.error, .success').fadeOut('fast')},5000);
	//Anchor href
	$("#scroll").click(function (event) {
        event.preventDefault();
        $('body,html').animate({scrollTop: 765}, 1500);
    });
});