var data = $.getJSON('index.php', function (data) {

	var header = React.createElement("header", null);
	
	

	var qText = React.createElement("h1", null, data['question']['qText']);
	var arrowLeft = React.createElement("i", {className:"fa fa-chevron-left fa-2x move_left"});
	var arrowRight = React.createElement("i", {className:"fa fa-chevron-right fa-2x move_right"});
	var buttonLeft = React.createElement("button", {className: "arrow-btn"}, arrowLeft);
	var buttonRight = React.createElement("button", {className: "arrow-btn"}, arrowRight);

	var content = React.createElement('div', {className: "content"}, qText, buttonLeft, buttonRight);

	var footer = React.createElement("footer", null);


	var container = React.createElement("div", {className: "container"}, header, content, footer); 

	ReactDOM.render(container, document.getElementById("root"));
	
});

// выяснить, почему у меня не получается вызвать свойство объекта responseText и как это сделать
console.log (data);