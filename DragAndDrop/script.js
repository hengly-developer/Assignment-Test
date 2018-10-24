// $(document).ready(function(){
// 	$('li').draggable({
// 			containment:'document',
// 			revert:true
// 	});
// 	('#rightbox').droppable({
// 			hoverClass:'border',
// 			accept:'.item'
// 	});
// })


function drag(ev){
			ev.dataTransfer.setData("Text", ev.target.id);
		}
		function drag1(ev){
			ev.dataTransfer.setData("Text", ev.target.id);
		}


		function allowDrop(ev){
			ev.preventDefault();
		}

		function drop(ev){
			ev.preventDefault();
			var data = ev.dataTransfer.getData("Text");
			ev.target.appendChild(document.getElementById(data)) ;
		}