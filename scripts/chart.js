
var CHART = function (_def) {
	var _pageClass = "page";
	
	function _PieChart(canvas, data, color){
		if(canvas){
			var ctx = canvas.getContext("2d");
			var lastend = 0;			
			var myTotal = 0;

			for (var e = 0; e < data.length; e++) {
			  myTotal += data[e];
			}

			for (var i = 0; i < data.length; i++) {
			  ctx.fillStyle = color[i];
			  ctx.beginPath();
			  ctx.moveTo(canvas.width / 2, canvas.height / 2);
			  ctx.arc(canvas.width / 2, canvas.height / 2, canvas.height / 2, lastend, lastend + (Math.PI * 2 * (data[i] / myTotal)), false);
			  ctx.lineTo(canvas.width / 2, canvas.height / 2);
			  ctx.fill();
			  lastend += Math.PI * 2 * (data[i] / myTotal);
			}
		}			
	}
		
	function _Text(canvas, title, x, y){
		if(canvas){
			var ctx = canvas.getContext("2d");
			ctx.font = "30px Arial";
			ctx.fillText(title,x, y);			
		}		
	}
	
	function _barGraph(canvas){
		if(canvas){
			var ctx = canvas.getContext("2d");		
			
			var value=[120,140,30,140,50,90,120,140,30,140,50,90, 10, 40, 95, 100,80,140,50,9];
			var width=20;
			var currx=30;
			ctx.fillStyle="#fff";
			var i = 0;
			var interval = setInterval(function(){
				if (i == value.length){
					clearInterval(interval);
					return;
				}
				var h=value[i];
				ctx.fillRect(currx,canvas.height-h,width,h);
				currx+=width+10;
				i++;
			}, 10);
		}
	}
	
    return {
		PieChart: _PieChart,
		Text: _Text,
		barGraph: _barGraph
    }
}("NAV CHART");


